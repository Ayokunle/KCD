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
      <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="js/bootstrap.js"></script>
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
      <script type="text/javascript">

      function getData(data) {
        console.log("data::");
        var el = document.getElementById("vprofile");
        for (var i = 0; i < el.attributes.length; i++){
            
          if(el.attributes[i].name.indexOf("data-") >= 0 ){
            
            try{
              //console.log(el.attributes[i]);  
              var name = el.attributes[i].name.replace('data-','');
              //console.log(name);
              var elem = document.getElementsByName(name)[0];
              el.attributes[i].value = el.attributes[i].value.replace(/(\r\n|\n|\r)/gm,""); 
              elem.value = el.attributes[i].value;
            }catch(err){
              console.log(el.attributes[i]);  
              console.log(err); 
            }
          }
        }
      }
        // var elem = document.getElementById("mytext");
        // elem.value = "My default value";
        
      </script>
      <!-- Modal -->
      <div id="GSCCModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Member</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" role="form" action="insert.php" method="post" autocomplete="on" style="">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="fname">Firstname*:</label>
                  <div class="col-sm-4">
                    <input type="text" name="fname" class="form-control" required>
                  </div>
            
                  <label class="control-label col-sm-1" for="lname">Surname*:</label>
                  <div class="col-sm-5">
                    <input type="text" name="lname" class="form-control" required>
                  </div>
                </div>          

                <div class="form-group">
                  <label class="control-label col-sm-2">Gender*:</label>
                  <div class="col-sm-3"> 
                    <select name="gender" class="form-control" required>
                      <option value="" disabled selected>--</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>

                  <label class="control-label col-sm-2">Age Group*:</label>
                  <div class="col-sm-2">
                    <select name="age_group" id="age_group" class="form-control" required>
                      <option value="" disabled selected>--</option>
                      <option value="Child">Child (0 - 12)</option>
                      <option value="Youth" >Youth (13 - 17)</option>
                      <option value="Adult">Adult (18 - 49)</option>
                      <option value="Elder">Elder (50+)</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-1">Status:</label>
                  <div class="col-sm-offset-2 col-sm-10"> 
                    <select name="status" id="status" class="form-control">
                      <option value="">--</option>
                      <option value="Single">Single</option>
                      <option value="Single Parent" >Single Parent</option>
                      <option value="Married">Married</option>
                      <option value="Divorced">Divorced</option>
                      <option value="Widowed">Widowed</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">D.O.B.*:</label>
                  <div class="col-sm-5"> 
                    <select name="dob_day" class="form-control" required>
                      <option value="" disabled selected>-- Day --</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>

                  <div class="col-sm-5"> 
                    <select name="dob_month" class="form-control" required>
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
                </div>

                <div class="form-group" id="wed_anni" style="display:none;">
                  <label class="control-label col-sm-2">Wedding Anniversary:</label>
                  <div class="col-sm-5"> 
                    <select name="wed_anni_day" class="form-control" >
                      <option value="" disabled selected>-- Please select --</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>
                  <div class="col-sm-5"> 
                    <select name="wed_anni_month" class="form-control">
                      <option value="" disabled selected>-- Please select --</option>
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
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">Type*:</label>
                  <div class="col-sm-4"> 
                    <select name="type" class="form-control" required>
                      <option value="" disabled selected>-- Please Select --</option>
                      <option value="Member">Member</option>
                      <option value="Worker">Worker</option>
                      <option value="Minister">Minister</option>
                      <option value="Ordained Minister">Ordained Minister</option>
                      <option value="Assistant Pastor">Asst. Pastor</option>
                      <option value="Pastor">Pastor</option>
                    </select>
                  </div>

                  <label class="control-label col-sm-1">Email:</label>
                  <div class="col-sm-5"> 
                    <input type="email" class="form-control" name="email" placeholder="johnsmith@yahoo.com">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">Address:</label>
                  <div class="col-sm-10"> 
                    <input type="text" class="form-control" name="address" placeholder="16 Fortlawn Avenue">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10"> 
                    <input type="text" class="form-control" name="city" placeholder="Mulhuddart">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10"> 
                    <input type="text" class="form-control" name="zipco" placeholder="Dublin 15">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="contact1">Contact Num 1:</label>
                  <div class="col-sm-4">
                    <input type="text" name="contact1" class="form-control">
                  </div>
                  
                  <label class="control-label col-sm-2" for="contact2">Contact Num 2:</label>
                  <div class="col-sm-4">
                    <input type="text" name="contact2" class="form-control">
                  </div>
                </div>
              
                <div class="form-group"> 
                  <div class="col-sm-offset-2 col-md-10">
                    <button  value=" Send" class="btn btn-primary" type="submit" id="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>

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