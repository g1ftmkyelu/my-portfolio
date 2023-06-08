<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
  </style>
  <title>My Projects</title>
</head>

<body onload="onPageLoad()">

  <?php include '../includes/navbar.php' ?>

  <section class="filter-box">
    <label for="text">name</label>
    <input type="text" placeholder="name..." oninput="filter()" id="text">
    <label for="technology">technology:</label>
    <select id="technology" onchange="filterByTechnology()">
      <option value="">All</option>
      <option value="laravel">laravel</option>
      <option value="ruby on rails">ruby on rails</option>
      <option value="nodejs">nodejs</option>
      <option value="nuxtjs">nuxtjs</option>
      <option value="nextjs">nextjs</option>
      <option value="express">express</option>
    </select>
    <label for="category">category:</label>
    <select id="category" onchange="filterByCategory()">
      <option value="">All</option>
      <option value="health">health</option>
      <option value="entertainment">entertainment</option>
      <option value="utility">utility</option>
      <option value="education">education</option>
    </select>
    <button onclick="resetFilters()">Reset</button>
  </section>
  <div id="projects"></div>

  <div id="overlay" onclick="closeModal()"></div>
  <div id="modal">
    <div class="dialog">
      <span id="modalContent">

      </span>
      <button onclick="closeModal()">Close</button>
    </div>
  </div>
  <script>
    function onPageLoad() {
      displayProjects();

      addFooter();
    }
  </script>
  <script src="../assets/js/projects.js"> </script>

</body>

</html>