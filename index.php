<?php
	require("includes/connect.php");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 4 - Dynamische content</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="content">      
        <?php 
            include("includes/header.php");      
            
            if(isset($_GET["page"])){
				$query = "SELECT * FROM onderwerpen WHERE id=" . $_GET["page"];
				$result = $conn->prepare($query);
				$result->execute();
				$row = $result->fetch();
			?>
				<article>
					<h1><?php echo $row["name"]; ?></h1>
					<section id="left">
						<p>
						<?php echo $row["description"]; ?>
						</p>
					</section>
					<section id="right">
						<img src=<?php echo $row["image"]; ?> alt="Book Cover">
					</section>
				</article>
			<?php
            } else { 
                include("includes/home.php");
            }
            
            include("includes/footer.php"); 
        ?>
    </div>   
</body>
</html>