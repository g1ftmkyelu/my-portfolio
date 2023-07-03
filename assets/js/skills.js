
const displaySkills = () => {
    const headers = new Headers({
      'Content-Type': 'application/json'
    });

    fetch('http://localhost/my-portfolio/api/getSkills.php', { headers })
      .then(response => response.json())
      .then(data => {
        const skillSection = document.getElementById("skillSection");

        data.forEach(skill => {
          const skillCard = document.createElement('div');
          skillCard.classList.add('skill-card');

          const skillName = document.createElement('h3');
          skillName.textContent = skill.skill_name;
          skillCard.appendChild(skillName);

          if (skill.image_url) {
            const image = document.createElement('img');
            image.style.height='300px';
            image.style.width='300px';
            image.src = skill.image_url;
            skillCard.appendChild(image);
          }

          const proficiencyBar = document.createElement('div');
          proficiencyBar.classList.add('progress-bar');
          const proficiency = document.createElement('div');
          proficiency.classList.add('progress');
          proficiency.style.width = skill.proficiency + '%';
          proficiencyBar.appendChild(proficiency);
          skillCard.appendChild(proficiencyBar);

          const category = document.createElement('p');
          category.textContent = 'Category: ' + skill.category;
          skillCard.appendChild(category);

          const description = document.createElement('p');
          description.style.color='white'
          description.textContent = 'Description: ' + skill.description;
          skillCard.appendChild(description);



          skillSection.appendChild(skillCard);
        });
      })
      .catch(error => console.error(error));
  };

  window.onload = displaySkills;
