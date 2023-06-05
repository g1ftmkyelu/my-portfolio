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