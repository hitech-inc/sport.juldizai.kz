@extends('frontend.layouts.master')
@section('content')

<div class="banner">
  <div class="banner_content-container">
    <div class="banner_content" data-caption-animate="fadeInUp">
      <span class="banner_subtitle">Спартакиада</span>
      <h2 class="banner_title">«Жұлдызай»<!-- <br/> БЕЗ БОЛИ. --></h2>
      <p class="banner_text">
       Первая Республиканская Спартакиада «Жұлдызай», которая будет проводиться по правилам Special Olympics, для детей с особыми образовательными потребностями, из них дети с ограниченными возможностями (далее — Спартакиада) проводится в 2 этапа.
      </p>

      <div class="banner_btn-group">
        <a href="index-light.html#contacts" class="btn btn--primary">Cвяжитесь с нами <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>

<div id="about" class="intro">
  <div class="container-fluid">
    <div class="row row--flex row--flex-wrap">
      <div class="col-xs-12 col-md-6">
        <div class="intro_img-bg">
          <img src="img/girl-light.png.pagespeed.ce.h4ythjonyp.png" alt="" data-pagespeed-url-hash="863686643" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="intro_content">
          <div class="intro_content-inner">
            <div class="intro_heading">
              <h4 class="intro_title">ЦЕЛИ СПАРТАКИАДЫ</h4>
              <!-- <div class="intro_subtitle">I’m Rt</div>
              <div class="intro_name">- F</div> -->
            </div>

            <div class="intro_text">
              Пропаганда здорового образа жизни, вовлечение детей с ограниченными возможностями в спорт, их социализация и интеграция в общество. Привлечение внимания и изменение отношения общества к людям с особенностями в интеллектуальном и физическом развитии. Формирование инновационных методов взаимодействия государственных органов, бизнес-структур и общественных объединений в сфере поддержки детского спорта.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="benefits" class="benefits">
  <div class="container-fluid container-fluid--custom">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 class="section-heading_main">ЗАДАЧИ СПАРТАКИАДЫ</h2>
          <!-- <span class="section-heading_secondary">Train yourself to perfection</span> -->
        </div>
      </div>
    </div>

    <div class="row row--flex row--flex-wrap row--flex-space">
      @foreach($tasks as $task)
      <div class="col-sm-6 col-md-4">
        <div class="benefit">
          <div class="benefit_img">
            <svg class="icon icon-{{ $loop->iteration }}"><use xlink:href="#icon-{{ $loop->iteration }}"></use></svg>
          </div>

          <!-- <h4 class="benefit_title">Calorie Control</h4> -->

          <div class="benefit_text">
            {{ $task->text }}
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="row mt-3">
      <div class="col-md-12 text-center">
        <a href="index-light.html#contacts" class="btn btn--primary">Cвяжитесь с нами <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>

<div id="team" class="team">
  <div class="container-fluid container-fluid--custom">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 class="section-heading_main">Команда</h2>
          <span class="section-heading_secondary">вместе мы - сила</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="person">
          <div class="person_photo">
            <img src="img/team/01.jpg.pagespeed.ce.h_PAbraCNw.jpg" alt="" data-pagespeed-url-hash="321347643" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </div>
          <div class="person_name">
            Jess Briggs
            <span>Fitness Coach</span>
          </div>

          <div class="person_socials">
            <ul class="socials socials--person">
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="person">
          <div class="person_photo">
            <img src="img/team/02.jpg.pagespeed.ce.C8s6whAjW6.jpg" alt="" data-pagespeed-url-hash="615847564" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </div>
          <div class="person_name">
            Will Paulson
            <span>Bodybuilding Coach</span>
          </div>

          <div class="person_socials">
            <ul class="socials socials--person">
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="person">
          <div class="person_photo">
            <img src="img/team/03.jpg.pagespeed.ce.jhXMPDOPXD.jpg" alt="" data-pagespeed-url-hash="910347485" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </div>
          <div class="person_name">
            Samantha Marques
            <span>CrossFit Coach</span>
          </div>

          <div class="person_socials">
            <ul class="socials socials--person">
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
              <li class="socials_item"><a href="index-light.html#content" class="socials_link"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="questions">
  <div class="container-fluid container-fluid--custom">
    <div class="row">
      <div class="col-md-8">
        <div class="questions_text">
          ВОПРОСЫ?
          <span>Cвяжитесь с нами сейчас!</span>
        </div>
      </div>
      <div class="col-md-4 text-center">
        <a href="index-light.html#contacts" class="btn btn--primary btn--primary--light mt-4">Свяжитесь с нами <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>

    <div id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row row--flex row--flex-wrap gallery-images">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/01.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/01.jpg.pagespeed.ce.LhPPFk3vHZ.jpg" alt="" data-pagespeed-url-hash="3040833188" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/02.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/02.jpg.pagespeed.ce.c7KQO1cpe8.jpg" alt="" data-pagespeed-url-hash="3335333109" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/03.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/03.jpg.pagespeed.ce.VCOPWxNorI.jpg" alt="" data-pagespeed-url-hash="3629833030" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/04.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/04.jpg.pagespeed.ce.c_fPBNdn8c.jpg" alt="" data-pagespeed-url-hash="3924332951" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/05.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/05.jpg.pagespeed.ce.AFueXXnav1.jpg" alt="" data-pagespeed-url-hash="4218832872" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/06.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/06.jpg.pagespeed.ce.lD0vP8TO3g.jpg" alt="" data-pagespeed-url-hash="218365497" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/07.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/07.jpg.pagespeed.ce.wFy_QdB1Qq.jpg" alt="" data-pagespeed-url-hash="512865418" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/gallery/real/08.jpg" class="gallery_item" data-effect="mfp-zoom-in">
              <img src="img/gallery/08.jpg.pagespeed.ce.rWMOfCP3r_.jpg" alt="" data-pagespeed-url-hash="807365339" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </a>
          </div>
        </div>
      </div>
    </div>

