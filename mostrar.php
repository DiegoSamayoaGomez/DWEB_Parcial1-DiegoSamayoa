<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo "<h3>Nombre: </h3>".$_POST['nombre'];
    echo "<h3>Genero: </h3>".$_POST['masculino-femenino'];
    echo "<h3>Dia: </h3>".$_POST['dias-semana'];  


    /*
    if (isset($_POST ["submit"])) 
    {
        if(!empty($_POST["diassemana"]))
        {
            echo "<h3> Dia de la semana </h3>";
            foreach($_POST["diassemana"] as $diassemana)
            {                
                echo "<p>" .$diassemana. "</p>";
            }
        }
    }
    
    
*/
?>
  

  

</body>
</html>