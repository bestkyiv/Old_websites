<?php
	@error_reporting(E_ALL & ~E_NOTICE);
	@ini_set('error_reporting', E_ALL & ~E_NOTICE);
	@ini_set('display_errors', '1');
	@ini_set('display_startup_errors', '0');
	@ini_set('ignore_repeated_errors', '1');
	@ignore_user_abort(1);
	
	//********* LOAD PATH **********
	define ('ROOT_PATH', dirname(__FILE__) . "/");	
	define ('PAGES_PATH', ROOT_PATH . "pages/");
	
	//********* LOAD CONFIG **********
	$CONFIG = parse_ini_file(PAGES_PATH . "config.ini", true);
	
	//********* LOAD REQUEST ?page= OR DefaultPage **********	
	$PAGE = trim($_REQUEST['page']);
	$PAGE = (array_key_exists($PAGE, $CONFIG['PAGES'])) ? $PAGE : $CONFIG['SETTINGS']['DefaultPage'];

	//********* LOAD HTML **********	
	$HTML = LoadTemplate($CONFIG['SETTINGS']['MainPage']);
	$CONTENT = LoadTemplate($PAGE);
	
	//********* LOAD CONTENT & REPLACE TAGS [TAG] FROM config.ini **********
	$VAR = $CONFIG['TAGS'];
	$VAR['CONTENT'] = $CONTENT;
	
	foreach ( $VAR as $key => $value ){
		if($key == 'TITLE')
			$value = ($CONFIG['PAGES'][ $PAGE ] != '') ? $value.$CONFIG['SETTINGS']['TitleSeparator'].$CONFIG['PAGES'][ $PAGE ] : $value;
	    $HTML = str_replace ( "[{$key}]", $value, $HTML );
	}
	//********* PARSE SHOW & HIDE TAGs **********
	$HTML = preg_replace( "#\[SHOW=([^\]]+)\](.+?)\[/SHOW\]#ies", "ShowHideTag('SHOW', '\\1', '\\2')", $HTML);
	$HTML = preg_replace( "#\[HIDE=([^\]]+)\](.+?)\[/HIDE\]#ies", "ShowHideTag('HIDE', '\\1', '\\2')", $HTML);
	
	//********* PRINT HTML **********
	print $HTML;
	
	//********* FUNCTIONS **********
	function LoadTemplate($name){
		$fn = PAGES_PATH . $name . ".html";
		if (file_exists( $fn )){
			$fp = fopen ($fn, "r");
			if ($fp){
				$ret = fread ($fp, filesize ($fn));
				fclose ($fp);
			}
		} else {
			print "ERROR! Can't load file: " . $fn;
                }
		return $ret;
	}
	
	function ShowHideTag($tag, $pg, $cont){
		global $PAGE, $CONFIG;
		$pg = trim($pg);
		if(!array_key_exists($pg, $CONFIG['PAGES'])) 
			return '';
		if($tag == 'SHOW' && strstr($PAGE, $pg) || $tag == 'HIDE' && !strstr($PAGE, $pg))
			return $cont;
		else
			return '';
	}

?>