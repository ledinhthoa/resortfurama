<?php
$erro=array();
if ($_POST['dientichdichvu']<30){
    $erro['dientichdichvu']='dien tich phai lon hon 30';
}
if ($_POST['songuoitoida']<20){
    $erro['songuoitoida']='so luong nguoi phai nho hon 20';
}
if ($_POST['giathue']>0){
    $erro['giathue']='gia thue phai la nguyen duong';
}