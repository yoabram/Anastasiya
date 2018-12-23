<?php

if (!empty($_POST)){
    die;
}

require_once __DIR__.'/inc/db.php';
$key ='gjntzAkwMz2MJyLE';
$ik_id ='5c1e731a3d1eaf91418b456';
$dataSet = $_POST;

unset($dataSet['ik_sign']);
ksort($dataSet, SORT_STRING);
array_push($dataSet,$key);
$signString = implode(':',$dataSet);
$sign = base64_encode(md5($signString, true));

$order = R::load ('orders',(int)$dataSet['ik_pm_no']);
if (!$order) die;

if ($dataSet['ik_co_id'] != $ik_id||$dataSet['ik_inv_st'] != 'success'||
$dataSet['ik_am']!=$order->price||$sign!=$_POST['ik_sign']){
    die;
}
$order->status ='true';
R::store($order);
