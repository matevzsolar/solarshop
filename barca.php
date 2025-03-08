<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matevž Šolar">
    <meta name="description" content="Trgovina z nogometnimi dresi">
    <title>Izdelek</title>
    <link rel="stylesheet" href="css/stylee.css?v=<?php echo time(); ?>">
    <link rel="icon" href="slike/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="top-bar">
        <div class="left-links">
            <a href="kontakt.html">Pomoč in kontakt</a>
        </div>
        <p class="center-text">Brezplačno vračilo do 100 dni</p>
        <p class="right-text">Brezplačna dostava</p>
    </div>
    <div class="logo-container">
        <div class="hamburger-menu" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <div id="sidebar" class="sidebar">
            <ul>
                <li><a href="#">Domov</a></li>
                <li><a href="novo.html">Novo</a></li>
                <li><a href="znizano.html">Znižano</a></li>
                <li><a href="novo.html">nogometni čevlji</a></li>
                <li><a href="onas.html">O nas</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                <li><a href="zemljevid.html">Lokacija</a></li>
            </ul>
        </div>

        <div id="overlay" class="overlay"></div>

        <!-- Logo in tekst -->
        <img src="slike/logo/logo2.png" alt="logo" class="logo">
        <span class="logo-text">ŠOLAR SHOP</span>

        <!-- Košarica in uporabniški meni na desni -->
        <div class="right-links">
            <ul class="nav-links2">
                <li><a class="desno" href="cart.php"><i class="fas fa-shopping-bag"></i> <span id="cart-count">0</span></a></li>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<li><a class="desno" href="uporabnik.php">' . $_SESSION['username'] . '</a></li>';
                } else {
                    echo '<li><a class="desno" href="uporabnik.php">Prijava</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <main>
        <section class="product-detail">
            <div class="product-detail-container">
                <!-- Slike izdelka -->
                <div class="product-images">
                    <div class="slideshow-container">
                        <div class="slideshow">
                        <div class="slide">
                            <img src="slike/klub/manu.jpg" alt="1990-1991 Barcelona domači dres" onclick="zoomImage(this)">
                        </div>
                        <div class="slide">
                            <img src="slike/klub/manu2.jpg" alt="1990-1991 Barcelona domači dres zadaj" onclick="zoomImage(this)">
                        </div>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <!-- Manjše slike (thumbnails) -->
                    <div class="thumbnail-container">
                        <img class="thumbnail active" src="slike/klub/manu.jpg" alt="Thumbnail 1" onclick="currentSlide(0)">
                        <img class="thumbnail" src="slike/klub/manu2.jpg" alt="Thumbnail 2" onclick="currentSlide(1)">
                    </div>
                </div>

                <!-- Informacije o izdelku -->
                <div class="product-info">
                    <h1>1990-1991 Barcelona domači dres</h1>
                    <p class="price">Cena: €45,00</p>

                    <!-- Gumbi za velikost -->
                    <div class="size-buttons">
                        <button class="size-button" onclick="selectSize('S')">S</button>
                        <button class="size-button" onclick="selectSize('M')">M</button>
                        <button class="size-button" onclick="selectSize('L')">L</button>
                        <button class="size-button" onclick="selectSize('XL')">XL</button>
                    </div>

                    <!-- Izbira številke in imena -->
                    <div class="customization">
                        <label for="number">Številka:</label>
                        <input type="number" id="number" name="number" min="0" max="99" value="7">

                        <label for="name">Ime ali priimek:</label>
                        <input type="text" id="name" name="name" placeholder="Vnesite ime ali priimek">
                    </div>

                    <!-- Izbira količine -->
                    <div class="quantity-selector">
                        <button class="quantity-button" onclick="changeQuantity(-1)">-</button>
                        <span class="quantity-display" id="quantity">1</span>
                        <button class="quantity-button" onclick="changeQuantity(1)">+</button>
                    </div>

                    <!-- Gumb za dodajanje v košarico -->
                    <button class="add-to-cart" onclick="addToCart()">Dodaj v košarico</button>

                    <!-- Opis izdelka -->
                    <div class="product-description">
                     <h2>Opis izdelka</h2>
                    <p>Uradni dres 1990-1991 Barcelona za domače tekme. Izdelan iz visokokakovostnega materiala, ki zagotavlja udobje in vzdržljivost. Nošen je bil s strani velikih legend</p>
                    <div class="toggle-section">
                    <div class="toggle-header" onclick="toggleContent('material')">
                        <h2>MATERIAL</h2>
                        <span class="arrow">&#9660;</span>
                    </div>
                    <div id="material-content" class="toggle-content">
                        <p>90% poliester, 10% bombaž</p>
                    </div>
                    <div class="toggle-section">
        <div class="toggle-header" onclick="toggleContent('podrobnosti')">
            <h2>PODROBNOSTI</h2>
            <span class="arrow">&#9660;</span>
        </div>
        <div id="podrobnosti-content" class="toggle-content">
            <ul>
                <li>Odzračen material</li>
                <li>Prilagojen fit</li>
                <li>rabljeno</li>
            </ul>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="extra-content">
        <div class="footer-columns">
            <div class="column">
                <h3>KATEGORIJE</h3>
                <ul>
                    <li><a class="kategorije" href="onas.html">O nas</a></li>
                    <li><a class="kategorije" href="pogoji.html">Pogoji uporabe</a></li>
                    <li><a class="kategorije" href="dostava.html">Dostava</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>NAČINI PLAČILA</h3>
                <ul>
                    <li>Plačilo po povzetju</li>
                    <li>Paypal</li>
                    <li>Kreditna kartica</li>
                </ul>
            </div>
            <div class="column">
                <h3>KONTAKT</h3>
                <ul>
                    <li><p>NASLOV: pokopališka pot 70, 4202 Naklo</p></li>
                    <li><p>TELEFON: 040 122 32</p></li>
                    <li><p>URADNE URE: vsak delovni dan: 8.00 - 16.00</p></li>
                    <li><p>E-MAIL: <a href="mailto:info@solarshop.si">info@solarshop.si</a></p></li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="footer-info">
            <p>© 2025 Šolar Shop. Vse pravice pridržane.</p>
        </div>
    </footer>

    <script>
// Fixed JavaScript code

// Functionality for slides
let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    let thumbnails = document.getElementsByClassName("thumbnail");

    if (n >= slides.length) { slideIndex = 0 }
    if (n < 0) { slideIndex = slides.length - 1 }

    // Hide all slides
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        thumbnails[i].classList.remove("active");
    }

    // Show current slide
    slides[slideIndex].style.display = "block";
    thumbnails[slideIndex].classList.add("active");
}

