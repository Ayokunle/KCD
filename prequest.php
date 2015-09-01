<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>
            RCCG | King's Court Dublin
        </title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>
        <link rel="icon" type="image/x-icon" href="img/logos/favicon.ico"/>
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <!-- <img class="hidden-xs" src="http://placehold.it/150x50&text=Logo" alt="">
                        <img class="visible-xs" src="http://placehold.it/120x40&text=Logo" alt=""> -->  
                        <span>
                            <img class="" src="img/logos/logo_small.png" alt="">
                            <!-- <img class="visible-xs" src="img/logos/logo_mobile.png" alt="">    -->
                        </span>
                        <span class ="header_title">RCCG King's Court Dublin - <i>a place for you </i> </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <!-- <ul class="nav navbar-nav"> -->
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About Us
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="church.php">Our Church</a></li>
                                <li><a href="pastor.php">Our Pastor</a></li>
                                <li><a href="management.php">Our Management</a></li> 
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Resource
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="pdesk.php">Pastor's Desk</a></li>
                                <li><a href="prequest.php">Prayer Request</a></li>
                                <li><a href="mcenter.php">Media Center</a></li>
                                <li><a href="pgallery.php">Photo Gallery</a></li> 
                                <li><a href="bproject.php">Building Project</a></li> 
                                <li><a href="http://www.rccgireland.org/">RCCG Ireland</a></li> 
                                <li><a href="http://rccg.org/">RCCG Worldwide</a></li> 
                            </ul>
                        </li>
                        <li><a href="events.php">News/Events</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="donate.php">Donate</a></li>
                        <li><a href="members/index.html">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <!-- BODY -->
        <div class="container">
            <div class="body_section" style = "margin-top: 50px;">
                <div class="row">
                    <!-- column one -->
                    <div class="col-lg-8">
                       <section class="main">
                            <div class ="main_title">
                                <h3>Prayer Request</h3>
                            </div>
                            <div>
                                <p>
                                    No matter what the problem is, prayer power works wonders. To see the Holy Spirit's miracle-working power unleashed, complete the request form so we can join with you and intercede for your specific need.~~
                                </p>
                                <p>
                                    <b>
                                    You may leave the Name and Email Address fields empty if you wish to stay anonymous.
                                    </b>
                                </p>
                                <form role="form" action="insert_prayer.php" method="post">
                                    <div class="form-group">
                                        <label>Payer Category*</label>
                                        <select  name="prayer_cat" class="form-control" required >
                                            <option value="">-- Please Select --</option>
                                            <option value="Anointing for Prayers" >Anointing for Prayers</option>
                                            <option value="Deliverance" >Deliverance</option>
                                            <option value="General Prayer of Agreement" >General Prayer of Agreement</option>
                                            <option value="Healing" >Healing</option>
                                            <option value="Salvation - Self" >Salvation - Self</option>
                                            <option value="Seeking Employment" >Seeking Employment</option>
                                            <option value="Breakthrough" > Breakthrough</option>
                                            <option value="Career" > Career</option>
                                            <option value="Child Custody" > Child Custody</option>
                                            <option value="Current World Affairs" > Current World Affairs</option>
                                            <option value="Decision" > Decision</option>
                                            <option value="Fear" > Fear</option>
                                            <option value="For My Finances" > For My Finances</option>
                                            <option value="Government" > Government</option>
                                            <option value="My Church" > My Church</option>
                                            <option value="My Ministry" > My Ministry</option>
                                            <option value="My Pastor" > My Pastor</option>
                                            <option value="Protection" > Protection</option>
                                            <option value="Revival" > Revival</option>
                                            <option value="Sexual Perversion" > Sexual Perversion</option>
                                            <option value="Single-Need to marry" > Single-Need to marry</option>
                                            <option value="Stress" > Stress</option>
                                            <option value="To have Children" > To have Children</option>
                                            <option value="Witchcraft attack" > Witchcraft attack</option>
                                            <option value="A Neighbor" >A Neighbor</option>
                                            <option value="Business" >Business</option>
                                            <option value="Co-worker" >Co-worker</option>
                                            <option value="Depression" >Depression</option>
                                            <option value="Divine Favor" >Divine Favor</option>
                                            <option value="Domestic Violence" >Domestic Violence</option>
                                            <option value="Establishment" >Establishment</option>
                                            <option value="Fear" >Fear</option>
                                            <option value="Finances" >Finances</option>
                                            <option value="Holy Spirit Baptism" >Holy Spirit Baptism</option>
                                            <option value="Legal Situation" >Legal Situation</option>
                                            <option value="Marital Issues" >Marital Issues</option>
                                            <option value="Military Service" >Military Service</option>
                                            <option value="Other" >Other</option><option value="Peace" >Peace</option>
                                            <option value="Political Situation" >Political Situation</option>
                                            <option value="Prisoner" >Prisoner</option>
                                            <option value="Promotion" >Promotion</option>
                                            <option value="Prophetic Word" >Prophetic Word</option>
                                            <option value="Protection - Travel" >Protection - Travel</option>
                                            <option value="Retentive Memory" >Retentive Memory</option>
                                            <option value="Salvation - Others" >Salvation - Others</option>
                                            <option value="School" >School</option>
                                            <option value="Spiritual Guidance" >Spiritual Guidance</option>
                                            <option value="Substance Abuse" >Substance Abuse</option>
                                            <option value="World Situation" >World Situation</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Email Address</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Prayer Request*</label>
                                        <textarea class="form-control" name="prayer" rows="3" required ></textarea>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="anon" value="1">
                                            Stay Anonymous
                                        </label>
                                    </div>                                   
                                    <button type="submit" class="btn btn-default">Submit</button> 
                                </form>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="main">
                                    <div class ="main_title">
                                        <h3>Upcoming Events</h3>
                                    </div>
                                    <div style="height: 255px; border:1px solid #F5F5DC;">
                                        <p style="text-align:center">
                                            No Upcoming events at the moment.
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <section class="main" style="padding-bottom: 40px;">
                                    <div class ="main_title">
                                        <h3>Ministries</h3>
                                    </div>
                                    <div>
                                        <ul style="margin:10px; padding:10px; margin-top: -20px;">
                                            <li class ="list_li">
                                                <a href="">Men's Fellowship </a>
                                            </li>
                                            <li class ="list_li">
                                                <a href="">Good Women</a>
                                            </li>
                                                <li class ="list_li">
                                                <a href="">Elders</a>
                                            </li>
                                            <li class ="list_li">
                                                <a href="">Children</a>
                                            </li>
                                            <li class ="list_li">
                                                <a href="">Daniel Generation</a>
                                            </li>
                                            <li class ="list_li">
                                                <a href="">Glorious Band</a>
                                            </li>
                                        </ul> 
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEW ROW -->
                <div class="row footer">
                    <!-- column one -->
                    <div class="col-lg-8">
                        <section class="">
                            <h3>
                                Connect With Us
                            </h3>
                            <p>
                                <a href="https://www.facebook.com/rccgkcd" target="_blank">
                                    <img class="socialz" title="" src="img/fb_0.png" alt="" />
                                </a>
                                <a href="https://twitter.com/kcddublin">
                                    <img class="socialz" title="" src="img/tw_0.png" alt="" />
                                </a>
                                <a href="https://goo.gl/Oj4eli" target="_blank">
                                    <img class="socialz" title="KCD News" src="img/tube_0.png" alt="KCD News" />
                                </a>
                            </p>
                            <p>
                                RCCG King's Court Dublin is a registered Charity (_______) and Company limited by guarantee in the Republic of Ireland.
                            </p>
                            <div class="hori_list">
                                <ul>
                                    <li>Home&nbsp;&nbsp;</li> |
                                    <li>&nbsp;&nbsp;About&nbsp;&nbsp;</li> |
                                    <li>&nbsp;&nbsp;Resource&nbsp;&nbsp;</li> |
                                    <li>&nbsp;&nbsp;News/Events&nbsp;&nbsp;</li> |
                                    <li>&nbsp;&nbsp;Contact Us&nbsp;&nbsp;</li> |
                                    <li>&nbsp;&nbsp;Donate&nbsp;&nbsp;</li>
                                </ul>    
                            </div>
                        </section>
                    </div>                   
                    <!-- column one -->
                    <div class="col-lg-4">
                        <section class="left_col">
                            <h3>Find Us</h3>
                            <p>
                                King's Court Dublin - <i>a place for you </i> </br>
                                Unit 2 Damastown Way </br>
                                Damastown Industrial Estate</br>
                                Damastown </br>
                                Dublin 15 </br>
                                01 - 861 4707 / 087 - 924 1730 </br>
                                    &copy; <?php echo date("Y"); ?> All rights reserved
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- 
        <div>
            <div class="videoWrapper">
                <iframe src="https://www.youtube.com/embed/ab0TSkLe-E0?autoplay=1&loop=1&controls=0&wmode=transparent" frameborder="0" >   </iframe>
            </div>
        </div>
        -->

        <!-- 
        <iframe title="title" src="http://www.youtube.com/embed/ab0TSkLe-E0?autoplay=1&loop=1&controls=0&wmode=transparent"  scrolling="no" frameborder="0" width="100%" height="500px" style="border:none;"> 
        </iframe>
        -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                $('.navbar').addClass('shrink');
                $(".carousel_section").css({"margin-top": "50px"});
                $(".header_title").text('King’s Court Dublin');
            }else{
                $(window).scroll(function() {
                    if ($(document).scrollTop() > 100) {
                        $('.navbar').addClass('shrink');
                    }
                    else {
                        $('.navbar').removeClass('shrink'); 
                    }
                });
            }
        </script>
    </body>
</html>