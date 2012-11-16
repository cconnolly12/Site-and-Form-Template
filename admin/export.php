

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


//OPTIONAL - to break the table 
// e.g. $extra_filtering = "name_of_db_field='value in single quotes'";
// e.g. $extra_filtering = "location='singapore'";
$extra_filtering = ""; // leave empty if not in use

//OPTIONAL - Custom Excel filename (excel filename is auto-generated using the event name) 
//e.g. $my_custom_filename = "excel_filename.xls";
$my_custom_filename = ""; // leave empty if not in use

//********************************************************************
//********** SHOULD NOT NEED TO GO BELOW THIS LINE  ******************
//********************************************************************







//********************************************************************
//******************* EXCEL FILE NAME CREATION ***********************
//********************************************************************


if ($my_custom_filename!=""){
	  $event_name = $my_custom_filename;  
}else{
    $event_name = EVENT_NAME;
    $event_name = strtolower($event_name); 
    $event_name = str_replace(chr(64),"_at_",$event_name); //replaces @
    $event_name = str_replace(chr(38),"_and_",$event_name); //replaces ampersand
    $chr_to_replace = array(32,33,34,35,36,37,39,40,41,42,43,44,45,46,47,58,59,60,61,62,63,91,92,93,94,96,123,124,125,126);
    foreach ($chr_to_replace as $chr_num){$event_name = str_replace(chr($chr_num),chr(95),$event_name);}
    $event_name = str_replace("__",chr(95),$event_name);
    $event_name .= ".xls";
}// end if ($my_custom_filename!="")







//********************************************************************
//******************* FILE HEADER ************************************
//********************************************************************

      header('Content-Type: application/vnd.ms-excel'); //IE and Opera  
      header('Content-Type: application/x-msexcel'); // Other browsers  
      header('Content-Disposition: attachment; filename=' .$event_name);
      header('Expires: 0');  
      header('Cache-Control: private');  
      header('Pragma: cache');  







//********************************************************************
//******************* EXCEL OUTPUT ***********************************
//********************************************************************

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<xml>
	<x:ExcelWorkbook>
	<x:ExcelWorksheets>
		   <x:ExcelWorksheet>
		   <x:Name></x:Name>
		   <x:WorksheetOptions>
				   <x:DisplayGridlines/>
		   </x:WorksheetOptions>
		   </x:ExcelWorksheet>
	</x:ExcelWorksheets>
	</x:ExcelWorkbook>
</xml>
<style type="text/css">
<!--
td { border: 1px solid #000;}
.cap { text-transform: capitalize;}
-->
</style>
</head>
<body>

<?php




//********************************************************************
//******************* SQL REQUEST ************************************
//********************************************************************

if($extra_filtering!="")$the_where_x =" WHERE  $extra_filtering "; else $the_where_x = "";

$query_all = "SELECT * FROM " . DB_TABLE . 	$the_where_x;
$result_all = mysql_query($query_all) or die("hsdklg598#%^dgh");
//$result_all = mysql_query($query_all) or die("Could not execute $query_all"); // do not display querytrings when live, it's a giveaway to database injection attacks
$numofrows_all = mysql_num_rows($result_all);





//********************************************************************
//******************* DATA OUTPUT ************************************
//********************************************************************


date_default_timezone_set(EVENT_TZ);

echo "<p><strong>" . EVENT_NAME . "(Total: " . $numofrows_all . " )</strong>";
echo "<br />Report as of " . date('m/j/Y h:i:s A') . "</p>";
echo "<table><thead><tr>";



// HEADERS HEADERS HEADERS HEADERS HEADERS HEADERS HEADERS

echo "<th>ID</th>";
echo "<th>Timestamp</th>";
echo "<th>Restricted Official</th>";
echo "<th>Accept Entertainment</th>";
echo "<th>BC Status</th>";
echo "<th>Attendance</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Company</th>";
echo "<th>Title</th>";
echo "<th>Telephone</th>";
echo "<th>Email</th>";
echo "<th>Barcap Contact First Name</th>";
echo "<th>Barcap Contact Last Name</th>";
echo "<th>Dietary Restriction</th>";
echo "<th>Notes</th>";
echo "<th>Privacy Agreement</th>";




echo "
</tr></thead><tbody>

";

// ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS ROWS 
while ($row = mysql_fetch_array($result_all)){

echo "<tr>";



		 echo "<td>" . $row['id'] . "</td>";
		 echo "<td>" . $row['timestamp'] . "</td>";
		 echo "<td>" . $row['restricted_official'] . "</td>";
		 echo "<td>" . $row['accept_entertainment'] . "</td>";
		 echo "<td>" . $row['bc_status'] . "</td>";
		 echo "<td>" . $row['attendance'] . "</td>";
		 echo "<td>" . $row['first_name'] . "</td>";
		 echo "<td>" . $row['last_name'] . "</td>";
		 echo "<td>" . $row['company'] . "</td>";
		 echo "<td>" . $row['title'] . "</td>";
		 echo "<td>" . $row['telephone'] . "</td>";
		 echo "<td>" . $row['email'] . "</td>";
		 echo "<td>" . $row['barcap_contact_first_name'] . "</td>";
		 echo "<td>" . $row['barcap_contact_last_name'] . "</td>";
		 echo "<td>" . $row['dietary_restriction'] . "</td>";
		 echo "<td>" . $row['notes'] . "</td>";
		 echo "<td>" . $row['privacy_agreement'] . "</td>";





echo "</tr>";

}//end while $row = mysql_fetch_array($result_all)

echo "</tbody></table>";
?>


</body>
</html>




