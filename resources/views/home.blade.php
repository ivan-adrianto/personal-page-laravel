@extends('layouts.main')
@section('container')
<div class="container">
  <!-- Jumbotron -->
  <div class="jumbotron mb-3" id="jumbotron">
    <br \><br class="d-none d-md-block" \>
    <div class="main-content-jumbotron d-block d-lg-flex justify-content-between ">
      <div>
        
        <h1 class="display-4">Hi, I'm Ivan Adrianto</h1>
        <img src="img/linibr.png" alt="Lingkaran" id="lingkaran1">
        <p class="lead">Full Stack Developer</p>
        <hr class="my-4">
        <div class="foto-utama d-flex justify-content-center  d-lg-none">
          <img src="img/gambar-jumbotron.png">
        </div>
        <p>This is Ivan, a passionate software developer who creates magic with Javascript. Currently working as
          front
          end developer. He also developed some backend and mobile apps. For him, coding is like love. Sometimes it
          makes
          you frustrated,
          but you just cannot leave it. </p>
        <div class="sosmed">
          <a class="btn btn-primary btn-lg" href="mailto: ivanadrianto64@gmail.com" role="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
            </svg> Email Me</a>
          <a href="https://www.linkedin.com/in/ivan-adrianto-a02a251b8/" target="_blank"><img src="img/linkedin.png" alt="Ivan Adrianto"></a>
          <a href="https://github.com/ivan-adrianto" target="_blank"><img src="img/github.png" alt="ivanadrianto"></a>
          <a href="https://ivanadrianto.medium.com/" target="_blank"><img src="img/medium.png" alt="Ivan Adrianto"></a>
          <a href="https://instagram.com/ivanadrianto" target="_blank"><img src="img/Insta.png" alt="ivanadrianto_"></a>
        </div>
      </div>
      <div class="foto-utama d-none d-lg-block">
        <img src="img/gambar-jumbotron.png">
      </div>
    </div>
    <div class="pernak-pernik">
      <div class="pernak1 garnish"></div>
      <div class="pernak2 garnish"></div>
      <div class="pernak3 garnish"></div>
      <div class="pernak4 garnish"></div>
      <div class="pernak5 garnish"></div>
      <div class="pernak6 garnish"></div>
    </div>
  </div>

  <!-- Akhir Jumbotron -->


  <!-- Portfolio -->
  <br><br><br><br><br><br>
  <div class="container">
    <div class="portfolio-category home pb-4" id="portfolio-home">
      <div class="col-sm-12 text-center portfolio-header mb-4">
        <a href="/portfolio.html">
          <h1><strong>Recent </strong><span>Projects</span></h1>
        </a>
      </div>
      <div class="row">
        <a href="/portfolio.html" class="col-12 col-lg-4">
          <img class="portfolio-thumbnail" src="img/portfolio/vcg-marketplace.png" alt="vc gamers">
        </a>
        <a href="/portfolio.html" class="col-12 col-lg-4">
          <img class="portfolio-thumbnail" src="img/portfolio/vcg-token.png" alt="vc gamers token">
        </a>
        <a href="portfolio.html" class="col-12 col-lg-4">
          <img class="portfolio-thumbnail" src="img/portfolio/sayembara.png" alt="sayembara">
        </a>
      </div>
    </div>
  </div>
  <!-- Akhir Portfolio -->

  <!-- Start Expertise -->
  <section class="expertise mb-5 mt-5" id="expertise">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1><strong>Skills</strong></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills mb-4">
          <div class="card-image">
            <img src="img/react.png" class="card-img-top" alt="React">
          </div>
          <div class="card-body">
            <h5 class="card-title">React Js</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills mb-4">
          <div class="card-image">
            <img src="img/react-native.png" class="card-img-top" alt="react native">
          </div>
          <div class="card-body">
            <h5 class="card-title">React Native</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills mb-4">
          <div class="card-image">
            <img src="img/angular.png" class="card-img-top" alt="angular">
          </div>
          <div class="card-body">
            <h5 class="card-title">Angular</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills mb-4">
          <div class="card-image">
            <img src="img/ionic.png" class="card-img-top" alt="ionic">
          </div>
          <div class="card-body">
            <h5 class="card-title">Ionic</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills mb-4">
          <div class="card-image">
            <img src="img/vue.png" class="card-img-top" alt="vue">
          </div>
          <div class="card-body">
            <h5 class="card-title">Vue</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills mb-4">
          <div class="card-image">
            <img src="img/bootstrap.png" class="card-img-top" alt="bootstrap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Bootstrap</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills">
          <div class="card-image ejs">
            <img src="img/expressjs.png" class="card-img-top" alt="express-js">
          </div>
          <div class="card-body">
            <h5 class="card-title">Express JS</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills">
          <div class="card-image">
            <img src="img/sequelize.png" class="card-img-top" alt="sequelize">
          </div>
          <div class="card-body">
            <h5 class="card-title">Sequelize</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="card-transparent skills">
          <div class="card-image">
            <img src="img/MySQL.png" class="card-img-top" alt="my sql">
          </div>
          <div class="card-body">
            <h5 class="card-title">MySQL</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Expertise -->



  <!-- Working Experiences -->
  <section class="working-exp mb-5 mt-5 pt-2 pb-4" id="working-exp">
    <div class="experience">
      <h1><strong>Working <span>Experiences</span></strong></h1>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/nebulae.jpg" class="d-block w-100" alt="Nebulae">
          <h3>Nebulae</h3>
          <p>In 2023, I joined Nebulae as front end developer. Despite initially I worked as a front end developer, in the working process I also developed API for Nebulae's client in Europe, as well working on developing mobile app.</p>
        </div>
        <div class="carousel-item">
          <img src="img/vcgamers.jpg" class="d-block w-100" alt="VC Gamers">
          <h3>VC Gamers</h3>
          <p>At the end of 2021, I joined VCGamers as front end developer. Since then, I built VCGamers Marketplace,
            VC Arena, and $VCG Token website.</p>
        </div>
        <div class="carousel-item">
          <img src="img/skyshi.jpg" class="d-block w-100" alt="Skyshi">
          <h3>Skyshi Digital Indonesia</h3>
          <p>Since January 2021, I joined Skyshi as front end developer, and built some web apps requested by
            Skyshi's
            clients. Awarded as the engineer with best velocity for 3rd quarter of 2021.</p>

        </div>
        <div class="carousel-item">
          <img src="img/dps-squar-bw.png" class="d-block w-100" alt="DPS">
          <h3>PT. BPR Danaputra Sakti</h3>
          <p>In 2019, worked as saving and deposit account administrator. Then, moved to Legal Officer. And the
            last,
            as lending marketing in 2020. Created some Excel mini-programs that increases working efficiency until
            300%.</p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- Akhir Working experiences -->

  <!-- Education -->
  <section class="education mt-5 pt-3" id="education">
    <div class="container mb-5" style="padding: 0px;">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1><strong>Education</strong></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
          <div class="card-transparent education" style="width: 18rem;">
            <div class="d-flex justify-content-center">
              <img src="img/glints-circled.png" class="card-img-top education mx-0" alt="Glints">
            </div>
            <div class="card-body">
              <h5 class="card-title">Glints Academy</h5>
              <p class="card-text">Learned front-end development using React.js in Glints Academy Batch 8, 2020.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 justify-content-center">
          <div class="card-transparent education" style="width: 18rem;">
            <div class="d-flex justify-content-center">
              <img src="img/stid.png" class="card-img-top education mx-0" alt="stid">
            </div>
            <div class="card-body">
              <h5 class="card-title">STID Al Hadid Surabaya</h5>
              <p class="card-text">Learned communication and graduated in 2019. Runner-Up of English Debate
                Competition
                in 2016.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
          <div class="card-transparent education" style="width: 18rem;">
            <div class="d-flex justify-content-center">
              <img src="img/unair.png" class="card-img-top education mx-0" alt="Unair">
            </div>
            <div class="card-body">
              <h5 class="card-title">Universitas Airlangga</h5>
              <p class="card-text">Learned in English Department and graduated in 2018. One of the best graduates in
                2018.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
