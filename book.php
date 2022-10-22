<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <title>Book by Sababooks</title>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="my-5">
        <?php include("poster.php"); ?>
    </div>
        
        <form action="" method="POST">
            <div class="d-flex justify-content-center text-center">
                <div class="btn">
                    <button name="cate1" type="submit" class="btn b1" value="comic"></button>
                    <br>
                    <p>Comic</p>
                </div>
                <div class="btn">
                    <button name="cate2" type="submit" class="btn b2" value="comicessay"></button>
                    <br>
                    <p>Comic<br>Essayy</p>
                </div>
                <div class="btn">
                    <button name="cate3" type="submit" class="btn b3" value="conceptidea"></button>
                    <br>
                    <p>Concept<br>Idea</p>
                </div>
                <div class="btn">
                    <button name="cate4" type="submit" class="btn b4" value="culture"></button>
                    <br>
                    <p>Culture</p>
                </div>
                <div class="btn">
                    <button name="cate5" type="submit" class="btn b5" value="novel"></button>
                    <br>
                    <p>Novel</p>
                </div>
                <div class="btn">
                    <button name="cate6" type="submit" class="btn b6" value="journey"></button>
                    <br>
                    <p>Journey</p>
                </div>
                <div class="btn">
                    <button name="cate7" type="submit" class="btn b7" value="memoir"></button>
                    <br>
                    <p>Memoir</p>
                </div>
                <div class="btn">
                    <button name="cate8" type="submit" class="btn b8" value="non-fiction"></button>
                    <br>
                    <p>Non<br>fiction</p>
                </div>

            </div>
        </form>
        <?php
        $url = "book.json";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $getCate = 'default';

        if (isset($_POST['cate1'])) {
            $getCate = $_POST['cate1'];
        } else if (isset($_POST['cate2'])) {
            $getCate = $_POST['cate2'];
        } else if (isset($_POST['cate3'])) {
            $getCate = $_POST['cate3'];
        } else if (isset($_POST['cate4'])) {
            $getCate = $_POST['cate4'];
        } else if (isset($_POST['cate5'])) {
            $getCate = $_POST['cate5'];
        } else if (isset($_POST['cate6'])) {
            $getCate = $_POST['cate6'];
        } else if (isset($_POST['cate7'])) {
            $getCate = $_POST['cate7'];
        } else if (isset($_POST['cate8'])) {
            $getCate = $_POST['cate8'];
        }

        ?>
        <br>
        <div class='container my-5'>
            <div class="row">
                <?php
                // showbook
                if ($getCate == 'default') {
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
                } else {
                    foreach ($result as $category) {
                        foreach ($category as $book) {
                            if ($book->cate2 == $getCate || $getCate == "default") {
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

                ?>
            </div>
        </div>
        <?php include("footer.php"); ?>
</body>


</html>