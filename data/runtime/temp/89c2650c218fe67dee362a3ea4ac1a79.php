<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"./application/admin/template/index\welcome.htm";i:1575083805;s:65:"D:\wamp64\www\bonjet\application\admin\template\public\footer.htm";i:1575083809;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/bonjet/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/bonjet/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<link href="/bonjet/public/static/admin/css/index.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<!--[if IE 7]>
  <link rel="stylesheet" href="/bonjet/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var __root_dir__ = "/bonjet";
    var __lang__ = "<?php echo $admin_lang; ?>";
    var __main_lang__ = "<?php echo $main_lang; ?>";
</script>  
<script type="text/javascript" src="/bonjet/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/bonjet/public/plugins/layer-v3.1.0/layer.js"></script>
<script src="/bonjet/public/static/admin/js/upgrade.js?v=<?php echo $version; ?>"></script>
<script src="/bonjet/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>

</head>
<body style="background-color:#F4F4F4;padding:6px; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="warpper">
    <div class="content start_content">
        <div class="contentWarp">
            <div class="section system_section" style="float: none;width: inherit;">
                <div class="system_section_con">
                    <div class="sc_title" style="padding: 26px 0 14px;border-bottom: 1px solid #e4eaec;">
                        
                        <h3><i class="fa fa-tasks"></i>服务器信息</h3>
                    </div>
                    <div class="sc_warp" id="system_warp" style="display: block;padding-bottom: 20px;">
                        <table cellpadding="0" cellspacing="0" class="system_table">
                            <tbody><tr>
                                <td class="gray_bg">服务器操作系统：</td>
                                <td><?php echo $sys_info['os']; ?></td>
                                <td class="gray_bg">服务器域名/IP：</td>
                                <td><?php echo $sys_info['domain']; ?> [ <?php echo $sys_info['ip']; ?> ]</td>
                            </tr>
                            <tr>
                                <td class="gray_bg">服务器环境：</td>
                                <td><?php echo $sys_info['web_server']; ?></td>
                                <td class="gray_bg">PHP 版本：</td>
                                <td><?php echo $sys_info['phpv']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Mysql 版本：</td>
                                <td><?php echo $sys_info['mysql_version']; ?></td>
                                <td class="gray_bg">GD 版本：</td>
                                <td><?php echo $sys_info['gdinfo']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">文件上传限制：</td>
                                <td><?php echo $sys_info['fileupload']; ?></td>
                                <td class="gray_bg">最大占用内存：</td>
                                <td><?php echo $sys_info['memory_limit']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">POST限制：</td>
                                <td><?php echo (isset($sys_info['postsize']) && ($sys_info['postsize'] !== '')?$sys_info['postsize']:'unknown'); ?></td>
                                <td class="gray_bg">最大执行时间：</td>
                                <td><?php echo $sys_info['max_ex_time']; ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Zip支持：</td>
                                <td><?php echo $sys_info['zip']; ?></td>
                                <td class="gray_bg">Zlib支持：</td>
                                <td><?php echo $sys_info['zlib']; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" style="position: static; bottom: 0px; font-size:14px;">
    <p>
        <b><?php echo htmlspecialchars_decode($global['web_copyright']); ?></b>
    </p>
