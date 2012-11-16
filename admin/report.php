

<?php

//Code Generated on 07/30/2012 01:07:48


include('../includes/functions.php'); 
include('../includes/config.php'); 




//ini_set('display_errors', 1);

/* ************************************************************************* */
/* ****************** LOGIN CHECK FOR MATRIX ******************************* */
/* ************************************************************************* */
session_start();
$private_key = md5(date("Ymdhis")); // just to confuse the bad guys
$session_id = md5(rtrim(dirname($_SERVER['PHP_SELF']), '/\\'));
$_SESSION['login_matrix_access_only'] = $session_id; 
$_SESSION[$session_id]['redirect'] = trim($_SERVER['PHP_SELF']); 
//print_r( $_SESSION); exit;

// white list of authorized user of this Matrix
//comment out or delete unauthorized users
//by default, designers and PMs should be allowed to access Matrix
//new planners will have to be registered manually
 

$_SESSION[$session_id]['dsjs'] = "on"; // John Spiteri - Designer

$_SESSION[$session_id]['dscg'] = "on"; // Cristina Gluck - Designer
$_SESSION[$session_id]['dsia'] = "on"; // Irina Azzara - Designer
$_SESSION[$session_id]['test'] = "on"; // Server Tester  - Designer
$_SESSION[$session_id]['dsnmw'] = "on"; // Matthew Wortz - Designer
$_SESSION[$session_id]['dscr'] = "on"; // Cyra Reynolds - Designer

$_SESSION[$session_id]['dsjr'] = "on"; // James Reilly - Designer
$_SESSION[$session_id]['dsmo'] = "on"; // Marc Olson - Designer
$_SESSION[$session_id]['dscc'] = "on"; // Charles Connolly - Designer
$_SESSION[$session_id]['gbdev'] = "on"; // Georges Brisset - Developer
//$_SESSION[$session_id]['plnml'] = "on"; // Marguerite Landry - Planner

//$_SESSION[$session_id]['plnkhsn'] = "on"; // Katy Hansen - Planner
//$_SESSION[$session_id]['plnjn'] = "on"; // Jillian Nichtern - Planner
//$_SESSION[$session_id]['plnjmw'] = "on"; // Janetta McDevitt-Walsh - Planner
//$_SESSION[$session_id]['plneb'] = "on"; // Elyssa Bortz - Planner
//$_SESSION[$session_id]['plnlslc'] = "on"; // Lesli Chin - Planner

//$_SESSION[$session_id]['plnvm'] = "on"; // Veronica Myers - Planner
//$_SESSION[$session_id]['plncathcook'] = "on"; // Catherine Cook - Planner
//$_SESSION[$session_id]['plnpb'] = "on"; // Perri Brenner - Planner
//$_SESSION[$session_id]['plntm'] = "on"; // Tanya Macaluso - Planner
//$_SESSION[$session_id]['plnew'] = "on"; // Edward Ware - Planner

//$_SESSION[$session_id]['plngmdr'] = "on"; // Gina-Marie DeRaimo - Planner
//$_SESSION[$session_id]['plnvs'] = "on"; // Victoria Savio - Planner
//$_SESSION[$session_id]['plnal'] = "on"; // Ashleigh Lowey - Planner
//$_SESSION[$session_id]['plnbzp'] = "on"; // Beatriz Pacheco - Planner
//$_SESSION[$session_id]['plncse'] = "on"; // Carrie Dyson - Planner

//$_SESSION[$session_id]['plnmc'] = "on"; // Michael Chou - Planner
//$_SESSION[$session_id]['plnst'] = "on"; // Susan Tarrant - Planner
//$_SESSION[$session_id]['plnpg'] = "on"; // Grace Pan - Planner
//$_SESSION[$session_id]['plnjaca'] = "on"; // Jacqueline Armstrong - Planner
//$_SESSION[$session_id]['plnbc'] = "on"; // Brett Cameron - Planner

