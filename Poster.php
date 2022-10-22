<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class='container'>
        <img class="Slides" src="https://media.discordapp.net/attachments/1031228521613381724/1031971926349979658/2.png?width=1440&height=480" width="100%">
        <img class="Slides" src="https://media.discordapp.net/attachments/1031228521613381724/1031971926727471194/1.png?width=1440&height=480" width="100%">
        <img class="Slides" src="https://media.discordapp.net/attachments/1031228521613381724/1031971927109144606/3.png?width=1440&height=480" width="100%">
        <img class="Slides" src="https://media.discordapp.net/attachments/1031228521613381724/1033016334608515092/IMG_0093.jpg?width=1440&height=480" width="100%">
        <img class="Slides" src="https://media.discordapp.net/attachments/1031228521613381724/1033016334952452206/IMG_0094.jpg?width=1440&height=480" width="100%">
    </div>


    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("Slides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000);
        }
    </script>
</body>

</html>
