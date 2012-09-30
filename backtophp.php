#!/usr/bin/php
<?php

/**
 * Bootstrap startup file
 * This is going to be the program executable. Shebang should be set upon install
 */

require_once 'src/BackToPhp.php';

$b2p = new BackToPhp();
// TODO: Initialize back to php from cli params or ini file, then run
$b2p->run();
