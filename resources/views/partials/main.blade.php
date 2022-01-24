<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                        <div class="about-info">
                          @foreach ($profils as $item)

                          <p><span class="title-s">Nom: </span> <span>{{ $item->nom }}</span></p>
                          <p><span class="title-s">Prenom: </span> <span>{{ $item->prenom }}</span></p>
                          <p><span class="title-s">Age: </span> <span>{{ $item->age }} ans</span></p>
                          <p><span class="title-s">Profil: </span> <span>{{ $item->titre }}</span></p>
                          <p><span class="title-s">Email: </span> <span>{{ $item->email }}</span></p>
                          <p><span class="title-s">Phone: </span> <span>{{ $item->telephone }}</span></p>
                          @endforeach
                        </div>
                    </div>
                  </div>
                  @foreach ($skills as $item)
                  <div class="skill-mf">
                      <p class="title-s">Skills</p>
                      <span>{{ $item->language }}</span> <span class="pull-right">{{ $item->pourcentage }} %</span>
                      <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 90%;"  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    {{-- <span>{{ $item->language }}</span> <span class="pull-right">90%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ $item->language }}</span> <span class="pull-right">50%</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>{{ $item->language }}</span> <span class="pull-right">90%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> --}}

                </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                        <div class="title-box-2">
                            <h5 class="title-left">
                                About me
                            </h5>
                        </div>
                        <p class="lead">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ullam et culpa sunt itaque nulla commodi placeat error praesentium odio veritatis sint iure mollitia exercitationem quas aliquam, aperiam officiis <br> <br> similique cumque suscipit ratione, laborum deleniti ab ipsum. Tenetur possimus dolore ut sed fugiat, nostrum quo officia culpa. Ipsam, debitis accusamus.
                        </p>
                        {{-- <p class="lead">
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                            porttitor volutpat. Vestibulum
                            ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                        </p>
                        <p class="lead">
                            Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                            Nulla porttitor accumsan
                            tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Photography</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section --> --}}

    <!-- ======= Counter Section ======= -->
    {{-- <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section --> --}}

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                liste de tout mes projects réalisé en tant que developpeur web.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                @foreach ($portfolios as $item)
                <div class="work-box">
                    <a href="{{ $item->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="{{ $item->image }}" alt="" class="img-fluid ">
                        </div>
                    </a>
                    <div class="work-content">

                  <div class="row">
                      <div class="col-sm-8">
                    <h2 class="w-title">{{ $item->titre }}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">{{ $item->date }}</span>
                    </div>
                    <div>
                        <a target="{{ $item->url }}" href="
                        {{ $item->url }}">URL:</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="w-like">
                        <a href="{{ route("portfolio") }}"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>
{{-- <div class="col-md-4">
    <div class="work-box">
        <a href="{{ asset("img/calculatrice.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
            <div class="work-img">
                <img src="{{ asset("img/calculette.png")}}" alt="" class="img-fluid">
            </div>
        </a>
        <div class="work-content">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="w-title">Loreda Cuno Nere</h2>
                    <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="w-like">
                          <a href="{{ route("portfolio") }}"> <span class="bi bi-plus-circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="work-box">
            <a href="{{ asset("img/emporium.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                    <img src="{{ asset("img/emporium.png")}}" alt="" class="img-fluid">
                </div>
            </a>
              <div class="work-content">
                  <div class="row">
                      <div class="col-sm-8">
                          <h2 class="w-title">Mavrito Lana Dere</h2>
                          <div class="w-more">
                              <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                            </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                        <a href="{{ route("portfolio") }}"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
                <a href="{{ asset("img/todolist.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="{{ asset("img/todolist.png")}}" alt="" class="img-fluid">
                </div>
            </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bindo Laro Cado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ route("portfolio") }}"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ asset("img/e_commerce.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="{{ asset("img/e_commerce.png")}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                  <div class="row">
                  <div class="col-sm-8">
                      <h2 class="w-title">Studio Lena Mado</h2>
                      <div class="w-more">
                          <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="w-like">
                      <a href="{{ route("portfolio") }}"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
                <a href="{{ asset("img/template_laravel.png")}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                    <img src="{{ asset("img/template_laravel.png")}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                      <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                        <a href="{{ route("portfolio") }}"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                </div>
            </div>
              </div>
            </div>
          </div> --}}

        </div>

    </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <div class="testimonials paralax-mf bg-image" style="background-image: url({{ asset("img/overlay-bg.jpg")}}">
        <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
            <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="{{ asset("img/testimonial-2.jpg")}}" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Xavi Alonso</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Marta Socrate</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">

        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section --> --}}

    <!-- ======= Blog Section ======= -->
    {{-- <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{ asset("img/post-1.jpg")}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{ asset("img/testimonial-2.jpg")}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{ asset("img/post-2.jpg")}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{ asset("img/testimonial-2.jpg")}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="{{ asset("img/post-3.jpg")}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{ asset("img/testimonial-2.jpg")}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                        @foreach ($contacts as $item)




                      <h5 class="title-left">
                        {{ $item->titre }}
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        {{ $item->description }}
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span>{{ $item->adresse }}</li>
                        <li><span class="bi bi-phone"></span>{{ $item->telephone }}</li>
                        <li><span class="bi bi-envelope"></span>{{ $item->email }}</li>
                      </ul>
                    </div>
                    @endforeach
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
