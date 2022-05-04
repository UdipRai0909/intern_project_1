<?php

// require_once '_header.php';
require_once 'php/logic/conn.php';

// Variable to store 'get all the records' from tables -> 'payments'
$payments = $crud->getpayments();
?>

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
          <span class="text-decoration-none text-white">History (Payments/ Orders)</span>
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



<?php
// require_once '_footer.php'; 
?>