  <?php
   $result="";
  if(isset($_GET["next"]))
      {

          $flag=0;
         
          $uid=$_GET["email"];
          $passwd=$_GET["pass"];
          $psswd2=$_GET["cpass"];
          if($passwd==NULL||$uid==NULL)
          {
              $result="Please fill all details!!!";
          }
          else if($passwd==$psswd2){


                    $data=mysqli_connect("localhost","root","","drogon") or die();
                    $db=mysqli_query($data,"SELECT `emailid` FROM login");
                    foreach ($db as $id) {
                      $a=$id['emailid'];
                      if($a==$uid)
                      {
                         $flag=1;
                               break;
                      }
                    }
                    
                    if($flag==1){
                      
                      $result="User id Is Already Registered!!";
                    }
                    if($flag==0){
                      mysqli_query($data,"INSERT INTO login VALUES('$uid','$passwd','','','','','')");
                      setcookie("user1",$uid,time()+1*60*60);
                      header("location:details.php");
                    }
                  }
                  else{
            $result="Passwords are different!!!";
          }


        
      }
      if(isset($_GET["previous"]))
      {
        header("location:login.php");
      }

  ?>


  <!DOCTYPE html>
    <html >
    <head>
      <meta charset="UTF-8">
      <title>Drogon's Website's Signup Page</title>
      
      
      <link rel="stylesheet" href="../css/main.css?version=1051">

      
    </head>

    <body>
      <!-- multistep form -->
    <form id="msform" method="get">
      <!-- progressbar -->
      <ul id="progressbar">
        <li >LOG IN</li>
        <li class="active">SIGN UP</li>
        <li>Personal Details</li>
      </ul>
      <fieldset>
        <h2 class="fs-title">DROGON WELCOMES YOU</h2>
        <h3 class="fs-subtitle">Enter belows details</h3>
        <div class="fs-title" id="error"><?php echo $result; ?></div>
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="pass" placeholder="Password" />
        <input type="password" name="cpass" placeholder="Confirm Password" />
        <input type="submit" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="next" class="next action-button" value="Next" />
      </fieldset>
      
    </form>


    </body>
    </html>

