<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<script type="text/javascript">
			function emailEnviado (feedback) {
				if (feedback) {
					alert("Email enviado com sucesso! Aguarde uma resposta");
					window.location.href="../contato";
				}
				else {
					alert("Erro ao enviar email. Tente novamente");
					window.history.go(-1);
				}
			}
		</script>
	</head>
	<body>
		<?php
			require_once 'hierarquiaAbsoluta.php';
			require_once "{$hierarquiaAbsoluta}_model/enviarEmail/enviarEmail.php";

			$emailDestinatario = "alcides@adsmusicclass.ml";
			$nomeDestinatario = "Alcides - ADS Music Class";
			$emailRemetente = trim($_POST["nRemetente"]);
			$assunto = trim($_POST["nAssunto"]);
			$mensagem = trim($_POST["nMensagem"]);
			$nomeRemetente = trim($_POST["nNome"]);

			$mensagemHTML = "<p>Remetente: $nomeRemetente</p><hr><p style='color: blue;'>$mensagem</p>";

			$envioDeEmail = dispararEmailHTML($emailDestinatario, $nomeDestinatario ,$assunto, $mensagemHTML, $emailRemetente, $nomeRemetente);

			//Feedback e redirecionamento via javascript
			echo "<script>emailEnviado($envioDeEmail)</script>";
		?>
	</body>
</html>		