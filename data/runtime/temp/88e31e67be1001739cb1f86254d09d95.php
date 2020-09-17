<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:31:"./template/pc/lists_company.htm";i:1599978858;s:43:"D:\wamp64\www\bonjet\template\pc\header.htm";i:1598429403;s:41:"D:\wamp64\www\bonjet\template\pc\menu.htm";i:1600052615;s:42:"D:\wamp64\www\bonjet\template\pc\panel.htm";i:1599984441;s:43:"D:\wamp64\www\bonjet\template\pc\footer.htm";i:1599976790;}*/ ?>
<!DOCTYPE html>
<html>
<head> 
    <title><?php echo $eyou['field']['seo_title']; ?></title> 
    <meta name="renderer" content="webkit" /> 
    <meta charset="utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" /> 
    <meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" /> 
    <meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
    <link media="screen and (min-width:768px)" rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/css.css">
    <link media="screen and (max-width:768px)" rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/mobile.css">
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/swiper.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__; ?>
 </head> 

<body>
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



    
    <div class="company">
        <div class="menulist">
    <div class="company-menu">
        <div class="company-menu-title">MENU</div>
        <div class="company-nav">
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
    </div>

    <div class="best">
        <div class="swiper-container swiper3">
            <div class="best-header">
                <div class="best-sale">BEST SALE</div>
                <div class="swiper-button">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="swiper-wrapper">
                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "128"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'titlelen' => '40',
  'typeid' => '128',
  'flag' => 'c',
  'addfields' => 'Specifications,Shipment,Origin',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "Specifications,Shipment,Origin","desc","",$tag,"0","on");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 40, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <div class="swiper-slide">
                    <div class="best-pic"><a href="<?php echo $field['arcurl']; ?>"><img src="<?php echo $field['litpic']; ?>"></a></div>
                    <div class="best-title"><?php echo $field['title']; ?></div>
                    <div class="best-desc">
                        <div class="best-desc-title">Description:</div>
                        <div class="best-desc-article">
                            <?php echo $field['Specifications']; ?>
                        </div>
                        <div class="best-desc-title">Shipment:</div>
                        <div class="best-desc-article">
                            <?php echo $field['Shipment']; ?>
                        </div>
                        <div class="best-desc-title">Origin:</div>
                        <div class="best-desc-article">
                            <?php echo $field['Origin']; ?>
                        </div>
                    </div>
                </div>
                <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </div>
        </div>
    </div>
    <!-- <div class="best">
        <div class="best-header">
            <span class="best-sale">BEST SALE</span>
            <span class="best-arrow">
                <a class="best-arrow-left"></a>
                <a class="best-arrow-right"></a>
            </span>
        </div>
        <div class="best-box">
            <ul>
                
                <li>
                    <div class="best-pic"></div>
                    <div class="best-title"></div>
                    <div class="best-desc">
                        <div class="best-desc-title"></div>
                        <div class="best-desc-article"></div>
                    </div>
                </li>

            </ul>
        </div>
    </div> -->
