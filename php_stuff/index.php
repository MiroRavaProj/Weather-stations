<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Weather Station</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>@import url("https://fonts.googleapis.com");@import url("https://fonts.gstatic.com");@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Rubik&display=swap");:root{--background-color:#17244e;--border-color:#ffffff00;--highlight-color:#7e57c2;--yt-color:#e53935}body{background-color:var(--background-color);display:flex;flex-direction:column;height:100vh;margin:0;overflow:hidden}*{box-sizing:border-box}h1,h2,h3,a,p,span{font-family:"Rubik",sans-serif;font-weight:400;color:#fff;margin:0}a{text-decoration:none}a:hover{color:var(--highlight-color)}nav{display:flex;width:100%;border-bottom:1px solid var(--border-color)}nav .nav-section{padding:1rem 2rem;display:flex;gap:1rem;border-left:1px solid var(--border-color);align-items:center;justify-content:center}#nav-mobile-section{display:flex;flex-basis:calc(100%*(2/3));z-index:2}#nav-toggle-button{align-items:center;background-color:transparent;border:none;border-left:1px solid var(--border-color);color:#fff;cursor:pointer;display:none;gap:.8rem;height:100%;justify-content:center;outline:none;padding:0 3rem;position:relative;z-index:3}#nav-toggle-button:hover,#nav-toggle-button:hover>span{color:var(--highlight-color)}
#nav-toggle-button>span,#nav-toggle-button>i{display:inline-block;height:1rem;line-height:1rem}#nav-social-section,#nav-contact-section{flex-grow:1}#nav-logo-section{flex-basis:calc(100%/3);justify-content:flex-start}#nav-logo-section>a>p>i{font-size:2.5rem}#nav-logo-section>a>p{font-size:2.5rem}#nav-link-section{flex-basis:50%;gap:6rem}#nav-social-section{gap:3rem}main{flex-grow:1;position:relative;overflow:hidden}main>article{height:100%;width:100%;display:grid;grid-template-columns:4fr 1fr;grid-template-rows:7fr 1fr;position:absolute;left:0;top:0;transition:transform .4s ease}main>article[data-status=inactive]{transform:translateX(-100%);transition:none}main>article[data-status=active]{transform:translateX(0%)}main>article[data-status=before]{transform:translateX(-100%)}main>article[data-status=after]{transform:translateX(100%)}main>article[data-status=becoming-active-from-before]{transform:translateX(-100%);transition:none}main>article[data-status=becoming-active-from-after]{transform:translateX(100%);transition:none}main>article>.article-section{height:100%;display:flex}
main>article>.article-description-section,main>article>.article-nav-section{border-left:1px solid var(--border-color)}main>article>.article-title-section,main>article>.article-nav-section{border-top:1px solid var(--border-color)}main>article:first-child>.article-image-section{background-image:url("https://images.unsplash.com/photo-1565626424178-c699f6601afd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80")}main>article:nth-child(2)>.article-image-section{background-image:url("https://images.unsplash.com/photo-1535905557558-afc4877a26fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2574&q=80")}main>article:nth-child(3)>.article-image-section{background-image:url("https://images.unsplash.com/photo-1660580554695-d2ca5008f1f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=927&q=80")}main>article:nth-child(4)>.article-image-section{background-image:url("https://images.unsplash.com/photo-1660766877755-4cac24f6cf21?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2232&q=80")}main>article>.article-image-section{background-position:center;background-size:cover}main>article>.article-description-section{flex-direction:column;justify-content:flex-end;padding:4rem}main>article>.article-description-section>p{color:rgba(255,255,255,.5);font-size:1.25em}main>article>.article-description-section>p>a:hover{text-decoration:underline}main>article>.article-title-section{align-items:center;justify-content:space-between;padding:2rem 4rem}
main>article>.article-title-section *{color:#fff}main>article>.article-title-section>h2{flex-basis:50%;font-family:"Montserrat",sans-serif;font-size:3.5rem;line-height:3rem;margin:0;text-transform:uppercase}main>article>.article-title-section>i{color:rgba(255,255,255,.75);font-size:4rem}main>article>.article-nav-section>.article-nav-button{background-color:transparent;flex-grow:1;border:none;outline:none;color:rgba(255,255,255,.75);font-size:3rem;cursor:pointer}main>article>.article-nav-section>.article-nav-button:hover{background-color:rgba(255,255,255,.02)}main>article>.article-nav-section>.article-nav-button:nth-child(2){border-left:1px solid var(--border-color)}@media(max-width:1200px){#nav-mobile-section{flex-basis:calc(100%*0.75)}#nav-logo-section{flex-basis:calc(100%*0.25)}#nav-link-section{flex-basis:calc(100%/3);gap:3rem}main{overflow-y:auto}main>article{grid-template-columns:none;grid-template-rows:1.5fr repeat(3,.75fr) .25fr;height:max(900px,100%)}main>article>.article-title-section>h2{font-size:3rem;line-height:2.6rem}
main>article>.article-title-section>i{font-size:3rem}main>article>.article-description-section,main>article>.article-nav-section{border-left:none}main>article>.article-image-section{order:1}main>article>.article-title-section{border-bottom:1px solid var(--border-color);order:2}main>article>.article-description-section{justify-content:center;order:3}main>article>.article-nav-section{border-bottom:1px solid var(--border-color);order:4}}@media(max-width:800px){nav{justify-content:space-between}nav[data-toggled=true]>#nav-mobile-section{transform:translateY(0%)}nav[data-toggled=true]>#nav-toggle-button{border-left:none}nav[data-transitionable=true]>#nav-mobile-section{transition:transform .4s ease}nav .nav-section{border-left:none;padding:1.5rem 1rem}#nav-logo-section>a>i{font-size:1.5rem;margin-left:1rem}#nav-mobile-section{background-color:var(--background-color);flex-direction:column;height:100vh;width:100vw;position:fixed;transform:translateY(-100%)}#nav-toggle-button{display:flex}#nav-link-section{flex-basis:60%;flex-direction:column;gap:4rem}
#nav-link-section>a{font-size:3rem}#nav-social-section>a{font-size:2rem}#nav-contact-section{padding-bottom:4rem}main>article{grid-template-rows:1fr repeat(4,.5fr);height:max(700px,100%)}main>article>.article-title-section{padding:2rem}main>article>.article-title-section>h2{flex-basis:70%;font-size:1.75em;line-height:1.5rem}main>article>.article-title-section>i{font-size:2rem}main>article>.article-description-section{padding:2rem}main>article>.article-description-section>p{font-size:1rem}}main>article>.article-description-section>p>.source-link{color:var(--highlight-color);display:inline}main>article .yt-link,main>article .yt-link>i{color:var(--yt-color);display:inline}.search-box{width:fit-content;height:fit-content;position:relative}.input-search{height:50px;width:50px;border-style:none;padding:10px;font-size:18px;letter-spacing:2px;outline:none;border-radius:25px;transition:all .5s ease-in-out;background-color:#22a6b3;padding-right:40px;color:#fff}.input-search::placeholder{color:rgba(255,255,255,.5);font-size:18px;letter-spacing:2px;font-weight:100}
.btn-search{width:50px;height:50px;border-style:none;font-size:20px;font-weight:700;outline:none;cursor:pointer;border-radius:50%;position:absolute;right:0;color:#fff;background-color:transparent;pointer-events:painted}.btn-search:focus~.input-search{width:300px;border-radius:0;background-color:transparent;border-bottom:1px solid rgba(255,255,255,.5);transition:all .5s cubic-bezier(0,.11,.35,2)}.input-search:focus{width:300px;border-radius:0;background-color:transparent;border-bottom:1px solid rgba(255,255,255,.5);transition:all .5s cubic-bezier(0,.11,.35,2)}</style>

</head>
<body>
<!-- partial:index.partial.html -->
<nav data-toggled="false" data-transitionable="false">
  <div id="nav-logo-section" class="nav-section">
    <a href="#">
      <p><i class="fa-solid fa-home"></i> Weather Stations</p>
    </a>
  </div>
  <div id="nav-mobile-section">
    <div id="nav-link-section" class="nav-section">
<!--
      /*new*/
-->
<iframe id="dummy" style="display:none;"></iframe>
    <form id="search-form" action="" method="post">
      
      <div class="search-box">
        <button id="btn-form" name="form-btn" class="btn-search">
          <i class="fas fa-search"></i>
        </button>
        
            <input type="text" name=city class="input-search" placeholder="Type to Search...">
        
        </div>
      </form>

<!--
      /*new*/
-->
<!--
    //--old--//
      <a href="#">ABOUT</a>
      <a href="#">WORK</a> 
    -->
    </div>
    <div id="nav-social-section" class="nav-section">
      <a href="https://www.youtube.com/c/Hyperplexed" target="_blank">
        <i style="font:2rem;" class="fa-brands fa-github"></i>
      </a>    
    </div>
    <div id="nav-contact-section" class="nav-section">
      <a href="#">GET IN TOUCH</a>
    </div>
  </div>
  <button id="nav-toggle-button" type="button" onclick="handleNavToggle()">
    <span>Menu</span>
    <i class="fa-solid fa-bars"></i>
  </button>
</nav>

<main>
  <article data-index="0" data-status="active">
    <div><iframe id="search-frame" width="100%" height="100%" src="out.html" allowfullscreen></iframe></div>
    <div class="article-description-section article-section">
      <p>In this page the user can search for a specific location, the program makes some calls to the meteostat api to retrieve data if present. <br> <br>If not, it is done an interpolation with the nearest stations to retrieve some temperature data and center the map on that specific location.
      </p>
    </div>
    <div class="article-title-section article-section">
      <h2>search</h2>
      <i class="fa-light fa-plus-large"></i>
    </div>
    <div class="article-nav-section article-section">
      <button class="article-nav-button" type="button" onclick="handleLeftClick()">
        <i class="fa-light fa-arrow-left-long"></i>
      </button>
      <button class="article-nav-button" type="button" onclick="handleRightClick()">
        <i class="fa-light fa-arrow-right-long"></i>
      </button>
    </div>
  </article>
  <article data-index="1" data-status="inactive">    
    <div><iframe  width="100%" height="100%" src="Global_Map.html" allowfullscreen></iframe></div>
    <div class="article-description-section article-section">
      <p>Weather station data year by year.</p>
    </div>
    <div class="article-title-section article-section">
        <h2>history</h2>
      <i class="fa-light fa-plus-large"></i>
    </div>
    <div class="article-nav-section article-section">
      <button class="article-nav-button" type="button" onclick="handleLeftClick()">
        <i class="fa-light fa-arrow-left-long"></i>
      </button>
      <button class="article-nav-button" type="button" onclick="handleRightClick()">
        <i class="fa-light fa-arrow-right-long"></i>
      </button>
    </div>
  </article>
  <article data-index="2" data-status="inactive">    
    <div><iframe  width="100%" height="100%" src="Trend_line.html" allowfullscreen></iframe></div>
    <div class="article-description-section article-section">
      <p>These Trend Lines show the user the temperature change in from the year 1900 since today.</p>
    </div>
    <div class="article-title-section article-section">
      <h2>trend</h2>
      <i class="fa-light fa-plus-large"></i>
    </div>
    <div class="article-nav-section article-section">
      <button class="article-nav-button" type="button" onclick="handleLeftClick()">
        <i class="fa-light fa-arrow-left-long"></i>
      </button>
      <button class="article-nav-button" type="button" onclick="handleRightClick()">
        <i class="fa-light fa-arrow-right-long"></i>
      </button>
    </div>
  </article>
</main>
<!-- partial -->
  <script src='https://kit.fontawesome.com/944eb371a4.js'></script><script  src="./script.js"></script>

</body>
</html>


<?php 
	if(isset($_POST['form-btn'])) {
		function EseguiPy(){
			//$command=escapeshellcmd('sudo python3 main.py "'.$_REQUEST["city"].'"');    //script python
			echo shell_exec('python3 plotter.py "'.$_POST["city"].'" 2>&1');
			//sleep(1)
		}


		if(isset($_POST["city"])){
			EseguiPy();
			//../images/out.html non va
			//$html.='<img src="out.png">';
		}
	}
?>
