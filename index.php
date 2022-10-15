<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
    <?php
    $url = "book.json";
    $response = file_get_contents($url); 
    $result = json_decode($response); 
    foreach ($result as $category) {
        foreach ($category as $book){
            echo "name = $book->title<br>";
            echo "writer = $book->writer<br>";
            echo "เรื่องย่อ = $book->description<br><br>";
        }
    }

    $url2 = "article.json";
    $response2 = file_get_contents($url2); 
    $result2 = json_decode($response2); 
    foreach ($result2 as $article) {
        echo "name : $article->name<br>";
        echo "บทความ : $article->description<br><br>";
    }
    
    ?>
</body>
</html>