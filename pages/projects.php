<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
  <style>
  </style>
  <title>My Projects</title>
</head>

<body onload="onPageLoad()">

  <?php include '../includes/navbar.php' ?>

  <div style="display: flex; justify-content: center; align-items: center; padding:16px; font-weight: bold; font-size: 16px; background-color: lightgray;  border-bottom: 7px solid green;">
    <label for="text"><i class="fa-solid fa-file-signature"></i>name:</label>
    <input style="padding: 2px; margin-right: 18px;" type="text" placeholder="name..." oninput="filter()" id="text">
    <label for="technology"><i class="fa-solid fa-microchip"></i>technology:</label>

    
    <select style="padding: 2px; margin-right: 18px;" id="technology" onchange="filterByTechnology()">
      <option value="">All</option>
      <option value="laravel">laravel</option>
      <option value="ruby on rails">ruby on rails</option>
      <option value="nodejs">nodejs</option>
      <option value="nuxtjs">nuxtjs</option>
      <option value="nextjs">nextjs</option>
      <option value="express">express</option>
    </select>
    <label for="category"><i class="fa-solid fa-layer-group"></i>category:</label>
    <select style="padding: 2px; margin-right: 8px;" id="category" onchange="filterByCategory()">
      <option value="">All</option>
      <option value="health">health</option>
      <option value="entertainment">entertainment</option>
      <option value="utility">utility</option>
      <option value="education">education</option>
    </select>
    <button style="border: none; padding: 5px; font-size: 16px;" onclick="resetFilters()"><i class="fa-solid fa-arrows-rotate"></i>Reset</button>
</div>


  <div id="projects"></div>

  <div id="overlay" style="opacity: 0.7;" onclick="closeModal()"></div>
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