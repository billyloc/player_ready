<?php


 /* Template Name: versus-gaming */ 

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	


<style>

::placeholder {
	color: yellow;
}

nav {
	margin: 20px 20px ;
}

nav ul {
	margin: auto;
	width: 960px;
	padding: 0;
}

nav ul li {
	display: inline-block;
	text-align: left;
}
	
.container {
	width: 960px;
}

.hero {
	background-image: url("https://images.unsplash.com/photo-1580327332925-a10e6cb11baa?ixlib=rb-1.2.1&auto=format&fit=crop&w=651&q=80");
	height: 500px;
	background-position: bottom;
	position: relative;
}


.header-text div {
	margin: 0;
	position: absolute;
	top: 90%;
	left: 50%;
	transform: translate(-50%, -50%);	
	font-size: 22px;
	color: yellow;
	font-weight: bolder;
	background-color: black;
	padding: 15px;
	border-radius: 10px;
}

.game-select {
	background-color: black;
	height: 300px;
}

.new-user {
	background-color: black;
	padding: 40px;
}

.new-user p {
	text-align: center;
	color: yellow;
	opacity: .3;
	font-size: 12px;
	font-style: italic;
	margin-bottom: 40px;

}

h1 {
	text-align: center;
	color: white;
	margin: 20px;
}

h2 {
	text-align: center;
	color: yellow;
	opacity: .2;
}


.new-user form {
	text-align: center;
}


.game-select select {
	padding: 20px;
	border-radius: 5px;
	margin: 0 10px 0 10px;
	width: 40%;
	text-align: center;
}

.new-user select {
	border-radius: 5px;
	width: 90%;
	text-align: center;
	background-color: black;
	border-color: yellow;
	color: yellow;
	padding: 10px;
}

.new-user select::placeholder {
	color: yellow;
}

.new-user input {
	width: 90%;
	border-radius: 5px;
	background-color: black;
	border-color: yellow;
	color: yellow;
	padding: 10px;
}

.new-user .user-field {
	display: inline-block;
	width: 45%;
}

.new-user form::placeholder {
	color: yellow;
}

.new-user .user-save {
	display: block;
	margin-top: 40px;
}

.new-user .user-save #new-user-submit {
    font-size: 22px;
    color: yellow;
    font-weight: bolder;
    background-color: black;
    padding: 15px;
    border-radius: 10px;
    width: 150px;
}

.game-grid {
	background-color: black;
}

.game-photos {
	flex-wrap: wrap;
	padding: 40px;

}

.game-grid img {
	flex-wrap: wrap;
	max-width: 250px;
	opacity: .2;
}



</style>			


</head>
<body>
	<nav>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Projects</a></li>
			<li><a href="">Contact Me</a></li>
		</ul>
	</nav>

	<div class="hero">
		<div class="header-text">
			<div>Find a new gamer to play with</div>
		</div>
	</div>

	<div class="new-user">
		<div class="container">
			<h2>Enter Your Information</h2>
			<p>Your information will not be shared until you choose to share it with someone</p>

			<form action="http://localhost/testsite/wp-content/themes/twentyseventeen/savedata.php" name="new-user" class="new-user-form">
				<div class="user-field">
					<input type="text" placeholder="gamertag" name="gamertag" class="gamertag">
				</div>
				<div class="user-field">
					<select name="platform" id="platform">
						<option value="steam">Steam</option>
						<option value="xbox">Xbox One X/S</option>
						<option value="playstation4">Playstation 4</option>
						<option value="switch">Nintendo Switch</option>
				</select>
				</div>
				<div class="user-save">
					<input type="submit" id="new-user-submit">
				</div>
			</form>  			
		</div>
	</div>

