     <head>
        <title>Alt-Tap</title>
    
        <link href='Alt-TapMob.css' rel='stylesheet' type='text/css' media="all and (max-width:1150px)">
        <link href='Alt-Tap.css' rel='stylesheet' type='text/css' media="all and (min-width:1151px)">
    </head>
    
<?php
    session_start();

    $servername = "psgh.nl";
    $username = "weslexm171_wes";
    $password = "wesweswes";
    $dbname = "weslexm171_DB";
    $dbport = 3306;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $Naam = $_POST['naam'];
    $Score = $_POST['score'];
    
    if($Naam == '' || $Score == ''){
    }
    else{
    $sql = "INSERT INTO Highscore30(Naam, Score) VALUES ('$Naam', '$Score')";
    $conn->query($sql);
    }

    
    $sql = 'SELECT DISTINCT Naam, Score FROM Highscore30 ORDER BY score DESC LIMIT 20';
    $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "<table style='border:2px red solid; width:500px;' id='Highscore'> <tr><th colspan=3>Top 20 - 30 Sec Game</th><tr><th>Rank</th><th>Naam</th><th>Score</th><tr><td>-</td><td>-</td>";
            while($row = $result->fetch_assoc()) {
                $rank = $rank + 1;
                echo '<tr><td>' . $rank . '</td><td>' . $row['Naam'] . '</td> <td>' . $row['Score'] . '</td>';
            }
            echo '<a href="Alt-Tap30.php"><button id=terug>Terug</button></a> <a href="Gameselect.php"><button id="gamesel">Game Select</button></a>';
        }

        
    $conn->close();
?>