<?php
/**
 * Support the htmlinject hook, which allows modules to change header, pre and post body on all pages.
 */
$this->data['htmlinject'] = array(
	'htmlContentPre' => array(),
	'htmlContentPost' => array(),
	'htmlContentHead' => array(),
);


$jquery = array();
if (array_key_exists('jquery', $this->data)) $jquery = $this->data['jquery'];

if (array_key_exists('pageid', $this->data)) {
	$hookinfo = array(
		'pre' => &$this->data['htmlinject']['htmlContentPre'], 
		'post' => &$this->data['htmlinject']['htmlContentPost'], 
		'head' => &$this->data['htmlinject']['htmlContentHead'], 
		'jquery' => &$jquery, 
		'page' => $this->data['pageid']
	);
		
	SimpleSAML_Module::callHooks('htmlinject', $hookinfo);	
}
// - o - o - o - o - o - o - o - o - o - o - o - o -

/**
 * Do not allow to frame simpleSAMLphp pages from another location.
 * This prevents clickjacking attacks in modern browsers.
 *
 * If you don't want any framing at all you can even change this to
 * 'DENY', or comment it out if you actually want to allow foreign
 * sites to put simpleSAMLphp in a frame. The latter is however
 * probably not a good security practice.
 */
header('X-Frame-Options: SAMEORIGIN');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, height=device-height, initial-scale=1.0" />
<script type="text/javascript" src="/<?php echo $this->data['baseurlpath']; ?>resources/script.js"></script>
<title><?php
if(array_key_exists('header', $this->data)) {
	echo $this->data['header'];
} else {
	echo 'simpleSAMLphp';
}
?></title>
<!--
	<link rel="stylesheet" type="text/css" href="/<?php echo $this->data['baseurlpath']; ?>resources/default.css" />
	<link rel="icon" type="image/icon" href="/<?php echo $this->data['baseurlpath']; ?>resources/icons/favicon.ico" />
-->

<?php

if(!empty($jquery)) {
	$version = '1.5';
	if (array_key_exists('version', $jquery))
		$version = $jquery['version'];
		
	if ($version == '1.5') {
		if (isset($jquery['core']) && $jquery['core'])
			echo('<script type="text/javascript" src="/' . $this->data['baseurlpath'] . 'resources/jquery.js"></script>' . "\n");
	
		if (isset($jquery['ui']) && $jquery['ui'])
			echo('<script type="text/javascript" src="/' . $this->data['baseurlpath'] . 'resources/jquery-ui.js"></script>' . "\n");
	
		if (isset($jquery['css']) && $jquery['css'])
			echo('<link rel="stylesheet" media="screen" type="text/css" href="/' . $this->data['baseurlpath'] . 
				'resources/uitheme/jquery-ui-themeroller.css" />' . "\n");	
			
	} else if ($version == '1.6') {
		if (isset($jquery['core']) && $jquery['core'])
			echo('<script type="text/javascript" src="/' . $this->data['baseurlpath'] . 'resources/jquery-16.js"></script>' . "\n");
	
		if (isset($jquery['ui']) && $jquery['ui'])
			echo('<script type="text/javascript" src="/' . $this->data['baseurlpath'] . 'resources/jquery-ui-16.js"></script>' . "\n");
	
		if (isset($jquery['css']) && $jquery['css'])
			echo('<link rel="stylesheet" media="screen" type="text/css" href="/' . $this->data['baseurlpath'] . 
				'resources/uitheme16/ui.all.css" />' . "\n");	
	}
}

if(!empty($this->data['htmlinject']['htmlContentHead'])) {
	foreach($this->data['htmlinject']['htmlContentHead'] AS $c) {
		echo $c;
	}
}




if ($this->isLanguageRTL()) {
?>
	<link rel="stylesheet" type="text/css" href="/<?php echo $this->data['baseurlpath']; ?>resources/default-rtl.css" />
<?php	
}
?>

	
	<meta name="robots" content="noindex, nofollow" />
	

<?php	
if(array_key_exists('head', $this->data)) {
	echo '<!-- head -->' . $this->data['head'] . '<!-- /head -->';
}
?>
</head>
<?php
$onLoad = '';
if(array_key_exists('autofocus', $this->data)) {
	$onLoad .= 'SimpleSAML_focus(\'' . $this->data['autofocus'] . '\');';
}
if (isset($this->data['onLoad'])) {
	$onLoad .= $this->data['onLoad']; 
}

if($onLoad !== '') {
	$onLoad = ' onload="' . $onLoad . '"';
}
?>
<body<?php echo $onLoad; ?>>

