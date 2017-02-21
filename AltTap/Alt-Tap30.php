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

<!DOCTYPE html>
<html>
    <head>
        <title>Alt-Tap 30 Second Mode</title>
        <link href='Alt-TapMob.css' rel='stylesheet' type='text/css' media="all and (max-width:1150px)">
        <link href='Alt-Tap.css' rel='stylesheet' type='text/css' media="all and (min-width:1151px)">
        <meta name="viewport" content="user-scalable=no" />

        

        
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>


        var fag1 = Math.floor((Math.random() * 9) + 1);
        var fag2 = Math.floor((Math.random() * 9) + 1);
        var tijd = 0;    
        var punt;
        var user = document.getElementById('gimmename').innerHTML; 
          
      $(document).ready(function(){
        $('#volgendendelon, #carta1, #carta2, #middon, #startalius').prop('disabled', true)
        naamCheck();
        $('#showuser').html('Welkom: ' + user);
 
        if(user != ''){
           $('#startalius').prop('disabled', false)
        }

        $('#startalius').click(function(){
            $('#carta1').html(fag1);
            $('#carta2').html(fag2);
            $('#carta1, #carta2').css({'background-color': 'blue'});    
            $('#startalius').prop('disabled', true);
            $('#volgendendelon, #carta1, #carta2, #middon').prop('disabled', false)
            punt = 0;
            $('#punten').html("Punten: " + punt);
            starten();
        });
        
        
        $('#carta1').click(function(){
            if(fag1 > fag2){
                $('#carta1, #carta2').css({'background-color': '#00FF00'});
                $('#volgendendelon').prop('disabled', false);  
                korrectu();
            }
            else{
                $('#carta1, #carta2').css({'background-color': 'red'});
                $('#carta1').html("Game");
                $('#carta2').html("Over!");
                $('#startalius').prop('disabled', false);
                $('#volgendendelon').prop('disabled', true);
                gameover();
            }
        }); 
        
        $('#carta2').click(function(){
            if(fag1 < fag2){
                $('#carta1, #carta2').css({'background-color': '#00FF00'});
                $('#volgendendelon').prop('disabled', false); 
                korrectu();
            }
            else{
                $('#carta1, #carta2').css({'background-color': 'red'});
                $('#carta1').html("Game");
                $('#carta2').html("Over!");
                $('#startalius').prop('disabled', false);
                $('#volgendendelon').prop('disabled', true);
                gameover();
            }
        });
        
        $('#middon').click(function(){
            if(fag1 == fag2){
                $('#carta1, #carta2').css({'background-color': '#00FF00'});
                $('#volgendendelon').prop('disabled', false);  
                korrectu();
            }
            else{
                $('#carta1, #carta2').css({'background-color': 'red'});
                $('#carta1').html("Game");
                $('#carta2').html("Over!");
                $('#startalius').prop('disabled', false);
                $('#volgendendelon').prop('disabled', true);
                gameover();
            }
        });
        
        

    function korrectu()
    {
        $('#volgendendelon').prop('disabled', true);
        $('#carta1, #carta2').css({'background-color': 'blue'});
        fag1 = Math.floor((Math.random() * 9) + 1);              
        fag2 = Math.floor((Math.random() * 9) + 1);
        $('#carta1').html(fag1);
        $('#carta2').html(fag2); 
        punt++;
        punten();
    }
    
    function punten()
    {
        document.getElementById('punten').innerHTML = 'Punten: ' + punt;
    }

    var hondenjongwerknouis; 
    
    function starten(){
        for (var aap = 0; aap != 1; aap++)
        {
                hondenjongwerknouis = setInterval(function timer(){
                tijd = tijd + 0.10;
                var tijddeci = tijd.toFixed(1)
                document.getElementById('tijden').innerHTML = "Tijd: " + tijddeci;
                if(tijddeci == 30.0){
                    gameover();
                }
            }
            , 100);
        }
    }

    function gameover(){
        clearInterval(hondenjongwerknouis);
        // document.getElementById('berichtus').innerHTML = 'Game is afgelopen, je hebt ' + punt + " punt(en)." + '<br>' + 'Refresh de page om weer te spelen.' + '<br>' +'<input type="button" value="Refresh :)" onClick="window.location.reload()">';
        document.getElementById('berichtus').innerHTML = user + ', <br>' + 'De Game is afgelopen, je hebt ' + punt + " punt(en)." + '<br>' + 'Je score word opgeslagen. ' + '<br>' + '<form id=berichtform method="POST" action="Alt-Tap30Leader.php"> Naam: <input class=inputt type="text" name="naam" value='+user+' readonly="readonly" required><br> Score: <input class=inputt type="text"  value=' + punt + ' name="score" readonly="readonly"><br><br>' + '</form>' + 'Je gaat automatisch naar de leaderboards.';
        document.getElementById('berichtus').style.visibility = "visible";
        document.getElementById('tijden').innerHTML = "Game Over";
        $('#startalius, #volgendendelon, #carta1, #carta2, #middon').prop('disabled', true);
        setTimeout(function(){ $('#berichtform').submit() }, 4000);

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
    
</script>
    </head>
    <body>
    
    <button id='carta1'>
        
    </button>
    
        <button id='middon'>Midden</button>
        
    <button id='carta2'>
        
    </button>

    <div id='userkies'>
        Kies een username: 
        <form id='keusnaam' method='POST'>
            <input id=userke type=text name='user'>
            <input type=submit value='Kies Naam'>
        </form>
    </div>

    <div>   
        <button id='startalius'>Start Spel</button>
        <!--<button id='volgendendelon'>Volgende</button>    -->
    </div>
    <div id='showuser'>
    </div>
    <div id='punten'>
        Punten: 0
    </div>
    <div id='tijden'>
       Tijd: 0
    </div>
    <div id='berichtus'></div>
       <div id='regels'> 
       Het spel is simpel. Druk op het hoogste getal.<br>
       Als de getallen even hoog zijn druk op het midden.<br>
       Je krijgt 30 seconden om zoveel mogelijk punten te behalen.<br>
       </div> 
       
    <a href='Gameselect.php'><div id=menuback>Terug</div></a>
    <a href="logout.php" id=logout>Logout</button>

    </body>
</html>