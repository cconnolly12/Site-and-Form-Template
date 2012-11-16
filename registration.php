


<?php 

//ini_set('display_errors', 1);

// VERSION 1.3 OF March 19 2012
//include restricted officials disclaimer
//1.3 new branding
include('includes/functions.php'); 
include('includes/config.php');

//Code Generated on 07/30/2012 01:07:48


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title><?php echo  EVENT_NAME; ?></title>

<link href="css/csny_style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/csny_forms.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/csny_print.css" rel="stylesheet" type="text/css" media="print" />
<link href="css/thickbox.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 7]>
<link href="css/csny_forms_IE7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<script type="text/javascript" src="js/generic.js" ></script>
<script type="text/javascript" src="js/jquery-1.2.6.js" ></script>
<script type="text/javascript" src="js/thickbox.js" ></script>

</head>

<body>
<div id="wrapper" align="center">

<div id="container" align="center">

 <table border="0" cellpadding="0" cellspacing="0" summary="" id="header">
  <tr>
    <td class="logo"><img src="images/logo.jpg" alt="Barclays" /></td>
    <td id="signpost"> &nbsp; <!-- 
      	<div id="signpost_line1">Division/Business</div>
      	<div id="signpost_line2">Sub offering/product</div>
      	<div id="signpost_line3" style="display:none;">Potential third line</div>  -->
		</td>
  </tr>
</table>

 
 <div id="navigation">
      <ul id="nav">
          <li><a href="registration.php" class="current">Registration</a></li>
					<li class="nav_separator">&#124;</li>
          <li><a href="http://www.barclayscommunications.com/us/424716/agenda.html">Agenda</a></li>
					<li class="nav_separator">&#124;</li>
          <li><a href="http://www.barclayscommunications.com/us/424716/welcome.html">Welcome</a></li>
					<li class="nav_separator">&#124;</li>
          <li><a href="http://www.barclayscommunications.com/us/424716/invitation.html">Invitation</a></li>
      </ul>
  </div>
	
	
<!-- ABOVE IS THE HEADER - ABOVE IS THE HEADER - ABOVE IS THE HEADER - ABOVE IS THE HEADER - ABOVE IS THE HEADER -->
<!-- ABOVE IS THE HEADER - ABOVE IS THE HEADER - ABOVE IS THE HEADER - ABOVE IS THE HEADER - ABOVE IS THE HEADER -->

	<div id="banner"><img src="images/main_banner.jpg" width="692" height="311" border="0" /></div>
	<div id="maintitle"><img src="images/main_title.jpg" width="692" height="147" /></div>	
 	<div id="content">  

			 
			 
   <div class="page_title">Registration</div>	
	



<?php 

//PREP PLANNERS INFO FOR HTML
$planner1_info = "";
$planner2_info = "";


if(defined('PLANNER1_NAME')==true){
$planner1_info = PLANNER1_NAME . ", ";
if(PLANNER1_TITLE!="")$planner1_info .= PLANNER1_TITLE . ", ";
if(PLANNER1_DEPT!="")$planner1_info .= PLANNER1_DEPT . ", ";
if(PLANNER1_PHONE!="")$planner1_info .= PLANNER1_PHONE . " or ";
$planner1_info .="<a href=\"mailto:" . PLANNER1_MAIL . "?subject=" . EVENT_NAME ."\">" . PLANNER1_MAIL. "</a>"; 
}//end if(defined(PLANNER_NAME)) 

if(defined('PLANNER2_NAME')==true){
$planner2_info = PLANNER2_NAME . ", ";
if(PLANNER2_TITLE!="")$planner2_info .= PLANNER2_TITLE . ", ";
if(PLANNER2_DEPT!="")$planner2_info .= PLANNER2_DEPT . ", ";
if(PLANNER2_PHONE!="")$planner2_info .= PLANNER2_PHONE . " or ";
$planner2_info .="<a href=\"mailto:" . PLANNER2_MAIL . "?subject=" . EVENT_NAME ."\">" . PLANNER2_MAIL. "</a>"; 
}//end if(defined(PLANNER_NAME)) 



date_default_timezone_set(EVENT_TZ);




//********************************************************************
//********** Check if event is still on ******************************
//********************************************************************

