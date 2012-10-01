#!/usr/bin/php
<?php

/**
 * Bootstrap startup file
 * This is going to be the program executable. Shebang should be changed upon install if necessary
 */

$startTime = microtime(true);

require_once 'src/BackToPhp.php';

$b2p = new BackToPhp();
$b2p->bootstrap()->run();

$endTime = microtime(true);
$elapsedTime = $endTime - $startTime;
print "\nElapsed time: " . number_format($elapsedTime, 7) . " seconds\n";
