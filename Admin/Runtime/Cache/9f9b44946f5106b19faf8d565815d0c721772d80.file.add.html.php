<?php /* Smarty version Smarty-3.1.6, created on 2018-07-04 19:07:31
         compiled from "./Admin/Tpl\Video\add.html" */ ?>
<?php /*%%SmartyHeaderCode:126265b2a455ccf6c92-42056983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f9b44946f5106b19faf8d565815d0c721772d80' => 
    array (
      0 => './Admin/Tpl\\Video\\add.html',
      1 => 1530702447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126265b2a455ccf6c92-42056983',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b2a455cd693a',
  'variables' => 
  array (
    'cat' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2a455cd693a')) {function content_5b2a455cd693a($_smarty_tpl) {?><style>
	.pageFormContent dl{width:100%;}
</style>
<div class="pageContent">
	<form method="post" action="__URL__/insert/navTabId/listvideo/callbackType/closeCurrent" enctype="multipart/form-data" class="pageForm required-validate" 
		onsubmit="return iframeCallback(this);"><<?php ?>?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?<?php ?>>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>视频名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="videoname"/></dd>
            </dl>
            <dl>
				<dt>文档类别：</dt>
				<dd>
					<select  name="tid">
						<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
						<option value ="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
</option>
						<?php } ?>
					</select>
				</dd>
            </dl>
            <dl>
				<dt>视频图片：</dt>
				<dd><input type="file" style="width:100%" name="picname"/></dd>
            </dl>
            <dl>
				<dt>选择视频：</dt>
				<dd><input type="file" style="width:100%" name="video"/></dd>
            </dl>
			<dl style="height:165px;  display: block; overflow: hidden;">
				<dt>课程简介：</dt>
				<dd><textarea class='editor' class="required" cols="50" rows="10" name="courses_dec" tools='simple' upImgUrl='__URL__/doupload' upImgExt='jpg,jpeg,gif,png'></textarea></dd>
			</dl>
			<dl style="height:165px; display: block; overflow: hidden;">
				<dt>讲师介绍：</dt>
				<dd><textarea class='editor' class="required" cols="50" rows="10" name="introduction" tools='simple' upImgUrl='__URL__/doupload' upImgExt='jpg,jpeg,gif,png'></textarea></dd>
			</dl>
			<dl style="height:165px; display: block; overflow: hidden;">
				<dt>预约咨询：</dt>
				<dd><textarea class='editor' class="required" cols="50" rows="10" name="consulting" tools='simple' upImgUrl='__URL__/doupload' upImgExt='jpg,jpeg,gif,png'></textarea></dd>
			</dl>
			<dl>
				<dt>是否付费：</dt>
				<dd><input type="radio" name="is_pay" value="1"/>  付费    <input type="radio" name="is_pay" value="0"/>  免费</dd>
			</dl>
			<dl>
				<dt>是放在首页幻灯片：</dt>
				<dd><input type="radio" name="is_top" value="1"/>  是    <input type="radio" name="is_top" value="0"/>  否</dd>
			</dl>
			<dl>
				<dt>原价：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="price"/></dd>
			</dl>
			<dl>
				<dt>现价：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="price_now"/></dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>

<?php }} ?>