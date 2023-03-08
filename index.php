<?php
/*
//Lendo arquivo
      if(file_exists('exemplo.xml')){
        $xml = simplexml_load_file('exemplo.xml');
        echo $xml->informacoes->item->title;
      }else{
        echo 'arquivo não encontrada';
      }
//Criando arquivo

$test = ['bla'=>'bla', 'foo'=>'bar','array'=>['stack'=>'overflow']];
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($test,[$xml,'addChild']);
file_get_contents('exemplo.xml',$xml->asXML());
*/
/*decodificando
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$arr=json_decode($json,true);


echo $arr['a'];
*/

$arr = ['nome'=>'darth','idade'=>20];
$json = json_encode($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="conect.js"></script>
</body>
</html>