
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
                                        <div class='text-right'>
                                            <a href='bookDetail.php'><button class='btn btn-close' onclick='setBookByID($book->id)'>BUY NOW</button></a>
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
