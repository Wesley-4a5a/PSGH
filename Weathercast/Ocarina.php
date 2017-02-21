<!DOCTYPE html>
<html>
    <head>
        <link href='weathercast.css' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
        <script src="//cdn.jsdelivr.net/jquery.shadow-animation/1/mainfile"></script>
        <title>Ocarina</title>
        <style>
            #plaatke{
                position: absolute;
                left: 12vw;
                top: 4vw;
                width: 60vw;
            }
            #HUD{
                position: absolute;
                left: 28vw;
                top: 35vw;
                font-size: 2vw;
                color: white;
                border: 0.5vw green groove;
                min-width: 25vw;
                max-width: auto;
                height: 15vh;
                text-align: center;
            }
            
            .arrozz{
                width: 2vw;
            }
            
        </style>
        
        
    </head>
    <body>
        <script>
        
        var SONG = new Audio();
        
        $(document).ready(function(){
                         
            var Songlist=[
                "DRLDRL",
                "ADUADU",
                "AULRLR",
                "LRRALRD",
                "LURLUR",
                "RADRAD",
                "DADARDRD",
                "ADARDA",
                "RDURDU",
                "ULRULR",
                "ADRRL",
                "LRDLRD",
                "LUL",
                "URALUL"
                ]; 
            var Songke=[
                "AudioOcarina/LostWood.mp3",
                "AudioOcarina/SongOfStorms.mp3",
                "AudioOcarina/MinuetOfForest.mp3",
                "AudioOcarina/NocturneOfShadow.mp3",
                "AudioOcarina/ZeldaLullaby.mp3",
                "AudioOcarina/SongOfTime.mp3",
                "AudioOcarina/Bolero.mp3",
                "AudioOcarina/RequiemOfSpirit.mp3",
                "AudioOcarina/Sun.mp3",
                "AudioOcarina/Epona.mp3",
                "AudioOcarina/SerenadeOfWater.mp3",
                "AudioOcarina/SongOfHealing.mp3",
                "AudioOcarina/lul.m4a",
                "AudioOcarina/Camren.m4a"
                ];
                
            var SongTitel=[
                "Lost Woods",
                "Song of Storms",
                "Minuet of the Forest",
                "Nocturne of Shadow",
                "Zelda's Lullaby",
                "Song of Time",
                "Bolero of Fire",
                "Requiem of Spirit",
                "Sun Song/Overworld",
                "Fuck dat paard",
                "Serenade of Water",
                "gnilaeH fO gnoS",
                "Is what you are",
                "Camren krijg nog 5euro van je"
                ];    

            var Song = "";
            var Hond = "";
            
            $('body').keydown(function(e){
                if(e.keyCode == 65)
                {
                    Song+= "A";
                    Hond += "<img src=IMG/A.png class='arrozz'>";
                    var audio = new Audio('AudioOcarina/A.wav');
                    audio.play();             
                    console.log(Song.length);
                }
                else if(e.keyCode == 37)
                {
                    Song+= "L";
                    Hond += "<img src=IMG/Left.png class='arrozz'>";
                    var audio = new Audio('AudioOcarina/L.wav');
                    audio.play();             
                }
                else if(e.keyCode == 38)
                {
                    Song+= "U";
                    Hond += "<img src=IMG/Up.png class='arrozz'>";
                    var audio = new Audio('AudioOcarina/U.wav');
                    audio.play();             
                }
                else if(e.keyCode == 39)
                {
                    Song+= "R";
                    Hond += "<img src=IMG/Right.png class='arrozz'>";
                    var audio = new Audio('AudioOcarina/R.wav');
                    audio.play();             
                }
                else if(e.keyCode == 40)
                {
                    Song+= "D";
                    Hond += "<img src=IMG/Down.png class='arrozz'>";
                    var audio = new Audio('AudioOcarina/D.wav');
                    audio.play();             
                }
                else if(e.keyCode == 82)
                {
                    Song = "";
                    Hond = "";
                }
                else if(e.keyCode == 89)
                {
                    SONG.pause();
                }
                
                document.getElementById("Playing").innerHTML = Hond;
                
                for(var i=0; i<14; i++)
                {
                    if(Song == Songlist[i])
                    {
                        Song = "";
                        Hond = "";
                        var Corrrr = new Audio('Audio/SongCorrect.wav');
                        Corrrr.play();
                        var R = i;
                        setTimeout(function(){
                            SONG.pause();
                            SONG = new Audio(Songke[R]);
                            SONG.play(); 
                            document.getElementById('SongTitel').innerHTML = SongTitel[R];
                        }, 600);
                    }
                }
                if(Song.length > 11){
                    Song = "";
                    Hond = "";
                }
            }
        );
        });
        
        </script>
        
        <img src='IMG/Songs.jpg' id='plaatke'>
        
            
        <div id="HUD">
            <span style="font-size:1.5vw">R = Reset</span>
            <span style="font-size:1.5vw">Y = Stop Song</span><br>
            <div id='Playing'></div>
            <div id='SongTitel'></div>
        </div>
        
    </body>
</html>