<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<link rel=File-List href="index_files/filelist.xml">

<title>Page Title</title>
<style>
<!--
 /* Font Definitions */
@font-face
	{font-family:Centaur;
	panose-1:2 3 5 4 5 2 5 2 3 4;}
@font-face
	{font-family:"Baskerville Old Face";
	panose-1:2 2 6 2 8 5 5 2 3 3;}
@font-face
	{font-family:"Times New Roman";
	panose-1:2 2 6 3 5 4 5 2 3 4;}
 /* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-right:0pt;
	text-indent:0pt;
	margin-top:0pt;
	margin-bottom:0pt;
	text-align:left;
	font-family:"Times New Roman";
	font-size:10.0pt;
	color:black;}
ol
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
ul
	{margin-top:0in;
	margin-bottom:0in;
	margin-left:-2197in;}
@page
	{size:8.0302in 11.0in;}
-->
</style>

</head>

<body style='margin:0'>

<div style='position:absolute;width:5.0459in;height:8.-1540in'>

<![if !vml]><span style='position:absolute;z-index:-40;
left:-216px;top:768px;width:432px;height:29px'>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=432 height=29 style='vertical-align:top'><![endif]>
  <div v:shape="_x0000_s1031" style='padding:2.88pt 2.88pt 2.88pt 2.88pt'
  class=shape>
  <p class=MsoNormal style='text-align:center;text-align:center'><span
  lang=en-US style='language:en-US'>1</span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]>
<![if !vml]><span style='position:absolute;
z-index:1;left:117px;top:6px;width:320px;height:102px'><img width=320

height=102 src="index_files/pic.jpg" v:shapes="_x0000_s1028 _x0000_s1029 _x0000_s1030"></span><![endif]><![if !vml]><span style='position:absolute;z-index:13;

left:27px;top:101px;width:486px;height:696px'>
    
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
    
    
    $sqlDescriptionVar ="hostingElder";
    $sqlDescriptionQuery = "SELECT hostingElder FROM ibulletin WHERE DATE = '$sTime' ";
    
    $resultDescription = $conn->query($sqlDescriptionQuery);

    if ($resultDescription->num_rows > 0) {
        // output data of each row
        while($row = $resultDescription->fetch_assoc()) {
            echo '<div class="styleHost"><p><b>Hosting Elder</b>     -   '.$row[$sqlDescriptionVar].'</p></div>';
        }
    } else {
        echo "0" . $sqlDescriptionVar . "results";
    }
    $conn->close();
    ?>
    <style>
        .styleHost {
            position:absolute;
            z-index:2;
            left:135px;
            top:-96px;
            font-size: 18px;'
        }
    </style>
    
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
    
    
    $sqlDescriptionVar ="praiseTeam";
    $sqlDescriptionQuery = "SELECT praiseTeam FROM ibulletin WHERE DATE = '$sTime' ";
    
    $resultDescription = $conn->query($sqlDescriptionQuery);

    if ($resultDescription->num_rows > 0) {
        // output data of each row
        while($row = $resultDescription->fetch_assoc()) {
            echo '<div class="stylePraise"><p><b>Praise Team</b>     -   '.$row[$sqlDescriptionVar].'</p></div>';
        }
    } else {
        echo "0" . $sqlDescriptionVar . "results";
    }
    $conn->close();
    ?>
    <style>
        .stylePraise {
            position:absolute;
            z-index:2;
            left:165px;
            top:-73px;
            font-size: 15px;'
        }
    </style>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=486 height=696 bgcolor=white style='vertical-align:top;background:
  white'><![endif]>
  <div v:shape="_x0000_s1051" style='padding:0pt 0pt 0pt 0pt' class=shape>
  <p class=MsoNormal style='text-align:center;margin-left:8.4705pt;margin-right:
  .75pt;text-indent:-8.4705pt;text-align:center'><span lang=en-US
  style='font-size:12.0pt;font-family:"Baskerville Old Face";font-weight:bold;
  language:en-US'>Church in Worship </span></p>
  <p class=MsoNormal style='text-align:center;margin-right:.75pt;line-height:
  75%;text-align:center'><span lang=en-US style='font-size:12.0pt;line-height:
  75%;font-family:"Baskerville Old Face";language:en-US'>10:35 am - 12:15 pm</span><span
  lang=en-US style='font-size:12.0pt;line-height:75%;font-family:Centaur;
  color:black;font-weight:bold;language:en-US'></span></p>
  
  <p class=MsoNormal style='text-align:center;margin-right:.75pt;line-height:
  75%;text-align:center'><span lang=en-US style='font-size:12.0pt;line-height:
  75%;font-family:Centaur;color:black;font-weight:bold;language:en-US'>&nbsp;</span></p>
  
  <br>
  
  
  <?php // Gathering Song
  
  // Stuff on the Left Goes Here
  $Left = "Gathering Song";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="";
  $sqlDescriptionQuery = "SELECT childernOffering FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $textRight = "Praise Team";
  
  include 'music.php';
  
  ?>
  
  <br>
  
  <?php // Welcome and Anconncements
  
  // Stuff on the Left Goes Here
  $Left = "Welcome & Prayer";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="";
  $sqlDescriptionQuery = "SELECT childernStory FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $sqlRightVar = "hostingElder";
  $sqlRightQuery = "SELECT hostingElder FROM ibulletin WHERE DATE = '$sTime' ";
  
  include 'row.php';
  
  ?>
  
  <div></div>
  
  <?php // Opening Song
  
  // Stuff on the Left Goes Here
  $Left = "Opening Song";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="";
  $sqlDescriptionQuery = "SELECT childernOffering FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $textRight = "Praise Team";
  
  include 'music.php';
  
  ?>
  
  <br>
  <br>
  
  <?php // Offering 
  
  // Stuff on the Left Goes Here
  $Left = "Offering";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="offering";
  $sqlDescriptionQuery = "SELECT offering FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $sqlRightVar = "hostingElder";
  $sqlRightQuery = "SELECT hostingElder FROM ibulletin WHERE DATE = '$sTime' ";
  
  include 'row.php';
  
  ?>
  
  <div></div>
  <div></div>
  
  <?php // Childern's Offering
  
  // Stuff on the Left Goes Here
  $Left = "Childern's offering";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="childernOffering";
  $sqlDescriptionQuery = "SELECT childernOffering FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $sqlRightVar = "hostingElder";
  $sqlRightQuery = "SELECT hostingElder FROM ibulletin WHERE DATE = '$sTime' ";
  
  include 'row.php';
  
  ?>
  
  <div></div>
  <div></div>
  
  <?php // Childern's Story
  
  // Stuff on the Left Goes Here
  $Left = "Childern's Story";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="";
  $sqlDescriptionQuery = "SELECT childernStory FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $sqlRightVar = "childernStory";
  $sqlRightQuery = "SELECT childernStory FROM ibulletin WHERE DATE = '$sTime' ";
  
  include 'row.php';
  
  ?>
  
  
  <?php // Special Music
  
  // Stuff on the Left Goes Here
  $Left = "Special Music";
  
  // Center Description Goes Here
  $sqlDescriptionVar1 ="specialSong";
  $sqlDescriptionQuery1 = "SELECT specialSong FROM ibulletin WHERE DATE = '$sTime' ";

  // Stuff on the Right Goes Here
  $sqlDescriptionVar ="specialMusic";
  $sqlDescriptionQuery = "SELECT specialMusic FROM ibulletin WHERE DATE = '$sTime' ";
  
   include 'checkIfHasVal.php';
   
   if (empty($Val)) {
   } else {
       
       include 'smusic.php';
   }

   ?>

  
  <br>
  
  <?php // Congregational Prayer
  
  // Stuff on the Left Goes Here
  $Left = "Congregational Prayer";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="";
  $sqlDescriptionQuery = "SELECT childernOffering FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $textRight = "Praise Team";
  
  include 'checkIfHasVal.php';
  
   if (empty($Val)) {
       include 'music.php';
   } else {
       echo "No";
   }
   
 
  ?>
  
  <br>
  <br>
  
  <?php //Sermon Title
  
  // Stuff on the Left Goes Here
  $Left = "Spoken Word";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="title";
  $sqlDescriptionQuery = "SELECT title FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $sqlRightVar = "speaker";
  $sqlRightQuery = "SELECT speaker FROM ibulletin WHERE DATE = '$sTime' ";
  
  include 'row.php';
  
  ?>
  
  <div></div>
  
  <?php // Closing Song
  
  // Stuff on the Left Goes Here
  $Left = "Closing Song";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="";
  $sqlDescriptionQuery = "SELECT childernOffering FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $textRight = "Praise Team";
  
  include 'music.php';
  
  ?>
  
  <br>
  <br>
  
  <?php // Benediction
  
  // Stuff on the Left Goes Here
  $Left = "Benediction";
  
  // Center Description Goes Here
  $sqlDescriptionVar ="";
  $sqlDescriptionQuery = "SELECT title FROM ibulletin WHERE DATE = '$sTime' ";
    
  // Stuff on the Right Goes Here
  $sqlRightVar = "speaker";
  $sqlRightQuery = "SELECT speaker FROM ibulletin WHERE DATE = '$sTime' ";
  
  include 'row.php';
  
  ?>
  
  <div></div>
  
  
  <p class=MsoNormal style='text-align:center;margin-right:2.4827pt;text-align:
  center'><span lang=en-US style='font-size:12.0pt;font-family:Centaur;
  color:#B01058;language:en-US'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-right:.75pt'><span lang=en-US
  style='font-size:12.0pt;font-family:Centaur;color:black;font-weight:bold;
  language:en-US'></span></p>
  <p class=MsoNormal style='text-align:center;margin-right:.75pt;text-align:
  center'><span lang=en-US style='font-size:12.0pt;font-family:Centaur;
  color:black;font-weight:bold;language:en-US'>
      
      
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
    
    
    $sqlDescriptionVar ="bottomNote";
    $sqlDescriptionQuery = "SELECT bottomNote FROM ibulletin WHERE DATE = '$sTime' ";
    
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
  </span></p>
  </div>
  <![if !vml]></td>
 </tr>
</table>

</span><![endif]>
</div>

</body>

</html>
