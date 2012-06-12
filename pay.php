<?php
require_once 'config.php';

if (empty($_GET['order_id'])) {
	die("No such order");
}
$order_id = (int)$_GET['order_id'];

//sfirst, slast, amount, discount, total, payment_status.. and mroe
$statement = $db->query("SELECT * FROM orders WHERE order_id = " . (int)$order_id . " LIMIT 1");
$data = $statement->fetch(PDO::FETCH_ASSOC);

if ($data['payment_status'] != 'pending') {
	die("Wrong payment status for this order");
}


/**
 * The purpose of this page is to pay off the order
 */

if (!empty($_POST['submit_button'])) {
/*

$amount = "5.99";
AuthorizeNetDPM::directPostDemo($url, $api_login_id, $transaction_key, $amount, $md5_setting);
?>
*/

	if ($_POST['payment_type'] == 'Cheque') {
		$db->query("UPDATE orders SET payment_status = 'cheque' WHERE order_id = " . (int)$order_id . " LIMIT 1");
		die('We look forward to receiving your cheque.');
	}

	// Someone is trying to pay!
	require_once 'Payment/Process2.php';

	$cc = Payment_Process2_Type::factory('CreditCard');

	switch ($_POST['payment_type']) {
			case 'Visa':
				$cc->type = Payment_Process2_Type::CC_VISA;
				break;
				//TODO enumerate / map these
/*
            <option value="Visa">
              Visa
            </option>

            <option value="MasterCard">
              MasterCard
            </option>

            <option value="American Express">
              American Express
            </option>

            <option value="Discover">
              Discover
            </option>
*/
	}
	$cc->cardNumber = $_POST['UMcard'];
	$cc->expDate = $_POST['UMexpirMonth'] . "/" . $_POST['UMexpirYear'];
	$cc->cvv = $_POST['UMcvv2'];

	// Set options. These are processor-specific.
	// TODO Swap to real authorize.net :)
	$options = array(
		'randomResult' => true
	);

	// Get an instance of the processor
	$processor = Payment_Process::factory('Dummy', $options);

	// The data for our transaction.
	$data = array(
		'login' => "foo",
		'password' => "bar",
		'action' => Payment_Process2::ACTION_NORMAL,
		'amount' => $data['total']
	);

	// The credit card information
	// Process it
	$processor->setFrom($data);
	if (!$processor->setPayment($cc)) {
		throw new Payment_Process2_Exception("Payment data is invalid.");
	}
	$result = $processor->process();

	if ($result->isSuccess()) {
		//https://everyteencansucceed.com/cgi/attendee2.php

		$db->query("UPDATE orders SET payment_status = 'paid' WHERE order_id = " . (int)$order_id . " LIMIT 1");

		mail($_POST['UMcustemail'])
		die('Thanks for paying');

	} else {
		die("Failure: " . $result->getMessage());
	}
}


?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta name="generator" content="HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org">

  <title>Every Teen Can Registration</title>
  <meta name="description" content="Register for the Every Teen Can Succeed program to raise SAT scores, prepare for college, and enhance career education in Honolulu, Hawaii.">
  <meta name="keywords" content="Honolulu,Oahu,Test Prep programs,Hawaii,College Life,College Lifestyle,teens,teen succeed,succeed,team success,success,scholarships,SAT,SAT prep,PSAT prep,skill-building,education,college prep,college planning,student,every team,certification,college survival">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <meta charset="utf-8">
  <style type="text/css">
      body {
                background-color: #c6edff;              
        }

        table {
                background-color: white;
                width: 600px;
        }

        table th {
                width: 200px;
                border: 0;
                text-align: right;
                padding-right: 2.0em;
        }
        table td {
                width: 400px;
                border: 0 !important;
        }
        table td input {
                width: 98%;
        }
  </style>
</head>