</div>
<script type="text/javascript">
    $(function () {
        check_upgrade_version();
        $.get("<?php echo url('Ajax/welcome_handle', ['_ajax'=>1]); ?>"); // 进入欢迎页面需要异步处理的业务
        check_language_tips();

        // 检测语言版本
        function check_language_tips()
        {
            if (__main_lang__ != __lang__) {
                var language_title = $('#language_title', window.parent.document).html();
                layer.msg('当前后台已切换至【'+language_title+'】编辑状态！', {time:3000});
            }
        }

        // 版本检测更新弹窗
        function check_upgrade_version(){
            $.ajax({
                type : "GET",
                url  : "<?php echo url('Ajax/check_upgrade_version', ['_ajax'=>1]); ?>",
                data : {},
                dataType : "JSON",
                success: function(res) {
                    if (1 == res.code) {
                        if (2 == res.data.code) {

                            /*显示顶部导航更新提示*/
                            try{
                                $("#upgrade_filelist", window.parent.document).html(res.data.msg.upgrade);    
                                $("#upgrade_intro", window.parent.document).html(res.data.msg.intro);
                                $("#upgrade_notice", window.parent.document).html(res.data.msg.notice);
                                $('#a_upgrade', window.parent.document).attr('data-version',res.data.msg.key_num)
                                    .attr('data-max_version',res.data.msg.max_version)
                                    .show();
                            }catch(e){}
                            /*--end*/
                            
                            $('#upgrade_filelist').html(res.data.msg.upgrade);
                            $('#upgrade_intro').html(res.data.msg.intro);
                            $('#upgrade_notice').html(res.data.msg.notice);
                            $('#a_upgrade').attr('data-version', res.data.msg.key_num)
                            .attr('data-max_version', res.data.msg.max_version)
                            .attr('title', res.data.msg.tips);
                            $('#a_upgrade').html('检测到新版本'+res.data.msg.key_num+'[点击查看]').css('color', '#F00');

                            <?php if(-1 != $web_show_popup_upgrade AND (0 >= \think\Session::get('admin_info.role_id') OR 1 == \think\Session::get('admin_info.auth_role_info.online_update'))): ?>
                                btn_upgrade($("#a_upgrade"), 1);
                            <?php endif; ?>
                        } else {
                            $('#td_upgrade_msg').html(res.data.msg);
                        }
                    }
                }
            }); 
        }
    });

    $(function() {
        //操作提示缩放动画
        $(".checkZoom").click(function(){
            $(this).parent().animate({
                color: "#FFF",
                backgroundColor: "#4FD6BE",             
                width: "0",
                height: "0",                             
            },300,function(){
                $(this).remove();
            });
            if(1 >= $('#explanation_welcome').find('div.explanation').length) {
                $('#explanation_welcome').remove();
            }
            var url = eyou_basefile+"?m=admin&c=Ajax&a=explanation_welcome&type="+$(this).attr('data-type')+"&lang="+__lang__+"&_ajax=1";
            $.get(url);
        });

        checkInlet(); // 自动检测隐藏index.php
    });

    // 自动检测隐藏index.php
    function checkInlet() {
        layer.open({
            type: 2,
            title: false,
            area: ['0px', '0px'],
            shade: 0.0,
            closeBtn: 0,
            shadeClose: true,
            content: '//<?php echo \think\Request::instance()->host(); ?>/bonjet/api/Rewrite/setInlet.html',
            success: function(layero, index){
                layer.close(index);
                var body = layer.getChildFrame('body', index);
                var content = body.html();
                if (content.indexOf("Congratulations on passing") == -1)
                {
                    $.ajax({
                        type : "POST",
                        url  : "/bonjet/index.php?m=api&c=Rewrite&a=setInlet&_ajax=1",
                        data : {seo_inlet:0},
                        dataType : "JSON",
                        success: function(res) {

                        }
                    }); 
                }
            }
        });
    }

    // 新增内容统计
    $('#contentTotalAdd').click(function(){
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '内容统计管理',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            // maxmin: false, //开启最大化最小化按钮
            area: ['550px', '220px'],
            content: "<?php echo url('Index/ajax_content_total'); ?>"
        });
    });

    // 新增快捷导航
    $('#quickMenuAdd').click(function(){
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '快捷导航管理',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            // maxmin: false, //开启最大化最小化按钮
            area: ['550px', '300px'],
            content: "<?php echo url('Index/ajax_quickmenu'); ?>"
        });
    });
</script>
<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
<script src="/bonjet/public/static/admin/js/jquery.s2t.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('html').s2t();
    });
</script>
</body>
</html>