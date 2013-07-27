<?php

include 'DatabaseConnection.php';

$dbobj = new DBConnect();

$dbobj -> connect();

$query = 'select * from `data` order by `time`  DESC';

$results = $dbobj -> sqlQuery($query);
?>

<html>
	<head>
		<title> Homepage of CMS ! </title>
		<link rel="stylesheet"	type="text/css"	href="template/style.css"/>
	</head>
	<body>
		<div id="container">
			<div id="logo">
				<h1><a href="index.php">CMS</a></h1>
				A minimal Content Management System
			</div>
			<br /><br />
			<div id="login-out">
				<a href="admin/index.php">LOGIN</a>
			</div>
			<div id="content">
				<ol>
					<?php while ($row = mysql_fetch_array($results, MYSQL_ASSOC)) {
					?>
					<li>
						<div id="title">
						<a href="article.php?id=<?php echo "{$row['id']}"; ?>"> <?php echo "{$row['name']}"; ?></a>
						</div>
						<?php $postdate = strtotime($row['time']); ?>
						<div id="posttime">
						posted on <?php echo date('jS F Y, h:i A', $postdate); ?>
						</div>
					</li>
					<?php } ?>
				</ol>

			</div>
		</div>
	</body>
</html>