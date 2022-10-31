
var id = 0;
var cover = "";
var title = "Default Title";
var writer = "Default Writer";
var price = 0;
var des = "Default เรื่องย่อ";
var cat = "Default Category";
var text2 = "";
var allCat = ["comic", "comicessay", "conceptidea", "culture", "novel", "journey", "memoir", "nonfiction"]; //ไว้ช่วยรันลูปไล่หนังสือ
var cart = [[11,1],[12,1]];

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
    var id = localStorage.getItem("id"); 

    let show = document.getElementById("bookDetail");
    let text = "<div class='col-lg-6 col-sm-12 align-self-center'><img src='https://"+cover+"' class='img-fluid mx-auto d-block'></div>";
    text += "<div class='col-lg-6 col-sm-12 align-self-center py-5 pr-3'>";
    text += "<div class='h4 font-weight-bold mb-0'>"+title+"</div>";
    text += "<div class='text-muted'>"+writer+"</div>";
    text += "<div class='h5 font-weight-bold mt-5' style='color:var(--green);'>฿"+price+"</div>";
    text += "<div class='detail mt-5'>"+des+"</div>";
    text += "<button class='btn-cart small mt-4 px-5 py-2' onclick='addToCart("+id+")'>ADD TO CART</button>";
    text += "</div></div>";

    show.innerHTML = text;
}

// ดึง json มาใส่ Relate 
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

// ส่งข้อมูล showRealte
function ExtractData1(data){
    var id = localStorage.getItem("id");
    var cat = localStorage.getItem("cat"); 
    let b = 0; // ปริ้นแค่ 4 เล่ม

    for (let i = 0; i < 8; i++) {
        for (book of data[allCat[i]]){
            if((book.cate2 == cat)&&(book.id != id)&&(book.id%2 != id%2)){
                let show = document.getElementById("showRelate");
                text2 += "<div class='col-lg-3 col-md-4 col-sm-6 mb-5'>";
                text2 += "<a href='bookDetail.php' onclick='setBookByID("+book.id+")' style='text-decoration: none;'>";
                text2 += "<div class='card border-0'>";
                text2 += "<img class='card-img-top bg-grey' src='https://"+book.cover+"'>";
                text2 += "<div class='card-body text-left'>";
                text2 += "<h5 class='card-title text-dark font-weight-bold mb-0'>"+book.title+"</h5>";
                text2 += "<p class='text-muted small'>"+book.writer+"</p>";
                text2 += "<h5 class='font-weight-bold' style='color:var(--green);'>฿"+book.price+"</h5> ";
                text2 += "</div></div></a></div>";
                show.innerHTML = text2;

                b++;
                if(b==4){
                    break;
                }
    
            }
        }
    }
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

// สำหรับตะกร้า
// สร้าง array 
// ตำแหน่ง = ID นส.
// ค่าในตำแหน่ง = จำนวนเล่ม
// เช่น [1,2,1] = เล่นที่หนึ่ง 1 เล่ม เล่มที่สอง 2 เล่ม เล่นที่สาม 1 เล่ม
// localStorage ใช้ array ไม่ได้ ทำตาม https://stackoverflow.com/questions/3357553/how-do-i-store-an-array-in-localstorage

// add to cart ใน bookDetail
var cart = [];
function addToCart(id) {
    var setCart = JSON.parse(localStorage.getItem("cart") || '[]');
    console.log(setCart);
    setCart[id] = 1; //กำหนดให้ id นั้นมี 1 เล่ม
    localStorage.setItem("cart", JSON.stringify(setCart));
}

// ไว้ปริ้นหน้า cart
function myCart() {
    let requestURL = 'book.json';
    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
                ExtractData3(JSON.parse(request.responseText));
                // ส่งไปฟังชัน Extractdata3
            }
        };
    request.open("GET", requestURL, true);
    request.send();
    
}

function ExtractData3(data){
    var inCart = JSON.parse(localStorage.getItem("cart") || '[]');
    let show = document.getElementById("cartPage");
    let text = "";
    for (let i = 0; i < inCart.length; i++) { 
        if(inCart[i] != null){
            for (let j = 0; j < 8; j++) {
                for (book of data[allCat[j]]){
                    if(book.id == i){
                        //ดูโค้ดสวยๆใน cartDemo.html
                        text += "<div class='row frame py-3 my-4'>";
                            text += "<div class='col-2 d-flex align-items-center'>";
                                text += "<img src='https://"+book.cover+"'class='img-fluid'></div>";
                                text += "<div class='col-6 d-flex align-items-center'>";
                                text += "<div><div class='h4'>"+book.title+"</div>";
                                text += "<div class='h5 text-muted'>"+book.writer+"</div></div></div>";

                            text += "<div class='col-2 d-flex align-items-center justify-content-center my-sm-3'>";
                                text += "<button type='button' class='btn bg-white'>";
                                text += "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#31ad99' class='bi bi-dash-circle-fill' viewBox='0 0 16 16'><path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z'/></svg>";
                                text += "</button><div class='mx-3'>"+ inCart[i] +"</div>";
                                text += "<button type='button' class='btn bg-white'>";
                                text += "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#31ad99' class='bi bi-plus-circle-fill' viewBox='0 0 16 16'><path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z'/></svg></button></div>";
                            
                            text += "<div class='col-2 text-center my-auto font-weight-bold'>"+book.price+" ฿</div></div>";
                    }
                }
            }
        }
    }
    show.innerHTML = text;
}
