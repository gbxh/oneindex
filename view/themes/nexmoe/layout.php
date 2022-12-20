<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		<title>
			<?php e(config('site_name'));?> - 私人云服务</title>
		<!--引入字体，全局字体使用-->
		<link rel="stylesheet" href="https://npm.elemecdn.com/lxgw-wenkai-webfont@1.1.0/lxgwwenkai-regular.css" />
		<link rel="shortcut icon" href="https://cdn.jsdelivr.net/gh/gbxh/oneindex@2.0/theme/favicon.ico">
		<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gbxh/oneindex@2.0/theme/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gbxh/oneindex@2.0/theme/gbxh.css">
		<!-- Font6，自定义底部使用和看板娘使用的图标和字体文件-->
		<link type='text/css' rel="stylesheet" href="https://npm.elemecdn.com/font6pro@6.0.1/css/fontawesome.min.css" media='all'>
		<link href="https://npm.elemecdn.com/font6pro@6.0.1/css/all.min.css" rel="stylesheet">
		<script src="//cdn.jsdelivr.net/gh/gbxh/oneindex@2.0/theme/mdui.min.js"></script>
		<style>
			/*底部CSS，.APP .tanle这三个一起的*/
			dibu {
			    border-top: 0px;
			    position: absolute;
			    bottom: 0;
			    width: 100%;
			    margin: 0px;
			    padding: 0px;
			}
			.App {
			    min-height: 85vh;
			}
			.table {
			    margin: auto;
			}
			
			/*全局字体*/
			*{font-family:LXGW WenKai}
			*{font-weight:bold}
			body {font-family: LXGW WenKai;}
		</style>
	</head>
	<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
		<header class="nav">
			<div class="navSize">
				<a href="/">
					<img class="avatar" src="//q.qlogo.cn/g?b=qq&nk=2241439211&s=100" />
				</a>
				<div class="navRight">
					<ul class="navul">
						<li class="navli">
							<a href="//xh07.ml" target="_blank">博客</a>
						</li>
						<li class="navli">
							<a href="/login">登陆</a>
						</li>
					</ul>
					<div class="icon"></div>
				</div>
			</div>
		</header>
		<main>
			<div class="mdui-container">
				<div class="mdui-container-fluid">
					<div class="mdui-toolbar nexmoe-item">
						<a href="/">
							<?php e(config('site_name'));?>
						</a>
						<?php foreach((array)$navs as $n=>$l):?>
						<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
						<a href="<?php e($l);?>">
							<?php e($n);?>
						</a>
						<?php endforeach;?>
						<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
					</div>
				</div>
				<?php view::section('content');?>
			</div>
		</main>
		<div>
			<center class="dibu">
				<br />
				<div style=" line-height: 20px;font-size: 9pt;font-weight: bold;">
					<span>
						"
						<span style="color: rgb(0,139,139); font-weight: bold;" id="hitokoto">
							<a href="#" id="hitokoto_text">
								"人生最大的遗憾,就是在最无能为力的时候遇到一个想要保护一生的人."
							</a>
						</span> "
					</span>
					<p style="margin-left: 10rem;font-size: 8pt;">
						<small>
							—— 小胡网络科技
						</small>
					</p>
				</div>

				<div style="font-size: 13px; font-weight: bold;">
					<span class="nav-item">
						<a class="nav-link" href="http://wpa.qq.com/msgrd?v=3&uin=2241439211&site=qq&menu=yes"
						   target="_blank">
							<i class="fab fa-qq" style="color:#35B995" aria-hidden="true">
							</i>
							QQ |
						</a>
					</span>
					<span class="nav-item">
						<a class="nav-link" href="mailto:gbxh07@163.com" target="_blank">
							<i class="fa-duotone fa-envelope-open" style="color:#35B995" aria-hidden="true">
							</i>
							邮箱 |
						</a>
					</span>
					<span class="nav-item">
						<a class="nav-link" href="https://xh07.ml" target="_blank">
							<i class="fas fa-edit" style="color:#35B995" aria-hidden="true">
							</i>
							博客 |
						</a>
					</span>
					<span class="nav-item">
						<a class="nav-link" href="http://movxh.tk" target="_blank">
							<i class="fa-solid fa-camera-movie" style="color:#35B995;" aria-hidden="true">
							</i>
							影视 |
						</a>
					</span>
					<span class="nav-item">
						<a class="nav-link" href="http://pan.xh07.ml" target="_blank">
							<i class="fa fa-cloud-download" style="color:#35B995;" aria-hidden="true">
							</i>
							云盘 |
						</a>
					</span>
					<!--后台入口-->
					<span class="nav-item">
						<a class="nav-link" href="/admin" target="_blank">
							<i class="fa-solid fa-folder-gear" style="color:#35B995;" aria-hidden="true">
							</i>
							管理 |
						</a>
					</span>
					<!--版权，请尊重作者-->
					<span class="nav-item">
						<a class="nav-link" href="https://github.com/gbxh/oneindex" target="_blank">
							<i class="fa-solid fa-copyright" style="color:#35b995;" aria-hidden="true">
							</i>
							由Oneindex驱动
						</a>
					</span>
					<br />
				</div>
			</center>
			<br />
			<br />
		</div>
		<script src="https://cdn.jsdelivr.net/npm/pjax/pjax.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/gbxh/oneindex@2.0/theme/gbxh.js"></script>
		<!--一言API-->
		<script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
	</body>
	<div id="aplayer" class="aplayer" data-order="random" data-id="7671378245" data-server="netease" data-type="playlist" data-fixed="true" data-autoplay="true" data-volume="0.5"></div>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer@1.10.1/dist/APlayer.min.css" ;>
	<script src="https://cdn.jsdelivr.net/npm/aplayer@1.10.1/dist/APlayer.min.js" ;></script>
	<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js" ;></script>
	<script src="https://cdn.jsdelivr.net/npm/meting@1.2.0/dist/Meting.min.js" ;></script>
	<script src="https://cdn.jsdelivr.net/gh/kaygb/kaygb@master/layer/layer.js" ;></script>
	<script src="https://cdn.jsdelivr.net/gh/kaygb/kaygb@master/js/v3.js" ;></script>
</html>
