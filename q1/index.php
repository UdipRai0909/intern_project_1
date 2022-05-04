<?php
require_once './php/includes/_header.php';
require_once './php/logic/conn.php';
phpinfo();

// Variable to store 'get all the records' from tables -> 'payments' & 'orders'
$payments = $crud->getpayments();
$orders = $crud->getOrders();
?>

<!-- Menu section -->
<section>
  <div class="col py-3 my-0">
    <div class="card-big-shadow">
      <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
        <div class="content px-2">
          <h6 class="category">SERVED ALL DAY</h6>
          <h4 class="title my-1 bg-dark">Breakfast</h4>

          <table class="table">
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="one" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="one">BISCUITS W GRAVY</label>
                </div>
              </th>
              <td>350</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="two" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="two">HOUSE WAFFLES</label>
                </div>
              </th>
              <td>450</td>
            </tr>
            <tr></tr>
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="three" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="three">FRENCH TOAST</label>
                </div>
              </th>
              <td>150</td>
            </tr>
            <tr></tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col py-3 my-0">
    <div class="card-big-shadow">
      <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
        <div class="content px-2">
          <h6 class="category">SERVED FROM 11AM-5PM</h6>
          <h4 class="title my-1 bg-dark">Lunch</h4>

          <table class="table">
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="four" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="four">SANDWICH W FRIES</label>
                </div>
              </th>
              <td>190</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="five" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="five">CLS TURKEY CLUB</label>
                </div>
              </th>
              <td>550</td>
            </tr>
            <tr></tr>
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="six" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="six">GRS FED BORGER</label>
                </div>
              </th>
              <td>275</td>
            </tr>
            <tr></tr>
          </table>
        </div>
        <!-- end card -->
      </div>
    </div>
  </div>
  <div class="col py-3 my-0">
    <div class="card-big-shadow">
      <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
        <div class="content px-2">
          <h6 class="category">SERVED ALL DAY</h6>
          <h4 class="title my-1 bg-dark">Salad</h4>

          <table class="table">
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="seven" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="seven">HOUSE SALAD</label>
                </div>
              </th>
              <td>400</td>
            </tr>
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="eight" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="eight">QUINOA SALAD</label>
                </div>
              </th>
              <td>350</td>
            </tr>
            <tr></tr>
            <tr>
              <th scope="row">
                <div class="box">
                  <input id="nine" class="cbox" type="checkbox" onclick="foodClickHandler(this);" />
                  <span class="check"></span>
                  <label for="nine">NEPALI SALAD</label>
                </div>
              </th>
              <td>200</td>
            </tr>
            <tr></tr>
          </table>
        </div>
        <!-- end card -->
      </div>
    </div>
  </div>
</section>

<!-- Billing Section -->
<section>
  <div class="d-flex justify-content-between align-items-center text-white">

    <div class="sec1 ms-0 bg-dark p-2 text-center">
      <span class="text-uppercase display-6 text-decoration-underline">TOTAL</span>
      <br />

      <span class="text-warning">
        <strong>NPR.</strong>
        <span id="totalPrice" class="display-6">0</span>
      </span>

      <form id="delete_all_form" method="POST" class="d-inline">
        <button id=" deleteAll" class="mx-1 mb-5 btn btn-danger border border-light">Delete All</button>
      </form>
    </div>

    <div class="sec2 bg-dark p-2 text-center">
      <span class="text-uppercase display-6 text-decoration-underline">History</span>
      <br />

      <div class="d-flex historyTab justify-content-center align-items-center">

        <!-- Button -->
        <div class="page-wrapper pay">
          <button id="payHistory" type="button" class="mx-1 btn btn-primary border border-light">
            <a class="text-white text-decoration-none trigger1" href="#">Payments</a>
          </button>
        </div>

        <!-- Modal -->
        <div class="modal-wrapper pay">
          <div class="modal">
            <div class="head">
              <a class="btn-close trigger1" href="#">
                <i class="fa fa-times" aria-hidden="true"></i>
              </a>
            </div>
            <div class="content">
              <div class="db-table">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                <h1 class="main-title gradient-border">
                  <span class="text-decoration-none text-white">Payments</span>
                </h1>
                <table class="table table-striped table-dark border border-light">
                  <thead>
                    <tr>
                      <th scope="col">ID (Order)</th>
                      <th scope="col">Name of foods (Payed)</th>
                      <th scope="col">Total Price</th>
                      <th scope="col">Date of Payment</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($r = $payments->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <th scope="row"><?php echo $r['payment_id'] ?></th>
                      <td><?php echo $r['name_paid'] ?></td>
                      <td><?php echo $r['total_price'] ?></td>
                      <td><?php echo $r['date_of_payment'] ?></td>
                    </tr>
                    <?php } ?>


                    <?php if (empty($payments->fetch(PDO::FETCH_ASSOC))) { ?>
                    <tr>
                      <th colspan="4" class="no_records_th">No other records in Database!</th>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="page-wrapper order">

          <button id="ordHistory" type="button" class="mx-1 btn btn-primary border border-light">
            <a class="text-white text-decoration-none trigger2" href="#">Orders</a>
          </button>

        </div>

        <!-- Modal -->
        <div class="modal-wrapper order">
          <div class="modal">
            <div class="head">
              <a class="btn-close trigger2" href="#">
                <i class="fa fa-times" aria-hidden="true"></i>
              </a>
            </div>
            <div class="content">
              <div class="db-table">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                <h1 class="main-title gradient-border">
                  <span class="text-decoration-none text-white">Orders</span>
                </h1>
                <table class="table table-striped table-dark border border-light">
                  <thead>
                    <tr>
                      <th scope="col">ID (Order)</th>
                      <th scope="col">Name of foods (Ordered)</th>
                      <th scope="col">Total Price</th>
                      <th scope="col">Date of Order</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($r = $orders->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <th scope="row"><?php echo $r['order_id'] ?></th>
                      <td><?php echo $r['name_order'] ?></td>
                      <td><?php echo $r['total_price'] ?></td>
                      <td><?php echo $r['date_of_order'] ?></td>
                    </tr>
                    <?php } ?>


                    <?php if (empty($orders->fetch(PDO::FETCH_ASSOC))) { ?>
                    <tr>
                      <th colspan="4" class="no_records_th">No other records in Database!</th>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sec3 mr-0 bg-dark p-2 text-center">
      <span class="text-uppercase display-6 text-decoration-underline">CHOOSE</span>
      <br />
      <div class="w-auto h-auto d-flex justify-content-center align-items-center">
        <form id="payment_form" class="m-0 mx-1" method="POST">
          <button type="submit" name="paymentBtn" class="btn btn-success border border-light">Pay now</button>
        </form>

        <form id="order_form" class="m-0 mx-2" method="POST">
          <button type="submit" name="orderBtn" class="btn btn-success border border-light">Order
            now</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require_once './php/includes/_footer.php'; ?>