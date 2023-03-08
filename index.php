<?php
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
?>