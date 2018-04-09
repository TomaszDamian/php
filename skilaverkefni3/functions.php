<?php
function daysInMonth($month){
	$monthNumber = date('m',strtotime($month));
	$monthNumber = (int)$monthNumber;
	$AmountInMonth = cal_days_in_month(CAL_GREGORIAN, $monthNumber, 2018);
	return $AmountInMonth;
}

function DaysInMonths($months){
	$TotalDaysInMonths = 0;
	foreach ($months as $Month) {
		$days = daysInMonth($Month);
		$TotalDaysInMonths += $days;
	}
	return $TotalDaysInMonths;
}