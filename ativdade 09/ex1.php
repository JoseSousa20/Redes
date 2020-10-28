<?php
  for($i=1; $i <= 20; $i++) 
  {
    $nota = rand(1,20);
    $nota2 = rand(1,20);
    $nota3 = rand(1,20);
    $media = round(($nota + $nota2 + $nota3)/3,2);

    if($media >= 9.5) 
    {
      echo 'APROVADO- A nota do aluno <span style="color.#0000cc">'.$i. '</span> é <span style="color:#0000cc">'. $media . '</span><br>';
    }
    elseif($media > 8 && $media < 9.5)
    {
        echo 'RECUPERAÇÃO- A nota do aluno <span style="color.#0000cc">'.$i. '</span> é <span style="color:#0000cc">'. $media . '</span><br>';
    }
    elseif($media <= 8){
        echo 'REPROVADO- A nota do aluno <span style="color.#0000cc">'.$i. '</span> é <span style="color:#0000cc">'. $media . '</span><br>';
    }
  }
?>