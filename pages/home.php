<?php include 'includes/head.php' ?>
<?php include 'includes/navbar.php' ?>


<section id="about">
    <div id="prof">
        <img src="https://pbs.twimg.com/profile_images/1621744161203408897/MtsR6vgE_400x400.jpg" alt="profile_image">
        <h2>Gift Mkyelu</h2>
    </div>
    <div id="desc">
        <section id="introduction">
            <p><span id="greeting"></span> I'm Gift and I am a <br> <span class="typed-text"></span><span class="cursor blink">&nbsp;</span></p>
        </section>
    </div>
</section>





<section id="project-section">
    <section class="game-section">
        <h2 style="color:white">MY SKILLS</h2>
        <div class="owl" id="cont">



        </div>
    </section>
</section>





<script src="./assets/js/projects.js"></script>
<script src="./assets/js/carousel.js"></script>
<script src="./assets/js/slider.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script>
function updateGreeting() {
  var currentTime = new Date().toLocaleString("en-US", { timeZone: "Africa/Harare" });
  var currentHour = parseInt(currentTime.split(", ")[1].split(":")[0]);

  var greetingElement = document.getElementById("greeting");
  var greetingText;

  if (currentHour >= 0 && currentHour < 12) {
    greetingText = "Good Morning!";
  } else if (currentHour >= 12 && currentHour < 18) {
    greetingText = "Good Afternoon!";
  } else {
    greetingText = "Good Evening!";
  }

  greetingElement.textContent = greetingText;
}

// Call the function to update the greeting immediately
updateGreeting();

// Optionally, update the greeting every minute to account for time changes
setInterval(updateGreeting, 60000);
</script>

<?php include 'includes/footer.php' ?>