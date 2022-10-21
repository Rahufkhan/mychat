<?php

$data = file_get_contents("php://input");
$myobject=json_decode($data);

//json_decode(json) == JSON.parse(); //these two methods are same as in php and JSON in java script
//json_encode(value) == JSON.stringify();
//echo $myobject->gender;

//$myobject=json_decode($data, true); // if you want to conver it into string instaid of object then mention true
//$myobject = (array)$myobject; //if you dont want to mention true then this is also the same as above mentioned.
//echo $myobject['gender'];

//$myobject = (object)$myobject; //converting back to object
//echo $myobject->gender;
//die;


echo "<pre>";
print_r($myobject);
echo "<pre>";