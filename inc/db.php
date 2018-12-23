<?php

require_once 'rb.php';
//$db = parse_url(getenv("DATABASE_URL"));
//$db["path"] = ltrim($db["path"], "/");
R::setup( 'pgsql:host=ec2-54-247-125-116.eu-west-1.compute.amazonaws.com;dbname=d97ld1in8osbcu',
    'mstptdpcpiqzsf', '9eedaf81651c7f2ef284c3835908b4104ebe24e132dae104b4c593a1ae2fd7ce' );


