<!DOCTYPE html>
<!--[if IE 8]>
<html xmlns="http://www.w3.org/1999/xhtml" class="ie8 wp-toolbar"  lang="en-US">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" class="wp-toolbar" lang="en-US"><!--<![endif]--><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Dashboard ‹ Admin</title>
<script type="text/javascript">
addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
var ajaxurl = '/ahapedia/wp-admin/admin-ajax.php',
	pagenow = 'dashboard',
	typenow = '',
	adminpage = 'index-php',
	thousandsSeparator = ',',
	decimalPoint = '.',
	isRtl = 0;
</script>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/admin/load-styles.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="open-sans-css" href="<?php echo e(asset('assets/css/admin/css.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="thickbox-css" href="<?php echo e(asset('assets/css/admin/thickbox.css')); ?>" type="text/css" media="all">
<!--[if lte IE 7]>
<link rel='stylesheet' id='ie-css'  href='#/css/ie.min.css?ver=4.3.3' type='text/css' media='all' />
<![endif]-->
<link rel="stylesheet" id="tie-style-css" href="<?php echo e(asset('assets/css/admin/style.css')); ?>" type="text/css" media="all">
<link rel="stylesheet" id="tie-fonts-css" href="<?php echo e(asset('assets/css/admin/fonts.css')); ?>" type="text/css" media="all">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/localhost\/ahapedia\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.3"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script type="text/javascript" src="Dashboard_files/wp-emoji-release.js"></script>
		
<script type="text/javascript">
/* <![CDATA[ */
var userSettings = {"url":"\/ahapedia\/","uid":"1","time":"1458461609","secure":""};/* ]]> */
</script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/admin/load-scripts_002.php')); ?>"></script>
<!--[if lt IE 8]>
<script type='text/javascript' src='http://localhost/ahapedia/wp-includes/js/json2.min.js?ver=2011-02-23'></script>
<![endif]-->
<script type="text/javascript" src="<?php echo e(asset('assets/js/admin/tie.js')); ?>"></script>
<script type="text/javascript">
/* <![CDATA[ */
var quicktagsL10n = {"closeAllOpenTags":"Close all open tags","closeTags":"close tags","enterURL":"Enter the URL","enterImageURL":"Enter the URL of the image","enterImageDescription":"Enter a description of the image","textdirection":"text direction","toggleTextdirection":"Toggle Editor Text Direction","dfw":"Distraction-free writing mode","strong":"Bold","strongClose":"Close bold tag","em":"Italic","emClose":"Close italic tag","link":"Insert link","blockquote":"Blockquote","blockquoteClose":"Close blockquote tag","del":"Deleted text (strikethrough)","delClose":"Close deleted text tag","ins":"Inserted text","insClose":"Close inserted text tag","image":"Insert image","ul":"Bulleted list","ulClose":"Close bulleted list tag","ol":"Numbered list","olClose":"Close numbered list tag","li":"List item","liClose":"Close list item tag","code":"Code","codeClose":"Close code tag","more":"Insert Read More tag"};
/* ]]> */
</script>
<script type="text/javascript" src="Dashboard_files/quicktags.js"></script>
	<link id="wp-admin-canonical" rel="canonical" href="#/">
	<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, document.getElementById( 'wp-admin-canonical' ).href + window.location.hash );
		}
	</script>
<script type="text/javascript">var _wpColorScheme = {"icons":{"base":"#999","focus":"#00a0d2","current":"#fff"}};</script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>


<body class="wp-admin wp-core-ui js  index-php auto-fold admin-bar branch-4-3 version-4-3-3 admin-color-fresh locale-en-us customize-support sticky-menu svg">
<script type="text/javascript">
	document.body.className = document.body.className.replace('no-js','js');
</script>

	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
	
<div id="wpwrap">

