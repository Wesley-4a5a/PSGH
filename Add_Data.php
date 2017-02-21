<?php
    $servername = "weslexm171.171.axc.nl";
    $username = "weslexm171_wes";
    $password = "wesweswes";
    $dbname = "weslexm171_DB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
   $Anime = $_POST[ 'Anime' ];
    $Episodes = $_POST[ 'Episodes' ];
    $Status = $_POST[ 'Status' ];
    $Score = $_POST[ 'Score' ];
    
    $sql = "INSERT INTO AnimeList (Anime, Episodes, Status, Score)
    VALUES ('$Anime', '$Episodes', '$Status', '$Score')";
    
    if ($conn->query($sql) === TRUE) {
        echo 'New record created successfully';
        echo '<br><br><button onclick="history.go(-1);">Back </button>';
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<br><br><button onclick="history.go(-1);">Back </button>';
    }

    $conn->close();
?>