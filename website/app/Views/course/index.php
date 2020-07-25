<?= $this->extend('components/layout') ?>

<?= $this->section('content') ?>
<!-- Start Page Title Area -->
<div class="page-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h3>All Courses</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Courses Area -->
<section class="courses-area ptb-100">
    <div class="container">
        <div class="row">
          <?php foreach (range(1, 3) as $number): ?>
          <div class="col-lg-4 col-md-6">
              <div class="courses-item">
                  <div class="courses-img">
                      <img src="assets/img/course-two.jpg" alt="course">
                  </div>
                  
                  <div class="courses-content">
                      <h3><a href="#">Learning Analytics Course</a></h3>
                      <ul>
                          <li><i class="icofont-star"></i></li>
                          <li><i class="icofont-star"></i></li>
                          <li><i class="icofont-star"></i></li>
                          <li><i class="icofont-star"></i></li>
                          <li><i class="icofont-star"></i></li>
                          <li><span>(15 reviews)</span></li>
                      </ul>
                      
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing.</p>
                  </div>
                  
                  <div class="courses-content-bottom">
                      <h4 class="price">$120</h4>
                      <h4><a href="/course/test" class="btn btn-primary">Read More</a></h4>
                  </div>
              </div>
          </div>
          <?php endforeach ?>

        </div>
    </div>
</section>
<!-- End Courses Area -->
<?= $this->endSection() ?>