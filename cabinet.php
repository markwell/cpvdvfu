<!DOCTYPE html>
<html lang="ru">
	<head>
		<?php include ('templates/cpv_2015.06/head.php'); ?>
		<title>Центр подготовки волонтёров - Личный кабинет</title>
	</head>

	<body class="cabinet">
		<?php include ('templates/cpv_2015.06/header.php'); ?>
		<main role="main">
			<div id="main">
				<div class="post-area clear-after">	
					<!-- ?php include ('users/administrator/cabinet/cabinet.php'); ?> -->
					<!-- ?php include ('users/coordinators/cabinet/cabinet.php'); ?> -->
					<!-- ?php include ('users/organizers/cabinet/cabinet.php'); ?> -->
					<?php include ('users/volunteers/cabinet/cabinet.php'); ?>
				</div>
			</div>
		</main><!-- main -->

		<?php include ('templates/cpv_2015.06/footer.php'); ?>

		<script src="https://code.jquery.com/jquery.js"></script>	
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/npm.js"></script>
		<script>
			$('#CabinetTab a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
			})
		</script>
	</body>
</html>