<script>
  function toggleMenu() {
    var x = document.getElementById("topNav");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
    }
  }
</script>

<div class="navbar" id="topNav">
  <a href="index.php" <?= ($page =="home" ? "class='active'" : '') ?> >Shannon Birch</a>
  <a href="about.php" <?= ($page =="about" ? "class='active'" : '') ?>>About</a>
  <a href="projects.php" <?= ($page =="projects" ? "class='active'" : '')?> >Projects</a>
  <a href="resources/files/shannon-birch-resume.pdf" target="_blank">Resume</a>
  <a href="contact.php" <?= ($page =="contact" ? "class='active'" : '') ?> >Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
    <i class="fa fa-bars"></i>
  </a>
</div>