</div>

        <div class="company-container">
            <div class="company-header">
                <div class="company-title"><?php echo $eyou['field']['typename']; ?></div>
                <div class="company-fillform">
                    <a href="#company-point">Send Inquiry</a>
                </div>
            </div>
            <div class="company-article">
                <!-- Company Profile -->
                <div class="cpfile">
                    <?php  $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpfile", "122"); echo $__VALUE__; ?>
                     <div class="cpfile-video">
                         <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php  $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("youtube", "122"); echo $__VALUE__; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                     </div>
                 </div>
            </div>
            <div class="clear"></div>
            <div id="company-point"></div>
            <div class="module-contact" id="module-contact">
    <div class="ctus-title">Contact Us</div>
    <div class="ctus-tips">For we can provide you a better service, please fill in all * fields below.</div>
    <div class="ctus-line"></div>
    <?php  $typeid = "134"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <form method="POST" enctype="multipart/form-data" action="<?php echo $field['action']; ?>" autocomplete="off" spellcheck="false">
        <div class="ctus-item">
            <div class="ctus-item-title"><?php echo $field['itemname_36']; ?><i>*</i></div>
            <div class="ctus-item-box">
                <input type="text" id="attr_36" name="<?php echo $field['attr_36']; ?>" required>
            </div>
        </div>
        <div class="ctus-item">
            <div class="ctus-item-title"><?php echo $field['itemname_38']; ?><i>*</i></div>
            <div class="ctus-item-box">
                <textarea id="attr_38" name="<?php echo $field['attr_38']; ?>" required></textarea>
            </div>
        </div>
        <div class="ctus-item">
            <div class="ctus-item-title ctus-file-title"><i>Upload a File (Max:10mb)</i></div>
            <div class="ctus-item-box">
                <span class="ctus-upload">
                    <input type="file" name="file1">
                </span>
                <span class="ctus-upload">
                    <input type="file" name="file2">
                </span>
                <span class="ctus-upload">
                    <input type="file" name="file3">
                </span>
            </div>
            <div class="ctus-item-box">
                <span class="ctus-upload">
                    <input type="file" name="file1">
                </span>
                <span class="ctus-upload">
                    <input type="file" name="file2">
                </span>
                <span class="ctus-upload">
                    <input type="file" name="file3">
                </span>
            </div>
        </div>
        <div class="ctus-line"></div>
        <div class="ctus-title">Contact Information</div>
        <div class="ctus-item">
            <div class="ctus-item-title"><?php echo $field['itemname_40']; ?><i>*</i></div>
            <div class="ctus-item-cc">
                <input type="text" id="attr_40" name="<?php echo $field['attr_40']; ?>" required>
            </div>
        </div>
        <div class="ctus-item">
            <div class="ctus-item-title"><?php echo $field['itemname_42']; ?></div>
            <div class="ctus-item-cc">
                <input type="text" id="attr_42" name="<?php echo $field['attr_42']; ?>">
            </div>
        </div>
        <div class="ctus-item">
            <div class="ctus-wrapper-left">
                <div class="ctus-item-title"><?php echo $field['itemname_44']; ?><i>*</i></div>
                <div class="ctus-item-cc">
                    <input type="text" id="attr_44" name="<?php echo $field['attr_44']; ?>" required>
                </div>
            </div>
            <div class="ctus-wrapper-right">
                <div class="ctus-item-title"><?php echo $field['itemname_46']; ?><i>*</i></div>
                <div class="ctus-item-cc">
                    <input type="text" id="attr_46" name="<?php echo $field['attr_46']; ?>" required>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="ctus-item">
            <div class="ctus-wrapper-left contactname">
                <div class="ctus-item-title">Contact Name<i>*</i></div>
                <div class="ctus-item-cc">
                    <input type="text" id="attr_48" name="<?php echo $field['attr_48']; ?>" class="cteee" placeholder="First" required>
                    <input type="text" id="attr_50" name="<?php echo $field['attr_50']; ?>" class="cteee ctlast" placeholder="Last" required>
                </div>
            </div>
            <div class="ctus-wrapper-right">
                <div class="ctus-item-title"><?php echo $field['itemname_52']; ?><i>*</i></div>
                <div class="ctus-item-cc">
                    <input type="text" id="attr_52" name="<?php echo $field['attr_52']; ?>" required>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="ctus-item">
            <div class="ctus-wrapper-left">
                <div class="ctus-item-title"><?php echo $field['itemname_54']; ?><i>*</i></div>
                <div class="ctus-item-cc">
                    <input type="text" id="attr_54" name="<?php echo $field['attr_54']; ?>" required>
                </div>
            </div>
            <div class="ctus-wrapper-right">
                <div class="ctus-item-title"><?php echo $field['itemname_56']; ?><i>*</i></div>
                <div class="ctus-item-cc">
                    <input type="text" id="attr_56" name="<?php echo $field['attr_56']; ?>" required>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="ctus-item">
            <div class="ctus-item-title"><?php echo $field['itemname_58']; ?><i>*</i></div>
            <div class="ctus-item-address">
                <textarea id="attr_58" name="<?php echo $field['attr_58']; ?>"></textarea>
            </div>
        </div>
        <div class="ctus-note">
            <div class="ctus-note-title">Please read the statements listed below and check the box<i>*</i></div>
            <div class="ctus-note-list">
                <span><input type="checkbox" checked>All enquiries contents and personal information will be handled in the strictest of confidence. Replies may take some time depending upon the enquiry.</span>
                <span><input type="checkbox" checked>We will reply to your email, please check your email box given above (junk mail folder as well)</span>
                <span><input type="checkbox" checked>If you find our email in your junk mail folder, please help to add us of legitimate emails to your Whitelist</span>
            </div>
            <div class="ctus-note-title">Type the letters you see in the image below</div>
            <!-- 验证码开始 -->
            <?php if(!(empty($field['IsVertify']) || (($field['IsVertify'] instanceof \think\Collection || $field['IsVertify'] instanceof \think\Paginator ) && $field['IsVertify']->isEmpty()))): ?>
            <div class="ctus-note-yzm">
                <span class="ctus-note-chart">
                    <img <?php echo $field['VertifyData']; ?> title="看不清？點擊更換驗證碼" />
                    <a href="javascript:void(0);" id="a_vertify" <?php echo $field['VertifyData']; ?>>點擊更換</a>
                </span>
                <span class="ctus-note-num">
                    <input type="text" name="vertify" autocomplete="off" placeholder="驗證碼"/>
                </span>
            </div>
            <?php endif; ?>
            <!-- 验证码结束 -->
        </div>
        <div class="ctus-submit">
            <input type="submit" name="submit" value="Submit">
        </div>
        <?php echo $field['hidden']; ?>
    </form>
    <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    <div class="ctus-note">
        <div class="ctus-note-title">We Need Your Consent</div>
        <div class="ctus-note-article">By consenting to this privacy notice you are giving us permission to process your personal data specifically for the purposes identified. Consent is required for us to process your personal data, and your data will not be shared to third parties.</div>
    </div>
</div>


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
        $(document).ready(function(){
            $(".company-menu-arrow").click(function(){
                $("#"+this.id).toggleClass("minus");
                $("#"+this.id+"_").toggle();
          });
        });
    </script>
</body>
</html>