<div id="adminmenumain" role="navigation" aria-label="Main menu">
<a href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>
<a href="#wp-toolbar" class="screen-reader-shortcut">Skip to toolbar</a>
<div id="adminmenuback"></div>
<div id="adminmenuwrap">
<ul id="adminmenu">


	<li class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last" id="menu-dashboard">
	<a href="#" class="wp-first-item wp-has-submenu wp-has-current-submenu wp-menu-open menu-top menu-top-first menu-icon-dashboard menu-top-last"><div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-dashboard"><br></div><div class="wp-menu-name">Dashboard</div></a>
		<ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head" aria-hidden="true">Dashboard</li>
			<li class="wp-first-item current"><a href="<?php echo e(URL::to('/admin')); ?>" class="wp-first-item current">Home</a></li>
			
		</ul>
	</li>
	<li class="wp-not-current-submenu wp-menu-separator" aria-hidden="true">
		<div class="separator"></div>
	</li>
		<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" id="menu-users">
	<a href="<?php echo e(URL::to('/kelola')); ?>" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-users" aria-haspopup="true">
	<div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-admin-users"><br></div>
	<div class="wp-menu-name">Kelola Anggota</div></a>
	<!--ul class="wp-submenu wp-submenu-wrap">
	<li class="wp-submenu-head" aria-hidden="true">Edit Data</li>
	<li class="wp-first-item"><a href="#/users.php" class="wp-first-item">All Users</a></li>
	<li><a href="#/user-new.php">Add New</a></li><li><a href="#/profile.php">Your Profile</a></li>
	</ul-->
	</li>
	<li class="wp-has-submenu wp-not-current-submenu open-if-no-js menu-top menu-icon-post menu-top-first" id="menu-posts">
	<a href="<?php echo e(URL::to('/validasi')); ?>" class="wp-has-submenu wp-not-current-submenu open-if-no-js menu-top menu-icon-post menu-top-first" aria-haspopup="true">
	<div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-admin-post"><br></div>
	<div class="wp-menu-name">Validasi Pembayaran</div></a>
		<!--ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head" aria-hidden="true">Validasi Pembayaran</li>
			<li class="wp-first-item"><a href="#/edit.php" class="wp-first-item">All Posts</a></li>
			
		</ul-->
	</li>
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tie_slider" id="menu-posts-tie_slider">
	<a href="<?php echo e(URL::to('/createJadwal')); ?>" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-tie_slider menu-icon-post" aria-haspopup="true">
	<div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before"><img src="Dashboard_files/slideshow.png" alt=""></div>
	<div class="wp-menu-name">Jadwal Latihan</div></a>
		<!--ul class="wp-submenu wp-submenu-wrap"><li class="wp-submenu-head" aria-hidden="true">Buat Jadwal</li>
			<li class="wp-first-item"><a href="#/edit.php?post_type=tie_slider" class="wp-first-item">Custom</a></li>
			<li><a href="#/post-new.php?post_type=tie_slider">Add New</a></li>
		</ul-->
	</li>
	
	<li class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" id="menu-pages">
		<a href="<?php echo e(URL::to('/penilaian')); ?>" class="wp-has-submenu wp-not-current-submenu menu-top menu-icon-page" aria-haspopup="true">
		<div class="wp-menu-arrow"><div></div></div>
		<div class="wp-menu-image dashicons-before dashicons-admin-page"><br></div><div class="wp-menu-name">Penilaian</div></a>
		<!--ul class="wp-submenu wp-submenu-wrap">
			<li class="wp-submenu-head" aria-hidden="true">Penilaian</li>
			<li class="wp-first-item"><a href="#/edit.php?post_type=page" class="wp-first-item">All</a></li>
			<li><a href="#/post-new.php?post_type=page">Add New</a></li>
		</ul-->
	</li>
	
	
	</li>
		<li id="collapse-menu" class="hide-if-no-js"><div id="collapse-button">
		<div></div></div><span>Collapse menu</span>
		</li>
	</ul>
</div>
</div>
<div id="wpcontent">

	<div id="wpadminbar" class="">
		<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
			<ul id="wp-admin-bar-root-default" class="ab-top-menu">
				<li id="wp-admin-bar-menu-toggle"><a aria-expanded="false" class="ab-item" href="#"><span class="ab-icon"></span><span class="screen-reader-text">Menu</span></a></li>
				<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="#">SIA</a>
				<div class="ab-sub-wrapper">
					<ul id="wp-admin-bar-site-name-default" class="ab-submenu">
						<li id="wp-admin-bar-view-site"><a class="ab-item" href="#">Visit Home</a></li>
					</ul>
				</div>		</li>
			
				<li id="wp-admin-bar-comments"><a class="ab-item" href="#/edit-comments.php" title="0 comments awaiting moderation"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
			</ul>
		<ul>
			<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="#"><?php echo Session::get('Anggota'); ?><img alt="" src="Dashboard_files/839c3c6b536c04b32c125e7d51f5cecd.jpg" srcset="http://2.gravatar.com/avatar/839c3c6b536c04b32c125e7d51f5cecd?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26"></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
			<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="#/profile.php"><img alt="" src="Dashboard_files/839c3c6b536c04b32c125e7d51f5cecd_002.jpg" srcset="http://2.gravatar.com/avatar/839c3c6b536c04b32c125e7d51f5cecd?s=128&amp;d=mm&amp;r=g 2x" class="avatar avatar-64 photo" height="64" width="64"><span class="display-name">ahamadzaenal</span></a>		</li>
			<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="#">Edit My Profile</a>		</li>
			<li id="wp-admin-bar-logout"><a class="ab-item" href="<?php echo e(URL::to('/logout')); ?>">Log Out</a>		</li></ul></div>		
			</li>
		</ul>			
		</div>
		<a class="screen-reader-shortcut" href="http://localhost/ahapedia/wp-login.php?action=logout&amp;_wpnonce=1e4f183096">Log Out</a>
	</div>

		
