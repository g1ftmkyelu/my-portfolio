<?php include './includes/head.php' ?>
<?php include './includes/navbar.php' ?>

<section id="introduction">
    <p>I am a <span class="typed-text"></span><span class="cursor blink">&nbsp;</span></p>
</section>

<section id="about">
    <div id="prof">
        <img src="https://pbs.twimg.com/profile_images/1621744161203408897/MtsR6vgE_400x400.jpg" alt="profile_image">
        <h2>Gift Mkyelu</h2>
    </div>
    <div>
        <ul>
            <li><i class="fas fa-code"></i> Hello, I’m Gift</li>
            <li><i class="fas fa-code"></i> I'm a fullstack DEV</li>
            <li><i class="fas fa-code"></i> Talk to me about freelancing opportunities in web development and
                software
                engineering</li>
            <li><i class="fas fa-code"></i> I’m looking to collaborate on backend, fontend software engineering
                projects</li>
        </ul>



        <h3>Experience</h3>
        <p>I am a software developer with 5 years of experience in Node.js, JavaScript, and PHP. I have a strong
            understanding of the full software development lifecycle, from requirements gathering and analysis to
            design, implementation, testing, and deployment. I am also proficient in a variety of other
            technologies, including React, Angular, MySQL, and MongoDB.<br><br>

            I am a highly motivated and results-oriented individual with a passion for building high-quality
            software. I am also a team player and I enjoy working collaboratively to solve problems. I am confident
            that I have the skills and experience necessary to be a valuable asset to your team.<br><br>
            In my previous role at Acme Corporation, I was responsible for developing and maintaining a large-scale
            web application. I worked closely with a team of developers to design, implement, and test the
            application. I also worked with the QA team to ensure that the application met all of the requirements.
            The application was successfully deployed on time and within budget.

            I am also an active member of the open source community. I have contributed to a number of open source
            projects, including React, Angular, and Node.js.<br><br>

            I am always looking for new challenges and I am eager to learn new technologies. I am confident that I
            can make a significant contribution to your team.</p>
    </div>
</section>

<!-- Featured Projects section -->
<section id="project-section" onload="displayProjects()">
    <div id="projects"></div>
</section>


<script src="./assets/js/projects.js"></script>




<?php include './includes/footer.php' ?>