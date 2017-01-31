<?php
$prvniVstup = $_GET['prvni'];
$druhyVstup = $_GET['druhy'];

if ($prvniVstup == $druhyVstup) {
	echo ('Vstupy jsou stejné. ');
} else {
	echo ('Vstupy stejné nejsou. ');
}