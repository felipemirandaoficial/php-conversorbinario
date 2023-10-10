<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de binarios</title>
	<link rel="shortcut icon" href="https://felipemirandaoficial.github.io/php-conversorbinario/api/ifms.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://felipemirandaoficial.github.io/php-conversorbinario/api/css/style.css">
	<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            background-color:#1d1d1d;
            text-align: center;
            width: 100%;
            margin: auto auto;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
	    color:white;
        }

        table {
            width: 400px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        input[type="number"],input[type="text"]  {
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
		
		.result {
            text-align: left;
            margin: auto;
            width: 70%;
            margin-top: 30px;
        }

        .result p {
            margin-bottom: 10px;
        }
        .results {
			text-align: center;
			margin: 0 auto;
            margin-top: 20px;
        }
    </style>
</head>
<body class='minhaclasse'>
    <div id="fundo" class="container">
    <h2>Conversor Decimal e Binário</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <th>Decimal:</th>
                <td><input type="number" name="decimal" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Converter Decimal para Binário"></td>
            </tr>
        </table>
    </form>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <th>Binário:</th>
                <td>
                    <input type="text" name="binary" pattern="[0-1]+" title="Digite apenas 0 e 1" required>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Converter Binário para Decimal"></td>
            </tr>

        </table>
    </form>

    <table>
    <tr>
        <form action="https://ifms.vercel.app/algoritmos/" method="get">
            <button class='bt_voltar' type='submit'>Voltar</button>
        </form>
    </tr>
    </table>

    <div class="result">
        <?php
        //ou pode usar o decbin($decimal)
        function decimalToBinary($decimal)
        {
            $binary = '';
            while ($decimal > 0) {
                $bit = $decimal % 2;
                $binary = $bit . $binary;
                $decimal = (int)($decimal / 2);
            }
            return $binary === '' ? '0' : $binary;
        }
       //ou pode usar o bindec($decimal)
        function binaryToDecimal($binary)
        {
            $decimal = 0;
            $length = strlen($binary);
            for ($i = 0; $i < $length; $i++) {
                $bit = (int)$binary[$length - 1 - $i];
                $decimal += $bit * pow(2, $i);
            }
            return $decimal;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["decimal"])) {
                $decimal = $_POST["decimal"];
                $binary = decimalToBinary($decimal);
                echo '<div class="results">
				<h3>Resultado:</h3><p>Decimal: ' . $decimal . '</p>
				<p>Binário: ' . $binary . '</p>
				</div>';
            } elseif (isset($_POST["binary"])) {
                $binary = $_POST["binary"];
                $decimal = binaryToDecimal($binary);
                echo '<div class="results"><h3>Resultado:</h3>
				<p>Binário: ' . $binary . '</p>
				<p>Decimal: ' . $decimal . '</p>
				</div>';
            }
        }
        ?>
    </div>
    </div>
    </div>
    <script src="https://felipemirandaoficial.github.io/php-conversorbinario/api/js/mobile.js"></script>
</body>
</html>
