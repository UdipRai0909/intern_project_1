<?php

require_once '_popup_header.php';
require_once '../logic/conn.php';

// Variable to store 'get all the records' from tables -> 'orders'
$orders = $crud->getOrders();

?>

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

<?php require_once '_popup_footer.php'; ?>