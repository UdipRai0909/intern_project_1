/////// BACKEND PART ///////

// #region Common Functions
function getName() {
  let input = document.getElementsByClassName("cbox"),
    names = "";

  for (let i = 0; i < input.length; i++) {
    if (input[i].checked) {
      let current = input[i].nextElementSibling.nextElementSibling.innerHTML;
      names += current + ", ";
    }
  }
  return names.slice(0, -2);
}

function getPrice() {
  let priceTag = document.getElementById("totalPrice").innerHTML,
    price = parseInt(priceTag);
  return price;
}

function getDateTime() {
  let today = new Date();

  let dateTime =
    today.toISOString().split("T")[0] +
    " " +
    today.toTimeString().split(" ")[0];
  return dateTime;
}
// #endregion

// #region Utilities

// #endregion

// #region Payment Form - AJAX Call
$("#payment_form").bind("click", function (event) {
  if (getName() !== "") {
    // let formData = { name: getName(), price: getPrice(), time: getDateTime() };
    // using this page stop being refreshing
    $(document).ajaxStop(function () {
      // window.location.reload();
      window.location = "./index.php?success=inserted_payment";
    });

    event.preventDefault();
    $.ajax({
      type: "POST",
      url:
        "./php/includes/payment_insert.php?name=" +
        getName() +
        "&price=" +
        getPrice() +
        "&time=" +
        getDateTime(),
      async: false,
      dataType: "json",
      // data: { dummy: formData },
      data: { success: "inserted_payment" },
      contentType: "application/json",
      success: function (response) {
        console.log(response);
      },
      failure: function (response) {
        alert(response.d);
      },
    });
  } else {
    alert("No option selected. Please choose some food options.");
  }
});
// #endregion

// #region Order Form - AJAX Call
$("#order_form").bind("click", function (event) {
  if (getName() !== "") {
    // let formData = { name: getName(), price: getPrice(), time: getDateTime() };
    // using this page stop being refreshing
    $(document).ajaxStop(function () {
      // window.location.reload();
      window.location = "./index.php?success=inserted_order";
    });

    event.preventDefault();
    $.ajax({
      type: "POST",
      url:
        "./php/includes/order_insert.php?name=" +
        getName() +
        "&price=" +
        getPrice() +
        "&time=" +
        getDateTime(),
      async: false,
      dataType: "json",
      // data: { dummy: formData },
      data: { success: "inserted_order" },
      contentType: "application/json",
      success: function (response) {
        console.log(response);
      },
      failure: function (response) {
        alert(response.d);
      },
    });
  } else {
    alert("No option selected. Please choose some food options.");
  }
});
// #endregion

// #region Delete everything - AJAX Call
$("#delete_all_form").bind("click", function (event) {
  let confirmThis = confirm(
    "Are you sure you want to remove everything from database?"
  );

  if (confirmThis) {
    $(document).ajaxStop(function () {
      // window.location.reload();
      window.location = "./index.php?success=deleted_everything";
    });

    event.preventDefault();
    $.ajax({
      type: "POST",
      url: "./php/includes/delete_all.php?delete_all=true",
      async: false,
      dataType: "json",
      data: { success: "deleted_all" },
      contentType: "application/json",
      success: function (response) {
        console.log(response);
      },
      failure: function (response) {
        alert(response.d);
      },
    });
  } else {
    alert("That was a close call, mate.");
    window.location.href = "./index.php?success=" + "";
  }
});
// #endregion
