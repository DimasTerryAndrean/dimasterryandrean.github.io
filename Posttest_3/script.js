const toggleButton = document.getElementById('toggle-dark-mode');
const body = document.body;

toggleButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    toggleButton.textContent = body.classList.contains('dark-mode') ? 'Light Mode' : 'Dark Mode';
});

const ctaButton = document.getElementById('cta-btn');

ctaButton.addEventListener('click', function() {

    window.scrollBy({
        top: 600,
        left: 0,
        behavior: 'smooth' 
    });
});

// Hamburger Menu Toggle
const hamburgerMenu = document.getElementById('hamburger-menu');
const navLinks = document.querySelector('.nav-links');

hamburgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

function openPopup(carName, carPrice) {
    document.getElementById('car-name').textContent = carName;
    document.getElementById('car-price').textContent = carPrice;
    document.getElementById('popup').style.display = 'flex';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}
