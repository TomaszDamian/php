<?php
$array = ["name" => "John", "age" => 32, "town" => "Keflavík"];
$arr = array_keys($array);

echo ":".implode(", :", $arr);