//if (true){
if (strtotime("now")< strtotime(EVENT_CLOSED_DATE)){

$displayform = true;









//********************************************************************
//********** Capture form data if any ********************************
//********************************************************************
if (isset($_POST['submit'])) $submit = $_POST['submit'];  else $submit = ""; 



if (isset($_POST['restricted_official'])) $restricted_official = trim($_POST['restricted_official']);  else $restricted_official = "";
if (isset($_POST['accept_entertainment'])) $accept_entertainment = trim($_POST['accept_entertainment']);  else $accept_entertainment = "";
if (isset($_POST['bc_status'])) $bc_status = trim($_POST['bc_status']);  else $bc_status = "";
if (isset($_POST['attendance'])) $attendance = trim($_POST['attendance']);  else $attendance = "";
if (isset($_POST['first_name'])) $first_name = trim($_POST['first_name']);  else $first_name = "";
if (isset($_POST['last_name'])) $last_name = trim($_POST['last_name']);  else $last_name = "";
if (isset($_POST['company'])) $company = trim($_POST['company']);  else $company = "";
if (isset($_POST['title'])) $title = trim($_POST['title']);  else $title = "";
if (isset($_POST['telephone'])) $telephone = trim($_POST['telephone']);  else $telephone = "";
if (isset($_POST['email'])) $email = trim($_POST['email']);  else $email = "";
if (isset($_POST['barcap_contact_first_name'])) $barcap_contact_first_name = trim($_POST['barcap_contact_first_name']);  else $barcap_contact_first_name = "";
if (isset($_POST['barcap_contact_last_name'])) $barcap_contact_last_name = trim($_POST['barcap_contact_last_name']);  else $barcap_contact_last_name = "";
if (isset($_POST['dietary_restriction'])) $dietary_restriction = trim($_POST['dietary_restriction']);  else $dietary_restriction = "";
if (isset($_POST['notes'])) $notes = trim($_POST['notes']);  else $notes = "";
if (isset($_POST['privacy_agreement'])) $privacy_agreement = trim($_POST['privacy_agreement']);  else $privacy_agreement = "";







//********************************************************************
//********** error messages RESET for first run **********************
//********************************************************************

$errors = array(
"restricted_official" => "&nbsp;",
"accept_entertainment" => "&nbsp;",
"bc_status" => "&nbsp;",
"attendance" => "&nbsp;",
"first_name" => "&nbsp;",
"last_name" => "&nbsp;",
"company" => "&nbsp;",
"title" => "&nbsp;",
"telephone" => "&nbsp;",
"email" => "&nbsp;",
"barcap_contact_first_name" => "&nbsp;",
"barcap_contact_last_name" => "&nbsp;",
"dietary_restriction" => "&nbsp;",
"notes" => "&nbsp;",
"privacy_agreement" => "&nbsp;",
"submit1" => "&nbsp;",
"submit2" => "&nbsp;"
);








//********************************************************************
//********** Code below runs if form has been submitted **************
//********************************************************************

if ($submit == "Submit"){


//********************************************************************
//********** DATA VALIDATION *****************************************
//********************************************************************
$error_count=0;

// preset validators
// req-numeric, req-email,  req-us_phone, req-us_date, req-us_zip, req-us_state
// opt-numeric, opt-email,  opt-us_phone, opt-us_date, opt-us_zip, opt-us_state

// contructed text validators
// req-txt-n, where n is the number of maximum characters allowed in the text field
// example:
// opt-txt-500	optional text of 500 characters maximum (e.g. comments)
// req-txt-50		required text of 50 characters maximum (e.g. title, company)


//Please avoid rude interaction with users,
//review the error messages below and ensure they are polite, in proper English and convey the right message.

//Thank you   






// list($error_count,$errors['restricted_official']) = validate_data($error_count,'req-txt-10',$restricted_official,'Please provide your restricted official');
// list($error_count,$errors['accept_entertainment']) = validate_data($error_count,'req-txt-10',$accept_entertainment,'Please provide your accept entertainment');
// list($error_count,$errors['bc_status']) = validate_data($error_count,'req-txt-20',$bc_status,'Please provide your bc status');

 list($error_count,$errors['attendance']) = validate_data($error_count,'req-txt-100',$attendance,'Please indicate whether you will attend this event');
 list($error_count,$errors['first_name']) = validate_data($error_count,'req-txt-50',$first_name,'Please provide your first name');
 list($error_count,$errors['last_name']) = validate_data($error_count,'req-txt-50',$last_name,'Please provide your last name');
 list($error_count,$errors['email']) = validate_data($error_count,'req-email',$email,'Please provide your email'); 
 
 
if (($attendance=="Yes Both") || ($attendance=="Yes Only Point") || ($attendance=="Yes Only Portfolio")){
//if yes, validate the associated fields

		if ($bc_status=="Client"){
		//if Client, validate the associated fields
		 list($error_count,$errors['company']) = validate_data($error_count,'req-txt-50',$company,'Please provide the name of your company');
		 list($error_count,$errors['title']) = validate_data($error_count,'req-txt-100',$title,'Please provide your title');
		 list($error_count,$errors['telephone']) = validate_data($error_count,'req-us_phone',$telephone,'Please provide your telephone');
		 list($error_count,$errors['barcap_contact_first_name']) = validate_data($error_count,'req-txt-50',$barcap_contact_first_name,'Please provide the first name of your contact at Barclays ');
		 list($error_count,$errors['barcap_contact_last_name']) = validate_data($error_count,'req-txt-50',$barcap_contact_last_name,'Please provide the last name of your contact at Barclays ');
		 list($error_count,$errors['dietary_restriction']) = validate_data($error_count,'opt-txt-500',$dietary_restriction,'Please indicate whether you have dietary restrictions');
		 list($error_count,$errors['notes']) = validate_data($error_count,'opt-txt-500',$notes,'Please provide your notes');
		 list($error_count,$errors['privacy_agreement']) = validate_data($error_count,'req-txt-50',$privacy_agreement,'Please indicate that you have read our privacy agreement');
		 
		}else{
		//if not Client, clear the associated fields of their values
		$company="Barclays";
		$barcap_contact_first_name="";
		$barcap_contact_last_name="";
		$privacy_agreement="";
		}//end if ($bc_status=="Client")



		if ($bc_status=="Employee"){
		//if Employee, validate the associated fields
		$company="Barclays";
		 list($error_count,$errors['title']) = validate_data($error_count,'req-txt-100',$title,'Please provide your title');
		 list($error_count,$errors['telephone']) = validate_data($error_count,'req-us_phone',$telephone,'Please provide your telephone');
		 list($error_count,$errors['dietary_restriction']) = validate_data($error_count,'opt-txt-500',$dietary_restriction,'Please indicate whether you have dietary restrictions');
		 list($error_count,$errors['notes']) = validate_data($error_count,'opt-txt-500',$notes,'Please provide your notes');
		
		}else{
		//if not Employee, clear the associated fields of their values
		}//end if ($bc_status=="Employee")
		

}else{
//if no, clear the associated fields of their values
$title="";
$telephone="";
$barcap_contact_first_name="";
$barcap_contact_last_name="";
$dietary_restriction="";
$notes="";
$privacy_agreement="";
}//end if ($attendance=="Yes")





//Use the appropriate field clearing code in the "No" part of your conditional statements
/*$restricted_official="";
$accept_entertainment="";
$bc_status="";
$attendance="";
$first_name="";
$last_name="";
$company="";
$title="";
$telephone="";
$email="";
$barcap_contact_first_name="";
$barcap_contact_last_name="";
$dietary_restriction="";
$notes="";
$privacy_agreement="";
*/






//********************************************************************
//********** VALIDATION PASSED ***************************************
//********************************************************************


//********************************************************************
//********** CHECK FOR DUPLICATE EMAILS ******************************
//********************************************************************

      /*/email_construct
      $ec = substr(strtolower($email),0,strpos($email,"@"));
      $ec0 = md5(strtolower($email)); 
      $ec1 = md5("$ec@barclays.com"); 
      $ec2 = md5("$ec@barclayscapital.com"); 
      $ec3 = md5("$ec@barcap.com"); 
      $ec4 = md5("$ec@barclayswealth.com"); 
      
      $query_email = " SELECT email FROM " . DB_TABLE . " WHERE ";
      $query_email .= " MD5(LOWER(email)) = '$ec0' OR ";
      $query_email .= " MD5(LOWER(email)) = '$ec1' OR ";
      $query_email .= " MD5(LOWER(email)) = '$ec3' OR ";
      $query_email .= " MD5(LOWER(email)) = '$ec2' OR ";
      $query_email .= " MD5(LOWER(email)) = '$ec4' ";
      
      
      $result_email = mysql_query($query_email,$conn) or die(" #GJK&-QPH7-SOBB51-KP5Q.");
      //$result = mysql_query($query,$conn) or die("Could not execute $query"); // do not display querytrings when live, it's a giveaway to database injection attacks
      $row_email = mysql_fetch_array($result_email);
      if ($row_email){
			$error_count++;
			$errors['attendance']="You already have registered to this event";
			// change to $errors['email'] if there is no attendance field. -------- NOTE
			}//end if
	*/			

if ($error_count==0) {


$timestamp=date("Y-m-d H:i:s");

//********************************************************************
//********** SQL READYNESS   *****************************************
//********************************************************************




$restricted_official=mysql_real_escape_string($restricted_official);
$accept_entertainment=mysql_real_escape_string($accept_entertainment);
$bc_status=mysql_real_escape_string($bc_status);
$attendance=mysql_real_escape_string($attendance);
$first_name=mysql_real_escape_string($first_name);
$last_name=mysql_real_escape_string($last_name);
$company=mysql_real_escape_string($company);
$title=mysql_real_escape_string($title);
$telephone=mysql_real_escape_string($telephone);
$email=mysql_real_escape_string($email);
$barcap_contact_first_name=mysql_real_escape_string($barcap_contact_first_name);
$barcap_contact_last_name=mysql_real_escape_string($barcap_contact_last_name);
$dietary_restriction=mysql_real_escape_string($dietary_restriction);
$notes=mysql_real_escape_string($notes);
$privacy_agreement=mysql_real_escape_string($privacy_agreement);







//********************************************************************
//********** SQL PROCESSING  *****************************************
//********************************************************************



$sql = "INSERT INTO " . DB_TABLE . "(

timestamp,
restricted_official, 
accept_entertainment, 
bc_status, 
attendance, 
first_name, 
last_name, 
company, 
title, 
telephone, 
email, 
barcap_contact_first_name, 
barcap_contact_last_name, 
dietary_restriction, 
notes, 
privacy_agreement
) VALUES (
'$timestamp',
'$restricted_official', 
'$accept_entertainment', 
'$bc_status', 
'$attendance', 
'$first_name', 
'$last_name', 
'$company', 
'$title', 
'$telephone', 
'$email', 
'$barcap_contact_first_name', 
'$barcap_contact_last_name', 
'$dietary_restriction', 
'$notes', 
'$privacy_agreement')";






$result = mysql_query($sql);

//********************************************************************
//********** IF SQL PROCESSING WENT WELL... **************************
//********************************************************************
if ($result){





// PATH TO ROOT FOR INCLUDES TO ACCESS FROM ANYWHERE 
$current_path = pathinfo($_SERVER['SCRIPT_NAME'],PATHINFO_DIRNAME);
$current_host = pathinfo($_SERVER['REMOTE_ADDR'],PATHINFO_BASENAME);
$the_depth = substr_count( $current_path , "/" );		
if ($current_host=="127.0.0.1") $pathtoroot = str_repeat ( "../" , $the_depth-1 ); else  $pathtoroot = str_repeat ( "../" , $the_depth );

//backups SQL statements for 6 months 
include( $pathtoroot."csny_admin/registration_backup.php");







//PREP YES NO MESSAGES
if ($attendance=='No'){
$greeting_line_screen = "We regret that you will not be able to attend the  " . EVENT_NAME . ".";
$greeting_line_mail = "We regret that you will not be able to attend the  " . EVENT_NAME . ".";
$add_to_outlook = "";
}else {
$greeting_line_screen = "Thank you for registering for the " . EVENT_NAME . ".";
$greeting_line_mail = "Thank you for registering for the  " . EVENT_NAME . ".";
$add_to_outlook = <<<ADDTOOUTLOOK

<a href="http://www.barclayscommunications.com/$current_directory/ical.ics" class="add_to_outlook">Add to Outlook</a>
<br/>

ADDTOOUTLOOK;

}// end if ($attendance=='No'))



//PREP MAIL TO USER
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: <" . PLANNER1_MAIL . ">\n";
$subject = "Registration received for the Barclays  " . EVENT_NAME  . " | " .  date("l, F j, Y",EVENT_DATE);


$message = <<<MESSAGE
<html>
<body style = " font-size: 13px; font-family: Arial;background-color:#FFFFFF;">
<img src="http://www.barclayscommunications.com/$current_directory/images/logo.jpg" alt="Barclays " width="188" height="32" border="0" align="center"/>
<br/><br/>$first_name $last_name, 
<br/><br/>$greeting_line_mail
<br/><br/>
For further information, please contact $planner1_info.

<br/><br/>
$planner2_info


<br/>
$add_to_outlook
<br/>
</body></html>

MESSAGE;
//this closing statement must be left aligned, line break before and after it										

//SEND CONFIRMATION MAIL TO USER
if ($dev) {
echo $message;
}else{
mail($email, $subject, $message, $headers);
}//end if ($dev) 

// Send SQL statement to developer
$sqlheaders  = 'MIME-Version: 1.0' . "\n";
$sqlheaders .= 'Content-type: text/html; charset=utf-8' . "\n";
$sqlheaders .= 'From: <SQL Raw Statement>' . "\n";
$sqlsubject = ' Registration received for the ' . EVENT_NAME . ' - ' . $first_name .' ' . $last_name;	

if ($dev) {
echo $sql;
}else{
mail(DESIGNER_MAIL, $sqlsubject, $sql, $sqlheaders);
}//end if ($dev) 

//PREP THANK YOU MESSAGE TO DISPLAY
$thx_msg = <<<THXMSG

<div id="content">  
<div class="lead_text cyan">Your registration has been processed.</div> 

<br />

<div>$greeting_line_screen</div> 
</div>


<p>
$planner2_info
</p>

</div>

THXMSG;
//this closing statement must be left aligned, line break before and after it										

//DISPLAY THANK YOU MESSAGE 
echo $thx_msg;
$displayform = false;



}else {
//********************************************************************
//********** IF SQL PROCESSING WENT SOUR... **************************
//********************************************************************

// PREP ERROR MESSAGE FOR DEVELOPER
$error_number =  date("YmdHis") .rand(100,999);
$errorheaders  = "MIME-Version: 1.0" . "\n";
$errorheaders .= "Content-type: text/html; charset=utf-8" . "\n";
$errorheaders .= "From: <error Raw Statement>" . "\n";
$errorsubject = "Registration Error - " . EVENT_NAME . " - " . CSNY_NUMBER . " - Error# $error_number";

$errorbody = "<b>Registration Error</b> - " . EVENT_NAME . " - " . CSNY_NUMBER . " - Error# $error_number" . "<br />";
$errorbody .= "<b>Error occured on: </b> " . date("m-d-Y H:i:s") . "<br />";
$errorbody .= "<b>SQL error: </b>" . mysql_error() . "<br />";
$errorbody .= "<b>SQL string: </b>" . $sql . "<br />";

$errorbody .= "<b>Form Data:</b><br />";
foreach ($_POST as $key => $value){
if (is_array($value)){
foreach ($value as $key2 => $value2){
$errorbody .= "[$key][$key2] $value2 <br />";
}// end foreach ($value as $key2 => $value2)
}else{
$errorbody .= "[$key] $value <br />";
}// endif (is_array($value) 
}// end foreach ($_POST as $key => $value)

$errorbody .= "<b>Server Data:</b><br />";
foreach ($_SERVER as $key => $value){
$errorbody .= "[$key] $value <br />";
}// end foreach ($_POST as $key => $value)


$alert_email = DEVELOPER_MAIL . "," .  DESIGNER_MAIL . "," . CSNY_MAIL	;

//SEND MAIL TO DEVELOPER
if ($dev) {
echo $errorbody;
}else{
mail($alert_email, $errorsubject, $errorbody, $errorheaders);
}//end if ($dev) 

// PREP ERROR MESSAGE FOR USER
$error_msg = <<<ERRORMSG

<div id="content">  
<div class="headline"> 
<h2>An error has occured while processing your request.</h2> 
<h3>We are sorry for this inconvenience.</h3> 
</div>
<div class="paragraph_title">Our services have been alerted and will follow through.</div> 
<p>You may contact us at 
<a href="mailto:{$const['CSNY_MAIL']}?subject=Registration Error - {$const['EVENT_NAME']} - {$const['CSNY_NUMBER']} Error#$error_number ">{$const['CSNY_MAIL']}</a> 
<div class="red">Error# $error_number </div></p>
</div>

ERRORMSG;
//this closing statement must be left aligned, line break before and after it										

// DISPLAY ERROR MESSAGE FOR USER
echo $error_msg;
$displayform = false;

}//end if ($result)


}else{
								
							
//*************************************************************************
//****** REGISTRATION FORM WAS INCOMPLETE OR SOME ENTRIES WERE INVALID ****
//*************************************************************************

$errors_submit = "Some entries were erroneous, please review the " . iif($error_count==1,"",$error_count) . " message" . iif($error_count==1,"","s") . " in red ";									
$errors['submit1'] = $errors_submit . "below";									
$errors['submit2'] = $errors_submit . "above";									
}//end if ($error_count==0) 
}//end if ($submit == "submit")
				


