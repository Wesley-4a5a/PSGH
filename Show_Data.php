<?php
    $servername = "psgh.nl";
    $username = "weslexm171_wes";
    $password = "wesweswes";
    $dbname = "weslexm171_DB";
            
    $conn = new mysqli($servername, $username, $password, $dbname);
            
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } 

    $sql = 'SELECT Anime, Episodes, Status, Score FROM AnimeList';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<form action='Delete_Anime.php' method='Post'>".
            "-Anime= <input name='Anime' value='" . $row['Anime']. "' disabled><br>" . 
            "-Episodes= <input name='Episodes' value='" . $row['Episodes']. "' disabled><br>". 
            "-Status= <input name='Status' value='" . $row['Status']. "' disabled><br>".
            "-Score= <input name='Score' value='" . $row['Score'] . "' disabled><br><br>".
            "<input type='Submit' value='Delete'><br><br>" . 
            "<input name='Anime' value='" . $row['Anime']. "' hidden><br>" .
            "<div>----------------</div><br>".
            '</form>';
        }
    } else {
        echo '0 results';   
    }
            
    echo '<a href="Add_Anime.html"><button>Back</button></a>';
?>	 



