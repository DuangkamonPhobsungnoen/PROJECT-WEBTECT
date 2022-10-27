
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
