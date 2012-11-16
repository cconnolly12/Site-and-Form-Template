

<?php

/* ***************************************************************** */
/* ***************************************************************** */
// This piece of code will redirect the user to the home page of your choice
// (registration.html, invitation.html, etc.) without typing it
// This page must be saved on you site as "index.php"
//
// e.g.:
// if you set $homepage = 'invitation.html';
// typing
// http://barclayscapitalcommunications.com/your_site_folder/
// will bring the user directly to
// http://barclayscapitalcommunications.com/your_site_folder/invitation.html

// it is a step forward what is called "pretty URLs"
// it looks neat and clean from the user and the client prospective
// and it helps preserve the integrity on the site structure.
// it is also convenient when you forgot pages exact spelling 
//
// Thank you
/* ***************************************************************** */
/* ***************************************************************** */


$homepage = 'invitation.html';

if (isset($_SERVER['HTTPS'])) $protocol =  "https"; else $protocol =  "http";
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: $protocol://$host$uri/$homepage");

?>


