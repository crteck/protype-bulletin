<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">
    


<!-- Spoken word -->
  <span style="width: 462px; white-space: nowrap;  display: grid; grid-template-columns: 1fr 2fr 1fr; " >
    <div> 
    <p class=MsoNormal style='margin-right:17.6914pt'><span lang=en-US
    style='font-size:12.0pt;font-family:Centaur;color:black;font-weight:bold;
    language:en-US'><?php echo $Left ?></span><span
    lang=en-US style='language:en-US'>
    </div>

    <div>
    <!-- title -->
    
    


  <div style="text-align: center;">
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
            echo '<p>'.$row[$sqlDescriptionVar].'</p>';
        }
    } else {
        echo "0" . $sqlDescriptionVar . "results";
    }
    $conn->close();
    ?>
   </div>
</div>
  
    <div style="text-align: right;">
    <?php echo $textRight ?>
    </div>
  </span>