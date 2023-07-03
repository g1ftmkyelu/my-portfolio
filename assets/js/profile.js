const getProfile=()=>{

    let profileData = [];
    const headers = new Headers({
        'Content-Type': 'application/json'
      });    
      
      fetch('http://localhost/my-portfolio/api/getUserDetails.php', { headers })
        .then(response => response.json())
        .then(data => {
          profileData = data;
          console.log(profileData);
        })
        .catch(error => console.error(error));
    
}