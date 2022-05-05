<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<script>
function copyCode1() {
  const textElement = document.getElementById("copy-code1");
  const copyButton = document.getElementById("copy-btn1");

  const copyText = (e) => {
    window.getSelection().selectAllChildren(textElement);
    document.execCommand("copy");
    e.target.setAttribute("tooltip", "Copied! ✅");
  };

  const resetTooltip = (e) => {
    e.target.setAttribute("tooltip", "Copy to clipboard");
  };

  copyButton.addEventListener("click", (e) => copyText(e));
  copyButton.addEventListener("mouseover", (e) => resetTooltip(e));
}

function copyCode2() {
  const textElement = document.getElementById("copy-code2");
  const copyButton = document.getElementById("copy-btn2");

  const copyText = (e) => {
    window.getSelection().selectAllChildren(textElement);
    document.execCommand("copy");
    e.target.setAttribute("tooltip", "Copied! ✅");
  };

  const resetTooltip = (e) => {
    e.target.setAttribute("tooltip", "Copy to clipboard");
  };

  copyButton.addEventListener("click", (e) => copyText(e));
  copyButton.addEventListener("mouseover", (e) => resetTooltip(e));
}
</script>


</body>

</html>