<body>
  <div class="container">
    <center>
      <img src="hdrpg.png" usemap="#NotNamed" border="0"> <map name="NotNamed">
        <area name="Leilani" shape="rect" coords="1,0,148,150" href="leilani.html" alt="Meet Leilani, our Student Representative" title="Meet Leilani, our Student Representative">
      </map>

      <h1>Program Registration</h1>

      <p><i>Attendance is limited to available space; please register early</i></p>
    </center>

    <form name="epayform" action="" method="post" autocomplete="off">
	  <h2>Total</h2>
	  <table>
		<tr>
			<td>Amount</td><td><?php print $data['amount']; ?>%</td>
			<td>Discount</td><td><?php print $data['discount']; ?>%</td>
			<td>Total</td><td><?php print $data['total']; ?>%</td>
		</tr>
	</table>
      <h2>Payment Information</h2>

      <p><img border="0" src="visa.gif" width="44" height="28" hspace="3"> <img border="0" src="mastercard.gif" width="44" height="28" hspace="3"> <img border="0" src="amex.gif" width="44" height="28" hspace="3"> <img border="0" src="discover.gif" width="44" height="28" hspace="3"></p>

      <p><small>If paying by check please print this form and mail with payment to</small></p>

      <address>
         <small>Every Teen Can Succeed, 2509 Ala Wai Blvd. #801-A, Honolulu, HI 96815</small> 
      </address>

      <table>
        <tr>
          <th>Credit Card Type</th>

          <td><select size="1" name="payment_type">
            <option value="Visa">
              Visa
            </option>

            <option value="MasterCard">
              MasterCard
            </option>

            <option value="American Express">
              American Express
            </option>

            <option value="Discover">
              Discover
            </option>

            <option value="Cheque">
              Cheque
            </option>
          </select></td>
        </tr>

        <tr>
          <th>Name on Card</th>

          <td><input type="text" name="UMname" size="30"></td>
        </tr>

        <tr>
          <th>Card Billing Zipcode</th>

          <td><input type="text" name="UMzip" size="15"></td>
        </tr>

        <tr>
          <th>Email Address</th>

          <td><input type="email" name="UMcustemail" size="50" required="required"> <small>(to send receipt)</small></td>
        </tr>

        <tr>
          <th>Card Number</th>

          <td><input type="text" name="UMcard" size="17"></td>
        </tr>

        <tr>
          <th>Card Expiration  (MM)</th>

          <td><input type="text" name="UMexpirMonth" size="2" placeholder="01">/<input type="text" name="UMexpirYear" size="2" placeholder="13">/</td>
        </tr>

        <tr>
          <th>Card ID (CVV2/CID) Number</th>

          <td><input type="text" name="UMcvv2" size="5"> <a target="_blank" href="/cvv.htm"><small>What is the Card ID?</small></a></td>
        </tr>
      </table>

      <p>Call <i><b>Every Teen Can Succeed</b></i> at <b>(808) 372-3626</b> with any payment questions</p>
    </form>
  <p style="text-align: center"> <input type="submit" id="submit_button" name="submit_button" value="Pay"> <!--
<div><span id="siteseal"><script type="text/javascript" src="https://seal.starfieldtech.com/getSeal?sealID=TBUvlHEvPDG4JpKHHOGg9eSESBcvtVMEYDGLi8hIcneIHCU62QH4etkyZq0"></script></span>
<script type="text/JavaScript">var TFN='';var TFA='';var TFI='0';var TFL='0';var tf_RetServer="rt.trafficfacts.com";var tf_SiteId="fed17602acba26e1fd9083e89872beaa75503e5a";var tf_ScrServer=document.location.protocol+"//rt.trafficfacts.com/tf.php?k=fed17602acba26e1fd9083e89872beaa75503e5a;c=s;v=5";document.write(unescape('%3Cscript type="text/JavaScript" src="'+tf_ScrServer+'">%3C/script>'));</script><noscript><img src="http://rt.trafficfacts.com/ns.php?k=fed17602acba26e1fd9083e89872beaa75503e5a" height="1" width="1" alt=""/></noscript>
</div>
-->
    </p>
  </div>


</body>
</html>
