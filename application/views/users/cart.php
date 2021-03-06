<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>"/>
    <script
      src="https://kit.fontawesome.com/f179fb6516.js"
      crossorigin="anonymous"
    ></script>

    <title>Shopping Cart</title>
  </head>
  <body>
  <nav class="nav-container bg-gray sm md">
      <h1>Dojo eCommerce</h1>
      <div class="container-flex-right-200">
        <a href="cart" id="cart" class="text-lg">Shopping Cart (5)</a>
      </div>
    </nav>
    <div class="cart-main">
      <table class="table-main shadow">
        <thead class="text-md text-letter-space">
          <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Black Belt for Staff</td>
            <td>$20.00</td>
            <td>
              <p class="text-lg">1</p>
              <div>
                <a href="" class="btn-default">update</a
                ><button class="btn btn-del">
                  <i class="fa-solid fa-trash-can fa-2x"></i>
                </button>
              </div>
            </td>
            <td>$20.00</td>
          </tr>
          <tr>
            <td>Black Belt for Staff</td>
            <td>$20.00</td>
            <td>
              <p class="text-lg">1</p>
              <div>
                <a href="" class="btn-default">update</a
                ><button class="btn btn-del">
                  <i class="fa-solid fa-trash-can fa-2x"></i>
                </button>
              </div>
            </td>
            <td>$20.00</td>
          </tr>
          <tr>
            <td>Black Belt for Staff</td>
            <td>$20.00</td>
            <td>
              <p class="text-lg">1</p>
              <div>
                <a href="" class="btn-default">update</a
                ><button class="btn btn-del">
                  <i class="fa-solid fa-trash-can fa-2x"></i>
                </button>
              </div>
            </td>
            <td>$20.00</td>
          </tr>
          <tr>
            <td>Black Belt for Staff</td>
            <td>$20.00</td>
            <td>
              <p class="text-lg">1</p>
              <div>
                <a href="" class="btn-default">update</a
                ><button class="btn btn-del">
                  <i class="fa-solid fa-trash-can fa-2x"></i>
                </button>
              </div>
            </td>
            <td>$20.00</td>
          </tr>
        </tbody>
      </table>
      <div class="components-left">
        <p class="text-lg label text-letter-space">
          <strong>Total: $80.00</strong>
        </p>
        <a href="/" class="btn btn-default text-letter-space"
          >Continue Shopping</a
        >
      </div>
      <div id="forms">
        <form class="form-fields-default" action="">
          <div id="input-data">
            <h2 class="text-letter-space">Shipping Information :</h2>
            <label for="first_name" class="text-lg text-letter-space">
              First Name:
            </label>
            <input
              type="text"
              name="first_name"
              id="first_name"
              class="input-default"
            />
            <label for="last_name" class="text-lg text-letter-space">
              Last Name:
            </label>
            <input
              type="text"
              name="last_name"
              id="last_name"
              class="input-default"
            />
            <label for="address" class="text-lg text-letter-space">
              Address: </label
            ><input
              type="text"
              name="address"
              id="address"
              class="input-default"
            />
            <label for="address2" class="text-lg text-letter-space">
              Address 2:
            </label>
            <input
              type="text"
              name="address2"
              id="address2"
              class="input-default"
            />
            <label for="city" class="text-lg text-letter-space"> City: </label>
            <input type="text" name="city" id="city" class="input-default" />
            <label for="state" class="text-lg text-letter-space"> State: </label
            ><input type="text" name="state" id="state" class="input-default" />
            <label for="zip" class="text-lg text-letter-space"> Zip: </label>
            <input type="text" name="zip" id="zip" class="input-default" />
          </div>
        </form>
        <form class="form-fields-default" action="">
          <div id="input-billing-data">
            <h2 class="text-letter-space label">Billing Information :</h2>
            <input type="checkbox" name="same" />
            <label for="same">Same as Shipping</label>
            <label for="first_name" class="text-lg text-letter-space">
              First Name:
            </label>
            <input
              type="text"
              name="first_name"
              id="first_name"
              class="input-default"
            />
            <label for="last_name" class="text-lg text-letter-space">
              Last Name:
            </label>
            <input
              type="text"
              name="last_name"
              id="last_name"
              class="input-default"
            />
            <label for="address" class="text-lg text-letter-space">
              Address: </label
            ><input
              type="text"
              name="address"
              id="address"
              class="input-default"
            />
            <label for="address2" class="text-lg text-letter-space">
              Address 2:
            </label>
            <input
              type="text"
              name="address2"
              id="address2"
              class="input-default"
            />
            <label for="city" class="text-lg text-letter-space"> City: </label>
            <input type="text" name="city" id="city" class="input-default" />
            <label for="state" class="text-lg text-letter-space"> State: </label
            ><input type="text" name="state" id="state" class="input-default" />
            <label for="zip" class="text-lg text-letter-space"> Zip: </label>
            <input type="text" name="zip" id="zip" class="input-default" />
            <label for="card" class="text-lg text-letter-space">
              Card Number:
            </label>
            <input type="text" name="card" id="" class="input-default" />
            <label for="security_code" class="text-lg text-letter-space">
              Security Code:
            </label>
            <input type="text" name="security_code" class="input-default" />
            <label for="exp_date" class="text-lg text-letter-space">
              Expiration Date:
            </label>
            <input type="date" name="exp_date" class="input-default" />
            <input class="btn btn-default btn-pay" type="submit" value="Pay" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
