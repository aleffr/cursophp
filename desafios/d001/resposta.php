<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["numero"];
            $numAnt = $num - 1;
            $numPos = $num + 1;
            
            echo "<p>O número escolhido foi $num
                 <BR>O seu antecessor é $numAnt
                 <BR>O seu sucessor é $numPos</p>
            ";
            //U+2B05 U+FE0F
        ?>
        <button onclick="javascript:history.go(-1)"> &#x2B05 Voltar</button>
        
        
    </main>
</body>
</html>