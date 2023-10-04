<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $superheroes = array (
        " spider - man " => array (
        " name " => " Peter ␣ Parker ",
        " email " => " peterparker@mail . com ") ,
        "super - man" => array (
        " name " => " Clark ␣ Kent ",
        " email " => " clarkkent@mail .com ") ,
        "iron - man " => array (
        " name " => " Tony ␣ Stark ",
        " email " => " tonystark@mail .com ")
        );

        foreach($superheroes as $key => $value){
            echo "Key: " .$key . "<br>";
            echo "Value: <br>";
            foreach($value as $subValue => $giaTri){
                echo $subValue . ":" . $giaTri;
                echo "<br>";
            }
        }
    ?>
</body>
</html>