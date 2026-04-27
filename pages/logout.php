
<?php
session_start(); //starting a session
session_unset(); // unsetting a session
session_destroy(); //destroying a session

header("location:home"); //directing to the index page.
?>