//$_SESSION[$session_id]['plnstoll'] = "on"; // Schyler Tollmann - Planner
//$_SESSION[$session_id]['plnef'] = "on"; // Forest, Elizabeth - Planner
//$_SESSION[$session_id]['plnsf'] = "on"; // Stephanie Frese - Planner
//$_SESSION[$session_id]['plnmdc'] = "on"; // Matthew D. Casner - Planner
//$_SESSION[$session_id]['plnsd'] = "on"; // Sarah Doran - Planner

//$_SESSION[$session_id]['plncd'] = "on"; // Calvin Dong - Planner
//$_SESSION[$session_id]['plntd'] = "on"; // Taylor Debolt - Planner
//$_SESSION[$session_id]['plnask'] = "on"; // Alexandra Szakats - Planner
//$_SESSION[$session_id]['plnbl'] = "on"; // Bill Lacy - Planner
//$_SESSION[$session_id]['admsh'] = "on"; // Sean Hynes - Planner

//$_SESSION[$session_id]['plnap'] = "on"; // Andre Parris - Planner
//$_SESSION[$session_id]['plnhi'] = "on"; // Ian Harris - Planner
//$_SESSION[$session_id]['plnrj'] = "on"; // Roland Jarquio - Planner
//$_SESSION[$session_id]['plnjd'] = "on"; // Jeff Davis - Planner
//$_SESSION[$session_id]['plnjw'] = "on"; // Jose Wynne - Planner

//$_SESSION[$session_id]['plnys'] = "on"; // Yuki Sakasai - Planner
//$_SESSION[$session_id]['plnac'] = "on"; // Aroop Chatterjee - Planner
//$_SESSION[$session_id]['plnrm'] = "on"; // Robert Meredith - Planner
//$_SESSION[$session_id]['plnsh'] = "on"; // Shirley Holloway - Planner
//$_SESSION[$session_id]['plnhb'] = "on"; // Heather Bell - Planner

//$_SESSION[$session_id]['plndp'] = "on"; // Diana Porod - Planner
//$_SESSION[$session_id]['plnlcr'] = "on"; // Lenny Carr - Planner
//$_SESSION[$session_id]['plnll'] = "on"; // Lindsay Lecky - Planner
//$_SESSION[$session_id]['plnlc'] = "on"; // Linette Coste - Planner
//$_SESSION[$session_id]['plnsc'] = "on"; // Stephanie Charles - Planner

//$_SESSION[$session_id]['plnsg'] = "on"; // Susan Genicevitch - Planner
//$_SESSION[$session_id]['plncs'] = "on"; // Claire Swindell - Planner
$_SESSION[$session_id]['plnjo'] = "on"; // Jeffrey Orlowsky - Planner
//$_SESSION[$session_id]['plnsa'] = "on"; // Susan Armstrong - Planner
//$_SESSION[$session_id]['plnkt'] = "on"; // Kelly Trompke - Planner

//$_SESSION[$session_id]['plnig'] = "on"; // Illeane Gonzalez - Planner
//$_SESSION[$session_id]['plnel'] = "on"; // Elizabeth Lapina - Planner
//$_SESSION[$session_id]['plnjj'] = "on"; // Jennine Janzer - Planner
//$_SESSION[$session_id]['plnrk'] = "on"; // Rachel Kaplan - Planner
//$_SESSION[$session_id]['plnbp'] = "on"; // Brigitte Padewski - Planner

//$_SESSION[$session_id]['plncc'] = "on"; // Christina Cabral - Planner
//$_SESSION[$session_id]['plncm'] = "on"; // Claire Min - Planner
//$_SESSION[$session_id]['plnmj'] = "on"; // Matthew Jarnich - Planner
//$_SESSION[$session_id]['plndc'] = "on"; // Dillon Chan - Planner
//$_SESSION[$session_id]['plnen'] = "on"; // Elisabeth Neary - Planner

//$_SESSION[$session_id]['plnss'] = "on"; // Sylvia Shum - Planner
//$_SESSION[$session_id]['plndm'] = "on"; // Danielle Munt - Planner
//$_SESSION[$session_id]['plnmw'] = "on"; // Monique Wise - Planner
//$_SESSION[$session_id]['plnda'] = "on"; // Danielle Anagnostaras - Planner
//$_SESSION[$session_id]['plnce'] = "on"; // Crystel Edwards - Planner

