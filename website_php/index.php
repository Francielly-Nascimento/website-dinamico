<?php
//echo"Website";

$paginas = ['home'=> 'Minha pagina web aqui!','sobre'=>'Estou na pagina sobre','contato'=>'','FAQ'=>'Perguntas frequentes','loja'=>'Conteúdo loja'];
$paginas['contato'] = '<form><input type="text" placeholder="seu nome.."/></form>';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <title>website</title>
    <style type = "text/css">
        *{ margin: 0;
            padding: 0;
            box-sizing:box;
      }
      header{
        background-color:#069;
        padding:8px 10px;
        text-align: center;
      }
      a{
        display:inline-block;
        margin: 0 10px;
        color: white;
        font-size:17px ;

      }


    </style>
</head>
<body>
    <header>
        <?php
        foreach ($paginas as $key => $value) {
            echo '<a href="?page=' .$key.'">'.ucfirst($key).'</a>';
        }

        ?>
</header>
    <!--esse section é para saber em que pagina esta.-->
<section>
<h2><?php

    $pagina =(isset($_GET['page']) ? $_GET['page'] :'home');
    //o if serve para verificar se exite a chave que estou procurando.
    if(!array_key_exists($pagina, $paginas)){
        $pagina ='home';   
    }
    echo ucfirst($pagina);
    
    
    ?></h2>
    <p><?php echo $paginas[$pagina];?></p>
</section>



    <?php
     //echo $paginas['contato'];
    ?>
    
</body>
</html>