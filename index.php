<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/jpg" href="images/zepbisou.jpg" />
	<title>Zepae</title>
</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<body>
<?php $nav = "0"; include("navbar.php"); ?>
	    <!-- Add a placeholder for the Twitch embed -->
<div class="container-fluid">
    <div class="row">
    	<div class="col-sm-10">
    		<h3 style="font-family:Comic Sans MS" id="titrestream"></h3>
    		<h4 style="font-family:Comic Sans MS" id="jeustream"></h4>
    	</div>
	</div>
	<div class="row">
    <div class="center">
    	<div class="col-sm-12" id="twitch-embed" style="height:85vh"></div>
		 <div class=col-sm-2"></div>
	</div>
	</div>
</div>


	    <!-- Load the Twitch embed script -->
	    <script src="https://embed.twitch.tv/embed/v1.js"></script>

	    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
<script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "95%",
        height: "90.85%",
        channel: "zepae_",
        layout: "video-with-chat"
      });
      $.ajax({
	 type: 'GET',
	 url: 'https://api.twitch.tv/kraken/channels/zepae_',
	 headers: {
	   'Client-ID': 'ioiq2ma69jg5m8hx8srr23wlyccdi0'
	 },
	 success: function(data) {
	   console.log(data);
	   document.getElementById("titrestream").innerHTML = data.status;
	   document.getElementById("jeustream").innerHTML = "Joue à " + data.game;
	 }
	});

</script>
</body>
</html>

<style>
.center {
    margin: 0 auto;
    float: none;
}
body {
    background-color: rgb(242, 242, 242);
margin:0;
}
@font-face{
	font-family:'mustardo';
	src:url('./mustardo.ttf');
}
.image
{
  width: 100%;
  max-width: 400px;
  height: auto;
}

@media (max-width: 980px) {

	h3
	{
		font-size:18px;
	}
	h4
	{
		font-size:13px;
	}
}

</style>