<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jylo.io</title>
    <!-- Load MUI -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="//cdn.muicss.com/mui-0.9.36/extra/mui-colors.min.css">
    <script src="//cdn.muicss.com/mui-0.9.36/extra/mui-combined.min.js"></script>
    <link rel="shortcut icon" src="">
    <!-- Quicksand Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Material Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
    <!-- Custom CSS -->
  </head>

	<style>
	/***************
	 * Common Config
	 ***************/
   a:active{
     outline: 0;
     border: none;
     -moz-outline-style: none
   }
   a:focus{
     outline: 0;
     border: none;
     -moz-outline-style: none
   }

	img {
	    height: auto;
      width: 200px;
	}
	section{
	  margin-top: 25px;
	  margin-bottom: 25px;
	}
	.parallax {
	  /* The image used */
	  background-image: url("https://hdwallsource.com/img/2014/8/lime-green-wallpaper-21075-21611-hd-wallpapers.jpg");
	  /* Set a specific height */
	  height: auto;
	  padding-top: 20px;
	  padding-bottom: 50px;
	  font-size:12pt;
	  /* Create the parallax scrolling effect */
	  background-attachment: fixed;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	}

  .parallax-cover{
    /* The image used */
    background-image: url("http://comdigits.com/wp-content/uploads/2017/06/green-wallpaper-2.jpg");
    /* Set a specific height */
    height: auto;
    padding-top: 50px;
    padding-bottom: 150px;
    font-size:12pt;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .green-tea-btn{
    background-color: #8BC34A;
    color: #33691E;
  }

  .green-tea-btn:hover{
    background-color: #DCEDC8;
    color: #8BC34A;
  }


/**/
.footMenu{
  display: none;
}
.footLink{
  margin-left: 10px;
  margin-right: 10px;
  text-decoration: none;
  font-size: 13pt;
}
a:active{
  text-decoration: none;
}
a:visited{
  text-decoration: none;
}
a:focus{
  text-decoration: none;
}

table .footMenu{
  margin: 0 auto;
  text-align: center;
}

@media screen and (max-width: 400px) {
  .appLink{
    display: none;
  }
  .footMenu{
    display: inline;
    width: 100%;
    text-align: center;
    box-sizing: border-box;
    padding-top: 10px;
    height: 50px;
    background-color: #DCEDC8;
    border-top: 2px solid E0E0E0;
    border-bottom: 1px solid E0E0E0;
    left: 0;
    bottom: 0;
    position: fixed;
  }
}

.nav{
  transition: all .5s ease;
  font-size: 12px;
  font-family: 'Quicksand', sans-serif;
  width: 100%;
  z-index: 100;
  position: absolute;
  /* bottom: 0; */
  left: 0;
  letter-spacing: 2px;
  line-height: 100px;
  -webkit-transition-property: background-color, box-shadow,;
    transition-property: background-color, box-shadow, line-height, height;
    -webkit-transition-timing-function: cubic-bezier(.78,.13,.15,.86);
    transition-timing-function: cubic-bezier(.78,.13,.15,.86);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
  .brand{
    /* padding: 15px 60px; */
    /* line-height: 30px; */
    padding-left: 60px;
    padding-right: 60px;
    display: inline-block;
    float: left;
    font-size: 20px;
    font-family: 'Quicksand', cursive;
    -webkit-transition-property: background-color, box-shadow, line-height, height;
    transition-property: background-color, box-shadow, line-height, height;
    -webkit-transition-timing-function: cubic-bezier(.78,.13,.15,.86);
    transition-timing-function: cubic-bezier(.78,.13,.15,.86);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;


    /* padding-right: 60px; */
  }
  ul {
    margin: 0;
    text-transform: uppercase;
    li{
      text-align: center;
      display: inline-block;
      list-style: none;
      padding: 15px 15px;
      cursor: pointer;
      line-height: 30px;
      &:hover a{
        font-weight: bold;
      }
      a{
        color: #eee;
        text-decoration: none;
      }
    }
  }
}

.sticky {
    position: fixed !important;
    top: 0;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
    /* box-shadow: 0 4px 5px -2px rgba(0,0,0,0.22), 0 2px 1px -1px rgba(0,0,0,0.05); */
    background-color:#8BC34A;
    line-height: 30px;
    .brand{
      line-height: 60px;
    }
}
.navbar{
  -webkit-transition: -webkit-transform 150ms;
  transition: transform 150ms;
}

	/***************
	 *Text Animation
	 **************/
	 .anim {
	   animation-duration: 2.5s;
	   animation-fill-mode: both;
	   animation-iteration-count: infinite;
	 }
	 @keyframes bounce {
	   0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
	   40% {transform: translateY(-30px);}
	   60% {transform: translateY(-15px);}
	 }
	 .bounce {
	   animation-name: bounce;
	 }
	 @keyframes flash {
	   0%, 50%, 100% {opacity: 1;}
	   25%, 75% {opacity: 0;}
	 }
	 .flash {
	   animation-name: flash;
	 }
	 @keyframes pulse {
	   0% {transform: scale(1);}
	   50% {transform: scale(1.1);}
	   100% {transform: scale(1);}
	 }
	 .pulse {
	   animation-name: pulse;
	   animation-duration: 1s;
	 }
	 @keyframes rubberBand {
	   0% {transform: scale(1);}
	   30% {transform: scaleX(1.25) scaleY(0.75);}
	   40% {transform: scaleX(0.75) scaleY(1.25);}
	   60% {transform: scaleX(1.15) scaleY(0.85);}
	   100% {transform: scale(1);}
	 }
	 .rubberBand {
	   animation-name: rubberBand;
	 }
	 @keyframes shake {
	   0%, 100% {transform: translateX(0);}
	   10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);}
	   20%, 40%, 60%, 80% {transform: translateX(10px);}
	 }
	 .shake {
	   animation-name: shake;
	 }
	 @keyframes swing {
	   20% {transform: rotate(15deg);}
	   40% {transform: rotate(-10deg);}
	   60% {transform: rotate(5deg);}
	   80% {transform: rotate(-5deg);}
	   100% {transform: rotate(0deg);}
	 }
	 .swing {
	   transform-origin: top center;
	   animation-name: swing;
	 }
	 @keyframes wobble {
	   0% {transform: translateX(0%);}
	   15% {transform: translateX(-25%) rotate(-5deg);}
	   30% {transform: translateX(20%) rotate(3deg);}
	   45% {transform: translateX(-15%) rotate(-3deg);}
	   60% {transform: translateX(10%) rotate(2deg);}
	   75% {transform: translateX(-5%) rotate(-1deg);}
	   100% {transform: translateX(0%);}
	 }
	 .wobble {
	   animation-name: wobble;
	 }
	 @keyframes flip {
	   0% {transform: perspective(400px) translateZ(0) rotateY(0) scale(1);animation-timing-function: ease-out;}
	   40% {transform: perspective(400px) translateZ(150px) rotateY(170deg) scale(1);animation-timing-function: ease-out;}
	   50% {transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);animation-timing-function: ease-in;}
	   80% {transform: perspective(400px) translateZ(0) rotateY(360deg) scale(.95);animation-timing-function: ease-in;}
	   100% {transform: perspective(400px) translateZ(0) rotateY(360deg) scale(1);animation-timing-function: ease-in;}
	 }
	 .anim.flip {
	   backface-visibility: visible;
	   animation-name: flip;
	 }
	 @keyframes lightSpeedIn {
	   0% {transform: translateX(100%) skewX(-30deg);opacity: 0;}
	   60% {transform: translateX(-20%) skewX(30deg);opacity: 1;}
	   80% {transform: translateX(0%) skewX(-15deg);opacity: 1;}
	   100% {transform: translateX(0%) skewX(0deg);opacity: 1;}
	 }
	 .lightSpeedIn {
	   animation-name: lightSpeedIn;
	   animation-timing-function: ease-out;
	 }
	 @keyframes rollIn {
	   0% {opacity: 0;transform: translateX(-100%) rotate(-120deg);}
	   100% {opacity: 1;transform: translateX(0px) rotate(0deg);}
	 }
	 .rollIn {
	   animation-name: rollIn;
	 }
	 @keyframes rotateIn {
	   0% {transform-origin: center center;transform: rotate(-200deg);opacity: 0;}
	   100% {transform-origin: center center;transform: rotate(0);opacity: 1;}
	 }
	 .rotateIn {
	   animation-name: rotateIn;
	 }
	 @keyframes hinge {
	   0% {transform: rotate(0);transform-origin: top left;animation-timing-function: ease-in-out;}
	   20%, 60% {transform: rotate(80deg);transform-origin: top left;animation-timing-function: ease-in-out;}
	   40% {transform: rotate(60deg);transform-origin: top left;animation-timing-function: ease-in-out;}
	   80% {transform: rotate(60deg) translateY(0);transform-origin: top left;animation-timing-function: ease-in-out;}
	   100% {transform: translateY(700px);}
	 }
	 .hinge {
	   margin: 20px;
	   animation-name: hinge;
	 }
	/***************
	 *Zoom Animation
	 ***************/
	.zoom{
	  transition: transform 3s;
	}
	.zoom:hover {
	  transform: scale(0.95); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
	}

	/************************
	 * Green Tea Color List
	 * Dark         : #33691E
	 * Normal       : #8BC34A
	 * Light        : #DCEDC8
	 * Super-Light  : #F1F8E9
	 ************************/
	.dark-green-tea-bg{
	  background-color: #33691E;
	}
	.dark-green-tea-txt{
	 color: #33691E;
	}
	.green-tea-bg{
	  background-color: #8BC34A;
	}
	.green-tea-txt{
	  color: #8BC34A;
	}
	.light-green-tea-bg{
	  background-color:#DCEDC8;
	}
	.light-green-tea-txt{
	  color:#DCEDC8;
	}
	.super-light-green-tea-bg{
	  background-color:#F1F8E9;
	}
	.super-light-green-tea-txt{
	  color:#F1F8E9;
	}

	/*************
	 *MUI CSS Edit
	 *************/
	.mui-row-center{
	  vertical-align: middle;
	}
	.mui-box{
	  margin-left: auto;
	  margin-right: auto;
	}
	.mui-container-box{
	  margin: 5px;
	  height: 250px;
	  width: 360px;
	  border: solid;
	  border-width: thin;
	  border-radius: 10px;
	  border-color: #DCEDC8;
	}
	.mui-container-box:hover{
	  margin: 5px;
	  height: 250px;
	  width: 360px;
	  border: solid;
	  border-width: thin;
	  border-radius: 10px;
	  border-color: #33691E;
	}
  .service-container-box{
    margin: 5px;
    height: 100%;
    width: 360px;
    border: solid;
    border-width: thin;
    border-radius: 10px;
    border-color: #DCEDC8;
  }
  .service-container-box:hover{
    margin: 5px;
    height: 100%;
    width: 360px;
    border: solid;
    border-width: thin;
    border-radius: 10px;
    border-color: #33691E;
  }
	/******
	 *Fonts
	 ******/
	@font-face {
	    font-family: Quicksand;
	    src: url(https://fonts.googleapis.com/css?family=Quicksand);
	}

	/*************
	 *MUI Settings
	 *************/
	body {
	  font-family: Quicksand;
	  display: flex;
	  min-height: 100vh;
	  flex-direction: column;
	}

	html,
	body,
	input,
	textarea,
	  buttons {
	    -webkit-font-smoothing: antialiased;
	    -moz-osx-font-smoothing: grayscale;
	    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
	  }

	header {
	  position: fixed;
	  top: 0;
	  right: 0;
	  left: 0;
	  z-index: 2;
	}
	header ul.mui-list--inline {
	  margin-bottom: 0;
	}
	header a {
	  color: #FFF;
	  text-decoration: none;
	}
	header a:hover {
	  color: #33691E;
	  text-decoration: none;
	  font-weight: bold;
	}
	header a:active {
	  text-decoration: none;
	}
	header a:focus {
	  text-decoration: none;
	}

	header table {
	  width: 100%;
	}


	/**
	 * Content CSS     */
	#content-wrapper {
	  min-height: 100%;

	  /* sticky footer */
	  box-sizing: border-box;
	  margin-bottom: -100px;
	  padding-bottom: 100px;
	}
	/**
	 * Footer CSS
	 */
	footer {
	  box-sizing: border-box;
	  height: auto;
	  background-color: #DCEDC8;
	  border-top: 1px solid #E0E0E0;
	  padding-top: 10px;
	  left: 0;
	  bottom: 0;
	  width: 100%;
	}
	footer a:hover{
	  text-decoration: none;
	  font-weight: bold;
	}
	</style>
	<body class="super-light-green-tea-bg">
