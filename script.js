
var id = 0;
var cover = "";
var title = "Default Title";
var writer = "Default Writer";
var price = 0;
var des = "Default เรื่องย่อ";

function setBook(id1, cover1, title1, writer1, price1, des1){
    localStorage.setItem("id", id1);
    localStorage.setItem("cover", cover1);
    localStorage.setItem("title", title1);
    localStorage.setItem("writer", writer1);
    localStorage.setItem("price", price1);
    localStorage.setItem("des", des1);

    var id = localStorage.getItem("id");
    console.log(id);

}

function bookDetail(){
    var cover = localStorage.getItem("cover");
    var title = localStorage.getItem("title");
    var writer = localStorage.getItem("writer");
    var price = localStorage.getItem("price");
    var des = localStorage.getItem("des");

    let show = document.getElementById("bookDetail");
    let text = "<div class='col-lg-6 col-sm-12 align-self-center'><img src='https://"+cover+"' class='img-fluid'></div>";
    text += "<div class='col-lg-6 col-sm-12 align-self-center py-5 pr-3'>";
    text += "<div class='h3 font-weight-bold mb-0'>"+title+"</div>";
    text += "<div class='text-muted'>"+writer+"</div>";
    text += "<div class='h3 font-weight-bold my-4' style='color:var(--green);'>฿"+price+"</div>";
    text += "<div class='detail'>"+des+"</div>";
    text += "<button class='btn-cart small mt-4 px-5 py-2' onclick='#'>ADD TO CART</button>";
    text += "</div></div>";

    show.innerHTML = text;
}