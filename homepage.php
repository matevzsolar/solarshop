
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sl">
<head>
    <script src="https://cdn.weglot.com/weglot.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matevž Šolar">
    <meta name="description" content="Trgovina z nogometnimi dresi">
    <title>Šolar Shop</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
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
</div>
    <header>
        <nav>
            
            <ul class="nav-links">
               

                <li class="dropdown">
                    <a href="#">MOŠKI <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="klubi.php">KLUBI</a></li>
                        <li><a href="države.php">DRŽAVE</a></li>
                        <li><a href="stil.php">STIL</a></li>
                        <li><a href="ostalo.php">OSTALO</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">ŽENSKE <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="klubi.html">KLUBI</a></li>
                        <li><a href="države.html">DRŽAVE</a></li>
                        <li><a href="stil.html">STIL</a></li>
                        <li><a href="ostalo.html">OSTALO</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">OTROCI <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href="klubi.html">KLUBI</a></li>
                        <li><a href="države.html">DRŽAVE</a></li>
                        <li><a href="stil.html">STIL</a></li>
                        <li><a href="ostalo.html">OSTALO</a></li>
                    </ul>
                </li>
                <li><a  class="desno" href="login.html">znižano</a></li>
                <li><a  class="desno" href="login.html">novosti</a></li>


        </nav>
    </header>

    <div class="bruh-container">
     <img src="slike/home/bruh.png" alt="Bayern Munich" class="bruh-image">

    <div class="bruh-text">
    <h2 class="gold-text">
        <span>Bayern Munich</span>
        <span>125 obletnica</span>
    </h2>
    <a href="bayern.html" class="gold-button">NAKUPUJ ZDAJ</a>
    
</div>
    <img src="slike/home/bela.jpg" alt="125 obletnica" class="small-image">

</div>
<div class="dialo-container">
    <img src="slike/home/dialo.jpg" alt="novo" class="dialo-image">
    <div class="dialo-text">
        <span class="novo-text">NOVO NA ZALOGI</span>
        <a href="nova_stran.html" class="dialo-button">Oglejte si več</a>
    </div>
</div>
<div class="image-row">
    <div class="image-container">
        <img src="slike/sali/boots.jpg" alt="Nogometni čevlji">
        <div class="image-text">
            <a href="nogometni_cevlji.html">NOGOMETNI ČEVLJI<span class="arrow">&#8594;</span></a>
        </div>
    </div>
    <div class="image-container">
        <img src="slike/sali/scot.jpg" alt="Nogometne majice">
        <div class="image-text">
            <a href="nogometne_majice.html">NOGOMETNE MAJICE<span class="arrow">&#8594;</span></a>
        </div>
    </div>
    <div class="image-container">
        <img src="slike/sali/sali.jpg" alt="Navijaški dodatki">
        <div class="image-text">
            <a href="navijaski_dodatki.html">NAVIJAŠKI DODATKI<span class="arrow">&#8594;</span></a>
        </div>
    </div>
</div>
<div class="slideshow-container">
    <div class="slideshow">
        <div class="slide">
            <img src="slike/slide/clubs.jpg" alt="Klubi">
            <div class="slide-text">
                <p>Oglejte si naše klubske drese!</p>
                <a href="klubi.html">Nakupuj zdaj</a>
            </div>
        </div>
        <div class="slide">
            <img src="slike/slide/nati.jpg" alt="Države">
            <div class="slide-text">
                <p>Podpirajte svojo državo s čudovitimi nacionalnimi dresi.</p>
                <a href="države.html">Nakupuj zdaj</a>
            </div>
        </div>
        <div class="slide">
            <img src="slike/slide/random.jpg" alt="Stil">
            <div class="slide-text">
                <p>Odkrijte naš stil.</p>
                <a href="stil.html">Več o tem</a>
            </div>
        </div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
 

    <section class="top-products">
        <h2>NAJBOLJ PRODAJANI IZDELKI</h2>
        <div class="product-grid">
            <div class="product">
                <a href= "german.html"><img src="slike/drzave/german.jpg" alt="German National team Jersey"></a>
                <p>2022-2023 Dres nemške reprezentance </p>
                <p>€60,00</p>

            </div>
            <div class="product">
                <img src="slike/klub/manu.jpg" alt="Manchester United Away Jersey">
                <p>1992-1993 Barcelona domači dres</p>
                <p>€45,00</p>

            </div>
            <div class="product">
                <img src="slike/klub/real.jpg" alt="Men Real Madrid 23/24 Home Jersey">
                <p>2023-2024 Real Madrid domači dres</p>
                <p>€50,00</p>

            </div>
            <div class="product">
                <img src="slike/klub/psg.jpg" alt="Retro PSG Home Jersey">
                <p>PSG domači dres retro</p>
                <p>€60,00</p>

            </div>
        </div>
    </section>
</div>
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
      let slideIndex = 0;
const slides = document.getElementsByClassName("slide");
const totalSlides = slides.length;

// Funkcija za prikaz trenutnega slajda
function showSlides(n) {
    if (n >= totalSlides) { slideIndex = 0 }
    if (n < 0) { slideIndex = totalSlides - 1 }

    const offset = -slideIndex * 100;
    document.querySelector('.slideshow').style.transform = `translateX(${offset}%)`;
}

// Funkcija za premikanje na naslednji slajd
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Funkcija za samodejno menjavo slik
function autoSlide() {
    plusSlides(1); // Premakne na naslednji slajd
}

// Nastavite interval za samodejno menjavo slik (5000 ms = 5 sekund)
setInterval(autoSlide, 5000);

// Prikaži prvi slajd ob nalaganju strani
showSlides(slideIndex);

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