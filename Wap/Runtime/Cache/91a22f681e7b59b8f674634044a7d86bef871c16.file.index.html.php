<?php /* Smarty version Smarty-3.1.6, created on 2018-07-01 00:23:47
         compiled from "./Wap/Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:144115b37ae93cae4e2-63932601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91a22f681e7b59b8f674634044a7d86bef871c16' => 
    array (
      0 => './Wap/Tpl\\Index\\index.html',
      1 => 1530370900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144115b37ae93cae4e2-63932601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video' => 0,
    'vo' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b37ae93dade4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b37ae93dade4')) {function content_5b37ae93dade4($_smarty_tpl) {?><!DOCTYPE html>
<html class="mdd-index" style="font-size: 40px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="charset" content="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="application-name" content="">
<title>首页</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="version" content="ddtouch">
<meta http-equiv="Cache-Control" content="must-revalidate,no-cache">
<link rel="stylesheet" href="/Public/xinlin/css/common.css">
<link rel="stylesheet" href="/Public/xinlin/css/app.css?v=20150605">
<style type="text/css">
body {font-size:12px; color:#222; font-family:Verdana,Arial,Helvetica,sans-serif; background:#f0f0f0;}
ul,li {list-style:none; margin:0px; padding:0px;}
img {border:0;}
/* 仿QQ商城点击左右滚动jquery焦点图特效插件 */
.focus {width:100%; height:280px; overflow:hidden; position:relative;}
.focus ul {height:380px; position:absolute;}
.focus ul li {float:left; width:100%; height:280px; overflow:hidden; position:relative; background:#000;}
.focus ul li img{width:100%;}
.focus ul li div {position:absolute; overflow:hidden;}
.focus .btnBg {position:absolute; width:100%; height:20px; left:0; bottom:0; background:#000; display:none;}
.focus .btn {position:absolute; width:95%; height:23px; padding:0px 10px 0px 10px; right:0; bottom:6px; text-align:right;}
.focus .btn span {display:inline-block; _display:inline; _zoom:1; width:25px; height:24px; line-height:24px; text-align:center; _font-size:0; margin-left:5px; cursor:pointer; background:#fff;}
.focus .btn span.on {background:#fff;}
.focus .preNext {width:45px; height:100px; position:absolute; top:90px; background:url(/Public/sprite.png) no-repeat 0 0; cursor:pointer;}
.focus .pre {left:0;}
.focus .next {right:0; background-position:right top;}
</style>
<script type="text/javascript" src="/Public/jquery.min.js"></script>
<script type="text/javascript" src="/Public/sl.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  	$.focus("#focus001");
		$.focus("#focus002");
	});
</script>
</head>
<body><script type="text/javascript">
var proxyAssets = "/h5touchassets";
var index_url = "";
</script>

<script type="text/javascript"> var appUrlConfig = [{"download_img_url":"http:\/\/\/upload_img\/00528\/111111\/H5-0714.jpg","android_url":"http:\/\/\/","iphone_url":"http:\/\/\/cn\/app\/id445573854?mt=8","app_url":":\/\/"},{"download_img_url":"http:\/\/\/upload_img\/00528\/987\/and-0902.png","android_url":"http:\/\/\/block_mobileClient_download.htm?channel=30153","iphone_url":"http:\/\/\/us\/app\/id488202082","app_url":"ddreader:\/\/"}] </script>

<header id="search" dd_name="首页搜索区">
	<!-- <div class="dd-logo">
		<a href="" dd_name="logo跳转"></a>
	</div> -->
	<div class="search_box">
		<div class="search">
			<form id="index_search_form" method="get" action="" target="_parent" onsubmit="return submit_search();">
				<div class="text_box">
					<input id="keyword" name="keyword" type="text" placeholder="请输入您的宝贝" class="keyword text" onkeydown="this.style.color=&#39;#404040&#39;" autocomplete="off">
				</div>
				<input type="submit" value="" class="submit" dd_name="搜索">
				<input type="hidden" value="d256b1d537fe186e53c0444399341c24" name="sid">
			</form>
		</div>
	</div>
	<!-- <div class="header-category"><a href="" dd_name="跳转分类"><em>分类</em></a></div>
	<div class="search_list"></div> -->
</header>
<section id="wrapper">
	<div class="focus" id="focus001">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
			<li>
				<a href="/index.php/Index/show/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" target="_blank">
					<img src="/Public/Uploads/videopic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" />
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<!-- <section class="top-slider-wrapper" dd_name="首页焦点轮播区">
		<section data-widget="topSlider" class="J_top_slider index-slider">
			<ul class="top-slider" style="width: 500%; -webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(-2588px, 0px) translateZ(0px);">
				<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
				<li style="width:20%">
					<a href="/index.php/Index/show/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" dd_name="焦点轮播图1">
						<img src="/Public/Uploads/videopic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" height="290" alt="预留">
					</a>
				</li>
				<?php } ?>
			</ul>
			<div class="top-slider-indicator">
				<span class="dot on"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
		</section>
	</section> -->
	<!-- 
	<section class="top-slider-wrapper" dd_name="首页焦点轮播区">
	<div class="photor">
		<div class="photor__viewport">
			<div class="photor__viewportLayer">
				<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
				<img src="/Public/Uploads/videopic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
" data-thumb="/Public/Uploads/videopic/<?php echo $_smarty_tpl->tpl_vars['vo']->value['picname'];?>
">
				<?php } ?>
			</div>

			<div class="photor__viewportControl">
				<div class="photor__viewportControlPrev"></div>
				<div class="photor__viewportControlNext"></div>
			</div>

		</div>
		<div class="photor__thumbs">
			<div class="photor__thumbsWrap"></div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('.photor').photor();
		});
	</script>
