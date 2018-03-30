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
   </head>
   <body>
   <div  >
        <div class="modal-dialog">
            <div class="modal-content">
                
               
                            <div class="modal-body">
                       
                            <h1>BLOGS</h1>
                                <br>
                                <?php
									if(!isset($_COOKIE['admin']))
									{
										$usid=$_COOKIE["blogger"];
									}
									else
									{
										$usid=$_COOKIE["admin"];
									}
                                    $d=array();
                                    $data=mysqli_connect("localhost","root","","drogon") or die();
                                    $m=0;
                                       
                                            $db=mysqli_query($data,"SELECT `pid` FROM post WHERE `uid`='$usid' ");
                                            foreach ($db as $key) {
                                                $d[$m]=$key['pid'];
                                                $m++;
                                            }
                                            sort($d);
                                            if ($m==0) {
                                                echo "<div><h3>Sorry You Dont Have Any Blog<h3></div>";
                                            }
                                       
                                        for($j=($m-1);$j>=0;$j--)
                                        { 
                                            $db=mysqli_query($data,"SELECT `uid`,`pid`,`content`,`title`,`category`,`time`,`name` FROM post WHERE `uid`='$usid'");
                                            $db=mysqli_fetch_assoc($db);
                                            $userid=$db['uid'];
                                            $fn=$db['name'];
                                            $fn=ucfirst($fn);
                                            $cn=$db['content'];
											$peid=$db['pid'];
                                            $tl=$db['title'];
                                            $ct=$db['category'];
                                            $time=$db['time'];
                                            $userid=strtoupper($userid);
                                            date_default_timezone_set("Asia/Kolkata");
                                            $time2=time();
                                        //echo $time;
                                        //echo $time2;
                                            $diff=$time2-$time;
                                            $df=(int)$diff/3600;
                                            $r=(int)$diff/3600;
                                            if($df<1)
                                            {
                                                if((int)($diff/60)<2)
                                                {
                                                    if((int)($diff/60)<1)
                                                    {
                                                        $df="Just Now";
                                                    }
                                                    else{
                                                        $df="1 Minute";
                                                    }
                                                }
                                                else
                                                {
                                                    $df=((int)($diff/60))." Minutes";
                                                }
                                            }
                                            elseif($df<24)
                                            {
                                                $df=(int)$df." Hours Ago";
                                            }
                                            else
                                            {
                                                $temp=$df;
                                                $df = ((int)($df/24))." Days & ".((int)($temp%24))." Hours Ago";
                                            }


                                            
                                                echo "<div >";
                                                echo "<div ><h4>$fn</h4><div> <h5>&nbsp;&nbsp;($userid)</h5></div></div>";
                                                echo "<div >$df Ago</div>";
                                                echo "<div >Title : $tl</div>";
                                                echo "<div >Category : $ct</div>";
                                                echo "<pre  row='3' style='white-space:pre-wrap; word-break:keep-all'><div>$cn</div></pre>";
                                                echo "</div><br>";
                                            
                                        }



                                ?>
                                
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