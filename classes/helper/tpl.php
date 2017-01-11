<?php
	function make_my_page($content){
		global $config;
		$script="";
		$css="";
		$header=array();
		$footer=array();
		$header['title']=$config['config']['title'];
		foreach ($config['js'] as $key => $value) {
				$script.='<script src="'.$value.'"></script>';
		}
		foreach ($config['css'] as $key => $value) {
				$css.='<link href="'.$value.'" rel="stylesheet" type="text/css">';
		}

		$header['css']=$css;
		$footer['js']=$script;
		$result="";
		$result.=get_tpl("header.tpl",$header);
		$result.=$content;
		$result.=get_tpl("footer.tpl",$footer);
		return $result;
	}

	function get_tpl ($tpl_name, $vars){
		$result="";
		$result=file_get_contents("scripts/view/".$tpl_name);
		
		foreach ($vars as $key => $item) {
			$result=str_replace("[#".$key."#]",$item, $result);	
		}
		return $result;
	}
?>