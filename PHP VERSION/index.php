<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;400;600;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="spinner-container">
        <div class="circles">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <div class="container" id="cont">
        <div class="hamburger-menu">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>


        </div>

        <section class="sidebar">
            <ul class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link about" data-content="About">About</a>
                </li>
                <li class="menu-item">
                    <a href="#drawing" class="menu-link" data-content="Projects">Projects</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link" data-content="Contact">Contact </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link" data-content="Resume">Resume</a>
                </li>

            </ul>
            <div class="social-media">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href=" #"><i class="fas fa-envelope-square"></i></a>
            </div>
        </section>

    </div>















    <div class="about-me-container">

        <div class="about-me-div">

            <div class="about-me-contents">
                <h2 class="about-me-header">Who am I?</h2>
                <p class="front-end-p">Front-end developer</p>
                <p class="summary">Hi, I'm Marcin Grzybowski, I'm a 24 year old aspiring Front-end developer. I've
                    started my journey with web design and front-end development in early 2021, I've been on a
                    wonderful journey ever since then and I want to keep it going. I love doing this and will keep
                    doing so for a while.
                    Thank you.
                    <br>
                    Here is the list of my specialities:
                </p>
                <div class="speciality-list">
                    <i class="fab fa-js"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-react"></i>
                    <i class="fab fa-bootstrap"></i>
                </div>






            </div>

            <div class="about-me-form">
                <a href="#" class="close-about-me"><i class="fas fa-times"></i></a>
                <section class="contact">
                    <div class="contact-wrapper">
                        <div class="contact-left"></div>
                        <div class="contact-right">
                            <h1 class="contact-heading">Contact</h1>
                            <form action="" class="contacting-me" action="contactform.php" method="post">
                                <div class="input-group">
                                    <input type="text" class="field field-name" name="name" placeholder="Full Name">
                                    <label class="input-label" for="">
                                        Name
                                    </label>
                                </div>
                                <div class="input-group">
                                    <input type="email" class="field field-email" name="mail" placeholder="Your email">
                                    <label class="input-label" for="">
                                        Email
                                    </label>
                                </div>
                                <div class="input-group">
                                    <textarea class="field field-message" name="message"></textarea>
                                    <label class="message">Message</label>
                                </div>
                                <button type="submit" class="submit-btn" value="Submit" name="submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <section class="opening-welcome">

        <nav>
            <img src="imgs/mainlogowhite.png" alt="">
            <ul id="example-one">
                <li><a href="#" class="nav-list current_page_item about-desktop-nav">About</a></li>
                <li><a href="#drawing" class="nav-list">Projects</a></li>
                <li><a href="#" class="nav-list">Contact</a></li>
                <li><a href="#" class="nav-list">Resume</a></li>

            </ul>

        </nav>


        <div class="downward-line"></div>
        <div id="particles-js"></div>
        <section class="main-page">



            <div class="social-links">
                <a href="" class="github"><i class="fab fa-github"></i></a>
                <a href="" class="linked-in"><i class="fab fa-linkedin"></i></a>
                <a href="" class="email"><i class="fas fa-envelope-square"></i></a>


            </div>
            <img src="imgs/logonoshad2 (2).png" alt="">
            <div class="main-page-content">
                <h1>Marcin Grzybowski</h1>
                <p>Front-end Developer</p>
                <a href="#" class="button-about"> About me</a>


            </div>

        </section>


        <a href="#" class="scroll-btn">
            <i class="fas fa-arrow-up"></i>
        </a>
    </section>

    <div class="my-work-hyper"> <a href="#drawing" class="my-work-arrow"> Portfolio</a></div>
    <div class="my-work-div">
        <div class="downward-line2 downward-line-work"">



        </div>

        <div class=" downward-line3 downward-line-work"> </div>
        <div class="downward-line4 downward-line-work""> </div>

    </div>

    <div class=" main-content">

            <section class="projects-container">
                <div class="header-projects">
                    <h1>Portfolio</h1>
                    <p>Below are some of the projects I've been working on, from when I started to where I am now!</p>
                </div>
                <div class="project-one sdsd">

                    <div class="project-one-text" id="drawing">
                        <h2>Blizzard Website Clone</h2>
                        <a href="">Github</a>
                        <p class="appear-div-desktop">This is a copy of Blizzard Entertainment's
                            website from July
                            2021, I used
                            native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                            original website.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                            necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                            ab adipisci suscipit voluptatibus. Earum.
                            <br>
                            <i class="fab fa-js"></i>
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>

                        </p>
                    </div>
                    <a href=""><img src="imgs/project1bg1.png" alt="" class="image-project-one"></a>

                </div>
                <p class="appear-div appear-div-mobile">This is a copy of Blizzard Entertainment's website from
                    2021, I used
                    native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                    original website.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                    necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                    ab adipisci suscipit voluptatibus. Earum.
                    <br>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>

                </p>
                <div class="project-one project-two">

                    <div class="project-one-text">
                        <h2>Drawing App</h2>
                        <p class="appear-div-desktop">This is a copy of Blizzard Entertainment's website from
                            2021, I used
                            native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                            original website.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                            necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                            ab adipisci suscipit voluptatibus. Earum.
                            <br>
                            <i class="fab fa-js"></i>
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>

                        </p>
                        <a href="">Github</a>
                    </div>
                    <a href=""><img src="imgs/project2bg.png" alt=""></a>

                </div>
                <p class="appear-div appear-div-mobile">This is a copy of Blizzard Entertainment's website from
                    2021, I used
                    native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                    original website.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                    necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                    ab adipisci suscipit voluptatibus. Earum.
                    <br>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>

                </p>
                <div class="project-one project-three">

                    <div class="project-one-text">
                        <h2>Fancy a Quiz?</h2>
                        <p class="appear-div-desktop">This is a copy of Blizzard Entertainment's website from
                            2021, I used
                            native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                            original website.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                            necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                            ab adipisci suscipit voluptatibus. Earum.
                            <br>
                            <i class="fab fa-js"></i>
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>

                        </p>
                        <a href="">Github</a>
                    </div>
                    <a href=""><img src="imgs/project3bg.png" alt=""></a>

                </div>
                <p class="appear-div appear-div-mobile">This is a copy of Blizzard Entertainment's website from
                    2021, I used
                    native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                    original website.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                    necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                    ab adipisci suscipit voluptatibus. Earum.
                    <br>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>

                </p>
                <div class="project-one project-four">

                    <div class="project-one-text">
                        <h2>Personal website</h2>
                        <p class="appear-div-desktop">This is a copy of Blizzard Entertainment's website from
                            2021, I used
                            native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                            original website.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                            necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                            ab adipisci suscipit voluptatibus. Earum.
                            <br>
                            <i class="fab fa-js"></i>
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>

                        </p>
                        <a href="">Github</a>
                    </div>
                    <a href=""><img src="imgs/project4bg.png" alt=""></a>

                </div>
                <p class="appear-div appear-div-mobile">This is a copy of Blizzard Entertainment's website from
                    2021, I used
                    native JS, CSS and HTML in order to build it, using images mostly taken directly from the
                    original website.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic beatae sequi architecto minus
                    necessitatibus libero cumque nisi, ad reiciendis facilis veritatis, repellat alias ut illum
                    ab adipisci suscipit voluptatibus. Earum.
                    <br>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>

                </p>
            </section>






        </div>


        <footer>
            <div class="footer-content">
                <div class="footer-logo"> <img src="imgs/mainlogowhite.png" alt=""></div>

                <div class="footer-nav">
                    <ul>
                        <li class="footer-linkedin"><a href="#"><i class="fab fa-linkedin"></i>Linkdedin</a></li>
                        <li class="footer-github"><a href="#"><i class="fab fa-github"></i>Github</a></li>
                        <li class="footer-email"><a href="#"><i class="fas fa-envelope-square"></i>Email</a></li>
                    </ul>
                </div>
                <div class="footer-extras">
                    <p> &copy; Marcin Grzybowski 2021 </p>
                </div>
            </div>

        </footer>
        <script src="script.js"></script>

</body>

</html>