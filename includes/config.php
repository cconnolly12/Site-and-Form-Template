

<?php

//Code Generated on 07/30/2012 01:07:48

/* ********************************************************************************** */
/* ******* ABOUT CONFIG FILE ******************************************************** */
/* ********************************************************************************** */
/*

The config file centralize data used repeatedly across  the registration page and the Matrix
config also detect which path the site is on, and passes it to absolute path for email images

*/



/* ********************************************************************************** */
/* ******* META DATA **************************************************************** */
/* ********************************************************************************** */
define("CSNY_MAIL","creativeservicesny@barclays.com");

/* ********************************************************************************** */
/* ******* EVENT INFORMATION ******************************************************** */
/* ********************************************************************************** */
define("CSNY_NUMBER","424716");
define("EVENT_NAME","POINT Advisory Council and Third Annual Portfolio Management Conference");//do not include "Barclays " or the year; these will be inserted
define("EVENT_DATE",strtotime("10/10/2012"));//month/day/year
define("EVENT_TZ","America/New_York");// go to http://us.php.net/manual/en/timezones.php for more time zones
define("EVENT_RSVP_DATE","10/04/2012 17:00:00");//month/day/year hour:min:sec (military time)
define("EVENT_CLOSED_DATE","10/05/2012 12:00:00");//month/day/year hour:min:sec (military time)


/* ********************************************************************************** */
/* ******* PLANNER(S) INFORMATION ****************************************************** */
/* ********************************************************************************** */




              define("PLANNER1_NAME","Jeffrey Orlowsky");
              define("PLANNER1_TITLE","");
              define("PLANNER1_DEPT","Event and Roadshow Marketing");
              define("PLANNER1_MAIL","jeffrey.orlowsky@barclays.com");
              define("PLANNER1_PHONE","+1 212 412 2601");



              // Uncomment out planner 2 if neeeded
							// Replace with actual values...
              /*
              define("PLANNER2_NAME","PlannerName");
              define("PLANNER2_TITLE","PlannerTitle");
              define("PLANNER2_DEPT","PlannerDept");
              define("PLANNER2_MAIL","PlannerEmail");
              define("PLANNER2_PHONE","PlannerPhone");
							*/



/* ********************************************************************************** */
/* ******* DEVELOPER INFORMATION **************************************************** */
/* ********************************************************************************** */
//submission script errors will be sent out to the developer
define("DESIGNER_NAME","Charles Connolly");
define("DESIGNER_MAIL","charles.connolly@barclays.com");
define("DESIGNER_PHONE","+1 212 412 7575");

define("DEVELOPER_NAME","Georges Brisset");
define("DEVELOPER_MAIL","georges.brisset@barclays.com");
define("DEVELOPER_PHONE","+1 212 412 7575");



/* ********************************************************************************** */
/* ******* MYSTERY STUFFS *********************************************************** */
/* ********************************************************************************** */

$const = get_defined_constants(); // to retrieve constant in heredocs
$current_directory = substr(pathinfo($_SERVER['SCRIPT_NAME'],PATHINFO_DIRNAME),1); //to insert path name 
$current_host = pathinfo($_SERVER['REMOTE_ADDR'],PATHINFO_BASENAME);
if (isset($_SERVER['HTTPS'])) $protocol =  "https"; else $protocol =  "http";



/* ********************************************************************************** */
/* ******* DATABASE INFORMATION ***************************************************** */
/* ********************************************************************************** */

// Connection Variables - LIVE
define("DB_HOST","localhost");
define("DB_TABLE","424716_papm");
define("DB_NAME","csny_events");
define("DB_USER","CSNYevents_user");
define("DB_PSWD","CSNYevent_pass");



/* ********************************************************************************** */
/* ******* CONNECTION STRING ******************************************************** */
/* ********************************************************************************** */
$conn = mysql_connect(DB_HOST, DB_USER, DB_PSWD) or die("Error#456-2155 at connect");
mysql_select_db(DB_NAME, $conn) or die("Error#456-2697 at connect");


?>
 





