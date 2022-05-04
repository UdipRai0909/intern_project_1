const formulatePayment = (choice, amount) => {
  const initialPay = ((10 / 100) * amount).toFixed(2);
  const totalLeft = amount - initialPay;
  if (choice == "weekly") {
    let weekPay = 0;
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
    let monthPay = 0;
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

console.log(formulatePayment("weekly", 5000));

console.log(formulatePayment("monthly", 5000));
