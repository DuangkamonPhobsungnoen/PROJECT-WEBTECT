
var id = 0;
var cover = "";
var title = "Default Title";
var writer = "Default Writer";
var price = 0;
var des = "Default เรื่องย่อ";
var cat = "Default Category";
var text3 = "";
var text4 = "";

//เซ็ตข้อมูลหนังสือหน้า bookDetail
function setBook(id1, cover1, title1, writer1, price1, des1, cat1){
    localStorage.setItem("id", id1);
    localStorage.setItem("cover", cover1);
    localStorage.setItem("title", title1);
    localStorage.setItem("writer", writer1);
    localStorage.setItem("price", price1);
    localStorage.setItem("des", des1);
    localStorage.setItem("cat", cat1);
}

// starter pack of bookDetail
function startBookDetail(){
    bookDetail();
    showRelate();
}

function bookDetail(){
    //ดึงข้อมูล
    var cover = localStorage.getItem("cover");
    var title = localStorage.getItem("title");
    var writer = localStorage.getItem("writer");
    var price = localStorage.getItem("price");
    var des = localStorage.getItem("des"); 

    let show = document.getElementById("bookDetail");
    let text = "<div class='col-lg-6 col-sm-12 align-self-center'><img src='https://"+cover+"' class='img-fluid'></div>";
    text += "<div class='col-lg-6 col-sm-12 align-self-center py-5 pr-3'>";
    text += "<div class='h4 font-weight-bold mb-0'>"+title+"</div>";
    text += "<div class='text-muted'>"+writer+"</div>";
    text += "<div class='h5 font-weight-bold mt-5' style='color:var(--green);'>฿"+price+"</div>";
    text += "<div class='detail mt-5'>"+des+"</div>";
    text += "<button class='btn-cart small mt-4 px-5 py-2' onclick='#'>ADD TO CART</button>";
    text += "</div></div>";

    show.innerHTML = text;
}

function showRelate(){
    let requestURL = 'book.json';
    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
                ExtractData1(JSON.parse(request.responseText));
            }
        };
    request.open("GET", requestURL, true);
    request.send();
}

function ExtractData1(data){
    var id = localStorage.getItem("id");
    var cat = localStorage.getItem("cat"); 
    
    // ต้องใช้ data.ประเภท 8 ครั้ง เพราะใช้ data, data[0] รันไม่ได้ แง
    for (book of data.comic){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
    for (book of data.comicessay){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
    for (book of data.conceptidea){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
    for (book of data.culture){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
    for (book of data.novel){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
    for (book of data.journey){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
    for (book of data.memoir){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
    for (book of data.nonfiction){
        if((book.cate2 == cat)&&(book.id != id)){
            printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
        }
    }
}

function printRelate(title1, cover1, price1, writer1, id1, des1, cat1,){
    // ฟังชั่นบึ่มมมมม
    let show = document.getElementById("showRelate");
    text3 += "<div class='col-lg-3 col-md-4 col-sm-6 mb-5'>";
    text3 += "<a href='#' onclick='setBook(";
    // text3 += id1+",'"+cover1+"','" +title1+"','" +writer1+"'," +price1+",'" +des1+"','" +cat1+"'";
    text3 += ") style='text-decoration: none;'>";
    text3 += "<div class='card border-0'>";
    text3 += "<img class='card-img-top bg-grey' src='https://"+cover1+"'>";
    text3 += "<div class='card-body text-left'>";
    text3 += "<h5 class='card-title text-dark font-weight-bold mb-0'>"+title1+"</h5>";
    text3 += "<p class='text-muted small'>"+writer1+"</p>";
    text3 += "<h5 class='font-weight-bold' style='color:var(--green);'>฿"+price1+"</h5> ";
    text3 += "</div></div></a></div>";
    show.innerHTML = text3
}

