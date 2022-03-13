    <main class="container-main-box">
      <form class="form-container-max" action="" method="post">
        <i class="fa-solid fa-magnifying-glass fa-2x align"
          ><input type="search" placeholder="Search"
        /></i>
        <div class="align-right">
          <select class="select-default align" name="order">
            <option value="show">Show All</option>
            <option value="oip">Order in Process</option>
            <option value="shipped">Shipped</option>
            <option value="cancel">Cancelled</option>
          </select>
        </div>
      </form>
      <div id="order">
        <table class="table-main shadow">
          <thead class="text-md text-letter-space">
            <tr>
              <th>Order ID</th>
              <th>Name</th>
              <th>Date</th>
              <th>Billing Address</th>
              <th>Total</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="text-lg">
            <tr>
              <td><a href="info">1</a></td>
              <td>John</td>
              <td>9/6/2014</td>
              <td>123 dojo way Bellevue WA 98005</td>
              <td>$149.99</td>
              <td class="status"><select class="select-default" name="status">
                <option value="orderin">Order In</option>
                <option value="cancelled">Cancelled</option>
                <option value="shipped">Shipped</option>
              </select>
            </td>
            </tr>
            <tr>
              <td><a href="info.html">1</a></td>
              <td>John</td>
              <td>9/6/2014</td>
              <td>123 dojo way Bellevue WA 98005</td>
              <td>$149.99</td>
              <td class="status">
                <select class="select-default" name="status" >
                <option value="orderin">Order In</option>
                <option value="cancelled">Cancelled</option>
                <option value="shipped">Shipped</option>
              </select>
            </td>
            </tr>
            <tr>
              <td><a href="info.html">1</a></td>
              <td>John</td>
              <td>9/6/2014</td>
              <td>123 dojo way Bellevue WA 98005</td>
              <td>$149.99</td>
              <td class="status"><select class="select-default" name="status">
                <option value="orderin">Order In</option>
                <option value="cancelled">Cancelled</option>
                <option value="shipped">Shipped</option>
              </select>
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
  </body>
</html>
