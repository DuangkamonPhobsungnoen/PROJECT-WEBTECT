<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
    <?php

    $url = "book.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
    echo "<div class='container'>
            <h1>New Release</h1> <br>
                <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
                    <div class='carousel-inner'>";
    foreach ($result as $category) {
        foreach ($category as $book) {
            if(($book->id==52) || ($book->id==83) || ($book->id==42) || ($book->id==44)){
                    if($book->id==52) {
                        echo "<div class='carousel-item active'>";
                    }
                    else {
                        echo "<div class='carousel-item'>";
                    }
                echo "
                        <div lass='d-block'>
                            <div class='featured-item row align-items-stretch px-5'>
                                <div class='col-lg-4'>
                                    <img src='https://$book->cover' width='100%' class='img-fluid rounded' /></a>
                                </div>
                                <div class='col-lg-8 my-auto'>
                                    <div class='info' style='padding: 5%'>
                                        <h4 class='entry-title'><a href='bookDetail.php' onclick='setBookByID($book->id)' style='text-decoration:none; color:var(--green);''>$book->title</a></h4>
                                        <div class='entry-meta mb-4 text-muted'>
                                            <span> $book->writer </span>
                                        </div>
                                        <div class='entry-content'>
                                            <p class='max-lines'>$book->description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
            
                }
        }
    }
    echo "</div>
            <a class='carousel-control-prev ml-0' href='#carouselExampleIndicators' role='button' data-slide='prev'>
            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            <span class='sr-only'>Previous</span>
            </a>
            <a class='carousel-control-next mr-0' href='#carouselExampleIndicators' role='button' data-slide='next'>
            <span class='carousel-control-next-icon' aria-hidden='true'></span>
            <span class='sr-only'>Next</span>
            </a>
            </div>
        </div>";
    ?>
</body>
</html>
