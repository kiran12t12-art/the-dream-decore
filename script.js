// JavaScript placeholder for future interactivity
console.log("Welcome to The Dream Décor website!");
// nav-script
 const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
    function showOverlay(index) {
      document.getElementById(`overlay${index}`).classList.add('active');
    }

    function hideOverlay(index) {
      document.getElementById(`overlay${index}`).classList.remove('active');
    }