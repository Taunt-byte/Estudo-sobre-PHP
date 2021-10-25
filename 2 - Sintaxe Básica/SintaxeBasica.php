<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Basica</title>
</head>
<body>
    <!--O código PHP fica embutido no próprio HTML-->
    <?php
        comandos
    ?>
    <script language=”php”>
        comandos
    </script>
    <?
        comandos
    ?>
    <%
        comandos
    %>


    <!---EXEMPLOS DE COMENTARIOS-->

    <? echo “teste”; #isto é um teste ?>
    <? echo “teste”; //este teste é similar ao anterior ?>

    <?
        echo “teste”; /* Isto é um comentário com mais
        de uma linha, mas não funciona corretamente ?>
        */
    ?>
    <?

        echo “teste”; /* Isto é um comentário com mais
        de uma linha que funciona corretamente
        */

    ?>

</body>
</html>