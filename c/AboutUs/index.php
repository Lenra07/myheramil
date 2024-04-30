<?php
require '../../include/database.php';

$birthDate = explode("/", '01/01/1982');
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0],
                $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>
<link href="../../assets/css/apexcharts.css" rel="stylesheet">
<script type="text/javascript" src="../../assets/js/apextree.js"></script>
</head>

<body>
<?php
include '../Common/navbar.php';
?>
<main id="main">

  
<section id="about" style="padding-top: 0;">

  <!-- ======= History/About Us Section ======= -->
  <section class="about sections-bg">
    <div class="container " data-aos="fade-up">
      
      <div class="section-header">
        <h2>About Heramil Hospital</h2>
      </div>

      <div class="row gy-4">
        <div class="col-lg-6 d-flex align-items-center">
          <a href="../../assets/img/nowhospital.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/nowhospital.jpg" class="img-fluid rounded-4 img-thumbnail" alt=""></a>
        </div>
        <div class="col-lg-6 d-flex align-items-center">
          <div class="content ps-0 ps-lg-5">
            <p class="text-justify text-indent">
              <strong>HERAMIL HOSPITAL</strong> is a level-1 hospital with DOH accreditation of 50-bed capacity, located at Along Cannery Road, Citizen's Vill, Brgy. Poblacion, Polomolok, 9504, South Cotabato, standing strong and striving for <?= $age ?> years now, led by Dr. Wilma Heramil, as medical director, and Dr. Hilarion Heramil, as the hospital administrator.
            </p>

            <p class="text-justify text-indent">
              Currently, Heramil Hospital has the following services to aid citizens in Polomolok and near cities and municipalities in health care.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Emergency Care</li>
                  <li><i class="bi bi-check-circle-fill"></i> In-Patient Care</li>
                  <li><i class="bi bi-check-circle-fill"></i> Out-Patient Care</li>
                  <li><i class="bi bi-check-circle-fill"></i> Pharmacy</li>
                  <li><i class="bi bi-check-circle-fill"></i> Laboratory</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Radiology & Ultrasound</li>
                  <li><i class="bi bi-check-circle-fill"></i> Nursing Service</li>
                  <li><i class="bi bi-check-circle-fill"></i> Hemodialysis</li>
                  <li><i class="bi bi-check-circle-fill"></i> Physical Therapy & Rehabilitation</li>
                </ul>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ======= History Section ======= -->
  <section id="history" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Beginnings</h2>
      </div>

      <div class="row gy-4">
        <div class="col-lg-6">
          <p class="text-justify text-indent">Heramil's Maternity and Children's Clinic (HMCC) was established on January 1, 1982 to provide health care services in Polomolok, South Cotabato with an estimated population of about 60,000. The facility started as a primary bed hospital catering the community and nearby town. </p>
          <div class="position-relative mt-4 mb-4 text-center">
            <a href="../../assets/img/firsthospital.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/firsthospital.png" class="img-fluid rounded-4 img-thumbnail" alt=""></a>
            <i>Image of the first building of the hospital.</i>
          </div>
          
          
          <p class="text-justify text-indent">The Regional Health Director, Edilberto G. Fernando, MD, MPH of Department of Health Region XI – Davao City issued on March 8, 1982 the first license to Dr. Hildegarda V. Heramil as an owner and Medical Director to operate HMCC from the period of January 1, 1982 to December 31, 1982, an 8 bed capacity and classified as Primary – General. The HMCC building was originally located at Citizen’s Village, Poblacion, Polomolok, South Cotabato with a stall branch at Polomolok Public Market to cater the Out-patient.</p>

          <p class="text-justify text-indent">Over the years, facilities and services are upgraded to meet the growing and changing needs of the community. On January 1, 1985, the bed capacity of HMCC was increased from 8 to 25 beds. On the last half of 2002, a new building was constructed under the ownership of spouses Dr. Hilarion V. Heramil and Dr. Wilma T. Heramil. It could accommodate an admission of up to 50 beds. On May 1, 2003 Dr. Wilma T. Heramil was appointed as a new Medical Director of HMCC by Dr. Hildegarda Heramil due to her retirement.</p>

          <div class="position-relative mt-4 mb-4 text-center">
            <a href="../../assets/img/owners.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/owners.jpg" class="img-fluid rounded-4 img-thumbnail" alt=""></a>
            <i>Image of the hospital management, Dr. Wilma Heramil (left) and Dr. Hilarion Heramil (right).</i>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="content ps-0 ps-lg-5">
            <p class="text-justify text-indent">HMCC has operated for 30 years since January 1, 1982 until December 31, 2012. This institution maintains safety and evaluates the quality of the services provided. HMCC consistently follows standards established by accrediting in regulatory agencies such as Department of Health (DOH), Philippine Health Insurance Corporation (PHIC) and the local, Municipality of Polomolok. The DOH implementation of Administrative Order No. 2012-0012 entitled “Rules and Regulation Governing the New Classification of Hospitals and Other Health Facilities in the Philippines” was the reason that HMCC evolved. </p>

            <p class="text-justify text-indent">On January 1, 2013 the trade name of HMCC was changed to Heramil Hospital as advised by DOH Koronadal. On March 17, 2016, the bed capacity increased again from 25 to 50 beds with the new 2 storey building extension. Then on August 3, 2017 the OR/DR Complex, Blood Station and Dialysis Clinic (6 station) was granted a license to operate by DOH. Lastly, the Ambulance Service Provider (Type 1) has given a license to operate, issued on January 1, 2018. </p>

            <p class="text-justify text-indent">On March 16, 2018, Heramil Hospital is still a single proprietorship establishment with visiting consultant per department, Surgery (Urology), Pediatrics, Anesthesia, Obstetrics-Gynecology, Internal Medicine (Nephrology), Dental and Hemodialysis Unit with 85 regular employees. There were pharmacy staff, staff nurses and midwives who go on shifting (3 shift/24 hours). Offices are open from 8:00am in the morning and close at 5:00pm in the afternoon.</p>

            <div class="position-relative mt-4 mb-4 text-center">
              <a href="../../assets/img/newbuilding.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/newbuilding.jpg" class="img-fluid rounded-4 img-thumbnail" alt=""></a>
              <i>Image of the newly renovated Heramil Hospital.</i>
            </div>

            <p class="text-justify text-indent">The Heramil Hospital has presently 50 beds capacity and the status is Level 1. It will be retain as is, as long as the hospital is compliant of all the regulations set forth by the regulating agencies.</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End History Section -->

  <!-- ======= Mission Vision Section ======= -->
  <section id="missionvision" class="testimonials sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Mission & Vision Statement</h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item" style="height: 100%;">
                <div class="text-center">
                  <h2>Vision</h2>
                </div>
                <p class="text-justify" style="font-size: 3.9dvh;">
                  <i class="bi bi-quote quote-icon-left"></i>
                  To become a health care facility accessible to all segments of the community that provides quality and compassionate care.<i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="col-lg-6">
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item" style="height: 100%;">
                <div class="text-center">
                  <h2>Mission</h2>
                </div>
                <p class="text-justify" style="font-size: 4dvh;">
                  <i class="bi bi-quote quote-icon-left"></i>
                  To provide community - oriented health care, dedicated to delivery of prompt, affordable and excellent medical services.<i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
        </div>
      </div>   
    </div>
  </section><!-- End Mission Vision -->
  
  <!-- ======= Accreditations Section ======= -->
  <section id="accreditations" class="clients">
    <div class="container" data-aos="zoom-out">
      <div class="section-header mb-2">
        <h2>Accreditations & Partners</h2>
        <p>The following are the list of accreditations and partner companies of our hospital.</p>
      </div>
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="../../assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="../../assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <!-- <div class="swiper-slide"><img src="../../assets/img/clients/client-8.png" class="img-fluid" alt=""></div> -->
        </div>
      </div>

    </div>
  </section>

  <!-- ======= Our Workforce Section ======= -->
  <section id="workforce" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Workforce</h2>
      </div>
      <div id="svg-tree"></div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Our Doctors Section ======= -->
  <section id="doctors" class="portfolio ">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Doctors</h2>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-surgeons">Surgeon</li>
            <li data-filter=".filter-internist">Internist</li>
            <li data-filter=".filter-obgyne">Ob-Gyne</li>
            <li data-filter=".filter-pedia">Pediatrician</li>
            <li data-filter=".filter-anesthesia">Anesthesiologist</li>
            <li data-filter=".filter-others">Others</li>
          </ul><!-- End Portfolio Filters -->
        </div>

        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-surgeons">
            <div class="portfolio-wrap">
              <a href="../../assets/img/team/team-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/team/team-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-internist">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-obgyne">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-pedia">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-surgeons">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-internist">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-obgyne">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-pedia">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-surgeons">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-internist">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-obgyne">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-pedia">
            <div class="portfolio-wrap">
              <a href="../../assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="../../assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->
  
</section><!-- End Clients Section -->

</main><!-- End #main -->

<?php include '../Common/footer.html'; ?>
<script src="index.js"></script>
</body>

</html>