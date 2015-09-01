<?

ini_set('display_errors', 'On');

$prayer_cat = $_POST['prayer_cat'];
$name = $_POST['name'];
$email = $_POST['email'];
$prayer = $_POST['prayer'];
$anon = $_POST['anon'];

// echo "prayer_cat: " . $prayer_cat;
// echo "\nanon: " . $anon . " ;";

$con = mysqli_connect('50.87.144.163','rccgking_kcd','kingscourt','rccgking_KCD');
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"rccgking_KCD");

$sql = "INSERT INTO prequest (id, prayer_cat, name, email, prayer, anon ) 
          VALUES ('', '$prayer_cat', '$name','$email', '$prayer', '$anon')";
 
if (mysqli_query($con, $sql)) {
	echo "\n Success!";
} else {
	//mail('adeosua@tcd.ie', 'RCCG KCD Members: SQL Error', mysqli_error($con));
  	//echo "\n  Error: ".mysqli_error($con);
}

//mail('adeosua@tcd.ie', 'RCCG KCD Members: SQL Error', mysqli_error($con));
?>