<?php
// This should be defined elsewhere in configuration. Included for illustrative purposes
$db = new PDO('mysql:host=localhost;dbname=testdb', 'username', 'password');

/** All of the things you would normally do to save this information to a database here :) */

/**
 * Keep this aligned with your 'products', but *always* maintained in the php code
 */
function payment_due($data) {
	$amount = 0.00;

/*
	<tr>
	  <td style="width: 10px"><input type="checkbox" name="iclass[ijulwai]" value="1"> </td>
	  <td>July 16 - July 21<br />5:00 - 7:00 PM</td>
	  <td>Waikiki Community Center</td>
	  <td>$190</td>
	</tr>
*/
	if (!empty($data['iclass']['ijulwai'])) {
		$amount += 190;
	}

/*
	<tr>
	  <td style="width: 10px"><input type="checkbox" name="iclass[iaugwai]" value="1"></td>
	  <td>August 20 - August 31<br />5:00 - 7:00 PM</td>
	  <td>Waikiki Community Center</td>
	  <td>$190</td>
	</tr>
*/
	if (!empty($data['iclass']['iaugwai'])) {
		$amount += 190;
	}

	// Add your products here!

	return $amount;
}

function discount_due($data) {
	$discount = 0;
	//If they choose that they are a StepUp Scholar, they must provide the graduating class year as 2013 - 2016. If they do so, they recieve a 10% discount.
	if ($data['stepup'] == 'yes') {
		if (in_array($data['grad'], array(2013, 2014, 2015, 2016)) {
			$discount += 10;
		}
	}

	//If the parents are military, there must be an Installation - I'd prefer that Rank and title be required. If they provide this info then they recieve a 10% discount.
	if ($data['military'] == 'yes') {
		if (!empty($data['installation']) && !empty($data['jobTitle']) && !empty($data['rank'])) {
			$discount += 10;
		}
	}

	//If they are IMCEA then they must provide an IMCEA Member Number - this is usually alpha-numeric with the first number Alpha. If they provide the number, then they recieve a 10% discount.
	if ($data['imcea'] == 'yes') {
		if (!empty($data['imceaNumber'])) {
			$discount += 10;
		}
	}


	return $discount;
}

function save(PDO $db, $data) {
	$required_fields = array('sfirst', 'slast'); // etc

	foreach ($required_fields as $required_field) {
		if (empty($data[$required_field])) {
			throw new Exception("Missing required field");
		}
	}


	$amount = payment_due($data);
	$discount = discount_due($data);
	$discounted_amount = round($amount * ($discount/100), 2);
	$total = round($amount - $discounted_amount);

	// You will want to customise this table with as much student data as possible!
	$args = array(
		$db->quote($data['sfirst']),
		$db->quote($data['slast']),
		$db->quote($amount),
		$db->quote($discount),
		$db->quote($total),
		$db->quote('pending')
	);

	$sql = "REPLACE INTO orders(sfirst, slast, amount, discount, total, payment_status) VALUES(" . implode(",", $args) . ")";
	$db->query($sql);

	$order_id = $db->lastInsertID();

	return $order_id;
}

try {
	if (isset($_POST['submit_button'])) {
		$order_id = save($db, $_POST);

		header("Location: pay.php?order_id=" . $order_id);
		die();
	}
} catch (Exception $e) {
	die($e->getMessage() . "\nUse your browser's back button and try again.");
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

    <form name="epayform" action="" method="post">
      <h2>Student Information</h2>

      <table class="table-striped table-condensed">
        <tr>
          <th>First Name</th>

          <td><input type="text" id="sfirst" name="sfirst" size="25" required="required" placeholder="John"></td>
        </tr>

        <tr>
          <th>Last Name</th>

          <td><input id="slast" name="slast" type="text" required="required" size="25" required="required" placeholder="Smith"></td>
        </tr>

        <tr>
          <th>School</th>

          <td><input type="text" id="sschool" name="school" size="25"></td>
        </tr>

        <tr>
          <th>Counselor</th>

          <td><input type="text" id="scounselor" name="scounselor" size="25"></td>
        </tr>

        <tr>
          <th>StepUp Scholar?</th>

          <td><label><input type="radio" id="stepupyes" name="stepup" value="yes">Yes</label> <label><input type="radio" id="stepupno" name="stepup" value="no" checked="checked">No</label></td>
        </tr>

        <tr>
          <th>Graduating Class</th>

          <td><input id="grad" name="grad" type="number" size="4" required="required" placeholder="2012"></td>
        </tr>
      </table>

      <h2> College Lifestyle and SAT Prep In-Class Programs </h2>

      <p> <i>includes textbook and class materials</i> </p>

      <table>
        <tr>
          <td style="width: 10px; "><input type="checkbox" name="iclass[ijunmar]" value="ijunmar" onclick="" disabled="disabled"></td>
		  <td>June 12 - July 20<br />1:15 - 3:15 PM</td>
		  <td>Maryknoll High Schoool</td>
		  <td>Call Mr. Nagami<br />(808) 952-7340</td>
        </tr>
        <tr>
          <td style="width: 10px"><input type="checkbox" name="iclass[ijulwai]" value="1"> </td>
		  <td>July 16 - July 21<br />5:00 - 7:00 PM</td>
		  <td>Waikiki Community Center</td>
		  <td>$190</td>
        </tr>

        <tr>
          <td style="width: 10px"><input type="checkbox" name="iclass[iaugwai]" value="1"></td>
		  <td>August 20 - August 31<br />5:00 - 7:00 PM</td>
		  <td>Waikiki Community Center</td>
		  <td>$190</td>
        </tr>
		
		<tr>
  		<td style="width: 10px"><input type="checkbox" name="iclass[iinfo]" value="1"></td>
          <td colspan="3">
           Please keep me informed of future In-Class Programs</td>
        </tr>
      </table>

      <h2> College Lifestyle and SAT Prep Interactive On-Line Webinar Programs </h2>

      <p> <i>textbook and class materials provided by mail and email</i> </p>

      <table>
        <tr>
          <td style="width: 10px">
		  <input type="checkbox" name="wclass" value="wsep" onclick="addCharge(190)"></td><td>September 10 - September 21 <br />6:30 - 8:30 PM</td><td></td><td>$190</td></tr>
        <tr>
          <td style="width: 10px">          
		  <input type="checkbox" name="wclass" value="woct" onclick="addCharge(190)"></td><td> October 8 - October 19<br /> 6:30 - 8:30 PM </td><td></td><td>$190</td></tr>
        <tr>
          <td style="width: 10px">
          <input type="checkbox" name="wclass" value="winfo"></td><td colspan="2"> Please keep me informed of future On-Line Programs</td>

        </tr>
      </table>

      <h2> Parent Information </h2>

      <p> (All contact information is required for processing) </p>

      <table>
        <tr>
          <th>First Name</th>

          <td><input type="text" name="pFirst" size="30" required="required"></td>
        </tr>

        <tr>
          <th>Last Name</th>

          <td><input type="text" name="pLast" size="30" required="required"></td>
        </tr>

        <tr>
          <th>Address</th>

          <td><input type="text" name="pAddress" size="55" required="required"></td>
        </tr>

        <tr>
          <th>City</th>

          <td><input type="text" name="pCity" size="25" required="required"></td>
        </tr>

        <tr>
          <th>State</th>

          <td><input type="text" name="pState" size="10" required="required"></td>
        </tr>

        <tr>
          <th>Zip</th>

          <td><input type="text" name="pZip" size="10" required="required"></td>
        </tr>

        <tr>
          <th>Email</th>

          <td><input type="email" name="pEmail" size="55" required="required"></td>
        </tr>

        <tr>
          <th>Phone</th>

          <td><input type="tel" name="pPhone" size="15" required="required"></td>
        </tr>

        <tr>
          <th>Military?</th>

          <td>
            <input type="radio" id="militaryyes" name="military" value="yes" onclick="addCharge()">Yes <input type="radio" id="militaryno" name="military" value="no" checked="checked">No
            <hr>
            If Yes, please answer the following
          </td>
        </tr>

        <tr>
          <th>Installation</th>

          <td><input type="text" name="installation" size="28"></td>
        </tr>

        <tr>
          <th>Job Title</th>

          <td><input type="text" name="jobTitle" size="28"></td>
        </tr>

        <tr>
          <th>Rank</th>

          <td><input type="text" name="rank" size="28"></td>
        </tr>

        <tr>
          <th>IMCEA?</th>

          <td><input type="radio" id="imceayes" name="imcea" value="yes">Yes
		  <input type="radio" id="imceano" name="imcea" value="no" checked="checked">No</td>
        </tr>

        <tr>
          <th>IMCEA Member Number</th>

          <td><input type="text" name="memberNumber" size="10"></td>
        </tr>
		<tr>
			<td></td>
			<td style="text-align: right"><input type="submit" id="submit_button" name="submit_button" value="Save and Continue to Payment"></td>
		</tr>
      </table>
  </div>


</body>
</html>
