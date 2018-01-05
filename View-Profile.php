<?php
session_start();
?>

<html>
<head>
    <style>
         @font-face{
                font-family: pllogo;
                src:url("Barclays Premier League.ttf");
            }
            @font-face{
                font-family: menuf;
                src:url("StratumNo1 Regular.ttf");
            }
             @font-face{
                font-family: menufb;
                src:url("StratumNo1 Medium.ttf");
            }
            #header{
               background-color: #1A1F21;
               // background: -webkit-linear-gradient(right,#C04848,#480048);
                width: 100%;
                height:70px;
                top:0px;
               // margin-top: -10px;
                margin-left: -10px;
                margin-right: -10px;
                
                position: fixed;
                z-index: 3;
            }
            #logopl{
                font-family: menuf;
                position: fixed;
                top:-10px;
                left:110px;
                
                font-size: 30px;
                
            }
            #menu{
                font-family: menuf;
                position: fixed;
                top:30px;
                right: 30px;
                margin-left:400px;
                line-height: 1.8px;
                margin-top: 6px;
                font-size: 18px;
                text-decoration: none;
               
            }
            a{
                text-decoration: none;
            }
            #m1{
                padding:40px 40px 8px;
            }
            #m2{
               padding:40px 40px 8px;
                
            }
            #m3{padding:40px 40px 8px;}
            body{
        background-color: #22292C;
            }
            #main{
                height:450px;
               // background-color: aquamarine;
               margin-left: -10px;
                margin-right: -10px;
                margin-top: 70px;
                z-index: -1
                
            }
        
              #pl-info{
                width:600px;
                height: 600px;
                top:100px;
                  
                  margin-bottom: 50px;
                  left:300px;
                position:relative;
                padding:30px;
                margin-left: 60px;
                z-index: 1;
                font-family: menuf;
                font-size: 20px;
                background-color: #1A1F21;
            }
              
        #profilepic{
            border-radius: 50%;
            position: absolute;
            left: 230px;
            top:20px;
            width:200px;
            height: auto;
        }
        #myname{
            font-family: menuf;
            position: absolute;
            left: 180px;
            top:220px;
        }
        #profile{
            background-color:  rgb(26,31,33);
            text-align: center;
            
        }
        #myteam{
            font-family: menuf;
            position: absolute;
            //left: 300px;
            
            top:290px;
            
        }
        #mymail{
            font-family: menuf;
            position: absolute;
            //left: 130px;
            top:340px;
        }
        #stat{
            position: absolute;
            top:400px;
            left:80px;
        }
        
    </style>
    </head>
    <body >
        <div id="header">
        <img src="PL_Logo_W.png" style="width:auto;height:60px;margin-top:-1px;margin-left:60px;">
        <div id="logopl"><p href="homepage2.php"style="color:#FFFFFF;font-family: menuf;">PREMIER LEAGUE</p></div>
        <div id="menu">
            <a style="color:#FFFFFF;" id="m1" href="homepage2.php">HOME</a>
             <a style="color:#FFFFFF;" id="m1" href="contactus1.html">ABOUT US</a>
            <a style="color:#FFFFFF;" id="m1" href="homepage.html">LOGOUT</a>
            </div>
        </div>
        <div id="pl-info">
       
            <img id="profilepic"src="<?php echo $_SESSION["propic"]; ?>">
            
           
            <div id="myname">
                
            <?php  echo '<span style="font-size: 50pt;color:white;">' . $_SESSION['fname'] . "  ".$_SESSION['lname'] .'</span>';   ?>
            </div>
           <div id="myteam"><?php  echo '<span style="font-size: 30pt;color:white;">' . $_SESSION['team'] . '</span>';   ?></div>
            <div id="mymail"><?php  echo '<span style="font-size: 30pt;color:white;">' . $_SESSION['mail'] . '</span>';   ?></div>
          
        </div>
    <script>
        
        /**
          <div id="stat">
            
            <form method="get" id="form1" action="View-Profile.php">
                
                
                </form>
                <textarea name="status" form="form1" cols="60" rows="10">Enter text....</textarea>
            </div>**/
        </script>
    </body>

</html>