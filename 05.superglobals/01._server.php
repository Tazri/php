<?php
/**
 * $_SERVER superglobals which holds infromation about headers, path and script
 * location.
 * 
 */

echo "\$_SERVER['PHP_SELF'] : ",$_SERVER['PHP_SELF'],"\n";
echo "\$_SERVER['SCRIPT_NAME'] : ",$_SERVER['SCRIPT_NAME'],"\n";

/**
 * $_SERVER[value];
 * Here some value describe : 
 * SERVER_NAME // return the name of host server
 * SERVER_PROTOCOL // return the name and rivision of the infromation protocol
 * REQUEST_METHOD // return the request method used to access the page
 * 
 */
?>