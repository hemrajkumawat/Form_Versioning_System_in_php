<html>
<body>
<center>
<p style="font-family:arial;color:red;font-size:20px;"> Parivartan Helgth Camp Report</p>
<br/>
 <br/>
<?php
$filename1= $_POST["name"].$_POST["SelectVersion"];
 $filename= $filename1 .".xml";
 //echo $filename ;
 
$xml=simplexml_load_file($filename);


//
//echo $xml->cb1. "<br>";
//echo $xml->cb2. "<br>";
//echo $xml->cb3. "<br>";
//echo $xml->cb4. "<br>";

 if (empty($_POST["disease"]))
     {$comment = "";}
   else
     {$comment = test_input($_POST["disease"]);}

   if (empty($_POST["sex"]))
     {$genderErr = "Gender is required";}
   else
     {$gender = test_input($_POST["sex"]);}


function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?> 

<br/>
<form   action="process.php" method="post">
<div>
  <p style="font-family:arial;color:red;font-size:20px;"> Applicant Information</p>
<label>
<span style="font-family:arial;color:black;font-size:15px;" > First name </span><input id="name" type="text" name="first_name"  value="<?php echo $xml->first_name;?>" />
<span style="font-family:arial;color:black;font-size: 15px;" > Last name </span><input id="name" type="text" name="last_name"value="<?php echo $xml->last_name;?>" /> <br/><br/>
<span style="font-family:arial;color:black;font-size:15px;" >  Age </span><input id="name" type="text" name="age" value="<?php echo $xml->age;?>"/>
</label>

 <input type="radio" name="sex" <?php if (isset($xml->sex) && $xml->sex=="male") echo "checked";?>  value="male">Male

 <input type="radio" name="sex" <?php if (isset($xml->sex) && $xml->sex=="female") echo "checked";?>  value="female">Female

<br/>
<p style="font-family:arial;color:red;font-size:20px;">Please tell us how you first heard about Camp </p>
<input type="checkbox" name="cb1"     <?php if (isset($xml->cb1) && $xml->cb1=="Area Resident/Cottager") echo "checked";?> value="Area Resident/Cottager"> Area Resident/Cottager
		<input type="checkbox" name="cb2"  <?php if (isset($xml->cb2) && $xml->cb2=="Camp Staff/Alumni") echo "checked";?>value="Camp Staff/Alumni">Camp Staff/Alumni  <br/>
		<input type="checkbox" name="cb3" <?php if (isset($xml->cb3) && $xml->cb3=="School Trip") echo "checked";?> value="School Trip">School Trip 
		<input type="checkbox" name="cb4" <?php if (isset($xml->cb4) && $xml->cb4=="Print Advertising") echo "checked";?> value="Print Advertising">Print Advertising
		
<br/>
<label>
 <p style="font-family:arial;color:red;font-size:20px;"> Disease  Description </p> 
  

<textarea rows="5" cols="40"  name="disease"  > <?php echo $xml->disease; ?> </textarea>
<br/>

<span style="font-family:arial;color:black;font-size:15px;" > File name </span><input id="name" type="text" name="name"value="<?php echo $xml->file_name;?>" />
</label>
<select name="SelectVersion" id="mySelect">
<option value="version1" >version1</option>
<option value="version2" >version2</option>
<option value="version3" >version3</option>
<option value="version4" >version4</option>



</div>





		      <input type="button" name="save" value="save" onclick="myFunction()" multiple>
          <input type="submit" name = "Upload Document">

</form>
</center>
<script>
function myFunction()
{
var x = document.getElementById("mySelect");
var option = document.createElement("option");
option.text = "version_new";
x.add(option);
}
</script>
</body>
</html>
