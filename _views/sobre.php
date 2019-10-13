<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Sobre | ADS Music Class</title>
	<meta name="keywords" content="Tudo sobre ADS Music Class"/>
	<meta name="description" content="Explicações gerais sobre as aulas de música do instrutor Alcides Augusto Bezerra Neto"/>
	<meta name="author" content="Alcides Augusto Bezerra Neto"/>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--<link rel="icon" href="_imagens/favicon.ico"/>	-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="_views/_styles/reset_CSS3.css"> -->
	<link rel="stylesheet" type="text/css" href="/_views/_styles/responsividade.css">
	<link rel="stylesheet" type="text/css" href="/_views/_styles/theme.css">
</head>
<body>
	<?php require_once 'hierarquiaAbsoluta.php'; ?>
	<div id="interface" class="row">
		<h1>Sobre</h1>
		<?php require_once "{$hierarquiaAbsoluta}_views/_pieces/mainNav.php"; ?>
		<section class="corpo">
			<article>
				<h2>O que é ADS Music Class</h2>
				<p>A ADS Music  Class é um projeto idealizado por Alcides Augusto Bezerra Neto com o objetivo de ensinar pessoas evangélicas a tocar violão e teclado, além da teoria musical, que capacita o músico a atuar de forma mais profissional e coletiva.</p>
				<h2>Quem é Alcides Augusto Bezerra Neto</h2>
				<p>Brasileiro, casado, nascido em 02/02/1990 em Recife-Pe e músico desde a adolescência. Gosta de estudar, pesquisar, desenvolver projetos tecnológicos e ensinar. Já ensinou várias pessoas a tocar viõlão e teclado em sua igreja e agora está abrangendo o sistema para o canal informatizado a fim de alcançar mais alunos. É ele também quem está desenvolvendo este site.</p>
				<h2>Quem pode ser um aluno</h2>
				<p>Qualquer interessado pode se matricular.</p>
				<h2>Qual o preço a ser pago</h2>
				<p>O curso é inteiramente gratuito pois entendemos que há uma demanda muito grande de pessoas que querem aprender mas não tem recursos para pagar as aulas. Para expandir os resultados do projeto ao máximo, não foi imposta nenhuma taxa de matrícula, de material ou mensalidades. </p>
				<h2>Como a ADS Music  Class se sustenta</h2>
				<p>Eu, Alcides Augusto B Neto, agradeço a Deus pela oportunidade de executar este projeto com os recursos que Ele me deu. Só cheguei a este ponto graças a atuação bondosa dEle.</p>
				<p>Se você quiser abranger mais este trabalho, seja um aluno, um divulgador voluntário, ou um doador. E que Deus lhe abençoe como me tem abençoado!</p>
				<h2>Como fazer uma doação?</h2>
				<p>Infelizmente o servidor deste site não permite uma página de doações, assim estamos impedidos de divulgar aqui os nossos dados bancários. Mas você pode <a target="_blank" href="<?= $hierarquiaAbsoluta?>contato">pedir os dados bancários por email</a>. Responderemos o quanto antes.</p>
			</article>
		</section>
		<footer id="rodape">
			<?php require "{$hierarquiaAbsoluta}_views/_pieces/rodape.php"; ?>
		</footer>
	</div>
</body>
</html>