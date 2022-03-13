
    <main class="container-main-box">
      <form class="form-container-max" action="" method="post">
        <i class="fa-solid fa-magnifying-glass fa-2x align"
          ><input type="search" placeholder="Search"
        /></i>
        <div class="align-right">
          <button class="btn btn-default text-md" formaction="add">
            Add New Product
          </button>
        </div>
      </form>
      <div id="admin-products">
        <table class="table-main shadow">
          <thead class="text-md text-letter-space">
            <tr>
              <th>Picture</th>
              <th>ID</th>
              <th>Name</th>
              <th>Inventory Count</th>
              <th>Quantity Sold</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="text-md">
            <tr>
              <td class="middle-text-container">
                <img class="shadow" src="<?= base_url('assets/img/sample.jpeg') ?>" alt="Tshirt" />
              </td>
              <td>1</td>
              <td>Tshirt</td>
              <td>123</td>
              <td>1000</td>
              <td class="action">
                <button class="btn btn-default btn-update modal-btn">
                  Update
                </button>
                <button class="btn btn-default btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td class="middle-text-container">
                <img class="shadow" src="<?= base_url('assets/img/sample.jpeg') ?>" alt="Tshirt" />
              </td>
              <td>1</td>
              <td>Tshirt</td>
              <td>123</td>
              <td>1000</td>
              <td class="action">
                <button class="btn btn-default btn-update modal-btn">
                  Update
                </button>
                <button class="btn btn-default btn-delete">Delete</button>
              </td>
            </tr>
            <tr>
              <td class="middle-text-container">
                <img class="shadow" src="<?= base_url('assets/img/sample.jpeg') ?>" alt="Tshirt" />
              </td>
              <td>1</td>
              <td>Tshirt</td>
              <td>123</td>
              <td>1000</td>
              <td class="action">
                <button class="btn btn-default btn-update modal-btn">
                  Update
                </button>
                <button class="btn btn-default btn-delete">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="pagination align text-lg">
          <a href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
        </div>
      </div>
    </main>

    <!-- Modal for editing product -->
    <div id="simple-modal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="text-x-lg align">Edit Product #2</h2>
          <div class="close-btn-container align">
            <span class="close-btn">✖</span>
          </div>
        </div>
        <div class="modal-body">
          <form class="form-fields-default" action="" method="post">
            <label for="first_name" class="text-lg text-letter-space">
              Name:
            </label>
            <input type="text" name="item_name" />
            <label for="first_name" class="text-lg text-letter-space">
              Description:
            </label>
            <textarea name="content" cols="30" rows="10"></textarea>
            <label for="categories" class="text-lg text-letter-space">
              Categories:
            </label>
            <div class="select">
              <ul>
                <li values="1" class="option">T-Shirt</li>
                <li values="2" class="option">Shoes</li>
                <li values="3" class="option">Cup</li>
              </ul>
            </div>
            <label for="add-category" class="text-sm">
              or add a new category:
            </label>
            <input type="text" name="add-category" />
            <label for="Images" class="text-lg text-letter-space">
              Images:
            </label>
            <input type="file" name="images" value="Upload" />
            <ul id="sortable">
              <li class="shadow">
                <i class="fa-solid fa-bars fa-2x"></i>
                <div>
                    <img class="shadow" src="<?= base_url('assets/img/sample.jpeg') ?>" alt="Tshirt" />
                  <p>Sample.png</p>
                </div>
                <div>
                  <button id="btnDelete" class="btn">
                    <i class="fa-solid fa-trash-can fa-2x"></i>
                  </button>
                  <label for="main"
                    ><input type="checkbox" name="main" />Main</label
                  >
                </div>
              </li>
              <li class="shadow">
                <i class="fa-solid fa-bars fa-2x"></i>
                <div>
                    <img class="shadow" src="<?= base_url('assets/img/sample.jpeg') ?>" alt="Tshirt" />
                  <p>Sample.png</p>
                </div>
                <div>
                  <button id="btnDelete" class="btn">
                    <i class="fa-solid fa-trash-can fa-2x"></i>
                  </button>
                  <label for="main"
                    ><input type="checkbox" name="main" />Main</label
                  >
                </div>
              </li>
              <li class="shadow">
                <i class="fa-solid fa-bars fa-2x"></i>
                <div>
                    <img class="shadow" src="<?= base_url('assets/img/sample.jpeg') ?>" alt="Tshirt" />
                  <p>Sample.png</p>
                </div>
                <div>
                  <button id="btnDelete" class="btn">
                    <i class="fa-solid fa-trash-can fa-2x"></i>
                  </button>
                  <label for="main"
                    ><input type="checkbox" name="main" />Main</label
                  >
                </div>
              </li>
            </ul>
          </form>
        </div>
        <div class="modal-footer">
          <button id="cancel" class="btn btn-default">Cancel</button>
          <button id="preview" class="btn btn-default btn-lightgreen">Preview</button>
          <button id="update" class="btn btn-default btn-dodgerblue">Update</button>
        </div>
      </div>
    </div>
  </body>
</html>
