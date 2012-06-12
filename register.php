<!DOCTYPE html>
<html lang="en">
<head>
  <title>Every Teen Can Registration</title>
  <meta name="description" content="Register for the Every Teen Can Succeed program to raise SAT scores, prepare for college, and enhance career education in Honolulu, Hawaii.">
  <meta name="keywords" content="Honolulu,Oahu,Test Prep programs,Hawaii,College Life,College Lifestyle,teens,teen succeed,succeed,team success,success,scholarships,SAT,SAT prep,PSAT prep,skill-building,education,college prep,college planning,student,every team,certification,college survival">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
  <meta charset="utf-8">
<script> 
<!--
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
</head>
<body bgcolor="#c6edff">

<center><img src="hdrpg.png" USEMAP="#NotNamed" BORDER=0>
<map name="NotNamed">
  <area name="Leilani" shape="rect" coords="1,0,148,150" href="leilani.html"  alt="Meet Leilani, our Student Representative" title="Meet Leilani, our Student Representative">
</map><br><font face="arial" color="#000000" size="5">
Program Registration<br></font><font size="4">Please enter the appropriate information.&nbsp;&nbsp;When finished, press &nbsp;<button size="6">&nbsp;register&nbsp;</button>&nbsp;at the bottom of the page.
<p><i><center>Attendance is limited to available space; please register early</center></i></font></center>
<form name="epayform" action="https://everyteencansucceed.com/cgi/attendee2.php" method="POST" onSubmit="document.epayform.submitbutton.value='Please Wait... Processing';" autocomplete="off">

<input type="hidden" name="subject" value="Registration for Every Teen Can Succeed" />
<font face="arial" color="#000000" size="4">
<big>Student Information:</big><p>
First Name&nbsp;&nbsp;<input type="text" id="sfirst" name="sfirst" size="25" required="required" onblur="document.getElementById('name_help');" />
<span id="name_help" class="help"></span>&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;Last Name&nbsp;&nbsp;<input id="slast" name="slast" type="text"  required="required" size="25"  required="required" onblur="document.getElementById('name_help');" />
<span id="name_help" class="help"></span><p>

School&nbsp;&nbsp;<input type="text" id="sschool" name="school" size="25">&nbsp;&nbsp;&nbsp;Counselor&nbsp;&nbsp;<input type="text" id="scounselor" name="scounselor" size="25"><p>
StepUp Scholar?&nbsp;&nbsp; 
			<input type="radio" id="stepupyes" name="stepup" value="yes" onclick="addCharge()" />Yes&nbsp;
			<input type="radio" id="stepupno" name="stepup" value="no" checked="checked">No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Graduating Class &nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;<input id="grad" name="grad" type="text" size="4" required="required" onblur="document.getElementById('grad_help');" />
<span id="grad_help" class="help"></span><p>

<div align="left">
<b>College Lifestyle and SAT Prep In-Class Programs</b> -- (<i>includes textbook and class materials</i>)<br>

<input type="radio"  name="iclass" value="ijunmar" onclick="" disabled="disabled" />June 12 - July 20 : 1:15 - 3:15 PM -- Maryknoll High Schoool -- Call Mr. Nagami at (808) 952-7340<br>
<input type="radio"  name="iclass" value="ijulwai" onclick="addCharge()" />July 16 - July 21 : 5:00 - 7:00 PM -- Waikiki Community Center -- $190<br>
<input type="radio"  name="iclass" value="iaugwai" onclick="addCharge()" />August 20 - August&nbsp; 31 : 5:00 - 7:00 PM -- Waikiki Community Center -- $190<br>
<input type="radio"  name="iclass" value="iinfo">Please keep me informed of future In-Class Programs<p>
<p>&nbsp;<br>

<b>College Lifestyle and SAT Prep Interactive On-Line Webinar Programs</b><br>(<i>textbook and class materials provided by mail and email</i>)<br>

