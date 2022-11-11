
    <?php
    $url2 = "article.json";
    $response2 = file_get_contents($url2);
    $result2 = json_decode($response2);
    echo "<div class='container'>";
    echo "<div class='text-home-right'>Articles <br> ⤸ </div>";
    echo "<div class='row'>";
    foreach ($result2 as $article) {
        $ans = $article->id;
        if ($ans%3 == 0 && $ans < 10) {
            echo "<div class='col-lg-4 col-md-6 col-sm-12 mb-4 d-flex align-items-stretch'>";
            echo "<a href='articles.php' class='textGreen' style='text-decoration: none;'>";
            
            echo "<div class='card '>";
            echo "<img class='card-img-top'  width='100%' src='$article->cover' alt='Card image cap'>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'> <h5><b>$article->name</h5> </p>";
            echo "</div></div></a></div>";
        }
    }
    echo "</div>";
    echo "</div>";
    ?>