// CHECK IF FORM HAS TO BE DISPLAYED
//(if not, that mean some error message has been displayed before we got here)
if ($displayform){ 
							
//********************************************************************
//********** BELOW  - DISPLAY REGISTRATION FORM **********************
//********************************************************************
							
//SHOW FORM WITH ERRORS MESSAGE AND PREPOPULATED FIELDS IF ANY




?>

<p>Please register by <?php echo date("l, F j",strtotime(EVENT_RSVP_DATE)) ?>, by completing the form below.</p> 

<p>Please note, all required fields are marked with an asterisk ( <span class="required">*</span> ).</p>
<div class="separator_cyan" ></div>			
<p class="msg_div" style="padding:0" ><?php echo $errors['submit1'] ?></p>


<form class="barcapform" name="barcapform" id="barcapform_1" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">

<!-- 
Available CSS classes for input text fields

.txt_xlong {width: 100%;}
.txt_long {width: 300px;}
.txt_medium{width: 225px;}
.txt_short {width: 150px;}
.txt_xshort {width: 75px;}

 -->








<input id="restricted_official" type="hidden" name="restricted_official" value="<?php echo $restricted_official; ?>" />
<input id="accept_entertainment" type="hidden" name="accept_entertainment" value="<?php echo $accept_entertainment; ?>" />
<input id="bc_status" type="hidden" name="bc_status" value="<?php echo $bc_status; ?>" />

<div class="bc_status_box bc_Employee_box" style="display:block;">
</div><!-- bc_status_box bc_Employee_box-->





          <table class="field_table" id="attendance_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="attendance_label"  >Attendance <span id="attendance_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="radio" name="attendance" class="" id="attendance_yes_both"  value="Yes Both" <?php if ($attendance=='Yes Both') echo 'checked="checked"' ?>  onclick="$('.attendance_box').show('slow');"  />
                        
<label id="attendance_both_label_yes_both" for="attendance_yes" class="radio_label">Yes, I will attend both POINT  and Portfolio <br/>(Morning and Afternoon)</label> 

<br />

                        <input type="radio" name="attendance" class="" id="attendance_yes_point"  value="Yes Only Point" <?php if ($attendance=='Yes Only Point') echo 'checked="checked"' ?>  onclick="$('.attendance_box').show('slow');"  />
                        
<label id="attendance_label_yes_point" for="attendance_yes" class="radio_label">Yes, I will only attend Point Advisory Council (Morning)</label>

<br />


                        <input type="radio" name="attendance" class="" id="attendance_yes_portfolio"  value="Yes Only Portfolio" <?php if ($attendance=='Yes Only portfolio') echo 'checked="checked"' ?>  onclick="$('.attendance_box').show('slow');"  />
                        
<label id="attendance_label_yes_portfolio" for="attendance_yes" class="radio_label">Yes, I will only attend Portfolio Management Conference (Afternoon)

<br />

<input type="radio" name="attendance" class="" id="attendance_no"  value="No" <?php if ($attendance=='No') echo 'checked="checked"' ?>  onclick="$('.attendance_box').hide('slow');"  />

<label id="attendance_label_no" for="attendance_no" class="radio_label">No, I will not attend</label>
            
          		</td>
            </tr>
            <tr><td colspan="2" id="attendance_msg" class="msg_div"><?php echo $errors['attendance'] ?></td></tr>
        </table>	




          <table class="field_table" id="first_name_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="first_name_label" for="first_name" >First Name <span id="first_name_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="first_name" class="txt_medium" id="first_name"    value="<?php echo $first_name ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="first_name_msg" class="msg_div"><?php echo $errors['first_name'] ?></td></tr>
        </table>	





          <table class="field_table" id="last_name_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="last_name_label" for="last_name" >Last Name <span id="last_name_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="last_name" class="txt_medium" id="last_name"    value="<?php echo $last_name ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="last_name_msg" class="msg_div"><?php echo $errors['last_name'] ?></td></tr>
        </table>	



<div class="bc_status_box bc_Client_box" style="display:block;">


          <table class="field_table" id="company_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="company_label" for="company" >Company <span id="company_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="company" class="txt_medium" id="company"    value="<?php echo $company ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="company_msg" class="msg_div"><?php echo $errors['company'] ?></td></tr>
        </table>	

</div><!-- bc_status_box bc_Client_box-->

 <div class="attendance_box" style="display:block;">


          <table class="field_table" id="title_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="title_label" for="title" >Title <span id="title_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="title" class="txt_medium" id="title"    value="<?php echo $title ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="title_msg" class="msg_div"><?php echo $errors['title'] ?></td></tr>
        </table>	





          <table class="field_table" id="telephone_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="telephone_label" for="telephone" >Telephone <span id="telephone_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="telephone" class="txt_medium" id="telephone"    value="<?php echo $telephone ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="telephone_msg" class="msg_div"><?php echo $errors['telephone'] ?></td></tr>
        </table>	

</div><!-- attendance_box -->



          <table class="field_table" id="email_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="email_label" for="email" >Email <span id="email_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="email" class="txt_medium" id="email"    value="<?php echo $email ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="email_msg" class="msg_div"><?php echo $errors['email'] ?></td></tr>
        </table>	



 <div class="attendance_box" style="display:block;">
 <div class="bc_status_box bc_Client_box" style="display:block;">


          <table class="field_table" id="barcap_contact_first_name_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="barcap_contact_first_name_label" for="barcap_contact_first_name" >Barclays Contact First Name <span id="barcap_contact_first_name_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="barcap_contact_first_name" class="txt_medium" id="barcap_contact_first_name"    value="<?php echo $barcap_contact_first_name ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="barcap_contact_first_name_msg" class="msg_div"><?php echo $errors['barcap_contact_first_name'] ?></td></tr>
        </table>	





          <table class="field_table" id="barcap_contact_last_name_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="barcap_contact_last_name_label" for="barcap_contact_last_name" >Barclays Contact Last Name <span id="barcap_contact_last_name_req" class="required">*</span></label>
          		</td>
          	  <td class="input">
                        <input type="text" name="barcap_contact_last_name" class="txt_medium" id="barcap_contact_last_name"    value="<?php echo $barcap_contact_last_name ?>" />            
          		</td>
            </tr>
            <tr><td colspan="2" id="barcap_contact_last_name_msg" class="msg_div"><?php echo $errors['barcap_contact_last_name'] ?></td></tr>
        </table>	


</div><!-- bc_status_box bc_Client_box-->


          <table class="field_table" id="dietary_restriction_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="dietary_restriction_label" for="dietary_restriction" >Dietary Restriction <span id="dietary_restriction_req" class="required">&nbsp;</span></label>
          		</td>
          	  <td class="input">
                        <textarea name="dietary_restriction" class="txt_medium" id="dietary_restriction"   ><?php echo $dietary_restriction; ?></textarea>
            
          		</td>
            </tr>
            <tr><td colspan="2" id="dietary_restriction_msg" class="msg_div"><?php echo $errors['dietary_restriction'] ?></td></tr>
        </table>	





          <table class="field_table" id="notes_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label">
                       <label id="notes_label" for="notes" >Notes <span id="notes_req" class="required">&nbsp;</span></label>
          		</td>
          	  <td class="input">
                        <textarea name="notes" class="txt_medium" id="notes"   ><?php echo $notes; ?></textarea>
            
          		</td>
            </tr>
            <tr><td colspan="2" id="notes_msg" class="msg_div"><?php echo $errors['notes'] ?></td></tr>
        </table>	

 <div class="bc_status_box bc_Client_box" style="display:block;">

          <table class="field_table"  border="0" cellpadding="0" cellspacing="0" summary="">
            <tr><td colspan="2" >
            <div class="bold">Website Privacy Policy</div>
            <p class="smalltext">
Your privacy is important to us. <br />
Barclays Bank PLC, will treat information provided to the Barclays Bank website as confidential. 
We will hold your data in compliance with the Data Protection Act 1998, 
which implements Data Protection Directive 95/46/EC, and other applicable laws. 

Please contact <a href="mailto:dataprivacyirm@barclays.com?subject=POINT Advisory Council and Third Annual Portfolio Management Conference%20%7C%20Jeffrey Orlowsky">dataprivacyirm@barclays.com</a> 

if you have any questions about data privacy and how any data submitted in this form is used. 
By registering to the Barclays Bank website with us, 
you agree that Barclays Bank may use the contact information provided by you for the management of this event - 
we will only disclose your details to selected parties such as hotels and venues. 
We may send your data outside the European Union/EEA to vetted third parties as part of 
the processing of your details and to our affiliates worldwide. 							 
              <br />
            Please see <a href="http://www.barclays.com" target="_blank">Barclays.com</a> for more information on Barclays  worldwide.                            </p>
						</td></tr>
        </table>	

   


          <table class="field_table" id="privacy_agreement_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td >&nbsp;</td>
          	  <td >
                  <input type="checkbox" name="privacy_agreement" class="" id="privacy_agreement"  value="Agreed" <?php if ($privacy_agreement=='Agreed') echo 'checked="checked"' ?>  />

                  <label id="privacy_agreement_label" for="privacy_agreement" > <span id="privacy_agreement_req" class="required">*</span> I confirm to have read and understood the terms laid out in the website privacy policy</label>
          		</td>
            </tr>
            <tr><td colspan="2" id="privacy_agreement_msg" class="msg_div"><?php echo $errors['privacy_agreement'] ?></td></tr>
        </table>	

 <div id="privacy_agreement_box" style="display:block;">
</div><!-- privacy_agreement_box -->

</div><!-- bc_status_box bc_Client_box-->
</div><!-- attendance_box -->


          <table class="field_table" id="submit_table" border="0" cellpadding="0" cellspacing="0" summary="">
            <tr>
          	  <td class="label"> </td>
          	  <td class="input">
                <input type="submit" name="submit"  id="submit_button"  value="Submit" />
                <input type="reset" name="reset" id="reset_button"  value="Reset" />
          		</td>
            </tr>
						<tr><td> </td><td id="submit_msg" class="msg_div" style="padding:0" ><?php echo $errors['submit2'] ?></td></tr>
          </table>


			</form>


<!-- ABOVE IS HTML REGISTRATION FORM -  ABOVE IS HTML REGISTRATION FORM -  ABOVE IS HTML REGISTRATION FORM  -->
<!-- ABOVE IS HTML REGISTRATION FORM -  ABOVE IS HTML REGISTRATION FORM -  ABOVE IS HTML REGISTRATION FORM  -->



<?php


}//end if ($displayform)