<input type="radio"  name="wclass" value="wsep" onclick="addCharge()" />September 10 - September 21 : 6:30 - 8:30 PM -- $190<br>
<input type="radio"  name="wclass" value="woct" onclick="addCharge()" />October 8 - October 19 : 6:30 - 8:30 PM -- $190<br>
<input type="radio"  name="wclass"  value="winfo">Please keep me informed of future On-Line Programs<p>
<p>

</div>
</font>

<font face="arial" color="#000000" size="4">

<big>Parent Information:</big><br>
  (All contact information is required for processing)<p>
First Name: <input type="text" name="pFirst" size="30">&nbsp;&nbsp;&nbsp;Last Name: <input type="text" name="pLast" size="30"><br>
Address:<input type="text" name="pAddress" size="55"><br>
City: <input type="text" name="pCity" size="25">&nbsp;&nbsp;&nbsp;
State:  <input type="text" name="pState" size="10">&nbsp;&nbsp;&nbsp;Zip:  <input type="text" name="pZip" size="10"><br>
E-mail: <input type="text" name="pEmail" size="55"><br>
Phone:  <input type="text" name="pPhone" size="15"><p>

Military?&nbsp;&nbsp;
<input type="radio" id="militaryyes" name="military" value="yes" onclick="addCharge()" />Yes&nbsp;
			<input type="radio" id="militaryno" name="military" value="no" checked="checked" />No&nbsp;&nbsp;&nbsp;(If Yes, please answer the following)<br>
Installation:&nbsp;
			<input type="text" name="installation" size="28" />&nbsp;&nbsp;&nbsp;Job Title&nbsp;
			<input type="text" name="jobTitle" size="28" />&nbsp;&nbsp;&nbsp;Rank&nbsp;<input type="text" name="rank" size="28" />
<p>
IMCEA?&nbsp;&nbsp;
<input type="radio" id="imceayes" name="imcea" value="yes" onclick="addCharge()" />Yes&nbsp;
			<input type="radio" id="imceano" name="imcea" value="no" checked="checked">No&nbsp;&nbsp;&nbsp;IMCEA Member Number:&nbsp;
			<input type="text" name="memberNumber" size="10" /><p>
			
		<table><tr><td>	
Payment	Information:&nbsp;&nbsp;</font></b>&nbsp;&nbsp;<img border="0" src="visa.gif" width="44" height="28" hspace="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img border="0" src="mastercard.gif" width="44" height="28" hspace="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img border="0" src="amex.gif" width="44" height="28" hspace="3">&nbsp;&nbsp;&nbsp;
			<img border="0" src="discover.gif" width="44" height="28" hspace="3"></td>
		</tr>
 
 
		<tr>
		<td bgcolor="#DFE6FA" colspan="4"><font face="arial" size="4" >Credit Card Type:&nbsp;&nbsp;
		<input type="hidden" name="paybycredit" value="1">	
			<select size="1" name="payment_type">
			<option value="Visa">Visa</option>
			<option value="MasterCard">MasterCard</option>
			<option value="American Express">American Express</option>
			<option value="Discover">Discover</option>
			<option value="Check">Check</option>
			</select><br>
<small>If paying by check please print this
		 form and mail with payment to <b>Every Teen Can Succeed, 2509 Ala Wai Blvd. #801-A, Honolulu, HI 96815</b></small><br>&nbsp;<p></font><font size="4" face="arial">
		 Name on Card<span style="color: #f00">*</span>:&nbsp;
			<input type="text" name="UMname" size="30" />&nbsp;&nbsp;&nbsp;
			Card Billing Zipcode<span style="color: #f00">*</span>:&nbsp;
			
			<input type="text" name="UMzip" size="15" /><p>
			Email Address<span style="color: #f00">*</span> <small><font color="000080">(to send receipt)</small>:&nbsp;
			</font><p>
			<font color="#000000">
			<input type="text" name="UMcustemail" size="50" /><p>
			Card Number<span style="color: #f00">*</span>:&nbsp;<input type="text" name="UMcard" size="17" />&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;Card Expiration Date<span style="color: #f00">*</span> <small><font color="#000080"> (MMYY)</font></small>:&nbsp; 
			<input type="text" name="UMexpir" size="4" /><br><small><font color="000080">(no space or dash please)</small></font><p>
			<font color="#000000">
			Card ID (CVV2/CID) Number<span style="color: #f00">*</span>:<br>
            (<a target="_blank" href="/cvv.htm"><small>What is the Card ID?</small></a>)&nbsp;
			<input type="text" name="UMcvv2" size="5" />
		    
			<div align="right"><b><i>Total Amount to Charge</i></b><small><font color="000080"> ($USD)</small></font>:&nbsp;$&nbsp;<input type="text" id="amount_box" name="UMamount" value="N/A" /></div><p>
