<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Calculadora Regra de Três</title>
</head>
<body>
    <h1>Regra de Três Simples</h1>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $x = ($b * $c) / $a;
        $xFormatado = number_format($x, 2, ',', '.');
    }
    ?>
    <div class="tudo">
        <form action="#" method="post">
            <div class="container">
                <span>
                    <input type="number" name="a" id="a" step="any" placeholder="Valor de A" required value="<?php echo $a; ?>">
                </span>
                <span class='estPara'>ESTÁ PARA</span>
                <span>
                    <input type="number" name="b" id="b" step="any" placeholder="Valor de B" required value="<?php echo $b; ?>">
                </span>
            </div>

            <div id='assComo'>ASSIM COMO</div>

            <div class="container">
                <span>
                    <input type="number" name="c" id="c" step="any" placeholder="Valor de C" required value="<?php echo $c; ?>">
                </span>
                <span class='estPara'>ESTÁ PARA</span>
                <span>
                    <div id="x" class="x"><?php echo isset($xFormatado) ? $xFormatado : 'X'; ?></div>
                </span>
            </div>

            <div class='containerBtns'>
                <input class="calcular" type="submit" value="CALCULAR">
                <div id="resetContainer">
                    <input type="reset" value="LIMPAR" id="reset" onclick="limparCampos(event)">
                    <span id="resetText" onclick="limparCampos(event)">ou apenas R</span>
                </div>
            </div>
            
            <div></div>
        </form>
    </div>

    <script>
        document.addEventListener('keydown', function (event) {
            if (event.key === 'R' || event.key === 'r') {
                event.preventDefault();
                limparCampos(event);
            }
        });

        function limparCampos(event) {
            event.preventDefault()
            document.getElementById('a').value = '';
            document.getElementById('b').value = '';
            document.getElementById('c').value = '';
            document.getElementById('x').innerHTML = 'X';
        }    
    </script>
</body>
</html>