// JavaScript File

var blue = 0;
var green = 1; 
var red = 2;
var yellow = 3;
var Lock = true;
var DLock = document.getElementsByName("input").disabled = true;
var Wtijd = 500;
var Delay = 1000;
var DRound = 0;
var YRound = 0;
var ThisRound = 0;
var Goed = 0;
var MaxMemory = 3;

var Memory =
[
    
];

function ArrayMaker()
{
    for (var i = 0; i < MaxMemory; i++) 
    {
        Memory.push(Math.floor(Math.random() * 4));
    }
//    console.log(Memory);
}

function Button(color)
{
    if(DLock != true && ThisRound+1 > YRound)
    {
        Lock = false;
    }
    else
    {
        Lock = true;
    }
    if (Lock != true)
    {
        var button = document.getElementById(color);
        button.style.backgroundColor = color;
        Check(button);
        window.setTimeout(Return, Wtijd, color);
        Lock = true;
    }
}

function Return(color)
{
    var button = document.getElementById(color);
    button.style.backgroundColor = "lightgray";
    Lock = true;
    
}

function Display()
{
    var display = Memory[DRound];
    Lock = true;
        
        
    if (display == blue && DRound <= ThisRound)
    {
        document.getElementById("blue").style.backgroundColor = "blue";
        window.setTimeout(Return, Wtijd, "blue");
        Lock = true;
        Wait();
    }
    else if (display == green && DRound <= ThisRound)
    {
        document.getElementById("green").style.backgroundColor = "green";
        window.setTimeout(Return, Wtijd, "green");
        Lock = true;
        Wait();
    }
    else if (display == red && DRound <= ThisRound)
    {
        document.getElementById("red").style.backgroundColor = "red";
        window.setTimeout(Return, Wtijd, "red");
        Lock = true;
        Wait();
    }
    else if (display == yellow && DRound <= ThisRound)
    {
        document.getElementById("yellow").style.backgroundColor = "yellow";
        window.setTimeout(Return, Wtijd, "yellow");
        Lock = true;
        Wait();
    }
    else
    {
        DLock = true;
    }
}

function Wait()
{
    Lock = true;
    
    if(DRound < ThisRound)
    {
        DRound++;
        window.setTimeout(Display, Delay);
        DLock = true;
    }
    else
    {
        DLock = false;
        DRound = 0;
    }
    
}

function Check(button)
{
    var check;
    
    switch(button.style.backgroundColor) 
    {
        case "yellow":
            check = 3;
            break;
        case "red":
            check = 2;
            break;
        case "green":
            check = 1;
            break;
        case "blue":
            check = 0;
            break;
    }
    
    if (Memory[YRound] == check)
    {
        YRound++;
        Victory();
    }
    else if (Memory[YRound] != check)
    {
        Fout();
    }
}

function Nextround(){
    ThisRound++;
    DRound = 0;
    YRound = 0;
    window.setTimeout(Display, 1000);
    RoundDisplay();
    
    document.getElementById("Next").style.visibility = "hidden";
}

function Start()
{
    document.getElementById("Start").style.visibility = "hidden";
    
    document.getElementById("Next").style.visibility = "hidden";
    RoundDisplay();
}

function Victory()
{
    Goed++;
    
    if (Goed == MaxMemory)
    {
        document.getElementById("inputbutton").style.visibility = "hidden";
        document.getElementById("Gewonnen").style.visibility = "visible";
    }
    else if(Goed-1 == ThisRound)
    {
        document.getElementById("Next").style.visibility = "visible";
        Goed = 0;
    }
}

function Fout()
{
    document.getElementById("inputbutton").style.visibility = "hidden";
    document.getElementById("Verloren").style.visibility = "visible";
}

function Mode(Diff)
{
    if (Diff == "Easy")
    {
        Delay = 1200;
        Wtijd = 600;
        MaxMemory = 5;
        ArrayMaker();
        
        document.getElementById("Start").style.visibility = "visible";
        document.getElementById("Mode").style.visibility = "hidden";
    }
    else if (Diff == "Normal")
    {
        Delay = 1000;
        Wtijd = 500;
        MaxMemory = 15;
        ArrayMaker();
        
        document.getElementById("Start").style.visibility = "visible";
        document.getElementById("Mode").style.visibility = "hidden";
    }
    else if (Diff == "Hard")
    {
        Delay = 500;
        Wtijd = 200;
        MaxMemory = 25;
        ArrayMaker();
        
        document.getElementById("Start").style.visibility = "visible";
        document.getElementById("Mode").style.visibility = "hidden";
    }
}

function RoundDisplay()
{
   document.getElementById("RoundDisplay").innerHTML = "Round: " + ThisRound + "/" + MaxMemory;
}