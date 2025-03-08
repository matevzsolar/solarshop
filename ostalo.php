<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matevž Šolar">
    <meta name="description" content="Trgovina z nogometnimi dresi">
    <title>Šolar Shop - Ostalo</title>
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
        <img src="slike/logo/logo2.png" alt="logo" class="logo">
        <span class="logo-text">ŠOLAR SHOP</span>
        <div class="right-links">
            <ul class="nav-links2">
                <li><a class="desno" href="cart.html"><i class="fas fa-shopping-bag"></i> <span id="cart-count">0</span></a></li>
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
                    <option value="0-10">Pod €10</option>
                    <option value="10-20">€10 - €20</option>
                    <option value="20-30">€20 - €30</option>
                    <option value="30-40">€30 - €40</option>
                </select>
            </div>
        </div>
        <!-- Dodan filter za vrsto izdelka -->
        <div class="filter-section">
            <div class="filter-group">
                <label for="type">Vrsta izdelka:</label>
                <select id="type">
                    <option value="all">Vse</option>
                    <option value="kapa">Kape</option>
                    <option value="šal">Šali</option>
                    <option value="navijaški-dodatek">Navijaški dodatki</option>
                    <option value="hlače">Hlače</option>
                    <option value="žoga">Nogometne žoge</option>
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
                    <option value="orange">Oranžna</option>
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
                    <option value="lotto">Lotto</option>
                </select>
            </div>
        </div>
    </div>

    <div class="naslovv">
        <h2>OSTALI IZDELKI</h2>
    </div>

    <section class="top-products">
        <div class="product-grid">
            <div class="product" data-type="kapa" data-color="black,yellow" data-brand="puma" data-date="2024-10-28">
                <img src="slike/ostalo/kapa.jpg" alt="Dortmund kapa">
                <p>Dortmund kapa</p>
                <p>€10,00</p>
                <button class="add-to-cart" onclick="addToCart('Dortmund kapa', 10, 'slike/ostalo/kapa.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-type="hlače" data-color="red,black" data-brand="adidas" data-date="2024-10-28">
                <img src="slike/ostalo/hlaca.jpg" alt="AC milan shorts">
                <p>AC milan shorts</p>
                <p>€30,00</p>
                <button class="add-to-cart" onclick="addToCart('AC milan shorts', 30, 'slike/ostalo/hlaca.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-type="šal" data-color="green,white" data-brand="nike" data-date="2025-01-01">
                <img src="slike/ostalo/šal.jpg" alt="Man United scarf">
                <p>Man United scarf</p>
                <p>€9,00</p>
                <button class="add-to-cart" onclick="addToCart('Man United scarf', 9, 'slike/ostalo/šal.jpg')">Dodaj v košarico</button>
            </div>
            <div class="product" data-type="žoga" data-color="black,yellow" data-brand="adidas" data-date="2024-01-23">
                <img src="slike/ostalo/žoga.jpg" alt="Real Madrid ball">
                <p>Real Madrid ball</p>
                <p>€20,00</p>
                <button class="add-to-cart" onclick="addToCart('Real Madrid ball', 20, 'slike/ostalo/žoga.jpg')">Dodaj v košarico</button>
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
            const typeFilter = document.getElementById('type');
            const colorFilter = document.getElementById('color');
            const brandFilter = document.getElementById('brand');
            const sortSelect = document.getElementById('sort');

            priceRange.addEventListener('change', filterProducts);
            typeFilter.addEventListener('change', filterProducts);
            colorFilter.addEventListener('change', filterProducts);
            brandFilter.addEventListener('change', filterProducts);
            sortSelect.addEventListener('change', sortProducts);

            function filterProducts() {
                const selectedPriceRange = priceRange.value;
                const selectedType = typeFilter.value;
                const selectedColor = colorFilter.value;
                const selectedBrand = brandFilter.value;

                products.forEach(product => {
                    const price = parseInt(product.querySelector('p:nth-child(3)').textContent.replace('€', ''));
                    const type = product.getAttribute('data-type');
                    const colors = product.getAttribute('data-color').split(',');
                    const brand = product.getAttribute('data-brand');

                    const priceMatch = selectedPriceRange === 'all' || checkPriceRange(price, selectedPriceRange);
                    const typeMatch = selectedType === 'all' || type === selectedType;
                    const colorMatch = selectedColor === 'all' || colors.includes(selectedColor);
                    const brandMatch = selectedBrand === 'all' || brand === selectedBrand;

                    if (priceMatch && typeMatch && colorMatch && brandMatch) {
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
    </script>
</body>
</html>