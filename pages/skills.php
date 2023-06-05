<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/skills.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
  <title>Skills</title>
</head>

<body onload="move()">
  <?php include '../includes/navbar.php' ?>
  <!-- Skills section -->
  <section id="skills">
    <div class="grid-container">
      <div class="tooltip"><i class="fa-brands fa-react"></i><span class="tooltiptext">React.js is an open-source JavaScript library used for building user interfaces. It provides a declarative and efficient way to create interactive components for web applications. React follows a component-based architecture, allowing developers to create reusable UI elements and compose them to build complex UI hierarchies.

          The core concept of React is the virtual DOM (Document Object Model), which is a lightweight representation of the actual DOM. React efficiently updates and renders the virtual DOM, comparing it with the real DOM to determine the minimum number of changes required. This approach minimizes the direct manipulation of the DOM, resulting in improved performance and faster rendering.

          React utilizes a unidirectional data flow, where data changes in a parent component propagate down to child components via properties known as "props." Components can also maintain their own internal state using "state." When the state or props of a component change, React automatically re-renders the component and updates the UI accordingly.

        </span></div>
      <div class="detail">
        <h1>react</h1>
        <div class="myProgress">
          <div id="myReactBar"></div>
        </div>
      </div>
      <div class="tooltip"><i class="fa-brands fa-angular"></i><span class="tooltiptext">Angular is a popular open-source TypeScript-based framework for building web applications. It follows a component-based architecture, allowing developers to create reusable UI components and compose them to construct complex user interfaces.

          Angular provides a comprehensive set of tools and features for building robust applications. It includes a powerful templating system that allows developers to define the structure and behavior of UI components using HTML templates enhanced with Angular-specific syntax. The framework also offers a two-way data binding mechanism, which keeps the data in sync between the component and the view, enabling real-time updates.</span></div>
      <div class="detail">
        <h1>Angular</h1>
        <div class="myProgress">
          <div id="myAngularBar"></div>
        </div>
      </div>
      <div class="tooltip"><i class="fa-brands fa-php"></i><span class="tooltiptext">PHP is a widely used server-side scripting language primarily designed for web development. It is open-source and can be embedded within HTML, making it easy to create dynamic and interactive web pages.

          PHP offers a simple and intuitive syntax that allows developers to build dynamic web applications efficiently. It provides a wide range of features and functions that enable tasks such as handling form data, interacting with databases, manipulating files, and performing various server-side operations.</span></div>
      <div class="detail">
        <h1>php</h1>
        <div class="myProgress">
          <div id="myPhpBar"></div>
        </div>
      </div>
      <div class="tooltip"><i class="fa-brands fa-html5"></i><span class="tooltiptext">HTML (Hypertext Markup Language) is the standard markup language used for creating web pages and structuring their content. It provides the foundation for building static and interactive web pages by defining the structure and layout of the content.

          HTML is based on a system of tags and elements, which are used to enclose and define different parts of a web page. These tags represent various elements such as headings, paragraphs, images, links, forms, tables, and more. By using these tags, developers can create the desired structure and organization of content on a web page.</span></div>
      <div class="detail">
        <h1>html</h1>
        <div class="myProgress">
          <div id="myHtmlBar"></div>
        </div>
      </div>
      <div class="tooltip"><i class="fa-brands fa-css3"></i><span class="tooltiptext">CSS (Cascading Style Sheets) is a style sheet language used to describe the presentation and visual appearance of HTML and XML documents. It provides a set of rules and declarations that define how elements of a web page should be displayed, allowing developers to control the layout, typography, colors, and other visual aspects of a website.

          CSS works in conjunction with HTML by targeting HTML elements or groups of elements and applying styles to them. It uses selectors to specify which elements should be styled and properties to define the visual characteristics of those elements. CSS rules can be written directly within an HTML document using the style tag, or in an external CSS file that is linked to the HTML document. </span></div>
      <div class="detail">
        <h1>css</h1>
        <div class="myProgress">
          <div id="myCssBar"></div>
        </div>
      </div>
      <div class="tooltip"><i class="fa-brands fa-js"></i><span class="tooltiptext">JavaScript is a versatile and widely-used programming language primarily used for client-side web development. It allows developers to add interactivity, dynamic behavior, and advanced functionality to web pages.

          JavaScript is supported by all modern web browsers, making it an essential component of web development. It can be embedded directly into HTML documents using the script tag or included as an external JavaScript file.</span></div>
      <div class="detail">
        <h1>javascript</h1>
        <div class="myProgress">
          <div id="myJsBar"></div>
        </div>
      </div>
    </div>

  </section>
</body>
<script>
  function move() {
    moveReact();
    moveAngular();
    moveHtml();
    moveCss();
    movePhp();
    moveJs();
  }

  function moveReact() {
    var i = 0;
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myReactBar");
      var width = 1;
      var id = setInterval(frame, 10);

      function frame() {
        if (width >= 20) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }


  function moveAngular() {
    var i = 0;
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myAngularBar");
      var width = 1;
      var id = setInterval(frame, 10);

      function frame() {
        if (width >= 44) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }

  function movePhp() {
    var i = 0;
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myPhpBar");
      var width = 1;
      var id = setInterval(frame, 10);

      function frame() {
        if (width >= 60) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }

  function moveHtml() {
    var i = 0;
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myHtmlBar");
      var width = 1;
      var id = setInterval(frame, 10);

      function frame() {
        if (width >= 80) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }

  function moveCss() {
    var i = 0;
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myCssBar");
      var width = 1;
      var id = setInterval(frame, 10);

      function frame() {
        if (width >= 94) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }

  function moveJs() {
    var i = 0;
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myJsBar");
      var width = 1;
      var id = setInterval(frame, 10);

      function frame() {
        if (width >= 90) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }
</script>

</html>