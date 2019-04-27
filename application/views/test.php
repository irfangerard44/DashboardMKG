<?php
/**
 * Created by PhpStorm.
 * User: Irfan
 * Date: 18/04/2019
 * Time: 17:25
 */
$values = array();
array_push($values,array("Mike","M"));
array_push($values,array("Tom","T"));
array_push($values,array("Jim","XL"));
$someJSON = json_encode(array('item' => $values));
echo $someJSON;
?>