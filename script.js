

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
var id = 0;
var cover = "";
var title = "Title";
var writer = "Writer";
var price = 0;
var descrip = "เรื่องย่อ";

function setBook(id1, cover1, title1, writer1, price1, des1){
    id = id1;
    cover = cover1;
    title = title1;
    writer = writer1;
    price = price1;
    descrip = des1;
    bookDetail();
}

function bookDetail(){
    let show = document.getElementById("bookDetail");
    let text = "<div class='col-lg-6 col-sm-12 align-self-center'><img src='"+cover+"' class='img-fluid'></div>";
    text += "<div class='col-lg-6 col-sm-12 align-self-center py-5 pr-3'>";
    text += "<div class='h3 font-weight-bold mb-0'>"+title+"</div>";
    text += "<div class='text-muted'>"+writer+"</div>";
    text += "<div class='h3 font-weight-bold my-4' style='color:var(--green);'>฿"+price+"</div>";
    text += "<div class='p detail'>"+descrip+"</div>";
    text += "<button class='btn-cart small mt-4 px-5 py-2' onclick='#'>ADD TO CART</button>";
    text += "</div></div>";

    show.innerHTML = text;
}