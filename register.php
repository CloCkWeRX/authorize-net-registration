<!DOCTYPE html>
<html lang="en">
<head>
  <title>Every Teen Can Registration</title>
  <meta name="description" content="Register for the Every Teen Can Succeed program to raise SAT scores, prepare for college, and enhance career education in Honolulu, Hawaii.">
  <meta name="keywords" content="Honolulu,Oahu,Test Prep programs,Hawaii,College Life,College Lifestyle,teens,teen succeed,succeed,team success,success,scholarships,SAT,SAT prep,PSAT prep,skill-building,education,college prep,college planning,student,every team,certification,college survival">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
  <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  <meta charset="utf-8">
<script type="text/javascript"> 
      var regfee = 0;
     function addCharge() 
      {
	  var iclass = 0;
	  for(var i = 0;i < form.iclass.length; i ++)
	  {
	  	if(form.iclass[i].checked)
	  	{
	  		switch(i)
	  		{
	  			case 0:
	  				// First radio button -- not Maryknoll -- was checked -- ('Jul 16 WCC')
	  				iclass = 190.00;
	  				break;
	  			case 1:
	  				// Second radio button -- Augwai ('August WCC')
	  				iclass = 190.00;
	  				break;
	  			default:
	  				// Any other radio button (the only one left is 'Send InClass Info').
	  				iclass = 0;
	  				break;
	  		}
	  		
	  		break; // No need to loop any more, since we already found a checked radio button.
	  	}
		}
		 var wclass = 0;
	  for(var i = 0;i < form.wclass.length; i ++)
	  {
	  	if(form.wclass[i].checked)
	  	{
	  		switch(i)
	  		{
	  			case 0:
	  				// First radio button -- was checked -- ('Sept Online')
	  				wclass = 190.00;
	  				break;
	  			case 1:
	  				// Second radio button -- ('Oct Online')
	  				wclass = 190.00;
	  				break;
	  			default:
	  				// Any other radio button (the only one left is 'Send InClass Info').
	  				wclass = 0;
	  				break;
	  		}
	  		
	  		break; // No need to loop any more, since we already found a checked radio button.
	  	}
		}
		
		
		var form = document.epayform;
	  var position = 0;
      if (form.UMcustom1.checked)
      {
      	position = 225.00;
      }
	  var regular = 0; 
	  if (form.UMcustom19.checked)
      {
      	regular = 30.00;
      } 
	  var review = 0;
	  if (form.UMcustom6.checked)
      {
      	review = 50.00;
      } 
	  }
</script>
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
<img src="hdrpg.png" usemap="#NotNamed" border=0>
<map name="NotNamed">
  <area name="Leilani" shape="rect" coords="1,0,148,150" href="leilani.html" 
		alt="Meet Leilani, our Student Representative" title="Meet Leilani, our Student Representative" />
</map>

<h1>Program Registration</h1>
<p><i>Attendance is limited to available space; please register early</i></p>
</center>
<form name="epayform" action="https://everyteencansucceed.com/cgi/attendee2.php" method="POST" onSubmit="document.epayform.submitbutton.value='Please Wait... Processing';" autocomplete="off">

<input type="hidden" name="subject" value="Registration for Every Teen Can Succeed" />
<font face="arial"   size="4">
<h2>Student Information</h2>
<table class="table-striped table-condensed">
	<tr>
		<th>First Name</th>
		<td><input type="text" id="sfirst" name="sfirst" size="25" required="required" placeholder="John" /></td>
	</tr>


	<tr>
		<th>Last Name</th>
		<td><input id="slast" name="slast" type="text"  required="required" size="25"  required="required" placeholder="Smith" /></td>
	</tr>

	<tr>
		<th>School</th>
		<td><input type="text" id="sschool" name="school" size="25" /></td>
	</tr>

	<tr>
		<th>Counselor</th>
		<td><input type="text" id="scounselor" name="scounselor" size="25" /></td>
	</tr>
	
	<tr>
		<th>StepUp Scholar?</th>
		<td>
			<label><input type="radio" id="stepupyes" name="stepup" value="yes" onclick="addCharge()" />Yes</label>
			<label><input type="radio" id="stepupno" name="stepup" value="no" checked="checked">No</label>	
		</td>
	</tr>

	<tr>
		<th>Graduating Class</th>
		<td><input id="grad" name="grad" type="text" size="4" required="required"  /></td>
	</tr>
