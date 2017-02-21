
function Menu()
{
    document.getElementById("submenu").style.visibility = "visible";
}

function Leave()
{
    document.getElementById("submenu").style.visibility = "hidden";
}


$('body').keydown(function(e){
                if(e.keyCode == 65)
                {
                  alert('lol');
                    //Song+= "A";
                    //Hond += "<img src=IMG/A.png class='arrozz'>";
                    //var audio = new Audio('AudioOcarina/A.wav');
                    //audio.play();
                    //console.log(Song.length);
                }
});
