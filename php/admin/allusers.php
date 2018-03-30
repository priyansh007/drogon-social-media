   
   
    


   <!DOCTYPE html>
   <html>
   <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

 <title>Blog</title>

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

   
    <link href="../../css/agency.min.css" rel="stylesheet">
    <link href="../../css/my.css" rel="stylesheet">
   </head>
   <body>
   <div  >
        <div class="modal-dialog">
            <div class="modal-content">
                
               
                            <div class="modal-body">
                       
                                <p class="head">Total users</p>
                                <br>
                                <br>
                                <?php

                                        $usid=$_COOKIE["admin"];
                                         $data=mysqli_connect("localhost","root","","drogon") or die();
                                          $key=mysqli_query($data,"SELECT `emailid`,`fname`,`lname`,`mobno`,`address` FROM login ");
                                          foreach ($key as $db) 
                                              {                   
                                                $email=$db['emailid'];
                                                $email=strtoupper($email);
                                                $fn=$db['fname'];
                                                $fn=ucwords($fn);
                                                $ln=$db['lname'];
                                                $ln=ucwords($ln);
                                                $mob=$db['mobno'];
                                                $add=$db['address'];
                                               
                                                echo "<div class=body>";
                                                echo "<div>$fn $ln</div>";
                                                
                                                echo "<div>Email ID: $email</div>";
                                                echo "<div>Phone: $mob</div>";
                                                echo "<div>Adress: $add</div>";
                                                echo "</div><br>";
                                              }   

                                                                                      

                                ?>
                                <br>
                                <br>
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