<?php
use Parse\ParseObject;
use Parse\ParseQuery;




$query = new ParseQuery('CheckBox');
$results = $query->find();
foreach ($results as $object) {
    echo 'ID: ' . $object->getObjectId() . '<br>';
    echo 'isTrue: ' . ($object->get('isTrue') ? 'true' : 'false') . '<br>';
}
?>