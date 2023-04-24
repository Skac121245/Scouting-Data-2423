<?php
use Parse\ParseObject;
use Parse\ParseQuery;

$checkBox = new ParseObject('CheckBox');
$checkBox->set('isTrue', false);
$checkBox->save();




$query = new ParseQuery('CheckBox');
$results = $query->find();
foreach ($results as $object) {
    echo 'ID: ' . $object->getObjectId() . '<br>';
    echo 'isTrue: ' . ($object->get('isTrue') ? 'true' : 'false') . '<br>';
}
?>