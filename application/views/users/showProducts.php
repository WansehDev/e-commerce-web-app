<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style3.css') ?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/f179fb6516.js"
      crossorigin="anonymous"
    ></script>

    <title>Product Page</title>
  </head>

  <body>
    <nav class="nav-container bg-gray sm md">
      <h1>Dojo eCommerce</h1>
      <div class="container-flex-right-200">
        <a href="cart" id="cart" class="text-lg">Shopping Cart (5)</a>
      </div>
    </nav>
    <main class="container-main">
      <!-- filter-box -->
      <div class="container-box shadow">
        <form action="#">
          <input
            type="search"
            name="productName"
            placeholder="Product Name"
            class="text-md align"
          /><button class="btn-img"><i class="fa-solid fa-magnifying-glass fa-3x align"></i>
          </button>
          <p class="text-x-lg">Categories</p>
          <a href="#"> Tshirts <span>25</span></a>
          <a href="#"> Shoes <span>25</span></a>
          <a href="#"> Cups <span>25</span></a>
          <a href="#"> Shorts <span>25</span></a>
          <a href="#"> Show All</a>
        </form>
      </div>

      <!-- Product Display -->
      <div
        class="container-box-main shadow md-container sm-container lg-container"
      >
        <div id="container-box-main-header">
          <h2 class="text-x-lg align">
             Tshirts(page 2)
          </h2>
          <div class="align">
            <a href="#">first</a> | <a href="#">prev</a> |
            <p>2</p>
            |
            <a href="#">next</a>
          </div>
          <form action="">
            <label for="sort">
              Sorted by:
              <select name="sort">
                <option value="price">Price</option>
                <option value="Most Popular">Most Popular</option>
              </select>
            </label>
          </form>
        </div>
        <div class="products middle-text-container">
          <div class="image shadow">
            <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
             <a href="item">Tshirts</a> <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
            <div class="overlay">$19.99</div>
            <p class="text-md">
              Tshirts <span class="text-x-sm">Authentic, Yellow</span>
            </p>
          </div>
          <div class="pagination align text-lg">
            <a href="">1</a>
            <a href="">2</a>
            <a href="">3</a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
