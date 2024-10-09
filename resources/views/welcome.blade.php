<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="icon" type="image/png" href="{{asset('dist/img/sports.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Training Studio</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    <style>
        .dropdown {
  display: inline-block;
  position: relative;
}
.dropdown-content {
  display: none;
  position: absolute;
  width: 100%;
  overflow: auto;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
  display: block;
  color: black;
  padding: 5px;
  text-decoration: none;
}
.dropdown-content a:hover {
  color: black;
  background-color: #ffb09d;

}

#id1{
    border: 1px solid #32302F;
    padding: 4px ;
    }
    h5{
        color: rgba(0, 0, 0, 0.637);
        font-weight: bold;
    }
    #col{
        color: black;
        cursor: pointer;
    }

    #white{
        color: white;
        cursor: pointer;
    }
    </style>
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="javascript:history.go(0)" class="logo">Training<em> Studio</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>

                            <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                            {{-- <li class="main-button"><a href="/login/member">Sign In</a></li> --}}

                             <div class="dropdown" >
                                <button id="id1" class="btn btn-danger" style="background-color: #ed563b"> Sign in As:</button>
                                <div class="dropdown-content">
                                <a id="col" data-toggle="modal" data-target="#exampleModal"><small><b>Member</b></small></a>
                                <a id="col"  data-toggle="modal" data-target="#coach"><small><b>Coach</b></small></a>
                                <a id="col" data-toggle="modal" data-target="#adm"><small><b>Admin</b></small></a>
                                </div>

                              </div>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption" style="color: rgb(255, 0, 0);font-weight:bold;">
                @if ($msg=Session::get('error'))
    <div class="alert alert-error" style="background-color: rgb(233, 233, 233);width:500px;position: relative;left:300px;opacity:0.9;color:rgba(255, 0, 0, 0.808)">
      {{$msg}}
    </div>
    @endif
    @if ($msg=Session::get('success'))
    <div class="alert alert-success" style="background-color: rgb(233, 233, 233);width:500px;position: relative;left:300px;opacity:0.9">
      {{$msg}}
    </div>
    @endif
                <h6>work harder, get stronger</h6>
                <h2>easy with our <em>gym</em></h2>
                <div class="main-button scroll-to-section">
                    <a id="white" data-toggle="modal" data-target="#reg">Become a member</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Choose <em>Program</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Training Studio is a place providing the public with equipment, an environment and framing services aimed at improving the physical condition and relaxation.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Fitness course</h4>
                                <p>Fitness is a set of physical activities allowing the practitioner to improve his physical condition and his lifestyle, for the sake of well-being.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Body Building Course</h4>
                                <p>Body Building is a physical and sports activity consisting in building muscle mass for aesthetic purposes.</p>
                            </div>

                        </li>

                        <li class="feature-item"  id="position">
                        <div class="left-icon" >
                            <img src="assets/images/features-first-icon.png" alt="training fifth">
                        </div>
                        <div class="right-content">
                            <h4>Aerobic</h4>
                            <p >Aerobic is a  dance gymnastic that stimulate cardiovascular activity and oxygenate the body with rapid movements performed to music at a sustained pace.</p>
                        </div>

                    </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Muscle Course</h4>
                                <p>Muscle training is a set of physical exercises aimed at the development of skeletal muscles in order to acquire more strength, endurance, power or muscle volume.</p>

                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Yoga Training course</h4>
                                <p>Yoga is a discipline of body and mind that includes a wide variety of exercises and techniques..</p>
                            </div>
                        </li>

                        <li class="feature-item">

                            <div class="right-content">
                                <br>
                                <br>
                                <h5 style="position: relative;left:150px"><em>And much more ...</em></h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        <p>Your Body Is Your Most Priceless Possession, Take Care Of It.</p>
                        <div class="main-button scroll-to-section">
                            <a id="white" data-toggle="modal" data-target="#reg">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->



    <!-- ***** Our Classes End ***** -->

    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Time and health are two precious assets that we don't recognize and appreciate until they have been depleted.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="sunday">Sunday</li>
                            <li data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                            <li data-tsfilter="saturday">Saturday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                @foreach ($tasks as $task)
                                <tr>
                                    <td class="day-time">{{$task->sports->name}} </td>
                                    @if ($task->day==0)
                                    <td class="sunday ts-item show" data-tsmeta="sunday">{{$task->start}}-{{$task->end}}</td>

                                    @elseif ($task->day==1)
                                    <td class="monday ts-item" data-tsmeta="monday">{{$task->start}}-{{$task->end}}</td>
                                    >
                                    @elseif ($task->day==2)
                                    <td class="tuesday ts-item show" data-tsmeta="tuesday">{{$task->start}}-{{$task->end}}</td>

                                    @elseif ($task->day==3)
                                    <td class="wednesdy ts-item" data-tsmeta="wednesday">{{$task->start}}-{{$task->end}}</td>

                                    @elseif ($task->day==4)
                                    <td class="thursday ts-item show" data-tsmeta="thursday">{{$task->start}}-{{$task->end}}</td>

                                    @elseif ($task->day==5)
                                    <td class="friday ts-item" data-tsmeta="friday">{{$task->start}}-{{$task->end}}</td>
                                    d>
                                    <td class="saturday ts-item" data-tsmeta="saturday"></td>
                                    @elseif ($task->day==6)
                                    <td class="saturday ts-item" data-tsmeta="saturday">{{$task->start}}-{{$task->end}}</td>

                                    @endif
                                    <td>{{ucfirst($task->coaches->fname)}} {{ucfirst($task->coaches->lname)}}</td>
                                </tr>
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Expert <em>Trainers</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>We have the most expert coaches in the country just to help you upgrade your body.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($coaches as $coach)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img id="co" width="100" height="350" src="{{asset('/image/coach/'.$coach->image)}}"
                            alt="lost it">
                        </div>
                        <div class="down-content">
                            <span>{{ucfirst($coach->sports->name)}} Coach</span>
                            <h4>{{ucfirst($coach->fname)}} {{ucfirst($coach->lname)}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.0329896977696!2d10.759866314576627!3d34.754761787829956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1301d3928cf84e95%3A0x3daf68477c622216!2sID%20Software%20Solutions-Fournisseur%20des%20Caisses%20Tactile%20-%20Logiciel%20-%20Site%20Web!5e0!3m2!1sfr!2stn!4v1630788447741!5m2!1sfr!2stn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"  frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2020 Training Studio

                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a></p>

                    <!-- You shall support us a little via PayPal to info@templatemo.com -->

                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

@include('layouts/member')
@include('layouts/admin')
@include('layouts/coach')
@include('layouts/reg')


  </body>
</html>
