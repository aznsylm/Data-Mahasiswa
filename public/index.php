<?php
if( !session_id() ) session_start(); //kalau skripnya 1 baris, ga pake kurawal pun ga masalah;

require_once '../app/init.php';

$app = new App;