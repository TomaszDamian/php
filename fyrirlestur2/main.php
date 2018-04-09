<?php

$greeting = "hello, " . htmlspecialchars($_GET['name']);

require "main.view.php";