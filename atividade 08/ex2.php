<?php
  for($i=1; $i <= 20; $i++) 
  {
    $nota = rand(1,20);
    if($nota < 8) 
    {
      echo 'REPROVADO- A nota do aluno <span style="color.#0000cc">'.$i. '</span> é <span style="color:#0000cc">'. $nota . '</span><br>';
    }
    elseif($nota > 8 && $nota < 9.4)
    {
        echo 'Admitido a Exame- A nota do aluno <span style="color.#0000cc">'.$i. '</span> é <span style="color:#0000cc">'. $nota . '</span><br>';
    }
    elseif($nota > 9.5 && $nota < 20){
        echo 'APROVADO- A nota do aluno <span style="color.#0000cc">'.$i. '</span> é <span style="color:#0000cc">'. $nota . '</span><br>';
    }
  }
?>