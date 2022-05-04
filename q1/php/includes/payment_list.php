<?php

require_once '_popup_header.php';
require_once '../logic/conn.php';

// Variable to store 'get all the records' from tables -> 'payments'
$payments = $crud->getPayments();

ini_set('display_errors', 1);
error_reporting(-1);

?>

<table class="table table-striped table-dark border border-light">
  <thead>
    <tr>
      <th scope="col">ID (Payment)</th>
      <th scope="col">Name of foods (Paid)</th>
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


<?php require_once '_popup_footer.php'; ?>