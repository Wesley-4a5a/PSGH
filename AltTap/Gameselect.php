<style>

</style>

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
    
if($_SESSION['user']) 
{
   echo '<div id="welkomuser">Welkom: ' . $_SESSION['user'] . '</div>';
}

?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Alt-Tap!</title>
        <link href='Alt-TapMob.css' rel='stylesheet' type='text/css' media="all and (max-width:1150px)">
        <link href='Alt-Tap.css' rel='stylesheet' type='text/css' media="all and (min-width:1151px)">
    </head>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        
        $(document).ready(function(){
            $('#showled').click(function(){
                $('#leadershow').css("visiblity", "visible");
                $('#leadershow').css("visiblity", "hidden");
            })
          
            
             // $('#selectmode').mouseover(function() {
             //    $(document.body).css('background-image', 'url("gengarinvert.png")');
             // });

             // $('#selectmode').mouseleave(function() {
             //    $(document.body).css('background-image', 'url("gengar.png")');
             // });                     
                
        });
            
        function menuke(){
            document.getElementById('leadershow').style.visibility = 'visible';
        }       
        function menukeweg(){
            document.getElementById('leadershow').style.visibility = 'hidden';
        }
            
    </script>

    <a href='../index.html'><div id=titel>PSGH</div></a>
    <div id=subtitel> <span id="normaal">Presents: </span><span id="inverta">Alt-Tap</span></div>
    <body onmouseleave="menukeweg()">
        <div id=selectmode>
            ||
        <a href='Alt-Tap.php'>15 Seconden Game </a>||
        <a href='Alt-Tap30.php'>30 Seconden Game </a>||
        <a href='Alt-TapInf.php'>Infinite Mode </a>||
        <a id='showled' onmouseover="menuke()">Leaderboards</a> ||
        </div>
        
        <div id='leadershow'>
            <ul>
                <a href='Alt-TapLeader.php'><li>15 Second</li></a>
                <li></li>
                <a href='Alt-Tap30Leader.php'><li>30 Second</li></a>
                <li></li>
                <a href='Alt-TapInfLeader.php'><li>Infinite Mode</li></a>
            </ul>
        </div>
        
    <a href="logout.php" id=menuback>Logout</button>
        
    </body>
</html>