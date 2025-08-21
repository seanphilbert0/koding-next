<!DOCTYPE html>
<html lang="en">
<head>
    <title>type of loops</title>
</head>
<body style="background-color: brown;">
    <?php
    echo "<div style='color: white;'><center><h1>Types of loops</h1></center></div>";
    
    echo "<h2 style='color: #5D4037;'>While loop</h2>";
$x = 0;
while($x < 3){
    echo "this is a example of a while loop<br>";
$x++;
}

echo "<h2 style='color: #5D4037;'>Do while loops</h2>;";
$y = 1;
do{
echo $y . ". This is a example of do while loop<br>";
$y++;
} while($y <= 5);

echo "<h2 style='color: #5D4037;'>For loop</h2>;";
for($z=0;$z<4;$z++){
    echo "this is an example of For loop<br>";
}
    ?>
</body>
</html>