<!--
<div id="wrap">
	
	<div id="header">
		<h1><a style="text-decoration: none; color: white" href="/<?php echo $this->data['baseurlpath']; ?>"><?php 
			echo (isset($this->data['header']) ? $this->data['header'] : 'simpleSAMLphp'); 
		?></a></h1>
	</div>

	
	<?php 
	
	$includeLanguageBar = TRUE;
	if (!empty($_POST)) 
		$includeLanguageBar = FALSE;
	if (isset($this->data['hideLanguageBar']) && $this->data['hideLanguageBar'] === TRUE) 
		$includeLanguageBar = FALSE;
	
	if ($includeLanguageBar) {
		
		
		echo '<div id="languagebar">';
		$languages = $this->getLanguageList();
		$langnames = array(
					'no' => 'Bokmål',
					'nn' => 'Nynorsk',
					'se' => 'Sámegiella',
					'sam' => 'Åarjelh-saemien giele',
					'da' => 'Dansk',
					'en' => 'English',
					'de' => 'Deutsch',
					'sv' => 'Svenska',
					'fi' => 'Suomeksi',
					'es' => 'Español',
					'fr' => 'Français',
					'it' => 'Italiano',
					'nl' => 'Nederlands',
					'lb' => 'Luxembourgish', 
					'cs' => 'Czech',
					'sl' => 'Slovenščina', // Slovensk
					'lt' => 'Lietuvių kalba', // Lithuanian
					'hr' => 'Hrvatski', // Croatian
					'hu' => 'Magyar', // Hungarian
					'pl' => 'Język polski', // Polish
					'pt' => 'Português', // Portuguese
					'pt-br' => 'Português brasileiro', // Portuguese
					'ru' => 'русский язык', // Russian
					'et' => 'eesti keel',
					'tr' => 'Türkçe',
					'el' => 'ελληνικά',
					'ja' => '日本語',
					'zh' => '简体中文', // Chinese (simplified)
					'zh-tw' => '繁體中文', // Chinese (traditional)
					'ar' => 'العربية', // Arabic
					'fa' => 'پارسی', // Persian
					'ur' => 'اردو', // Urdu
					'he' => 'עִבְרִית', // Hebrew
					'id' => 'Bahasa Indonesia', // Indonesian
					'sr' => 'Srpski',
					'lv' => 'Latviešu',
		);
		
		$textarray = array();
		foreach ($languages AS $lang => $current) {
			$lang = strtolower($lang);
			if ($current) {
				$textarray[] = $langnames[$lang];
			} else {
				$textarray[] = '<a href="' . htmlspecialchars(SimpleSAML_Utilities::addURLparameter(SimpleSAML_Utilities::selfURL(), array($this->languageParameterName => $lang))) . '">' .
					$langnames[$lang] . '</a>';
			}
		}
		//echo join(' | ', $textarray);
		echo '</div>';

	}



	?>
-->
	<div id="content">

<?php

if(!empty($this->data['htmlinject']['htmlContentPre'])) {
	foreach($this->data['htmlinject']['htmlContentPre'] AS $c) {
		echo $c;
	}
}
?>




<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ΜΟΝΑΔΕΣ ΑΡΙΣΤΕΙΑΣ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic&amp;subset=latin,greek-ext,greek' rel='stylesheet' type='text/css'>

    <link href="https://ma.ellak.gr/wp-content/themes/ma_ellak/css/main.css" rel="stylesheet">
    <link href="https://ma.ellak.gr/wp-content/themes/ma_ellak/css/datepicker.css" rel="stylesheet">
    <style>
     .main1{background: #00C697;}
     label {color:white;}
     .btn {padding: 4px 10px 4px;font-weight: normal; }
login .btn-link {
padding: 0;
text-align: left;
border-color: transparent;
cursor: pointer;
color: #FAED4B;
}
h3{color:white;}
.main .btn-link, .main .btn-link:active, .main .btn-link[disabled],
.main .btn-link,
a.btn , .btn-link, .dropdown.login .btn-link:active, .login .btn-link[disabled] {
background-color: none !important;
background-image: none !important;
}
a:link, a:visited {border-bottom:0px;}
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
  </head>

  <body class="home">
    <div class="yamm navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <ul class="nav">
        <li>&nbsp;</li>
        <li><a href="http://ma.ellak.gr/">MONAΔΕΣ ΑΡΙΣΤΕΙΑΣ</a></li>
        </ul>
        <ul class="nav pull-right">
        <li class="icn"><a href="#"><i class="icon-twitter-sign"></i></a></li>
        <li class="icn"><a href="#"><i class="icon-facebook-sign"></i></a></li>
        <li class="icn"><a href="#"><i class="icon-rss"></i></a></li>
        </ul>
       
    </div><!--home-->
	</div>
    <div id="main1" class="main1">
      <div class="container">