//********************************************************************
//********** ABOVE - DISPLAY REGISTRATION FORM ***********************
//********************************************************************



//********************************************************************
//********** BELOW - EVENT IS CLOSED! SORRY, GET LOST, PAL ***********
//********************************************************************

}else{//above: event is on, below: event is closed

// PREP CLOSED EVENT MESSAGE FOR USER
$closedevent_msg = <<<CLOSEDEVENTMSG

<div id="content">  
<div class="headline"> 
<h2>Registration for this event has been closed.</h2> 
<h3>We are sorry for this inconvenience.</h3> 
</div>

<p>
$planner2_info
</p>
</div>

CLOSEDEVENTMSG;
//this closing statement must be left aligned, line break before and after it										

// DISPLAY CLOSED EVENT MESSAGE FOR USER
echo $closedevent_msg;
			 
}//end if (strtotime("today")< EVENT_CLOSED_DATE) ----------------------------------------------------------------------------------------


?>

<p>For further information, please contact Jeff Orlowsky, Event and Roadshow Marketing, at <br />
  +1 212 412 2601 or <a href="mailto:jeffrey.orlowsky%40barclays.com?subject=Barclays%20%7C%20POINT%20Advisory%20Council%20and%20Third%20Annual%20Portfolio%20Management%20Conference&body=">jeffrey.orlowsky@barclays.com</a>.</p>

	
	</div><!-- content -->	
	</div><!-- container -->
