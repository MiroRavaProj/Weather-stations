<?php
	function Start(){
		$html='<linkn rel="stylesheet" href="style.css">';  //foglio di stile
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
		escapeshellcmd('../python/main.py "'.$_REQUEST["city"].'"');    //script python
		sleep(2)
	}

	$html=Start();
	if(isset($_REQUEST["city"])){
		EseguiPy();
		$html.='<iframe src="../images/out.html"></iframe>';     //lettura immagine
	}
	echo $html;
