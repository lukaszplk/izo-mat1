<?php
// Test file for lplk.org.pl domain
echo "<h1>IZO-MAT Domain Test</h1>";
echo "<p>Domain: " . $_SERVER['HTTP_HOST'] . "</p>";
echo "<p>Server: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Current Time: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<hr>";
echo "<p><a href='/'>Go to Main Site</a></p>";
?>
