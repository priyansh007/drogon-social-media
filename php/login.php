    <?php
    $result="";
    if(isset($_GET["login"]))
    {
      $ids=$_GET["email"];
        $psswd=$_GET["pass"];
        $psswd2=$_GET["cpass"];
        if($psswd==NULL||$ids==NULL)
          {
              $result="Please fill all details!!!";
          }
          else if($psswd==$psswd2){



        $flag=0;

        $data=mysqli_connect("localhost","root","","drogon") or die();
        $db=mysqli_query($data,"SELECT `emailid` FROM login");
        foreach ($db as $id) {
          if($id['emailid']==$ids){
            $flag=1;
            break;
          }
        }
        if($flag==1){
          $db=mysqli_query($data,"SELECT `pswd` FROM login WHERE `emailid`='$ids'");
          $db=mysqli_fetch_assoc($db);
          if($db["pswd"]==$psswd)
          {

              $dc=mysqli_query($data,"SELECT `admin` FROM login WHERE `emailid`='$ids'");
              $dc=mysqli_fetch_assoc($dc);
              if($dc["admin"]==1)
              {
                setcookie('blogger', '', time() - 3600); 
                setcookie("admin",$ids,time()+1*60*60);
                header("location:../admin.php");
              }
              else{
                setcookie('admin', '', time() - 3600); 
                setcookie("blogger",$ids,time()+1*60*60);
                header("location:../bloger.php");
              }
          }
          else{
            $result="User Id or Password Incorrect";
          }
        }
        else{
          $result="User Id Is Not Registered Yet";
        }
        }
        else{
          $result="Passwords are different!!!";
        }

    }
    if(isset($_GET["signup"]))
    {
      header("location:signup.php");
    }

    ?>

  <!DOCTYPE html>
  <html >
  <head>
    <meta charset="UTF-8">
    <title>Drogon's Website's First Page</title>
    
  
    <link rel="stylesheet" href="../css/main.css?version=1051">

    
  </head>

  <body>
    <!-- multistep form -->
  <form id="msform" method="get" >
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">LOG IN</li>
      <li>SIGN UP</li>
      <li>Personal Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset >
      <h2 class="fs-title">LOG INTO YOUR ACCOUNT</h2>
      <h3 class="fs-subtitle">Welcome to DROGON</h3>
      <div class="fs-title" id="error"><?php echo $result; ?></div>

      
      <input type="text" name="email" placeholder="Email" />
      <input type="password" name="pass" placeholder="Password" />
      <input type="password" name="cpass" placeholder="Confirm Password" />
      <input type="submit"   name="login" class="next action-button"  value="LOG IN" />
      <input type="submit" name="signup" class="next action-button" value="SIGN UP" />
      
    </fieldset>
    </form>




  

  </body>
  </html>