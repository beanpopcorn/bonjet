<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:23:"./template/pc/index.htm";i:1598447496;s:43:"D:\wamp64\www\bonjet\template\pc\header.htm";i:1598429403;s:43:"D:\wamp64\www\bonjet\template\pc\footer.htm";i:1599976790;}*/ ?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--首頁seo標題-->
    <title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
    <!--首頁seo描述-->
    <meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>" />
    <!--首頁seo關鍵詞-->
    <meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>" />
    <!--網站Icon-->
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link media="screen and (min-width:768px)" rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/css.css">
    <link media="screen and (max-width:768px)" rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/mobile.css">
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/swiper.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__; ?>
    
</head>

<body class="home">
    <div class="header">
	<div class="header-cc">
		<div class="logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" title="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/logo.png"></a></div>
		<div class="navbox">
			<div class="nav-top">
				<div class="nav-top-box">
					<span class="nav-top-cpname">
						<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>
					</span>
					<span class="nav-top-tel">
						<a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_15"); echo $__VALUE__; ?>"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_15"); echo $__VALUE__; ?></a>
					</span>
					<span class="nav-top-email">
						<a href="mailto:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_17"); echo $__VALUE__; ?>"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_17"); echo $__VALUE__; ?></a>
					</span>
				</div>
				<div class="search-box">
				<?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","27","","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
				    <form method="get" action="<?php echo $field['action']; ?>" autocomplete="off" spellcheck="false" onsubmit="return searchForm();">
				        <?php echo $field['hidden']; ?>
				        <i></i>
				        <input type="text" class="text" name="keywords" id="keywords">
				    </form>
					<script type="text/javascript">
						function searchForm()
						{
							var keywords = document.getElementById('keywords').value;
							if (keywords == '') {
								alert('請輸入搜索關鍵字');
								return false;
							}
							return true;
						}
					</script>
				<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
				</div>
			</div>
			<div class="navlist" id="nv">
				<ul id="nav">
					<li style="display: inline-block;">
						<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="cms-home">HOME</a>
					</li>
					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<li style="display: inline-block;"><a href="<?php echo $field['typeurl']; ?>" class="<?php echo $field['currentstyle']; ?>"><?php echo $field['typename']; ?></a>
						<?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
						<ul>
							<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
							<li><a href="<?php echo $field2['typeurl']; ?>" class="<?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>nav-arrow<?php endif; ?>"><?php echo $field2['typename']; ?></a>
								<?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
								<ul>
									<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
									 <li><a href="<?php echo $field3['typeurl']; ?>"><?php echo $field3['typename']; ?></a> </li>
									<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?>   
								</ul> 
								<?php endif; ?>  
							</li>
							<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>   
						</ul>
						<?php endif; ?>
					</li>
					<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
				</ul>
			</div>
		</div>
		<div class="slider_box">
			<div class="hslider" id="menu">
				<span class="slider_top"></span>
				<span class="slider_center"></span>
				<span class="slider_bottom"></span>
			</div>
		</div>
		<script>
			$("#menu").click(function () {
				$("#menu").toggleClass('c_slider');
				$('#s-side').slideToggle(300);
			})
		</script>
	</div>
</div>

<div class="s-side" id="s-side">
	<ul>
		<!--这部分是导航栏信息。-->
		<li class="s-firstItem first">
			<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">
				<span>HOME</span>
			</a>
		</li>
		
		<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<li class="first">
			<div class="d-firstNav s-firstNav">
				<span><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a></span>
				<?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><i class="fa-caret-right"></i><?php endif; ?>
			</div>
			<?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
			<ul class="d-firstDrop s-firstDrop">
				<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				<li>
					<div class="d-secondNav s-secondNav">	
						<span><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></span>
						<?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?><i class="fa-caret-right"></i> <?php endif; ?>
					</div>
					<?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
					<ul class="d-secondDrop s-secondDrop">
						<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<li class="s-thirdItem">
							<a href="<?php echo $field3['typeurl']; ?>"><?php echo $field3['typename']; ?></a>
						</li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?> 
					</ul>
					<?php endif; ?>
				</li>
				<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
			</ul>
			<?php endif; ?>
		</li>
		<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
	</ul>
</div>

