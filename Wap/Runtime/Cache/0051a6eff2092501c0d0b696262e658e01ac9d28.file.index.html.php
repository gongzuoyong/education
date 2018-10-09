<?php /* Smarty version Smarty-3.1.6, created on 2018-07-01 09:59:53
         compiled from "./Wap/Tpl\Introduce\index.html" */ ?>
<?php /*%%SmartyHeaderCode:243445b3835996ca576-64878864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0051a6eff2092501c0d0b696262e658e01ac9d28' => 
    array (
      0 => './Wap/Tpl\\Introduce\\index.html',
      1 => 1530374680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243445b3835996ca576-64878864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b38359972d86',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b38359972d86')) {function content_5b38359972d86($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html class="mdd-index" style="font-size: 40px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="charset" content="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="application-name" content="">
    <title>家庭教育</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="version" content="ddtouch">
    <meta http-equiv="Cache-Control" content="must-revalidate,no-cache">
    <link rel="stylesheet" href="/Public/xinlin/css/common.css">
    <link rel="stylesheet" href="/Public/xinlin/css/app.css?v=20150605">
    <style>
        h3{line-height: 50px; text-align: center; font-size: 18px; font-weight: bolder;}
        p{font-size:14px;}
        .con{line-height: 25px; font-size:14px; text-indent: 24px;}
    </style>
</head>
<body style="background:#fff;">
<div class="familyHeader">
    <img src="/Public/xinlin/images/02_1_02.png"/>
</div>
<div style="padding:10px; color: #0f0f0f; background: #fff; line-height: 25px;">
    <h3><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h3>
    <p style="text-align: right;">时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</p>
    <div class="con">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div>

<script src="/Public/xinlin/js/zepto.min.js"></script>
<script src="/Public/xinlin/js/underscore.min.js"></script>
<script src="/Public/xinlin/js/iscroll5.min.js"></script>
<script src="/Public/xinlin/js/fastclick.min.js"></script>
<script src="/Public/xinlin/js/mod_countdown.min.js"></script>
<script src="/Public/xinlin/js/mod_suggest.min.js"></script>
<script src="/Public/xinlin/js/mdd_index.min.js"></script>
<script src="/Public/xinlin/js/js_tracker.js"></script>


</body>
<style type="text/css" id="17050682000">

</style>
</html><!--LHC-2015-10-09-->
<?php }} ?>