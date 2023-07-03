<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/contact.css">
  <title>Contact</title>
  <style>


    #result {
      min-width: 1300px;
    }

    .up {
      display: flex;
      justify-content: space-evenly;

    }

    iframe{
      border: 21px solid green;
    }
    body{
      background-color: lightgray;
    }
  </style>
</head>

<body onload="onPageLoad()">
  <?php include '../includes/navbar.php' ?>
  <main>
    <div class="up">
      <section>
        <h1>My Contact Information</h1>
        <ul style="list-style: none;">
          <strong>Name:</strong>
          <li id="userName"></i></li>
          <strong><i class="fa fa-envelope"></i>My Email Address</strong>
          <li id="userEmail"><i class="fa fa-envelope"></i> </li>
          <strong><i class="fa fa-phone"></i>my Phone Number</strong>
          <li id="userPhoneNumber"></li>
          <strong><i class="fa fa-location"></i>My Residential Location</strong>
          <li id="userAddress"></li>
        </ul>
      </section>
      <div id="result"></div>
      <div>
        <h2>My Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.8027169170323!2d33.9954007!3d-11.421860700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3039d0f8ae75%3A0xf0f00e912b55adf2!2sMzuzu%20University!5e0!3m2!1sen!2smw!4v1687663967642!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <section id="form-container">
      <h2>Contact Form</h2>
      <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="your name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="your email" required>

        <label for="message">Message:</label>
        <textarea id="message" placeholder="your message..." required></textarea>

        <button type="submit">submit</button>
      </form>
    </section>
  </main>
</body>

<script>
  function setData() {
    mydata = [];
    const email = document.getElementById('userEmail');
    const phoneNumber = document.getElementById('userPhoneNumber');
    const location = document.getElementById('userAddress')

    fetch('http://localhost/my-portfolio/api/getUserDetails.php', {
        headers
      })
      .then(response => response.json())
      .then(data => {
        mydata = data;

        email.innerHTML = mydata[0].email
        phoneNumber.innerHTML = mydata[0].phoneNumber
        location.innerHTML = mydata[0].location

      })
      .catch(error => console.error(error));

  }



  function onPageLoad() {

    getProfile();
  }


  function getProfile() {


    const nameLabel = document.getElementById('userName');
    const emailLabel = document.getElementById('userEmail');
    const addressLabel = document.getElementById('userAddress');
    const phoneNoLabel = document.getElementById('userPhoneNumber');



    let profileData;
    const headers = new Headers({
      'Content-Type': 'application/json'
    });


    fetch('http://localhost/my-portfolio/api/getUserDetails.php', {
        headers
      })
      .then(response => response.json())
      .then(data => {
        profileData = data[0];
        nameLabel.innerHTML = profileData.name;
        emailLabel.innerHTML = profileData.email;
        addressLabel.innerHTML = profileData.adress;
        phoneNoLabel.innerHTML = profileData.phoneNumber;
        console.log(profileData);
      })
      .catch(error => console.error(error));
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