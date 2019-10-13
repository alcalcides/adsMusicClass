<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Resultados | ADS Music Class</title>
	<meta name="keywords" content="Resultado das avaliações e testes dos alunos da ADS Music Class"/>
	<meta name="description" content="Tabela com o Resultado das avaliações"/>
	<meta name="author" content="Alcides Augusto Bezerra Neto"/>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--<link rel="icon" href="_imagens/favicon.ico"/>	-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/_views/_styles/responsividade.css">
	<link rel="stylesheet" type="text/css" href="/_views/_styles/theme.css">
	<script type="text/javascript" src="/_model/_javascript/escolherTurma.js"></script>
</head>
<body>
	<?php require_once 'hierarquiaAbsoluta.php'; ?>
	<div id="interface" class="row">
		<h1>Resultados</h1>
		<?php require_once "{$hierarquiaAbsoluta}_views/_pieces/mainNav.php"; ?>
		<section class="corpo">
			<article>
				<h2>Notas de trabalhos e provas</h2>
				<p>Cada aluno passará por várias avaliações e trabalhos no decorrer do curso. A ADS Music Class não permite que nenhum aluno tenha redimento inferior a 20% em nenhum momento do curso, caso isso ocorra o aluno estará sujeito ao cancelamento da matrícula.</p>
				<p>Para ser aprovado, é necessário ter nota maior que 7,0 e realizar todas as tarefas avaliativas. Só receberá certificado quem concluir o curso nos parâmetros estabelecidos aqui.</p>
				<button onclick="turma2f()">Turma 2</button>
				<button onclick="turma1f()">Turma 1</button>
				<h2 class="turma2">Média Geral T2</h2>
				<iframe  class="turma2" style="width: 100%; height: 550pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSUeoQN2vFzQUQ6sJzQyEn6AkWZipTC8_ZmRdIDzFrtc7zJnRLaua-HeWmg0RfsHpsdrB_RTt27Xmdk/pubhtml?gid=1536928429&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma2">Pesquisas T2</h2>
				<iframe class="turma2" style="width: 100%; height: 550pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSUeoQN2vFzQUQ6sJzQyEn6AkWZipTC8_ZmRdIDzFrtc7zJnRLaua-HeWmg0RfsHpsdrB_RTt27Xmdk/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma2">Provas surpresa T2</h2>
				<iframe  class="turma2" style="width: 100%; height: 550pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSUeoQN2vFzQUQ6sJzQyEn6AkWZipTC8_ZmRdIDzFrtc7zJnRLaua-HeWmg0RfsHpsdrB_RTt27Xmdk/pubhtml?gid=1966317824&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma2">Provas teóricas T2</h2>
				<iframe class="turma2" style="width: 100%; height: 550pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSUeoQN2vFzQUQ6sJzQyEn6AkWZipTC8_ZmRdIDzFrtc7zJnRLaua-HeWmg0RfsHpsdrB_RTt27Xmdk/pubhtml?gid=1282547965&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma2">Provas práticas T2</h2>
				<iframe class="turma2" style="width: 100%; height: 550pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSUeoQN2vFzQUQ6sJzQyEn6AkWZipTC8_ZmRdIDzFrtc7zJnRLaua-HeWmg0RfsHpsdrB_RTt27Xmdk/pubhtml?gid=2109617681&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma1">Média Geral T1</h2>
				<iframe class="turma1" style="width: 100%; height: 300pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAzg2qZSDZizsu1HZ_eG9AVWyPdI8LmDNyPsnIEoZyYDpDajOdM2n66SVeEF1_0_2WWk1Ci6fJdK1V/pubhtml?gid=1536928429&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma1">Pesquisas T1</h2>
				<iframe class="turma1" style="width: 100%; height: 300pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAzg2qZSDZizsu1HZ_eG9AVWyPdI8LmDNyPsnIEoZyYDpDajOdM2n66SVeEF1_0_2WWk1Ci6fJdK1V/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma1">Provas surpresa T1</h2>
				<iframe class="turma1" style="width: 100%; height: 300pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAzg2qZSDZizsu1HZ_eG9AVWyPdI8LmDNyPsnIEoZyYDpDajOdM2n66SVeEF1_0_2WWk1Ci6fJdK1V/pubhtml?gid=1966317824&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma1">Provas teóricas T1</h2>
				<iframe class="turma1" style="width: 100%; height: 300pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAzg2qZSDZizsu1HZ_eG9AVWyPdI8LmDNyPsnIEoZyYDpDajOdM2n66SVeEF1_0_2WWk1Ci6fJdK1V/pubhtml?gid=1282547965&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
				<h2 class="turma1">Provas práticas T1</h2>
				<iframe class="turma1" style="width: 100%; height: 300pt;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAzg2qZSDZizsu1HZ_eG9AVWyPdI8LmDNyPsnIEoZyYDpDajOdM2n66SVeEF1_0_2WWk1Ci6fJdK1V/pubhtml?gid=2109617681&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
			</article>	
		</section>
		<footer id="rodape">
			<?php require "{$hierarquiaAbsoluta}_views/_pieces/rodape.php"; ?>
		</footer>
	</div>
</body>
</html>