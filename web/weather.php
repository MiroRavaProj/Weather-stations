<?php
	function Start(){
		$html='<link rel="stylesheet" href="style.css">';  //foglio di stile
		$html.='<form action="weather.php">';   //pagina da eseguire
		$html.='<div class="wrap">';
		$html.='<div class="search">';
		$html.='<input type="text" name=city class="searchTerm" placeholder="What are you looking for?">';  //text input
		$html.='<button type="submit" class="searchButton">';   //bottone invio
		$html.='<i class="fa fa-search"></i>';
		$html.='</button>';
		$html.'</div></div>';
		return $html;
	}
	function EseguiPy(){
		$command=escapeshellcmd('python main.py "'.$_REQUEST["city"].'"');    //script python
		shell_exec($command);
		//sleep(1)
	}

	$html=Start();
	if(isset($_REQUEST["city"])){
		EseguiPy();
		$html.='<iframe src="out.html"></iframe>';	//../images/out.html non va
		//$html.='<img src="out.png">';
	}
	$html.='<div class="footer">gfehrtyjfyuigtku6lyfgu</div>';
	echo $html;
