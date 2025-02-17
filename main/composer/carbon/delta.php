<?php
// Add time to get a future date

$date = new DateTime();
$format = "Y-m-d";

echo $date->format($format) . "\n";
    # 2021-12-20

$date->modify("+12 days");
echo $date->format($format) . "\n";
    # 2021-01-01

$date->modify("+31 days");
echo $date->format($format) . "\n";
    # 2021-02-01

$date->modify("+31 days");
echo $date->format($format) . "\n";
    # 2021-03-04