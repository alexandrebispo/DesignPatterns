<?php
require_once __DIR__ . "/../vendor/autoload.php";

use DP\Elements\Input;
use DP\Form;

$form1 = new Form;
$inputNome = new Input(['type' => 'text', 'name' => 'nome']);
$inputSubmit = new Input(['type' => 'submit', 'value' => 'Enviar']);
$form1->addField($inputNome)->addField($inputSubmit);
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Design Patterns</title>
</head>
<body>
<?php
$form1->render();
?>
</body>
</html>