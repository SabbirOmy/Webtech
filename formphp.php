<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
	  	$idError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["id"])) {
				  $idError = "Provide an ID";
			}
			else {
				echo "Student ID is: " . $_REQUEST["id"];
			}
		}

        echo "<br>";

        $nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
				  $nameError = "Provide a Name";
			}
			else {
				echo "Student Name is: " . $_REQUEST["name"];
			}
		}

        echo "<br>";

        $genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $gernderError = "Please select gender";
			}

			else {
				echo "Gender is: " . $_REQUEST["gender"];
			}
		}
        
        echo "<br>";
        $emailError = "";

	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "Provide an Email";
			}

			else {
				echo "Email Address: " . $_REQUEST["email"];
			}
		}
        
        echo "<br>";

        $addressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["address"])) {
				  $addressError = "Provide your address";
			}
			else {
				echo "Address: " . $_REQUEST["address"];
			}
		}
    
        echo "<br>";

        $cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $cityError = "Provide your city name";
			}
			else {
				echo "City: " . $_REQUEST["city"];
			}
		}
    
        echo "<br>";

        $stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["state"])) {
				  $stateError = "provide your address";
			}
			else {
				echo "State: " . $_REQUEST["state"];
			}
		}
    
        echo "<br>";

        $countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["country"])) {
				  $countryError = "Provide country name";
			}
			else {
				echo "Country: " . $_REQUEST["country"];
			}
		}
        echo "<hr>";
        
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Student Id <br/> 
    <input type="text" name="id" required>
	<br />
	<span><?php echo $idError; ?></span>
        
	Student Name <br/>
    <input type="text" name="name" required>
	<br /><br />
    <span><?php echo $nameError; ?></span><br/>

	Gender <br/>
    <input type="radio" name="gender" value="male" required>Male
    <br/>
	<input type="radio" name="gender" value="female" required>Female
    <br/><br/>
    <span><?php echo $genderError; ?></span><br/>
    
        
    Student Email <br/>

    <input type="text" name="email" value="@" required>
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    Address  <br/>
    <input type="text" name="address" required style=" width:333px">
	<br />       
    Street Address
    <br />
    <input type="text" name="address2"  style=" width:333px">
	<br />
    Address line 2 
    <br/>
    <span><?php echo $addressError; ?></span><br/>
     <input type="text" name="city" required>
    <span><?php echo $cityError; ?></span>
    <input type="text" name="state" required style=" width:157px">
    <span><?php echo $stateError; ?></span>
    <br/>
    <span style="margin-right:150px">City</span>
    <span>State/Province/Region</span>
    <br/>
        
    <input type="text" name="zip" >
    <select name="country" style=" width:162px">
    <option value="Bangladesh">Bangladesh</option>
    <option value="Canada">Canada</option>
    <option value="USA">USA</option>
    <option value="Germany">Germany</option>
    </select>

    <span><?php echo $countryError; ?></span>
    <br/>
    <span style="margin-right:80px">Zip/Postal Code</span>
    <span>Country</span>
	
	<br /><br />
	<input type="submit" value="Submit Form" style="color:blue; font-weigt:bold">
	</form>
</body>
</html>