//$_SESSION[$session_id]['plnkh'] = "on"; // Kristin Henderson - Planner
//$_SESSION[$session_id]['plnbr'] = "on"; // Britton Ratliff - Planner
//$_SESSION[$session_id]['plnjg'] = "on"; // Jennifer Gartner - Planner
//$_SESSION[$session_id]['plnat'] = "on"; // Alex Topkins - Planner
//$_SESSION[$session_id]['plnwlc'] = "on"; // leanne Carkner - Planner

//$_SESSION[$session_id]['plncas'] = "on"; // Lorie Casella - Planner
//$_SESSION[$session_id]['plncatrice'] = "on"; // Catrice Staffney - Planner
//$_SESSION[$session_id]['plnjk'] = "on"; // Jennifer Kelly - Planner
//$_SESSION[$session_id]['plnmkl'] = "on"; // Mark Lane - Planner
//$_SESSION[$session_id]['plnjf'] = "on"; // Justine Fairclough - Planner

//$_SESSION[$session_id]['plnkw'] = "on"; // Kelly Woodgett - Planner
//$_SESSION[$session_id]['plnjt'] = "on"; // Jeanette Trust - Planner
//$_SESSION[$session_id]['plnwks'] = "on"; // Kanti Shrestha - Planner
//$_SESSION[$session_id]['plncst'] = "on"; // Catrice Staffney - Planner
//$_SESSION[$session_id]['plnmm'] = "on"; // Marcella Mannino - Planner

$_SESSION[$session_id]['pmmw'] = "on"; // Michelle Wang - Project Manager
$_SESSION[$session_id]['pmmj'] = "on"; // Mollie Jace - Project Manager
$_SESSION[$session_id]['pmll'] = "on"; // Lien Le - Project Manager
$_SESSION[$session_id]['pmtm'] = "on"; // Tina Moskin - Project Manager
$_SESSION[$session_id]['pmmh'] = "on"; // Michael Hannibal - Project Manager


// end of white list of authorized user of this Matrix 


if (!isset($_SESSION[$session_id]['user_id'])){
    $host  = $_SERVER['HTTP_HOST'];
    $extra = 'access_matrix/matrix_login.php';
		
    header("Location: $protocol://$host/$extra?z=$private_key");

}// end if (!isset($_SESSION['rec_id']))

/* ************************************************************************* */
/* ****************** END OF LOGIN CHECK FOR MATRIX ************************ */
/* ************************************************************************* */



//********************************************************************
//******************* FILE SETTINGS   ********************************
//********************************************************************



//OPTIONAL - to filter data out of the table 
// e.g. $extra_filtering = "name_of_db_field='value in single quotes'";
// e.g. $extra_filtering = "location='singapore'";
$extra_filtering = ""; // leave empty if not in use

//********************************************************************
//********** SHOULD NOT NEED TO GO BELOW THIS LINE  ******************
//********************************************************************




//********************************************************************
//********** HTML HEADER  ********************************************
//********************************************************************

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title><?php echo EVENT_NAME;?></title>

<script type="text/javascript" src="../js/jquery126.js"></script>
<script type="text/javascript" src="../js/jquery.tablesorter.js"></script>
<script type="text/javascript">
$(document).ready(function() 
    {
    $.tablesorter.defaults.widgets = ['zebra']; 
	$.tablesorter.defaults.sortList = [[0,1]]; 
        $("#mytable").tablesorter(); 
    } 
); 
</script>

<style type="text/css">
<!--
body {
	font: normal 11px auto "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
	color: #4f6b72;
	background: #e0e0e0; /*#E6EAE9*/
}

a {
	color: #c75f3e;
}