// Functionality for size selection
function selectSize(size) {
    const buttons = document.querySelectorAll(".size-button");
    buttons.forEach(button => button.classList.remove("active"));
    event.currentTarget.classList.add("active");
}

// Functionality for quantity
function changeQuantity(amount) {
    const quantityDisplay = document.getElementById("quantity");
    let quantity = parseInt(quantityDisplay.textContent);
    quantity += amount;
    if (quantity < 1) quantity = 1;
    quantityDisplay.textContent = quantity;
}

// Functionality for adding to cart
function addToCart() {
    const selectedSizeElement = document.querySelector(".size-button.active");
    
    // Check if size is selected
    if (!selectedSizeElement) {
        alert("Prosimo, izberite velikost.");
        return;
    }
    
    const selectedSize = selectedSizeElement.textContent;
    const quantity = parseInt(document.getElementById("quantity").textContent);
    const number = document.getElementById("number").value;
    const name = document.getElementById("name").value;
    
    alert(`Dodano v košarico: Velikost ${selectedSize}, Številka ${number}, Ime ${name}, Količina ${quantity}`);
    
    // Update cart count
    const cartCount = document.getElementById("cart-count");
    cartCount.textContent = parseInt(cartCount.textContent) + quantity;
}

// Hamburger menu
function toggleMenu() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    if (sidebar.style.left === '0px') {
        sidebar.style.left = '-250px';
        overlay.style.display = 'none';
    } else {
        sidebar.style.left = '0px';
        overlay.style.display = 'block';
    }
}

// Functionality for image zoom
function zoomImage(img) {
    if (img.classList.contains('zoomed')) {
        img.classList.remove('zoomed');
        img.style.cursor = 'pointer';
        img.removeEventListener('mousemove', handleMouseMove);
    } else {
        img.classList.add('zoomed');
        img.style.cursor = 'grab';
        
        // Add event listeners for panning
        img.addEventListener('mousemove', handleMouseMove);
    }
}

// Store the last mouse position for panning
let lastX = 0;
let lastY = 0;

function handleMouseMove(e) {
    if (!e.target.classList.contains('zoomed')) return;
    
    // Calculate the difference
    const deltaX = lastX - e.clientX;
    const deltaY = lastY - e.clientY;
    
    // Store the current position
    lastX = e.clientX;
    lastY = e.clientY;
    
    // Pan the image by scrolling its container
    const container = e.target.parentElement;
    container.scrollLeft += deltaX;
    container.scrollTop += deltaY;
}

// Initialize mouse position tracking
document.addEventListener('mousedown', function(e) {
    if (e.target.tagName === 'IMG' && e.target.classList.contains('zoomed')) {
        lastX = e.clientX;
        lastY = e.clientY;
    }
});

// Functionality for showing/hiding content
function toggleContent(id) {
    const content = document.getElementById(`${id}-content`);
    const header = content.previousElementSibling;

    content.classList.toggle('active');
    header.classList.toggle('active');
}

// Initialize event listeners when the DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Add click event listeners for zoom
    document.querySelectorAll('.slide img').forEach(img => {
        img.addEventListener('click', function() {
            zoomImage(this);
        });
    });
});
    </script>
</body>
</html>