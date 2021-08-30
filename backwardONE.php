   
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
    $query = $db->query("SELECT file_nameONE FROM ibulletin WHERE DATE = '$sTime' ");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageURL = '/uploads/'.$row["file_nameONE"];
    ?>
            <img width=532 height=740 src="<?php echo $imageURL; ?>" alt="Test No..." />
    <?php }
    }else{ ?>
        <p>No image found...</p>
    <?php } ?>
  </div>
    

          <?php
    // Include the database configuration file
    include 'dbConfig.php';
    
    // Get images from the database
    $query = $db->query("SELECT * FROM ibulletin ORDER BY uploaded_on DESC");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageURL = 'uploads/'.$row["file_name"];
    ?>
        <img src="<?php echo $imageURL; ?>" alt="" />
    <?php }
    }else{ ?>
        <p>No image(s) found...</p>
    <?php } ?>