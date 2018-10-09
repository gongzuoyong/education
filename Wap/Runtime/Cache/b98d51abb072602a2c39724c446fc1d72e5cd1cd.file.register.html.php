<?php /* Smarty version Smarty-3.1.6, created on 2018-07-23 04:47:10
         compiled from "./Wap/Tpl\Login\register.html" */ ?>
<?php /*%%SmartyHeaderCode:93515b54ed4e9cb7a0-45392298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98d51abb072602a2c39724c446fc1d72e5cd1cd' => 
    array (
      0 => './Wap/Tpl\\Login\\register.html',
      1 => 1529591287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93515b54ed4e9cb7a0-45392298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b54ed4ea495c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b54ed4ea495c')) {function content_5b54ed4ea495c($_smarty_tpl) {?><!DOCTYPE html>
<html class="mdd-index" style="font-size: 40px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="charset" content="utf-8">
    <meta name="viewport"
          content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="application-name" content="">
    <title>注册</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="version" content="ddtouch">
    <meta http-equiv="Cache-Control" content="must-revalidate,no-cache">
    <link rel="stylesheet" href="/Public/xinlin/css/common.css">
    <link rel="stylesheet" href="/Public/xinlin/css/login.css?v=20150605">
</head>
<body>
<form id="signup_form" class="form-horizontal" role="form" action="__APP__/index.php/Login/insert" method="post">
<div class="l">

    <table class="l-list">
        <tr>
            <td style="width:40px;">
                <img src="/Public/xinlin/images/login_1.png"/>
            </td>
            <td style="border-bottom:1px solid #dbdbdb;">
                <input type="text" style="width:100%" onblur="checkName()" id="name" name="username" size="30" type="text" value="" placeholder="用户名" datatype="name" errormsg="3-10个字母、数字、下划线组合" nullmsg="用户名不能为空">
            </td>
        </tr>
        <tr style="line-height: 25px; font-size:12px; margin-top: 0px;">
            <td style="width:40px;"></td>
            <td><span id="tishi1" class="Validform_checktip">3-10个字母、数字、下划线组合</span></td>
        </tr>
        <tr>
            <td style="width:40px;">
                <img src="/Public/xinlin/images/login_2.png" style="width:24px;height:31px;"/>
            </td>
            <td style="border-bottom:1px solid #dbdbdb;">
                <input type="password" style="width:82%;" name="userpass" size="30" placeholder="密码" datatype="*6-16" nullmsg="请填写密码" errormsg="密码范围在6~16位之间" plugin="userpassStrength">
                <img src="/Public/xinlin/images/login_3.png" style="width:10%;"/>
            </td>
        </tr>
        <tr style="line-height: 25px; font-size:12px; margin-top: 0px;">
            <td style="width:40px;"></td>
            <td><span class="Validform_checktip">6-16个字符</span></td>
        </tr>
        <tr>
            <td style="width:40px;">
                <img src="/Public/xinlin/images/login_2.png" style="width:24px;height:31px;"/>
            </td>
            <td style="border-bottom:1px solid #dbdbdb;">
                <input type="password" style="width:82%;" name="reuserpass" size="30" type="password" placeholder="重复密码" datatype="*6-16" recheck="userpass" nullmsg="请再输入一次密码" errormsg="两次输入的密码不一致" plugin="userpassStrength">
                <img src="/Public/xinlin/images/login_3.png" style="width:10%;"/>
            </td>
        </tr>
        <tr style="line-height: 25px; font-size:12px; margin-top: 0px;">
            <td style="width:40px;"></td>
            <td><span class="Validform_checktip"></span></td>
        </tr>
    </table>
</div>
<div>
    <button type="submit" class="button">
        注册
    </button>
</div>
</form>
<!--<div class="l-v">
    <a href="#">
        <img src="/Public/xinlin/images/login_6.png"/>
        <p>微信登录</p>
    </a>
</div>-->
</body>
<script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/application.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/retina.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Validform_v5.3.2_min.js"></script>

<script>
    function checkName(){
        var name = $("#name").val();
        if(name.match(/[a-zA-Z0-9]{3,10}$/)==null || name.length>10){
            $("#name").css("background","#e76e66");
            $("#tishi1").text("用户名输入错误！");
            $("#tishi1").css("color","#e76e66");
            $("#sub1").attr("disabled",'1');
        }else{
            $("#name").css("background","#fff");
            $("#tishi1").text("输入正确！");
            $("#tishi1").css("color","#999");
            $("#sub1").attr("disabled",null);
        }
    }
</script>
</html >

<!--
LHC-2015-10-09-- >
<?php }} ?>