
function Menu()
{
    document.getElementById("submenu").style.visibility = "visible";
}

function Leave()
{
    document.getElementById("submenu").style.visibility = "hidden";
}

var consoleState = 'hidden';

$('body').keydown(function(e){
                if(e.keyCode == 192)
                {
                  if (consoleState == 'hidden'){
                    console.log('lol');
                    document.getElementById('console').style.visibility = 'visible';
                    consoleState = 'visible';
                  }
                  else if (consoleState == 'visible'){
                    document.getElementById('console').style.visibility = 'hidden';
                    consoleState = 'hidden';
                  }
                    //Song+= "A";
                    //Hond += "<img src=IMG/A.png class='arrozz'>";
                    //var audio = new Audio('AudioOcarina/A.wav');
                    //audio.play();
                    //console.log(Song.length);
                }
});

function consolePost(){
  var input = document.getElementById('consoleInput').value;
  document.getElementById('consoleShow').innerHTML = input;
}
