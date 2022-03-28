<?php 

/**
 * The Carbon class is inherited from the PHP DateTime class.
 * 
 * composer require nesbot/carbon
 */

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

/**
 * next
 */
$now = Carbon::now();
$dt = Carbon::parse($now);
echo $dt->hour . "\n";

$date = $now->add(1, 'day');
echo $date->isoFormat('dddd D') . "\n"; 
    // Tuesday 29
    
$date = $now->add(1, 'month');
echo $date->isoFormat('YYYY-MM-DD') . "\n"; 
    // 2022-04-29

/**
 * timezone
 */
$now = Carbon::now();
$dt = Carbon::parse($now);
echo $dt->timezone . "\n"; 
    // Europe/Helsinki
echo $dt->hour . "\n";
    // 16

$nowLondon = Carbon::now('Europe/London');
$dt = Carbon::parse($nowLondon);
echo $dt->hour  . "\n"; 
    // 14