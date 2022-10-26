<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Article</title>
</head>
<body onload="setActive('nav3');">
    <?php include("navbar.php"); ?>

    <?php
    $url2 = "article.json";
    $response2 = file_get_contents($url2); 
    $result2 = json_decode($response2);
    echo "<div class='container'>";
    echo "<h1 class='mt-5'>Articles</h1>";
    
    foreach ($result2 as $article) {
        if ($article->id%2 != 0){
            echo "<a data-toggle='modal' data-target= '#".$article->id."'>";
            echo "<div class='card mt-5 p-4 border-0 frame2'>";
            echo "<div class='row'>";
            echo "<div class='col-md-4'>";
            echo "<img class='img-fluid' src='$article->cover'>";
            echo "</div>";
            echo "<div class='col-md-8'>";
            echo "<h4 class='card-title mt-2'>$article->name</h4>";
            echo "<p class='max-lines'>$article->description</p>";
            echo "</div></div></div></a>";
            
        }
        else {
            echo "<a data-toggle='modal' data-target= '#".$article->id."'>";
            echo "<div class='card mt-5 p-4 border-0 frame2'>";
            echo "<div class='row'>";
            echo "<div class='col-md-8'>";
            echo "<h4 class='card-title mt-2'>$article->name</h4>";
            echo "<p class='max-lines'>$article->description</p>";
            echo "</div>";
            echo "<div class='col-md-4'>";
            echo "<img class='img-fluid' src='$article->cover'>";
            echo "</div></div></div></a>";

        }
        
    }
    echo "</div><br>";
    ?>

    <?php
    $url2 = "article.json";
    $response2 = file_get_contents($url2); 
    $result2 = json_decode($response2);
    echo "<div class='container'>";
    
    foreach ($result2 as $article) {
        for ($i = 1; $i <= 12; $i++){
            if ($article->id == $i){
                echo "<div class='modal fade' id='".$i."'>";
                echo "<div class='modal-dialog modal-lg'>";
                echo "<div class='modal-content'>";
                echo "<img src='$article->cover'>";
                echo "<div class='modal-body'>";
                echo "<h2>$article->name</h2>";
                echo "<p>$article->description</p></div>";
                echo "</div></div></div>";
            }
        }
        echo "</div>";
    }
    ?>

    <?php include("footer.php"); ?>
</body>
</html>