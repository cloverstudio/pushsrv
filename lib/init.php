<?php 

	/////////////////////////////////////////////////////////////////////////////////////
	// Database settings
	/////////////////////////////////////////////////////////////////////////////////////

	define("DB_HOST",""); // change this
	define("DB_NAME",""); // change this
	define("DB_USER",""); // change this
	define("DB_PASS",""); // change this
	
	/////////////////////////////////////////////////////////////////////////////////////
	// Debug settings
	/////////////////////////////////////////////////////////////////////////////////////
	
	define('ShowErr',false);
	define('LogAccess',false);
	define('LogErr',false);
	define('LogQuery',false);
	
	/////////////////////////////////////////////////////////////////////////////////////
	// Pushnotification settings
	/////////////////////////////////////////////////////////////////////////////////////

	define('GCM_API_KEY',""); // change this
	define('APN_DEV_CERT',""); // change this
	define('APN_PROD_CERT',""); // change this
	
	/////////////////////////////////////////////////////////////////////////////////////
	// QUEUE settings
	/////////////////////////////////////////////////////////////////////////////////////
	
	define('USE_QUEUE',true); // this should be false if you can't execute command
	define('MAX_REQUESTS_PER_INTERNAL',20);
	define('RELEASE_INTERVAL',1); // sec
	
	/////////////////////////////////////////////////////////////////////////////////////
	// SYSTEM settings
	/////////////////////////////////////////////////////////////////////////////////////

	define('PHP_COMMAND',"php"); // apsolute path for php command
	define('ROOT_URL',''); // change this
	define('SP_TIMEOUT',20); // sec
	
	/////////////////////////////////////////////////////////////////////////////////////
	// ADMIN settings
	/////////////////////////////////////////////////////////////////////////////////////

	define('SHOW_SERVERSTAT',true); 
	define('ADMIN_USERNAME',"admin"); // change this
	define('ADMIN_PASSWORD',"password"); // change this
	
?>