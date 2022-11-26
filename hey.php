<?php
$name1 = "Daoyi";
$name2 = "Astrid";

function myTest() {
	global $name1, $name2;
	$name2 = $name1;
}

myTest();
echo "Hey $name1 $name2 !";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
