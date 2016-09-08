<?php
  if( !empty($_POST['send']) && ($_POST['send'] == 'send') ){
    $EmailFrom = "form_submission@andybecker.me";
    $EmailTo = "becker.andrew2@gmail.com";
    $Subject = "Form Submission from Website";
    $Name = Trim(stripslashes($_POST['name'])); 
    $Tel = Trim(stripslashes($_POST['phone'])); 
    $Email = Trim(stripslashes($_POST['email'])); 
    $Message = Trim(stripslashes($_POST['message'])); 

    // validation
    $validationOK=true;
    if (!$validationOK) {
      print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
      exit;
    }

    // prepare email body text
    $Body = "";
    $Body .= "Name: ";
    $Body .= $Name;
    $Body .= "\n";
    $Body .= "Tel: ";
    $Body .= $Tel;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $Email;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $Message;
    $Body .= "\n";

    // send email 
    $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

    // redirect to success page 
    if ($success){
      $results = "Form submission successful";
    }
    else{
      $results = "Unable to send form";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="D7fIkr4ath6mjZyVqR3l9xrdq64-UnEkH3CU3Ch7R64" />
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta description="I am a web developer in Charlotte, NC specializing in HTML, CSS, Javascript, and jQuery."/>
	<title>Andy Becker</title>
	<link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <header>
    <img id="header_img" src="images/bgrimage.jpg" alt="My Workspace">
    <?php if(isset($results)){echo "<div class=\"form_results\"<p>" . $results . "</p></div>";} ?>
    <div class="container" id="img_space">
      <div class="upperHead">
        <div class="brand">
          <a href="andybecker.me"><h1>Andy Becker</h1></a>
        </div>
        <nav>
          <ul class="top_nav">
            <li><a href="#top">Home</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div id="hero">
        <p>I am a web developer in Charlotte, NC specializing in HTML, CSS, Javascript, and jQuery.</p>
      </div>
      <a href="#projects"><i id="header_down_arrow" class="fa fa-arrow-circle-down"></i></a>
    </div>
  </header>
  <div class="bottom">
    <div class="container">
      <div class="projects">
        <a name="projects"></a>
        <h2>Projects</h2>

        <div class="project">
          <div class="project_info">
            <h3>Harford Seamless</h3>
              <img height="200" class="project_image" src="images/apple_items_harfordseamless.png" alt="Harford Seamless">
              <a href="http://www.harfordseamless.com" target="_blank"><p>Visit Site</p></a>
          </div>
          <div class="project_specs">
            <h3>Technologies Used</h3>
            <ul class="logoul">
              <li class="logo"><img src="images/html5_logo.png" alt="HTML5 logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/css3_logo.png" alt="CSS3 logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/jquery_logo.png" alt="jQuery logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/photoshop_logo.png" alt="Photoshop logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/php_logo.png" alt="PHP logo" height="45" width="45"><span></span></li>
            </ul>
          </div>
          <div class="project_description">
            <h3>Description <i></i></h3>
            <article>
              <p>Harford Seamless is a local gutter company that was looking for a basic website.  This site gives them a homepage, and a contact form using PHP for potential customers to contact them.  The 'Our Work' page is a placeholder for once they have pictures to add to the page.  The site was laid out in Photoshop, and sliced for the logo and pictures.  jQuery was also used to validate the form entries.</p>
            </article>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="project">
          <div class="project_info">
            <h3>SOAiR Airlines</h3>
              <img height="484" width="617" class="project_image" src="images/apple_items_soair.png" alt="SOAiR Airlines">
              <a href="/soair" target="_blank">Visit Site</a>
          </div>
          <div class="project_specs">
            <h3>Technologies Used</h3>
            <ul class="logoul">
              <li class="logo"><img src="images/html5_logo.png" alt="HTML5 logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/css3_logo.png" alt="CSS3 logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/jquery_logo.png" alt="jQuery logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/ajax_logo.png" alt="AJAX logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/photoshop_logo.png" alt="Photoshop logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/grunt_logo.png" alt="Grunt logo" height="45" width="45"><span></span></li>
            </ul>
          </div>
          <div class="project_description">
            <h3>Description <i></i></h3>
            <article>
              <p>The SOAiR webpage started as a PSD file for one of my classes.  I decided to slice it up and turn it in to a webpage.  While it is currently only the first page, I decided to incorporate a few features to make it interactive.</p><p>The CTA in the middle is a slideshow.  If the user does not have javascript they will only see the first image, and it will not have the navigation buttons on the bottom.  When the script loads it creates a nav button for each img tag.  Using click events, the script will click the navigation buttons to advance the slides.</p><p>The form to search for flights uses AJAX to search through a JSON file of airports to give the user options as they begin typing.  The user can select an option, click on close at the bottom on the drop down to close the drop down, or click out of the text box and the drop down will hide.  This works for both the 'departing on' and 'arriving on' fields.  Finally the user can choose the departing and arriving dates using the datepicker jQuery plugin.  It won't let them choose a date in the past, one more than a year out, and they can't choose to arrive before they depart, or vice verse.</p><p>Grunt was also used in the build process to minify both the javascript and CSS files.</p>
            </article>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="project">
          <div class="project_info">
            <h3>Ryan Family Cookbook</h3>
              <img height="484" width="617" class="project_image" src="images/apple_items_ryanfam.png" alt="Ryan Family Cookbook">
              
          </div>
          <div class="project_specs">
            <h3>Technologies Used</h3>
            <ul class="logoul">
              <li class="logo"><img src="images/html5_logo.png" alt="HTML5 logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/css3_logo.png" alt="CSS3 logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/jquery_logo.png" alt="jQuery logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/mongo_logo.png" alt="MongoDB logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/php_logo.png" alt="PHP logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/grunt_logo.png" alt="Grunt logo" height="45" width="45"><span></span></li>
              <li class="logo"><img src="images/compass_logo.png" alt="Compass logo" height="45" width="45"><span></span></li>
            </ul>
          </div>
          <div class="project_description">
            <h3>Description <i></i></h3>
            <article>
              <p>Ryan Family Cookbook is a site I created to give PHP and MongoDB a try.  I wanted to create a simple dynamic website.  The website allows the user to search through recipes, narrow down the list through the sidebar, and view the recipe.  PHP allowed me to create templates for the pages, and pull the information from a MongoDB database</p><p>In addition to PHP and MongoDB, I used Grunt to manage the production workflow.  It handled generating the CSS files from .SCSS files using the Compass plugin.  I also used the livereload plugin so as I made changes to the files they would automatically reload in the browser.</p>
            </article>
          </div>
          <div class="clearfix"></div>
        </div>

      </div>
        <div class="contact_me">
          <a name="contact"></a>
          <h2>Contact Me</h2>
          <div class="left_col2">
            <form action="index.php" method="POST" id="contact_form">
              <div class="inputs">
                <input type="text" name="name" placeholder="Name" required >
              </div>
              <div class="inputs">
                <input type="email" name="email" placeholder="Email" required>
              </div>
              <div class="inputs">
                <input type="phone" name="phone" placeholder="Phone" required>
              </div>
              <div class="message">
                <textarea name="message" placeholder="Message" required rows="6" ></textarea>
              </div>
              <input type="submit" value="send" name="send">
            </form>
          </div>
          <div class="clearfix"></div>
        </div>
        <footer>
          <a href="files/AndrewBeckerResume.pdf">My Resume</a>
          <span>&copy;2015 andybecker.me</span>
        </footer>
        <div class="clearfix"></div>
    </div>
  </div>


	<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48872862-1', 'auto');
  ga('send', 'pageview');

</script>-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="js_min/script-min.js" type="text/javascript"></script>
  <script src="js_min/jquery.validate.min.js" type="text/javascript"></script>
  <script src="js_min/additional-methods.min.js" type="text/javascript"></script>
  <script src="js_min/form_validation.js" type="text/javascript"></script>
  <script src="http://localhost:35729/livereload.js"></script>

</body>
</html>