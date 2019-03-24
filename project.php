<?php
//test = db name
$db = mysqli_connect('localhost','username','password','test')
 or die('Error connecting to MySQL server.');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		Web Development Academy
	</title>
	<link rel="stylesheet" type="text/css" href="./css/nstyle.css" />
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="./js/day3.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <noscript>Sorry, your browser does not support JavaScript!</noscript>
</head>

<body>
	<div class="container-fluid header text-center">
		
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid  header text-center">
        <div class="navbar-header">
          <img class="img-responsive" src="./img/logo.png" alt="WDA Logo" offset= 5px>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="myNavbar" role="navigation">
          <ul class="nav navbar-nav">
            <li><a href="#myNavbar">HOME</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#team">TEAM</a></li>
            <li><a href="#skills">SKILLS</a></li>
            <li><a href="#testimonials">TESTIMONIALS</a></li>
            <li><a href="#contact">CONTACT</a></li></ul>
        </div>
      </div>
    </nav>
		  <h2>Hi Guys! This is my first Web Development Project :)<br>What do you think about my work?<br></h2>
		  <a href="#" id="orange-button">IT'S AWESOME!</a>
	</div>

<div id = "bodybody" data-spy="scroll" data-target="#navbar" data-offset="0">

	<div id="services" class="container-fluid bg-1 text-center">
		<h2>SERVICES WE PROVIDE</h2>
    <div class="line-green text-center">
        <span></span>
    </div>
    <h5>I am using my ninja Web Development Skills in order to create amazing Web Properties!</h5>
		<div class="row">
    		<div class="col-sm-2 col-sm-offset-2">
      			<img src="./img/flag.png" alt="Red Flag" padding-bottom: 7px;>
            <h4>
                BRANDING   
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh.</p>
    		</div>
    		<div class="col-sm-2">
            <img src="./img/design.png" alt="Pencil">
            <h4>
              DESIGN
            </h4>
      			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
    		</div>
    		<div class="col-sm-2"> 
            <img src="./img/development.png" alt="Two Tray Icons">
            <h4>
              DEVELOPMENT
            </h4>
      			<p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>
    		</div>
  			<div class="col-sm-2"> 
            <img src="./img/rocket.png" alt="Rocket">
            <h4>
              ROCKET SCIENCE
            </h4>
      			<p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p>
    		</div>
    	</div>
	</div>

  <div id="team" class="container-fluid bg-3 text-center">
    <h2>
      MEET OUR AMAZING TEAM
    </h2>
    <div class="line-gray text-center">
        <span></span>
    </div>
    <h4>
      We are a small team of junior developers, who will help build your online presence<br><br>
    </h4>
    <div class="row">
        <div class="col-sm-2 col-sm-offset-2">
            <img src="./img/team1.jpg" alt="CEO" padding-bottom: 7px;>
            <h4>
                ANNE HATHAWAY   
            </h4>
            <h5>
              CEO
            </h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh.</p>
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-envelope"></a>
        </div>
        <div class="col-sm-2">
            <img src="./img/team2.jpg" alt="Our Creative Director">
            <h4>
              KATE UPTON
            </h4>
            <h5>
              Creative Director
            </h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p><br>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-envelope"></a>
        </div>
        <div class="col-sm-2"> 
            <img src="./img/team3.jpg" alt="Our Lead Designer">
            <h4>
              OLIVIA WILDE
            </h4>
            <h5>
              Lead Designer
            </h5>
            <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p><br>
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-envelope"></a>
        </div>
        <div class="col-sm-2"> 
            <img src="./img/team4.jpg" alt="SEO/Developer">
            <h4>
              ASHLEY GREENE
            </h4>
            <h5>
              SEO/Developer
            </h5>
            <p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p><br>
            <a href="#" class="fa fa-facebook-f"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-envelope"></a>
        </div>
      </div>
  </div>

  <div id="skills" class="container-fluid bg-4 text-center">
    <h2>
      WE HAVE SKILLS!
    </h2>
      <span style="background: rgb(223,232,237); display:  inline-block; padding: 0.1em 2em; margin-bottom: 20px;"></span>
    <h4>  
      Et harum quidem rerum est et expedita distinctio. Nam libero tempore.
    </h4>
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-sm-offset-2">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
          <h3>
            WEB DESIGN
          </h3>
        </div>
        <div class="col-sm-2">
            <div class="progress purple">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
          <h3>
            HTML/CSS
          </h3>
        </div>
        <div class="col-sm-2">
            <div class="progress green">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">70%</div>
            </div>
          <h3>
            GRAPHIC DESIGN
          </h3>
        </div><div class="col-sm-2">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">85%</div>
              </div>
            <h3>
              UI/UX
            </h3>
          </div>  
        </div>
      </div>
    </div>

  <div id="testimonials" class="container-fluid bg-5 text-center">
    <h2>
      WHAT OUT CLIENTS SAY ABOUT US
    </h2>
    <div class="line-rouge text-center">
        <span></span>
    </div>
    <h4>
      Our clients love us!
    </h4>
    <div class="row align-items-center text-center"> 
      <div class="col-sm-2 col-sm-offset-2">
        <img src="./img/client_img1.jpg" alt = "Client 1">
      </div>
      <div class="col-sm-2">
        <h5>
          "Hack up furballs. Cough furball purr for no reason, chase dog then run away instead of drinking water from the cat bowl."
        </h5>
        <h4 id="name">
          CHANEL IMAN
        </h4>
        <h6>
          CEO of Pinterest
        </h6>
      </div>
      <div class="col-sm-2">
        <img src="./img/client_img2.jpg" alt = "Client 2">
      </div>
      <div class="col-sm-2">
        <h5>
          "Hack up furballs. Cough furball purr for no reason, chase dog then run away instead of drinking water from the cat bowl."
        </h5>
        <h4 id="name">
          ADRIANA LIMA
        </h4>
        <h6>
          Founder of Instagram
        </h6>
      </div>
    </div>
    <div class="row align-items-center text-center">
      <div class="col-sm-2 col-sm-offset-2">
        <img src="./img/client_img3.jpg" alt = "Client 3">
      </div>
      <div class="col-sm-2">
        <h5>
          "Hack up furballs. Cough furball purr for no reason, chase dog then run away instead of drinking water from the cat bowl."
        </h5>
        <h4 id="name">
          ANNE HATHAWAY
        </h4>
        <h6>
          Lead Designer at Behance
        </h6>
      </div>
      <div class="col-sm-2">
         <img src="./img/client_img4.jpg" alt = "Client 4">
       </div>
       <div class="col-sm-2">
        <h5>
          "Hack up furballs. Cough furball purr for no reason, chase dog then run away instead of drinking water from the cat bowl."
        </h5>
        <h4 id="name">
          EMMA STONE
        </h4>
        <h6>
          Co-Founder of Shazam
        </h6>

      </div>
    </div>
  </div>

  <?php
  //forms = table name
  $query = "SELECT * FROM forms";
  mysqli_query($db, $query) or die('Error querying database.');

  $result = mysqli_query($db, $query);
  $row = mysqli_fetch_array($result);

  while ($row = mysqli_fetch_array($result)) {
    echo $row['fname'] . ' ' . $row['lname'] . ': ' . $row['message'].'<br />';
  }

  mysqli_close($db);
  ?>

  <div id="contact" class="container-fluid bg-2 text-center">
    <div class="row">
      <h2>
        CONTACT US
      </h2>
      <div class="line-blue text-center">
        <span></span>
      </div>
      <h4 class="text-center spacing">
        Kefallinias 46, 11251, Athina, Attiki, Tel: 2108203827
      </h4>
      <form name="myForm" onsubmit="return validateForm()" action="post">
        <div>
          <input type="text" name="FName" placeholder="First Name" required>
          <input type="text" name="LName" placeholder="Last Name" required>
        </div>
        <div>
          <textarea name="message" rows="7" cols="50" placeholder="Your Message" required>
          </textarea>
        </div>
        <div>
          <input type="submit" value="SEND MESSAGE" id="blue-button">
        </div>
      </form>
    </div>
  </div>

	<div class="container-fluid footer text-center"> 
    <div class="row align-items-center text-center"> 
      <div class="col-sm-1 col-sm-offset-2">
        <a href="#">Facebook</a>
      </div> 
      
      <div class="col-sm-1">
        <a href="#">Twitter</a>
      </div> 
      
      <div class="col-sm-1">
        <a href="#">Google+</a>
      </div> 
      
      <div class="col-sm-1">
        <a href="#">LinkedIn</a>
      </div> 
      
      <div class="col-sm-1">
        <a href="#">Behance</a>
      </div> 
      
      <div class="col-sm-1">
        <a href="#">Dribbble</a>
      </div> 
      
      <div class="col-sm-1">
        <a href="#">Github</a>
      </div> 
    </div>
  </div>
</div>
</body>
</html>