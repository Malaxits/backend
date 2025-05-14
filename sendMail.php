<?php


echo '============' . "\n";

$to = 'a.vorobiov@khai.edu';
$subject = 'MY TEST EMAIL';
$additional_headers = '';
$FirstName = 'Alexander';
$LastName = 'Nazarov';
$group = 539;
$text = "firstName : {$FirstName} \nlastName : {$LastName}\n";
$text_1 = "Group : {$group} \n";
$text_2 = 'test  1';
$text_3 = 'test  2';

$message = "{$text} {$text_1} {$text_2}\n{$text_3}\n";

echo $subject . "\n";
echo '============' . "\n";


echo $message;
$headers = 'From: o.i.nazarov@student.khai.edu';
mail('a.vorobiov@khai.edu', $subject, $message, $headers);