/* tables */
table.tablesorter {
	font-family:arial;
	background-color: #CDCDCD;
	margin:10px 0pt 15px;
	font-size: 8pt;
	width: 100%;
	text-align: left;
}
table.tablesorter thead tr th, table.tablesorter tfoot tr th {
	background-color: #e6EEEE;
	border: 1px solid #FFF;
	font-size: 8pt;
	padding: 4px 20px 4px 4px;
}
table.tablesorter thead tr .header {
	background-image: url(images/bg.gif);
	background-repeat: no-repeat;
	background-position: center right;
	cursor: pointer;
}
table.tablesorter tbody td {
	color: #3D3D3D;
	padding: 4px;
	background-color: #FFF;
	vertical-align: top;
}
table.tablesorter tbody tr.odd td {
	background-color:#F0F0F6;
}
table.tablesorter thead tr .headerSortUp {
	background-image: url(images/asc.gif);
}
table.tablesorter thead tr .headerSortDown {
	background-image: url(images/desc.gif);
}
table.tablesorter thead tr .headerSortDown, table.tablesorter thead tr .headerSortUp {
background-color: #8dbdd8;
}

.cap {
text-transform: capitalize;
}
-->
</style>

<!-- will be setup later in life... -->
<!-- <link href="../css/report_style.css" rel="stylesheet" type="text/css" media="screen" /> -->

</head>
<body>

<?php





//********************************************************************
//******************* FILTER TREATMENT *******************************
//********************************************************************

$and_or = "and";
$the_prompt = "  No Filter - All data displayed";

$the_where_0 = "";
$the_filter[0] = "";
$the_criteria[0] = "";
$the_operator[0] = "";

$the_where_1 = "";
$the_filter[1] = "";
$the_criteria[1] = "";
$the_operator[1] = "";


//FILTER #1 ---------------------------------------
if (isset($_POST['the_criteria'][0])) {
	$the_filter[0] = $_POST['the_filter'][0];
	$the_operator[0] = $_POST['the_operator'][0];
	$the_criteria[0] = strtolower($_POST['the_criteria'][0]);
	$the_where_0 = " WHERE LOWER(" . $the_filter[0] . ") ";
	switch ($the_operator[0]){
		case "equals":
			$the_where_0 .= " = '" . $the_criteria[0] . "'";
			break;
		case "contains":
			$the_where_0 .= " LIKE '%" . $the_criteria[0] . "%'";
			break;
		case "notcontains":
			$the_where_0 .= " NOT LIKE '%" . $the_criteria[0] . "%'";
			break;
		case "starts":
			$the_where_0 .= " LIKE '" . $the_criteria[0] . "%'";
			break;
		case "ends":
			$the_where_0 .= " LIKE '%" . $the_criteria[0] . "'";
			break;
	}//end switch ($the_operator[0])
	$the_prompt = "  Filter is applied to data below&nbsp;&ndash;&nbsp;";
	$the_prompt .= "<a href=\"" . $_SERVER['PHP_SELF'] . "?clear_filter=yes\">Clear Filter</a>"; // no $_GET capture is necessary, no filter is default when form is not submitted - the querystring forces the clearing of the cache...
//FILTER #2 ---------------------------------------
	if ($_POST['the_criteria'][1]!="") {
		$and_or = $_POST['and_or'];
		$the_filter[1] = $_POST['the_filter'][1];
		$the_operator[1] = $_POST['the_operator'][1];
		$the_criteria[1] = strtolower($_POST['the_criteria'][1]);
		$the_where_1 = " $and_or LOWER(" . $the_filter[1] . ") ";
		switch ($the_operator[1]){
			case "equals":
				$the_where_1 .= " = '" . $the_criteria[1] . "'";
				break;
			case "contains":
				$the_where_1 .= " LIKE '%" . $the_criteria[1] . "%'";
				break;
			case "notcontains":
				$the_where_1 .= " NOT LIKE '%" . $the_criteria[1] . "%'";
				break;
			case "starts":
				$the_where_1 .= " LIKE '" . $the_criteria[1] . "%'";
				break;
			case "ends":
				$the_where_1 .= " LIKE '%" . $the_criteria[1] . "'";
				break;
		}//end switch ($the_operator[1])
	}// if (isset($_POST['the_criteria'][1])) 
}// if (isset($_POST['the_criteria'][0])) 






//********************************************************************
//******************* SQL REQUESTS ***********************************
//********************************************************************


