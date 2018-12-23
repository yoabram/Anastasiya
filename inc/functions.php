<?php
session_start();
$data = array('name' =>'','fam' =>'','number' =>'', 'email' =>'', 'product' =>'', 'price' =>'',);
if(!empty($_POST)){
    require_once 'db.php';
    $data = load($data);
    $order_id = save('orders', $data);
    //setPaymentData($order_id);
    //header('Location: inc/form.php');
    debug($data);
}
function setPaymentData($order_id){
    if (isset($_SESSION['d97ld1in8osbcu'])) unset($_SESSION['d97ld1in8osbcu']);
$_SESSION['d97ld1in8osbcu']['id']=$order_id;
    $_SESSION['orders']['price']=$_POST['price'];
};
function load ($data){
    foreach ($_POST as $k => $v){
        if (array_key_exists($k, $data)){
            $data[$k] = $v;
        }
    }
    return $data;
}
function save ($table, $data){
    $tbl = R::dispense($table);
    foreach ($data as $k => $v){
        $tbl->$k = $v;
    }
 return R::store($tbl);
}
function debug($data){
    echo '<pre>'. print_r($data, true).'</pre>';
}