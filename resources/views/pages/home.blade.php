@extends('layouts.default')

@section('content')

<head>
    <meta charset="UTF-8">
    <title> My Personal Laravel Web Page</title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="home">Personal Page.</a></div>
      <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#lecture">Lecture</a></li>
          <li><a href="#laravel">Laravel</a></li>
          <li><a href="#years">6 YEARS</a></li>
          <li><a href="#contact">Contact</a></li>
          <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
      </ul>
      <div class="media-icons">
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/accounts/login/?"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

<!-- Home Section Start -->
 <section class="home" id="home">
   <div class="home-content">
     <div class="text">
       <div class="text-one">Hello,</div>
       <div class="text-two">I'm Tricia C. Reynoso</div>
       <div class="text-three">Student</div>
       <div class="text-four">From Pamantasan ng Lungsod ng Pasig, Manila, Philippines</div>
     </div>
     <div class="button">
       <button>Hire Me</button>
     </div>
   </div>
 </section>

<!-- About Section Start -->
<section class="about" id="about">
  <div class="content">
    <div class="title"><span>About the Author</span></div>
  <div class="about-details">
    <div class="left">
    </div>
    <div class="right">
      <div class="topic">Tricia C. Reynoso</div>
      <p>“Tell something about yourself?” It could be one of the toughest questions when asked impulsively. However, people who like sharing their achievements and personal life with others may find it another opportunity to reveal their unique traits. But with me, the case is quite the opposite. Talking about myself has never been my thing. Yet, I would still try to describe myself in the best way I can. I would like to start with my background and then move to how I am as a student and then how I am inside and how the world sees me. </p>

        <p>First thing is, I am Tricia C. Reynoso, 21 years old. I live at #37 Salandanan St Pinagbuhatan Pasig City and I am currently studying at Pamantasan ng Lungsod ng pasig taking Bachelor of Science in Computer Science. One thing about me that is important to know though is that at first I come of as a very shy individualistic but once I get to know people and are comfortable with my environment I am great. It is hard for me to make friends but once I make them, it’s great and I am all different. I’m trying to control my thoughts more, and not let it get to me so much. I want to be a more confident, successful person. As a person, I believe life is an art, and I am the artist of my life. I try to keep it full of colors and as cheerful as possible no matter what life throws at me. I am an enthusiast and a person full of curiosity. Curious to know what life is all about and what it holds in the future. Good or bad, This is me, trying to contemplate the world as it is, revealing its true colors. I believe life is a gift, and it should be treated like one, with love, care, and respect.  </p>
      <div class="button">
        <button>Download CV</button>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- Lecture Section Start -->
<!-- Section Tag and Other Div will same where we need to put same CSS -->
<section class="lecture" id="lecture">
 <div class="content">
   <div class="title"><span>CS 202 Lecture</span></div>
   <div class="lecture-details">
     <div class="text">
       <div class="topic"><h1 style="text-align: center;">LOAD BALANCING</h1></div>
       <h2>HISTORY OF LOAD BALANCING</h2><br>
   <p>◘ Load balancing got its start in the 1990s as hardware appliances distributing traffic across a network. </p>
    <p>◘ Organizations wanted to improve accessibility of applications running on servers. </p>
    <p>◘ Eventually, load balancing took on more responsibilities with the advent of Application Delivery Controllers (ADCs). </p>
    <p>◘ They provide security along with seamless access to applications at peak times.</p>
    <p>◘ ADCs fall into three categories: hardware appliances, virtual appliances (essentially the software extracted from legacy hardware) and software-native load balancers. </p>
    <p>◘ As computing moves to the cloud, software ADCs perform similar tasks to hardware. They also come with added functionality and flexibility. </p>
    <p>◘ They let an organization quickly and securely scale up its application services based on demand in the cloud. Modern ADCs allow organizations to consolidate network-based services. </p>
    <p>◘ Those services include SSL/TLS offload, caching, compression, intrusion detection and web application firewalls. This creates even shorter delivery times and greater scalability.</p>
