<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lops and arrays</title>
</head>
<body style="background-color: white;">
    <div style="background-color: black"> <center><h1>Loops and arrays</h1></center></div>

    <?php
    $name = array("jessica", "novita", "devona");

   echo "<h2 style='color: #455A64;'>list of names:</h2>";
   for($i=0;$i<count($name);$i++){
    echo $name[$i] . "<br>";
   }

    echo "<h2 style='color: #455A64;'> list of my favourite food:</h2>";
    $foods = array("burger", "pizza", "ice cream", "candy");
    foreach($foods as $food){
        echo $foods . "<br>";
    }

    $pet = array("dog", "cat", "rabbit", "hamster");

    echo "<h2 style='color#455A64'>List of my favourite animals:</h2>";
    for($i=0;$i<count($pet);$i++){
        echo $i+1 . ". " . $pet[$i] . "<br>";
    }
    ?>
</body>
</html>