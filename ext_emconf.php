<?php

########################################################################
# Extension Manager/Repository config file for ext: "novashadowbox"
#
# Auto generated 04-09-2008 15:04
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Nova ShadowBox',
	'description' => 'Use shadowbox with typo3 content',
	'category' => 'fe',
	'author' => 'Remi Touja',
	'author_email' => 'remi.touja@gmail.com',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => 'kj_imagelightbox2',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'Novaldi',
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
			'kj_imagelightbox2' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:68:{s:9:"ChangeLog";s:4:"8db7";s:10:"README.txt";s:4:"ee2d";s:26:"class.ux_tslib_content.php";s:4:"141e";s:21:"ext_conf_template.txt";s:4:"98bc";s:12:"ext_icon.gif";s:4:"b94c";s:17:"ext_localconf.php";s:4:"57f5";s:14:"ext_tables.php";s:4:"89e3";s:17:"res/flvplayer.swf";s:4:"7e1f";s:36:"res/shadowbox2.0/jquery-1.2.6.min.js";s:4:"a933";s:29:"res/shadowbox2.0/shadowbox.js";s:4:"4176";s:37:"res/shadowbox2.0/lang/shadowbox-ar.js";s:4:"7d7f";s:37:"res/shadowbox2.0/lang/shadowbox-ca.js";s:4:"f689";s:37:"res/shadowbox2.0/lang/shadowbox-cs.js";s:4:"5c70";s:40:"res/shadowbox2.0/lang/shadowbox-de-CH.js";s:4:"d5b1";s:40:"res/shadowbox2.0/lang/shadowbox-de-DE.js";s:4:"f8e5";s:37:"res/shadowbox2.0/lang/shadowbox-en.js";s:4:"b939";s:37:"res/shadowbox2.0/lang/shadowbox-es.js";s:4:"e889";s:37:"res/shadowbox2.0/lang/shadowbox-et.js";s:4:"17fc";s:37:"res/shadowbox2.0/lang/shadowbox-fi.js";s:4:"54ca";s:37:"res/shadowbox2.0/lang/shadowbox-fr.js";s:4:"7b68";s:37:"res/shadowbox2.0/lang/shadowbox-gl.js";s:4:"46e1";s:37:"res/shadowbox2.0/lang/shadowbox-he.js";s:4:"43ce";s:37:"res/shadowbox2.0/lang/shadowbox-id.js";s:4:"f2c2";s:37:"res/shadowbox2.0/lang/shadowbox-is.js";s:4:"e08b";s:37:"res/shadowbox2.0/lang/shadowbox-it.js";s:4:"72e9";s:37:"res/shadowbox2.0/lang/shadowbox-ko.js";s:4:"4898";s:37:"res/shadowbox2.0/lang/shadowbox-my.js";s:4:"1d89";s:37:"res/shadowbox2.0/lang/shadowbox-nl.js";s:4:"cbda";s:37:"res/shadowbox2.0/lang/shadowbox-no.js";s:4:"4a9a";s:37:"res/shadowbox2.0/lang/shadowbox-pl.js";s:4:"e15e";s:40:"res/shadowbox2.0/lang/shadowbox-pt-BR.js";s:4:"2add";s:40:"res/shadowbox2.0/lang/shadowbox-pt-PT.js";s:4:"82c9";s:37:"res/shadowbox2.0/lang/shadowbox-ro.js";s:4:"a982";s:37:"res/shadowbox2.0/lang/shadowbox-ru.js";s:4:"ae58";s:37:"res/shadowbox2.0/lang/shadowbox-sk.js";s:4:"2871";s:37:"res/shadowbox2.0/lang/shadowbox-sv.js";s:4:"c767";s:37:"res/shadowbox2.0/lang/shadowbox-tr.js";s:4:"4773";s:40:"res/shadowbox2.0/lang/shadowbox-zh-CN.js";s:4:"4e7a";s:40:"res/shadowbox2.0/lang/shadowbox-zh-TW.js";s:4:"aa5b";s:42:"res/shadowbox2.0/adapter/shadowbox-base.js";s:4:"5c7f";s:42:"res/shadowbox2.0/adapter/shadowbox-dojo.js";s:4:"2ec4";s:41:"res/shadowbox2.0/adapter/shadowbox-ext.js";s:4:"6f34";s:44:"res/shadowbox2.0/adapter/shadowbox-jquery.js";s:4:"b008";s:46:"res/shadowbox2.0/adapter/shadowbox-mootools.js";s:4:"a17d";s:47:"res/shadowbox2.0/adapter/shadowbox-prototype.js";s:4:"c1b2";s:41:"res/shadowbox2.0/adapter/shadowbox-yui.js";s:4:"d3a4";s:40:"res/shadowbox2.0/player/shadowbox-flv.js";s:4:"e7ea";s:41:"res/shadowbox2.0/player/shadowbox-html.js";s:4:"bb78";s:43:"res/shadowbox2.0/player/shadowbox-iframe.js";s:4:"ba9e";s:40:"res/shadowbox2.0/player/shadowbox-img.js";s:4:"2437";s:39:"res/shadowbox2.0/player/shadowbox-qt.js";s:4:"51d3";s:40:"res/shadowbox2.0/player/shadowbox-swf.js";s:4:"0feb";s:40:"res/shadowbox2.0/player/shadowbox-wmp.js";s:4:"6494";s:28:"res/shadowbox2.0/skin/README";s:4:"6f90";s:39:"res/shadowbox2.0/skin/classic/icons.psd";s:4:"9308";s:41:"res/shadowbox2.0/skin/classic/loading.gif";s:4:"ffb9";s:38:"res/shadowbox2.0/skin/classic/skin.css";s:4:"0aa8";s:37:"res/shadowbox2.0/skin/classic/skin.js";s:4:"6f1e";s:45:"res/shadowbox2.0/skin/classic/icons/close.png";s:4:"370c";s:44:"res/shadowbox2.0/skin/classic/icons/next.png";s:4:"1c8c";s:45:"res/shadowbox2.0/skin/classic/icons/pause.png";s:4:"b960";s:44:"res/shadowbox2.0/skin/classic/icons/play.png";s:4:"a404";s:48:"res/shadowbox2.0/skin/classic/icons/previous.png";s:4:"156f";s:35:"static/nova_shadowbox/constants.txt";s:4:"b971";s:31:"static/nova_shadowbox/setup.txt";s:4:"e50a";s:14:"doc/manual.sxw";s:4:"2b9d";s:19:"doc/wizard_form.dat";s:4:"c046";s:20:"doc/wizard_form.html";s:4:"0d7b";}',
	'suggests' => array(
	),
);

?>