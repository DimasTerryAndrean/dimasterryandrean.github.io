// Dark/Light Mode Toggle
const toggleButton = document.getElementById('toggle-dark-mode');
const body = document.body;

toggleButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    toggleButton.textContent = body.classList.contains('dark-mode') ? 'Light Mode' : 'Dark Mode';
});

// Tangkap elemen tombol CTA
const ctaButton = document.getElementById('cta-btn');

// Menambahkan event listener untuk mendeteksi klik
ctaButton.addEventListener('click', function() {
    // Menggeser halaman ke bawah sejauh 600px saat tombol diklik
    window.scrollBy({
        top: 600, // Sesuaikan dengan tinggi kolom yang ingin digeser
        left: 0,
        behavior: 'smooth' // Menambahkan efek transisi yang halus
    });
});

// Hamburger Menu Toggle
const hamburgerMenu = document.getElementById('hamburger-menu');
const navLinks = document.querySelector('.nav-links');

hamburgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

// Pop-up Box Functionality
function openPopup(carName, carPrice) {
    document.getElementById('car-name').textContent = carName;
    document.getElementById('car-price').textContent = carPrice;
    document.getElementById('popup').style.display = 'flex';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
}
