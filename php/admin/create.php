   <?php
   

   if(!isset($_COOKIE['admin'])){
    $usid=$_COOKIE["blogger"];
}
else{
    $usid=$_COOKIE["admin"];
}
    
   if(isset($_POST['postbutton']))
    {
    $pst=$_POST['postupdate'];
    $ttl=$_POST['textbox1'];  
    $cat=$_POST['textbox2'];
    $time=time();
  
    
    
    $data=mysqli_connect("localhost","root","","drogon") or die();
    $db=mysqli_query($data,"SELECT `fname` FROM login WHERE `emailid`='$usid'");
    $db=mysqli_fetch_assoc($db);
    $name=$db['fname'];
    $auto=mysqli_query($data,"SELECT max(`pid`) FROM post");
    $auto=mysqli_fetch_assoc($auto);
    $auto=$auto['max(`pid`)'];
    $auto++;
    $p='0';
    mysqli_query($data,"INSERT INTO post VALUES('$auto','$usid','$pst','$p','$ttl','$cat','$time','$name')");
    echo "<script type='text/javascript'>alert('Successfully Posted');</script>";
    }
   ?>


   <!DOCTYPE html>
   <html>
   <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

 <title>CreateBlog</title>

    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

   
    <link href="../../css/agency.min.css" rel="stylesheet">
   </head>
   <body>
   <div  >
        <div class="modal-dialog">
            <div class="modal-content">
                
               
                            <div class="modal-body">
                                <h2>Create Your Blog</h2>
                                <br>
                                <form   method="post" action="create.php">
                                <h4>Title</h4>
                                <input type="text" name="textbox1" required="required">
                                <h4>Category</h4>
                                <input type="text" name="textbox2" required="required">
                                <h4>Content</h4>
                                <textarea name="postupdate" cols="120" rows="20" placeholder="Write Something Here And Share Your Idea"></textarea> 
                                <br>
                                <input type="submit" name="postbutton" class="btn btn-primary" value="Post"><i class="fa fa-times"></i>
                                </form>
                                
                            </div>
                        
            </div>
        </div>
    </div>
   
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

 
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script src="../../js/contact_me.js"></script>

 
    <script src="../../js/agency.min.js"></script>
   </body>
   </html> 