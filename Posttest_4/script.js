const modeToggle = document.getElementById('mode-toggle');
modeToggle.addEventListener('click', () => {
    const body = document.body;
    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');
});


const ctaButton = document.getElementById('cta-btn');

ctaButton.addEventListener('click', function() {
    window.scrollBy({
        top: 600,
        left: 0,
        behavior: 'smooth'
    });
});

const hamburgerMenu = document.getElementById('hamburger-menu');
const navLinks = document.querySelector('.nav-links');

hamburgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;

    alert(`Nama: ${name}\nEmail: ${email}\nNomor Telepon: ${phone}\nPesan: ${message}`);

    this.reset();
});

function openPopup(carName, carInfo) {
    document.getElementById('car-name').innerText = carName;
    document.getElementById('car-price').innerText = carInfo;
    document.getElementById('popup').style.display = 'block';
}


function closePopup() {
    document.getElementById('popup').style.display = "none";
}
