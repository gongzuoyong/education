<?php /* Smarty version Smarty-3.1.6, created on 2018-06-21 20:44:03
         compiled from "D:\xampp\htdocs\Home\Tpl\Public\foot2.html" */ ?>
<?php /*%%SmartyHeaderCode:156045b2b9d93ceb574-07564294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75bfe3965f374e9e705dbf5d6f3ad52791ad2cae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Home\\Tpl\\Public\\foot2.html',
      1 => 1414746188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156045b2b9d93ceb574-07564294',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b2b9d93d191e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2b9d93d191e')) {function content_5b2b9d93d191e($_smarty_tpl) {?><a id="goTop" href="javascript:void(0)" title="返回顶部"><i class="icon-angle-up"></i></a>
        <div id="footer">
            <div class="container">
                <div class="col-md-7">

                    <a href="">关于我们</a>
                    <a href="">联系我们</a>
                    <a href="">免责声明</a>
                    <a href="">作品授权</a>
                    <a href="">意见反馈</a>
                </div>

                <div class="col-md-5">
                    © 2014 E-Sch.com. all rights reserved. 公网安备11010802012355号
                </div>
            </div>
        </div>

        <div class="modal fade" id="sys-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/application.js"></script>
        <script type="text/javascript" src="__PUBLIC__/js/retina.js"></script>

        

<script type="text/javascript">
$(function(){
    $("#profile-form").Validform({
        postonce:true,
        datatype       : {
            "name": /^[_a-zA-Z0-9\u4E00-\u9FA5\uf900-\ufa2d]{3,15}$/
        },

        tiptype:function(msg,o,cssctl){
            var objtip=o.obj.siblings(".Validform_checktip");
            cssctl(objtip,o.type);
            objtip.text(msg);

        },

        // beforeSubmit:function(curform){
        //     $('#loadingWraper').show();
        //     curform.find('.btn').addClass('disabled').attr('disabled','disabled').html('请稍等...')
        // },

        usePlugin:{
            passwordstrength:{
                minLen:6,//设置密码长度最小值，默认为0;
                maxLen:16,//设置密码长度最大值，默认为30;
                trigger:function(obj,error){
                    if(error){
                        obj.siblings(".Validform_checktip").show();
                        obj.siblings(".passwordStrength").hide();
                    }else{
                        obj.siblings(".Validform_checktip").hide();
                        obj.siblings(".passwordStrength").show();   
                    }
                }
            }
        }
    });
})
</script>

    
</div></body></html>
<?php }} ?>