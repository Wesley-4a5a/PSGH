
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
  if (input == 'yarr'){
      document.getElementById('consoleShow').innerHTML = 'Welcome Captain Stalin!';
      var cssLink = $('link[href*="fake.css"]');
      cssLink.replaceWith('<link href="PSGHBackdoor.css" type="text/css" rel="stylesheet">');
  }
  else if (input == 'InitialD'){
      document.getElementById('consoleShow').innerHTML = 'Processing Multitrack Drifting...';
      var delayMillis = 1500;
      setTimeout(function() {
        window.open("http://www.multitrackdrifting.nu","_self");
      }, delayMillis);


  }
  else if (input == 'help'){
      document.getElementById('consoleShow').innerHTML = 'Commands: "yarr", "InitialD", "help"';
  }
}
