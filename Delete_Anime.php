<?php
    $servername = "PSGH.nl";
    $username = "weslexm171_wes";
    $password = "wesweswes";
    $dbname = "weslexm171_DB";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } 
    
    $Anime = $_POST['Anime'];
    echo $Anime;
    //$Episodes = $_POST['Episodes'];
    //$Status = $_POST['Status'];
    //$Score = $_POST['Score'];

    $sql = 'SELECT Anime, Episodes, Status, Score FROM AnimeList';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row['Anime'] == $Anime)
            {
                $sql = "DELETE FROM AnimeList
                        WHERE Anime = '" . $Anime . "';";
                        
                if ($conn->query($sql) === TRUE) {
                    echo ' Anime Deleted successfully';
                    echo '<br><br>';
                } 
                else {
                    echo " Error: " . $sql . "<br>" . $conn->error;
                    echo '<br><br>';
                }    
            }        
        }
    } 
    else {
        echo '0 results';   
    }
    
    echo '<a href="Show_Data.php"><button>Back</button></a>';
?>