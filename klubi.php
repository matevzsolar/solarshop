<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Matevž Šolar">
    <meta name="description" content="Trgovina z nogometnimi dresi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šolar Shop - Klubi</title>
    <link rel="stylesheet" href="css/klubi.css?v=<?php echo time(); ?>">
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
        <!-- Hamburger meni -->
        <div class="hamburger-menu" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <!-- Stranska vrstica -->
        <div id="sidebar" class="sidebar">
            <ul>
                <li><a href="homepage.php">Domov</a></li>
                <li><a href="#">O nas</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </div>

        <!-- Overlay za zamglitev -->
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

    <div class="filter-container">
        <div class="filter-section">
            <div class="filter-group">
                <label for="sort">Razvrsti po:</label>
                <select id="sort">
                    <option value="default">privzeto</option>
                    <option value="price-low">Cena: Najnižja do najvišje</option>
                    <option value="price-high">Cena: Najvišja do najnižje</option>
                    <option value="newest">Najnovejše</option>
                </select>
            </div>
        </div>
        <div class="filter-section">
            <div class="filter-group">
                <label for="price-range">Cena:</label>
                <select id="price-range">
                    <option value="all">Vse</option>
                    <option value="0-30">Pod €30</option>
                    <option value="30-40">€30 - €40</option>
                    <option value="40-50">€40 - €50</option>
                    <option value="50-60">€50 - €60</option>
                    <option value="60-70">€60 - €70</option>
                    <option value="70-100">Čez €70</option>
                </select>
            </div>
        </div>
        <div class="filter-section">
            <div class="filter-group">
                <label for="size">Velikost:</label>
                <select id="size">
                    <option value="all">Vse</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>
        </div>
        <div class="filter-section">
            <div class="filter-group">
                <label for="color">Barva:</label>
                <select id="color">
                    <option value="all">Vse</option>
                    <option value="red">Rdeča</option>
                    <option value="blue">Modra</option>
                    <option value="green">Zelena</option>
                    <option value="black">Črna</option>
                    <option value="yellow">Rumena</option>
                    <option value="white">Bela</option>
                </select>
            </div>
        </div>
        <div class="filter-section">
            <div class="filter-group">
                <label for="brand">Blagovna znamka:</label>
                <select id="brand">
                    <option value="all">Vse</option>
                    <option value="nike">Nike</option>
                    <option value="adidas">Adidas</option>
                    <option value="puma">Puma</option>
                    <option value="umbro">Umbro</option>
                    <option value="Kappa">Kappa</option>
                </select>
            </div>
        </div>
        <!-- Dodan filter za lige -->
        <div class="filter-section">
            <div class="filter-group">
                <label for="league">Liga:</label>
                <select id="league">
                    <option value="all">Vse</option>
                    <option value="premier-league">Premier League</option>
                    <option value="la-liga">La Liga</option>
                    <option value="ligue-1">Ligue 1</option>
                    <option value="serie-a">Serie A</option>
                    <option value="bundesliga">Bundesliga</option>
                    <option value="ostale">Ostale lige</option>
                </select>
            </div>
        </div>
    </div>

    <div class="naslovv">
        <h2>KLUBSKI DRESI</h2>
    </div>

    <section class="top-products">
        <div class="product-grid">
            <div class="product" data-size="M,S,L,XL" data-color="red,blue" data-brand="nike" data-date="2024-10-28" data-league="la-liga">
                <img src="slike/klub/manu.jpg" alt="Barcelona home Jersey">
                <p>1990-1991 Barcelona domači dres</p>
                <p>€45,00</p>
                <button class="add-to-cart" onclick="addToCart('1990-1991 Barcelona domači dres', 45, 'slike/klub/manu.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-size="M,S,L,XL" data-color="white,yellow" data-brand="nike" data-date="2024-10-28" data-league="la-liga">
                <img src="slike/klub/real.jpg" alt="Men Real Madrid 23/24 Home Jersey">
                <p>2023-2024 Real Madrid domači dres</p>
                <p>€50,00</p>
                <button class="add-to-cart" onclick="addToCart('Men Real Madrid 23/24 Home Jersey', 50, 'slike/klub/real.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-size="M,S,L,XL" data-color="red,white,blue" data-brand="puma" data-date="2025-01-01" data-league="la-liga">
                <img src="slike/klub/klub3.jpg" alt="Athletic Madrid home jersey">
                <p>2000-2001 Athletic Madrid domači dres</p>
                <p>€40,00</p>
                <button class="add-to-cart" onclick="addToCart('Athletic Madrid home jersey', 40, 'slike/klub/klub3.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-size="M,S,L,XL" data-color="red,white" data-brand="adidas" data-date="2025-01-01" data-league="bundesliga">
                <img src="slike/klub/klub4.jpg" alt="Bayern away jersey">
                <p>2023-2024 Bayern Munich gostujoči dres</p>
                <p>€60,00</p>
                <button class="add-to-cart" onclick="addToCart('Bayern away jersey', 60, 'slike/klub/klub4.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-size="M,S,L,XL" data-color="red,black" data-brand="puma" data-date="2025-01-01" data-league="serie-a">
                <img src="slike/klub/klub5.jpg" alt="AC Milan home jersey">
                <p>2022-2023 AC Milan domači dres</p>
                <p>€40,00</p>
                <button class="add-to-cart" onclick="addToCart('AC Milan home jersey', 40, 'slike/klub/klub5.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-size="XL" data-color="blue,black" data-brand="nike" data-date="2023-01-01" data-league="serie-a">
                <img src="slike/klub/klub6.jpg" alt="Inter Milan home jersey">
                <p>2010-2011 Inter Milan domači dres</p>
                <p>€55,00</p>
                <button class="add-to-cart" onclick="addToCart('Inter Milan home jersey', 55, 'slike/klub/klub6.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-size="M,L" data-color="blue,red,white" data-brand="adidas" data-date="2024-01-23" data-league="ligue-1">
                <img src="slike/klub/klub7.jpg" alt="Lyon home jersey">
                <p>2023-2024 Lyon domači dres</p>
                <p>€40,00</p>
                <button class="add-to-cart" onclick="addToCart('Lyon home jersey', 40, 'slike/klub/klub7.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-size="L" data-color="black,yellow,white" data-brand="puma" data-date="2024-01-23" data-league="bundesliga">
                <img src="slike/klub/klub8.jpg" alt="Dortmund away jersey">
                <p>2023-2024 Dortmund gostujoč dres</p>
                <p>€55,00</p>
                <button class="add-to-cart" onclick="addToCart('Dortmund away jersey', 55, 'slike/klub/klub8.jpg')">Dodaj v košarico</button>
            </div>
        </div>
    </section>

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
                <p>NASLOV: pokopališka pot 70, 4202 Naklo</p>
                <p>TELEFON: 040 122 32</p>
                <p>URADNE URE: vsak delovni dan: 8.00 - 16.00</p>
                <p>E-MAIL: <a href="mailto:info@solarshop.si">info@solarshop.si</a></p>
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
            <p>© 2024 Šolar Shop. Vse pravice pridržane.</p>
        </div>
    </footer>

    <script>
        //burger
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

        let cart = JSON.parse(sessionStorage.getItem('cart')) || [];

        function addToCart(productName, price, image) {
            cart.push({ productName, price, image });
            sessionStorage.setItem('cart', JSON.stringify(cart));
            alert(`${productName} je bil dodan v košarico.`);
            updateCartCount();
        }

        function updateCartCount() {
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.innerText = cart.length;
            }
        }

        window.onload = function () {
            updateCartCount();
        };

        // FILTER
        document.addEventListener('DOMContentLoaded', function () {
            const products = document.querySelectorAll('.product');
            const priceRange = document.getElementById('price-range');
            const sizeFilter = document.getElementById('size');
            const colorFilter = document.getElementById('color');
            const brandFilter = document.getElementById('brand');
            const leagueFilter = document.getElementById('league');
            const sortSelect = document.getElementById('sort');

            priceRange.addEventListener('change', filterProducts);
            sizeFilter.addEventListener('change', filterProducts);
            colorFilter.addEventListener('change', filterProducts);
            brandFilter.addEventListener('change', filterProducts);
            leagueFilter.addEventListener('change', filterProducts);
            sortSelect.addEventListener('change', sortProducts);

            function filterProducts() {
                const selectedPriceRange = priceRange.value;
                const selectedSize = sizeFilter.value;
                const selectedColor = colorFilter.value;
                const selectedBrand = brandFilter.value;
                const selectedLeague = leagueFilter.value;

                products.forEach(product => {
                    const price = parseInt(product.querySelector('p:nth-child(3)').textContent.replace('€', ''));
                    const sizes = product.getAttribute('data-size').split(',');
                    const colors = product.getAttribute('data-color').split(',');
                    const brand = product.getAttribute('data-brand');
                    const league = product.getAttribute('data-league');

                    const priceMatch = selectedPriceRange === 'all' || checkPriceRange(price, selectedPriceRange);
                    const sizeMatch = selectedSize === 'all' || sizes.includes(selectedSize);
                    const colorMatch = selectedColor === 'all' || colors.includes(selectedColor);
                    const brandMatch = selectedBrand === 'all' || brand === selectedBrand;
                    const leagueMatch = selectedLeague === 'all' || league === selectedLeague;

                    if (priceMatch && sizeMatch && colorMatch && brandMatch && leagueMatch) {
                        product.style.display = 'block';
                    } else {
                        product.style.display = 'none';
                    }
                });
            }

            function checkPriceRange(price, range) {
                const [min, max] = range.split('-').map(Number);
                if (max) {
                    return price >= min && price <= max;
                } else {
                    return price >= min;
                }
            }

            function sortProducts() {
                const sortBy = sortSelect.value;
                const productGrid = document.querySelector('.product-grid');
                const sortedProducts = Array.from(products).sort((a, b) => {
                    const priceA = parseInt(a.querySelector('p:nth-child(3)').textContent.replace('€', ''));
                    const priceB = parseInt(b.querySelector('p:nth-child(3)').textContent.replace('€', ''));

                    if (sortBy === 'price-low') {
                        return priceA - priceB;
                    } else if (sortBy === 'price-high') {
                        return priceB - priceA;
                    } else if (sortBy === 'newest') {
                        const dateA = new Date(a.getAttribute('data-date'));
                        const dateB = new Date(b.getAttribute('data-date'));
                        return dateB - dateA;
                    } else {
                        return 0;
                    }
                });

                productGrid.innerHTML = '';
                sortedProducts.forEach(product => productGrid.appendChild(product));
            }
        });
        // kosarica
        // Funkcija za dodajanje izdelkov v košarico
let cart = JSON.parse(sessionStorage.getItem('cart')) || [];

function addToCart(productName, price, slika) {
    cart.push({ productName, price, slika });
    sessionStorage.setItem('cart', JSON.stringify(cart));
    alert(`${productName} je bil dodan v košarico.`);
    updateCartCount();
}

function updateCartCount() {
    const cartCountElement = document.getElementById('cart-count');
    if (cartCountElement) {
        cartCountElement.innerText = cart.length;
    }
}

window.onload = function () {
    updateCartCount();
};

        function addToCart(productName, price, slika) {
            cart.push({ productName, price, slika });
            sessionStorage.setItem('cart', JSON.stringify(cart));
            alert(`${productName} je bil dodan v košarico.`);
            updateCartCount();
        }

        function updateCartCount() {
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.innerText = cart.length;
            }
        }

        window.onload = function () {
            updateCartCount();
        };
//burger
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

    </script>
</body>
</html>