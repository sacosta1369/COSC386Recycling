<html>
 <body>
  <?php
if($con=@mysqli_connect('localhost', 'sacosta2', 'sacosta2', 'RecyclingDB')){
	print "<p>Successfully connected</p>";
}
   ?>
   <form action="insert_script.php" method="post">
   <input type="submit" class="button" name="department" value="Department" />
   <input type="submit" class="button" name="locations" value="Locations" />
   <input type="submit" class="button" name="containers" value="Containers" />
   </form>
  <?php
   
   if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['department'])){
	   insertDept();
   }
   if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['locations'])){
           insertLoc();
   }
   if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['containers'])){
           insertCont();
   }
   
   function insertDept(){
	  $selectD = "SELECT * FROM Department";

	  $r=mysqli_query($con, $selectD);
	  	echo "<table border='1'>
		     <thead>
		      <tr>
		      	<th> Office Address </th>
			<th> Contact Info </th>
			<th> Office Hours </th>
			<th> Department Name </th>
		      </tr>
		    </thead>";
	   while($row=mysqli_fetch_array($r)){
		echo "<tr>";
		echo "<td>" . $row['OfficeAddress'] . "</td>";
		echo "<td>" . $row['ContactInfo'] . "</td>";
		echo "<td>" . $row['OfficeHours'] . "</td>";
		echo "<td>" . $row['DepartmentName'] . "</td>";
		echo "</tr>";
	   }
	  echo "</table>";

  	  echo '<br><br>Office Adress: <input type="text" name="address"><br>';
	  echo 'Conatact Info: <input type="text" name="contact"><br>';
	  echo 'Office Hours: <input type="text" name="hours"><br>';
	  echo 'Department Name: <input type="text" name="deptname"><br>';
	
	  $address = $_POST["address"];
	  $contact = $_POST["contact"];
	  $hours = $_POST["hours"];
	  $name = $_POST["deptname"];


	  echo "<input type='submit' name='insert' value='Insert'>";
	
	  if(isset($_POST['insert'])){
		  echo '$address, $contact, $hours, $name';
		  $insert = "INSERT INTO Department (OfficeAddress, ContactInfo, DepartmentName)
		  VALUES ('$address', '$contact', '$hours', '$name')";
		  $rs=mysqli_query($con, $insert);
	  	if(mysqli_affected_rows($rs) == 1){
		  echo "<br>Department successfully inserted";
		  }
	  }
	  exit;
   }
   function insertLoc(){
	   $selectR = "SELECT * FROM RecyclingLocation";

	   $r=mysqli_query($con, $selectR);
                echo "<table border='1'>
                     <thead>
                      <tr>
                        <th> Location Address </th>
                        <th> County </th>
                        <th> Type Of Locations</th>
			<th> Hours </th>
			<th> Contact Info </th>
 			<th> Department Address </th> 
			<th> Map Link </th>
                      </tr>
                    </thead>";
           while($row=mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['County'] . "</td>";
                echo "<td>" . $row['TypeOfLocation'] . "</td>";
		echo "<td>" . $row['Hours'] . "</td>";
		echo "<td>" . $row['ContactInfo'] . "</td>";
		echo "<td>" . $row['DepartmentAddress'] . "</td>";
		echo "<td>" . $row['MapLink'] . "</td>";
                echo "</tr>";
	   }
	   echo "</table>";

	   echo '<br><br>Location Adress: <input type="text" name="address"><br>';
	   echo 'County: <input type="text" name="county"><br>';
	   echo 'Location Type: <input type="text" name="type"><br>';
	   echo 'Hours: <input type="text" name="hours"><br>';
           echo 'Conatact Info: <input type="text" name="contact"><br>';
           echo 'Department Address: <input type="text" name="departAddress"><br>';
	   echo 'MapLink: <input type="text" name="mapLink"><br>';

	   $address = $_POST["address"];
	   $county = $_POST["county"];
   	   $type = $_POST["type"];
  	   $hours = $_POST["hours"];
           $contact = $_POST["contact"];
           $deptAddress = $_POST["departAddress"];
	   $mapLink = $_POST["mapLink"];
		
	   echo '<input type="submit" class="button" name="insert" value="Insert>';
	   
	   if(isset($_POST['insert'])){
           	$insert = "INSERT INTO RecyclingLocation (Adress, County, TypeOfLocation, Hours,  ContactInfo, DepartmentAddress, MapLink)
		  VALUES ('$address', '$county', '$type', '$hours', '$contact', '$deptAddress', '$mapLink')";
	   
	   	$rs=mysqli_query($con, $insert);
	   	if(mysqli_affected_rows($rs) == 1){
		   echo "<br>Recycling Location inserted successfully";
	   	}

	   }
	   exit;
   }
   function insertCont(){
	   $selectC = "SELECT * FROM Container";

	        $r=mysqli_query($con, $selectC);
                echo "<table border='1'>
                     <thead>
                      <tr>
                        <th> Type Of Container </th>
                        <th> Material </th>
                        <th> Number Of Containers</th>
                        <th> Location Address </th>
                        <th> Cost </th>
                      </tr>
                    </thead>";
           while($row=mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td>" . $row['SizeOfContainer'] . "</td>";
                echo "<td>" . $row['Material'] . "</td>";
                echo "<td>" . $row['NumberOfContainers'] . "</td>";
                echo "<td>" . $row['LocationAddress'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
                echo "</tr>";
	   }
	  echo "</table>";


   	   echo '<br><br>Size: <input type="text" name="size"><br>';
           echo 'Material: <input type="text" name="material"><br>';
	   echo 'Number: <input type="text" name="number"><br>';
	   echo 'Location Adress: <input type="text" name="address"><br>';
	   echo 'Cost: <input type="text" name="cost"><br>';

	   $size = $_POST["size"];
	   $material = $_POST["material"];
	   $number = $_POST["number"];
	   $address = $_POST["address"];
           $cost = $_POST["cost"];
	  
	   echo '$size, $material, $number, $address, $cost';
	   echo '<form method="post">
		 <input type="submit" class = "button" name="insert" value="Insert">
		 </form>';
	   
	   if(isset($_POST['insert'])){

           	$insert = "INSERT INTO Container (SizeOfContainer, Material, NumberOfContainers, LocationAddress, Cost)
                  VALUES ('$size', '$material', '$number', '$address', '$cost')";
	   
	   	$rs=mysqli_query($con, $insert);

	   	if(mysqli_affected_rows($rs) == 1){
		   echo "<br>Container inserted successfully";
	   	}
	   }
	   exit;
   }
   mysqli_close($con);
  ?>
 </body>
</html>
