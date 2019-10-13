function turma1f() {
	window.alert("Você é da turma T1");
	var i = 0;
	var x = document.getElementsByClassName("turma2");
	var y = document.getElementsByClassName("turma1");
	for (i = 0 ; i < x.length ; i++) {
		x[i].style.display = "none";
	}
	for (i = 0 ; i < y.length ; i++) {
		y[i].style.display = "block";
	}
}

function turma2f() {
	window.alert("Você é da turma T2");
	var i = 0;
	var x = document.getElementsByClassName("turma1");
	var y = document.getElementsByClassName("turma2");
	for (i = 0 ; i < x.length ; i++) {
		x[i].style.display = "none";
	}
	for (i = 0 ; i < y.length ; i++) {
		y[i].style.display = "block";
	}
}