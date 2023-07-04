<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/* Styling for the navbar */
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 60px;
  height: 100vh;
  background-color: yellow;
  transition: width 0.3s;
  z-index: 1; /* Ensure the navbar is above the container */
}

.navbar.expanded {
  width: 25%; /* Expand to the right by 25% of the screen */
}

.arrow-button {
  width: 100%;
  height: 60px;
  border: none;
  background-color: yellow;
  color: black;
  font-size: 24px;
}

/* Styling for the container */
.container {
  margin-left: 60px; /* Set the same value as the navbar's initial width */
  background-color: blue;
  padding: 20px;
  height: 100vh;
  transition: margin-left 0.3s;
}

.container.pushed {
  margin-left: 25%; /* Move 25% to the right when navbar is expanded */
}

    </style>
</head>
<body>
<div class="navbar" id="navbar">
  <button class="arrow-button" onclick="toggleNavbar()">&#8592;</button>
</div>

<div class="container" id="container">
  <!-- Your page content goes here -->
</div>


</body>
<script>
function toggleNavbar() {
  var navbar = document.getElementById('navbar');
  var container = document.getElementById('container');
  
  navbar.classList.toggle('expanded');
  container.classList.toggle('pushed');
}

</script>
</html>