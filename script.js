

function showBook(category) {
    fetch('book.json')
        .then((response) => response.json())
        .then(function (data){
            source(data)
        })
        function source(data){
            let div = document.getElementById("show");
            let text = "";
            for (let i = 0; i < data.length; i++) {
                text += data[i];
                console.log(data[i]);
            }
            div.innerHTML = text;
        }   

}

var cover = "";
var title = "";
var writer = "";
var price = 0;
var cover = "";
var id = 0;

function bookDetail(cover, category, detail, title, price){
    let show = document.getElementById("bookDetail")
}