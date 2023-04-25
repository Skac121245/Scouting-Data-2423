<?php

require_once __DIR__ . '/tests/autoload.php'; //check this to be sure it works

ParseClient::initialize('2423_Scouting', 'master'); //PLS DOWNLOAD CLIENT WINDOW
ParseClient::setServerURL('http://localhost:1337/parse');
use Parse\ParseObject;
use Parse\ParseQuery;

$checkBox = new ParseObject('CheckBox');
$checkBox->set('isTrue', false);
$checkBox->save();
?>