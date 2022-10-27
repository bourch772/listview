<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}</style>
<body>


<div class="w3-container" style="margin :20px">


<?php
include('dp.php');
$html = file_get_html('');
ob_start();

// Find all images
$i=0;
foreach($html->find('.con a') as $element){

if($i<=5){


$pic = $element->find('img', 0);
       echo '<hr><div class="w3-cell-row"><div class="w3-cell" style="width:30%"><img class="w3-round-large" src="'.$pic->src . '" style="width:100%"></div><div class="w3-cell w3-container">'.$element->title. '</p><button class="button w3-round-large">play</button></div></div>';
       ob_flush();
       $i = $i+1;
       }
       
   
       }
 ob_end_flush();
?>

</div>
<div class="w3-container" style="margin :20px"></div>

<script>
closeSidebar();
function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
