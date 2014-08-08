
<html>
<body>
<center>



<p style="font-family:arial;color:red;font-size:20px;"> Parivartan Helgth Camp Report</p>
<br/>
<form   action="process.php" method="post">
<div>
  <p style="font-family:arial;color:red;font-size:20px;"> Applicant Information</p>
<label>
<span style="font-family:arial;color:black;font-size:15px;" > First name </span><input id="name" type="text" name="first_name"  />
<span style="font-family:arial;color:black;font-size: 15px;" > Last name </span><input id="name" type="text" name="last_name" /> <br/><br/>
<span style="font-family:arial;color:black;font-size:15px;" >  Age </span><input id="name" type="text" name="age" />
</label>


<input type="radio" name="sex" value="male"> Male 

<input type="radio" name="sex" value="female">Female
<br/>
<p style="font-family:arial;color:red;font-size:20px;">Please tell us how you first heard about Camp </p>
<input type="checkbox" name="cb1" value="Area Resident/Cottager"> Area Resident/Cottager
		<input type="checkbox" name="cb2" value="Camp Staff/Alumni">Camp Staff/Alumni  <br/> <br/>
		<input type="checkbox" name="cb3" value="School Trip">School Trip 
		<input type="checkbox" name="cb4" value="Print Advertising">Print Advertising
		
<br/>
<label>
 <p style="font-family:arial;color:red;font-size:20px;"> Disease  Description </p> 
  
<textarea cols="40" rows="5"   type="text" name="disease"></textarea>

<br/>
<br/>
<span style="font-family:arial;color:black;font-size:15px;" > File name </span><input id="name" type="text" name="name" />
</label>
<select name="SelectVersion" id="mySelect">
<option value="version1" >version1</option>
<option value="version2" >version2</option>
<option value="version3" >version3</option>
<option value="version4" >version4</option>



</div>




             
		      <input type="button" name="save" value="save" onclick="myFunction()" multiple>
			  <input type="reset">
          <input type="submit" name = "Upload Document">
 <br/>
 
 <br/><br/>
</form>
<form   action="process1.php" method="post">
<span style="font-family:arial;color:black;font-size:15px;" > Search  </span><input id="name" type="text" name="name" />
</label>
<select name="SelectVersion" id="mySelect">
<option value="version1" >version1</option>
<option value="version2" >version2</option>
<option value="version3" >version3</option>
<option value="version4" >version4</option>
<button type="submit" value="Submit">load </button>
   <input type="submit"  value="load file" name = "Upload Document">
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
