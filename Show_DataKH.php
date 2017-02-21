<?php
    $servername = "psgh.nl";
    $username = "weslexm171_wes";
    $password = "wesweswes";
    $dbname = "weslexm171_DB";
            
    $conn = new mysqli($servername, $username, $password, $dbname);
            
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } 

    $sql = 'SELECT Product, Hoeveelheid, Koolhydraten FROM Koolhydraattable ORDER BY Product';
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<style> table,tr,td,th{border:1px black solid; text-align:center;}</style>";
        echo '<table><tr><th>Product</th><th>Hoeveelheid</th><th>Koolhydraten</th></tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr><td>' . $row['Product'] . '</td>' . 
                      '<td>' . $row['Hoeveelheid'] . '</td>' . 
                      '<td>' . $row['Koolhydraten'] . '</td></tr>';
        }
    } else {
        echo '0 results';   
    }
    
    echo '</table>';
       
        echo '<br><br><a href="index.html"><input id=back type="button" value="Back"></a>';
?>	 