<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Contato | ADS Music Class</title>
	<meta name="keywords" content="Contato com ADS Music Class"/>
	<meta name="description" content="Falar diretamente com os organizadores da ADS Music Class"/>
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
	<script src= <?= "{$hierarquiaAbsoluta}_model/_javascript/scriptsGerais.js" ?> ></script>
	<div id="interface" class="row">
		<h1>Contato</h1>
		<?php require_once "{$hierarquiaAbsoluta}_views/_pieces/mainNav.php"; ?>
		<section class="corpo">
			<article>
				<p>Caso tenha alguma crítica, sugestão ou elogio, por favor, não hesite em nos contactar. Nós da diretoria da ADS Music Class, na pessoa do instrutor Alcides Augusto, teremos o prazer de ler sua mensagem e lhe dar um feedback assim que possível.</p>
			</article>
			<h2>Sua mensagem</h2>
			<form id="contatoEmail" method="post" action=<?= "{$hierarquiaAbsoluta}_controls/contatoPorEmail.php" ?>>
				<p class="umaLinha">	
					<span >Para: </span>
					<input type="email" name="nDestinatario" id="idDestinatario" readonly="readonly" value="alcides@adsmusicclass.ml" class="preenchimento">
				</p>
				<p>
					<label for="idRemetente">De: </label>
					<input type="email" name="nRemetente" id="idRemetente" placeholder="Seu email" required="required" maxlength="80" class="preenchimento">
				</p>
				<p>
					<label for="idAssunto">Assunto: </label>
					<input type="text" name="nAssunto" id="idAssunto" placeholder="Motivo do contato" required="required" maxlength="50" class="preenchimento">
				</p>
				<p>
					<label for="idMensagem">Mensagem: </label>
					<textarea maxlength="500" onkeyup="contarRestantes(this.value, this.maxLength,'caracteresRestantes');" name="nMensagem" id="idMensagem" required="required" class="mensagem"></textarea>
				</p>
				<p id="caracteresDaMensagem">Faltam <span id="caracteresRestantes"></span> caracteres</p>
				<p>
					<label for="idNome">Assinatura: </label>
					<input type="text" name="nNome" id="idNome" placeholder="Seu nome completo" required="required" maxlength="120" class="preenchimento">
				</p>
				<p>
					<input type="submit" name="nEnviar" id="idEnviar" value="Enviar" class="botaoFormulario">
				</p>
			</form>
		</section>
		<footer id="rodape">
			<?php require "{$hierarquiaAbsoluta}_views/_pieces/rodape.php"; ?>
		</footer>
	</div>
</body>
</html>