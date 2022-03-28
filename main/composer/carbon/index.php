<?php // composer require nesbot/carbon

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

/**
 * next
 */
$now = Carbon::now();
$date = $now->add(1, 'day');
echo $date->isoFormat('dddd D'); // Tuesday 29
$date = $now->add(1, 'month');
echo $date->isoFormat('YYYY-MM-DD'); // 2022-04-29

/**
 * timezone
 */
$nowLondon = Carbon::now('Europe/London');
$dt = Carbon::parse($nowLondon);
echo $dt->hour; // 13