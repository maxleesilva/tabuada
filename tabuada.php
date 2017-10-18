<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <Title>Tabuada</Title>
    </head>

    <body>
    <p>Exercício: Crie um script php que receba um número a partir de um formulário, e que imprima na tela qual o maior e menor valor fornecido.</p>
    <hr><br/>   
    </body>

<form action="tabuada.php" method="get">
    <style>
        div#tabuada{
            text-align: center;
            width: 190px;
            background-color: darkseagreen;
            box-shadow: 0px 0px 10px grey;
            padding: 10px;
        }
    </style>
    
    <div id="tabuada">
        <h1>Tabuada</h1>
            <h3>Digite um número:
                <input name="num1" type="int"/></h3>
        <input type="submit" value="Ok"/><br>
    
    <?php
            $a = @$_REQUEST["num1"];
            for ($i=1; $i <= 10; $i++){
                $total = $i * $a;
                print "<br>";
                print "$i X $a = $total<br>";
            }
            
    ?> 
    </div>