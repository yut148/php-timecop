--TEST--
Function overloading test 4
--SKIPIF--
<?php 
	extension_loaded('timecop') or die('skip timecop not available');
	if (!function_exists("time")) {
		die('skip time() function is not available.');
	}
?>
--INI--
timecop.func_overload=1
--FILE--
<?php
$_SERVER['REQUEST_TIME']=timecop_strtotime("2012-02-29 01:23:45 GMT");
var_dump(gmdate("Y-m-d H:i:s"));
--EXPECT--
string(19) "2012-02-29 01:23:45"