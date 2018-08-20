<html>
    <head>
        <title>My College Buddy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <meta name="description" content="I am pursuing a degree in Information Technology at KIIT University. I have knowledge in the field of web development and ethical hacking, and I am always looking for new challenges. I am passionate about learning new technology.">	
        <meta name="keywords" content="Abhishek Raha,Abhishek Raha Resume">
        <meta name="author" content="Abhishek Raha">

        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <script src="js/bootstrap.bundle.min.js"></script>
        


        <style>
        @font-face {

                font-family: my_font;

                src: url("RobotoCondensed-Light.ttf"); /* For most other browsers */

            }
        </style>
        <!-- Smooth Scroll Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
        <script src="/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Display Screen -->
        <div class="container-fluid row" style="margin: 0; padding: 0;" id="0">
            <div class="container-fluid nav_bar">
                <img src="/images/main_logo.png">
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/question_bank.html">Question Bank</a></li>
                    <li><a href="#contact"  class="active">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="container-flex content">
            <br><br>
            <div class="container contact_form">
              <form action="contact.php" method="post">

                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" placeholder="Your E-Mail ID..">
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
            
            <div class="container" id="footer">
                <center><p>&copy All Rights Reserved<br>Powered By <b title="TheLegend" >[D$k] Corporation</b> - Abhishek Raha</p></center>
            </div>
        </div>
        
         <!-- Contact Form -->
  <?php
    $c_name = $_POST["name"];
    $c_message = $_POST["message"];
    $c_mail = $_POST["email"];
        
        
    $to = 'abhishekraha0001@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact Form:  $c_name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $c_name\n\nEmail: $c_mail\n\nMessage:\n$c_message";
    $headers = "From: noreply@mycollegebuddy.tk\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";   
    mail($to,$email_subject,$email_body,$headers);
        
        
    if($c_name!=""){
     
      $servername = "sql109.web-dsk.tk";
      $username = "kkskt_20233170";
      $password = "tfmpgvip";
      $dbname = "kkskt_20233170_mcb";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          echo '<script language="javascript">';
          echo 'alert("Hey User!! We have encountered with some problem, please re-submitting your request a bit later.")';
          echo '</script>';
      } 

      $sql = "INSERT INTO contact_us (name,mail,message)
      VALUES ('".$c_name."','".$c_mail."','".$c_message."')";

      if ($conn->query($sql) === TRUE) {
          echo '<script language="javascript">';
          echo 'alert("Hey '. $c_name.'!! We have received your message and will contact you shortly!")';
          echo '</script>';
      } else {
          echo '<script language="javascript">';
          echo 'alert("Hey '. $c_name.'!! We have encountered with some problem, please contact us a bit later.")';
          echo '</script>';
      }

      $conn->close();

        
     
     }
    
    ?>   
        
    </body>
</html>