$the_where_x = "";
$the_where_xf = "";
if($extra_filtering!=""){
  $the_where_x =" WHERE  $extra_filtering ";
  if ($the_where_0!=""){
	  $the_where_xf =" AND $extra_filtering ";
  }else{
    $the_where_xf =" WHERE  $extra_filtering ";
  }//end if
}//end if($extra_filtering!="")


$query_all = "SELECT * FROM " . DB_TABLE . 	$the_where_x;
$result_all = mysql_query($query_all) or die("yo58FGHJV90760bklu.");
//$result_all = mysql_query($query_all) or die("Could not execute $query_all"); // do not display querytrings when live, it's a giveaway to database injection attacks
$numofrows_all = mysql_num_rows($result_all);

$query = "SELECT * FROM " . DB_TABLE . " $the_where_0 $the_where_1 $the_where_xf 	ORDER BY id DESC";
$result = mysql_query($query) or die("io689*(&hbkjjkbnl");
//$result = mysql_query($query) or die("Could not execute $query"); // do not display querytrings when live, it's a giveaway to database injection attacks
$numofrows = mysql_num_rows($result);





//********************************************************************
//******************* PAGE TITLE & FILTER FORM **********************
//********************************************************************

date_default_timezone_set(EVENT_TZ);

echo "\n<table  cellspacing=\"0\"  cellpadding=\"0\" width=\"980\">";
echo "\t<tr><td style=\"width:50%; vertical-align:top;\" >";
echo "\n<p><strong>" . EVENT_NAME ." (Total: " . $numofrows ." of " . $numofrows_all ." )</strong>";
echo "\n<br />Report as of " . date("m/j/Y h:i:s A") . "</p>";
echo "\n<p><input type=\"button\" onClick=\"window.location.href='export.php'\" value=\"Export Report to Excel\" />    </p>";
echo "\t<td style=\"width:50%; vertical-align:top;\" >";

echo "<form action=\"" . $_SERVER["PHP_SELF"] . "\" method=\"post\">";

//filter #1 -------------------------------------------------------------------------------
echo "\n<div>\n<select name=\"the_filter[0]\" style=\"width:150px\">";




echo "\n\t<option value=\"restricted_official\" ". iif($the_filter[0]=="restricted_official","selected=\"selected\"","") . ">Restricted Official</option>";
echo "\n\t<option value=\"accept_entertainment\" ". iif($the_filter[0]=="accept_entertainment","selected=\"selected\"","") . ">Accept Entertainment</option>";
echo "\n\t<option value=\"bc_status\" ". iif($the_filter[0]=="bc_status","selected=\"selected\"","") . ">Bc Status</option>";
echo "\n\t<option value=\"attendance\" ". iif($the_filter[0]=="attendance","selected=\"selected\"","") . ">Attendance</option>";
echo "\n\t<option value=\"first_name\" ". iif($the_filter[0]=="first_name","selected=\"selected\"","") . ">First Name</option>";
echo "\n\t<option value=\"last_name\" ". iif($the_filter[0]=="last_name","selected=\"selected\"","") . ">Last Name</option>";
echo "\n\t<option value=\"company\" ". iif($the_filter[0]=="company","selected=\"selected\"","") . ">Company</option>";
echo "\n\t<option value=\"title\" ". iif($the_filter[0]=="title","selected=\"selected\"","") . ">Title</option>";
echo "\n\t<option value=\"telephone\" ". iif($the_filter[0]=="telephone","selected=\"selected\"","") . ">Telephone</option>";
echo "\n\t<option value=\"email\" ". iif($the_filter[0]=="email","selected=\"selected\"","") . ">Email</option>";
echo "\n\t<option value=\"barcap_contact_first_name\" ". iif($the_filter[0]=="barcap_contact_first_name","selected=\"selected\"","") . ">Barcap Contact First Name</option>";
echo "\n\t<option value=\"barcap_contact_last_name\" ". iif($the_filter[0]=="barcap_contact_last_name","selected=\"selected\"","") . ">Barcap Contact Last Name</option>";
echo "\n\t<option value=\"dietary_restriction\" ". iif($the_filter[0]=="dietary_restriction","selected=\"selected\"","") . ">Dietary Restriction</option>";
echo "\n\t<option value=\"notes\" ". iif($the_filter[0]=="notes","selected=\"selected\"","") . ">Notes</option>";
echo "\n\t<option value=\"privacy_agreement\" ". iif($the_filter[0]=="privacy_agreement","selected=\"selected\"","") . ">Privacy Agreement</option>";



