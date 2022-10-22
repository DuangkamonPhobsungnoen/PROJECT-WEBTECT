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
    <script src="script.js"></script>
    <title>Book by Sababooks</title>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="my-5">
        <?php include("poster.php"); ?>
    </div>


    <form action="" method="POST">
        <div class='container'>
            <div class="d-flex justify-content-center text-center">
                <div class="row">
                    <div class="btn-cat m-4">
                        <button name="cate1" type="submit" class="btn btn-cat-inside b1" value="comic">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                class="bi bi-reddit" viewBox="0 0 16 16">
                                <path
                                    d="M6.167 8a.831.831 0 0 0-.83.83c0 .459.372.84.83.831a.831.831 0 0 0 0-1.661zm1.843 3.647c.315 0 1.403-.038 1.976-.611a.232.232 0 0 0 0-.306.213.213 0 0 0-.306 0c-.353.363-1.126.487-1.67.487-.545 0-1.308-.124-1.671-.487a.213.213 0 0 0-.306 0 .213.213 0 0 0 0 .306c.564.563 1.652.61 1.977.61zm.992-2.807c0 .458.373.83.831.83.458 0 .83-.381.83-.83a.831.831 0 0 0-1.66 0z" />
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.828-1.165c-.315 0-.602.124-.812.325-.801-.573-1.9-.945-3.121-.993l.534-2.501 1.738.372a.83.83 0 1 0 .83-.869.83.83 0 0 0-.744.468l-1.938-.41a.203.203 0 0 0-.153.028.186.186 0 0 0-.086.134l-.592 2.788c-1.24.038-2.358.41-3.17.992-.21-.2-.496-.324-.81-.324a1.163 1.163 0 0 0-.478 2.224c-.02.115-.029.23-.029.353 0 1.795 2.091 3.256 4.669 3.256 2.577 0 4.668-1.451 4.668-3.256 0-.114-.01-.238-.029-.353.401-.181.688-.592.688-1.069 0-.65-.525-1.165-1.165-1.165z" />
                            </svg>
                        </button>
                        <br>
                        <p>Comic</p>
                    </div>
                    <div class="btn-cat m-4">
                        <button name="cate2" type="submit" class="btn btn-cat-inside b2" value="comicessay">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z" />
                                <path
                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                <path
                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                            </svg>
                        </button>
                        <br>
                        <p>Comic<br>Essayy</p>
                    </div>
                    <div class="btn-cat m-4">
                        <button name="cate3" type="submit" class="btn btn-cat-inside b3" value="conceptidea">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-lightbulb" viewBox="0 0 16 16">
                                <path
                                    d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                            </svg>
                        </button>
                        <br>
                        <p>Concept<br>Idea</p>
                    </div>
                    <div class="btn-cat m-4">
                        <button name="cate4" type="submit" class="btn btn-cat-inside b4" value="culture">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-yin-yang" viewBox="0 0 16 16">
                                <path d="M9.167 4.5a1.167 1.167 0 1 1-2.334 0 1.167 1.167 0 0 1 2.334 0Z" />
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1 8a7 7 0 0 1 7-7 3.5 3.5 0 1 1 0 7 3.5 3.5 0 1 0 0 7 7 7 0 0 1-7-7Zm7 4.667a1.167 1.167 0 1 1 0-2.334 1.167 1.167 0 0 1 0 2.334Z" />
                            </svg>
                        </button>
                        <br>
                        <p>Culture</p>
                    </div>
                    <div class="btn-cat m-4">
                        <button name="cate5" type="submit" class="btn btn-cat-inside b5" value="novel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-book" viewBox="0 0 16 16">
                                <path
                                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                            </svg>
                        </button>
                        <br>
                        <p>Novel</p>
                    </div>
                    <div class="btn-cat m-4">
                        <button name="cate6" type="submit" class="btn btn-cat-inside b6" value="journey">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-pin-map" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                                <path fill-rule="evenodd"
                                    d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                            </svg>
                        </button>
                        <br>
                        <p>Journey</p>
                    </div>
                    <div class="btn-cat m-4">
                        <button name="cate7" type="submit" class="btn btn-cat-inside b7" value="memoir">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-card-image" viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                <path
                                    d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                            </svg>
                        </button>
                        <br>
                        <p>Memoir</p>
                    </div>
                    <div class="btn-cat m-4">
                        <button name="cate8" type="submit" class="btn btn-cat-inside b8" value="non-fiction">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-x-octagon" viewBox="0 0 16 16">
                                <path
                                    d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" />
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                        <br>
                        <p>Non<br>fiction</p>
                    </div>
                </div>

            </div>
        </div>

    </form>
    <div class='container my-5'>
        <div class="row">
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
        </div>
        <div class="row">

            <?php
            function printBook($id, $cover, $title, $writer, $price, $description){
                echo "
                            <div class='col-lg-3 col-md-4 col-sm-6 mb-5'>";?>

                            <a href='bookDetail.php'
                                onclick="setBook(<?php echo $id.',\''.$cover.'\',\''.$title.'\',\''.$writer.'\','.$price.',\''.$description.'\''?>)"
                                style='text-decoration: none;'>

                            <?php
                            echo "
                                <div class='card border-0'>
                                    <img class='card-img-top bg-grey' src='https://$cover'>
                                    <div class='card-body text-left'>
                                        <h5 class='card-title text-dark font-weight-bold mb-0'>$title</h5>
                                        <p class='text-muted small'>$writer</p>
                                        <h5 class='font-weight-bold' style='color:var(--green);'>฿$price</h5>
                                    </div>
                                </div>
                                </a>
                            </div>
                            ";
            }
            ?>


            <?php
            // showbook
            if ($getCate == 'default') {
                foreach ($result as $category) {
                    foreach ($category as $book) {
                        printBook($book->id,$book->cover,$book->title,$book->writer,$book->price,$book->description);
                    }
                }
            } else {
                foreach ($result as $category) {
                    foreach ($category as $book) {
                        if ($book->cate2 == $getCate || $getCate == "default") {
                            printBook($book->id,$book->cover,$book->title,$book->writer,$book->price,$book->description);
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