<body id="Projects">
<?php include "INCLUDES/Navbar.php" ?>

<?php include "INCLUDES/Header.php" ?>

<section class="projects">
    <div class="projects-content">
        <h1>Have a glimpse a what I've accomplished</h1>
    </div>
    <div class="btn-box-projects">
        <ul>
            <li ><a href="http://127.0.0.1/EXTRA/">Dogzz</a> supreme</li>
            <li>At <a href="http://127.0.0.1/calc/calc.html">Caculator</a></li>
            <li>A <a href="http://127.0.0.1/ZEDPROJ/index%201.html">Library</a>(Bought by Writers Blog)</li>
        </ul>
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