<!-- <div id="pricing" class="pricing">
  <div class="container-fluid container-fluid--custom">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 class="section-heading_main">Pricing plans</h2>
          <span class="section-heading_secondary">The greatest investment is your health</span>
        </div>
      </div>
    </div>

    <div class="row row--flex row--flex-wrap row--flex-space">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="pricing-table">
          <div class="pricing-table_name">One-timer</div>
          <div class="pricing-table_header">
            <div class="pricing-table_price">FREE</div>
            <p class="pricing-table_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. </p>
          </div>
          <div class="pricing-table_content">
            <ul class="content-list">
              <li>Gym Training</li>
              <li>Stretching</li>
              <li>CrossFit</li>
              <li>Pilates</li>
              <li>Personal Coach</li>
            </ul>
            <a href="index-light.html#" class="btn btn--secondary">Get started</a>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="pricing-table">
          <div class="pricing-table_name">Monthly Membership</div>
          <div class="pricing-table_header">
            <div class="pricing-table_price">$60</div>
            <p class="pricing-table_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. </p>
          </div>
          <div class="pricing-table_content">
            <ul class="content-list">
              <li>Gym Training</li>
              <li>Stretching</li>
              <li>CrossFit</li>
              <li>Pilates</li>
              <li>Personal Coach</li>
            </ul>
            <a href="index-light.html#" class="btn btn--secondary">Get started</a>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="pricing-table">
          <div class="pricing-table_name">Annual</div>
          <div class="pricing-table_header">
            <div class="pricing-table_price">$600</div>
            <p class="pricing-table_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.  </p>
          </div>
          <div class="pricing-table_content">
            <ul class="content-list">
              <li>Gym Training</li>
              <li>Stretching</li>
              <li>CrossFit</li>
              <li>Pilates</li>
              <li>Personal Coach</li>
            </ul>
            <a href="index-light.html#" class="btn btn--secondary">Get started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<div class="reviews">
  <div class="container-fluid container-fluid--custom">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 class="section-heading_main">Обратная связь</h2>
          <span class="section-heading_secondary">Читайте, что говорят наши участники!</span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="swiper-container testimonials-carousel">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial">
                <blockquote class="testimonial_text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. 
                  </p>
                </blockquote>

                <div class="author">
                  <div class="author_avatar">
                    <img src="img/testimonials/01.png.pagespeed.ce.eLqc9sDj8p.png" alt="" data-pagespeed-url-hash="4045923692" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                  </div>
                  <div class="author_name">Emma Watson</div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial">
                <blockquote class="testimonial_text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. 
                  </p>
                </blockquote>

                <div class="author">
                  <div class="author_avatar">
                    <img src="img/testimonials/02.png.pagespeed.ce.wmMNpW36br.png" alt="" data-pagespeed-url-hash="45456317" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                  </div>
                  <div class="author_name">Matilda Coen</div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial">
                <blockquote class="testimonial_text">
                  <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. 
                  </p>
                </blockquote>

                <div class="author">
                  <div class="author_avatar">
                    <img src="img/testimonials/x03.png.pagespeed.ic.sw2hn0ys9x.png" alt="" data-pagespeed-url-hash="339956238" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                  </div>
                  <div class="author_name">Audrey Burns</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="contacts" class="contact">
  <div class="container-fluid">
    <div class="row row--flex row--flex-wrap">
      <div class="col-xs-12 col-md-6">
        <div class="in-touch">
          <h2 class="in-touch_title">Свяжитесь с нами </h2>
          <ul class="places">
            <li class="places_item">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              {!! $contacts->address !!}
            </li>   
            <li class="places_item">
              <i class="fa fa-mobile" aria-hidden="true"></i>
              <a href="tel:+77172579414">{!! $contacts->phone !!}</a>​​​​​​​<br>
            </li>
            <li class="places_item">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <a href="mailto:zhuldizai@bi-group.kz">{!! $contacts->email !!}</a>
            </li>
          </ul>

          <div class="row">
            <div class="col-md-12">
              <h2>Отправить сообщение</h2>
            </div>
          </div>

          <form action="index-light.html#" method="get" id="contact-form">
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Имя" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <textarea rows="10" class="form-control" name="message" placeholder="Сообщение"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-right">
                <input type="submit" class="btn btn--send" value="Отправить">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div id="map" class="map"></div>
      </div>
    </div>
  </div>
</div>
<a href="index-light.html#" class="back-to-top" title="Back to top"></a>
<script>
function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 42.349610, lng: 69.551717}
  });
  var marker = new google.maps.Marker({
    position: {lat: 42.349610, lng: 69.551717},
    map: map,
    title: 'Hello World!'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKfwH806ZqKTrWyaP6eHXRr-75xigyovY&callback=initMap"
    async defer></script>

@endsection