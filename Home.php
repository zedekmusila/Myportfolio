<body id="home">
<?php include "INCLUDES/Navbar.php" ?>
<?php include "INCLUDES/Header.php" ?>
<section class="home">
    <div class="home-content">
        <h1>Hi, I am Zedek Musila</h1>
        <h3>Frontend Developer</h3>
        <p>Welcome to my portfolio! <br> I am passionate about crafting seamless digital experiences through innovative web development. <br> With a keen eye for design and a knack for coding, <br> I specialize in creating responsive and user-friendly websites that not only engage visitors but also elevate brands. <br> Whether you're looking to enhance your online presence, optimize functionality, or embark on a new digital journey, <br> I am here to transform your vision into reality. <br> Explore my portfolio and discover how together, we can make your web presence shine.</p>
        <div class="btn-box">
            <a href="#" onclick="alert('You will not regret it!')">Hire Me</a>
            <a href="Reach-out.php" onclick="alert('Thank you!')">Let's Talk</a>
        </div>
     
    </div>
    
</section>

<div class="bg">
<h1 id="date-time" class="centered">11:13am</h1>
 <div class="fg"></div> 
        <script>
    setInterval(setTime,1000);
    setTime()
    function setTime() {
        var dt = new Date()
        time = dt.toLocaleTimeString([], { hour:'2-digit',minute:'2-digit',second:'2-digit'});
        document.getElementById('date-time').innerHTML =time;
    
    }
</script>
 </div> 


<?php INCLUDE "INCLUDES/Footer.php" ?>



</body>