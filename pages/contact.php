<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
    <title>Contact</title>
    <style>
      #map { height: 80vh; display:none; }
      #result { font-size:1.5rem; font-weight:bold; text-align:center; margin-bottom:.5rem; display:none; }
  </style>
</head>
<body onload="onPageLoad()">
  <main>
    <button type="button" id="showPosition">Show Position</button>
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
      addNavBar();
      addFooter();
    }



  </script>

<script>
class Geolocation {
    // on success
    successCallback(position){
        let result = document.querySelector("#result") // get the result div
        result.style.display = "block" // show the result div
        result.innerText = "Lat: " + position.coords.latitude + ", Long: " + position.coords.longitude // display the latitude and longitude

        let mapContainer = document.querySelector("#map") // get the map container
mapContainer.style.display = "block" // show the map container

const map = L.map("map").setView(
    [position.coords.latitude, position.coords.longitude],
    13
) // create a map and set the view to the user's location

const tiles = L.tileLayer(
    "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
    {
        maxZoom: 19,
        attribution:
            '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }
).addTo(map) // add the tiles to the map

const marker = L.marker([
    position.coords.latitude,
    position.coords.longitude
]).addTo(map) // add a marker to the map

    }

    // on error
    errorCallback(error){
        let result = document.querySelector("#result") // get the result div
        result.style.display = "block" // show the result div
        if(error.code == 1) { // if the user denied the request
            result.innerText = "You have not given permission to access your location."
        }else if(error.code == 2) { // if the position is unavailable
            result.innerText = "Your location is unavailable."
        }else if(error.code == 3) { // if the request times out
            result.innerText = "The request to get your location timed out."
        }else{ // if something else went wrong
            result.innerText = "An unknown error occurred."
        }
    }


    showPosition(){
        if(navigator.geolocation) { // if the browser supports geolocation
            navigator.geolocation.getCurrentPosition(
                this.successCallback,
                this.errorCallback
            ) // get the user's location
            let result = document.querySelector("#result")
            result.style.display = "block"
            result.innerText = "Getting the position information..."
        }else{
            alert('Your browser does not support geolocation') // if the browser doesn't support geolocation
        }
    }
}

const showPosition = document.querySelector("#showPosition")
showPosition.addEventListener("click", function (e) {
    e.preventDefault()
    let result = document.querySelector("#result")
    result.style.display = "block"
    new Geolocation().showPosition() // show the user's location
})


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