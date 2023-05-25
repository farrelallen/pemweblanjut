
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Kawan Kopi co.</title>
  <link rel="icon" href="assets/kawanlogo.png" type="" />
</head>

<body>
  
  <div class="header">
    <div class="container">
      <!-- navbar  -->
      <div class="navbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <span>Ikuti kami di</span>
          <a href="https://www.youtube.com/@kawankopi5810/featured">
            <img class="icon-media mr-2 ml-2" src="assets/youtube.png" alt="YouTube" />
          </a>
          <a href="https://www.instagram.com/kawankopi.co/?hl=en">
            <img class="icon-media mr-2" src="assets/instagram.png" alt="Instagram" />
          </a>
          <a href="https://linktr.ee/kawankopi">
            <img class="icon-media mr-2" src="assets/link.png" alt="LinkedIn" />
          </a>
          <a href="https://api.whatsapp.com/send/?phone=6285722677081&text=Hello%20Kawan%20Kopi&type=phone_number&app_absent=0"
            target="_blank">
            <img class="icon-media mr-2" src="assets/whatsapp.png" alt="WhatsApp" />
          </a>
        </div>
        <div class="d-flex align-items-center">
          <a class="font-weight-bold" href="login.php" style="color: white;"><span class="font-weight-bold">Login</span></a>
          <div class="hr1 mx-2"></div>
          <a class="font-weight-bold" href="register.php" style="color: white;"><span class="font-weight-bold">Daftar</span></a>
        </div>
      </div>
      <!-- input search brand -->
      <div class="d-flex align-items-center mt-4">
        <div class="d-flex align-items-center">
          <img class="brand-img mr-2" src="assets/kawanlogo.png" alt="" />
          <span class="text-brand">Kawan Kopi</span>
        </div>
        <div class="wrap-navbar-input">
          <div class="wrap-search">
            <input type="text" class="form-control" placeholder="Mau Cari Apa ?" />
            <div class="wrap-icon-s">
              <img class="icon-media" src="assets/search.png" alt="" />
            </div>
          </div>
          <div class="under-input d-flex mt-2">
            <span class="mr-3">Penawaran Hari Ini</span>
            <span class="mr-3">Promo Bundling</span>
            <span class="mr-3">Bottle Series</span>
            <span class="mr-3">Kawan's Signature</span>
            <span class="mr-3">Speciality Chocolate & Matcha</span>
            <span class="mr-3">Homade Tea Base</span>
            <span class="mr-3">Food & Snacks</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <!-- carousel -->
      <div class="row wrap-carousel">
        <div class="col-8 h-100 pr-1">
          <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner h-100">
              <div class="carousel-item active h-100">
                <img src="assets/slider/kawankopi.png" class="d-block w-100 h-100"
                  style="object-fit: cover; width: 470px; height: 235px;" alt="..." />
              </div>
              <div class="carousel-item h-100">
                <img src="assets/slider/kawankopii.webp" class="d-block w-100 h-100" alt="..."
                  style="object-fit: cover; width: 1024px; height: 768px;" alt="..." />
              </div>
              <div class="carousel-item h-100">
                <img src="assets/slider/kawankopi.jpg" class="d-block w-100 h-100"
                  style="object-fit: cover; width: 1024px; height: 768px;" alt="..." />
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-4 h-100 pl-0">
          <div class="h-50">
            <img class="w-100 h-100" src="assets/slider/kawankopi.png" alt=""
              style="object-fit: cover; width: 1024px; height: 768px;" alt="..." />
          </div>
          <div class="h-50 pt-1">
            <img class="w-100 h-100" src="assets/slider/kawankopi.jpg" alt=""
              style="object-fit: cover; width: 1024px; height: 768px;" alt="..." />
          </div>
        </div>
      </div>

      <!-- kategory -->
      <div class="row mx-0 mt-4 kategory ">
        <h5 class="p-4">K A T E G O R I</h5>
        <div class="d-flex">
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="assets/deal.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Penawaran</p>
            <p class="mb-0 text-center">Hari Ini</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="assets/bundling.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Promo</p>
            <p class="mb-0 text-center">Bundling</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="assets/bottle.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Bottle</p>
            <p class="mb-0 text-center">Series</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="assets/menu.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Kawan'S</p>
            <p class="mb-0 text-center">Signature</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="assets/cocktail.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Speciality Chocolate</p>
            <p class="mb-0 text-center">& Matcha</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="assets/tea.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Homemade</p>
            <p class="mb-0 text-center">Tea Base</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="assets/food.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Food &</p>
            <p class="mb-0 text-center">Snacks</p>
          </div>
        </div>
      </div>

      <div class="row flex-column mx-0 mt-4">
        <div class="d-flex justify-content-between w-100 pl-5 my-3">
          <div class="d-flex align-items-center">
            <h4 class="mb-0" style="color: #808080">SIGNATURE MENU</h4>
          </div>
        </div>

        <div class="row mx-0 py-2" style="height: 650px; background-color: #F0FFFF">
          <div class="col-4 h-100">
            <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                  <img class="h-100" src="assets/slider/menu1.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item h-100">
                  <img class="h-100" src="assets/slider/menu2.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item h-100">
                  <img class="h-100" src="assets/slider/menu3.jpg" class="d-block w-100" alt="..." />
                </div>
              </div>
            </div>
          </div>
          <div class="col-8 h-100">
            <div id="carouselExampleIndicators2" class="carousel slide h-100" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                  <div class="row">

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/black.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Long Black Coffee</span>
                        </div>
                      </div>
                    </div>


                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/moccha.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Mocchachino</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/kbl.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Kopi Berry Lemon</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/kopsu.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Kopi Susu Kawan Lama</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/kopsuru.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Kopi Susu Kawan Baru</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/bpl.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Black Sparkling Lemon</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/kkk.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Kopi Kejunya Kawan</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/ccs2.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Creamy Candy Sunkist</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-item h-100">
                  <div class="row">
                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/cafelat.jpg" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Coffee Latte</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/ccs.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 10px;">Creamy Candy Strawberry</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/kacho.webp" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Kawan Chocolate Java</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/bf.jpg" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Biscuit Frappe</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/rf.jpg" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Red Velvet Frappe</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/cf.jpg" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Charcoal Frappe</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/mf.jpg" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Mactha Frappe</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-3 d-flex flex-column align-items-center">
                      <div class="card">
                        <img src="assets/cho.jpg" alt="" class="card-img-top"
                          style="object-fit: cover; width: 100%; height: 235px;">
                        <div class="card-body" style="text-align: center;">
                          <span style="color: #808080; font-size: 12px;">Chocolate Frappe</span>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev"
                style="left: -90px">
                <img src="assets/222.png" alt="" style="width: 50%" />
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <img src="assets/333.png" alt="" style="width: 50%; position: relative; left: 70px" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer" style="background-color: #EBD8C8">
      <div class="container pt-5" style="background-color: #EBD8C8">
        <div class="d-flex justify-content-between">
        <div class="d-flex flex-column ml-5">
          <p class="desc font-weight-bold">There's Kawan In Every Moments</p>
          <p class="desc">Open Everyday | 08.00 - 23.00 WIB</p>
          <p class="desc">Contact Us</p>
          <div class="d-flex align-items-center">
            <span class="desc font-weight-bold">Ikuti kami di</span>
            <a href="https://www.youtube.com/@kawankopi5810/featured">
              <img class="icon-media mr-2 ml-2" src="assets/youtube.png" alt="YouTube" />
            </a>
            <a href="https://www.instagram.com/kawankopi.co/?hl=en">
              <img class="icon-media mr-2" src="assets/instagram.png" alt="Instagram" />
            </a>
            <a href="https://linktr.ee/kawankopi">
              <img class="icon-media mr-2" src="assets/link.png" alt="LinkedIn" />
            </a>
            <a href="https://api.whatsapp.com/send/?phone=6285722677081&text=Hello%20Kawan%20Kopi&type=phone_number&app_absent=0"
              target="_blank">
              <img class="icon-media mr-2" src="assets/whatsapp.png" alt="WhatsApp" />
            </a>
          </div>
        </div>
          <div class="d-flex flex-column ml-5">
          <p class="desc font-weight-bold">Our Location</p>
              <p class="desc d-flex align-items-center">Jl. Imam Bonjol No.48, Lebakgede, Kecamatan Coblong, KotaBandung, Jawa Barat 40132</p>
            <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.999562800826!2d107.61292487494795!3d-6.890654193108413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7726c6db909%3A0xd5b20117a8c242e8!2sKawan%20Kopi!5e0!3m2!1sen!2sid!4v1684718232434!5m2!1sen!2sid"
                  width="460" height="200" style="border: 2px;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
        <div class="d-flex justify-content-between mt-5 pb-3" style="color: #888">
        <span> &copy; Kawan Kopi 2023. Hak Cipta Dilindungi </span>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
  </body>
</html>