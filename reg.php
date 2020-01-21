<html>
	<head>register form</head>
		<body>
			<form action="demographics.php" method="post">
				<input type="text" name="PatientID" placeholder="PatientID"><br>
				<input type="text" name="Title" placeholder="Title"><br>
		<input type="text" name="FirstName" placeholder="FirstName"><br>
		<input type="text" name="MiddleName" placeholder="MiddleName"><br>
		<input type="text" name="LastName" placeholder="LastName"><br>
		<input type="text" name="Gender" placeholder="Gender"><br>
		<input type="Date" name="DateOfBirth" placeholder="DOB"><br>
		<label>BirthdateCorrect</label>
		<label><input type="radio" name="BirthdateCorrect" >Yes</label>
		<label><input type="radio" name="BirthdateCorrect" >No</label><br>
		<input type="text" name="BloodType" placeholder="BloodType"><br>
		<input type="text" name="EmailID" placeholder="Email"><br>
		<input type="text" name="Designation" placeholder="Designation"><br>
		<input type="text" name="InsuranceNumber" placeholder="InsuranceNumber"><br>
		<button type="submit" name="signup-submit">Submit</button>
</form>
</body>
</html>
<?php
$connect = new mysqli("localhost","root","","pdemography");
if(!$connect) {
	echo"not connected";
}
else
{
	echo"connected";
}

if (isset($_POST['signup-submit'])) {
	 $PatientID = $_POST['PatientID'];
	 $Title = $_POST['Title'];
	 $FirstName = $_POST['FirstName'];
	  $MiddleName = $_POST['MiddleName'];
	   $LastName = $_POST['LastName'];
	    $Gender = $_POST['Gender'];
	     $DateOfBirth = $_POST['DateOfBirth'];
	      $BloodType = $_POST['BloodType'];
	       $EmailID = $_POST['EmailID'];
	        $Designation = $_POST['Designation'];
	         $InsuranceNumber = $_POST['InsuranceNumber'];
	     
	         $query = "Insert INTO demographics (PatientID,Title,FirstName,MiddleName,LastName,Gender,DateOfBirth,BloodType,EmailID,Designation,InsuranceNumber) VALUES ('$PatientID','$Title','$FirstName','$MiddleName','$LastName','$Gender','$DateOfBirth','$BloodType','$EmailID','$Designation','$InsuranceNumber')";
}
if($connect-> query($query)==TRUE){
	echo "data inserted";
} 
 else
{
	echo "data not inserted";
}

?>