</div><!-- wrapper -->

<!-- BELOW IS THE FOOTER - BELOW IS THE FOOTER - BELOW IS THE FOOTER - BELOW IS THE FOOTER - BELOW IS THE FOOTER -->
<!-- BELOW IS THE FOOTER - BELOW IS THE FOOTER - BELOW IS THE FOOTER - BELOW IS THE FOOTER - BELOW IS THE FOOTER -->


<div id="footer">
	<p class="disclaimer">
<br />

        Barclays seeks to conduct business in accordance with the highest ethical standards and to comply with applicable rules concerning the provision of hospitality, gifts and other benefits to public officials and other similarly regulated persons (click this <a href="http://www.barclayscommunications.com/csny_admin/restricted_persons_definition.html" target="_blank">link</a> for definition).  This includes laws requiring Barclays to publicly report such benefits.  Barclays may provide food, beverages and other benefits in excess of $50 to conference attendees.  Please email the Event and Roadshow Marketing contact located on the invitation home page, if you require itemized cost details for compliance or reporting purposes, or to determine whether you need to make alternate arrangements (e.g, to decline or reimburse hospitality costs).  They will connect you with our Compliance Department as appropriate.   
                    
            <br /><br />
                              
            Please note that your email address is held on our global contact database, which we use to send you this invitation and other marketing and business 
            communications. We use your contact details for our own internal purposes only. This information is accessible by Barclays international offices subject to 
            local laws and regulations. 
            
            <br /><br />
                              
            If you no longer wish to receive emails regarding future events and promotions or would like copies of, amendments to or deletion of your details, please             email us at <a href="mailto:maillistremovalus%40barclays.com?subject=Barclays%20%7C%20POINT%20Advisory%20Council%20and%20Third%20Annual%20Portfolio%20Management%20Conference%20%7C%20Planner%3A%20Jeffrey%20Orlowsky">maillistremovalUS@barclays.com</a>.

            <br /><br />
            
            Alternatively, you can write to us at: Barclays, Event and Roadshow Marketing, 200 Park Avenue, New York, NY 10166 USA. 

            <br /><br />
            
          
          &copy;&nbsp;Barclays&nbsp;Bank&nbsp;PLC&nbsp;2012

    </p>

		<div id="job_number">CSNY 424716</div>

</div><!-- footer -->
<!-- IE7 & IE6 do not seem to respect document margin -->
<!--[if lt IE 8]>
<br />
<![endif]-->







<?php if (strtotime("now")< strtotime(EVENT_CLOSED_DATE))  $bc_status_required = true; else  $bc_status_required = false;  ?>
<?php  if (strtotime("now")< strtotime(EVENT_CLOSED_DATE))  include('includes/restricted_official_disclaimer.php'); ?>

<script type="text/javascript">



<!--
//remove if no hidden fields

<?php 
if ($attendance=="No") echo "$('.attendance_box').hide();";




if ($bc_status=="Employee") echo "adjust_reg_form('Employee');";
if ($bc_status=="Client") echo "adjust_reg_form('Client');";
?>



//window.onload = init;
// -->
</script>


</body>
</html>




