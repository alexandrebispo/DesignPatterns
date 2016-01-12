<?php
require_once __DIR__ . "/../vendor/autoload.php";

use DP\Elements\Input;
use DP\{Form,Validator,Request};

$validator = new Validator(new Request());

$form1 = new Form($validator);
$inputNome = new Input(['type' => 'text', 'name' => 'nome']);
$inputSubmit = new Input(['type' => 'submit', 'value' => 'Enviar']);
$form1->addField($inputNome)->addField($inputSubmit);

$form2 = new Form($validator);
$labelNome = $form2->createField('LABEL',['text'=>"Nome",'for'=>'inputNome']);
$textNome = $form2->createField('input',['type'=>'text','name'=>'nome','value'=>'Joãozinho','id'=>'inputNome']);
$form2Submit = $form2->createField('input',['type'=>'submit','value'=>'Enviar Form2']);

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
echo '<hr />';
$form2->addField($labelNome)->addField($textNome)->addField($form2Submit)->render();
?>
</body>
</html>