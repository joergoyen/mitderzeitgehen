<!DOCTYPE html>
<html lang="de">
<!-- 201014 -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="refresh" content="30">
    <meta title="mitderzeitgehen.de">
    
 
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
       <style>
        body {font-family: arial;
            /*font-size:3.2vw;*/
        color: #A9ADB0;
        background: #111519;
        margin: 5px;}
        
        a {color: #4F9EBF;
        text-decoration: none;}
        
        /*   
        .center {
            margin: auto;
            width: 50%;
            
            padding: 0px;
        }
        */
           
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto ;
            grid-gap: 10px;
            /*background-color: #2196F3;*/
            padding: 0px;
            /*margin: auto;
            width: 50%;*/
           }

           .grid-container > xdiv {
                background-color: rgba(255, 255, 255, 0.8);
                text-align: center;
                /*padding: 30px;*/
                font-size: 30px;
           }
        
            #t1 {
                border-radius: 15px;
  
                padding: 15px; 
                width: 110px;
                height: 110px; 
                /*margin: auto;*/
           }
        
           /* Wird Deaktiviert --> Bootstrap übernimmt die Responsive anpassungen
           
            @media screen and (max-width: 800px) {
            .left, .main, .right {
            width: 100%; 
            font-size:4vw;
           }
           }
            @media screen and (min-width: 1000px) {
            .left, .main, .right {
            width: 100%; 
            font-size:0.8vw;
           }
            .grid-container{
            max-width: 20%; 
            padding-right: 20px; 
            padding-left:20px;}      
           }
           */
           
           .landscape {display: none;}
           
         /*  @media only screen and (orientation: landscape) {
  
               div.grid-container {
    display: none;
  }
               div.landscape {display: block;
               color: red;
               padding: 30%;}
}*/
           
           
           @media screen and (min-width: 1000px) {
            /*.left, .main, .right*/
               .grid-container{
            width: 80%; 
            font-size:1.1vw;
           }
             #t1 {
                border-radius: 25px;
  
                padding: 15px; 
                width: 150px;
                height: 150px; 
                /*margin: auto;*/
           } 
           
           
           }
           
           
           @media screen and (max-width: 1024px) {
            /*.left, .main, .right {
            width: 100%; */
            /*font-size:2.5vw;*/
           }
             #t1 {
                border-radius: 25px;
  
                padding: 15px; 
                width: 140px;
                height: 140px; 
                /*margin: auto;*/
           }  
           }
           
           
           
           
    </style>
    
    </head> 
    <? $hc=date('H'); 
    $t0 ="8";
    $t1 ="9";
    $t2 ="10";
    $t3 ="11";
    $t4 ="12";
    $t5 ="13";
    $t6 ="14";
    $t7 ="15";
    $t8 ="16";
    $t9 ="17";
    $t10 ="18";
    $t11 ="19";
    $t12 ="20";
    $cact_true="73AD21";
    $cact_false="7E878A";
    
    
    $trans = array(
    'Monday'    => 'Montag',
    'Tuesday'   => 'Dienstag',
    'Wednesday' => 'Mittwoch',
    'Thursday'  => 'Donnerstag',
    'Friday'    => 'Freitag',
    'Saturday'  => 'Samstag',
    'Sunday'    => 'Sonntag',
    'Mon'       => 'Mo',
    'Tue'       => 'Di',
    'Wed'       => 'Mi',
    'Thu'       => 'Do',
    'Fri'       => 'Fr',
    'Sat'       => 'Sa',
    'Sun'       => 'So',
    'January'   => 'Jan',
    'February'  => 'Feb',
    'March'     => 'Mär',
    'May'       => 'Mai',
    'June'      => 'Jun',
    'July'      => 'Jul',
    'August'   => 'Aug',
    'September' => 'Sep',
    'October'   => 'Okt',
    'November'  => 'Nov',
    'December'  => 'Dez',
    '2014' => '/14',
    '2015' => '/15'
);
    
    
    ?>
    
    
    
    <? $t1c="73AD21" ?>
    
    <? $t0c = ($hc == '8') ? $cact_true : $cact_false; ?>   
    <? $t1c = ($hc == '9') ? $cact_true : $cact_false; ?>
    <? $t2c = ($hc == '10') ? $cact_true : $cact_false; ?>
    <? $t3c = ($hc == '11') ? $cact_true : $cact_false; ?>
    <? $t4c = ($hc == '12') ? $cact_true : $cact_false; ?>
    <? $t5c = ($hc == '13') ? $cact_true : $cact_false; ?>
    <? $t6c = ($hc == '14') ? $cact_true : $cact_false; ?>
    <? $t7c = ($hc == '15') ? $cact_true : $cact_false; ?>
    <? $t8c = ($hc == '16') ? $cact_true : $cact_false; ?>
    <? $t9c = ($hc == '17') ? $cact_true : $cact_false; ?>
    <? $t10c = ($hc == '18') ? $cact_true : $cact_false; ?>
    <? $t11c = ($hc == '19') ? $cact_true : $cact_false; ?>
    <? $t12c = ($hc == '20') ? $cact_true : $cact_false; ?>
    
    
        <? 
    
    if ($hc > $t1) {
     "grey";
} elseif ($hc == $t1) {
     "73AD21";
} else {
     "grey";
}?>
    <body>
        <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-sm-3" ></div>
            <div class="col-sm-6"><div class="landscape">turn device <span style="font-size:10vw;">↷</span></div>
                <div class="grid-container">
                    
                    <div id="t1" style=""><b>Woche <? echo date("W")?> <br /><? echo strtr(date("D"), $trans)?> <? echo date("d.m.y")?></b></div>
                    <div id="t1" style="border: 2px solid #<? echo$t0c ?>">8</div>
                    <div id="t1" style="border: 2px solid #<? echo$t1c ?>">9</div>
                    <div id="t1" style="border: 2px solid #<? echo$t2c ?>">10<br /></div>
                    <div id="t1" style="border: 2px solid #<? echo$t3c ?>">11</div>
                    <div id="t1" style="border: 2px solid #<? echo$t4c ?>">12</div>
                    <div id="t1" style="border: 2px solid #<? echo$t5c ?>">13</div>
                    <div id="t1" style="border: 2px solid #<? echo$t6c ?>">14</div>
                    <div id="t1" style="border: 2px solid #<? echo$t7c ?>">15</div>
                    <div id="t1" style="border: 2px solid #<? echo$t8c ?>">16<br/></div>
                    <div id="t1" style="border: 2px solid #<? echo$t9c ?>">17</div>
                    <div id="t1" style="border: 2px solid #<? echo$t10c ?>">18</div>
                    <div id="t1" style="border: 2px solid #<? echo$t11c ?>">19</div>
                    <div id="t1" style="border: 2px solid #<? echo$t12c ?>">20:15 <a href="https://tatort-fans.de/tatort-heute-abend/">Tatort</a> <br/ >oder später</div>
                    <div><br /><br /><br /><br /><span style="float: right;"><a href="https://oyen.de"><img src="https://oyen.de/img/logo_saso.png" width="40px" height="40px"></a> <a href="https://oyen.de"><span style="color:#111519;">...</span></a></span></div>
                </div> 
            </div>
            <div class=col-sm-3></div>
            
        </div>
            
        </div>   
    </body>
</html>


