    <!-- Footer -->
    <footer>
        <ul class="contact-links">
            <li><a href="mailto:your-email@example.com"><i class="fas fa-envelope"></i> mkyelugift@gmail.com</a></li>
            <li><a href="https://www.linkedin.com/your-profile"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            <li><a href="https://www.twitter.com/your-username"><i class="fab fa-twitter"></i> Twitter</a></li>
        </ul>
    </footer>
    </body>

    <script>
        function createLinkElement() {
            // Create the link element
            var link = document.createElement('a');
            link.href = 'pages/skills.php';

            // Create the outer div with the "item" class
            var outerDiv = document.createElement('div');
            outerDiv.className = 'item';
            outerDiv.style.fontSize = '30px';
            outerDiv.style.color = 'green';
            outerDiv.style.display = 'grid';
            outerDiv.style.alignItems = 'center';
            outerDiv.style.justifyContent = 'center';

            // Create the inner div
            var innerDiv = document.createElement('div');
            innerDiv.textContent = 'see more>';

            // Append the inner div to the outer div
            outerDiv.appendChild(innerDiv);

            // Append the outer div to the link element
            link.appendChild(outerDiv);

            // Get the container div with the id of "cont"
            var container = document.getElementById('cont');

            // Append the link element to the container div
            container.appendChild(link);
        }



        function getSkill() {
            const headers = new Headers({
                'Content-Type': 'application/json'
            });

            fetch('http://localhost/my-portfolio/api/getSkills.php', {
                    headers
                })
                .then(response => response.json())
                .then(data => {

                    const trimmedArray = data.slice(0, 3);


                    trimmedArray.forEach(project => {
                        const container = document.getElementById('cont');
                        const wrapper = document.createElement('div');
                        const wrappee = document.createElement('div');
                        const projectTitle = document.createElement('h3');

                        wrapper.classList.add('item');
                        wrappee.classList.add('item-desc');

                        wrapper.style.backgroundImage = `url(${project.image_url})`;
                        wrappee.style.backgroundRepeat = "no repeat";
                        wrapper.style.webkitBackgroundSize = "cover";

                        projectTitle.innerHTML = project.skill_name;

                        wrapper.appendChild(wrappee);
                        wrappee.appendChild(projectTitle);
                        container.appendChild(wrapper);

                    });

                    // Call the function to create and append the element
                    createLinkElement();


                    console.log(data);
                })
                .catch(error => console.error(error));
        }
    </script>

    <script src="./assets/js/layout.js"></script>
    <script>
        const typedText = document.querySelector(".typed-text");
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
        })
    </script>

    </html>