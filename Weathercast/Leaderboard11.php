     <head>
        <title>Weathercast Leaderboard</title>
    
        <link href='weathercast.css' rel='stylesheet' type='text/css'>
    </head>
    
<?php
    session_start();

    $servername = getenv('IP');
    $username = "wheatley";
    $password = "";
    $dbname = "Weathercast";
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
    $sql = "INSERT INTO Highscores(Naam, Score) VALUES ('$Naam', '$Score')";
    $conn->query($sql);
    }

    
    $sql = 'SELECT DISTINCT Naam, Score FROM Highscores ORDER BY score DESC LIMIT 20';
    $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "<table style='border:2px red solid; width:500px;' id='highscore'> <tr><th colspan=3>Top 20 - Weathercast</th><tr><th>Rank</th><th>Naam</th><th>Score</th><tr><td>-</td><td>-</td><td>-</td>";
            while($row = $result->fetch_assoc()) {
                $rank = $rank + 1;
                echo '<tr><td>' . $rank . '</td><td>' . $row['Naam'] . '</td> <td>' . $row['Score'] . '</td>';
            }
            echo '<a href="weathercast.php"><button id=terug>Terug naar Game</button></a><a href="gameselect.php"><button id="gamesel">Game Select</button></a>';
        }

        
    $conn->close();
?>