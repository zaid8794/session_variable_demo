<?php
$a = 10;
echo isset($a)."<br/>";
if (isset($b)) {
    echo "B is set<br/>";
} else {
    echo "B is not set<br/>";
}

// unset
$z = "Zaid";
echo $z."<br/>"; //print
unset($z); //delete
echo $z;