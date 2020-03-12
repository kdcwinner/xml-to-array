<?php
//$file_str = file_get_contents("email.xml");

$xml_obj = simplexml_load_file("email.xml");

$json_obj = json_encode($xml_obj);

$data = json_decode($json_obj,true);


$table = '<table border="1"><tr><th>From</th><th>To</th><th>Subject</th><th>Message</th></tr>';
foreach ($data['email'] as $key => $value) {
	$table .= '<tr><td>'.$value['from'].'</td><td>'.$value['to'].'</td><td>'.$value['heading'].'</td><td>'.$value['body'].'</td></tr>';

}
$table .='</table>';


echo $table;
?>