
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="html, personal, personal portfolio, dark, minimal, html template, site template, designer, developer, youtuber, vloger, bloger, bootstrap, dark theme, personal dark theme, personal dark template"
    />
    <meta name="description" content="Isti personal portfolio HTML Template." />
    <meta name="author" content="codeefly" />
    <title>Isti - Creative Portfolio HTML Template</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/css/fontawesomepro.css" />
    <link rel="stylesheet" href="assets/css/plugin.css" />
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <link rel="stylesheet" href="assets/css/scroll_top.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/isti-icon/style.css" />
  </head>

  <body>
    <!--================================
        PRELOADER START
    =================================-->
    <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>
      <h5 class="preloader-text">Isti</h5>
    </div>
    <!--================================
        PRELOADER END
    =================================-->
    <!--============================
        MAIN MANU START
    ==============================-->
    <nav class="navbar navbar-expand-lg tf__main_menu pl_50 pr_60">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html"
          ><img src="assets/images/logo_1.png" alt="logo" class="img-fluid w-100"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="far fa-stream menu_icon_bar"></i>
          <i class="far fa-times close_icon_close"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active text_hover_animaiton" href="#"
                >Home <i class="far fa-angle-down"></i
              ></a>
              <ul class="tf__dropdown">
                <li><a href="/index.html">Multipage</a></li>
                <li><a href="/index-2.html">Onepage</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="#about"
                >About Us</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="#service"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="#projects"
                >Projects</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="#"
                >Blog <i class="far fa-angle-down"></i
              ></a>
              <ul class="tf__dropdown">
                <li><a href="/blog.html">blog</a></li>
                <li><a href="/blog-details.html">blog details</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text_hover_animaiton" href="/contact.html"
                >Contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--============================
        MAIN MANU END
    ==============================-->

    <!--============================
        BANNER START
    ==============================-->
    <section
      class="tf__banner pt_100 pl_60 pr_60 bg-fixed"
      style="background: url(assets/images/banner_bg.jpg)"
    >
      <div class="container-fluid h-100">
        <div class="row align-items-center h-100">
          <div class="col-xxl-6 col-xl-6">
            <div class="tf__banner_img">
              <img
                src="assets/images/banner_img.png"
                alt="portfolio img"
                class="img-fluid w-100"
              />
            </div>
          </div>
          <div class="col-xxl-5 col-xl-6 ms-auto">
            <div class="tf__banner_text">
              <h3 data-text-animation="rotate-in">Hello I'm Mezbah</h3>
              <h1 data-text-animation="rotate-in">
                CREATIVE DESIGNER BASED IN USA
              </h1>
              <p>
                As a passionate UI/UX Designer, I thrive on creating beautiful
                and intuitive digital experiences that delight users.
              </p>

              <ul class="d-flex flex-wrap">
                <li>
                  <a
                    href="#"
                    class="tf__common_btn d-flex align-items-center download_btn"
                    >Download Cv <i class="isti-download"></i
                  ></a>
                </li>
                <li>
                  <a
                    class="tf__common_btn tf___video_btn venobox"
                    data-autoplay="true"
                    data-vbtype="video"
                    href="https://youtu.be/668nUCeBHyY?si=sHtcsCQRzAET5GOt"
                  >
                    <i class="fa-sharp fa-solid fa-circle-play"></i>Watch The
                    Video</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        BANNER END
    ==============================-->

    <!--============================
        ABOUT START
    ==============================-->
    <section class="tf__about pt_150" id="about">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4">
            <div class="tf__common_heading tf__about_text">
              <h5>About Me</h5>
              <h2 data-text-animation="rotate-in" data-split="word">
                Visual Journey through my Portfolio
              </h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                quae ab illonge inventore veritatis et quasi architecto beatae
                vitae dicta sunt explicabo. Nemo enim ipsam
              </p>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8">
            <div class="tf__about_img">
              <img
                src="assets/images/about_img.jpg"
                alt="about img"
                class="img-fluid w-100 parallax-image"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        ABOUT END
    ==============================-->

    <!--============================
        SERVICE START
    ==============================-->
    <section class="tf__service pt_145" id="service">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9">
            <div class="tf__common_heading tf__common_heading2">
              <h5>My service</h5>
              <h2 data-text-animation="rotate-in" data-split="word">
                Pushing Boundaries: My Portfolio of Limitless Ideas
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="tf__single_service" data-animation="fade-left">
              <div class="tf__single_service_img">
                <div data-animation="img-blur">
                  <img
                    src="assets/images/service_1.jpg"
                    alt="service"
                    class="img-fluid w-100"
                  />
                </div>
                <span><i class="isti-copy1"></i></span>
              </div>
              <div class="tf__single_service_text">
                <a href="#">Website Design</a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore incididunt ut
                  labore et dolore
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div
              class="tf__single_service"
              data-animation="fade-left"
              data-delay=".25"
            >
              <div class="tf__single_service_img">
                <div data-animation="img-blur">
                  <img
                    src="assets/images/service_2.jpg"
                    alt="service"
                    class="img-fluid w-100"
                  />
                </div>
                <span><i class="isti-settings"></i></span>
              </div>
              <div class="tf__single_service_text">
                <a href="#">Logo Design</a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore incididunt ut
                  labore et dolore
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div
              class="tf__single_service"
              data-animation="fade-left"
              data-delay=".5"
            >
              <div class="tf__single_service_img">
                <div data-animation="img-blur">
                  <img
                    src="assets/images/service_3.jpg"
                    alt="service"
                    class="img-fluid w-100"
                  />
                </div>
                <span><i class="isti-fullscreen"></i></span>
              </div>
              <div class="tf__single_service_text">
                <a href="#">Apps Development</a>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore incididunt ut
                  labore et dolore
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        SERVICE END
    ==============================-->

    <!--============================
        SKILL START
    ==============================-->
    <section class="tf__skill pt_140">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9">
            <div
              class="tf__common_heading tf__common_heading2 tf__skiil_heading"
            >
              <h5>MY Skills</h5>
              <h2 data-text-animation="rotate-in" data-split="word">
                Crafting Ideas Building Dreams My Creative Portfolio
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="tf__single_skill" data-animation="fade-bottom">
              <div class="row">
                <div class="col-xl-3 col-lg-3">
                  <div class="tf__single_skill_left">
                    <h6>2019 - Present</h6>
                    <span>Creative Agency</span>
                    <p>Framer Designer & Developer</p>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                  <div class="tf__single_skill_middle">
                    <p>
                      Nemo enim ipsam voluptatem designr quia voluptas sit
                      aspernatur aut odit aut fugit sed thisnquia consequuntur
                      magni dolores eos qUI Designe ratione
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                  <div class="tf__team_skills_bar_single">
                    <p>Performence</p>
                    <div id="bar1" class="barfiller">
                      <div class="tipWrap">
                        <span class="tip"> 70% </span>
                      </div>
                      <span class="fill" data-percentage="70"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div
              class="tf__single_skill"
              data-animation="fade-bottom"
              data-delay=".25"
            >
              <div class="row">
                <div class="col-xl-3 col-lg-3">
                  <div class="tf__single_skill_left">
                    <h6>2014 - 2018</h6>
                    <span>Samsung tech</span>
                    <p>Web Application Manager</p>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                  <div class="tf__single_skill_middle">
                    <p>
                      Nemo enim ipsam voluptatem designr quia voluptas sit
                      aspernatur aut odit aut fugit sed thisnquia consequuntur
                      magni dolores eos qUI Designe ratione
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                  <div class="tf__team_skills_bar_single">
                    <p>Performence</p>
                    <div id="bar2" class="barfiller">
                      <div class="tipWrap">
                        <span class="tip"></span>
                      </div>
                      <span class="fill" data-percentage="80"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12">
            <div
              class="tf__single_skill"
              data-animation="fade-bottom"
              data-delay=".75"
            >
              <div class="row">
                <div class="col-xl-3 col-lg-3">
                  <div class="tf__single_skill_left">
                    <h6>2008-2013</h6>
                    <span>METAVERSE </span>
                    <p>Framer Designer & Developer</p>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                  <div class="tf__single_skill_middle">
                    <p>
                      Nemo enim ipsam voluptatem designr quia voluptas sit
                      aspernatur aut odit aut fugit sed thisnquia consequuntur
                      magni dolores eos qUI Designe ratione
                    </p>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                  <div class="tf__team_skills_bar_single">
                    <p>Performence</p>
                    <div id="bar3" class="barfiller">
                      <div class="tipWrap">
                        <span class="tip"></span>
                      </div>
                      <span class="fill" data-percentage="90"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        SKILL END
    ==============================-->

    <!--============================
        PORTFOLIO START
    ==============================-->
    <section class="tf__portfolio pt_150" id="projects">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 order-xl-1 order-2">
            <div class="row portfolio_slider">
              <div class="col-xl-6">
                <div class="tf__portfolio_img">
                  <img
                    src="assets/images/portfolio_1.jpg"
                    alt="portfolio img"
                    class="img-fluid w-100"
                  />
                </div>
              </div>
              <div class="col-xl-6">
                <div class="tf__portfolio_img">
                  <img
                    src="assets/images/portfolio_2.jpg"
                    alt="portfolio img"
                    class="img-fluid w-100"
                  />
                </div>
              </div>
              <div class="col-xl-6">
                <div class="tf__portfolio_img">
                  <img
                    src="assets/images/portfolio_1.jpg"
                    alt="portfolio img"
                    class="img-fluid w-100"
                  />
                </div>
              </div>
              <div class="col-xl-6">
                <div class="tf__portfolio_img">
                  <img
                    src="assets/images/portfolio_2.jpg"
                    alt="portfolio img"
                    class="img-fluid w-100"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 my-auto order-xl-2 order-1">
            <div class="tf__common_heading tf__portfolio_heading">
              <h5>gallery</h5>
              <h2 data-text-animation="rotate-in">Latests Portfolio</h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                design accusantium doloremque laudantium Sed ut perspiciatis
                unde omnis iste natus error sit voluptatem design accusantium
                doloremque laudantium
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        PORTFOLIO END
    ==============================-->

    <!--============================
        TESTIMONIAL START
    ==============================-->
    <section class="tf__testimonial pt_145">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="tf__common_heading tf__testimonial_heading">
              <h5>Testomonial</h5>
              <h2 data-text-animation="rotate-in">What our clients say?</h2>
            </div>
          </div>
        </div>
        <div class="tf__testimonial_slider">
          <div class="row testimonial_slider">
            <div class="col-xl-6">
              <div class="tf__single_testimonial">
                <div class="tf__single_testimonial_img">
                  <img
                    src="assets/images/testimonial_1.jpg"
                    alt="testimonial"
                    class="img-fluid w-100"
                  />
                </div>
                <h4>Eleanor Pena</h4>
                <span>Marketing Coordinator</span>
                <p>
                  Financial planners help people to knowledge in about how to
                  invest and in save their moneye the most efficient way eve
                  plan ners help people tioniio know ledige in about how.
                </p>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="tf__single_testimonial">
                <div class="tf__single_testimonial_img">
                  <img
                    src="assets/images/testimonial_2.jpg"
                    alt="testimonial"
                    class="img-fluid w-100"
                  />
                </div>
                <h4>Eleanor Pena</h4>
                <span>Marketing Coordinator</span>
                <p>
                  Financial planners help people to knowledge in about how to
                  invest and in save their moneye the most efficient way eve
                  plan ners help people tioniio know ledige in about how.
                </p>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="tf__single_testimonial">
                <div class="tf__single_testimonial_img">
                  <img
                    src="assets/images/testimonial_1.jpg"
                    alt="testimonial"
                    class="img-fluid w-100"
                  />
                </div>
                <h4>Eleanor Pena</h4>
                <span>Marketing Coordinator</span>
                <p>
                  Financial planners help people to knowledge in about how to
                  invest and in save their moneye the most efficient way eve
                  plan ners help people tioniio know ledige in about how.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        TESTIMONIAL END
    ==============================-->

    <!--============================
        EXPERIANCE START
    ==============================-->
    <section class="tf__experiance pt_100 pb_80">
      <div class="container-fluid">
        <div class="tf__brand pl_90 pr_100">
          <div class="row justify-content-xl-between justify-content-center">
            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-4 col-6">
              <div
                class="tf__brand_img"
                data-animation="fade-left"
                data-offset="100"
              >
                <img
                  src="assets/images/brand_1.png"
                  alt="company logo"
                  class="img-fluid w-100"
                />
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-4 col-6">
              <div
                class="tf__brand_img"
                data-animation="fade-left"
                data-offset="100"
                data-delay=".25"
              >
                <img
                  src="assets/images/brand_2.png"
                  alt="company logo"
                  class="img-fluid w-100"
                />
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-4 col-6">
              <div
                class="tf__brand_img"
                data-animation="fade-left"
                data-offset="100"
                data-delay=".5"
              >
                <img
                  src="assets/images/brand_3.png"
                  alt="company logo"
                  class="img-fluid w-100"
                />
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-4 col-6">
              <div
                class="tf__brand_img"
                data-animation="fade-left"
                data-offset="100"
                data-delay=".75"
              >
                <img
                  src="assets/images/brand_4.png"
                  alt="company logo"
                  class="img-fluid w-100"
                />
              </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-md-4 col-lg-4 col-6">
              <div
                class="tf__brand_img"
                data-animation="fade-left"
                data-offset="100"
                data-delay="1"
              >
                <img
                  src="assets/images/brand_5.png"
                  alt="company logo"
                  class="img-fluid w-100"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tf__counter pt_75">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="tf__single_counter">
                <h4><span class="counter">200</span>+</h4>
                <p>Team member</p>
                <h5 class="tf__counter_icon">
                  <i class="fas fa-users-cog"></i>
                </h5>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="tf__single_counter">
                <h4><span class="counter">20</span>+</h4>
                <p>Winning award</p>
                <h5 class="tf__counter_icon"><i class="fas fa-award"></i></h5>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="tf__single_counter">
                <h4><span class="counter">10</span>k+</h4>
                <p>Complete project</p>
                <h5 class="tf__counter_icon">
                  <i class="far fa-file-certificate"></i>
                </h5>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="tf__single_counter">
                <h4><span class="counter">900</span>+</h4>
                <p>Client review</p>
                <h5 class="tf__counter_icon">
                  <i class="fas fa-users-crown"></i>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        EXPERIANCE END
    ==============================-->

    <!--============================
        BLOG START
    ==============================-->
    <section class="tf__blog pt_145 pb_120">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div
                class="tf__common_heading tf__common_heading2 tf__blog_heading"
              >
                <h5>ALL Blogs</h5>
                <h2 data-text-animation="rotate-in">
                  From Vision to Reality My Portfolio of Accomplishments
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div
              class="tf__single_blog"
              data-animation="fade-left"
              data-offset="100"
            >
              <div class="tf__single_blog_img">
                <a
                  href="/blog-details.html"
                  data-cursor='<i class="fa-light fa-arrow-up-right"></i>'
                >
                  <img
                    src="assets/images/blog_1.jpg"
                    alt="blog img"
                    class="img-fluid w-100"
                /></a>
                <p>31 December, 2023</p>
              </div>
              <div class="tf__single_blog_text">
                <ul class="d-flex flex-wrap">
                  <li><i class="far fa-user"></i>By admin</li>
                  <li><i class="far fa-comments"></i>Comments (05)</li>
                </ul>
                <a href="/blog-details.html" class="tf__single_blog_heading"
                  >These cases are perfectly simple and easy</a
                >

                <a href="/blog-details.html" class="tf__common_btn tf__blog_btn"
                  >read more<i class="fa-solid fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div
              class="tf__single_blog"
              data-animation="fade-left"
              data-delay=".25"
              data-offset="100"
            >
              <div class="tf__single_blog_img">
                <a
                  href="/blog-details.html"
                  data-cursor='<i class="fa-light fa-arrow-up-right"></i>'
                >
                  <img
                    src="assets/images/blog_2.jpg"
                    alt="blog img"
                    class="img-fluid w-100"
                /></a>
                <p>31 December, 2023</p>
              </div>
              <div class="tf__single_blog_text">
                <ul class="d-flex flex-wrap">
                  <li><i class="far fa-user"></i>By admin</li>
                  <li><i class="far fa-comments"></i>Comments (05)</li>
                </ul>
                <a href="/blog-details.html" class="tf__single_blog_heading"
                  >which is the same as saying through shrinking from toil
                </a>

                <a href="/blog-details.html" class="tf__common_btn tf__blog_btn"
                  >read more<i class="fa-solid fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div
              class="tf__single_blog"
              data-animation="fade-left"
              data-delay=".5"
            >
              <div class="tf__single_blog_img">
                <a
                  href="/blog-details.html"
                  data-cursor='<i class="fa-light fa-arrow-up-right"></i>'
                >
                  <img
                    src="assets/images/blog_3.jpg"
                    alt="blog img"
                    class="img-fluid w-100"
                /></a>
                <p>31 December, 2023</p>
              </div>
              <div class="tf__single_blog_text">
                <ul class="d-flex flex-wrap">
                  <li><i class="far fa-user"></i>By admin</li>
                  <li><i class="far fa-comments"></i>Comments (05)</li>
                </ul>
                <a href="/blog-details.html" class="tf__single_blog_heading"
                  >when our power of choice is design untrammelled and when</a
                >

                <a href="/blog-details.html" class="tf__common_btn tf__blog_btn"
                  >read more<i class="fa-solid fa-arrow-right-long"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        BLOG END
    ==============================-->

    <!--============================
        CONTACT START
    ==============================-->
    <section class="tf__contact pb_80">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="tf__contact_area">
              <h4 data-text-animation="rotate-in">IF YOU WANT TO UPDATE ?</h4>
              <h4 data-text-animation="rotate-in" data-delay=".25">
                STAY CONECTED!
              </h4>
              <div class="tf__contact_mail">
                <input type="text" placeholder="Enter email address" />
                <a href="#" class="tf__subscribtion">SUBSCRIBE NOW</a>
              </div>
              <div class="row justify-content-between">
                <div class="col-xl-5 col-md-5">
                  <div class="tf__contact_address">
                    <h4>Contact Me</h4>
                    <div class="tf__single_address d-flex flex-wrap">
                      <span
                        ><i class="fa-sharp fa-solid fa-paper-plane"></i
                      ></span>
                      <div class="tf__address_area">
                        <p>Old city street,USA</p>
                        <p>1212 New york-3500</p>
                      </div>
                    </div>
                    <div class="tf__single_address d-flex flex-wrap">
                      <span><i class="fa-sharp fa-solid fa-phone"></i></span>
                      <div class="tf__address_area">
                        <p>(+888) 123 456 765</p>
                        <p>(+888) 123 456 765</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 col-md-5">
                  <div class="tf__contact_address">
                    <h4>OUR SERVICES</h4>
                    <ul>
                      <li>
                        <a href="#"
                          ><i class="far fa-angle-double-right"></i
                          ><span class="text_hover_animaiton"
                            >UI Design</span
                          ></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="far fa-angle-double-right"></i
                          ><span class="text_hover_animaiton"
                            >UX Design</span
                          ></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="far fa-angle-double-right"></i
                          ><span class="text_hover_animaiton"
                            >Digital Marketing</span
                          ></a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="far fa-angle-double-right"></i>
                          <span class="text_hover_animaiton"
                            >Video Editing</span
                          ></a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6">
            <form class="tf__form">
              <div class="row">
                <div class="col-xl-6">
                  <div class="tf__single_form">
                    <input type="text" placeholder="Name*" />
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="tf__single_form">
                    <input type="email" placeholder="E-mail" />
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="tf__single_form">
                    <input type="text" placeholder="Phone Number" />
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="tf__single_form">
                    <textarea rows="6" placeholder="Comment"></textarea>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="tf__single_form">
                    <button type="submit" class="tf__common_btn">
                      Submit<i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        CONTACT END
    ==============================-->

    <!--============================
        COPYRIGHT START
    ==============================-->
    <section class="tf__copyright">
      <div class="container">
        <div class="col-xl-12">
          <div
            class="tf__main_copyright d-flex flex-wrap justify-content-between"
          >
            <p>© Codeefly 2024 | All Rights Reserved</p>
            <ul class="d-flex flex-wrap">
              <li>
                <a href="#" class="text_hover_animaiton">Trams & Condition</a>
              </li>
              <li>
                <a href="#" class="text_hover_animaiton">Privacy Policy</a>
              </li>
              <li><a href="#" class="text_hover_animaiton">Sitemap</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--============================
        COPYRIGHT END
    ==============================-->

    <!--================================
        SCROLL BUTTON START
    =================================-->
    <div class="progress-wrap c-pointer">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
    <!--================================
        SCROLL BUTTON END
    =================================-->

    <div id="magic-cursor">
      <div id="ball"></div>
    </div>
    <!--js-->
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/scroll_top.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
