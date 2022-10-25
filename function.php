<?php

function printBook($id, $cover, $title, $writer, $price, $description, $catego){
    echo "
                <div class='col-lg-3 col-md-4 col-sm-6 mb-5'>";?>

                <a href='bookDetail.php'
                    onclick="setBook(<?php echo $id.',\''.$cover.'\',\''.$title.'\',\''.$writer.'\','.$price.',\''.$description.'\',\''.$catego.'\''?>)"
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