<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $url = "book.json";
    $response = file_get_contents($url); 
    $result = json_decode($response); 
    foreach ($result as $category) {
        foreach ($category as $book){
            echo "name = $book->title
            writer = $book->writer";
        }
    }
    ?>
</body>
</html>