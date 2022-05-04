<?php
$img = '../q1/img/udip_logo.png';
$css = '../q1/css/root1.css';
require_once '../q1/php/includes/_main_head.php';
?>

<!-- The text field -->
<div class="container" id="question2">
  <div class="my_nav_logo">
    <a href="../">
      <img src="<?= $img ?>" width="120" height="115" alt="My Nav Logo">
    </a>
    <h2>Task 2: Lets Debug</h2>
  </div>
  <p id="msg">Double click to copy</p>
  <button id="copy-btn" class="btn-copy-me" onclick="copyCode()">Copy code</button>
  <h1 class="btn-copy-me">Question</h1>
  <div class="row">
    <pre>
      <code>
<b>A cricket player gets a contract of 3 years to play for a
team in IPL. He has an option to choose how he want to get
paid. It could be weekly or monthly.

10% of the total amount will be paid at the time of signing
the contract and remaining will be paid trough installments.
The payment can be completed before the contract ends but
cannot exceed more than contract period. Weekly payment can
be multiple of 50 and monthly payment can be multiple of 100.

<i>Example: if weekly amounts happens to be $122 round it to
$150. If monthly amounts happens to be $122 round it to
$200.
Here is the function which calculates the amount to be paid.
Your task will be to find mistakes and improve the code
efficiency.
Feel free to change code structure and variable names as you
see fit.</i></b>
  </code>
</pre>
  </div>
  </p>
  <h1 class="btn-copy-me">Answer</h1>
  <div class="row">
    <pre>
      <code id="copy-code">
const formulatePayment = (choice, amount) => {
  const initialPay = ((10 / 100) * amount).toFixed(2);
  const totalLeft = amount - initialPay;
  if (choice == "weekly") {
    let weekPay = 50;
    let weekly = totalLeft / weekPay;
    while (weekly > 156) {
      weekPay = weekPay + 50;
      let weeks = totalLeft / weekPay;
      if (weeks % 50 !== 0) {
        weekly = Math.ceil(weeks);
      }
    }
    console.log(`You will be paid ${weekPay} for ${weekly} weeks.`);
    return { weeks: weekly, amount: weekPay };
  } else if (choice == "monthly") {
    let monthPay = 100;
    let monthly = totalLeft / monthPay;
    while (monthly > 36) {
      monthPay = monthPay + 100;
      let months = totalLeft / monthPay;
      if (months % 100 !== 0) {
        monthly = Math.ceil(months);
      }
    }
    console.log(`\n You will be paid ${monthPay} for ${monthly} months.`);
    return { months: monthly, amount: monthPay };
  } else {
    return null;
  }
};

// Testing some possible outcomes / outputs
console.log(`===========================================`);
console.log(`Testing the results in examples provided ::`);
console.log(`===========================================\n`);

console.log("Suppose the amount to be paid is 5000. Then,\n");
console.log("10% of 5000 = 500 will be paid initially.\n");
console.log("Remaining = 5000 - 500 = 4500\n");
console.log("That amount will be paid like so:\n");

console.log(`-------------------------------------------\n`);

console.log(formulatePayment("weekly", 5000));

console.log("\n50 will be paid weekly for 90 weeks = 50 * 90 = 4500.\n");

console.log(`-------------------------------------------`);

console.log(formulatePayment("monthly", 5000));

console.log("\n200 will be paid monthly for 23 months = 200 * 23 = 4600");
console.log(
  "Here, Remaining is 4500 and The amount paid cannot be 4400, thereby, it is +200.\n"
);

console.log(`-------------------------------------------`);
      </code>
</pre>
  </div>
</div>

<!-- The button used to copy the text -->


<?php require_once '../q1/php/includes/_main_foot.php'; ?>