<?php 
include 'game-versus.php';

// if(isset($_POST['formSubmit']) && $_POST['formSubmit'] == "Submit") {

// 	if(isset($_POST['gamertag']))
// 		$gamertag = $_POST['gamertag'];
// 		echo $gamertag;
// 	if(isset($_POST['platform']))
// 		$platform = $_POST['platform'];
// 		echo $platform;

// 	$errorMessage = "";

// 	if(empty($gamertag)) {
// 	  $errorMessage .= "<li>You forgot to enter a movie!</li>";
// 	}
// 	if(empty($platform)) {
// 	  $errorMessage .= "<li>You forgot to enter a name!</li>";
// 	}
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

echo "did this work?";




$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['gamertag']))
    $errors['gamertag'] = 'Gamertag is required.';

if (empty($_POST['platform']))
    $errors['platform'] = 'Platform is required.';


// return a response ===========================================================

// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {

    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {

$dbhost = "localhost";

$dbuser = "root";

$dbpass = "";

$dbname = "game_versus";


$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = "INSERT INTO users (gamertag,platform) VALUES (" . $_POST[gamertag] . "," . $_POST[platform] . ")";

$db = mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$db) die("Error connecting to MySQL database.");
mysqli_select_db($db,$sql);	

    // if there are no errors process our form, then return a message

    // DO ALL YOUR FORM PROCESSING HERE
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

    // show a message of success and provide a true success variable
    $data['success'] = true;
    $data['message'] = 'Success!';
}

// return all our data to an AJAX call
echo json_encode($data);



 ?>