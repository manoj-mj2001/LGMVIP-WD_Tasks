<html>
<head>
    <title>Contact</title>
<link rel="stylesheet" href="../csss/contactus.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="../login.php">ADMIN LOGIN</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method='post'>
          <table class="table">
              <h2 class="search">Any issue ? Contact Us!</h2>
             
              <tr>
                <th class='tblheading'>Name <span class="asterisk">*</span></th>
              </tr>
              <tr>
              <td><input type='text' class='tbldata' name='name' placeholder='Enter your full name :' Required autocomplete="off"/></td>
              </tr>

              <tr>
                <th class='tblheading'>E-mail<span class="asterisk">*</span></th>
              </tr>
              
              <tr>
                <td><input type='email' class='tbldata' name='email' placeholder='Enter your e-mail id : ' Required autocomplete="off"/></td>
              </tr>
              
              <tr>
                <th class='tblheading'>Mobile <span class="asterisk">*</span></th>
              </tr>
              <tr>
                <td><input class='tbldata'type='tel' name='cont' pattern="[0-9]{10}" placeholder='Enter your mobile no : ' autocomplete="off"/></td>
              </tr>
              <tr>
                <th class='tblheading'>Message <span class="asterisk">*</span></th>
              </tr>
              <tr>
                <td ><textarea class='tbldata1' name="massage" placeholder='Enter your message...' Required autocomplete="off"></textarea></td>
              </tr>
              <tr>
              <td colspan='2' align='center'><input type="submit" name='submit' value='SEND' class='submit'/></td>
              </tr>
          </table>
       </form>
      </div>
    </header>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $massage=$_POST['massage'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_message`) VALUES ('$username','$email','$contact','$massage')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
      <script>
      alert(' Your Message sent to Admin');

     </script>
   <?php
    }
}

?>