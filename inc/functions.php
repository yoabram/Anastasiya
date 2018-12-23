<?php
session_start();
$data = array('name' =>'','fam' =>'','number' =>'', 'email' =>'', 'product' =>'', 'price' =>'',);
if(!empty($_POST)){
    $data = load($data);
    save($db,'orders', $data);
    setPaymentData();
    header('Location: inc/form.php');
}

function setPaymentData(){
    if (isset($_SESSION['d97ld1in8osbcu'])) unset($_SESSION['d97ld1in8osbcu']);
$_SESSION['d97ld1in8osbcu']['id']=$order_id;
    $_SESSION['orders']['price']=$_POST['price'];
};

/**
 * @param $data
 * @return mixed
 */
function load ($data){
    foreach ($_POST as $k => $v){
        if (array_key_exists($k, $data)){
            $data[$k] = $v;
        }
    }
    return $data;


    //pg_copy_to($db, $table_name, $data);

}
function save ($db, $table, $data){
//    $tbl = R::dispense($table);
//    foreach ($data as $k => $v){
//        $tbl->$k = $v;
//    }
// return R::store($tbl);
    pg_copy_to($db, $table, $data);
}
function debug($data){
    echo '<pre>'. print_r($data, true).'</pre>';
}