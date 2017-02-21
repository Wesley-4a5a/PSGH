<?php
session_start();
?>
<?php
    
if($_SESSION['user'] == ''){
  $_SESSION['user'] = $_POST['user'];

}
else{
  //
};

echo '<p id="gimmename">' . $_SESSION['user'] . '</p>';

?>   


<DOCTYPE html>
<html>
    <head>
        <link href='weathercast.css' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
        
        <title>Weathercast Game</title>
<audio controls autoplay loop id='muziekje'>
  <source src="Audio/windmillrepeatske.mp3" type="audio/mpeg">
</audio>    

<!--<audio controls preload="auto" class='muziekje' >-->
<!--  <source src="1.mp3" type="audio/mpeg">-->
<!--  <source src="2.mp3" type="audio/mpeg">-->
<!--  <source src="3.mp3" type="audio/mpeg">-->
<!--  <source src="4.mp3" type="audio/mpeg">-->
<!--  <source src="5.mp3" type="audio/mpeg">-->
<!--  <source src="6.mp3" type="audio/mpeg">-->
<!--  <source src="7.mp3" type="audio/mpeg">-->
<!--  <source src="8.mp3" type="audio/mpeg">  -->
<!--  <source src="9.mp3" type="audio/mpeg">-->
<!--  <source src="10.mp3" type="audio/mpeg">-->
<!--  <source src="11.mp3" type="audio/mpeg">-->
<!--</audio>-->
        
    <script>
        
    var user = document.getElementById('gimmename').innerHTML; 
    // var userfuck = document.getElementById('gimmenametest').innerHTML;
    var puntkes = 0;
    var tijd = 0;  
    var ranedom = Math.floor((Math.random() * 4) + 1); 
    var levens = 3;
    var oud;
    var nummerke;
    var watsuoutto = false;    
    
    $( document ).ready(function() {
        $('#startalius').prop('disabled', true); 
        naamCheck();
         if(user != ''){
            $('#startalius').prop('disabled', false);
        }
        
        function puntcheck(){
            // if(puntkes <= 5){
                // $('#plaatke1','#plaatke2','#plaatke3').css('visibility', 'visible');
                // $('#testeew').css('visibility', 'hidden');  
            // }
            // else if(puntkes > 5){
                // $('#plaatke1','#plaatke2','#plaatke3', '#mainplaatje', '#keuze').css('visibility', 'hidden');
                // $('#testeew').css('visibility', 'visible'); 
            // }
        }
        
        $('#showuser').html('Welkom: ' + user);
        
        
        $('#startalius').click( function(){
            wopwop();
            starten();
            $('#startalius').prop('disabled', true);
            $('#startalius').css({visibility: 'hidden'})
            
        });
        
        $('#mainplaatje').click( function(){
           alert("fag"); 
        });
        
        $('#plaatke1').click( function(){
           check(1);
        });
        
        $('#plaatke2').click( function(){
           check(2);
        });
        
        $('#plaatke3').click( function(){
           check(3);
        });
        
        function check(welke){
            switch(welke){
                case 1:
                    if(nummerke == 3 || nummerke == 5 || nummerke == 7){
                        puntkes++;
                        wopwop();
                        muziekske();
                    }
                    else{
                        puntkes--;
                        levens--;
                        wopwop();
                    }
                    break;
                case 2:
                    if(nummerke == 1 || nummerke == 6 || nummerke == 8){
                        puntkes++;
                        wopwop();
                        muziekske();
                    }
                    else{
                        puntkes--;
                        levens--;
                        wopwop();
                    }                        
                    break;
                case 3:
                    if(nummerke == 2 || nummerke == 4 || nummerke == 9){
                        puntkes++;
                        wopwop();
                        muziekske();
                    }
                    else{
                        puntkes--;
                        levens--;
                        wopwop();
                    }                        
                    break;
            }
            puntcheck();
        }
        
        function puntcheck(){
            // if(puntkes <= 5){
                $('#plaatke1').css('visibility', 'visible');
                $('#plaatke2').css('visibility', 'visible');
                $('#plaatke3').css('visibility', 'visible');
                $('#testeew').css('visibility', 'hidden');    
                
            // }
            // else if(puntkes > 5){
                // $('#plaatke1').css('visibility', 'hidden');
                // $('#plaatke2').css('visibility', 'hidden');
                // $('#plaatke3').css('visibility', 'hidden');
                // $('#testeew').css('visibility', 'visible'); 
            // }
        }
                    
        function wopwop(){
            $('#score').html( 'Score: '+ puntkes);
            $('#hund').html('');

            for(var aap = 0; aap<levens; aap++){
                document.getElementById('hund').innerHTML += '&#10084;';
            }
            

            
            if(levens == 1 && watsuoutto == false){
                var Watchout = new Audio('Audio/Watchout.mp3');
                Watchout.play();   
                watsuoutto = true;
            }
            if(levens == 0){
                gameover();
            }
            else{
            oud = nummerke;
            nummerke = Math.floor((Math.random() * 9) + 1); 
            // if (puntkes <= 5){
            if(oud == nummerke){
                wopwop();
            }
            else{
            $('#mainplaatje1').html( '<img id="keuze" src="IMG/Foto'+nummerke+'.png">');                     
            }
            // }
            // else if (puntkes > 5){
            //   document.getElementById('mainplaatje1').style.visibility = 'hidden'; 
            //   document.getElementById('mainplaatje2').innerHTML = kaartstyle[ranedom];
            // }
                if(puntkes > 5 && puntkes < 10){
                    $('#vak1').animate({left: '55vw'});
                    $('#vak2').animate({left: '26vw'});
                    $('#vak3').animate({left: '42vw'});
                }
                else if (puntkes > 10 && puntkes < 15){
                    $('#vak1').animate({left: '41vw'});
                    $('#vak2').animate({left: '54vw'});
                    $('#vak3').animate({left: '29vw'});
                }
                else if (puntkes > 15){
                    $('#vak1').animate({left: '25vw'});
                    $('#vak2').animate({left: '41vw'});
                    $('#vak3').animate({left: '57vw'});
                }
            }
        }
        
        var mute = false;
        var tune = 1;
        
        function muziekske(){
            if (mute == false){
                var Tududu = new Audio('Audio/'+tune+'.mp3');
                Tududu.play();
                tune++;
                if(tune == 11){
                    tune = 1;
                }
            }
            else{
                //
            }
        }
        
         
        $('#mute').click( function(){
            if (mute == false){    
                var songofstorm = document.getElementById("muziekje");
                songofstorm.muted = true;
                mute = true;
                document.getElementById('mute').innerHTML = 'Unmute';
            }
            else{
                var songofstorm = document.getElementById("muziekje");
                songofstorm.muted = false;
                mute = false;  
                document.getElementById('mute').innerHTML = 'Mute';              
            }
                console.log(mute);
        });

        
        var hondenjongwerknouis; 
            function starten(){
            for (var aap = 0; aap != 1; aap++)
            {
                    hondenjongwerknouis = setInterval(function timer(){
                    tijd = tijd + 0.10;
                    var tijddeci = tijd.toFixed(1);
                    document.getElementById('tijdje').innerHTML = tijddeci;
                    if(tijd >= 20.0 && tijd < 29.9){
                        $('#tijdje').css('color', 'red');
                        $('#tijdje').animate({'font-size': '1.5vw'});
                        $('#tijdje').animate({'font-size': '1.2vw'});
                    }
                    else if(tijddeci == 30.0){
                        gameover();
                    }
                }
                , 100);
            }
       }
       
        function gameover(){
            if(levens == 0){
                $('#berichtus').html(user + ', <br>' + 'Je levens zijn op (aka Dood.), je hebt ' + puntkes + " punt(en)." + '<br>' + 'Je score word opgeslagen. ' + '<br>' + '<form id=berichtform method="POST" action="Leaderboard.php"> Naam: <input class=inputt type="text" name="naam" value='+user+' readonly="readonly" required><br> Score: <input class=inputt type="text"  value=' + puntkes + ' name="score" readonly="readonly"><br><br>' + '</form>' + 'Je gaat automatisch naar de leaderboards.');
                $('#berichtus').css({visibility: 'visible'});
                $('#tijd').html('Game Over');
                setTimeout(function(){ $('#berichtform').submit() }, 4000);                    
            }
            else{
                clearInterval(hondenjongwerknouis);
                // document.getElementById('berichtus').innerHTML = 'Game is afgelopen, je hebt ' + punt + " punt(en)." + '<br>' + 'Refresh de page om weer te spelen.' + '<br>' +'<input type="button" value="Refresh :)" onClick="window.location.reload()">';
                $('#berichtus').html(user + ', <br>' + 'De Game is afgelopen, je hebt ' + puntkes + " punt(en)." + '<br>' + 'Je score word opgeslagen. ' + '<br>' + '<form id=berichtform method="POST" action="Leaderboard.php"> Naam: <input class=inputt type="text" name="naam" value='+user+' readonly="readonly" required><br> Score: <input class=inputt type="text"  value=' + puntkes + ' name="score" readonly="readonly"><br><br>' + '</form>' + 'Je gaat automatisch naar de leaderboards.');
                $('#berichtus').css({visibility: 'visible'});
                $('#tijd').html('Game Over');
                setTimeout(function(){ $('#berichtform').submit() }, 4000);
            }
        }
        var checkcheat;
        
        var element = new Image();
        element.__defineGetter__('id', function() {
            checkcheat = 'on';
            faggot();
        });
        
        setInterval(function() {
            checkcheat = 'off';
            console.log(element);
            console.clear();
            document.querySelector('#devtool-status').innerHTML = checkcheat;
        }, 5000)
    
        function faggot(){
            alert('Cmon geen cheats');
            location.reload();
        }  
        
        function naamCheck(){
          if(user == ''){
            //
          }
          else{
            document.getElementById('userkies').style.visibility = 'hidden';
          }
        }
    });
    
    
    var kaartstyle = [
        '',
        '&#9827;',
        '&#9824;',
        '&#9829;',
        '&#9830;'
        ];
    
    </script>
    </head>
    <body>
    <div id='HUD'>   
        <div id='showuser'></div>
        <div id='score'>Score: 0</div>
        <div id='levens'>Levens: <span id='hund'>&#10084;&#10084;&#10084;</span></div>
        <div id='tijd'>Tijd: <span id='tijdje'></span></div>
        <div id='testeew'>
            <span id='div1'>&#9824;</span>
            <span id='div2'>&#9829;</span>
            <span id='div3'>&#9830;</span>
            <span id='div4'>&#9827;</span>
        </div>
    </div>
    <div id='berichtus'>a</div>
    <a href='gameselect.php'><div id=menuback>Terug</div></a>
    <a href="logout.php" id=logout>Logout</a>
    <button id=mute>Mute</button>
    <button id='startalius'>Start</button>
    <div id='mainplaatje1'></div>
    <div id='mainplaatje2'></div>
    <div id='vak1'><img id='plaatke1' src='IMG/Foto3.png'></div>
    <div id='vak3'><img id='plaatke3' src='IMG/Foto4.png'></div>
    <div id='vak2'><img id='plaatke2' src='IMG/Foto8.png'></div>

    
    <div id='userkies'>
        Kies een username: 
        <form id='keusnaam' method='POST'>
            <input id=userke type=text name='user' maxlength="12">
            <input type=submit value='Kies Naam'>
        </form>
    </div>
    



    </body>
</html>