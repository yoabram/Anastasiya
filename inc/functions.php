<?php
session_start();
$data = array('name' =>'','fam' =>'','number' =>'', 'email' =>'', 'product' =>'', 'price' =>'',);
if(!empty($_POST)){
    require_once 'db.php';
    $data = load($data);
    save($db, $data);
   // setPaymentData($order_id);
    header('Location: inc/form.php');
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

/**
 * @param $db
 * @param $data
 */
function save ($db, $data){
    $query ="INSERT INTO orders (\"name\", \"fam\", \"number\", \"email\", \"product\", \"price\") VALUES ($data)";
    pg_query($db,$query);
//    $tbl = R::dispense($table);
//    foreach ($data as $k => $v){
//        $tbl->$k = $v;
//    }
// return R::store($tbl);
}
function debug($data){
    echo '<pre>'. print_r($data, true).'</pre>';
}