<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Conteúdo | ADS Music Class</title>
	<meta name="keywords" content="Conteúdo das aulas de música"/>
	<meta name="description" content="Conteúdo das aulas de música organizado de maneira a seguir o andamento das aulas"/>
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
		<h1>Conteúdo</h1>
		<?php require_once "{$hierarquiaAbsoluta}_views/_pieces/mainNav.php"; ?>
		<section class="corpo">
			<article>
				<h2>Como conseguir material para estudar?</h2>
				<p>A principal fonte de conhecimento deste curso são as aulas presenciais. Nelas eu, Alcides Augusto, abordo os capítulos pré-definidos na <a target="_blank" href="<?= $hierarquiaAbsoluta ?>agenda">Agenda</a> da melhor forma possível.</p>	
				<p>Em segundo lugar, estão os livros de teoria musical. Muitos autores tem esse título. O que eu mais conheço e sigo é o de Bohumil Med. Mas o aluno deve ser livre para optar pela literatura que melhor lhe convier. Inclusive há vários textos gratuitos de fácil acesso na internet.</p>
				<p>Em terceiro lugar, ou talvez em segundo mesmo, estão as minhas anotações de aula. Vou postá-las na medida do possível.</p>
				<p>Em quarto lugar, mas sendo um dos mais importante, estão as fontes alternativas como os vídeos do youtube que tratam do assunto. Lá há muitos canais de qualidade.</p>
				<p>Em quinto lugar, mas é o que eu acho mais importante, é o contato direto com o instrutor. Procure tirar suas dúvidas diretamente comigo através do whatsapp (peça a ele pelo menu <a target="_blank" href="<?= $hierarquiaAbsoluta ?>contato">Contato</a>). Você também pode consultar outros músicos ou os demais alunos do curso que tem bom aproveitamento. Fazendo isso, você aprende a não depender de uma só pessoa e acaba descobrindo como é bom trocar ideia com os demais músicos - ninguém sabe de tudo.</p>
			</article>
		</section>
		<footer id="rodape">
			<?php require "{$hierarquiaAbsoluta}_views/_pieces/rodape.php"; ?>
		</footer>
	</div>
</body>
</html>