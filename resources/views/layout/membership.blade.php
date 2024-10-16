<style>
    @import url(https://fonts.googleapis.com/css?family=Lato);

$lato: "Lato";
$black: #000;
$white: #fff;

/* CENTERING */

.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}

@mixin vertical-align($position: relative) {
  position: $position;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* /end */

body{
   background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/326221/bg.jpg);
   background-attachment: fixed;
   background-size:cover;
   background-repeat:no-repeat;
}

h3{
   position: relative;
   left: 45%;
}

/* THE FRONT */

.front{
    background-image:url(https://i.imgur.com/kvvKhYq.png);
   background-size:cover;
}

/* /end */

/* THE BACK */

.back{
   background-image:url(https://i.imgur.com/jpcji3x.png);
   background-size:cover;

   h1, p, .font-a-icons {
      color: $black;
      font-family: $lato;
      margin-left: 30%;
      line-height: 90%;
   }

   h1{
      margin-top: 5%;
   }

   p{
      font-size: 16px;
      padding-bottom: 15px;
      width: 35%;
      border-bottom: 2px solid $black;
   }

   .bold{
      font-weight: bold;
   }

   .font-a-icons{
      margin-top: 25px;

      .icon-group{
         margin-top: 8px;
      }

      span, .link, .fa, a{
         color: $black;
      }

      .fa{
         font-size: 18px;
      }

      span, a{
         font-size: 16px;
      }

      a, .website{
         text-decoration: none;
      }

      a:hover, .website:hover{
         color: #3f3f3f;
      }
   }
   .icon-box{
      position: relative;
      color: $black;
      font-size: 24px;
      height: 45px;
      width: 45px;
      padding: 5px;
      top: 75px;
      left: 30%;
      display: inline-block;
      border: 2px solid $black;
      margin: 5px;
      text-align: center;
      cursor: pointer;
      -webkit-transition: all ease 0.5s;
	      -moz-transition: all ease 0.5s;
	         transition: all ease 0.5s;
   }
   .icon-box:hover {
    box-shadow: inset 0 50px 0 0 $black;
    color: $white;
   }
}

/* /end */

/* THE FLIP EFFECT */

/* entire container, keeps perspective */
.flip-container {
	perspective: 1000px;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
      cursor: pointer;
	}

.flip-container, .front, .back {
   height: 200px;
   width: 400px;
   right: 2px;
   margin-left: 30px;
}

.flipper {
	transition: 0.5s;
	transform-style: preserve-3d;
	position: relative;
}

.front, .back {
	backface-visibility: hidden;
	position: absolute;
}

.front {
	z-index: 2;
	/* firefox 31 */
	transform: rotateY(0deg);
}

.back{
   background-color: $black;
}

.back {
	transform: rotateY(180deg);
}

.vertical.flip-container {
	position: relative;
}

	.vertical .back {
		transform: rotateX(180deg);
	}

	.vertical.flip-container .flipper {
		transform-origin: 100% 400x;
	}

	.vertical.flip-container:hover .flipper {
		transform: rotateX(-180deg);
	}
</style>
<!DOCTYPE html>
<html lang="en">
    <div >
<div class="flip-container centered" >
    <div class="flipper"  >
       <div class="front"></div>
       <div class="back" >
           @yield('contenu')
       <div class="font-a-icons" >
          <div class="icon-group">
             <span class="bold">Name:</span><span class="contact"></span>
          <div class="icon-group">
              <span class="bold"> </span><a class="contact" href="mailto:hello@petrusrex.com" target="_top"></a>
          </div>
          <div class="icon-group">
             <a class="contact" href="http://www.petrusrex.com" target="_blank"></a>
          </div>
       </div>
    </div>
    <a class="icon-box" href="https://www.facebook.com/xpetrus.rex" target="_blank"><i class="fa fa-facebook"></i></a>
    <a class="icon-box" href="https://twitter.com/Gothburz" target="_blank"><i class="fa fa-twitter"></i></a>
    <a class="icon-box" href="https://plus.google.com/u/0/+PetrusRex/" target="_blank"><i class="fa fa-google-plus"></i></a>
    <a class="icon-box" href="https://www.linkedin.com/in/xpetrus" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a class="icon-box" href="https://codepen.io/Gothburz/" target="_blank"><i class="fa fa-codepen"></i></a>
    <a class="icon-box" href="https://github.com/Gothburz" target="_blank"><i class="fa fa-github"></i></a>
       </div>
    </div>
 </div>

</div>
</html>