<br>
    <h1>BENEFITS OF LOAD BALANCING</h1>
        <br>
           <p>◘ Load balancing can do more than just act as a network traffic cop. Software load balancers provide benefits like predictive analytics that determine traffic bottlenecks before they happen. As a result, the software load balancer gives an organization actionable insights. These are key to automation and can help drive business decisions.
 </p>
    <p>◘ In the seven-layer Open System Interconnection (OSI) model, 
<p>► network firewalls are at levels one to three (L1-Physical Wiring, L2-Data Link and L3-Network). 
<p>► Meanwhile, load balancing happens between layers four to seven (L4-Transport, L5-Session, L6-Presentation and L7-Application). 
<p>► L4 — directs traffic based on data from network and transport layer protocols, such as IP address and TCP port.
<p>► L7 — adds content switching to load balancing. This allows routing decisions based on attributes like HTTP header, uniform resource identifier, SSL session ID and HTML form data.
<p>► GSLB — Global Server Load Balancing extends L4 and L7 capabilities to servers in different geographic locations.
 </p>
    <p>◘ More enterprises are seeking to deploy cloud-native applications in data centers and public clouds. This is leading to significant changes in the capability of load balancers. In turn, this creates both challenges and opportunities for infrastructure and operations leaders.
 </p> <br>

     <h1>LOAD BALANCER FUNCTIONS</h1>
        <br>
              <p>◘ Distributes client requests or network load efficiently across multiple servers.</p>
    <p>◘ Ensures high availability and reliability by sending requests only to servers that are online.</p>
    <p>◘ Provides the flexibility to add or subtract servers as demand dictates.</p>
     </div>
  
</section>

<!-- Laravel Section Start -->
 <section class="laravel" id="laravel">
   <div class="content">
     <div class="title"><span>LARAVEL</span></div>
     <h1 style="text-align:center; font-size: 30px;"> TAYLOR OTWELL</h1>
     <h2 style="text-align:center; font-size: 20;"> creator</h2>
<br>
     <p style="text-align: center;">Taylor Otwell created Laravel as an attempt to provide a more advanced alternative to the CodeIgniter framework, which did not provide certain features such as built-in support for user authentication and authorization. Laravel's first beta release was made available on June 9, 2011, followed by the Laravel 1 release later in the same month. Laravel 1 included built-in support for authentication, localisation, models, views, sessions, routing and other mechanisms, but lacked support for controllers that prevented it from being a true MVC framework</p>
          <br>
     <div class="boxes">
       <div class="box">
         <div class="icon">
           <i class="fas fa-desktop"></i>
       </div>
       <div class="topic"></div>
       <p>Circa 2000, most PHP codes was procedural and could be found in the form of "scripts" that would have a tangled mess of spaghetti code.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-paint-brush"></i>
       </div>
       <div class="topic"></div>
       <p>Even the simplest pages had no separation of concerns, and thus it was fairly easy for an application to quickly grow into a maintenance nightmare. The world needed something better...</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-chart-line"></i>
       </div>
       <div class="topic"></div>
       <p> Enter PHP version 5 and a variety of PHP frameworks attempting to bring some much-needed resolution and better solutions to various web application concerns.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fab fa-android"></i>
       </div>
       <div class="topic"></div>
       <p>Laravel was created by Taylor Otwell. Since its initial release in June 2011 (version 1), it has steadily grown more and more popular in the PHP-framework sector of the web development industry. </p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-camera-retro"></i>
       </div>
       <div class="topic"></div>
       <p>A lot of this popularity can be attributed to the many developer-first-minded features that it comes with stock.</p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-tablet-alt"></i>
       </div>
       <div class="topic"></div>
       <p>In 2015, it became the most starred PHP framework on GitHub and rose to the go-to framework for people all over the world.</p>
     </div>
   </div>
   </div>
 </section>

