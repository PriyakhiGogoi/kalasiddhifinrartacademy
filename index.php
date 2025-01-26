<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>kala siddhi</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    </head>
    <body>
        <section class="header">
            <div class="hero">
            <nav>
               <img src="img/logo.jpg" width="150px" class="logo">
               <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
               <ul>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#course">COURSE</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
               </ul>
               </div>
               <i class="faa fa-bars" onclick="showMenu()"></i>
            </nav>
            <div class="content">
                <h1 class="anim">KALA SIDDHI</h1>
                <h3 class="anim">FINE ARTS ACADEMY</h3>
                <P class="anim">ESTD:5th June 2009, Sivasagar, Assam</P>
            <a href="contact.php" class="nano anim">CONTACT US</a>
        
            </div>
            </div>
        </section>

        <!--about-->
        <section class="about" id="about">
            <h1>ABOUT US</h1>
            <p> Welcome to KALA SIDDHI Fine Art Academy, where we provide personalized guidence in paiting, drawing, craft and more, helping childrens passions and develop their artistic skills.
                Whether a beginner looking to learn the basics or an advance artist seeking to refine skills, our Kala Siddhi Fine Art Academy is here to support everyone.
            </p>
        </section>

        <!----course-->
        <section class="course" id="course">
            <h1>COURSES WE OFFER</h1>
            <div class="row">
                <div class="course-col">
                    <h3>Preliminary</h3>
                    <p>5 year course from KG to class 5. Here we make the students learn the basic drawings, colouring techniques etc</p>
                </div>
                <div class="course-col">
                    <h3>Diploma</h3>
                    <p>5 year course from 6 to class 10 (and more). Here we make the students learn the advance sketching, colouring techniques including water color, oil pastel, acrylic on canvas, crafts etc</p>
                </div>
            </div>
        </section>

        <!--principal-->
        <section class="principal">
        <h1>Massage from Principal</h1>
        <img src="img/IMG (6).jpg">
        <p>Hello students, <b>I'm Simanta Khatuwal</b>, the principal of Kala Siddhi Fine Art Academy, Betbari. Kala Siddhi was established in 5th June 2009 and is located in Betbari, Sibasagar, Assam. 
           The art school is Assam Goverment registered on the registration no- RS/SIVA/256/G/02 of 2021-2022. Our school is dedicated to helping students explore and develop their unique artistic talents. With experienced 
           teachers and a supportive environment makes us distinct from other art schools. Here are some beautiful moments of our school, click here to see the <a href="#">gallery</a>.  
        </p>
        </section>
        <!--footer-->
        <section class="footer">
            <h4>CONTACT US</h4>
            <P>For more infomation contact us on this number <br> Phone No : +919678556768</P>
        </section>
        <!--Javascript for toggle menu--->
        <script>
            var navLinks=document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right="0";
            }
            function hideMenu(){
                navLinks.style.right="-200px";
            }
        </script>
    </body>
</html>