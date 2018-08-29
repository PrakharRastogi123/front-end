<!DOCTYPE html>
<html>
<head>
	<title>Your Dog's Details!!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
	<h1>Your Dog's Details!!</h1>
	<p>“Dogs are not our whole life, but they make our lives whole.”
	<br> – Roger Caras <br>
	"A dog is the only thing on earth that loves you more than you love yourself."
	<br>- Josh Billings
	</p>
<form action="rastogi.php" method="post">
	<div>
	<label>Your Name:<input type="text" name="myname" placeholder="Joseph Grey" required></label>
	<br>
	<label>Email:<input type="Email" name="Email" placeholder="JosephGrey@gmail.com" required></label>
	<br>
	<label>Password:<input type="Password" name="Password" placeholder="Password" pattern=".{5,10}" required title="Must have 5 to 10 characters" ></label>
	<br>
	<label>Your Dog's Name:<input type="text" name="mydogname" placeholder="Pluto" required></label>
	<br>
	<label>Breed:<input type="text" name="breed" placeholder="Labrador" required></label>
	<br>
	<label>Your favourite hobby with your dog:<textarea name="paragraph" placeholder="Just a few lines would be enough!"  required ></textarea></label>
	<br>
	<button>Submit</button>
	<br>
</div>
<img src="dog1.jpg">
<img src="dog2.jpg">
<img src="dog3.jpg">
<img src="dog4.jpg">
<img src="dog5.jpg">
</form>

</body>
</html>