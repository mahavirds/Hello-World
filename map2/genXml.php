<?php  

//require("db_info.php");
//Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node); 
header("Content-type: text/xml"); 
  // ADD TO XML DOCUMENT NODE  
$node = $dom->createElement("marker");  
$newnode = $parnode->appendChild($node); 


//lat="21.195" lng="72.819444"


$newnode->setAttribute("lat", '21.195');  
$newnode->setAttribute("lng", '72.819444');
 

echo $dom->saveXML();

?>