echo "\n</select>";

echo "\n\n<select name=\"the_operator[0]\">";
        echo "\n\t<option value=\"equals\" ". iif($the_operator[0]=="equals","selected = \"selected\"","") . ">Matches Exactly</option>";
        echo "\n\t<option value=\"contains\" ". iif($the_operator[0]=="contains","selected = \"selected\"","") . ">Contains</option>";
        echo "\n\t<option value=\"notcontains\" ". iif($the_operator[0]=="notcontains","selected = \"selected\"","") . ">Does NOT Contains</option>";
        echo "\n\t<option value=\"starts\"  ". iif($the_operator[0]=="starts","selected = \"selected\"","") . ">Starts with</option>";
        echo "\n\t<option value=\"ends\" ". iif($the_operator[0]=="ends","selected = \"selected\"","") . ">Ends with</option>";
echo "\n</select>
";

echo "
<input type=\"text\" name=\"the_criteria[0]\" value=\"" . $the_criteria[0] . "\" /></div>";


//Logical Operator ------------------------------------------------------------------------
echo "\n<div>";
echo "\n<input type=\"radio\" name=\"and_or\" value=\"and\" ". iif($and_or=="and","checked=\"checked\"","") . " /> AND ";
echo "\n<input type=\"radio\" name=\"and_or\" value=\"or\" ". iif($and_or=="or","checked=\"checked\"","") . " /> OR ";
echo "\n</div>";

//filter #2 -------------------------------------------------------------------------------
echo "\n<div>\n<select name=\"the_filter[1]\" style=\"width:150px\">";




echo "\n\t<option value=\"restricted_official\" ". iif($the_filter[1]=="restricted_official","selected=\"selected\"","") . ">Restricted Official</option>";
echo "\n\t<option value=\"accept_entertainment\" ". iif($the_filter[1]=="accept_entertainment","selected=\"selected\"","") . ">Accept Entertainment</option>";
echo "\n\t<option value=\"bc_status\" ". iif($the_filter[1]=="bc_status","selected=\"selected\"","") . ">Bc Status</option>";
echo "\n\t<option value=\"attendance\" ". iif($the_filter[1]=="attendance","selected=\"selected\"","") . ">Attendance</option>";
echo "\n\t<option value=\"first_name\" ". iif($the_filter[1]=="first_name","selected=\"selected\"","") . ">First Name</option>";
echo "\n\t<option value=\"last_name\" ". iif($the_filter[1]=="last_name","selected=\"selected\"","") . ">Last Name</option>";
echo "\n\t<option value=\"company\" ". iif($the_filter[1]=="company","selected=\"selected\"","") . ">Company</option>";
echo "\n\t<option value=\"title\" ". iif($the_filter[1]=="title","selected=\"selected\"","") . ">Title</option>";
echo "\n\t<option value=\"telephone\" ". iif($the_filter[1]=="telephone","selected=\"selected\"","") . ">Telephone</option>";
echo "\n\t<option value=\"email\" ". iif($the_filter[1]=="email","selected=\"selected\"","") . ">Email</option>";
echo "\n\t<option value=\"barcap_contact_first_name\" ". iif($the_filter[1]=="barcap_contact_first_name","selected=\"selected\"","") . ">Barcap Contact First Name</option>";
echo "\n\t<option value=\"barcap_contact_last_name\" ". iif($the_filter[1]=="barcap_contact_last_name","selected=\"selected\"","") . ">Barcap Contact Last Name</option>";
echo "\n\t<option value=\"dietary_restriction\" ". iif($the_filter[1]=="dietary_restriction","selected=\"selected\"","") . ">Dietary Restriction</option>";
echo "\n\t<option value=\"notes\" ". iif($the_filter[1]=="notes","selected=\"selected\"","") . ">Notes</option>";
echo "\n\t<option value=\"privacy_agreement\" ". iif($the_filter[1]=="privacy_agreement","selected=\"selected\"","") . ">Privacy Agreement</option>";



