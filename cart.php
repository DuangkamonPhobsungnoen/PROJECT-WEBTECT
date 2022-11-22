<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Sababooks</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/1024907708136161321/1044534266782027827/logo.png">
</head>

<body onload="myCart();">
    <div class="con">
    <?php include("navbar.php"); ?>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-6 text-left h5">YOUR CART</div>
            <div class="col-6 text-right h5" id="myItem"></div>
        </div>

        <div id="cartPage"></div>
        
        <div class="text-right font-weight-bold h3 mt-5" style="color: #31ad99;" id="myTotal"></div>
        
        <div class="text-right">
            <div class="btn btn-close" onclick="checkItem()">CHECK OUT</div>
            <div class="btn btn-close" onclick='history.back()'>CLOSE</div>
        </div>
        
        
        <br>
    </div>

    
        <div class="mt-auto">
            <?php include("footer.php"); ?>
        </div>
    </div>
    
    
</body>
</html>