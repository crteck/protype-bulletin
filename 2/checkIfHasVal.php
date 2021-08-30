<?php
   
   $servername = "gator4301.hostgator.com";
    $username = "crteck_austin1";
    $password = "godisgod";
    $dbname = "crteck_one";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sqlSelect  = "SELECT sTime FROM sTime WHERE 1";
    $resultSelect = $conn->query($sqlSelect);
   
    if ($resultSelect->num_rows > 0) {
      // output data of each row
      while($rows = $resultSelect->fetch_assoc()) {
         $sTime = $rows["sTime"];
      }
    } else {
      echo "0 results";
    }
    
    
    $resultDescription = $conn->query($sqlDescriptionQuery);

    if ($resultDescription->num_rows > 0) {
        // output data of each row
        while($row = $resultDescription->fetch_assoc()) {
            $Val = $row['specialMusic'];
        }
    } else {
        echo "0" . $sqlDescriptionVar . "results";
    }
    $conn->close();
    ?>