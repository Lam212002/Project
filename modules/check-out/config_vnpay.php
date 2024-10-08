<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
$vnp_TmnCode = "MJUENVVI"; //Mã định danh merchant kết nối (Terminal Id)
$vnp_HashSecret = "ZZWXPCRMIGORQJSGPWEEFZUHAPESQRNQ"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/home%20page/%C4%90%E1%BB%93%20%C3%A1n%20chuy%C3%AAn%20ng%C3%A0nh%20PHP%20thu%E1%BA%A7n/?mod=thanhk&act=main";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
$apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
