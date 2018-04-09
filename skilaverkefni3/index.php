<?php
require 'functions.php';

//many months
$Months = (["January","March","September","October"]);
$HowManydaysInMonths = DaysInMonths($Months);

//one month
$Month = "December";
$HowManydaysInMonth = daysInMonth($Month);
	
require 'index.view.php';