<div id="wpbody" role="main">

<div style="overflow: hidden;" id="wpbody-content" aria-label="Main content" tabindex="0">		
	<div class="wrap">
		<?php echo $__env->yieldContent('content'); ?>

	</div>	
</div>
</div><!-- dashboard-widgets-wrap -->

</div><!-- wrap -->



	
<script type="text/javascript">
/* <![CDATA[ */
var commonL10n = {"warnDelete":"You are about to permanently delete the selected items.\n  'Cancel' to stop, 'OK' to delete.","dismiss":"Dismiss this notice."};var wpAjax = {"noPerm":"You do not have permission to do that.","broken":"An unidentified error has occurred."};var adminCommentsL10n = {"hotkeys_highlight_first":"","hotkeys_highlight_last":"","replyApprove":"Approve and Reply","reply":"Reply","warnQuickEdit":"Are you sure you want to edit this comment?\nThe changes you made will be lost."};var _wpCustomizeLoaderSettings = {"url":"http:\/\/localhost\/ahapedia\/wp-admin\/customize.php","isCrossDomain":false,"browser":{"mobile":false,"ios":false},"l10n":{"saveAlert":"The changes you made will be lost if you navigate away from this page.","mainIframeTitle":"Customizer"}};var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/localhost\/ahapedia\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};var plugininstallL10n = {"plugin_information":"Plugin Information:","ays":"Are you sure you want to install this plugin?"};var heartbeatSettings = {"nonce":"8675beda44"};var authcheckL10n = {"beforeunload":"Your session has expired. You can log in again from this page or go to the login page.","interval":"180"};var wpLinkL10n = {"title":"Insert\/edit link","update":"Update","save":"Add Link","noTitle":"(no title)","noMatchesFound":"No results found."};/* ]]> */
</script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/admin/load-scripts.php')); ?>"></script>

		<script type="text/javascript">
		tinyMCEPreInit = {
			baseURL: "",
			suffix: ".min",
						mceInit: {},
			qtInit: {'replycontent':{id:"replycontent",buttons:"strong,em,link,block,del,ins,img,ul,ol,li,code,close"}},
			ref: {plugins:"",theme:"modern",language:""},
			load_ext: function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
		</script>
				<script type="text/javascript">
		
		( function() {
			var init, id, $wrap;

			if ( typeof tinymce !== 'undefined' ) {
				for ( id in tinyMCEPreInit.mceInit ) {
					init = tinyMCEPreInit.mceInit[id];
					$wrap = tinymce.$( '#wp-' + id + '-wrap' );

					if ( ( $wrap.hasClass( 'tmce-active' ) || ! tinyMCEPreInit.qtInit.hasOwnProperty( id ) ) && ! init.wp_skip_init ) {
						tinymce.init( init );

						if ( ! window.wpActiveEditor ) {
							window.wpActiveEditor = id;
						}
					}
				}
			}

			if ( typeof quicktags !== 'undefined' ) {
				for ( id in tinyMCEPreInit.qtInit ) {
					quicktags( tinyMCEPreInit.qtInit[id] );

					if ( ! window.wpActiveEditor ) {
						window.wpActiveEditor = id;
					}
				}
			}
		}());
		</script>
				
	
		
<div class="clear"></div></div><!-- wpwrap -->
<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>


<div class="quick-draft-textarea-clone" style="display: none; font-family: &quot;Open Sans&quot;,sans-serif; font-size: 14px; line-height: 19.6px; padding: 6px 7px; white-space: pre-wrap; word-wrap: break-word;"></div><div id="customize-container"></div></body></html>