<center>Call <i><b>Every Teen Can Succeed</b></i> at <b>(808) 372-3626</b> with any payment questions</center><p></font>
</div>	<p align="center">
							<input type="submit" id="submit_button" name="submit_button" value="Register Now" onclick="return verify();" /><br>
							
</td></tr><tr><td align="right">
<div align="right"><span id="siteseal"><script type="text/javascript" src="https://seal.starfieldtech.com/getSeal?sealID=TBUvlHEvPDG4JpKHHOGg9eSESBcvtVMEYDGLi8hIcneIHCU62QH4etkyZq0"></script></span>
<script type="text/JavaScript">var TFN='';var TFA='';var TFI='0';var TFL='0';var tf_RetServer="rt.trafficfacts.com";var tf_SiteId="fed17602acba26e1fd9083e89872beaa75503e5a";var tf_ScrServer=document.location.protocol+"//rt.trafficfacts.com/tf.php?k=fed17602acba26e1fd9083e89872beaa75503e5a;c=s;v=5";document.write(unescape('%3Cscript type="text/JavaScript" src="'+tf_ScrServer+'">%3C/script>'));</script><noscript><img src="http://rt.trafficfacts.com/ns.php?k=fed17602acba26e1fd9083e89872beaa75503e5a" height="1" width="1" alt=""/></noscript>
</div><p align="right">
			</td>
</td></tr></table>
</form>				<script type="text/javascript">
				/* Initialization script to ensure user doesn't accidentally use this page with Javascript disabled. */
				/* Javascript is used to give user feedback as to his running total.  We don't want him/her mistakenly
					submitting a payment for more than he/she thought they did. */
				document.getElementById("amount_box").value = "N/A";
				document.getElementById("submit_button").value = "Register Now";
				document.getElementById("submit_button").disabled = false;
				
				/* Alex -- verify all required fields are filled in before submitting. */
				function checkEmpty()
				{
					var message = "Please fill in the following required fields: \n";	
					var emptyFields = false;
					
					if(document.epayform.sfirst.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nsFirst first name";
					}
					if(document.epayform.UMbilllname.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nAttendee last name";
					}
					if(document.epayform.UMbillcompany.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nAttendee installation";
					}
					if(document.epayform.UMcustom14.value == "")
					{
						// This is the attendee email address at the top.
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nAttendee email address";
					}
					if(document.epayform.UMcustemail.value == "")
					{
						// This is the billing email address at the bottom.
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nBilling email address (for emailing the electronic receipt)";
					}
					if(document.epayform.UMname.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nBilling name on card";
					}
					if(document.epayform.UMzip.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nBilling zipcode";
					}
					if(document.epayform.UMcard.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nCredit card number";
					}
					if(document.epayform.UMexpir.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nCard expiration date";
					}
					if(document.epayform.UMcvv2.value == "")
					{
						if(emptyFields) message += ",";
						emptyFields = true;
						message += "\nCredit card ID (CVV2/CID) number";
					}
					
					
					if(document.epayform.UMcard.value.indexOf(' ') != -1 || document.epayform.UMcard.value.indexOf('-') != -1)
					{
						alert("Please type in your credit card number without dashes or spaces.");
						return false;
					}					
					if(emptyFields)
					{
						alert(message);
						return false;
					}
					else
					{
						return true;	
					}
				}
			</script>	
</body></html>