<?php

// require_once '_header.php';
require_once 'php/logic/conn.php';

// Variable to store 'get all the records' from tables -> 'orders'
$orders = $crud->getOrders();
?>

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
          <span class="text-decoration-none text-white">History (Payments/ Orders)</span>
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