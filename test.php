<?php
require_once __DIR__ . '/vendor/autoload.php';

use Foo\Command;
use Foo\Writer\Output;

$command = new Command(new Output());
$command();
