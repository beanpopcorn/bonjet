<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"D:\wamp64\www\bonjet\public/static/errpage/404.html";i:1575083890;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>404页面</title>
<style type="text/css">
.concenter-err {width: 100%;background: url(public/static/errpage/error_pic.png);}
#warpper {width: 1220px;margin: 0 auto;position: relative;clear: both;font-family: "微软雅黑";}
.clearfix {zoom: 1;}
.clearfix:after, .clearfix:before {display: block;overflow: hidden;height: 0;content: '\0020';}
.error-pic {background: url(public/static/errpage/404.png) no-repeat;}
.error-page {width: 658px;height: 641px;margin: 44px auto 0;text-align: center;}
.error-page-mb37 {margin-bottom: 37px;}
.error-page-txt {padding-top: 391px;margin-bottom: 29px;font-family: \5FAE\8F6F\96C5\9ED1;}
.error-page .error-page-txt h3 {font-size: 36px;color: #3B3B3B;font-weight: 900;padding-top: 6px;}
.error-page-txt .error-page-pl48 {padding-left: 48px;}
.error-page .error-page-txt p {font-size: 16px;color: #6B6B6B;padding-left: 56px;}
.error-page-btn {height: 32px;padding-left: 26px;}
.error-page-btn a:hover {background-color: #64c7f5;}
.clearfix:after {clear: both;}
.error-page-btn a {display: inline-block;width: 120px;height: 32px;margin: 0 15px;background-color: #70d2ff;color: white;line-height: 32px;font-size: 14px;text-decoration: none;}
</style>
<script type="text/javascript">
  var __root_dir__ = '/bonjet';
</script>
</head>

<body>
<div class="concenter-err">
  <div id="warpper" class="clearfix">
    <div class="error-page error-pic">
      <div class="error-page-txt error-page-mb37">
        <h3 class="error-page-pl48">抱歉！頁面無法訪問...</h3>
        <p>您可能輸入了錯誤的網址，或者該頁面已經不存在了哦</p>
      </div>
      <div class="error-page-btn">
        <a href="javascript:history.go(-1);" class="return-back">返回上一頁</a>
        <a href="/" class="return-index">返回首頁</a>
      </div>
    </div>
   </div>
</div>
<script type="text/javascript">
  var oSecs = 7;
  var intervalCD;
  function time(){
       oSecs --;
       if (oSecs < 0){
          clearInterval(intervalCD);
          return;
       }
      
       if (oSecs == 0){
          clearInterval(intervalCD);
          window.location.href = __root_dir__+'/';
       }
       document.getElementById('J_countdown').innerHTML = oSecs;
  }
 
 var intervalDomID = setInterval(function () {
      if (document.getElementById('J_countdown')) {
          clearInterval(intervalDomID);
          intervalCD = setInterval(time, 1000);
      }
 }, 100);
</script>
</body>
</html>