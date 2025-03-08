<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matevž Šolar">
    <title>Košarica - Šolar Shop</title>
    <link rel="stylesheet" href="css/kosarica.css?v=<?php echo time(); ?>">
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
        <li><a href="homepage.php">Domov</a></li>
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
</div>
    
    <section id="cart-items">
        <h2>VAŠA KOŠARICA</h2>
        <div id="cart-container">Košarica je prazna.</div>
        <button id="checkout-button" onclick="window.location.href='checkout.html'">Pojdi na blagajno</button>
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
        let cart = JSON.parse(sessionStorage.getItem('cart')) || [];

        function displayCart() {
            const cartContainer = document.getElementById('cart-container');
            let total = 0;

            if (cart.length === 0) {
                cartContainer.innerHTML = "<p>Košarica je prazna.</p>";
            } else {
                cartContainer.innerHTML = cart.map((item, index) => `
                    <div class="cart-item">
                        <img src="${item.slika}" alt="${item.productName}" style="width: 100px; height: auto;">
                        <p>${item.productName} - ${item.price} €</p>
                        <select onchange="updateQuantity(${index}, this.value)">
                            ${Array.from({ length: 10 }, (_, i) => `<option value="${i + 1}" ${item.quantity === i + 1 ? 'selected' : ''}>${i + 1}</option>`).join('')}
                        </select>
                        <select onchange="updateSize(${index}, this.value)">
                            <option value="S" ${item.size === 'S' ? 'selected' : ''}>S</option>
                            <option value="M" ${item.size === 'M' ? 'selected' : ''}>M</option>
                            <option value="L" ${item.size === 'L' ? 'selected' : ''}>L</option>
                            <option value="XL" ${item.size === 'XL' ? 'selected' : ''}>XL</option>
                        </select>
                        <span onclick="removeFromCart(${index})" style="cursor: pointer;">&times;</span>
                    </div>
                `).join('');

                total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
                cartContainer.innerHTML += `<p><strong>Skupni znesek: ${total.toFixed(2)} €</strong></p>`;
            }
        }

        function updateQuantity(index, quantity) {
            cart[index].quantity = parseInt(quantity);
            sessionStorage.setItem('cart', JSON.stringify(cart));
            displayCart();
        }

        function updateSize(index, size) {
            cart[index].size = size;
            sessionStorage.setItem('cart', JSON.stringify(cart));
            displayCart();
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            sessionStorage.setItem('cart', JSON.stringify(cart));
            displayCart();
            updateCartCount();
        }

        function updateCartCount() {
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.innerText = cart.length;
            }
        }

        window.onload = function () {
            displayCart();
            updateCartCount();
        };
        //burgert
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