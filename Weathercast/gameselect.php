<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link href='weathercast.css' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
        <script src="//cdn.jsdelivr.net/jquery.shadow-animation/1/mainfile"></script>
        <title>Welcome bij Weathercast</title>
    </head>
    <body>
        

        
        <script>
            var introke = false;
            
            
            $(document).ready(function(){
                
               
            // $('#uitleg').animate({left: '27vw', bottom: '35vh'}); 
            // $('#navi').animate({bottom: '50vh', left: '65vw'});  
            // 65 is a - up is 38  - down is 40

            var trueOC1 = false;
            var trueOC2 = false;            
            var trueOC3 = false;
            var trueOC4 = false;
            var trueOC5 = false;
            var trueOC6 = false;
            var Liedke = false;

            
        function Songy(){
            if(trueOC6 == true)
            {
                trueOC6 = false;
                ocarinaSongCont = setTimeout(function(){
                    var Sturmm = new Audio('Audio/SOSEnd.mp3');
                    Sturmm.play(); 
                }, 650);       
                ocarinaSongCont = setTimeout(function(){
                    var Corrrr = new Audio('Audio/SongCorrect.wav');
                        Corrrr.play(); 
                    }, 1950);
                
                if(Liedke == false)
                    {
                        var randomsong = Math.floor((Math.random() * 2) + 1);
                        ocarinaSongCont = setTimeout(function(){
                        var SoS = new Audio('Audio/SongOfStorms2.mp3');
                        // var SoS = new Audio('Audio/SongOfStorms'+randomsong+'.mp3');
                        SoS.play();
                        if (randomsong == 1){                
                            SoS.volume = 0.7;
                        }
                    }, 1950);
                }
                Liedke = true;
                
                if(randomsong == 1){
                    var tijdeee = 120000;
                }
                else{
                    var tijdeee = 250000;
                }
                
                    resetsong = setTimeout(function(){
                        Liedke = false;
                    }, tijdeee);
                    
                Songy();
            }
            else{
            trueOC1 = false;
            trueOC2 = false;            
            trueOC3 = false;
            trueOC4 = false;
            trueOC5 = false;
            trueOC6 = false;
            }

        }

        var ocarinaSong;
        var ocarinaSongCont;

        
        $('body').keydown(function(e){
        if(introke == true){
            if(e.keyCode == 65){
                var audio = new Audio('Audio/Oc1.wav');
                audio.play();
                if(trueOC3 == false)
                {
                    trueOC1 = true;
                    ocarinaSong = setTimeout(Songy, 600);
                }
                else if(trueOC3 == true)
                {
                    trueOC4 = true;
                    clearTimeout(ocarinaSong);
                    ocarinaSong = setTimeout(Songy, 600);
                }
            }

            if(e.keyCode == 40){
                var audio = new Audio('Audio/Oc2.wav');
                audio.play();
                if(trueOC4 == false)
                {
                    trueOC2 = true;
                    clearTimeout(ocarinaSong);
                    ocarinaSong = setTimeout(Songy, 600);
                }
                else if(trueOC4 == true)
                {
                    trueOC5 = true;
                    clearTimeout(ocarinaSong);
                    ocarinaSong = setTimeout(Songy, 600); 
                }
                }
                
            if(e.keyCode == 38){
                var audio = new Audio('Audio/Oc3.wav');
                audio.play();
                if(trueOC5 == false && trueOC2 == true)
                {
                    trueOC3 = true;
                    clearTimeout(ocarinaSong);
                    ocarinaSong = setTimeout(Songy, 1200);
                }
                else if(trueOC5 == false && trueOC2 == false)
                {
                    Songy();
                }
                else if(trueOC5 == true)
                {
                    trueOC6 = true;
                    clearTimeout(ocarinaSong);
                    Songy();
                }
            }
        }
        });
        
            $("#uitleg").mouseover(function(){

                $('#uitleg').animate({left: '2vw', bottom: '2vh'}); 
                $('#uitleg').animate({boxShadow: '-1px -4px 3000px 3000px rgba(0,0,0,0.05)'} ,2000);
                $('#navi').animate({bottom: '18vh', left: '40vw'});  
            });

            });
            
            var ListenOn = false;
            
            function listen(){
                if (ListenOn == false){
                    var Listen = new Audio('Audio/Listen.mp3');
                    Listen.play();
                    ListenOn = true; 
                    introke = true;
                    ListenTimeout = setTimeout(function(){
                        ListenOn = false;
                }, 1500);
            }
            }

        
        </script>
        <a href='Ocarina.php'><img src='IMG/Triforce.png' id='triforce'></a>        
        <div id='titel'>
            <div id='weather'>Weather</div>
            <div id='cast'>Cast</div>
        </div>
        <span id='titelmini'><h4>Make it rain</h4></span>


        <div id='spelkeuz1'> <a href='weatherpractice.php'>Puddle Jumping</a></div>
        <div id='spelkeuz2'> <a href='weathercast.php'>Here comes the Storm!</a></div>
        <div id='spelkeuz3'> <a href='Leaderboard.php'>Leaderboards</a></div>          
           
           
        <img id='navi' src='IMG/Navi.png'>    
        <div id='uitleg' onmouseenter='listen()'>
            <center><h1>Hey Listen!</h1></center>
            Het spel weathercast word gespeeld met 3 icoontjes; Zon, Wolk en de Druppel.<br>
            De Zon is <span style='color:yellow; text-decoration: underline;'>geel</span>, de wolk <span style='color:grey; text-decoration: underline;'>grijs</span> en de druppel <span style='color:blue; text-decoration: underline;'>blauw</span>.<br>
            Het is aan jou om een match te vinden met het icoon wat bovenin het scherm word getoont.<br>
            Indien er geen match is moet je het tegenovergestelde kiezen. Bijv: Grijze Druppel? Kies de Gele Zon.<br>
        </div>
    
    </body>
</html>