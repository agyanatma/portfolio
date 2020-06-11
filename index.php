<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agyan's Portfolio</title>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <header>
        <div class="header-wrapper">
            <div class="logo">
                <a href="#home">
                    <img src="assets/logo.svg" alt="logo" />
                </a>
            </div>
            <nav class="navigation">
                <ul>
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <section id="home" class="home">
        <div class="watermark">
            <p>PORT</p>
            <p id="folio">FOLIO</p>
        </div>
        <div class="wrapper">
            <div class="content">
                <img width="80px" class="stripe" src="assets/stripe.svg" alt="stripe" />
                <h1>BUILD A GREAT DESIGN WEBSITE OR MOBILE APP</h1>
                <p>
                    I'm a Front End Developer, build a website and mobile applications using
                    React or other web-based programming language.
                </p>
                <div class="call">
                    <a style="margin-right: 1.5em;" class="btn btn-secondary" href="#contact">Get In Touch</a>
                    <a href="#portfolio" class="btn btn-primary">See My Work</a>
                </div>
            </div>
            <div class="page-illust">
                <img width="90%" src="assets/window.svg" alt="Window illustration" />
            </div>
        </div>
    </section>


    <section id="about" class="about">
        <div class="watermark">
            <p>ABOUT</p>
        </div>
        <div class="wrapper">
            <div class="page-illust">
                <img width="40%" src="assets/cup.svg" alt="Cup illustration" />
            </div>
            <div class="content">
                <img width="80px" class="stripe" src="assets/stripe.svg" alt="stripe" />
                <h1>ABOUT</h1>
                <p>
                    His name is Agyan Atma, a front end developer from Indonesia. He mostly used React
                    Framework as tools for developed Web or Mobile applications. He
                    also study about UI/UX design fundamentals to create the best
                    experience to his design for users. And he likes coffee.
                </p>
                <div class="call">
                    <a href="https://www.linkedin.com/in/agyanatma/" target="_blank" class="icon-link"
                        style="margin-right: 1.5em;">
                        <img src="assets/linkedin.svg" alt="linkedin-logo" />
                        <p>linkedin</p>
                    </a>
                    <a href="https://github.com/agyanatma" target="_blank" class="icon-link">
                        <img src="assets/github.svg" alt="github-logo" />
                        <p>github</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="watermark">
            <p>WORK</p>
        </div>
        <div class="wrapper">
            <div class="content">
                <img width="80px" class="stripe" src="assets/stripe.svg" alt="stripe" />
                <h1>PORTFOLIO</h1>
            </div>
            <div class="container-left">
                <img class="portfolio-image" src="assets/images/katanote.jpg" alt="katanote">
                <div class="portfolio-content">
                    <h2>KataNote</h2>
                    <p>This mobile application mainly used as a note and catalog for business company or personal
                        and built using React Native Framework. Currently this application is still pending for released
                        date on
                        google play store.
                    </p>
                    <div class="skills">
                        <label class="badge">React Native</label>
                        <label class="badge">Javascript</label>
                    </div>
                    <!-- <a href="#" class="icon-link">
                        <p>See Project</p>
                        <img src="assets/arrow.svg" alt="arrow">
                    </a> -->
                </div>
            </div>
            <div class="container-right">
                <div class="portfolio-content">
                    <h2>KataNote</h2>
                    <p>This mobile application mainly used as a note and catalog for business company or personal
                        and built using React Native Framework. Currently this application is still pending for released
                        date on
                        google play store.
                    </p>
                    <div class="skills">
                        <label href="#" class="badge">HTML</label>
                        <label href="#" class="badge">HTML</label>
                        <label href="#" class="badge">HTML</label>
                    </div>
                    <!-- <a href="#" target="_blank" class="icon-link">
                        <p>See Project</p>
                        <img src="assets/arrow.svg" alt="arrow">
                    </a> -->
                </div>
                <img class="portfolio-image" src="assets/images/katanote.jpg" alt="katanote">
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="watermark">
            <p>CONTACT</p>
        </div>
        <div class="wrapper">
            <div class="content">
                <img width="80px" class="stripe" src="assets/stripe.svg" alt="stripe" />
                <h1>CONTACT</h1>
            </div>
            <div class="contact-content">
                <div class="form-contact">
                    <form action="mail.php" method="POST" id="mail">
                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" name="name">
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="field">
                            <label for="message">Messages</label>
                            <textarea name="message" cols="30" rows="5" required></textarea>
                        </div>
                        <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                    </form>
                </div>
                <div class="info-contact">
                    <div class="field">
                        <h2>Email</h2>
                        <p>agyanatma1410@gmail.com</p>
                    </div>
                    <div class="field">
                        <h2>Location</h2>
                        <p>Semarang, Central Java, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script src="scripts/main.js"></script>

</body>

</html>