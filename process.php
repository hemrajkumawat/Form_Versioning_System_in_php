<?php 
   $filename1= $_POST["name"].$_POST["SelectVersion"];
    $filename= $filename1 .".xml";
$file=fopen($filename,"w+");
fwrite($file, "<form>");
fwrite($file, "<first_name>");
fwrite($file, $_POST["first_name"]);
fwrite($file, "</first_name>");
fwrite($file, "<last_name>");
fwrite($file, $_POST["last_name"]);
fwrite($file, "</last_name>");
fwrite($file, "<age>");
fwrite($file, $_POST["age"]);
fwrite($file, "</age>");
fwrite($file, "<sex>");
fwrite($file, $_POST["sex"]);
fwrite($file, "</sex>");
fwrite($file, "<disease>");
fwrite($file, $_POST["disease"]);
fwrite($file, "</disease>");
fwrite($file, "<version>");
	fwrite($file, $_POST["SelectVersion"]);
fwrite($file, "</version>");


//fwrite($file, "<check>");

fwrite($file, "<cb1>");
  fwrite($file, $_POST["cb1"]);
fwrite($file, "</cb1>");
fwrite($file, "<cb2>");
  fwrite($file, $_POST["cb2"]);
fwrite($file, "</cb2>");
fwrite($file, "<cb3>");
  fwrite($file, $_POST["cb3"]);
fwrite($file, "</cb3>");
fwrite($file, "<cb4>");
  fwrite($file, $_POST["cb4"]);
fwrite($file, "</cb4>");

 
	#echo implode('\n', $_POST['cb1']);
	#foreach ($_POST['cb1'] as $cb1) {
    # echo "You selected: $cb1 <br>";
 #}
//fwrite($file, "</check>");
fwrite($file, "<file_name>");
fwrite($file, $_POST["name"]);
fwrite($file, "</file_name>");
fwrite($file, "</form>");

fclose($file);
?><br>
<?php

   header( 'Location: http://localhost/ptt/index.php' ) ;

?>