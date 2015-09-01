<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>King's Court Dublin | Admin Portal</title>
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
  </head>
 	<body>	
    <!-- Fixed nav bar -->
    <nav class="navbar navbar-default navbar-fixed-top normal" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="../admin">
            <span>
              <img class="" src="img/logo_small.png" alt="">
              <!-- <img class="visible-xs" src="img/logos/logo_mobile.png" alt="">    -->
            </span>
            <span class ="header_title">RCCG King's Court Dublin - Admin Portal</span>
          </a>
        </div>
      </div>
    </nav>

 		<div class="container" style="background: #d5c691; padding-top: 75px; padding-bottom: 75px;">
      
      <center><h3>Select a month to get a list members.</h3>

      <form class="form-inline" style="padding-top: 30px;" method="POST" action ="birthdays.php">
        <div class="form-group">
          <select style="width:500px;" name="dob_month" class="form-control" required>
              <option value="" disabled selected>-- Month --</option>
              <option value="01">January</option>
              <option value="02">February</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
      </center>

      <?
      ini_set('display_errors', 'On');

      $dob_month =  $_POST['dob_month'];

      if(!empty($_POST['dob_month'])) {
        //$con = mysqli_connect('50.87.144.163','rccgking_kcd','kingscourt','rccgking_KCD');
        $con = mysqli_connect('userdb.netsoc.tcd.ie','ayokunle','Ohqu1eed','u_ayokunle');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        //mysqli_select_db($con,"rccgking_KCD");
        mysqli_select_db($con,"u_ayokunle");
        
        $sql = "SELECT fname, lname, dob_day, dob_month FROM members 
        WHERE dob_month='$dob_month'
        ORDER BY dob_day ASC";
        $result = $con->query($sql);

        echo "<center> <h3> Birthdays </h3> </center>";
        if ($result->num_rows > 0) {
          // output data of each row
          echo "<table style = 'width:100%'>";
          echo "<tr>
          <th>Name</th> <th>Date</th>
          </tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='width:150px;border:1px solid black;'>". 
                  $row["fname"]. " " . $row["lname"]. 
                  "</td>".
                  "<td style='width:150px;border:1px solid black;'>" . 
                  $row["dob_day"] . "/" . $row["dob_month"]. 
                  "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results <br>";
        }

        $sql = "SELECT fname, lname, wed_anni_day, wed_anni_month FROM members 
        WHERE wed_anni_month='$dob_month'
        ORDER BY wed_anni_day, lname ASC";
        $result = $con->query($sql);

        echo "<center> <h3> Wedding Anniversaries </h3> </center>";
        if ($result->num_rows > 0) {
          // output data of each row
          echo "<table style = 'width:100%'>";
          echo "<tr>
          <th>Name</th> <th>Date</th>
          </tr>";
          while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td style='width:150px;border:1px solid black;'>".
                $row["fname"]. " " . $row["lname"].
                "</td>".
                "<td style='width:150px; border:1px solid black;'>" . 
                $row["wed_anni_day"] . "/" . $row["wed_anni_month"] .
                "</td>";
          echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results <br>";
        }
      }
      ?>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      $('#status').change(function(){
        selection = $(this).val();    
        switch(selection){ 
          case 'Married':
            $('#wed_anni').show();
            break;
          default:
            $('#wed_anni').hide();
            break;
        }
      });
    </script>
    <script>
      if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $('.navbar').addClass('shrink');
        $(".carousel_section").css({"margin-top": "50px"});
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