<!-- 6 Years section Start -->
<section class="years" id="years">
  <div class="content">
    <div class="title"><span>6 Years From Now</span></div>
    <div class="text"> <br>
      <div class="topic">6 Years from now, what will I be?</div>
      <p>Well I’m really excited about this opening. In the next 6 years, I would focus more on improving my skills since I wanted to see myself in a good position. I see myself as a respected person. Then I develop my knowledge. I will be a better person than now. I believe that my hard work allows me to a leading position and to become the best that I can I may not be in a position applied on my course but still I'll pursue everything to have a better life, After college I'm planning to take an civil service examination and work on our goverment or maybe pursuing working on a call center industry since I already have a 3 year experience and other companies already offer me being a Team Leader. I want to devote the next few years learning new skills taking up challenging work and putting my hardwork to see myself advancing to the next level. After that, I enjoy travelling with my love ones around the world and providing their needs and wants at the same time since I'm the elder one. Family is the most important thing and my number one priority.</p>
      </div>
    </div>
  </div>
</section>

  <!-- Contact Me section Start -->
<section class="contact" id="contact">
  <div class="content">
    <div class="title"><span>Contact Me</span></div>
    <div class="text">
      <div class="topic">Have Any Project?</div>
      <p style="font-style: italic;">“Any fool can write code that a computer can understand. Good programmers write code that humans can understand.” – Martin Fowler</p> <br>
      <h2>EMAIL</h2>
            <p>reynoso_tricia@plpasig.edu.ph</p>
      <h2>Contact Number</h2>
            <p>09566585699</p>
      <div class="button">
        <button>Let's Chat</button>
      </div>
    </div>
  </div>
</section>

<!-- Footer Section Start -->
<footer>
  <div class="text">
    <span>Created By <a href="#">Tricia Reynoso</a> | &#169; 202 All Rights Reserved</span>
  </div>
</footer>

  <script src="script.js"></script>

</body>
<style class="stylesheet">
  
  /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  scroll-behavior: smooth;
}

/* Custom Scroll Bar CSS */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: black;
}
::-webkit-scrollbar-thumb {
    background: #F358D9;
    border-radius: 12px;
    transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
    background: #F358D9;
}
/* navbar styling */
nav{
  position: fixed;
  width: 100%;
  padding: 20px 0;
  z-index: 998;
  transition: all 0.3s ease;
  font-family: 'Ubuntu', sans-serif;
}
nav.sticky{
  background: #F358D9;
  padding: 13px 0;
}
nav .navbar{
  width: 90%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: auto;
}
nav .navbar .logo a{
  font-weight: 500;
  font-size: 35px;
  color: #F358D9;
}
nav.sticky .navbar .logo a{
  color: #fff;
}
nav .navbar .menu{
  display: flex;
  position: relative;
}
nav .navbar .menu li{
  list-style: none;
  margin: 0 8px;
}
.navbar .menu a{
  font-size: 18px;
  font-weight: 500;
  color: black;
  padding: 6px 0;
  transition: all 0.4s ease;
}
.navbar .menu a:hover{
  color: #F358D9;
}
nav.sticky .menu a{
  color: #FFF;
}
nav.sticky .menu a:hover{
  color: #0E2431;
}
.navbar .media-icons a{
  color: #F358D9;
  font-size: 25px;
  margin: 0 10px;
}
nav.sticky .media-icons a{
  color: #FFF;
}

/* Side Navigation Menu Button CSS */
nav .menu-btn,
.navbar .menu .cancel-btn{
  position: absolute;
  color: #fff;
  right: 30px;
  top: 20px;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: none;
}
nav .menu-btn{
  color: #F358D9;
}
nav.sticky .menu-btn{
  color: #FFF;
}
.navbar .menu .menu-btn{
  color: #fff;
}

