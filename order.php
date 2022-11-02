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
</head>
<body class="h-100">
    <?php include("navbar.php"); ?>
    <div class="container my-5 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-lg-4 col-sm-12 h1 my-lg-auto my-sm-3 font-weight-bold" style="color:var(--green)">ORDER CONFIRMATION</div>
            <div class="col-lg-8 col-sm-12 card p-3 frame ">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input class="form-control" placeholder="Enter Name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tel.</label>
                        <input class="form-control" placeholder="Enter Phone Number" id="tel">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <textarea class="form-control" placeholder="Enter Address" id="add"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input class="form-control" placeholder="Enter Email" id="mail">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Pay by credit card</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Cash on delivery</label>
                    </div>
                    
                    <button type="button" onclick="clearCart();" class="btn btn-close mt-4" data-toggle="modal" data-target="#exampleModal">CONFIRM ORDER</button>
                    <div class="btn btn-close mt-4" onclick='history.back()'>CLOSE</div>

                </form>
            </div>
        </div>

        <div id="showModal">
            <!-- <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>Order completed</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body text-center'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='var(--green)' class='bi bi-check-circle' viewBox='0 0 16 16'>
                                <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                                <path d='M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z'/>
                            </svg>
                            <h5 class='mt-2'>Thank You</h5>
                        </div>
                        <div class='modal-footer'>
                            <a href='index.php'>
                                <button type='button' class='btn btn-close'>BUY MORE BOOKS</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
    <?php include("footer.php"); ?>
</body>
</html>