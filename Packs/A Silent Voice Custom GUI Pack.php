<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Silent Voice Custom GUI Pack</title>
    <link rel="stylesheet" href="styles2.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/gif" href="fav.gif">

    <style>
        .btn {
            background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 20px;
        }
        
        /* Darker background on mouse-over */
        .btn:hover {
            background-color: RoyalBlue;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            justify-content: center; /* Center the navbar items */
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #8A2BE2;
            color: white;
        }

        .navbar .icon {
            display: none;
        }

        /* Responsive layout for small screens */
        @media screen and (max-width: 600px) {
            .navbar a:not(:first-child) {display: none;}
            .navbar a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .navbar.responsive {position: relative;}
            .navbar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .navbar.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        /* Center section headings */
        h2 {
            text-align: center;
            display: block;
            margin: 20px 0; /* Add some margin for spacing */
            width: 100%;
        }
    </style>
<?php require_once('imp.php'); ?>
<script data-cfasync="false" src="//dcbbwymp1bhlf.cloudfront.net/?wbbcd=1084282"></script>
</head>
<body>
    <header>
        <div class="navbar" id="myNavbar">
            <a href="../index.html" class="active">Home</a>
            <a href="../index.html#packs">Texture Packs</a>
            <a href="#photos">Features</a>
            <a href="#information">Information</a>
            <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>
    
    <!-- Modal Structure -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImg">
        <div id="caption"></div>
        <button class="download" id="downloadBtn">Download</button>
        <button class="prev" onclick="changeImage(-1)">&#10094;</button>
        <button class="next" onclick="changeImage(1)">&#10095;</button>
    </div>

    <section id="pack-details">
        <h2>A Silent Voice Custom GUI Pack</h2>
        <img src="https://i.imgur.com/lr0zgwd.png" alt="A Silent Voice Custom GUI Pack" class="pack-cover">
    </section> 

    <section>
        <h2>Introduction</h2>
        <p>This custom GUI pack is themed after the heart-touching movie "A Silent Voice." I've made changes to the hot bar and experimented with adding different pictures to each container. The chosen color palette is brown and light blue. If you encounter any bugs, please report them, and I'll address them promptly. You can contact me on my Discord server.</p>
    </section>

    <section>
        <h2>Community Engagement</h2>
        <p>Explore our Discord server where you can suggest and vote for the next pack, participate in anime discussions. <a href="https://discord.gg/RvScgzj3Ph" target="_blank">Join Here</a></p>
    </section>

    <section>
        <h2>Feature Highlights</h2>
        <div id="photos" class="features">
            <div class="feature">
                <h3>HUD</h3>
                <img src="https://i.imgur.com/0wToizW.png" alt="HUD">
            </div>
            <div class="feature">
                <h3>Settings</h3>
                <img src="https://i.imgur.com/c0sCBMb.png" alt="Settings">
            </div>
            <div class="feature">
                <h3>Crafting Table</h3>
                <img src="https://i.imgur.com/garm0dJ.png" alt="Crafting Table">
            </div>
            <div class="feature">
                <h3>Anvil</h3>
                <img src="https://i.imgur.com/fqWJzVE.png" alt="Anvil">
            </div>
            <div class="feature">
                <h3>Stone Cutter</h3>
                <img src="https://i.imgur.com/Bs0VcY1.png" alt="Stone Cutter">
            </div>
            <div class="feature">
                <h3>Dispenser</h3>
                <img src="https://i.imgur.com/sIqzcxa.png" alt="Dispenser">
            </div>
            <div class="feature">
                <h3>Furnace</h3>
                <img src="https://i.imgur.com/wBdpjV3.png" alt="Furnace">
            </div>
            <div class="feature">
                <h3>Shulker Box</h3>
                <img src="https://i.imgur.com/Ene0e2u.png" alt="Shulker Box">
            </div>
            <div class="feature">
                <h3>Brewing Stand</h3>
                <img src="https://i.imgur.com/djGu9ZK.png" alt="Brewing Stand">
            </div>
            <div class="feature">
                <h3>Grind Stone</h3>
                <img src="https://i.imgur.com/oVs4kym.png" alt="Grind Stone">
            </div>
            <div class="feature">
                <h3>Smithing Table</h3>
                <img src="https://i.imgur.com/ujwIy5f.png" alt="Smithing Table">
            </div>
            <div class="feature">
                <h3>Chest</h3>
                <img src="https://i.imgur.com/oWr6Dl8.png" alt="Chest">
            </div>
            <div class="feature">
                <h3>Beacon Menu</h3>
                <img src="https://i.imgur.com/ZPC1JHU.png" alt="Beacon Menu">
            </div>
            <div class="feature">
                <h3>Villager Trading Menu</h3>
                <img src="https://i.imgur.com/MBD28Em.png" alt="Villager Trading Menu">
            </div>
        </div>
        <div style="width: 50%; margin: 0 auto; text-align: center;">
            <p>Download Links</p>
            <a href="https://www.buymeacoffee.com/listarMc" target="_blank">
                <button class="btn download-btn orange">
                    <img src="curseforge-svgrepo-com.png" alt="Icon" class="button-icon"> Download
                </button>
            </a>
            <a href="https://example.com/second-download" target="_blank">
                <button class="btn download-btn green">
                    <img src="modrinth.png" alt="Icon" class="button-icon"> Download 
                </button>
            </a>
        </div>
              
    </section>

    <section id="information">
        <h2>Additional Resources</h2>
        <div class="resources-grid" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
            <a href="https://www.buymeacoffee.com/listarMc" target="_blank">
                <img src="coffe.png" class="coffee-img" alt="Support via Coffee">
            </a>
            <a href="https://www.planetminecraft.com/member/listar/" target="_blank">
                <img src="PMC.webp" class="PMC-img" alt="Support via PMC">
            </a>
            <a href="https://discord.gg/RvScgzj3Ph" target="_blank">
                <img src="https://cdn.prod.website-files.com/6257adef93867e50d84d30e2/636e0b5061df29d55a92d945_full_logo_blurple_RGB.svg" class="Dis-img" alt="Support via Discord">
            </a>
        </div>
    </section>
    
<footer>
    <p>&copy; 2024 ListarMC | <a href="../Privacy Policy.html">Privacy Policy</a></p>
</footer>

    <script>

        // Toggle function for mobile navigation menu
        function toggleNav() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
        
        // Modal functionality
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("modalImg");
        var captionText = document.getElementById("caption");
        var downloadBtn = document.getElementById("downloadBtn");
        var currentIndex = 0;
        
        function openModal(imgElement) {
            modal.style.display = "block";
            modalImg.src = imgElement.src;
            captionText.innerHTML = imgElement.alt;
            downloadBtn.href = imgElement.src; // Set download link
            currentIndex = Array.from(document.querySelectorAll('.feature img')).indexOf(imgElement);
        }
        
        function closeModal() {
            modal.style.display = "none";
        }
        
        function changeImage(n) {
            var images = document.querySelectorAll('.feature img');
            currentIndex = (currentIndex + n + images.length) % images.length;
            modalImg.src = images[currentIndex].src;
            captionText.innerHTML = images[currentIndex].alt;
            downloadBtn.href = images[currentIndex].src; // Update download link
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }
        
        // Add event listeners to feature images
        document.querySelectorAll('.feature img').forEach(img => {
            img.onclick = function() {
                openModal(this);
            }
        });
    </script>
</body>
</html>
