<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo-gembox.png" type="image/x-icon">
    <title>GEMBOX</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bundles.min.css">
    <link rel="stylesheet" href="css/owlCarousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/lightslider.css" />
    <script src="js/light_jquery.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->

</head>

<body>
    <header id="topHeader">
        <div class="header-top">
            <nav class="topnavbar">
                <button class="open-btn" onclick="toggleMenu()">☰</button>
                <div class="brand-logo">
                    <div class="logo-image">
                        <a href="index.php"><img src="images/logo-gembox.png" alt="Gembox"></a>
                    </div>
                </div>
                <div class="right-navbar">
                    <a href="authentication.php"><i class="ti-user"></i></a>
                    <a class="whatsapp_icon" href="whatsapp://send?text=Hello%20World!&phone=+9198********1"><i
                            class="fa-solid fa-phone"></i></a>
                    <a class="ShopBag_icon" href="shop.php"><i class="ti-bag"></i></a>

                </div>
            </nav>
        </div>
    </header>
    <div id="side-menu" class="side-menu">
        <button class="close-btn" onclick="toggleMenu()">×</button>
        <div class="desktop_menu">
        <div class="client_logo">
            <img src="images/logo-gembox.png" alt="">
        </div>
            <ul class="list-unstyled parent">
                <li class="has_child"><a href="#" onclick="openSubmenu(event, 'submenu1')">Jewellery <span><i class="fa-solid fa-angles-right"></i></span></a></li>
                <li class="has_child"><a href="#" onclick="openSubmenu(event, 'submenu2')">Collection <span><i class="fa-solid fa-angles-right"></i></span></a></li>
                <li class="has_child"><a href="#" onclick="openSubmenu(event, 'submenu3')">Shop By Gemstone <span><i class="fa-solid fa-angles-right"></i></span></a></li>
            </ul>
            <div class="contact_social">
                <a href="whatsapp://send?text=Hello%20World!&phone=+9198********1"><i class="fa-solid fa-phone"></i> CONTACT US</a>
                <div class="social-links">
                    <a href="#"><i class="icofont-facebook"></i></a>
                    <a href="#"><i class="icofont-youtube-play"></i></a>
                    <a href="#"><i class="icofont-linkedin"></i></a>
                    <a href="#"><i class="icofont-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="submenu1" class="submenu-panel">
        <button class="back-btn" onclick="closeSubmenu('submenu1')">←</button>
        <a href="#">Bracelets and Bangles</a>
        <a href="#">Earrings</a>
        <a href="#">Necklaces</a>
        <a href="#">Rings</a>
    </div>

    <div id="submenu2" class="submenu-panel">
        <button class="back-btn" onclick="closeSubmenu('submenu2')">←</button>
        <a href="#">Waterfall Jewellery</a>
        <a href="#">Satin Gold Jewellery</a>
        <a href="#">Art Deco Jewellery</a>
        <a href="#">On The Go Jewellery</a>
    </div>

    <div id="submenu3" class="submenu-panel">
        <button class="back-btn" onclick="closeSubmenu('submenu3')">←</button>
        <a href="#">Ruby</a>
        <a href="#">Diamond</a>
        <a href="#">Emerald</a>
        <a href="#">Blue Sapphire</a>
        <a href="#">Yellow sapphire</a>
        <a href="#">Pink sapphire</a>
        <a href="#">Cats eye</a>
        <a href="#">Garnet</a>
        <a href="#">Amethyst</a>
        <a href="#">Moonstone</a>
        <a href="#">Malachite</a>
        <a href="#">Lapiz lazuli</a>
        <a href="#">Apatite</a>
        <a href="#">Spinel</a>
        <a href="#">Blue spinel</a>
        <a href="#">Pearls</a>
        <a href="#">Tanzanite</a>
        <a href="#">Fluorite</a>
        <a href="#">Smoky topaz</a>
        <a href="#">Natural crystal</a>
        <a href="#">Coral</a>
        <a href="#">Kyanite</a>
        <a href="#">Citrine</a>
        <a href="#">Iolite</a>
        <a href="#">Opal</a>
        <a href="#">Green quartz</a>
        <a href="#">Pink onyx</a>
        <a href="#">Green onyx</a>
        <a href="#">Blue onyx</a>
        <a href="#">Labradorite</a>
        <a href="#">Black spinel</a>
        <a href="#">Tourmaline</a>
        <a href="#">Aquamarine</a>
        <a href="#">Peridot</a>
        <a href="#">Mother of Pearl</a>
        <a href="#">Turquoise</a>
        <a href="#">Morganite</a>
    </div>
    <div id="overlay" class="overlay" onclick="toggleMenu()"></div>
    <script>
        function toggleMenu() {
            var sideMenu = document.getElementById("side-menu");
            var overlay = document.getElementById("overlay");
            if (sideMenu.style.width === "250px") {
                sideMenu.style.width = "0";
                overlay.style.display = "none";
                closeAllSubmenus();
            } else {
                sideMenu.style.width = "250px";
                overlay.style.display = "block";
            }
        }

        function openSubmenu(event, submenuId) {
            event.preventDefault();
            closeAllSubmenus();
            var submenu = document.getElementById(submenuId);
            submenu.style.width = "250px";
        }

        function closeSubmenu(submenuId) {
            var submenu = document.getElementById(submenuId);
            submenu.style.width = "0";
        }

        function closeAllSubmenus() {
            var submenus = document.querySelectorAll(".submenu-panel");
            submenus.forEach(submenu => {
                submenu.style.width = "0";
            });
        }
    </script>