<!-- 	<div class="live-users">
		<div class="container">
			<h1>Choose a Game & System</h1>
			<form action="#" method="_GET" name="">
				<select name="game" id="game">
					<option value="" default>Choose a game...</option>
					<option value="cod">Call of Duty Modern Warfare</option>
					<option value="amongus">Among Us</option>
					<option value="gta">Grand Theft Auto 5</option>
					<option value="csgo">CS:GO</option>
				</select>
				<select name="platform" id="platform" placeholder="Platform">
					<option value="" default>choose a system</option>
					<option value="steam">Steam</option>
					<option value="playstation">Playstation 4</option>
					<option value="xbox">Xbox</option>
					<option value="switch">Nintendo Switch</option>
				</select>
				<button id="submit">Search</button>
			</form>				     
		</div>		
	</div> -->

	<div class="game-grid">
		<div class="game-photos">
			<img src="https://wallpaperaccess.com/full/1564264.jpg" alt="">
			<img src="https://wallpaperaccess.com/full/662071.jpg" alt="">
			<img src="https://wallpapercave.com/wp/fJjeGA9.jpg" alt="">
			<img src="https://images3.alphacoders.com/686/thumb-1920-686773.jpg" alt="">
			<img src="https://xdesktopwallpapers.com/wp-content/uploads/2012/04/Portal%202%20Black%20Background%20Poster.jpg" alt="">
			<img src="https://i.pinimg.com/originals/2a/65/6b/2a656b330532432caf1742c8586f7fff.jpg" alt="">
			<img src="https://wallpaperaccess.com/full/425772.jpg" alt="">
			<img src="https://wallpapercave.com/wp/OFHfjsQ.jpg" alt="">
			<img src="https://wallpapermemory.com/uploads/736/counter-strike-global-offensive-cs-go-background-hd-2560x1440-300244.jpg" alt="">
			<img src="https://www.gtabase.com/igallery/4201-4300/RDR2_Artwork_PC_Official-4220-1600.jpg" alt="">
			<img src="https://wallpaperaccess.com/full/3901970.jpg" alt="">
			<img src="https://wallpapercave.com/wp/wp4517150.jpg" alt="">
			<img src="https://images6.alphacoders.com/992/thumb-1920-992033.jpg" alt="">
			<img src="https://1.bp.blogspot.com/-JwCJ2ZHqtbM/XQJZBQx2evI/AAAAAAAAHNk/n3ZV4v-GQiEdsmCkyI_OtKuB73PTsyg1ACKgBGAs/w0/fortnite-avengers-stormbreaker-uhdpaper.com-4K-283.jpg" alt="">
			<img src="https://wallpapercave.com/wp/fyWCAIK.jpg" alt="">
			<img src="https://www.brawlhalla.com/c/uploads/2019/04/SKsplash_1920x1080.jpg" alt="">
			<img src="https://rocketleague.media.zestyio.com/rl_platform_keyart_2019.309bf22bd29c2e411e9dd8eb07575bb1.jpg" alt="">
			<img src="https://wallpaperaccess.com/full/171177.jpg" alt="">
			<img src="https://images2.alphacoders.com/838/thumb-1920-838311.jpg" alt="">
			<img src="https://wallpapercave.com/wp/wp1980778.jpg" alt="">
			<img src="https://images7.alphacoders.com/821/thumb-1920-821837.jpg" alt="">
			<img src="https://images.hdqwalls.com/wallpapers/overcooked-2-4s.jpg" alt="">
			<img src="https://d2ofqe7l47306o.cloudfront.net/games/1920x1080/warframe-heart-of-deimos-02.jpg" alt="">
			<img src="https://z7d5d9i7.rocketcdn.me/wp-content/uploads/2020/10/50e13c1a-ea20-49ec-83c0-fd1006986cc1-1601562891-scaled.jpg" alt="">
		</div>
	</div>


     	
	
</body>

<script>

	$(document).ready(function() {
		var games = {
			"async": true,
			"crossDomain": true,
			"url": "https://rawg-video-games-database.p.rapidapi.com/games",
			"method": "GET",
			"headers": {
				"x-rapidapi-host": "rawg-video-games-database.p.rapidapi.com",
				"x-rapidapi-key": "rktj8fPwOrmshdqBnmfsa7jJ0kehp1WOJ67jsnrhPp4KjqAmGB"
			}
		}

		$.ajax(games).done(function (response) {
			// console.log(response);
			$.each(response.results, function(index,value) {
				var images = '<img src="' + value.background_image + '" alt="">';
				// console.log(value.name);
				// $('.game-photos').prepend(images);
			})

		});


		$('#new-user-submit').click(function(e) {
			e.preventDefault();
			console.log('test');

			var gmt = $('.gamertag').val();
			var system = $('#platform').val();
			var dataString = $('.new-user-form').serializeData();
			console.log(dataString);

			$.ajax({
				type: 'POST',
				data: dataString,
				url: 'http://localhost/testsite/wp-content/themes/twentyseventeen/savedata.php',
				success: function(data) {
					console.log(data);
				}

			})



		})
	})
	





</script>

</html>


<?php 

// if($_POST['formSubmit'] == "Submit") {

//    $gamertag = $_POST['gamertag'];
//    $platform = $_POST['platform'];
//    $errorMessage = "";

//    if(empty($gamertag)) {
//       $errorMessage .= "<li>You forgot to enter a movie!</li>";
//    }
//    if(empty($platform)) {
//       $errorMessage .= "<li>You forgot to enter a name!</li>";
//    }
// }



// $dbhost = "localhost";

// $dbuser = "root";

// $dbpass = "";

// $dbname = "game_versus";


// $db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// $sql = "INSERT INTO users (gamertag,platform) VALUES (" . $_POST[gamertag] . "," . $_POST[platform] . ")";

// $db = mysqli_connect($dbhost,$dbuser,$dbpass);
// if(!$db) die("Error connecting to MySQL database.");
// mysqli_select_db($db,$sql);

/* close connection */
// $mysqli->close();



 ?>


