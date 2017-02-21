// JavaScript File

var mode = true;
var switched = false;

var een = document.getElementById("1").value;
var twee = document.getElementById("2").value;
var drie = document.getElementById("3").value;
var vier = document.getElementById("4").value;
var vijf = document.getElementById("5").value;
var zes = document.getElementById("6").value;
var zeven = document.getElementById("7").value;
var acht = document.getElementById("8").value;
var negen = document.getElementById("9").value;

function Turn(){
    if (mode == true && switched == true)
    {
        mode = false;
        switched = false;
    }
    else
    {
        mode = true;
        switched = false;
    }
}

function place(box){
    
    var select = document.getElementById(box);
    
    if (select.value == "" && mode == true)
    {
        select.value = "X";
        switched = true;
        Check();
        VCheck()
        Turn();
    }
    else if (select.value == "" && mode == false)
    {
        select.value = "O";
        switched = true;
        Check();
        VCheck()
        Turn();
    }
    
}

function Check(){
    een = document.getElementById("1").value;
    twee = document.getElementById("2").value;
    drie = document.getElementById("3").value;
    vier = document.getElementById("4").value;
    vijf = document.getElementById("5").value;
    zes = document.getElementById("6").value;
    zeven = document.getElementById("7").value;
    acht = document.getElementById("8").value;
    negen = document.getElementById("9").value;
}

function VCheck(){
    if (een == "X" && twee == "X" && drie == "X"){
        alert("victoryiaaaa!! voor X");
    }
    if (vier == "X" && vijf == "X" && zes == "X"){
        alert("victoryiaaaa!! voor X");
    }
    if (zeven == "X" && acht == "X" && negen == "X"){
        alert("victoryiaaaa!! voor X");
    }
    if (een == "X" && vier == "X" && zeven == "X"){
        alert("victoryiaaaa!! voor X");
    }
    if (twee == "X" && vijf == "X" && acht == "X"){
        alert("victoryiaaaa!! voor X");
    }
    if (drie == "X" && zes == "X" && negen == "X"){
        alert("victoryiaaaa!! voor X");
    }
    if (een == "X" && vijf == "X" && negen == "X"){
        alert("victoryiaaaa!! voor X");
    }
    if (drie == "X" && vijf == "X" && zeven == "X"){
        alert("victoryiaaaa!! voor X");
    }
    
    
    if (een == "O" && twee == "O" && drie == "O"){
        alert("victoryiaaaa!! voor O");
    }
    if (vier == "O" && vijf == "O" && zes == "O"){
        alert("victoryiaaaa!! voor O");
    }
    if (zeven == "O" && acht == "O" && negen == "O"){
        alert("victoryiaaaa!! voor O");
    }
    if (een == "O" && vier == "O" && zeven == "O"){
        alert("victoryiaaaa!! voor O");
    }
    if (twee == "O" && vijf == "O" && acht == "O"){
        alert("victoryiaaaa!! voor O");
    }
    if (drie == "O" && zes == "O" && negen == "O"){
        alert("victoryiaaaa!! voor O");
    }
    if (een == "O" && vijf == "O" && negen == "O"){
        alert("victoryiaaaa!! voor O");
    }
    if (drie == "O" && vijf == "O" && zeven == "O"){
        alert("victoryiaaaa!! voor O");
    }
    
    if ((een == "O" || een == "X") && (twee == "O" || twee == "X") && (drie == "O" || drie == "X") && (vier == "O" || vier == "X") && (vijf == "O" || vijf == "X") && (zes == "O" || zes == "X") && (zeven == "O" || zeven == "X") && (acht == "O" || acht == "X") && (negen == "O" || negen == "X") ){
        
        alert("Draw!@!@!@");
    }
}