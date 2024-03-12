<link rel="stylesheet" href="styles.css">
<style>
    
  
  .footer {
    background-color: black;
    color: #fefefe;
    position: static;
    /* width: 100%; */
    bottom: 0;
    left: 0;
  }
  
  .footer .heading {
    color: #fefefe;
    max-width: 1010px;
    width: 90%;
    text-transform: uppercase;
    margin: 0 auto;
    margin-bottom: 3rem;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  }
  
  .footer .content {
    display: flex;
    justify-content: space-evenly;
    margin: 1.5rem;
  }
  
  .footer .content p {
    margin-bottom: 1.3rem;
  }
  
  .footer .content a {
    text-decoration: none;
    color: #fefefe;
  }
  
  .footer .content a:hover {
    border-bottom: 1px solid #971717;
  }
  
  .footer .content h4 {
    margin-bottom: 1.3rem;
    font-size: 19px;
  }
  
  footer {
    text-align: center;
    margin-bottom: 2rem;
  }
  
  footer hr {
    margin: 2rem 0;
  }
  
  @media (max-width: 767px) {
    .footer .content {
      display: flex;
      flex-direction: column;
      font-size: 14px;
    }
  
    .footer {
      position: unset;
    }
  }
  
  @media (min-width: 768px) and (max-width: 1024px) {
    .footer .content,
    .footer {
      font-size: 14px;
    }
  }
  
  @media (orientation: landscape) and (max-height: 500px) {
    .footer {
      position: unset;
    }
}
@keyframes slideInLeft {
    0% {
        transform: translateX(-100%);
    }

    100% {
        transform: translateX(0);
    }
}
/* for user info */
@keyframes U_I_S{
0%
{
   top: -200px; opacity: 0%;
}
75%
{
top: 50px; opacity: 25%;
}
100%
{
   top: 9%; opacity: 100%;
   
}

}
/* for usser info */
@keyframes U_I_N {
0%
{
   top: 9%; opacity: 1000%;

}
75%
{
top: 50px; opacity: 50%;
}
100%
{

top: -200px; opacity:0%;

}
}
.animation {
         /* animation: STEMP 0.2s normal forwards ease-in-out  ; */
     }

     header {
         animation: 1s ease-out 0s 1 slideInLeft;
         background: #666;
         padding: 40px;
     }
     </style>
     <style>
     .BLACK {
         height: 15px;
         width: 15px;
         background-color: black;
         border-radius: 50%;
         display: inline-block;
     }

     .WHITE {
         height: 15px;
         width: 15px;
         background-color: white;
         border-radius: 50%;
         display: inline-block;
     }

     .GREY {
         height: 15px;
         width: 15px;
         background-color: GREY;
         border-radius: 50%;
         display: inline-block;
     }

     .GRADIANT {
         height: 15px;
         width: 15px;
         background: rgb(121, 90, 173);
         background: linear-gradient(90deg, rgba(121, 90, 173, 1) 0%, rgba(128, 153, 187, 1) 48%, rgba(97, 144, 67, 1) 100%);
         font-weight: 700;
         color: black;
         border-radius: 50%;
         display: inline-block;
     }

     .NAVY {
         height: 15px;
         width: 15px;
         background: NAVY;
         border-radius: 50%;
         display: inline-block;
     }

     .GREEN_BLACK {
         height: 15px;
         width: 15px;
         background: rgb(142, 235, 28);
         background: linear-gradient(0deg, rgba(142, 235, 28, 1) 0%, rgba(0, 0, 0, 1) 100%);
         border-radius: 50%;
         display: inline-block;
     }

     .WHITE_BLUE {
         height: 15px;
         width: 15px;
         background: rgb(41, 222, 214);
         background: linear-gradient(0deg, rgba(41, 222, 214, 1) 2%, rgba(255, 255, 255, 1) 50%);
         border-radius: 50%;
         display: inline-block;


     }

     .GREEN_BLACK {
         height: 15px;
         background: rgb(142, 222, 41);
         background: linear-gradient(0deg, rgba(142, 222, 41, 1) 13%, rgba(148, 162, 30, 1) 27%, rgba(0, 0, 0, 1) 65%);
         border-radius: 50%;
         display: inline-block;

     }

     .WHITE_BLACK {
         height: 15px;
         width: 15px;
         background: rgb(255, 255, 255);
         background: linear-gradient(0deg, rgba(255, 255, 255, 1) 13%, rgba(0, 0, 0, 1) 65%);
         border-radius: 50%;
         display: inline-block;
     }

     .GREY_SKYBLUE {
         height: 15px;
         width: 15px;
         border-radius: 50%;
         display: inline-block;


         background: rgb(192, 192, 192);
         background: linear-gradient(0deg, rgba(192, 192, 192, 1) 13%, rgba(112, 200, 245, 1) 65%);
     }

     .MULTI {

         height: 15px;
         width: 15px;
         border-radius: 50%;

         display: inline-block;

         background: rgb(112, 245, 214);
         background: radial-gradient(circle, rgba(112, 245, 214, 1) 0%, rgba(255, 186, 55, 1) 45%, rgba(240, 9, 9, 1) 100%);
     }
     
