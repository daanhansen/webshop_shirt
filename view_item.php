<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info_page.css">
    <title>Buy Shirts</title>
</head>
<body>
<div class="wrapper">

<?php
    require('connect.php');


    $id = $_GET['item'];
    $get = "SELECT * FROM shirts WHERE (id = $id) " ;
    $location = mysqli_query($dbc, $get);

$img = "";
$name = "";
$desc = "";


while($row = mysqli_fetch_array($location)){



    $img = $row["img"];
    $name = $row['name'];
    $desc = $row['description'];


    echo '<div class="item_block">';

    echo '<div class="img_block">';
    echo '<img src="' . $img . '">';
    echo '</div>';

    echo '<div class="info_block">';
    echo '<h3 class="shirt_desc">' . $name . '</h3>';
    echo '<p class="shirt_desc">' . $desc . '</p>';


    echo '<form action="purchase.php" method="get" target="_blank">';
        echo '<input name="id" type="hidden" value="' . $id . '">';
        echo '<p>Size: </p>';
            echo '<select id="size" name="size">' ;
                echo '<option value="small">Small</option>';
                echo '<option value="medium">Medium</option>';
                echo '<option value="large">Large</option>';
                echo '<option value="xlarge">Extra Large</option>';
            echo '</select>';

        echo '<p>Color: </p>';
            echo '<select id="color" name="color">' ;
                echo '<option value="red">Red</option>';
                echo '<option value="blue">Blue</option>';
                echo '<option value="green">Green</option>';
                echo '<option value="black">Black</option>';
            echo '</select><br>';


        echo '<input value="Purchase" type ="submit" id="pur">';
    echo '</form>';

    echo '</div>';

    echo '</div>';

}
?>
</div>
</body>
</html>

