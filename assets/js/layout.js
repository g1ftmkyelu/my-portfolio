const pages = [
    { title: "Home", url: "index.html", icon: "fa-home" },
    { title: "Projects", url: "pages/projects.html", icon: "fa-brief-case" },
    { title: "Skills", url: "pages/skills.html", icon: "fa-skills" },
    { title: "Contact", url: "pages/contact.html", icon: "fa-phone" },
  ];

const links = [
    { title: "mkyelugift@gmail.com", url: "mailto:mkyelugift@gmail.com", pseudoIcon:"fas", icon:"fa-envelope"},
    {title:"LinkedIn", url:"https://www.linkedin.com/your-profile", pseudoIcon:"fab", icon:"fa-linkedin"},
    {title:"Twitter", url:"https://twitter.com/", pseudoIcon:"fab", icon:"fa-twitter"},
]
  
  const addNavBar = () => {
    const header = document.createElement("header");
    header.style.position= 'absolute';
    header.style.width= '100%';
    header.style.top= '0';
    const h1 = document.createElement("h1");
    const nav = document.createElement("nav");
    const ul = document.createElement("ul");
  
    header.appendChild(h1);
    header.appendChild(nav);
    h1.innerHTML="Gift Mkyelu</>"
    nav.appendChild(ul);
  
    pages.forEach((page) => {
      let li = document.createElement("li");
      let a = document.createElement("a");
      a.href = page.url;
      a.innerHTML = page.title;

      li.appendChild(a);
      ul.appendChild(li);
    });
  
    document.body.appendChild(header);
  };
  
  const addFooter = () => {
    
    const footer = document.createElement("footer");
    footer.style.position="sticky";
    footer.style.bottom='0';
    footer.style.width="100%";
    footer.style.top=''
    const ul = document.createElement("ul");    
    links.forEach(link => {
        let li = document.createElement("li");
        let a = document.createElement("a");
        let i = document.createElement("i");
        i.classList.add(link.pseudoIcon);
        i.classList.add(link.icon);
        a.appendChild(i);
        a.href=link.url;
        a.innerHTML=link.title;
        li.appendChild(a);
        ul.appendChild(li);
    });

    footer.appendChild(ul);
    document.body.appendChild(footer);


  };
  