.letter-image {
	position: absolute;
	top: 20%;
	left: 45%;
	width: 10px;
	height: 10px;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	cursor: pointer;
}

.animated-mail {
	position: absolute;
	height: 150px;
	width: 200px;
	-webkit-transition: .4s;
	-moz-transition: .4s;
	transition: .4s;
	
	.body {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0 0 100px 200px;
		border-color: transparent transparent #e95f55 transparent;
		z-index: 2;
	}
	
	.top-fold {
		position: absolute;
		top: 50px;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 100px 0 100px;
		-webkit-transform-origin: 50% 0%;
		-webkit-transition: transform .4s .4s, z-index .2s .4s;
		-moz-transform-origin: 50% 0%;
		-moz-transition: transform .4s .4s, z-index .2s .4s;
		transform-origin: 50% 0%;
		transition: transform .4s .4s, z-index .2s .4s;
		border-color: #cf4a43 transparent transparent transparent;
		z-index: 2;
	}
	
	.back-fold {
		position: absolute;
		bottom: 0;
		width: 200px;
		height: 100px;
		background: #cf4a43;
		z-index: 0;
	}
	
	.left-fold {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 0 50px 100px;
		border-color: transparent transparent transparent #e15349;
		z-index: 2;
	}
	
	.letter {
		left: 20px;
		bottom: 0px;
		position: absolute;
		width: 160px;
		height: 60px;
		background: white;
		z-index: 1;
		overflow: hidden;
		-webkit-transition: .4s .2s;
		-moz-transition: .4s .2s;
		transition: .4s .2s;
		
		.letter-border {
			height: 10px;
			width: 100%;
      background: repeating-linear-gradient(
        -45deg,
        #cb5a5e,
        #cb5a5e 8px,
        transparent 8px,
        transparent 18px
      );
		}
		
		.letter-title {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 40%;
			background: #cb5a5e;
		}
		.letter-context {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 20%;
			background: #cb5a5e;
		}
		
		.letter-stamp {
			margin-top: 30px;
			margin-left: 120px;
			border-radius: 100%;
			height: 30px;
			width: 30px;
			background: #cb5a5e;
			opacity: 0.3;
		}
	}
}


	.letter-image:hover {
		.animated-mail {
			transform: translateY(50px);
			-webkit-transform: translateY(50px);
			-moz-transform: translateY(50px);
		}
		
		.animated-mail .top-fold {
			transition: transform .4s, z-index .2s;
			transform: rotateX(180deg);
			-webkit-transition: transform .4s, z-index .2s;
			-webkit-transform: rotateX(180deg);
			-moz-transition: transform .4s, z-index .2s;
			-moz-transform: rotateX(180deg);
			z-index: 0;
		}
		
		.animated-mail .letter {
			height: 180px;
		}
		
	} 
    .cta {
  border: none;
  background: none;
  cursor: pointer;
}

.cta span {
  padding-bottom: 7px;
  letter-spacing: 4px;
  font-size: 14px;
  padding-right: 15px;
  text-transform: uppercase;
}

.cta svg {
  transform: translateX(-8px);
  transition: all 0.3s ease;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active svg {
  transform: scale(0.9);
}

.hover-underline-animation {
  position: relative;
  color: white;
  padding-bottom: 5px;
}

.hover-underline-animation:after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: white;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.cta:hover .hover-underline-animation:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
.card1{
  position: relative;
  width: 240px;
  height: 254px;
  background-color: #000;
  display: flex;
  flex-direction: column;
  /* justify-content: end; */
  padding: 12px;
  /* gap: 12px; */
  border-radius: 8px;
  cursor: pointer;
}

.card1::before {
  content: '';
  position: absolute;
  inset: 0;
  left: -5px;
  margin: auto;
  width: 250px;
  height: 264px;
  border-radius: 10px;
  background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100% );
  z-index: -10;
  pointer-events: none;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card1::after {
  content: "";
  z-index: -1;
  position: absolute;
  inset: 0;
  background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100% );
  transform: translate3d(0, 0, 0) scale(0.95);
  filter: blur(20px);
}

.heading {
  font-size: 20px;
  text-transform: capitalize;
  font-weight: 700;
}

.card1 p:not(.heading) {
  font-size: 14px;
}

.card1 p:last-child {
  color: #e81cff;
  font-weight: 600;
}

.card1:hover::after {
  filter: blur(30px);
}

.card1:hover::before {
  transform: rotate(-90deg) scaleX(1.34) scaleY(0.77);
}

</style>