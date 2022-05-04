<script>
function copyCode() {
  const textElement = document.getElementById("copy-code");
  const copyButton = document.getElementById("copy-btn");

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