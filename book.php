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
    <title>Document</title>
    <style>
        body{
            --price: #fc5e03;
        }
        p{
            font-size: 15px;
            color: gray;
        }
        .container{
            gap: 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="all">
    <form action="" method="POST">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="form" name="form">
            <option selected>Category</option>
            <option value="comic">Comic</option>
            <option value="comicessay">Comic Essay</option>
            <option value="conceptidea">Concept Idea</option>
            <option value="culture">Culture</option>
            <option value="novel">Novel</option>
            <option value="journey">Journey</option>
            <option value="memoir">Memoir</option>
            <option value="non-fiction">Non-fiction</option>
        </select>
    </form>
    <?php
    $url = "book.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
    // $form = $_POST['form'];
    echo "<div class='container'>";
    foreach ($result as $category) {
        // if ($category == "$form") {
             foreach ($category as $book) {
               
                echo "<div class='card' style='width: 15rem;'>
                            <img class='card-img-top' src='$book->cover' alt='Card image cap'>
                            <div class='card-body text-center'>
                                <h5 class='card-title font-weight-bold'>$book->title</h5>
                                <p class='card-text'>$book->writer</p>
                                <h5 class='font-weight-bold' style='color:var(--price);'>$book->price.-</h5>
                                <a href='#' class='btn btn-dark'><i class='fa fa-shopping-cart'></i>เพิ่มใส่รถเข็น </a>
                            </div>
                        </div>";
             }
            
        //}
    }
    echo "</div>";
    ?>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>