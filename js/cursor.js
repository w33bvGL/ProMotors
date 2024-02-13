var mouseX = 0;
var mouseY = 0;
var cursorSpeed = 0.2; // speed

function moveWithCursor(event) {
  var cursor = document.getElementById("cursor");

  mouseX = event.pageX - 10;
  mouseY = event.pageY - 10;

  cursor.style.left = lerp(cursor.offsetLeft, mouseX, cursorSpeed) + "px";
  cursor.style.top = lerp(cursor.offsetTop, mouseY, cursorSpeed) + "px";

  var targetTags = ["p", "h1", "h2", "h3", "span", "li", "a", "button"];

  var hoveredElement = document.elementFromPoint(event.clientX, event.clientY);

  if (targetTags.includes(hoveredElement.tagName.toLowerCase())) {
    cursor.classList.add("expand");
  } else {
    cursor.classList.remove("expand");
  }
}

function lerp(start, end, t) {
  return start * (1 - t) + end * t;
}
