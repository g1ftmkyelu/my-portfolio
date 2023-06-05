const projectContainer = document.getElementById("projects");
projectContainer.style.display = "grid";
projectContainer.style.gridTemplateColumns = "auto auto auto";
projectContainer.style.justifyContent = "center";

let projectsData = [];
const headers = new Headers({
    'Content-Type': 'application/json'
  });

  
  fetch('../assets/data/projects.json', { headers })
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

  projectsData.forEach(project => {
    const component = document.createElement('div');
    const image = document.createElement('img');
    const titleLabel = document.createElement('h2');
    const descriptionLabel = document.createElement('p');
    const showMoreButton = document.createElement('button');
    showMoreButton.classList.add('show-more');

    showMoreButton.style.padding = "10px";
    showMoreButton.style.width = "130px";
    showMoreButton.style.marginTop = "10px";
    showMoreButton.innerHTML = "View More";

    image.width = 300;
    image.height = 200;
    image.style.position = "center";

    image.src = project.image;
    titleLabel.innerText = project.name;
    descriptionLabel.innerText = project.description;

    showMoreButton.onclick = () => openModal(project);

    component.appendChild(image);
    component.appendChild(titleLabel);
    component.appendChild(descriptionLabel);
    component.appendChild(showMoreButton);

    component.style.width = "400px";
    component.style.padding = "10px";
    component.style.margin = "17px";
    component.style.borderRadius = "5px";
    component.style.boxShadow = "1px 1px 10px rgba(0,0,0,0.3)";

    projectContainer.appendChild(component);
  });
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
    ? projectsData.filter(project => project.technologies.includes(value))
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
  
  fetch('../assets/data/projects.json', { headers })
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
  dialog.classList.add('dialog');

  const redirectButton = document.createElement('button');
  redirectButton.innerHTML="go to project"
  redirectButton.style.padding="10px"
  redirectButton.style.fontSize="30px"
  redirectButton.style.backgroundColor="green"
  redirectButton.style.color="white"
  redirectButton.style.border="none"
  redirectButton.onclick=(() =>{
    window.location=project.url;
  })

  
  const image = document.createElement('img');
  image.width=500;
  image.height=500;
  image.src = project.image;

  const titleLabel = document.createElement('h2');
  titleLabel.innerText = project.name;

  const descriptionLabel = document.createElement('p');
  descriptionLabel.innerText = project.description;

  const closeButton = document.createElement('button');
  closeButton.classList.add('close-button');
  closeButton.style.position="absolute";
  closeButton.style.fontSize='70px';
  closeButton.style.color='white';
  closeButton.style.background='red';
  closeButton.style.border='none';
  closeButton.style.width='90px'
  closeButton.innerHTML = '&times;';
  closeButton.onclick = () => closeModal();

  
  dialog.appendChild(closeButton);
  dialog.appendChild(image);
  dialog.appendChild(titleLabel);
  dialog.appendChild(descriptionLabel);
  dialog.appendChild(redirectButton);

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