<div class="top"></div>



    
    <div class="swiper-container swiper2">
        <div class="swiper-wrapper">
            <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <div class="swiper-slide">
                <a href="<?php echo $field['links']; ?>"><img src='<?php echo $field['litpic']; ?>' alt='<?php echo $field['title']; ?>' e-id="<?php echo $field['id']; ?>" e-type="adv" /></a>
            </div>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>    

    <div class="wicontent">
        <div class="index-welcome"><?php  $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("welcome", "121"); echo $__VALUE__; ?></div>
        <div class="index-working"><?php  $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("tips", "121"); echo $__VALUE__; ?></div>
        <div class="index-company">
            <div class="index-cpname">COMPANY PROFILE</div>
            <div class="index-cpbox">
                <div class="index-cpbox-left">
                    <div class="index-cpbox-summary"><?php  $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("indexfile", "121"); echo $__VALUE__; ?></div>
                    <div class="index-cpbox-readmore">
                        <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/company/">Read More</a>
                    </div>
                </div>
                <div class="index-cpbox-right">
                    <img src="<?php  $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("indexpic", "121"); echo $__VALUE__; ?>">
                </div>
            </div>
        </div>
        <div class="index-hot">
            <div class="index-hot-name">HOT PRODUCTS</div>
            <!--手風琴-->
            <div class="index-hot-flash">
                <ul>
                    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "142"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "a",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'typeid' => '142',
  'flag' => 'a',
  'orderby' => 'sort_order',
  'row' => '3',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "sort_order", "","desc","",$tag,"0","on");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li class="<?php if($i == 1): ?>index-shadow<?php endif; ?>">
                        <div class="index-hot-pic">
                            <img src="<?php echo $field['litpic']; ?>">
                        </div>
                        <div class="index-hot-box">
                            <div class="index-hot-title"><?php echo $field['title']; ?></div>
                            <div class="index-hot-summary"><?php  $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("content", $field['aid']); echo $__VALUE__; ?></div>
                            <div class="index-hot-readmore">
                                <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/products/">Read More</a>
                            </div>
                        </div>
                    </li>
                    <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                </ul>   
            </div>
            <!--手風琴結束-->
        </div>
    </div>

    <div class="footer">
	<div class="wicontent">
		<div class="ft-ctus">
			<div class="ft-title">Contacts</div>
			<div class="ft-box">
				<span class="ft-tel"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_15"); echo $__VALUE__; ?></span>
				<span class="ft-fax"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_19"); echo $__VALUE__; ?></span>
				<span class="ft-email"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_17"); echo $__VALUE__; ?></span>
				<span class="ft-location">Office Address:<br><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_21"); echo $__VALUE__; ?></span>
			</div>
		</div>
		<div class="ft-info">
			<div class="ft-title">Information</div>
			<div class="ft-infolist">
				<ul>
					<li>
						<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">HOME</a>
					</li>
					<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
					<li><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
					<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
				</ul>
			</div>
		</div>
		<div class="ft-news">
			<div class="ft-news-header">
				<span class="ft-news-title">Latest News</span>
				<span class="ft-news-tab"></span>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button">
				<div class="swiper-button-next"></div>
				<a class="swiper-button-menu"></a>
				<div class="swiper-button-prev"></div>
			</div>
			<!-- Swiper -->
			<div class="swiper-container swiper1">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="ft-slide-pic">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ft-item-1.jpg">
						</div>
						<div class="ft-slide-box">
							<div class="ft-slide-title">Leaflet</div>
							<div class="ft-slide-summary">Here is the collection of Bonjet’s leaflets which has been categorized in different lines of products including custom made metal products; promotional lanyards,...</div>
							<div class="ft-slide-readmore">
								<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/leaflet/">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="ft-slide-pic">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ft-item-2.jpg">
						</div>
						<div class="ft-slide-box">
							<div class="ft-slide-title">Exhibition</div>
							<div class="ft-slide-summary">We always join HKTDC Hong Kong Gift and Premium fair in April and the booth will be located in Hall 1. Warmly welcome your stop by, reviewing our latest or featured ,,,</div>
							<div class="ft-slide-readmore">
								<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/exhibition/">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="ft-slide-pic">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ft-item-1.jpg">
						</div>
						<div class="ft-slide-box">
							<div class="ft-slide-title">Leaflet</div>
							<div class="ft-slide-summary">Here is the collection of Bonjet’s leaflets which has been categorized in different lines of products including custom made metal products; promotional lanyards,...</div>
							<div class="ft-slide-readmore">
								<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/leaflet/">Read More</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="ft-slide-pic">
							<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ft-item-2.jpg">
						</div>
						<div class="ft-slide-box">
							<div class="ft-slide-title">Exhibition</div>
							<div class="ft-slide-summary">We always join HKTDC Hong Kong Gift and Premium fair in April and the booth will be located in Hall 1. Warmly welcome your stop by, reviewing our latest or featured ,,,</div>
							<div class="ft-slide-readmore">
								<a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/exhibition/">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ft">
	<div class="wicontent">
		<div class="copyright">
			<p>Copyright © 2017 Bonjet International Limited</p>
			<p>Consulted & Designed by In Smart Media Company</p>
		</div>
		<!-- <div class="ft-share">
			<ul>
				<li>
					<a href="mailto:sales@bonjet.com"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/gmail.png"></a>
				</li>
			</ul>
		</div> -->
	</div>
</div>
<div class="ft-bottom"></div>

<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper.min.js","","",""); echo $__VALUE__; ?>
<script>
	var swiper = new Swiper('.swiper1', {
		slidesPerView: 2,
		slidesPerGroup: 2,
		loop: true,
		loopFillGroupWithBlank: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	var swiper2 = new Swiper('.swiper2', {
		speed: 3000,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
	});

	var swiper3 = new Swiper('.swiper3', {
		slidesPerView: 1,
		slidesPerGroup: 1,
		loop: true,
		loopFillGroupWithBlank: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
</script>

<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/index.js","","",""); echo $__VALUE__; ?>

<!-- 应用插件标签 start -->
  <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
<!-- 应用插件标签 end -->


<!--[if lt IE 9]>
<div class="notsupport">
    <h1>:( 非常遗憾</h1>
    <h2>您的浏览器版本太低，请升级您的浏览器</h2>
</div>
<![endif]-->


    <script type="text/javascript">
        //手風琴
        var cc = 0;
        $(".index-hot-flash ul li").hover(function(){
            cc = $(this).index();
            $(this).addClass('index-shadow').siblings().removeClass('index-shadow');
            $(this).stop().stop().animate({width:570},500).siblings("li").stop().animate({width:275},500);
        });
    </script>

    <style type="text/css">
        .cms-home{
            color: #fde589!important;
        }
    </style>

</body>

</html>


