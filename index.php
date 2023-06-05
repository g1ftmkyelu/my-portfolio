<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body onload="addNavBar()">

    <!-- Introduction section -->
    <section id="introduction">
        <p>I am a <span class="typed-text"></span><span class="cursor blink">&nbsp;</span></p>
    </section>

    <section id="about">
        <div id="prof">
            <img src="https://pbs.twimg.com/profile_images/1621744161203408897/MtsR6vgE_400x400.jpg"
                alt="profile_image">
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
    <section id="project-section">
        <div id="featured-projects">
            <div class="project">
                <img src="https://screenshot-proxy.netlify.app/f_jpg,w_336/https://d33wubrfki0l68.cloudfront.net/64470ca6b77ea630df799d76/screenshot_2023-04-24-23-11-43-0000.png"
                    alt="Project 1">
                <h3>Eye Health Care Clinic system </h3>
                <p>Description of Project 1.</p>
                <a href="https://eye-clinic-deploy.netlify.app/">View Project</a>
            </div>
            <div class="project">
                <img src="https://screenshot-proxy.netlify.app/f_jpg,w_336/https://d33wubrfki0l68.cloudfront.net/643c1fe0dbdcc45bd7059ca9/screenshot_2023-04-16-16-19-06-0000.png"
                    alt="Project 2">
                <h3>E-health consultation system for mwaiwathu hospital</h3>
                <p>Description of Project 2.</p>
                <a href="https://precious-cobbler-56fc00.netlify.app/">View Project</a>
            </div>
            <div class="project">
                <img src="https://firebasestorage.googleapis.com/v0/b/ref-project-93485.appspot.com/o/WhatsApp%20Image%202023-04-14%20at%2010.41.21%20AM.jpeg?alt=media&token=b65c6140-5eb2-4e13-822d-0f1d0c0ee52b"
                    alt="Project 2">
                <h3>Online Session Booking System for Incredible Sounds</h3>
                <p>Description of Project 2.</p>
                <a href="https://incredible-sounds-o2h2cus82-g1ftmkyelu.vercel.app/">View Project</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <ul class="contact-links">
            <li><a href="mailto:your-email@example.com"><i class="fas fa-envelope"></i> mkyelugift@gmail.com</a></li>
            <li><a href="https://www.linkedin.com/your-profile"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            <li><a href="https://www.twitter.com/your-username"><i class="fab fa-twitter"></i> Twitter</a></li>
        </ul>
    </footer>
</body>

<script src="./assets/js/layout.js"></script>
<script>    const typedText = document.querySelector(".typed-text");
    const cursor = document.querySelector(".cursor");

    const textArray = ["Programmer", "Web Developer", "Dev OPs Specialist", "System Analyst"];

    let textArrayIndex = 0;
    let charIndex = 0;

    const erase = () => {
        if (charIndex > 0) {
            cursor.classList.remove('blink');
            typedText.textContent = textArray[textArrayIndex].slice(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, 80);
        } else {
            cursor.classList.add('blink');
            textArrayIndex++;
            if (textArrayIndex > textArray.length - 1) {
                textArrayIndex = 0;
            }
            setTimeout(type, 1000);
        }
    }

    const type = () => {
        if (charIndex <= textArray[textArrayIndex].length - 1) {
            cursor.classList.remove('blink');
            typedText.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, 120);
        } else {
            cursor.classList.add('blink');
            setTimeout(erase, 1000);
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        type();
    })</script>

</html>