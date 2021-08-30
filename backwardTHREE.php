<?php
   $servername = "gator4301.hostgator.com";
   $username = "crteck_austin1";
   $password = "godisgod";
   $dbname = "crteck_one";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   
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

   $sql = "SELECT speaker FROM ibulletin WHERE DATE = '$sTime' ";
   $result = $conn->query($sql);
   
   $conn->close();
   ?>
  
    <?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
   
      
    // Get images from the database
    $query = $db->query("SELECT file_nameTHREE FROM ibulletin WHERE DATE = '$sTime' ");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageURL = '../uploads/'.$row["file_nameTHREE"];
    ?>
            <img  width='100%' height='100%' src="<?php echo $imageURL; ?>" alt="Test No..." />
    <?php }
   // style='position:relative; right: 8px; top: 3px;'
    }else{ ?>
        <p>No image found...</p>
    <?php } ?>
  </div>
