<?php
$cont = 1;
$reprovados = 0;
$aprovados = 0;
$exame = 0;

function notas($aluno, $nota1, $nota2){
			$nota1 = $nota1;
			$nota2 = $nota2;

			$media = ($nota1 + $nota2)/2;
			
			if($media < 0 ){
				echo "nota invalida</br>";
			}elseif($media <= 3) {
				echo "Reprovado</br>";
				global $reprovados;
				$reprovados++;
			}elseif($media > 3 && $media <= 7){
				echo "Exame</br>";
			}elseif($media > 7){
				echo "Aprovado</br>";
			}

			echo "a media do aluno $aluno é $media</br></br>";	
}

while ($cont <= 6) {
	if($cont == 1){
		notas($cont, 3, 4);
	}
		if($cont == 1){
		notas($cont, 10, 8);
	}
		if($cont == 2){
		notas($cont, 7, 4);
	}
		if($cont == 3){
		notas($cont, 8, 4);
	}
		if($cont == 4){
		notas($cont, 2, 4);
	}
		if($cont == 5){
		notas($cont, 0, 4);
	}
		if($cont == 6){
		notas($cont, 1, 4);
	}

	$cont++;
}

echo "Reprovados: ". $reprovados;
echo "Aprovados". $aprovados;

?>