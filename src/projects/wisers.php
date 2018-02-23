<?php include __DIR__ . '/../snippets/header.php' ?>

<div class="row">

  <section class="lightbox">
    <div class="lightbox-background"></div>
    <div class="lightbox-prev"><i class="fa fa-angle-left"></i></div>
    <div class="lightbox-next"><i class="fa fa-angle-right"></i></div>
    <div class="lightbox-content">
      <img src="" draggable="false">
    </div>
    <button class="lightbox-close"></button>
  </section>

  <section class="single-project">

    <div class="single-project-nav">
      <a href="/restaurant.php" class="project-back"><i class="fa fa-caret-left"></i>All <span>Restaurant</span></a>
      <ul>
        <li><a href="/projects/windsor-mold.php"><i class="fa fa-caret-left"></i>Previous Project</a></li>
        <li><span>Wisers</span> Windsor, Ontario</li>
        <li><a href="/projects/paramount.php">Next Project<i class="fa fa-caret-right"></i></a></li>
      </ul>
    </div>

    <div class="single-project-grid">
      <div class="single-project-image">
        <img src="../assets/img/projects/wisers/1.jpg" draggable="false" class="project-image">
      </div>
      <div class="single-project-image">
        <img src="../assets/img/projects/wisers/2.jpg" draggable="false" class="project-image">
      </div>
      <div class="single-project-image">
        <img src="../assets/img/projects/wisers/3.jpg" draggable="false" class="project-image">
      </div>
      <!-- End Row One -->
      <div class="single-project-image">
        <img src="../assets/img/projects/wisers/4.jpg" draggable="false" class="project-image">
      </div>
      <div class="single-project-image">
        <img src="../assets/img/projects/wisers/5.jpg" draggable="false" class="project-image">
      </div>
      <div class="single-project-image">
        <img src="../assets/img/projects/wisers/6.jpg" draggable="false" class="project-image">
      </div>
    </div>
  </section>
 
</div>

</div>

<?php include __DIR__ . '/../snippets/footer.php' ?>