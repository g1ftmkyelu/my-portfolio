<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/contact.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
  <title>Contact</title>
  <style>
    #map {
      height: 80vh;
      display: none;
    }

    #result {
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: .5rem;
      display: none;
    }
  </style>
</head>

<body onload="onPageLoad()">
  <?php include '../includes/navbar.php' ?>
  <main>
    <div id="result"></div>
    <div id="map"></div>
    <section>
      <h2>Contact Information</h2>
      <ul>
        <li><strong>Email:</strong> mkyelugift@gmail.com</li>
        <li><strong>Phone:</strong> +265 995 751 617</li>
        <li><strong>Address:</strong>Luwinga, Mzuzu, Northen region, Malawi</li>
      </ul>
    </section>

    <section id="form-container">
      <h2>Contact Form</h2>
      <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" required>

        <label for="message">Message:</label>
        <textarea id="message" required></textarea>

        <button type="submit">submit</button>
      </form>
    </section>
  </main>
</body>

<script>
 function onPageLoad() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
      let result = document.querySelector("#result");
      result.style.display = "block";
      result.innerText = "Getting the position information...";
    } else {
      alert('Your browser does not support geolocation');
    }
  }

  function successCallback(position) {
    let result = document.querySelector("#result");
    result.style.display = "block";
    result.innerText = "Lat: " + position.coords.latitude + ", Long: " + position.coords.longitude;

    let mapContainer = document.querySelector("#map");
    mapContainer.style.display = "block";

    const map = L.map("map").setView([position.coords.latitude, position.coords.longitude], 13);

    const tiles = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    const marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
  }

  function errorCallback(error) {
    let result = document.querySelector("#result");
    result.style.display = "block";
    if (error.code == 1) {
      result.innerText = "You have not given permission to access your location.";
    } else if (error.code == 2) {
      result.innerText = "Your location is unavailable.";
    } else if (error.code == 3) {
      result.innerText = "The request to get your location timed out.";
    } else {
      result.innerText = "An unknown error occurred.";
    }
  }
</script>




<script>
  const form = document.getElementById('contactForm');


  form.addEventListener('submit', function(e) {
    e.preventDefault();


    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;


    if (!name || !email || !message) {
      console.error('Please fill in all fields.');
      return;
    }


    if (!isValidEmail(email)) {
      console.error('Please enter a valid email address.');
      return;
    }

    const xhr = new XMLHttpRequest();


    xhr.onload = function() {
      if (xhr.status === 200) {
        console.log(xhr.responseText);
      } else {
        console.error('An error occurred.');
      }
    };

    xhr.open('POST', 'http://localhost/contact.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.send(`name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`);
  });


  function isValidEmail(email) {

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }
</script>

<script src="../assets/js/layout.js"></script>

</html>