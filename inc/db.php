<?php

require_once 'rb.php';
$db = parse_url(getenv("DATABASE_URL"));
$db["path"] = ltrim($db["path"], "/");




