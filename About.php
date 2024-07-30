<body id="about">
<?php include "INCLUDES/Navbar.php" ?>

<?php include "INCLUDES/Header.php" ?>

<section class="about">
    <div class="about-content">
                <h1 class="sub-title">Learn more about my brand and I.</h1>
                <h3>Web developing</h3>
                <p>Welcome to my portfolio, and learn more about<br> me. Start a journey of success by learning<br>thus investing</p>
    <div class="tab-titles">
        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
        <p class="tab-links" onclick="opentab('experience')">Experience</p>
        <p class="tab-links" onclick="opentab('education')">Education</p>
    </div>
    <div class="tab-contents active-tab" id="skills">
        <ul>
            <li><span>UI/UX</span><br>Developing Websites</li>
            <li><span>Graphics</span><br>Designing Websites</li>
            <li><span>Database</span><br>Data Harvesting</li>
        </ul>
    </div>
    <div class="tab-contents" id="experience">
        <ul>
            <li><span>2023-Current</span><br>Work-Studies at Starehe</li>
    </div>
    <div class="tab-contents" id="education">
        <ul>
            <li><span>2023-Current</span><br>Training at Starehe Training Institute</li>
            <li><span>2020-2023</span><br>Secondary Education</li>
            <li><span>2011-2019</span><br>Primary Education</li>
        </ul>
    </div>
            <div class="btn-box-about">
                <a href="#" onclick="alert('You will not regret it!')">Hire Me</a>
                <a href="Project.php">Glimpse</a>
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