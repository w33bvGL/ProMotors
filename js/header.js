document.addEventListener("DOMContentLoaded", function () {
  var header = document.getElementById("fixedHeader");

  window.addEventListener("scroll", function () {
    if (window.scrollY >= 120) {
      header.style.top = "0";
      header.style.position = "sticky";
      header.style.borderColor = "#242424";
      header.style.backgroundColor = "#121212";
    } else {
      header.style.top = "-80px";
      header.style.borderColor = "#161616";
      header.style.backgroundColor = "#161616";
    }
  });
});
