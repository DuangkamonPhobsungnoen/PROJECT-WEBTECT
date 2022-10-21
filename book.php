<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <script src="myscripts.js"></script>
    <title>Book by Sababooks</title>
</head>

<body>
    <?php include("navbar.php"); ?>
<<<<<<< Updated upstream
    
    
    <div class="container" method="POST">
        <div class="d-flex justify-content-center text-center">
            <div class="btn">
                <button name="cate1" type="submit" class="btn b1" value="comic" onClick='showBook("comic")'></button>
                <br>
                <p>Comic</p>
            </div>
            <div class="btn">
                <button name="cate" type="submit" class="btn b2" value="comicessay"></button>
                <br>
                <p>Comic<br>Essayy</p>
            </div>
            <div class="btn">
                <button name="cate" type="submit" class="btn b3" value="conceptidea"></button>
                <br>
                <p>Concept<br>Idea</p>
            </div>
            <div class="btn">
                <button name="cate" type="submit" class="btn b4" value="culture"></button>
                <br>
                <p>Culture</p>
            </div>
            <div class="btn">
                <button name="cate" type="submit" class="btn b5" value="novel"></button>
                <br>
                <p>Novel</p>
            </div>
            <div class="btn">
                <button name="cate" type="submit" class="btn b6" value="journey"></button>
                <br>
                <p>Journey</p>
            </div>
            <div class="btn">
                <button name="cate" type="submit" class="btn b7" value="memoir"></button>
                <br>
                <p>Memoir</p>
            </div>
            <div class="btn">
                <button name="cate" type="submit" class="btn b8" value="non-fiction"></button>
                <br>
                <p>Non<br>fiction</p>
            </div>
        </div>
    </div>
    <div class='container my-5'>
    <div class="row">
        <?php
            $url = "book.json";
            $response = file_get_contents($url);
            $result = json_decode($response);
=======
    <div class='container my-5'>
            <div class="all">
                <form action="" method="POST">
                    <select name="cate" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="default" selected>Category</option>
                        <option value="comic">Comic</option>
                        <option value="comicessay">Comic Essay</option>
                        <option value="conceptidea">Concept Idea</option>
                        <option value="culture">Culture</option>
                        <option value="novel">Novel</option>
                        <option value="journey">Journey</option>
                        <option value="memoir">Memoir</option>
                        <option value="non-fiction">Non-fiction</option>
                    </select>
                    <button type="submit" name="submit">Submit</button>
                </form>
                <div class='row m-2'>
                <?php
            $url = "book.json";
            $response = file_get_contents($url);
            $result = json_decode($response);

>>>>>>> Stashed changes
            if(isset($_POST['submit'])){
                if(!empty($_POST['cate'])) {
                    $getCat = $_POST['cate'];
                    foreach ($result as $category) {
                        foreach ($category as $book) {
                            if($book->cate2 == $getCat || $getCat == "default"){
                                echo "
                                <div class='col-lg-3 col-md-4 col-sm-6 mb-5'>
                                <a href='#' style='text-decoration: none'>
                                    <div class='card border-0'>
                                        <img class='card-img-top bg-grey' src='$book->cover'>
                                        <div class='card-body text-left'>
                                            <h5 class='card-title text-dark font-weight-bold mb-0'>$book->title</h5>
                                            <p class='text-muted small'$book->writer</p>
                                            <h5 class='font-weight-bold' style='color:var(--green);'>฿$book->price</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>";
                            }
                        }
                    }
                }
                }
                else {
                    // ถ้ายังไม่ submit ให้ show ทุกเล่ม
                    foreach ($result as $category) {
                        foreach ($category as $book) {
                            echo "
                            <div class='col-lg-3 col-md-4 col-sm-6 mb-5'>
                                <a href='#' style='text-decoration: none'>
                                    <div class='card border-0'>
                                        <img class='card-img-top bg-grey' src='$book->cover'>
                                        <div class='card-body text-left'>
                                            <h5 class='card-title text-dark font-weight-bold mb-0'>$book->title</h5>
                                            <p class='text-muted small'$book->writer</p>
                                            <h5 class='font-weight-bold' style='color:var(--green);'>฿$book->price</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>";
                        }
                    }
                }
<<<<<<< Updated upstream
            
        ?>
=======
        ?>
            </div>
>>>>>>> Stashed changes
        </div>
    </div>
</div>
    <?php include("footer.php"); ?>

    <script>

    </script>
</body>

</html>