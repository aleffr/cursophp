<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
      // 0x = HEX, 0b = BIN, 0 = OCT
      //  $num = 0x1A;
      //  echo "0 valor da variável é $num";

      //$v = 300;
      //var_dump($v);

      //$num = 3e2; // 3 x 10^2
      //echo "0 valor da variável é $num";
      
      //$num = (int) 3e2; // 3 x 10^2 >> coercao
      //echo "0 valor da variável é $num";
      
      //$num = (real) "950";
      //var_dump($num);
      
      //$casado = true;
      //var_dump($casado);
      //print "O valor para casado é $casado";

      //$vet = [6, 2, 9, 3, 5];
      //var_dump($vet);
      //echo "O vetor é $vet"; //nao funcionará

      //$vet = [6, 2.5, "Maria", 3, false];
      //var_dump($vet);

      class Pessoa {
        private string $nome;
      }

      $p = new Pessoa;
      var_dump($p);
    ?>
</body>
</html>