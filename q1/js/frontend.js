/////// FRONTEND PART ///////

// #region Dynamic value for total price
function foodClickHandler(e) {
  let input = document.getElementsByClassName("cbox"),
    total = 0;

  for (let i = 0; i < input.length; i++) {
    if (input[i].checked) {
      let current = input[i].parentNode.parentNode.nextElementSibling.innerHTML;
      total += parseInt(current);
    }
  }
  document.getElementById("totalPrice").innerHTML = total;
  localStorage.setItem("totalPrice", total);
}
// #endregion

// #region Keep selecting the food checkboxes on page refresh

// Shorthand for $(document).ready(function() {
if (localStorage.length > 0) {
  $.each(localStorage, function (index, item) {
    if ($("#" + index)[0]) {
      if (item == "true") $("#" + index).attr("checked", "checked");
    }
  });
}
$(".cbox").on("change", function () {
  localStorage.setItem(
    $(this).attr("id"),
    $(this).is(":checked") ? true : false
  );
});

let input = document.getElementsByClassName("cbox"),
  total = 0;

for (let i = 0; i < input.length; i++) {
  if (input[i].checked) {
    let current = input[i].parentNode.parentNode.nextElementSibling.innerHTML;
    total += parseInt(current);
  }
}
document.getElementById("totalPrice").innerHTML = total;
localStorage.setItem("totalPrice", total);

// #endregion

// #region Modal Box for Payments/Orders History
$(".trigger1").on("click", function () {
  $(".modal-wrapper.pay").toggleClass("open");
  $(".page-wrapper.pay").toggleClass("blur-it");
  return false;
});

$(".trigger2").on("click", function () {
  $(".modal-wrapper.order").toggleClass("open");
  $(".page-wrapper.order").toggleClass("blur-it");
  return false;
});
// #endregion
