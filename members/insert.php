<?
	error_reporting(-1);
	//ini_set('display_errors', 'On');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$age_group = $_POST['age_group'];
	$status = $_POST['status'];
	$dob_day = $_POST['dob_day'];
	$dob_month = $_POST['dob_month'];
	$wed_anni_day = $_POST['wed_anni_day'];
	$wed_anni_month = $_POST['wed_anni_month'];
	$type = $_POST['type'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zipco = $_POST['zipco'];
  $contact1 = $_POST['contact1'];
  $contact2 = $_POST['contact2'];

  // echo $fname . $lname . $gender . $age_group . $status . $dob_day
  // . $dob_month . $wed_anni_day . $wed_anni_month . $type . $email 
  // . $address . $city . $zipco . $contact1 . $contact2 ;

	//$con = mysqli_connect('50.87.144.163','rccgking_kcd','kingscourt','rccgking_KCD');
  $con = mysqli_connect('userdb.netsoc.tcd.ie','ayokunle','Ohqu1eed','u_ayokunle');
	if (!$con) {
    	die('Could not connect: ' . mysqli_error($con));
  }

  //mysqli_select_db($con,"rccgking_KCD");
	mysqli_select_db($con,"u_ayokunle");

  $sql = "INSERT INTO members (id, fname, lname, gender, 
  								age_group, status, dob_day, dob_month, 
  								wed_anni_day, wed_anni_month, type, email,
  								address, city, zipco, contact1, contact2 ) 
          VALUES ('', '$fname', '$lname', '$gender', 
  				'$age_group', '$status', '$dob_day', '$dob_month', 
  				'$wed_anni_day', '$wed_anni_month', '$type', '$email',
  				'$address', '$city', '$zipco', '$contact1', '$contact2')";
 
  if (mysqli_query($con, $sql)) {
  	//echo "\n Success!";
	} else {
  	//mail('adeosua@tcd.ie', 'RCCG KCD Members: SQL Error', mysqli_error($con));
  	//echo "\n  Error: ".mysqli_error($con);
	}
?>

<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>King's Court Dublin | Memeber's Registration</title>
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>
      <link rel="icon" type="image/x-icon" href="img/favicon.ico"/>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">
      .btn{
        width: 210px;
        height: 50px;
        margin-top: 2%;
        background-color: #8e181b;
      }
    </style>

  </head>
    <body>  
        <!-- Fixed nav bar -->
        <nav class="navbar navbar-default navbar-fixed-top normal" role="navigation">
        <div class="container">
            <div class="navbar-header">
            <a class="navbar-brand" href="../">
                <span>
                <img class="" src="img/logo_small.png" alt="">
                <!-- <img class="visible-xs" src="img/logos/logo_mobile.png" alt="">    -->
                </span>
                <span class ="header_title">RCCG King's Court Dublin - Member Registration Form</span>
            </a>
            </div>
        </div>
        </nav>

        <div class="container" style="background: #d5c691; padding-top: 95px; padding-bottom: 95px;">
            <!-- <div class="row" style="background: #d5c691; margin-top: 75px;"> -->
            <div style="margin-bottom:20px;">
            <center>
                <h1>Thank you.</h1>

                <a href="../members/">
                    <button class="btn btn-success">
                        <font size = "4px"> 
                            Add Another Member
                        </font>
                    </button>
                </a>

                </br>
                
                <a href="http://www.rccgkingscourt.org/">
                    <button class="btn btn-info">
                        <font size = "4px"> 
                            Home
                        </font>
                    </button>
                </a>
            </center>
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
      if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('.navbar').addClass('shrink');
        $("body").css({"background": "#d5c691"});
        $(".header_title").text('King’s Court Dublin');
      }else{
        $(window).scroll(function() {
          if ($(document).scrollTop() > 100) {
            $('.navbar').addClass('shrink');
          }else {
            $('.navbar').removeClass('shrink'); 
          }
        });
      }
    </script>
    </body>
</html>
