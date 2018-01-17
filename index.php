<?php
  if(isset($_POST["submit"])){
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="flash";
  //create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  //check connection
  
  if(!$conn){
      die("connection failed: " . mysqli_connect_error());
  }
 //echo "Connected successfully the database exist";
 // echo "<br>";

// create a variable
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];

 
//Execute the query
 
 $sql = "INSERT INTO info (name,email,comments) VALUES ('$name','$email','$comments')";
 if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('Hello ".$name." your record has been created successfully');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
    
    $conn->close();
    }
    else{
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/flash.css">
    <title>Flash makeover|HOME</title>
</head>

<body>
    

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <nav class="navbar navbar-default navbar-fixed-top" style="background: #ffcc99; border: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    <a class="navbar-brand" href="">FLASH MAKEOVER</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#galley">GALLEY</a></li>
                        <li><a href="#tutorialvideos">TUTORIAL VIDEOS</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>

            <div id="home" class="container-fluid" style="background: #ffcc99; color: #fff;">
                <h2><strong>Trending on Flash..</strong></h2>

                <div class="row">
                    <div class="col-sm-4">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                <li data-target="#myCarousel" data-slide-to="2" class=""></li>

                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="images/f1.jpg" class="img-thumbnail" style="width:100%" alt="">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/f7.jpg" class="img-thumbnail" style="width:100%" alt="">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/f8.jpg" class="img-thumbnail" style="width:100%" alt="">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls 
                            
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" >
                    <span class= "glyphicon glyphicon-chevron-left" aria-hidden= "true"></span>
                    <span class= "sr-only">Previous</span>
                    </a>
                    <a class= "right carousel-control" href= "#myCarousel" role= "button" data-slide= "next" >
                    <span class= "glyphicon glyphicon-chevron-right" aria-hidden= "true"></span>
                    <span class= "sr-only">Next</span  >
                    </a>
                    -->
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="images/f3.jpg" target="_blank">
                                <img src="images/f3.jpg" alt="" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="images/f5.jpg" target="_blank">
                                <img src="images/f4.jpg" alt="" style="width:100%">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            </div>
            </div>
        </header>
        <!--div class="container-fluid">
            <span style="color:deeppink;font-size:14px; font:'Comic Sans MS', cursive; font-weight:bold">
            <marquee  behavior="scroll" direction="left" style="font:'Comic Sans MS', cursive">
               FLASH BRINGS OUT THE BEAUTY WITHIN...
               </marquee>
            </span>
        </div-->
        <section>
            <div class="container" style="padding-top:50px; padding-bottom:50px">
                <div class="row">

                    <div class="col-md-6"><img src="images/f2.jpg" class="img-thumbnail" style="width:100%"></div>

                    <div class="col-md-6" style="padding-top:6px">
                        <h3>Testimonials</h3>
                        <!--left align media-->
                        <div class="media">
                            <div class="media-left">
                                <img src="images/e.jpg" class="madia-object" style="width: 60px;">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Ese Onye</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus voluptate unde, porro architecto. Repellendus porro odit nam in dolorum alias saepe aliquam a fugit sit consequatur inventore, voluptatum officiis
                                    sequi, pariatur eveniet, delectus earum. Quo cumque ea illo quidem porro voluptatum, quos iusto temporibus recusandae deserunt natus consectetur reprehenderit! </p>
                            </div>

                        </div>
                        <hr>
                        <!--right align media-->
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">Glory</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus voluptate unde, porro architecto. Repellendus porro odit nam in dolorum alias saepe aliquam a fugit sit consequatur inventore, voluptatum officiis
                                    sequi, pariatur eveniet, delectus earum. Quo cumque ea illo quidem porro voluptatum, quos iusto temporibus recusandae deserunt natus consectetur reprehenderit! </p>
                            </div>
                            <div class="media-left">
                                <img src="images/g.jpg" class="madia-object" style="width: 60px;">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div id="galley" class="container">
            <div class="row" style="padding-top:30px; padding-bottom:30px">

                <div style="text-align:center; padding-bottom:15px">
                    <h2 style="color: deeppink;"><b>GALLERY</b></h2>
                </div>
                  
                   

                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="images/f11.jpg" target="_blank">
                        <img  alt="" src="images/f11.jpg" style="width:100%">
                    </a>
                </div>
                </div>


                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="images/f2.jpg" target="_blank">
                        <img alt="" src="images/f2.jpg" style="width:100%">
                    </a>
                </div>
                </div>


                <div class="col-md-3">
                    <div class="thumbnail ">
                        <a href="images/f3.jpg" target="_blank">
                        <img  alt="" src="images/f3.jpg" style="width:100%">
                    </a>
                </div>
                </div>


                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="images/f4.jpg" target="_blank">
                        <img  alt="" src="images/f4.jpg" style="width:100%">
                    </a>
                </div>
                </div>
            </div>
            <!--div class="container-fluid"><span style="color:deeppink;font-size:14px; font:'Comic Sans MS', cursive; font-weight:bold">
<marquee  behavior="scroll" direction="left" style="font:'Comic Sans MS', cursive">
    FLASH BRINGS OUT THE BEAUTY WITHIN...</marquee>
</span></div-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="images/f4.jpg" target="_blank">
                                    <img src="images/f4.jpg" alt="" style="width:100%">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="images/f3.jpg" target="_blank">
                                    <img src="images/f3.jpg" alt="" style="width:100%">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="images/f11.jpg" target="_blank">
                                    <img src="images/f11.jpg" alt="" style="width:100%">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="images/f2.jpg" target="_blank">
                                    <img src="images/f2.jpg" alt="" style="width:100%">
                                </a>
                            </div>
                        </div>

                    </div>
                    <hr>


                    <div id="about" class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Bio</h2><br>
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </h4><br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, laboriosam distinctio vel neque. Officiis dolor, consequuntur distinctio similique nostrum mollitia, assumenda id est ducimus minima provident vitae reiciendis
                                    exercitationem quaerat qui, quas. Nihil doloremque dolorem et quisquam atque doloribus reprehenderit nisi sit tempora numquam, voluptatem quasi animi beatae, veritatis quis ad, facere sint. Voluptates doloremque facere
                                    incidunt perspiciatis saepe blanditiis veritatis debitis id fuga illum maxime soluta odio laborum alias nostrum suscipit hic, dolorum quod. Molestias quis culpa modi alias obcaecati, provident illum nam suscipit, laborum
                                    officiis aliquam, quo eum, sit. Temporibus consequatur rem magnam veniam quisquam, laborum eligendi nihil eaque accusamus et unde tempore nostrum amet dicta nesciunt mollitia ex. Consequatur suscipit vel harum provident
                                    nam reiciendis possimus veritatis quae quasi omnis sunt, nemo corporis mollitia modi magnam dolore culpa sapiente tempora repellat soluta maxime. Perferendis eaque cumque, a? Temporibus pariatur hic, in. Esse doloremque
                                    officiis earum beatae, vitae?</p>
                            </div>
                            <div class="col-md-4">
                                <div class="grid_4">
                                    <h3>Follow me</h3>
                                    <ul class="list-inline list-social">
                                        <li class="social-instagram">
                                            <a href="https://www.instagram.com/sarah_onye" class="fa fa-instagram"></a>
                                        </li>
                                        <li class="social-facebook">
                                            <a href="https://www.facebook.com/sarahonye1@gamil.com" class="fa fa-facebook"></a>
                                        </li>
                                        <li class="social-google-plus">
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li class="social-snapchat-ghost">
                                            <a href="#"><i class="fa fa-snapchat-ghost"></i></a>
                                        </li>
                                        <li class="socail-youtube">
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li class="social-twitter">
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- Container (Contact Section) -->
                        <div id="contact" class="container-fluid">
                            <h2 class="text-center">CONTACT</h2>
                            <div class="row">
                                <div class="col-sm-5">
                                    <p>Contact us and we'll get back to you within 24 hours.</p>
                                    <p><span class="glyphicon glyphicon-map-marker"></span> Benin city,Edo Nigeria</p>
                                    <p><span class="glyphicon glyphicon-user"></span>  +2348164416051</p>
                                    <p><span class="glyphicon glyphicon-envelope"></span>  sarahonye@gmail.com</p>
                                </div>
                                <div class="col-sm-7 slideanim">
                                <form method="post" action="index.php" >
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            
                                            <input class=" form-control" id="name" name="name" placeholder="Name" type="text" required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" type="text" rows="5"></textarea><br>
                                    <div class="row">
                                    <div class="col-sm-6 form-group">
                                    Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
                                               </div>
                                               <div class="col-sm-6 form-group">
                                                   <input class="form-control"  name="phonenumber" type="phonenumber" id="phonenumber" placeholder="phonenumber"require="required" >
                                               </div>  
                                               
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6 form-group">
                                            <button class="btn btn-default pull-left" type="submit"name="submit" value="submit">Send</button>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                        <input class="btn btn-default pull-left" type="reset" name="Submit2" value="Clear Form">
                                        </div>
                                        </div>
                                </form> 
                               
                                </div>
                            </div>
                        </div>
                    

                            
                        <div class="container-fluid">

                              <footer >
                                 <p style="text-align: center;background-color: rgb(255, 204, 153);">Desgined By Sarahonye</p>
                              </footer>
                         </div>

                         
    </body>


</html>
<?php
    }
?>