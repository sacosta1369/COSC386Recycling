<DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name"viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="pageStyle.css">
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Sora:wght@800&display=swap" rel="stylesheet">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
		<link rel="manifest" href="site.webmanifest">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<title>Recycling Database Interface</title>
	</head>
	<body>
		<script src="pageScript.js"></script>
		<!-- Menu bar at top of page -->
		<div id="menu">
			<!-- Lower Eastern Shore Recycling Logo -->
			<div id="logo" class="LogoClass">
				
			</div>

			<!-- Recycling dropdown menu -->
			<div id="recycle" class="menuBox"><span>Recycle &#9660;</span>
			</div>	

			<!-- Search tab -->
			<div id="search" class = "menuBox"><span>Search</span>
			</div>

			<!-- Log in tab -->
			<div id="admin" class = "menuBox">
				<span>Log In</span> <img src="LogIn.png" alt="A log-in logo" id="login" class="menuImage">
			</div>
			
			<!-- Contact info tab -->
			<div id="contact" class = "menuBox"><span>Contact</span>
				<img src="ContactInfo.png" alt="A contact logo" id="contactinfo" class="menuImage"> 
			</div>
		</div>
		
		<!--
	<form method=post legend="Database query" action="SearchScript.php">
		<input type="text" name="search" id="searchInput" placeholder="Enter your search here:">
		<input type="submit" id="submitSearch" value="&#128269;">
	</form>	
	-->
		
	<div id="textDescription">
		<h1 id="headerText">Welcome to the Maryland TriCounty Recycling Database Interface</h1>

	</div>

	<form id="searchbar">
		<input type="text" name="search" class="roundedBar">
		<input type="submit" class="sub" value="">
	</form>

	<?php
               	if ($connection=@mysqli_connect('localhost', 'jcomfort1', 'Waypointer2022', 'RecyclingDB'))
                {
                        print '<p id="confirm">Successfully connected to MySQL. </p>';
                }

                mysqli_close($connection);
		
		$searchVal = $_POST['search'];

		$query = "SELECT * FROM Department";

                echo "<div id='phpDiv'>";

                $result = mysqli_query($connection, $query);

                echo "<table border = '1'>
                        <thead>
                                <tr>
                                        <th> Department Name </th>
                                        <th> Contact Info </th>
                                        <th> Office Address </th>
                                        <th> Office Hours </th>
                                </tr>
                        </thead>";

                while($row=mysqli_fetch_array($result))
                {
                        echo "<tr>";
                        echo "<td>" . $row['DepartmentName'] . "</td>";
                        echo "<td>" . $row['ContactInfo'] . "</td>";
                        echo "<td>" . $row['OfficeAddress'] . "</td>";
                        echo "<td>" . $row['OfficeHours'] . "</td>"; 
                        echo "</tr>";
                }

                echo "</table>";
                echo "</div>";
                mysqli_close($connection);
	?>
		<!--
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d525405.9172451661!2d-75.85674549345423!3d38.34305026752715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b9aa4972679671%3A0xa1851f209ca0e3ae!2sWicomico%20County%2C%20MD!5e0!3m2!1sen!2sus!4v1648993091737!5m2!1sen!2sus" style="border:3px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="LandingMap"></iframe>
		-->

	</body>
</html>
