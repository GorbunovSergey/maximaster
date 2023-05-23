<?php
$_POST['date'] = date('Y m d H:i');
if($_POST['name'] == '') {
    $_POST['name'] = 'Аноним';
}
$fp = fopen('messages.csv', 'a');
$arr = $_POST;

fputcsv($fp, $arr);
fclose($fp);

header("Location: index.php");
exit;
