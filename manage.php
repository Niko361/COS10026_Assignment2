<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="php for manageattempts.html"/>
	<meta name="keywords" content="PHP, MySql1"/>
	<meta name="author" content="Jerrold Wong Youn Zhuet" />
	<link href="styles/style.css" rel="stylesheet"/>
  
	<!--Reference to external responsive CSS File-->
	<link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
		
	<title>Query for server</title>
</head>
<body>

<?php include 'header.inc'; ?>

<?php include 'menu.inc'; ?>


  <div id="content">
  
<?php
	require_once("settings.php");
	$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
	if(!$conn){
		echo "<p>Database connection failure</p>";
	}else{
		$listattempt = htmlspecialchars(trim($_GET["listattempt"]));
		if($listattempt == null){
			$deleteattempt = htmlspecialchars(trim($_GET["deleteattempt"]));
			
			if($deleteattempt == null){
				$changescoreID = htmlspecialchars(trim($_GET["changescoreID"]));
				$changescorenumber = htmlspecialchars(trim($_GET["changescorenumber"]));
				$changescorevalue = htmlspecialchars(trim($_GET["changescorevalue"]));
				
				if($changescoreID == null OR $changescorenumber == null OR $changescorevalue == null){
					$querymultichoice = htmlspecialchars(trim($_GET["querymultichoice"]));
					
				}
			}
		}
		
		$sql_table="attempts";
		
		if($listattempt != null){
			$query="SELECT * FROM attempts WHERE studentID LIKE '$listattempt'";
			if($query == null){
				$listattempt = explode(" ", $listattempt);
				if($listattempt.count > 2){
					echo "Please enter only first name and last name";
				}					
				$firstname = $listattempt[0];
				$lastname = $listattempt[1];
				$query = "SELECT * FROM attempts WHERE firstname LIKE '$firstname' AND lastname LIKE '$lastname'";
			}	
		}else if($deleteattempt != null){
			$query="DELETE FROM attempts WHERE studentID LIKE '$deleteattempt'";
			
		}else if($changescoreID != null AND $changescorenumber != null AND $changescorevalue != null){
			$query="UPDATE attempts SET score = '$changescorevalue' WHERE studentID LIKE '$changescoreID' AND attemptnumber LIKE '$changescorenumber'";
			
		}else if($querymultichoice != null){
			if($querymultichoice == "a"){
				$query = "SELECT * FROM attempts";
			}else if($querymultichoice == "b"){
				$query = "SELECT studentID, firstname, lastname FROM attempts WHERE attemptnumber = 1 AND score = 100";
			}else if($querymultichoice == "c"){
				$query = "SELECT studentID, firstname, lastname FROM attempts WHERE attemptnumber = 2 AND score < 50";
			}
		}
		
		$result = mysqli_query($conn, $query);
	
		if(!$result){
			echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		} else {
			if($listattempt != null){
				echo "<table style=\"border:1px solid black\">\n";
				echo "<tr>\n"
					."<th scope=\"col\">Student Number</th>\n"
					."<th scope=\"col\">Attempt Number</th>\n"
					."<th scope=\"col\">First Name</th>\n"
					."<th scope=\"col\">Last Name</th>\n"
					."<th scope=\"col\">Score</th>\n"
					."<th scope=\"col\">Date Time</th>\n"
					."</tr>\n";
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n";
					echo "<td>",$row["studentID"],"</td>\n";
					echo "<td>",$row["attemptnumber"],"</td>\n";
					echo "<td>",$row["firstname"],"</td>\n";
					echo "<td>",$row["lastname"],"</td>\n";
					echo "<td>",$row["score"],"</td>\n";
					echo "<td>",$row["date_time"],"</td>\n";
					echo "</tr>\n";
				}
				echo "</table>\n";
				
			}else if($deleteattempt != null){
				echo "The student's attempt has been deleted.";
				
			}else if($changescoreID != null AND $changescorenumber != null AND $changescorevalue != null){
				echo "The results have been changed.";
				
			}else if($querymultichoice != null AND $querymultichoice == "a"){
				echo "<table style=\"border:1px solid black\">\n";
				echo "<tr>\n"
					."<th scope=\"col\">Student Number</th>\n"
					."<th scope=\"col\">Attempt Number</th>\n"
					."<th scope=\"col\">First Name</th>\n"
					."<th scope=\"col\">Last Name</th>\n"
					."<th scope=\"col\">Score</th>\n"
					."<th scope=\"col\">Date Time</th>\n"
					."</tr>\n";
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n";
					echo "<td>",$row["studentID"],"</td>\n";
					echo "<td>",$row["attemptnumber"],"</td>\n";
					echo "<td>",$row["firstname"],"</td>\n";
					echo "<td>",$row["lastname"],"</td>\n";
					echo "<td>",$row["score"],"</td>\n";
					echo "<td>",$row["date_time"],"</td>\n";
					echo "</tr>\n";
				}
				echo "</table>\n";
				
			}else if($querymultichoice != null AND ($querymultichoice == "b" OR $querymultichoice == "c")){
				echo "<table style=\"border:1px solid black\">\n";
				echo "<tr>\n"
					."<th scope=\"col\">Student Number</th>\n"
					."<th scope=\"col\">First Name</th>\n"
					."<th scope=\"col\">Last Name</th>\n"
					."</tr>\n";
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n";
					echo "<td>",$row["studentID"],"</td>\n";
					echo "<td>",$row["firstname"],"</td>\n";
					echo "<td>",$row["lastname"],"</td>\n";
					echo "</tr>\n";
				}
				echo "</table>\n";
				
			}
		
			mysqli_free_result($result);
		}
			
		mysqli_close($conn);
	}
?>
</div>

<?php include 'footer.inc';?>

</body>
</html>
