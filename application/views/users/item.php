<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>"/>
    <title>Item Page</title>
  </head>
  <body>
    <a href="/">Go back</a>
    <main class="container-main">
      <div class="image">
        <img class="main-img" src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
        <img class="extra-images" src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
        <img class="extra-images" src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
        <img class="extra-images" src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
        <img class="extra-images" src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
      </div>

      <div class="container-box-main">
        <h1 class="text-letter-space label-2x">Black Belt for Staff M</h1>
        <h2 class="text-letter-space">Product Description:</h2>
        <p class="text-lg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iusto
          asperiores possimus eum natus, adipisci, voluptatum, harum autem
          dolorum dolore explicabo pariatur. Natus enim voluptatibus inventore
          placeat alias magnam dolores? Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Voluptate mollitia necessitatibus, ullam odit non
          modi blanditiis totam illo delectus, ratione minus porro nesciunt
          perferendis quam expedita aspernatur ducimus temporibus beatae? Lorem
          ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eum
          dolore nostrum amet, dignissimos error, magni quia libero at
          praesentium possimus laudantium esse architecto placeat, provident
          quibusdam! Incidunt, a dolores.
        </p>
        <form id="buy-form" action="" method="post">
          <button class="text-x-lg ">Buy</button>
          <select class="text-x-lg" name="price" id="">
            <option value="19.99">1($19.99</option>
            <option value="29.99">2($29.99</option>
            <option value="39.99">3($39.99</option>
          </select>
        </form>
      </div>
      <div class="products">
        <h3 class="text-lg text-letter-space">Similar Items:</h3>
        <div class="image shadow">
          <img src="<?= base_url('assets/img/sample.jpeg'); ?>" alt="Tshirt" />
          <div class="overlay">$19.99</div>
          <p class="text-md">
            <a href="item">Tshirts</a><span class="text-x-sm">Authentic, Yellow</span>
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
      </div>
    </main>
  </body>
</html>
