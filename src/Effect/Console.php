<?php

$log = function($s) use (&$log) { return function() use(&$s) { print($s . "\n"); }; };

$exports['log'] = $log;
return $exports;
