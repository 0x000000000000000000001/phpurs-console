<?php

$log = function($s) { return function() use(&$s) { echo $s . "\n"; }; };
$warn = function($s) { return function() use(&$s) { file_put_contents('php://stderr', $s . "\n"); }; };
$error = function($s) { return function() use(&$s) { file_put_contents('php://stderr', $s . "\n"); }; };
$info = function($s) { return function() use(&$s) { echo $s . "\n"; }; };
$debug = function($s) { return function() use(&$s) { echo $s . "\n"; }; };

$time = function($s) { return function() {}; };
$timeLog = function($s) { return function() {}; };
$timeEnd = function($s) { return function() {}; };
$clear = function() {};
$group = function($s) { return function() {}; };
$groupCollapsed = function($s) { return function() {}; };
$groupEnd = function() {};

$exports['log'] = $log;
$exports['warn'] = $warn;
$exports['error'] = $error;
$exports['info'] = $info;
$exports['debug'] = $debug;
$exports['time'] = $time;
$exports['timeLog'] = $timeLog;
$exports['timeEnd'] = $timeEnd;
$exports['clear'] = $clear;
$exports['group'] = $group;
$exports['groupCollapsed'] = $groupCollapsed;
$exports['groupEnd'] = $groupEnd;
return $exports;