/* home section styling */
.home{
  height: 100vh;
  width: 100%;
  background: url("images/background.png") no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  font-family: 'Ubuntu', sans-serif;
}
.home .home-content{
  width: 90%;
  height: 100%;
  margin: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.home .text-one{
  font-size: 25px;
  color: #0E2431;
}
.home .text-two{
  color: #F358D9;
  font-size: 75px;
  font-weight: 600;
  margin-left: -3px;
}
.home .text-three{
  font-size: 40px;
  margin: 5px 0;
  color: #0E2431;
}
.home .text-four{
  font-size: 23px;
  margin: 5px 0;
  color: #0E2431;
}
.home .button{
  margin: 14px 0;
}
.home .button button{
  outline: none;
  padding: 8px 16px;
  border-radius: 6px;
  font-size: 25px;
  font-weight: 400;
  background: #F358D9;
  color: #fff;
  cursor: pointer;
  border: 2px solid transparent;
  transition: all 0.4s ease;
}
.home .button button:hover{
  border-color: #F358D9;
  background-color: #fff;
  color: #F358D9;
}

/* About Section Styling */
/* Those Elements Where We Have Apply Same CSS,
 I'm Selecting Directly 'Section Tag' and 'Class'  */
section{
  padding-top: 40px;
}
section .content{
  width: 80%;
  margin: 40px auto;
  font-family: 'Poppins', sans-serif;
}
.about .about-details{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
section .title{
  display: flex;
  justify-content: center;
  margin-bottom: 40px;
}
section .title span{
  color: #0E2431;
  font-size: 50px;
  font-weight: 600;
  position: relative;
  padding-bottom: 8px;
}
section .title span::before,
section .title span::after{
  content: '';
  position: absolute;
  height: 3px;
  width: 100%;
  background: #F358D9;
  left: 0;
  bottom: 0;
}
section .title span::after{
  bottom: -7px;
  width: 70%;
  left: 50%;
  transform: translateX(-50%);

}
.about-details .right{
  width: 100%;
}
section  .topic{
  color: #0E2431;
  font-size: 25px;
  font-weight: 500;
  margin-bottom: 10px;
}
.about-details .right p{
  text-align: justify;
  color: #0E2431;
}
section .button{
  margin: 16px 0;
}
section .button button{
  outline: none;
  padding: 8px 16px;
  border-radius: 4px;
  font-size: 25px;
  font-weight: 400;
  background: #F358D9;
  color: #fff;
  border: 2px solid transparent;
  cursor: pointer;
  transition: all 0.4s ease;
}
section .button button:hover{
  border-color: #F358D9;
  background-color: #fff;
  color: #F358D9;
}

 /* Lecture CSS */
 .lecture{
   background: #F0F8FF;
 }
 .lecture img {
  width: 600px;
  height: 400px;
  float: right;
  margin-left: 3%;
 }

 .lecture .content{
   padding: 40px 0;
 }
 .lecture .lecture-details{
   display: flex;
   justify-content: space-between;
   align-items: center;
 }
 .lecture-details .text{
   width: 100%;
 }
 .lecture-details p{
   color: #0E2431;
   text-align: justify;
 }

/* Laravel CSS */
.laravel .boxes{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.laravel .boxes .box{
  margin: 20px 0;
  width: calc(100% / 3 - 20px);
  text-align: center;
  border-radius: 12px;
  padding: 30px 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.12);
  cursor: default;
  transition: all 0.4s ease;
}
.laravel .boxes .box:hover{
  background: #F358D9;
  color: #fff;
}
.laravel .boxes .box .icon{
  height: 50px;
  width: 50px;
  background: #F358D9;
  border-radius: 50%;
  text-align: center;
  line-height: 50px;
  font-size: 18px;
  color: #fff;
  margin: 0 auto 10px auto;
  transition: all 0.4s ease;
}
.boxes .box:hover .icon{
  background-color: #fff;
  color: #F358D9;
}
.laravel .boxes .box:hover .topic,
.laravel .boxes .box:hover p{
  color: #0E2431;
  transition: all 0.4s ease;
}
.laravel .boxes .box:hover .topic,
.laravel .boxes .box:hover p{
  color: #fff;
}
.laravel img{
  width: 150px;
  height: 150px;
  float: right;
  border-radius: 12px;
}

/* 6 Years CSS */
.years{
  background: #F0F8FF;
}
.years .content{
  margin: 0 auto;
  padding: 30px 0;
}
.years .text{
  width: 80%;
  text-align: center;
  margin: auto;
}

/* Contact Me CSS */
.contact{
  background: #F0F8FF;
}
.contact .content{
  margin: 0 auto;
  padding: 30px 0;
}
.contact .text{
  width: 80%;
  text-align: center;
  margin: auto;
}


/* Footer CSS */
footer{
  background: #F358D9;
  padding: 15px 0;
  text-align: center;
  font-family: 'Poppins', sans-serif;
}
footer .text span{
  font-size: 17px;
  font-weight: 400;
  color: #fff;
}
footer .text span a{
  font-weight: 500;
  color: #FFF;
}
footer .text span a:hover{
  text-decoration: underline;
}
/* Scroll TO Top Button CSS */
.scroll-button a{
  position: fixed;
  bottom: 20px;
  right: 20px;
  color: #F358D9;
  background: black;
  padding: 7px 12px;;
  font-size: 18px;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.15);
  display: none;
}

/* Responsive Media Query */
@media (max-width: 1190px) {
  section .content{
    width: 85%;
  }
}
@media (max-width: 1000px) {
  .about .about-details{
    justify-content: center;
    flex-direction: column;
  }
  .about .about-details .left{
    display: flex;
    justify-content: center;
    width: 100%;
  }
  .about-details .right{
    width: 90%;
    margin: 40px 0;
  }
  .services .boxes .box{
    margin: 20px 0;
    width: calc(100% / 2 - 20px);
  }
}
@media (max-width: 900px) {
  .about .left img{
    height: 350px;
    width: 350px;
  }
}

@media (max-width: 750px) {
  nav .navbar{
    width: 90%;
  }
  nav .navbar .menu{
    position: fixed;
    left: -100%;
    top: 0;
    background: #0E2431;
    height: 100vh;
    max-width: 400px;
    width: 100%;
    padding-top: 60px;
    flex-direction: column;
    align-items: center;
    transition: all 0.5s ease;
  }
  .navbar.active .menu{
    left: 0;
  }
  nav .navbar .menu a{
    font-size: 23px;
    display: block;
    color: #fff;
    margin: 10px 0;
  }
  nav.sticky .menu a:hover{
    color: #4070f4;
  }
  nav .navbar .media-icons{
    display: none;
  }
  nav .menu-btn,
  .navbar .menu .cancel-btn{
    display: block;
  }
  .home .text-two{
    font-size: 65px;
  }
  .home .text-three{
    font-size: 35px;
  }
  .skills .skills-details{
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  .skills-details .text{
    width: 100%;
    margin-bottom: 50px;
  }
  .skills-details .boxes{
    justify-content: center;
    align-items: center;
    width: 100%;
  }
  .services .boxes .box{
    margin: 20px 0;
    width: 100%;
  }
  .contact .text{
    width: 100%;
}
}

@media (max-width: 500px){
  .home .text-two{
    font-size: 55px;
  }
  .home .text-three{
    font-size: 33px;
  }
  .skills-details .boxes .per{
    font-size: 50px;
    color: #4070f4;
  }
}

</style>

<script> 

// Sticky Navigation Menu JS Code
let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-button a");
console.log(scrollBtn);
let val;
window.onscroll = function() {
  if(document.documentElement.scrollTop > 20){
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
  }else{
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
  }

}

// Side NavIgation Menu JS Code
let body = document.querySelector("body");
let navBar = document.querySelector(".navbar");
let menuBtn = document.querySelector(".menu-btn");
let cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = function(){
  navBar.classList.add("active");
  menuBtn.style.opacity = "0";
  menuBtn.style.pointerEvents = "none";
  body.style.overflow = "hidden";
  scrollBtn.style.pointerEvents = "none";
}
cancelBtn.onclick = function(){
  navBar.classList.remove("active");
  menuBtn.style.opacity = "1";
  menuBtn.style.pointerEvents = "auto";
  body.style.overflow = "auto";
  scrollBtn.style.pointerEvents = "auto";
}

// Side Navigation Bar Close While We Click On Navigation Links
let navLinks = document.querySelectorAll(".menu li a");
for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click" , function() {
    navBar.classList.remove("active");
    menuBtn.style.opacity = "1";
    menuBtn.style.pointerEvents = "auto";
  });
}

</script>
</html>

@stop
