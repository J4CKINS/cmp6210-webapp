<!DOCTYPE HTML>
<html>
	<head>
		<title>Book Library</title>
	</head>
	<body>
		<center>
			<h1>Welcome to Online Book Library</h1>
				<?php
				$host='group55-rds-db.chynz6uunsvr.us-east-1.rds.amazonaws.com';
				$user= 'admin';
				$pass='Group55Password!';
				$db='bkldb';
				$s3_url= 'https://group55-s3-public.s3.us-east-1.amazonaws.com';
				
				$conn= new mysqli($host, $user, $pass, $db) or die ("Failed to Connect to DB: %s\n". $conn -> error);
				
				$sql = "SELECT * FROM `Books`";
				$query = $conn->query($sql);
				while($result = $query -> fetch_array(MYSQLI_ASSOC))
				{
					$file_name = $result['ISBN'] . ".jpg";
					$isbn = "ISBN: " . $result['ISBN'];
					$title = "Title: " . $result['Title'];
					$auth = "Author: " . $result['Author'];
					$publisher = "Publisher: " . $result['Publisher'];
					$pub_year = "Publishing Year: " . $result['Pub_year'];
					
					echo "<div class='book'>";
						echo "<img src=\"$s3_url/$file_name\" alt=\"BookCover\" />";
						echo "<div class='book-info'>";
							echo "<h2>$title</h2>";
							echo "<h3>by $auth</h3>";
							echo "<p>Published in $pub_year by $publisher</p>";
							echo "<p>ISBN: $isbn</p>";
						echo "</div>";
					echo "</div>";
					
				}
				?>
		</center>
	</body>
</html>