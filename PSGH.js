function Menu() {
    document.getElementById("submenu").style.visibility = "visible";
}

function Leave() {
    document.getElementById("submenu").style.visibility = "hidden";
}



var consoleState = 'hidden';
$(document).ready(function() {


    $('body').keydown(function(e) {
        if (e.keyCode == 192) {
            if (consoleState == 'hidden') {

                console.log('lol');
                document.getElementById('console').style.visibility = 'visible';
                consoleState = 'visible';

                $("#console").animate({
                    top: '5vh'
                }, 500);

                document.getElementById('consoleInput').value = '';

                var delayMillis = 500;
                setTimeout(function() {
                    document.getElementById("consoleInput").focus();
                }, delayMillis);

            } else if (consoleState == 'visible') {

                $("#console").animate({
                    top: '-35vh'
                }, 500);
                var delayMillis = 1000;
                setTimeout(function() {
                    document.getElementById('console').style.visibility = 'hidden';
                    consoleState = 'hidden';
                }, delayMillis);

            }
            document.getElementById('consoleInput').value = '';
        }
    });

});

//function loadingFake(i){
//  setInterval(function(){
//      document.getElementById('consoleShow').innerHTML += '\n Installing Stalin ' + i+'%';
//      return;
//}, 1000);
//}

function consolePost() {

    var music = document.getElementById('sovietAnthem');
    var input = document.getElementById('consoleInput').value;
    document.getElementById('consoleShow').innerHTML += input + '\n';
    var lowerCase = input;
    var res = lowerCase.toLowerCase();
    var randomNumber;

    switch (res) {
        case 'yarr':
            for (i = 0; i < 100; i = i + randomNumber) {
                document.getElementById('consoleShow').innerHTML += 'Injecting Stalin ' + i + '%\n';
                //loadingFake(i);
                randomNumber = Math.floor((Math.random() * 18) + 2);
            }
            document.getElementById('consoleShow').innerHTML += 'Injecting Stalin 100%\n Inection Complete\n';

            document.getElementById('consoleShow').innerHTML += 'Welcome back Captain Stalin!\n';
            var cssLink = $('link[href*="fake.css"]');
            cssLink.replaceWith('<link href="PSGHBackdoor.css" type="text/css" rel="stylesheet">');
            music.play();
            break;
        case 'initiald':
            document.getElementById('consoleShow').innerHTML += 'Processing Multitrack Drifting...\n';
            var delayMillis = 1500;
            setTimeout(function() {
                window.open("http://www.multitrackdrifting.nu", "_self");
            }, delayMillis);
            break;
        case 'pause':
            music.pause();
            break;
        case 'play':
            music.play();
            break;
        case 'help':
            document.getElementById('consoleShow').innerHTML += 'Commands: "yarr", "InitialD", "help", "Pause", "Play", "Purge", "Ecchi",\n';
            break;
        case 'purge':
            document.getElementById('consoleShow').innerHTML += 'Purging Pirate Stalins Gamehub, Destroying Dennis...\n';
            document.body.style.backgroundImage = 'url("IMG/Victorian.png")';
            break;
        case '':
            document.getElementById('consoleShow').innerHTML += 'No command found. Try using "help"\n';
            break;
        case 'ecchi':
            document.getElementById('consoleShow').innerHTML += 'NSFW - Loading Ecchi in a few seconds.\n';
            var delayMillis = 2000;
            setTimeout(function() {
                window.open("https://nl.pinterest.com/simo_hayhaa/ecchi-gallery/", "_self");
            }, delayMillis);
            break;
        default:
            //
    }
    document.getElementById('consoleInput').value = null;
    document.getElementById("consoleShow").scrollTop = document.getElementById("consoleShow").scrollHeight;
}


function secretRupee() {
    console.log('1');
    var secretTune = document.getElementById('zeldaSecret');
    console.log('2');
    secretTune.play();
    console.log('3');
}
