 <!DOCTYPE html>
 <html>

 <head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
   <link rel="stylesheet" type="text/css" href="css/style.css">

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>My portfolio Gigih</title>
 </head>

 <body id="home" class="scrollspy">

   <!-- Nvbar -->
   <div class="navbar-fixed">
     <nav class="indigo">
       <div class="container">
         <div class="nav-wrapper">
           <a href="../" class="brand-logo">Gigih Ling</a>
           <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <!-- <li><a href="#about">About Me</a></li> -->
             <li><a href="../">About Me</a></li>
             <li><a href="#services">Services</a></li>
             <li><a href="#portfolio">Portfolio</a></li>
             <li><a href="#clients">Clients</a></li>
             <li><a href="#contact">Contact Us</a></li>
           </ul>
         </div>
       </div>
     </nav>
   </div>

   <!-- side nav -->
   <ul class="sidenav" id="mobile-nav">
     <li><a href="">About Us</a></li>
     <li><a href="">Clients</a></li>
     <li><a href="">Services</a></li>
     <li><a href="">Portfolio</a></li>
     <li><a href="">Contact Us</a></li>
   </ul>


   <!-- slider -->
   <div class="slider">
     <ul class="slides">
       <li>
         <img src="img/slider/satu.jpg">
         <div class="caption left-align">
           <h3>This is our big Tagline!</h3>
           <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
         </div>
       </li>
       <li>
         <img src="img/slider/dua.jpg">
         <div class="caption center-align">
           <h3>This is our big Tagline!</h3>
           <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
         </div>
       </li>
       <li>
         <img src="img/slider/tiga.jpg">
         <div class="caption right-align">
           <h3>This is our big Tagline!</h3>
           <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
         </div>
       </li>
     </ul>
   </div>


   <!-- about -->
   <section class="about scrollspy" id="about">
     <div class="container">
       <div class="row">
         <h3 class="center light grey-text text-darken-3">About Us</h3>
         <div class="col m6 light">
           <h5>We Are Prefesional</h5>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
         <div class="col m6 light">
           <p>WEB DEVELOPMENT</p>
           <div class="progress">
             <div class="determinate blue" style="width: 70%"></div>
           </div>
           <p>MOBILE APP DEVELOPMENT</p>
           <div class="progress">
             <div class="determinate blue" style="width: 90%"></div>
           </div>
           <p>GAME DEVELOPMENT</p>
           <div class="progress">
             <div class="determinate blue" style="width: 50%"></div>
           </div>
         </div>
       </div>
     </div>
   </section>




   <!-- services -->
   <section id="services" class="services grey lighten-3 scrollspy">
     <div class="container">
       <div class="row">
         <h3 class="light center grey-text text-darken-3">Our Services</h3>
         <div class="col m4 s12">
           <div class="card-panel center">
             <i class="material-icons large">desktop_windows</i>
             <h5>Web Development</h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
           </div>
         </div>

         <div class="col m4 s12">
           <div class="card-panel center">
             <i class="material-icons large">developer_mode</i>
             <h5>Mobile App</h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
           </div>
         </div>

         <div class="col m4 s12">
           <div class="card-panel center">
             <i class="material-icons large">games</i>
             <h5>Game Development</h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
           </div>
         </div>
       </div>
     </div>
   </section>



   <!-- portfolio -->
   <section id="portfolio" class="portfolio grey lighten-3 scrollspy">
     <div class="container">
       <h3 class="light center grey-text text-darken-3 ">Portfolio</h3>

       <!-- row 1 -->
       <div class="row">
         <div class="col m3 s12">
           <img src="img/portfolio/1.png" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/2.png" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/3.png" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/4.png" class="responsive-img materialboxed">
         </div>
       </div>
       <!-- end of row 1 -->

       <!-- row 2 -->
       <div class="row">
         <div class="col m3 s12">
           <img src="img/portfolio/5.png" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/6.png" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/7.jpg" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/8.jpg" class="responsive-img materialboxed">
         </div>
       </div>
       <!-- end of row 2 -->

       <!-- row 3 -->
       <div class="row">
         <div class="col m3 s12">
           <img src="img/portfolio/9.jpg" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/10.jpg" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/11.jpg" class="responsive-img materialboxed">
         </div>
         <div class="col m3 s12">
           <img src="img/portfolio/12.jpg" class="responsive-img materialboxed">
         </div>
       </div>
       <!-- end of row 3 -->

       <div class="row center-align">
         <a href="" class="waves-effect waves-light btn-large">
           See More
         </a>
       </div>

     </div>
   </section>


   <!-- Client -->
   <div id="clients" class="parallax-container lighten-3 scrollspy">
     <div class="parallax"><img src="img/simple-codelines.svg"></div>
     <div class="container clients">
       <h3 class="center light black-text"> <b> <u> Our Client </u> </b></h3>

       <!-- 1 -->
       <div class="row">
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/gojek.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/tokopedia.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/traveloka.png">
         </div>
       </div>
       <!-- end 1 -->

       <!-- 2 -->
       <div class="row">
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/google.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/microsoft.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/ibm.png">
         </div>
       </div>
       <!-- end 2 -->

       <!-- 3 -->
       <div class="row">
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/cisco.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/oracle.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/apple.png">
         </div>
       </div>
       <!-- end 3 -->

       <!-- 4 -->
       <div class="row">
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/samsung.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/sony.png">
         </div>
         <div class="col m4 s12 center" style="padding: 5px;">
           <img src="img/clients/lenovo.png">
         </div>
       </div>
       <!-- end 4 -->

     </div>
   </div>
   <hr>

   <!-- contact us -->
   <section id="contact" class="contact lighten-3 scrollspy">
     <div class="container">
       <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
       <div class="row">
         <div class="col m5 s12">
           <div class="card-panel blue darken-2 center white-text">
             <i class="material-icons">email</i>
             <h5>Contact</h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
           </div>
           <ul class="collection with-header">
             <li class="collection-header">Our Office</li>
             <li class="collection-item">Gigih Ling Foundation</li>
             <li class="collection-item">Jl Boulevard Raya Blok G1 No. 16, Kota Wisata Cibubur</li>
             <li class="collection-item">West Java, Indonesia</li>
           </ul>
         </div>

         <div class="col m7 s12">
           <form>
             <div class="card-panel">
               <h5>Please fill out this form</h5>
               <div class="input-field">
                 <input type="text" name="name" id="name" required class="validate">
                 <label for="name">Name</label>
               </div>

               <div class="input-field">
                 <input type="email" name="email" id="email" class="validate">
                 <label for="email">Email</label>
               </div>

               <div class="input-field">
                 <input type="text" name="phone" id="phone">
                 <label for="phone">Phone Number</label>
               </div>

               <div class="input-field">
                 <textarea name="message" id="message" class="materialize-textarea"></textarea>
                 <label for="message">Message</label>
               </div>
               <button type="submit" class="btn blue darken-2">Send</button>
             </div>
           </form>
         </div>
       </div>
     </div>

   </section>


   <!-- footer -->
   <footer class="blue darken-2 white-text center">
     <p class="flow-text">Gigih Ling Foundation Ltd. Copyright 2020</p>
   </footer>



   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="js/materialize.min.js"></script>
   <script type="text/javascript">
     const sideNav = document.querySelectorAll('.sidenav');
     M.Sidenav.init(sideNav);

     const slider = document.querySelectorAll('.slider');
     M.Slider.init(slider, {
       indicators: true,
       height: 830,
       transition: 600,
       interval: 3000
     });


     const parallax = document.querySelectorAll('.parallax');
     M.Parallax.init(parallax);

     const materialbox = document.querySelectorAll('.materialboxed');
     M.Materialbox.init(materialbox);

     const scroll = document.querySelectorAll('.scrollspy');
     M.ScrollSpy.init(scroll, {
       scrollOffset: 50
     });
   </script>
 </body>

 </html>