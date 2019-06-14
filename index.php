<?php

include('db.php');

$query = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";

$post = mysqli_query($connection,$query);

?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<title>Dashcroft Jquery Exmp</title>

			<!-- bootstrap 3.3.7 cdn css -->
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel = "stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/custom.css">
		</head>

			<body>
				<div class="container">
					<header><h1>Dashcroft - Jquery Example: Message Board</h1></header>
					<!--This is where the posts will go -->
					<div id="board">
						<ul class="list-group">
							
							<?php

								while($rows = mysqli_fetch_assoc($post)):

									echo"<li class='list-group-item'>".$rows['date']."--".$rows['name']."wrote <br>".$rows['post'].'</li>';
								endwhile;
							?>
						</ul>
					</div>
					
					<div class="col-md-6 col-md-offset-3">
						<form action="" class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Your Name">
							<textarea class="form-control" name="" id="post" cols="30" rows="10"></textarea>
							<button class="btn btn-success pull-right" id="sendit" data-key='sent'>POST</button>
						</form>
					</div>
				</div>

				<!-- Jquery CDN -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<!-- bootstrapp 3.3.7 cdn js -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
				<!-- ckeditor -->
				<script src="//cdn.ckeditor.com/4.11.4/basic/ckeditor.js"></script>
				<!-- javascript custom -->
				<script src="js/js1.js" type="text/javascript"></script>
			</body>
	</html>