</table>


<h2>College Lifestyle and SAT Prep In-Class Programs</h2>
<p><i>includes textbook and class materials</i></p>
<table>
<tr>
<td>
<input type="radio"  name="iclass" value="ijunmar" onclick="" disabled="disabled" /> June 12 - July 20 : 1:15 - 3:15 PM -- Maryknoll High Schoool -- Call Mr. Nagami at (808) 952-7340<br>
<input type="radio"  name="iclass" value="ijulwai" onclick="addCharge()" /> July 16 - July 21 : 5:00 - 7:00 PM -- Waikiki Community Center -- $190<br>
<input type="radio"  name="iclass" value="iaugwai" onclick="addCharge()" /> August 20 - August  31 : 5:00 - 7:00 PM -- Waikiki Community Center -- $190<br>
<input type="radio"  name="iclass" value="iinfo"> Please keep me informed of future In-Class Programs
</td>
</tr>
</table>


<h2>College Lifestyle and SAT Prep Interactive On-Line Webinar Programs</h2>
<p><i>textbook and class materials provided by mail and email</i></p>
<table>
<tr>
<td>
<input type="radio"  name="wclass" value="wsep" onclick="addCharge()" /> September 10 - September 21 : 6:30 - 8:30 PM -- $190<br>
<input type="radio"  name="wclass" value="woct" onclick="addCharge()" /> October 8 - October 19 : 6:30 - 8:30 PM -- $190<br>
<input type="radio"  name="wclass"  value="winfo"> Please keep me informed of future On-Line Programs
</td>
</tr>
</table>
<h2>Parent Information</h2>
<p>(All contact information is required for processing)</p>

<table>
	<tr>
		<th>First Name</th>
		<td><input type="text" name="pFirst" size="30" required="required"/></td>
	</tr>
	<tr>
		<th>Last Name</th>
		<td><input type="text" name="pLast" size="30" required="required"/></td>
	</tr>
	<tr>
		<th>Address</th>
		<td><input type="text" name="pAddress" size="55" required="required"/></td>
	</tr>
	<tr>
		<th>City</th>
		<td><input type="text" name="pCity" size="25" required="required" /></td>
	</tr>
	<tr>
		<th>State</th>
		<td><input type="text" name="pState" size="10" required="required" /></td>
	</tr>

	<tr>
		<th>Zip</th>
		<td><input type="text" name="pZip" size="10" required="required"/></td>
	</tr>

	<tr>
		<th>Email</th>
		<td><input type="email" name="pEmail" size="55" required="required"/></td>
	</tr>

	<tr>
		<th>Phone</th>
		<td><input type="tel" name="pPhone" size="15" required="required"/></td>
	</tr>


	<tr>
		<th>Military?</th>
		<td>
			<input type="radio" id="militaryyes" name="military" value="yes" onclick="addCharge()" />Yes 
			<input type="radio" id="militaryno" name="military" value="no" checked="checked" />No
			<hr />
			If Yes, please answer the following
		</td>
	</tr>
	<tr>
		<th>Installation</th>
		<td><input type="text" name="installation" size="28" /></td>
	</tr>
	<tr>
		<th>Job Title</th>
		<td><input type="text" name="jobTitle" size="28" /></td>
	</tr>
	<tr>
		<th>Rank</th>
		<td><input type="text" name="rank" size="28" /></td>
	</tr>
	<tr>
		<th>IMCEA?</th>
		<td><input type="radio" id="imceayes" name="imcea" value="yes" onclick="addCharge()" />Yes 
				<input type="radio" id="imceano" name="imcea" value="no" checked="checked">No</td>
	</tr>
	<tr>
		<th>IMCEA Member Number</th>
		<td><input type="text" name="memberNumber" size="10" /></td>
	</tr>
