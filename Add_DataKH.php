<?php 
    
    $servername = "psgh.nl";
    $username = "weslexm171_wes";
    $password = "wesweswes";
    $dbname = "weslexm171_DB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $Product = $_POST[ 'Product' ];
    $Hoeveelheid = $_POST[ 'Hoeveelheid' ];
    $Koolhydraten = $_POST[ 'Koolhydraten' ];
    
    $sql = "INSERT INTO Koolhydraattable (Product, Hoeveelheid, Koolhydraten)
    VALUES ('$Product', '$Hoeveelheid', '$Koolhydraten')";
    
    if ($conn->query($sql) === TRUE) {
        echo 'New record created successfully';
        echo "<br><br><a href='Add_DataKH.html'><button>Back</button></a>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<br><br><a href='Add_DataKH.html'><button>Back</button></a>";
    }

    $conn->close();
    
?>