
var id = 0;
var cover = "";
var title = "Default Title";
var writer = "Default Writer";
var price = 0;
var des = "Default เรื่องย่อ";
var cat = "Default Category";
var text2 = "";
var allCat = ["comic", "comicessay", "conceptidea", "culture", "novel", "journey", "memoir", "nonfiction"]; //ไว้ช่วยรันลูปไล่หนังสือ

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

// เริ่มรันตอนเปิด bookDetail
function startBookDetail(){
    bookDetail();
    showRelate();
    setActive("nav2");
}

// ตัว card หลัก
function bookDetail(){
    //ดึงข้อมูลจากที่ setBook ไว้
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

// ดึง json มาใส่ Related 
function showRelate(){
    let requestURL = 'book.json';
    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
                ExtractData1(JSON.parse(request.responseText));
                // ส่งไปฟังชัน Extractdata1
            }
        };
    request.open("GET", requestURL, true);
    request.send();
}

// ไล่ข้อมูลของ showRealte
function ExtractData1(data){
    var id = localStorage.getItem("id");
    var cat = localStorage.getItem("cat"); 
    let b = 0; // ปริ้นแค่ 4 เล่ม

    for (let i = 0; i < 8; i++) {
        for (book of data[allCat[i]]){
            if((book.cate2 == cat)&&(book.id != id)){
                printRelate(book.title, book.cover, book.price, book.writer, book.id, book.description, book.cate2);
                b++;
                if(b==4){
                    break;
                }
    
            }
        }
    }
}

// ไว้ปริ้นหนังสือที่ตรงเกณฑ์ข้างบน
function printRelate(title1, cover1, price1, writer1, id1, des1, cat1,){
    let show = document.getElementById("showRelate");
    text2 += "<div class='col-lg-3 col-md-4 col-sm-6 mb-5'>";
    text2 += "<a href='bookDetail.php' onclick='setBookByID("+id1+")' style='text-decoration: none;'>";
    text2 += "<div class='card border-0'>";
    text2 += "<img class='card-img-top bg-grey' src='https://"+cover1+"'>";
    text2 += "<div class='card-body text-left'>";
    text2 += "<h5 class='card-title text-dark font-weight-bold mb-0'>"+title1+"</h5>";
    text2 += "<p class='text-muted small'>"+writer1+"</p>";
    text2 += "<h5 class='font-weight-bold' style='color:var(--green);'>฿"+price1+"</h5> ";
    text2 += "</div></div></a></div>";
    show.innerHTML = text2
}

// ส่งตัวแปรทั้งหมดลำบากเลยส่งแค่id
function setBookByID(id){
    let requestURL = 'book.json';
    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
                ExtractData2(JSON.parse(request.responseText), id);
                // ส่งไปฟังชัน Extractdata2
            }
        };
    request.open("GET", requestURL, true);
    request.send();
}

// ไล่ข้อมูลให้ setBook
function ExtractData2(data, id){
    for (let i = 0; i < 8; i++) {
        for (book of data[allCat[i]]){
            if(book.id == id){
                setBook(book.id, book.cover, book.title, book.writer, book.price, book.description, book.cate2);
            }
        }
    }
}

// set active nav สีเขียวให้ตรงหน้า
function setActive(i) {
    $('#'+i).addClass("active");
}
