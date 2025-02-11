<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>




      <div id="banner" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-light">
                    <h1> WELCOME</h1>
                    <p> </p>
                    <a href=""  class="btn btn-brand">tum oka di</a>
                </div>
            </div>
        </div>
      </div>
      <!-- About Section -->
      <section id="about">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <img src="pic-000.jpg" alt="">
            </div>
              <div class="col-lg-6">
                <h2>ABOUT US</h2>
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, praesentium omnis, veniam, consequuntur ad qui nihil earum sapiente culpa molestiae ab. Adipisci fuga nesciunt fugiat reprehenderit quae incidunt exercitationem ipsam.</h4>
                <p>
                
                </p>
                <a href="#about" class="btn btn-brand"> Pinduta lang </a>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- SERVICES -->
      <section id="services">
        <div class="container">
          <div class="text-center">   
            <h2>SERVICES</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi non aliquid nesciunt facere, beatae dolorum? Rerum perspiciatis quo sit voluptas quis sed vero aperiam quasi provident, architecto tenetur doloremque atque!</p>
          </div>
          <div class="row">
            <div class="col-lg-4 d-flex align-items-center">
              <div class="card text-center p-3" style="width: 22rem;">
                <img src="world.png" class="card-img-top kalibutan-png mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center">
              <div class="card text-center p-3" style="width: 22rem;">
                <img src="world.png" class="card-img-top kalibutan-png mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center">
              <div class="card text-center p-3" style="width: 22rem;">
                <img src="world.png" class="card-img-top kalibutan-png mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
       
        </div>
      </section>

      <?php
      include("section/review.php");
      ?>
      

      <!-- footer -->
    <footer class="footer text-white" id="footer">
        <div class="container">
            <div class="row al">
                <div class="col-md-3 col-sm-6 text-lg-start text-center">
                    <a class="navbar-brand" href="#">
                        <img src="avatar15.jpg" alt="Logo" height="60px">
                    </a>
                    <h5 class="mt-4">About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start ps-lg-5 ps-0 text-center ">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Service 1</a></li>
                        <li><a href="#">Service 2</a></li>
                        <li><a href="#">Service 3</a></li>
                        <li><a href="#">Service 4</a></li>
                        <li><a href="#">Service 5</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start text-center">
                    <h5>Contact Us</h5>
                    <p>123 Street Name,<br>City, Country</p>
                    <p>Email: example@example.com<br>Phone: +1234567890</p>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start  text-center">
                    <h5>Newsletter</h5>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" style="border-radius: 1px;" placeholder="Email"
                                aria-label="email" aria-describedby="button-addon2">
                            <button class="btn btn-outline-light" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </form>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </footer>


    
</body>
</html>

