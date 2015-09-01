<?

ini_set('display_errors', 'On');
$string = $_POST['pdesk'];
// $string = " lives’.";

$output = "";
for($i = 0; $i != strlen($string); $i++){

     // $asciiString .= "&#".ord($string[$i]).";";
	
	//echo $string[$i] . "  " .ord($string[$i]) ."<br>";
	if (ord($string[$i]) == 10) {
		//echo ord($string[$i]);
        $output .= "<br>";
    }else if (ord($string[$i]) == 226) {
		//echo ord($string[$i]);
        $output .= "'";
    }else{
    	$output .= $string[$i];
    }
}
echo $output;

$con = mysqli_connect('50.87.144.163','rccgking_kcd','kingscourt','rccgking_KCD');
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
  }

	mysqli_select_db($con,"rccgking_KCD");

  $sql = "INSERT INTO pdesk (id, pdesk ) 
          VALUES ('', '$pdesk')";
 
  if (mysqli_query($con, $sql)) {
  	echo "\n Success!";
	} else {
  	//mail('adeosua@tcd.ie', 'RCCG KCD Members: SQL Error', mysqli_error($con));
  	//echo "\n  Error: ".mysqli_error($con);
	}
// $asciiCode = str_replace("&", "&amp;", $asciiString);

// //echo $string. "<br>";
// //echo "String in ASCII:<br>";
// //echo $asciiString;
// $data = mb_ereg_replace("[^A-Za-z0-9\.\-]","",$asciiCode);
// echo $data;
// $data = str_replace("&#10;","\n",$data);
// echo $data;

// echo $_POST['pdesk'];

?>