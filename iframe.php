<!DOCTYPE html>
<html>
<body>

<?php
 $filename1= $_POST["name"].$_POST["SelectVersion"];
    $filename= $filename1 .".xml";
$xml=simplexml_load_file($filename);

echo   "Saved Applicant Information" ; 

echo "<br/>";
echo"<br/>"; 

echo    $xml->getName() . "<br>";
 echo"<br/>"; 
foreach($xml->children() as $child)
   {
   echo                  $child->getName() . ": " . $child . "<br>";
   echo"<br/>";
   }
?>  

</body>
</html>