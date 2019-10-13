<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Agenda de Aulas | ADS Music Class</title>
	<meta name="keywords" content="Agenda de aulas"/>
	<meta name="description" content="Tabela com dia de aulas, assunto e trabalho enviado"/>
	<meta name="author" content="Alcides Augusto Bezerra Neto"/>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--<link rel="icon" href="_imagens/favicon.ico"/>	-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/_views/_styles/responsividade.css">
	<link rel="stylesheet" type="text/css" href="/_views/_styles/theme.css">
</head>
<body>
	<?php require_once 'hierarquiaAbsoluta.php'; ?>
	<div id="interface" class="row">
		<h1>Agenda de aulas</h1>
		<?php require_once "{$hierarquiaAbsoluta}_views/_pieces/mainNav.php"; ?>
		<section class="corpo">
			<article>
				<p>A agenda serve para guiar o aluno e o instrutor quanto ao conteúdo de cada aula. É imprescindível que o aluno, ao faltar, busque o assunto ministrado e o assimile para que, na próxima aula, haja continuação conforme planejado.</p>
				<iframe style="width: 100%; height: 1000pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTu3HFv9umhdMJ2gPMVE0mLt-9Y-5tBn8TwDKwlFGqSTJ48v-s3k2p6SDnuAWuYw0aaehSmcEuZhrDW/pubhtml?widget=true&amp;headers=false"></iframe>
				<iframe style="width: 100%; height: 1000pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ97A0kxDd20gSiZmJMzSdX3XnFZymw7uEEkejyX4omW1cQ_e5YmFaMxYwRynt-B13ZzGywGBt5ulyr/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
			</article>
		</section>
		<footer id="rodape">
			<?php require "{$hierarquiaAbsoluta}_views/_pieces/rodape.php"; ?>
		</footer>
	</div>
</body>
</html>