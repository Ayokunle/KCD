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
      
      <center><h3>Search</h3>

      <form id = "search" class="form-inline" style="padding-top: 30px;" method="POST" action ="lookup.php">
        <div class="form-group">
          <input type="text" style="width:500px;" class="form-control" name="search_input" placeholder="Type here..." required>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
      </center>

      <div id="result">

      </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

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

      $(function () {
        $("#search").on('submit', function () {
          var data = {"action": "test"};
          data = $(this).serialize() + "&" + $.param(data);
          $.ajax({
            type: "POST",
            dataType: "json",
            url: "lookup.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data) {
              $("#result").html(
                data["table"]
                );
              //alert("Form submitted successfully.\nReturned json: " + data["json"]);
            },
            error: function(xhr, textStatus, error){
              console.log(xhr.statusText);
              console.log(textStatus);
              console.log(error);
            }
          });
          return false;
        });
      });
    </script>
  </body>
</html>