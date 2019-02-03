<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Personal - Free Bulma template</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.7.2-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
  <style media="screen">
    .has-same-height .card {
      height: 320px;
      overflow: hidden;
    }

    a {
      text-decoration: none;
    }

    .card-content h3 {
      text-align: center;
    }

    .table-profile td,
    th {
      border: none !important;
    }

    .table-profile td:first-of-type {
      font-weight: bold;
    }

    .skills-content .media {
      margin: 0 !important;
      padding: 4px !important;
      border: 0 !important;
    }

    .skills-content .progress {
      height: 4px !important;
    }

    .custom-tags {
      text-align: center !important;
      display: block;
    }

    .portfolio-container .card {
      margin-bottom: 2em;
    }

    .section-heading {
      text-align: center;
      margin-top: 1em;
      margin-bottom: 6em;
    }

    #myPic {
      background-image: url({{ asset('images/portfolio/me.jpg') }});
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
  <script async type="text/javascript">
    // The following code is based off a toggle menu by @Bradcomp
    // source: https://gist.github.com/Bradcomp/a9ef2ef322a8e8017443b626208999c1
    (function() {
        var burger = document.querySelector('.burger');
        var menu = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();
  </script>
</head>

<body>
  <!-- Navigation bar -->
  <nav class="navbar is-link is-fixed-top">
    <div class="navbar-brand">
      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="{{ url('/') }}">
          <span class="icon">
            <i class="fas fa-home fa-lg"></i>
          </span>
          {{-- <span>Home</span> --}}
        </a>
      </div>
      <div class="navbar-end">
        <a class="navbar-item" href="#about">
          <span class="icon">
            <i class="fas fa-info"></i>
          </span>
          <span>About</span>
        </a>
        <a class="navbar-item" href="#services">
          <span class="icon">
            <i class="fas fa-bars"></i>
          </span>
          <span>Services</span>
        </a>
        <a class="navbar-item" href="#resume">
          <span class="icon">
            <i class="fas fa-file-alt"></i>
          </span>
          <span>Resume</span>
        </a>
        <a class="navbar-item" href="#portfolio">
          <span class="icon">
            <i class="fas fa-th-list"></i>
          </span>
          <span>Portfolio</span>
        </a>
        <a class="navbar-item" href="#contact">
          <span class="icon">
            <i class="fas fa-envelope"></i>
          </span>
          <span>Contact</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="hero is-link is-fullheight is-fullheight-with-navbar">
    <div class="hero-body">
      <div class="container">Hello! I am
        <h1 class="title is-1">
          Ayush Likhar
        </h1>
        <h2 class="subtitle is-3">
          Full Stack Web Developer
        </h2>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="section" id="about">
    <!-- Title -->
    <div class="section-heading">
      <h3 class="title is-2">About Me</h3>
      <h4 class="subtitle is-5">Jack of all trades, master of "some"</h4>
      <div class="container">
        <p>Web developer with more than <strong>2 years</strong> of well-rounded experience with a degree in the
          field of
          <strong>Mechanical Engineering</strong>, extensive knowledge of modern Web techniques and love for <strong>Coffee</strong>.
          Looking for an opportunity to innovate and grow, as well as being involved in an organization that
          believes
          in gaining a competitive edge and giving back to the community.</p>
      </div>
    </div>

    <div class="columns has-same-height is-gapless">
      <div class="column">
        <!-- Profile -->
        <div class="card">
          <div class="card-content">
            <h3 class="title is-4">Profile</h3>

            <div class="content">
              <table class="table-profile">
                <tr>
                  <th colspan="1"></th>
                  <th colspan="2"></th>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td>Indore</td>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td>9098579483</td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>ayush.likhar@outlook.com</td>
                </tr>
              </table>
            </div>
            <br>
            <div class="buttons has-addons is-centered">
              <a href="https://github.com/mechtech5" class="button is-link" target="_blank">Github</a>
              <a href="https://www.linkedin.com/in/ayush-likhar-254932156/" class="button is-link" target="_blank">LinkedIn</a>
              <a href="https://www.facebook.com/neontechhead" class="button is-link" target="_blank">Facebook</a>
              <a href="https://twitter.com/ayush_likhar" class="button is-link" target="_blank">Twitter</a>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Profile picture -->
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3" id="myPic">
              <!-- <img src="{{asset('images/portfolio/me.jpg')}}" alt="Placeholder image"> -->
            </figure>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Skills -->
        <div class="card">
          <div class="card-content skills-content">
            <h3 class="title is-4">Skills</h3>
            <div class="content">

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>JavaScript:</strong>
                      <br>
                      <progress class="progress is-primary" value="80" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>Vue.js:</strong>
                      <br>
                      <progress class="progress is-primary" value="50" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>PHP</strong>
                      <br>
                      <progress class="progress is-primary" value="75" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>HTML5/CSS3</strong>
                      <br>
                      <progress class="progress is-primary" value="95" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>Databases</strong>
                      <br>
                      <progress class="progress is-primary" value="66" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills tags -->
  <!-- <br>
        <div class="tags custom-tags">
          <span class="tag is-light">Node.js</span><span class="tag is-light">Express.js</span><span class="tag is-light">VueJS</span><span
            class="tag is-light">JavaScript</span><span class="tag is-light">HTML5</span><span class="tag is-light">Canvas</span><span
            class="tag is-light">CSS3</span><span class="tag is-light">Bulma</span><span class="tag is-light">Bootstrap</span><span
            class="tag is-light">jQuery</span><span class="tag is-light">Pug</span><span class="tag is-light">Stylus</span><span
            class="tag is-light">SASS/SCSS</span><span class="tag is-light">Webpack</span><span class="tag is-light">Git</span><span
            class="tag is-light">ASP.NET Web Forms</span><span class="tag is-light">MSSQL</span><span class="tag is-light">MongoDB</span><span
            class="tag is-light">Apache Cordova</span><span class="tag is-light">Chrome Extensions</span>
        </div> -->

  <!-- Services -->
  <section class="section" id="services">
    <div class="section-heading">
      <h3 class="title is-2">Services</h3>
      <h4 class="subtitle is-5">What can I do for you?</h4>
    </div>
    <div class="container">
      <div class="columns">
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5">Front End Web Development</h4>
              Develop Front End using latest standards with HTML5/CSS3 with added funtionality using JavaScript and
              Vue.js.
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5">Back End Web Development</h4>
              Develop Back End application/service using Node.js or ASP .NET and SQL server or Mongo DB databases.
            </div>
          </div>
        </div>
      </div>

<!--       <div class="columns">
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5">Front End Web Development</h4>
              Develop Front End using latest standards with HTML5/CSS3 with added funtionality using JavaScript and
              Vue.js.
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5">Back End Web Development</h4>
              Develop Back End application/service using Node.js or ASP .NET and SQL server or Mongo DB databases.
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </section>

  <!-- Resume -->
  <section class="section" id="resume">
    <div class="section-heading">
      <h3 class="title is-2">Resume</h3>
      <h4 class="subtitle is-5">More about my past</h4>
      <a href="https://docs.google.com/document/d/1IRuYnO0eeRbMVth822CSyADjAA9gghYCZApYyzkYyqQ/edit?usp=sharing" class="button is-link is-medium">
        <span class="icon">
          <i class="fas fa-file-alt"></i>
        </span>
        <span>Download My Skillset</span>
      </a>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="section" id="portfolio">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Portfolio</h3>
        <h4 class="subtitle is-5">My latest works</h4>
      </div>
      <br>

      <div class="container portfolio-container">
        <div class="columns">
          <div class="column is-4">

          </div>
          <div class="column is-4">

          </div>
          <div class="column is-4">

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievement Level -->
  <!-- <section class="section">
    <nav class="level">
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Tweets</p>
          <p class="title">3,456</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Following</p>
          <p class="title">123</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Followers</p>
          <p class="title">456K</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Likes</p>
          <p class="title">789</p>
        </div>
      </div>
    </nav>
  </section> -->


  <!-- Contact -->
  <section class="section" id="contact">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Contact</h3>
        <h4 class="subtitle is-5">Get in touch</h4>
      </div>
      <br>

      <div class="columns">
        <div class="column is-6 is-offset-3">
          <form action="" >
            <div class="box">
              <div class="field">
                <label class="label">Name</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Text input">
                </div>
              </div>

              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left">
                  <input class="input" type="email" placeholder="Email input" value="">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
              </div>

              <div class="field">
                <label class="label">Message</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Textarea"></textarea>
                </div>
              </div>

              <div class="field is-grouped has-text-centered">
                <div class="control">
                  <button class="button is-link is-large"><span class="icon">
                      <i class="fas fa-envelope"></i>
                    </span>
                    <span>Submit</span></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="section-heading">
      <p>
        <strong>Copyright</strong> &copy;  2019<a href="http://jigsawme.in"> Jigsawme</a> All rights reserved.
        {{-- <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. --}}
      </p>
    </div>
  </footer>
</body>

</html>
