<?php
 $result="";
$usid="";
$usid=$_COOKIE["user1"];
if(!isset($_COOKIE['user1'])){
  header("location:login.php");
}

else if(isset($_GET["submit"]))
    {
      $fnam=$_GET["fname"];
      $lnam=$_GET["lname"];
      $mob=$_GET["phone"];
      $add=$_GET["address"];
      if($fnam==NULL||$lnam==NULL)
          {
              $result="Please fill all details!!!";
          }
          else{
                    $data=mysqli_connect("localhost","root","","drogon") or die();
                    $db=mysqli_query($data,"UPDATE login SET `fname`='$fnam',`lname`='$lnam',`mobno`='$mob',`address`='$add' WHERE `emailid`='$usid'");
                    echo "<script type='text/javascript'>alert('Account Created Successfully');</script>";
                    header("location:login.php");

          }
      
    }
    else if(isset($_GET["previous"]))
    {
      header("location:signup.php");
    }

?>

<!DOCTYPE html>
  <html >
  <head>
    <meta charset="UTF-8">
    <title>Drogon's Website's Personal Details Page</title>
    
    
    <link rel="stylesheet" href="../css/main.css?version=1051">

    
  </head>

  <body>
    <!-- multistep form -->
  <form id="msform" method="get">
    <!-- progressbar -->
    <ul id="progressbar">
      <li >LOG IN</li>
      <li >SIGN UP</li>
      <li class="active">Personal Details</li>
    </ul>
    <fieldset>
      <h2 class="fs-title">Personal Details</h2>
      <h3 class="fs-subtitle">We will never sell it</h3>
      <div class="fs-title" id="error"><?php echo $result; ?></div>
      <input type="text" name="fname" placeholder="First Name" />
      <input type="text" name="lname" placeholder="Last Name" />
      <input type="text" name="phone" placeholder="Phone" />
      <textarea name="address" placeholder="Address"></textarea>
      <input type="submit" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
    
  </form>


  </body>
  </html>