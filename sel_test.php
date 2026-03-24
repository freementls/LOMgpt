<?php

//error_reporting(E_ALL);
ini_set('display_errors', 1);

include('O.php');

$O = new O('test.xml');
$O->debug(true, 9);   // level doesn't hurt, but mainly this flips $this->debug on
$O->debug_clear_log();

$query = '*$=do';

print("RAW QUERY:\n");
var_dump($query);

print("\nNORMALIZED QUERY:\n");
$normalized = $O->normalize_selector($query);
var_dump($normalized);

print("\nUSES OVERLAY:\n");
var_dump($O->_lom_selector_has_overlay($normalized));

print("\nRESULT:\n");
$result = $O->_($query);
var_dump($result);

print("\nSTRUCTURED DEBUG LOG:\n");
$O->debug_dump();

?>
