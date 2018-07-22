<?php
require_once('smarty-3.1.32/libs/Smarty.class.php');

// create object
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

// assign some content 
$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris St.');


// display it
$smarty->display('index.tpl');

