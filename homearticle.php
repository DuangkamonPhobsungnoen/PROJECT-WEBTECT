<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $url2 = "article.json";
    $response2 = file_get_contents($url2);
    $result2 = json_decode($response2);
    echo "<div class='container'>";
    echo "<h1>Articles</h1> <br>";
    echo "<div class='row'>";
    foreach ($result2 as $article) {
        $ans = $article->id;
        if ($ans%3 == 0 && $ans < 10) {
            echo "<div class='col-lg-4 col-md-6 col-sm-12 mb-4'>";
            echo "<div class='card'>";
            echo "<img class='card-img-top'  width='100%' height='130' src='$article->cover' alt='Card image cap'>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'> <h5><b>$article->name</h5> </p>";
            echo "</div></div></div>";
        }
    }
    echo "</div></div><br>";
    ?>
</body>

</html>
