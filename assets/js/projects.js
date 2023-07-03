const projectContainer = document.getElementById("projects");
projectContainer.style.display = "grid";
projectContainer.style.gridTemplateColumns = "auto auto auto";
projectContainer.style.justifyContent = "center";

let projectsData = [];
const headers = new Headers({
    'Content-Type': 'application/json'
  });

  
  fetch('http://localhost/my-portfolio/api/getProjects.php', { headers })
    .then(response => response.json())
    .then(data => {
      projectsData = data;
      console.log(projectsData);
      displayProjects()
    })
    .catch(error => console.error(error));


const displayProjects = () => {
  closeModal();
  projectContainer.innerHTML = "";

  if (projectsData.length<=0) {
    const notFoundMessage=document.createElement("h1");
    notFoundMessage.style.fontWeight="bold";
    notFoundMessage.style.marginTop="40vh";
    notFoundMessage.innerHTML = "No Projects Found:(";
    projectContainer.appendChild(notFoundMessage);
  } else {
    
      projectsData.forEach(project => {
        const component = document.createElement('div');
        const image = document.createElement('img');
        const titleLabel = document.createElement('h2');
        const descriptionLabel = document.createElement('p');
        const showMoreButton = document.createElement('button');
        const arrowRight=document.createElement('i');
        arrowRight.classList.add("fa");
        arrowRight.classList.add('fa-circle-arrow-right');
        showMoreButton.classList.add('show-more');
    
        showMoreButton.style.padding = "10px";
        showMoreButton.style.marginTop = "10px";
        showMoreButton.innerHTML = "view project";
        showMoreButton.appendChild(arrowRight);
    
        image.width = 300;
        image.height = 200;
        image.style.position = "center";
    
        image.src = project.image;
        titleLabel.innerText = project.name;
       
    
        showMoreButton.onclick = () => openModal(project);
        component.style.backgroundColor="#333";
        component.style.width = "400px"; 
        component.style.padding = "10px";
        component.style.margin = "17px";
        component.style.borderRadius = "5px";
        component.style.boxShadow = "1px 1px 10px rgba(0,0,0,0.3)";
    
    
        component.appendChild(image);
        component.appendChild(titleLabel);
        component.appendChild(descriptionLabel);
        component.appendChild(showMoreButton);
    
        projectContainer.appendChild(component);
      });
    
  }
};

const filter = () => {
  resetFilters();
  const input = document.getElementById('text');
  const value = input.value.trim().toLowerCase();

  const filteredProjects = projectsData.filter(project => project.name.toLowerCase().includes(value));

  displayFilteredProjects(filteredProjects);
};

const filterByTechnology = () => {
  resetFilters();
  const input = document.getElementById('technology');
  const value = input.value.trim().toLowerCase();

  const filteredProjects = value
    ? projectsData.filter(project => project.technology && project.technology.toLowerCase().includes(value))
    : projectsData;

  displayFilteredProjects(filteredProjects);
};

const filterByCategory = () => {
  resetFilters();
  const input = document.getElementById('category');
  const value = input.value.trim().toLowerCase();

  const filteredProjects = value
    ? projectsData.filter(project => project.category && project.category.toLowerCase().includes(value))
    : projectsData;

  displayFilteredProjects(filteredProjects);
};

const displayFilteredProjects = (filteredProjects) => {
  projectsData = filteredProjects;
  displayProjects();
};

const resetFilters = () => {

  const headers = new Headers({
      'Content-Type': 'application/json'
    });
  
    
    fetch('http://localhost/my-portfolio/api/getProjects.php', { headers })
      .then(response => response.json())
      .then(data => {
        projectsData = data;
        console.log(projectsData);
   
      })
      .catch(error => console.error(error));
  displayProjects();
};

const openModal = (project) => {
  const modal = document.getElementById('modal');
  const overlay = document.getElementById('overlay');

  const dialog = document.createElement('div');
  dialog.style.width=900;
  dialog.style.height=700;
  dialog.classList.add('dialog');




  
  const image = document.createElement('img');
  const progress = document.createElement('progress');
  progress.value = project.completion_level;
  progress.max = 100;
  progress.style.height = '20px';
  
  // Set the fill color to green
  progress.style.backgroundColor = 'green';
  
  // Append a label
  const label = document.createElement('label');
  label.textContent = 'Completion Level:';
  const percentage= document.createElement('label');
  percentage.textContent=project.completion_level+"%";
  
  // Append the progress bar and label to a container element
  const container = document.createElement('div');
  container.style.marginTop='100px'
  container.appendChild(label);
  container.appendChild(progress);
  container.appendChild(percentage);
  
  progress.max=100;
  



  image.width=900;
  image.height=400;
  image.src = project.image;

  const titleLabel = document.createElement('h2');
  titleLabel.innerText = project.name;

  const descriptionLabel = document.createElement('p');
  descriptionLabel.innerText = project.description;

  const closeButton = document.createElement('button');
  closeButton.classList.add('close-button');
  closeButton.style.position="absolute";
  closeButton.style.top='10px';
  closeButton.style.right='10px';
  closeButton.style.borderRadius='100%';
  closeButton.style.fontSize='50px';
  closeButton.style.color='white';
  closeButton.style.background='red';
  closeButton.style.border='none';
  closeButton.style.width='90px'
  closeButton.style.cursor='pointer';
  closeButton.innerHTML = '&times;';
  closeButton.onclick = () => closeModal();

  
  dialog.appendChild(closeButton);
  dialog.appendChild(image);
  dialog.appendChild(titleLabel);
  dialog.appendChild(descriptionLabel);
  dialog.appendChild(container);

  modal.innerHTML = '';
  modal.appendChild(dialog);
  modal.style.display = 'grid';
  modal.style.alignContent = 'center';
  modal.style.alignItems='center';
  modal.style.justifyContent='center';
  overlay.style.display = 'block';
};

const closeModal = () => {
  document.getElementById('modal').style.display = 'none';
  document.getElementById('overlay').style.display = 'none';
};

document.addEventListener('DOMContentLoaded', displayProjects);