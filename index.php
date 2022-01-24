<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
    <body>
        <header>
            <a href="#" class="logo">Shop<span>Now</span></a>
            <div class="menuToggle" onclick="toggleMenu()"></div>
            <ul class="navigation">
                <li><a href="#banner" onclick="toggleMenu()">Home</a></li>
                <li><a href="#about" onclick="toggleMenu()">About</a></li>
                <li><a href="#menu" onclick="toggleMenu()">Menu</a></li>
                <li><a href="#testimonials" onclick="toggleMenu()">Testimonials</a></li>
                <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
                <li id="listbreak">|</li>
                <li><a href="login.php" onclick="toggleMenu()">Manage Products</a></li>
            </ul>
        </header>
            <section class="banner" id="banner">
                <div class="dimlight"></div>
                    <div class="content">
                        <h2>Always Shop Good</h2>
                        <p>Our website contains various electronic componants. Let's discover them together down here!</p>
                        <a href="#" class="btn">Our Menu</a>
                    </div>
            </section>

        <section class="about" id="about">
            <div class="row">
                <div class="col50">
                    <h2 class="titleText"><span>A</span>bout Us</h2>
                    <p>ShopNow is a Professional eCommerce Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of eCommerce, with a focus on dependability and Electronics. We're working to turn our passion for eCommerce into a booming online website. We hope you enjoy our eCommerce as much as we enjoy offering them to you.</p>
                    <br>
                    <h4> Thanks for visiting us! Have a nice day!</h4>
                </div>
                <div class="col50">
                    <div class="imgBx">
                        <img src="images/img1.jpg">
                    </div>
                </div>
            </div>
        </section>

        <section class="menu" id="menu">
            <div class="title">
                <h2 class="titleText">Our <span>P</span>roducts</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu1.jpg">
                    </div>
                    <div class="text">
                        <h3>Gaming PCs</h3>
                    </div>
                </div>
            
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu2.webp">
                    </div>
                    <div class="text">
                        <h3>TVs & Smart TVs</h3>
                    </div>
                </div>
            
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu3.jpg">
                    </div>
                    <div class="text">
                        <h3>Tablets & Laptops</h3>
                    </div>
                </div>
           
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu4.webp">
                    </div>
                    <div class="text">
                        <h3>Phone Accessories</h3>
                    </div>
                </div>
            
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu5.jpg">
                    </div>
                    <div class="text">
                        <h3>Drones</h3>
                    </div>
                </div>
            
                <div class="box">
                    <div class="imgBx">
                        <img src="images/menu6.jpeg">
                    </div>
                    <div class="text">
                        <h3>Car Gadgets</h3>
                    </div>
                </div>
            </div>
            <div class="title">
                <a href="#" class="btn">View All</a>
            </div>
        </section>

        <section class="testimonials" id="testimonials">
            <div class="title white">
                <h2 class="titleText">They <span>S</span>aid About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="Images/testi2.jpg">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsum sed minus harum similique a ducimus quia. Saepe quisquam molestias vitae eligendi quam? Quibusdam impedit porro voluptas, explicabo optio soluta!</p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="Images/testi3.jpg">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsum sed minus harum similique a ducimus quia. Saepe quisquam molestias vitae eligendi quam? Quibusdam impedit porro voluptas, explicabo optio soluta!</p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="Images/testi1.jpg">
                    </div>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsum sed minus harum similique a ducimus quia. Saepe quisquam molestias vitae eligendi quam? Quibusdam impedit porro voluptas, explicabo optio soluta!</p>
                        <h3>Someone Famous</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="title">
                <h2 class="titleText"><span>C</span>ontact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="contactForm">
                <h3>Send Message</h3>
                <div class="inputBox">
                    <input type="text" placeholder="Name">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Email">
                </div>
                <div class="inputBox">
                    <textarea placeholder="Name"></textarea>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Send">
                </div>
            </div>
        </section>

        <div class="copyrightText">
            <p>© Copyright 2022 <a href="#">Online</a>. All Right Reserved</p>
        </div>

        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                const header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY>0);
            })

            function toggleMenu(){
                const menuToggle = document.querySelector(".menuToggle");
                const navigation = document.querySelector(".navigation");
                menuToggle.classList.toggle("active");
                navigation.classList.toggle("active");
            }
        </script>
    </body>
</html>