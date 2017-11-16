<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN" xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
</head>
<body>
<script type="text/javascript">

<!-- 

//平台、设备和操作系统

var system ={

win : false,

mac : false,

xll : false

};

//检测平台

var p = navigator.platform;

system.win = p.indexOf("Win") == 0;

system.mac = p.indexOf("Mac") == 0;

system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);

if(system.win||system.mac||system.xll){

 window.location.href="./index2.php";
//电脑版跳转
}else{
window.location.href="./index1.php";
//手机版跳转
}

-->

</script></body>
</html>

