<?php $active = "active"; ?>

<ul class="nav nav-tabs" id="nav">
  <li style="padding-left:0.5%">
  	<img src="images/zepbisou.jpg" height="68 px" width="68px">
  </li>
  <li class=<?php if($nav=="0"){ echo '"nav-item ', $active , '"'; }else{ echo '"nav-item"';} ?> 
  		style='padding-left:0.5vh' >
    <a class="nav-link" href="index" <?php if($nav=="0"){ echo 'style="color:#014568;margin-top:0.8vh;font-size:220%;font-family:mustardo;"'; }else{echo 'style="color:white;margin-top:0.8vh;font-size:220%;font-family:mustardo;"';}?>>Accueil</a>
  </li>
  <li class=<?php if($nav=="1"){ echo '"nav-item ', $active , '"'; }else{ echo '"nav-item"';}?>>
    <a <?php if($nav=="1"){ echo 'style="color:#014568;margin-top:0.8vh;font-family:mustardo;font-size: 220%;"'; }else{echo 'style="color:white;margin-top:0.8vh;font-family:mustardo;font-size: 220%;"';}?> class="nav-link"href="arbre">Arbre du tournoi</a>
  </li>
  <li class=<?php if($nav=="2"){ echo '"nav-item ', $active , '"'; }else{ echo '"nav-item"';}?>>
    <a <?php if($nav=="2"){ echo 'style="color:#014568;margin-top:0.8vh;font-family:mustardo;font-size:220%;"'; }else{echo 'style="color:white;margin-top:0.8vh;font-family:mustardo;font-size:220%;"';}?> class="nav-link" href="regles">Règles !</a>
  </li>
  	<p style="font-family:mustardo;font-size:305%;color:white;float:right;">Zepae&nbsp&nbsp&nbsp</p>
</ul>

<ul class="nav nav-tabs" id="nav2"">
	  <li style="padding-left:0.5%">
	  	<img src="images/zepbisou.jpg" height="68 px" width="68px">
	  </li>
	  <li>
		<span class="glyphicon glyphicon-menu-hamburger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true" style="vertical-align:center;width:48px;height:68px;font-size:68px;color:white;padding-left:1%"></span>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdown">
			    <a class="dropdown-item" style="font-family:mustardo;font-size:220%;color:white;padding-left:2vh;" href="index">Accueil</a><br />
			    <a class="dropdown-item" style="font-family:mustardo;font-size:220%;color:white;padding-left:2vh;" href="arbre">Arbre</a><br />
			    <a class="dropdown-item" style="font-family:mustardo;font-size:220%;color:white;padding-left:2vh;" href="regles">Règles</a>
			</div>
	</li>
	  	<p style="font-family:mustardo;font-size:305%;color:white;float:right;">Zepae&nbsp&nbsp&nbsp</p>
</ul>


<style>
#dropdown {
	background-color:white;
	background-image:url(images/background4.png);

}
@media (max-width: 980px) {

	#nav2 {
	background-color:white;
	background-image:url(images/background4.png);

	}
	#nav {
		display:none;
	}
}
@media (min-width: 981px) {

	#nav2 {
		display:none;
	}
	#nav {
		background-image:url(images/background4.png);

	}
}
</style>