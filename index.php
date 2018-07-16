<?php
require_once('smarty-3.1.32/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';


$array = array(
	'Jesse' => 25,
	'Joe' => 26,
	'Jenny' => 24,
	'Justine' => 23,
);

// to pop it into a template
$smarty->assign('people', $array);


$arr = array(1000, 1001, 1002);
$smarty->assign('myArray', $arr);

$arr = array('red', 'green', 'blue');
$smarty->assign('myColors', $arr);

// PEOPLE
$people = array('fname' => 'John', 'lname' => 'Doe', 'email' => 'j.doe@example.com');
$smarty->assign('myPeople', $people);



$smarty->display('index.tpl');