</table>

<h2>Payment	Information</h2>
<p>
	<img border="0" src="visa.gif" width="44" height="28" hspace="3">
	<img border="0" src="mastercard.gif" width="44" height="28" hspace="3">     
	<img border="0" src="amex.gif" width="44" height="28" hspace="3">   
	<img border="0" src="discover.gif" width="44" height="28" hspace="3">
</p>
<p><small>If paying by check please print this
		 form and mail with payment to <address>Every Teen Can Succeed, 2509 Ala Wai Blvd. #801-A, Honolulu, HI 96815</address></small></p>
<table>
	<tr>
		<th>Credit Card Type</th>
		<td>
			<input type="hidden" name="paybycredit" value="1" />	
			<select size="1" name="payment_type">
				<option value="Visa">Visa</option>
				<option value="MasterCard">MasterCard</option>
				<option value="American Express">American Express</option>
				<option value="Discover">Discover</option>
				<option value="Check">Check</option>
			</select>
		</td>

	</tr>
	<tr>
		<th>Name on Card</th>
		<td><input type="text" name="UMname" size="30" required="required" />   </td>
	</tr>

	<tr>
		<th>Card Billing Zipcode</th> 
		<td><input type="text" name="UMzip" size="15" required="required" /></td>
	</tr>
	<tr>
		<th>Email Address</th>
		<td><input type="text" name="UMcustemail" size="50" required="required" />
		 <small>(to send receipt)</small></td>
	</tr>
	<tr>
		<th>Card Number</th>
		<td><input type="text" name="UMcard" size="17" required="required"  /> </td>   
		</tr>
	<tr>
		<th>Card Expiration Date (MMYY)</th>
		<td><input type="text" name="UMexpir" size="4"  required="required"  /> <small>(no space or dash please)</small></td>
	</tr>
			
	<tr>
		<th>Card ID (CVV2/CID) Number</th>
		<td><input type="text" name="UMcvv2" size="5" /> <a target="_blank" href="/cvv.htm"><small>What is the Card ID?</small></a></td>
	</tr>
</table>
<div align="right">
	<b><i>Total Amount to Charge</i></b>
	<small>($USD)</small>: $ <input type="text" id="amount_box" name="UMamount" value="N/A" /></div>
	
	<p><center>Call <i><b>Every Teen Can Succeed</b></i> at <b>(808) 372-3626</b> with any payment questions</center></p>
</div>
<p align="center"><input type="submit" id="submit_button" name="submit_button" value="Register Now" onclick="return verify();" />
							
<!--
<div align="right"><span id="siteseal"><script type="text/javascript" src="https://seal.starfieldtech.com/getSeal?sealID=TBUvlHEvPDG4JpKHHOGg9eSESBcvtVMEYDGLi8hIcneIHCU62QH4etkyZq0"></script></span>
<script type="text/JavaScript">var TFN='';var TFA='';var TFI='0';var TFL='0';var tf_RetServer="rt.trafficfacts.com";var tf_SiteId="fed17602acba26e1fd9083e89872beaa75503e5a";var tf_ScrServer=document.location.protocol+"//rt.trafficfacts.com/tf.php?k=fed17602acba26e1fd9083e89872beaa75503e5a;c=s;v=5";document.write(unescape('%3Cscript type="text/JavaScript" src="'+tf_ScrServer+'">%3C/script>'));</script><noscript><img src="http://rt.trafficfacts.com/ns.php?k=fed17602acba26e1fd9083e89872beaa75503e5a" height="1" width="1" alt=""/></noscript>
</div>
-->
</form>
</div>
</body>
</html>