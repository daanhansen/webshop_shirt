<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <title>Buy Shirts</title>
</head>
<body>
<div class="wrapper">

    <div class="container">

        <?php
        require("connect.php");
        $get = "SELECT * FROM shirts";
        $show = mysqli_query($dbc, $get);
        $id = 0;

        while($row = mysqli_fetch_array($show)){

            $id++;
            $img = $row["img"];
            $name = $row['name'];
            $desc = $row['description'];

            echo '<div class="shirt_block">';
            echo '<div class="imgblock">';
            echo '<img src="' . $img . ' " class="img">';
            echo '</div>';
            echo '<div class="desc_block">';
            echo '<h3 class="desc">' . $name . '</h3>';
            echo '<p class="desc">' . $desc . '</p>';
            echo '</div>';
            echo '<button onclick="goToBuyPage(' . $id . ')"><strong>BUY ME</bold></strong>';
            echo '</div>';
        }
        ?>
    </div>

</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
