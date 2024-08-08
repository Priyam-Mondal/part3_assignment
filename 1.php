<?php
// Get PHP version
$php_version = phpversion();

// Get the root directory of the script
$root_directory = $_SERVER['DOCUMENT_ROOT'];

// Get the file name of the currently executing script relative to the document root
$script_name = $_SERVER['SCRIPT_NAME'];

// Get the name of the hosting server
$server_name = $_SERVER['SERVER_NAME'];

// Get the name and version of the protocol via which the page was requested
$protocol = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'Unknown';

// Get the request method used to access the page
$request_method = $_SERVER['REQUEST_METHOD'];

// Get the IP address from where the user is viewing the current page
$client_ip = $_SERVER['REMOTE_ADDR'];

// Get the hostname from where the user is viewing the current page
$client_hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

// Get the port on the server being used for communication
$server_port = $_SERVER['SERVER_PORT'];

// Output the collected information
echo "<h1>Server and Client Information</h1>";
echo "<p><strong>PHP Version:</strong> $php_version</p>";
echo "<p><strong>Root Directory:</strong> $root_directory</p>";
echo "<p><strong>Script Name:</strong> $script_name</p>";
echo "<p><strong>Server Name:</strong> $server_name</p>";
echo "<p><strong>Protocol:</strong> $protocol</p>";
echo "<p><strong>Request Method:</strong> $request_method</p>";
echo "<p><strong>Client IP Address:</strong> $client_ip</p>";
echo "<p><strong>Client Hostname:</strong> $client_hostname</p>";
echo "<p><strong>Server Port:</strong> $server_port</p>";
?>
