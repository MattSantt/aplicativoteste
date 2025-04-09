<?php
$aluno = 1;
$reprovados = 0;
$aprovados = 0;
$exame = 0;

function notas($aluno, $nota1, $nota2){
	
			$media = ($nota1 + $nota2)/2;
            
            echo "a media do aluno $aluno é $media</br>";	
			
			if($media < 0 || $media > 10){
				echo "nota invalida<br><br>";
			}elseif($media <= 3) {
				echo "o aluno $aluno foi Reprovado<br><br>";
				global $reprovados;
				$reprovados++;
			}elseif($media > 3 && $media <= 7){
				echo "o aluno $aluno foi para o Exame<br><br>";
                global $exame;
                $exame++;
			}elseif($media > 7){
				echo "o aluno $aluno foi Aprovado<br><br>";
                global $aprovados;
                $aprovados++;
			}
}

while ($aluno <= 6) {
	if($aluno == 1){
		notas($aluno, 8, 10);
	}
		if($aluno == 2){
		notas($aluno, 10, 8);
	}
		if($aluno == 3){
		notas($aluno, 7, 4);
	}
		if($aluno == 4){
		notas($aluno, 8, 4);
	}
		if($aluno == 5){
		notas($aluno, 2, 4);
	}
		if($aluno == 6){
		notas($aluno, 0, 4);
	}

	$aluno++;
}

echo "Reprovados: $reprovados <br>";
echo "Aprovados: $aprovados <br>";
echo "Exame: $exame";

?>