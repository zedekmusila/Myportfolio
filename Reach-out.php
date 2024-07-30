<body id="reach">
<?php include "INCLUDES/Navbar.php" ?>
<?php include "INCLUDES/Header.php" ?>
<section class="reach">
    <div class="reach-content">
   <h1>By all means reach-out</h1>
   <h4>Contact</h4>
        <div class="btn-box-reach">
            <h5>Call-Us</h5>
            <p>+254713332671</p>
        </div>
        <div class="btn-box-reach">
            <h5>E-mail</h5>
            <p><E-mail>zedekage797@gmail.com</E-mail></p>
        </div>
        <div class="btn-box-reach">
            <h5>Offices</h5>
            <p>Technotopia: Lavington,Nairobi </p>
        </div>

    </div>
</section>

<?php INCLUDE "INCLUDES/Footer.php" ?>

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

</body>