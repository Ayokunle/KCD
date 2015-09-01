<?

$handle = fopen("Day_Month.txt", "r");

if ($handle) {
	$con = mysqli_connect('userdb.netsoc.tcd.ie','ayokunle','Ohqu1eed','u_ayokunle');
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
  	}
  	//mysqli_select_db($con,"rccgking_KCD");
	mysqli_select_db($con,"u_ayokunle");

    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $info = explode("/", $line);
        $sql = "INSERT INTO members (id, fname, lname, gender, 
  								age_group, status, dob_day, dob_month, 
  								wed_anni_day, wed_anni_month, type, email,
  								address, city, zipco, contact1, contact2 ) 
          VALUES ('', '$info[0]', '$info[1]', '', 
  				'', '', '$info[2]', '$info[3]', 
  				'', '', '', '',
  				'', '', '', '', '')";
 
  		if (mysqli_query($con, $sql)) {
  			echo "\n Success!";
		} else {
  		//mail('adeosua@tcd.ie', 'RCCG KCD Members: SQL Error', mysqli_error($con));
  		//echo "\n  Error: ".mysqli_error($con);
		}
	}
    fclose($handle);
} else {
    // error opening the file.
}

?>