echo "\n</select>";

echo "\n\n<select name=\"the_operator[1]\">";
        echo "\n\t<option value=\"equals\" ". iif($the_operator[1]=="equals","selected = \"selected\"","") . ">Matches Exactly</option>";
        echo "\n\t<option value=\"contains\" ". iif($the_operator[1]=="contains","selected = \"selected\"","") . ">Contains</option>";
        echo "\n\t<option value=\"notcontains\" ". iif($the_operator[1]=="notcontains","selected = \"selected\"","") . ">Does NOT Contains</option>";
        echo "\n\t<option value=\"starts\"  ". iif($the_operator[1]=="starts","selected = \"selected\"","") . ">Starts with</option>";
        echo "\n\t<option value=\"ends\" ". iif($the_operator[1]=="ends","selected = \"selected\"","") . ">Ends with</option>";
echo "\n</select>
";

echo "\n<input type=\"text\" name=\"the_criteria[1]\" value=\"" . $the_criteria[1] . "\" /></div>";


echo "\n<div style=\"margin:5px 0 0 0;\"><input type=\"submit\" value=\"Filter List\" />";
echo $the_prompt . "</div>";
echo "\n</form>";
echo "\n</td></tr>";
echo "\n</table>";






//********************************************************************
//******************* DATA OUTPUT ************************************
//********************************************************************

echo "\n<table id=\"mytable\" cellspacing=\"1\" class=\"tablesorter\"><thead><tr>\n";



// HEADERS HEADERS HEADERS HEADERS HEADERS HEADERS HEADERS


echo "\n<th>ID</th>";
echo "\n<th>Timestamp</th>";
echo "\n<th>Restricted Official</th>";
echo "\n<th>Accept Entertainment</th>";
echo "\n<th>BC Status</th>";
echo "\n<th>Attendance</th>";
echo "\n<th>First Name</th>";
echo "\n<th>Last Name</th>";
echo "\n<th>Company</th>";
echo "\n<th>Title</th>";
echo "\n<th>Telephone</th>";
echo "\n<th>Email</th>";
echo "\n<th>Barclays Contact First Name</th>";
echo "\n<th>Barclays Contact Last Name</th>";
echo "\n<th>Dietary Restriction</th>";
echo "\n<th>Notes</th>";
echo "\n<th>Privacy Agreement</th>";




echo "\n</tr></thead><tbody>\n\n";

// ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS 
while ($row = mysql_fetch_array($result)){

echo "\n<tr>\n";




 echo "\t\t<td>" . $row['id'] . "</td>\n";
 echo "\t\t<td>" . $row['timestamp'] . "</td>\n";
 echo "\t\t<td>" . $row['restricted_official'] . "</td>\n";
 echo "\t\t<td>" . $row['accept_entertainment'] . "</td>\n";
 echo "\t\t<td>" . $row['bc_status'] . "</td>\n";
 echo "\t\t<td>" . $row['attendance'] . "</td>\n";
 echo "\t\t<td>" . $row['first_name'] . "</td>\n";
 echo "\t\t<td>" . $row['last_name'] . "</td>\n";
 echo "\t\t<td>" . $row['company'] . "</td>\n";
 echo "\t\t<td>" . $row['title'] . "</td>\n";
 echo "\t\t<td>" . $row['telephone'] . "</td>\n";
 echo "\t\t<td>" . $row['email'] . "</td>\n";
 echo "\t\t<td>" . $row['barcap_contact_first_name'] . "</td>\n";
 echo "\t\t<td>" . $row['barcap_contact_last_name'] . "</td>\n";
 echo "\t\t<td>" . $row['dietary_restriction'] . "</td>\n";
 echo "\t\t<td>" . $row['notes'] . "</td>\n";
 echo "\t\t<td>" . $row['privacy_agreement'] . "</td>\n";




echo "</tr>";

}//end while $row = mysql_fetch_array($result_all)

echo "\n</tbody></table>";
?>


</body>
</html>