</section> -->
	<ul class="index-nav" dd_name="首页功能区">
		<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
		<li>
			<a href="javascript:void(0)" dd_name="<?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
" catid = "<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">
				<img class="" src="/Public/<?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
.png">
				<!-- <span><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</span> -->
			</a>
		</li>
		<?php } ?>
		<li><a href="javascript:void(0)" dd_name="全部" catid = "0"><img class="" src="/Public/全部.png"><!-- <span>全部</span> --></a></li>
	</ul>
	<section class="seckilling" dd_name="课程推荐">
		<div class="seckilling-box"> 
			<div class="seckilling-title">
				<span class="seckilling-name"><img src="/Public/xinlin/images/star.png" height="22"/>
					&nbsp;课程推荐</span>
			</div> 
			<div class="seckilling-con" id="seckill_index"> 
				<dl>
				<a href="<?php echo U('Wap/Index/show');?>
">
					<dt></dt>
					<dd class="title"><span class="title">婚姻中的冲突管理</span></dd>
					<dd><span class="money">￥168</span></dd>
					<dd><span class="dzmoney">￥66</span>  <span class="study">88人正在学习</span></dd>
				</a>
				</dl>
			</div>
		</div>
	</section>

	<script src="/Public/js/jquery-1.4.2.min.js"></script>
	<script>
        var ajaxfunction = function(curPage,catid,key){
            console.log(curPage)
            console.log(catid)
            console.log(key)
            $.ajax({
                type:"GET",
                url:"/index.php/Index/getCatData",
                data:{p:curPage,catid:catid,key:key},
                dataType:"json",
                success:function(data){
                    if(data.length<=0){
                        alert("没有试题了");
                        return;
                    }
                    var str = "";
                    $.each(data,function(index,row){
                        str += '<dl>';
                        str += '<a href="/index.php/Index/show/id/'+row.id+'">';
                        str += '<dt><img src="/Public/Uploads/videopic/'+row.picname+'"/></dt>';
                        str += '<dd class="title"><span class="title">'+row.videoname+'</span></dd>';
                        str += '<dd><span class="money">￥'+row.price+'</span></dd>';
                        str += '<dd><span class="dzmoney">￥'+row.price_now+'</span>  <span class="study">'+row.clicknum+'人正在学习</span></dd>';
                        str += '</a>';
                        str += '</dl>';
                    })
                    $("#seckill_index").append(str);
                }
            });
        }
        $(function(){
            $(".index-nav li a").click(function(){
                var curPage = "1";
                $("#seckill_index").html("");
                catid=$(this).attr("catid");
                key = $("#keyword").val();
                ajaxfunction(curPage,catid,key);
                $(window).scroll(function() {
                    //$(document).scrollTop() 获取垂直滚动的距离
                    //$(document).scrollLeft() 这是获取水平滚动条的距离

                    if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
                        curPage++;
                        ajaxfunction(curPage,catid,key);
                    }
                });
            });
            $(".index-nav li a").eq("0").click();

        });
	</script>

</body>
<style type="text/css" id="17050682000">

</style>
</html><!--LHC-2015-10-09-->
<?php }} ?>