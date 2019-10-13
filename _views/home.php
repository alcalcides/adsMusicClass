<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>ADS Music Class | Home</title>
	<meta name="keywords" content="Aula de violão e teclado - Alcides Augusto Bezerra Neto"/>
	<meta name="description" content="Portal para os alunos de música da ADS Music Class"/>
	<meta name="author" content="Alcides Augusto Bezerra Neto"/>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--<link rel="icon" href="_imagens/favicon.ico"/>	-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" type="text/css" href="_views/_styles/reset_CSS3.css">-->
	<link rel="stylesheet" type="text/css" href="/_views/_styles/responsividade.css">
	<link rel="stylesheet" type="text/css" href="/_views/_styles/theme.css">
</head>
<body>
	<?php require_once 'hierarquiaAbsoluta.php'; ?>
	<div id="interface" class="row">
		<h1>#ADS# Music Class</h1>
		<p>Aula de música com Alcides Augusto Bezerra Neto</p>
		<?php require_once "{$hierarquiaAbsoluta}_views/_pieces/mainNav.php"; ?>
		<section class="corpo">
			<article>
				<h2>Bem vindo ao portal do aluno!</h2>
				<p>Aqui o aluno da ADS Music Class encontrará os recursosa dministrativos e pedagógicos que o auxiliarão nos estudos.</p>
				<p>Eu, o instrutor Alcides Augusto, gostaria de parabenizar você, aluno, pela sua iniciativa de aprender música. Vá em frente e não pare nunca!</p>
				<p>Navegue no menu mais acima para se inteirar do que há por aqui. Com o passar das aulas, o site tenderá a ficar cada vez mais informativo!</p>
			</article>
			<aside>
				<h2>Matrículas abertas de 09 a 15/06!</h2>
				<p>Turma 2 - Retiro SSA (Todo sábado das 15 as 17h)</p>
				<p><a target="_blank" href="https://docs.google.com/forms/d/1WOEhoFQdgS72SUCZPKJo-mf5hykKsGaY3g5_KoEBcYQ/edit?usp=sharing">Faça sua matrícula aqui!!</a></p>
				<h2>Grupo do Whatsapp - Turma T2</h2>
				<p>Quem estiver regularmente matriculado na turma T2, poderá participar do grupo fechado de Whatsapp. <b>Só é permitida a entrada para alunos regularmente matriculados.</b></p>
				<p><b>Se</b> você é um dos 16 matriculados, <a target="_blank" href="https://chat.whatsapp.com/DXU4XdJ2NEEEflGejfqDrl">clique aqui para entrar no grupo do whatsapp.</a></p>
			</aside>	
		</section>
		<footer id="rodape">
			<?php require "{$hierarquiaAbsoluta}_views/_pieces/rodape.php"; ?>
		</footer>
	</div>
</body>
</html>