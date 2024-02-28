<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>

<html>
<head>
    <title>Add Marks</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li class="logout"><a href="admindash.php">Dashboard</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>Enter the Details of Student</h2>
        <form method="post" enctype="multipart/form-data" action="secondstep.php">
            <table class="table1">
             <tr>
                <th>Name <span class="asterisk">*</span></th> 
                <th>Class <span class="asterisk">*</span></th> 
                <th>Roll No. <span class="asterisk">*</span></th>
             </tr>
             <tr>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='tel' name='class' placeholder='Class' required class="box"/></td>
                 <td><input type='text' name='rollno' placeholder='Rollno' required class="box"/></td>
                
             </tr>
             </table>
             <table class="table2">
             <tr>
                <th>Father's Name <span class="asterisk">*</span></th>   
                <th> Mother's Name <span class="asterisk">*</span></th> 
                <th>Mobile No. <span class="asterisk">*</span></th>
                <th>City <span class="asterisk">*</span></th>
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder="Father's Name" required class="box"/></td>
                 <td><input type='text' name='mother' placeholder="Mother's Name" required class="box"/></td>
                 <td><input type='tel' name='mobile' pattern="[0-9]{10}" placeholder='Mobile No' required class="box"/></td>
                 <td><input type='text' name='village' placeholder='City' required class="box"/></td>
             </tr>
             
         </table>
         <table class="table3">
           <tr>
               <th>Choose Image -</th>
               <td><input type="file" name="img"/></td>
           </tr> 
         </table>
         <table class="table4">
            <tr>
           <td align-baseline="center" colspan="2"><input type="submit" name="submit1" value="Next" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    
</body>
</html> 
