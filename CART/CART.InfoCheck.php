<?php
include("ServerConnect.php");

include("Fetch_info.php");
// echo $email.$ITEM_COLOR.$ITEM_NAME.$ITEM_ID.$ITEM_SIZE.$ITEM_PRICE.$_POST['QON'];
// print_r($item);


// $FillData="INSERT INTO shoes_carts values('$email','$UNAME','$ULName','$Uadd','$Ucontry','$Ucontect','$IID','$INAME','$ITYPE','$IColor','$ISize','$IQon','$IPrice')";
// $con->query($FillData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        

        .navbar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            background-color: #2c3e50;
            width: 200px;
            overflow-x: hidden;
            padding-top: 20px;
            transition: 0.3s ease-in-out;
        }

        .navbar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s ease-in-out;
        }

        .navbar a:hover {
            background-color: #34495e;
        }

        .navbar h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .container {
          
            margin-left: 200px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
            font-size: 32px;
        }

        .box {
          background-color: #dedbd2; /* Light Gray */
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;

        
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            animation: fadeInUp 1s ease forwards;
        }
        .box {
          
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }


        .box-title {
            color: #333;
            margin-top: 0;
            margin-bottom: 15px;
            font-weight: 500;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        .item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .item img {
            width: 15rem;
            height: 20rem;
            margin-right: 20px;
            border-radius: 8px;
            border: 2px solid #ddd;
            transition: transform 0.3s ease-in-out, border-color 0.3s ease-in-out;
        }

        .item img:hover {
            transform: rotate(5deg);
            border-color: #ff5722;
        }

        .item-details {
            flex: 1;
        }

        .item-details p {
            margin: 5px 0;
            color: #666;
            font-size: 18px;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .truck-button {
  --color: #fff;
  --background: #2b3044;
  --tick: #16bf78;
  --base: #0d0f18;
  --wheel: #2b3044;
  --wheel-inner: #646b8c;
  --wheel-dot: #fff;
  --back: #6d58ff;
  --back-inner: #362a89;
  --back-inner-shadow: #2d246b;
  --front: #a6accd;
  --front-shadow: #535a79;
  --front-light: #fff8b1;
  --window: #2b3044;
  --window-shadow: #404660;
  --street: #646b8c;
  --street-fill: #404660;
  --box: #dcb97a;
  --box-shadow: #b89b66;
  padding: 12px 0;
  width: 172px;
  cursor: pointer;
  text-align: center;
  position: relative;
  border: none;
  outline: none;
  color: var(--color);
  background: var(--background);
  border-radius: var(--br, 5px);
  -webkit-appearance: none;
  -webkit-tap-highlight-color: transparent;
  transform-style: preserve-3d;
  transform: rotateX(var(--rx, 0deg)) translateZ(0);
  transition: transform 0.5s, border-radius 0.3s linear var(--br-d, 0s);
}
.truck-button:before, .truck-button:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 6px;
  display: block;
  background: var(--b, var(--street));
  transform-origin: 0 100%;
  transform: rotateX(90deg) scaleX(var(--sy, 1));
}
.truck-button:after {
  --sy: var(--progress, 0);
  --b: var(--street-fill);
}
.truck-button .default,
.truck-button .success {
  display: block;
  font-weight: 500;
  font-size: 14px;
  line-height: 24px;
  opacity: var(--o, 1);
  transition: opacity 0.3s;
}
.truck-button .success {
  --o: 0;
  position: absolute;
  top: 12px;
  left: 0;
  right: 0;
}
.truck-button .success svg {
  width: 12px;
  height: 10px;
  display: inline-block;
  vertical-align: top;
  fill: none;
  margin: 7px 0 0 4px;
  stroke: var(--tick);
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 16px;
  stroke-dashoffset: var(--offset, 16px);
  transition: stroke-dashoffset 0.4s ease 0.45s;
}
.truck-button .truck {
  position: absolute;
  width: 72px;
  height: 28px;
  transform: rotateX(90deg) translate3d(var(--truck-x, 4px), calc(var(--truck-y-n, -26) * 1px), 12px);
}
.truck-button .truck:before, .truck-button .truck:after {
  content: "";
  position: absolute;
  bottom: -6px;
  left: var(--l, 18px);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  z-index: 2;
  box-shadow: inset 0 0 0 2px var(--wheel), inset 0 0 0 4px var(--wheel-inner);
  background: var(--wheel-dot);
  transform: translateY(calc(var(--truck-y) * -1px)) translateZ(0);
}
.truck-button .truck:after {
  --l: 54px;
}
.truck-button .truck .wheel,
.truck-button .truck .wheel:before {
  position: absolute;
  bottom: var(--b, -6px);
  left: var(--l, 6px);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: var(--wheel);
  transform: translateZ(0);
}
.truck-button .truck .wheel {
  transform: translateY(calc(var(--truck-y) * -1px)) translateZ(0);
}
.truck-button .truck .wheel:before {
  --l: 35px;
  --b: 0;
  content: "";
}
.truck-button .truck .front,
.truck-button .truck .back,
.truck-button .truck .box {
  position: absolute;
}
.truck-button .truck .back {
  left: 0;
  bottom: 0;
  z-index: 1;
  width: 47px;
  height: 28px;
  border-radius: 1px 1px 0 0;
  background: linear-gradient(68deg, var(--back-inner) 0%, var(--back-inner) 22%, var(--back-inner-shadow) 22.1%, var(--back-inner-shadow) 100%);
}
.truck-button .truck .back:before, .truck-button .truck .back:after {
  content: "";
  position: absolute;
}
.truck-button .truck .back:before {
  left: 11px;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 2;
  border-radius: 0 1px 0 0;
  background: var(--back);
}
.truck-button .truck .back:after {
  border-radius: 1px;
  width: 73px;
  height: 2px;
  left: -1px;
  bottom: -2px;
  background: var(--base);
}
.truck-button .truck .front {
  left: 47px;
  bottom: -1px;
  height: 22px;
  width: 24px;
  -webkit-clip-path: polygon(55% 0, 72% 44%, 100% 58%, 100% 100%, 0 100%, 0 0);
  clip-path: polygon(55% 0, 72% 44%, 100% 58%, 100% 100%, 0 100%, 0 0);
  background: linear-gradient(84deg, var(--front-shadow) 0%, var(--front-shadow) 10%, var(--front) 12%, var(--front) 100%);
}
.truck-button .truck .front:before, .truck-button .truck .front:after {
  content: "";
  position: absolute;
}
.truck-button .truck .front:before {
  width: 7px;
  height: 8px;
  background: #fff;
  left: 7px;
  top: 2px;
  -webkit-clip-path: polygon(0 0, 60% 0%, 100% 100%, 0% 100%);
  clip-path: polygon(0 0, 60% 0%, 100% 100%, 0% 100%);
  background: linear-gradient(59deg, var(--window) 0%, var(--window) 57%, var(--window-shadow) 55%, var(--window-shadow) 100%);
}
.truck-button .truck .front:after {
  width: 3px;
  height: 2px;
  right: 0;
  bottom: 3px;
  background: var(--front-light);
}
.truck-button .truck .box {
  width: 13px;
  height: 13px;
  right: 56px;
  bottom: 0;
  z-index: 1;
  border-radius: 1px;
  overflow: hidden;
  transform: translate(calc(var(--box-x, -24) * 1px), calc(var(--box-y, -6) * 1px)) scale(var(--box-s, 0.5));
  opacity: var(--box-o, 0);
  background: linear-gradient(68deg, var(--box) 0%, var(--box) 50%, var(--box-shadow) 50.2%, var(--box-shadow) 100%);
  background-size: 250% 100%;
  background-position-x: calc(var(--bx, 0) * 1%);
}
.truck-button .truck .box:before, .truck-button .truck .box:after {
  content: "";
  position: absolute;
}
.truck-button .truck .box:before {
  content: "";
  background: rgba(255, 255, 255, 0.2);
  left: 0;
  right: 0;
  top: 6px;
  height: 1px;
}
.truck-button .truck .box:after {
  width: 6px;
  left: 100%;
  top: 0;
  bottom: 0;
  background: var(--back);
  transform: translateX(calc(var(--hx, 0) * 1px));
}
.truck-button.animation {
  --rx: -90deg;
  --br: 0;
}
.truck-button.animation .default {
  --o: 0;
}
.truck-button.animation.done {
  --rx: 0deg;
  --br: 5px;
  --br-d: 0.2s;
}
.truck-button.animation.done .success {
  --o: 1;
  --offset: 0;
}

html {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

* {
  box-sizing: inherit;
}
*:before, *:after {
  box-sizing: inherit;
}
.dribbble {
  position: fixed;
  display: block;
  right: 20px;
  bottom: 20px;
}
.dribbble img {
  display: block;
  height: 28px;
}   

    </style>
</head>
<body style="background: #b0c4b1;">
    <div class="navbar">
        <h2>Menu</h2>
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="container" style="">
        <h2>User Details</h2>

        <div class="box">
            <h3 class="box-title">Carted Items</h3>
            <div class="item">
                <?php 
       $C=$item['COLOR'];
       $id=$item['ID'];
       $ImgFetch="SELECT * FROM img_add WHERE ID='$id' AND COLOR='$C'";
    $Iresult=$con->query($ImgFetch);
    if ($Iresult->num_rows >0)
    {
      while($IAdd=$Iresult->fetch_assoc())
      { 

    ?> 
            
                <img src="<?php echo "../".$IAdd['I_ADD']; ?>" style="background-size:cover;" alt="Item 1">
            <?php }}
            else
            {
              $Iresult=$con->query("SELECT * FROM formal_shoes WHERE ID='$id'");
           if ($Iresult->num_rows > 0)
           {
            while($IAdd=$Iresult->fetch_assoc())
            {
              ?>
                <img src="<?php echo $IAdd['I_ADD']; ?>" style="background-size:cover;" alt="Item 1">

              <?php
            }
          }
        }
?>
                <div class="item-details">
                    <p><strong>Name:</strong> <?php echo $item['NAME'];?></p>
                    <p><strong>ID:</strong> <?php echo $item['ID'];?></p>
                    <p><strong>Color:</strong> <?php echo $item['COLOR'];?></p>
                    <p><strong>Type:</strong> <?php echo $item['TYPE'];?></p>
                    <p><strong>Size:</strong> <?php echo $item['SIZE'];?></p>
                    <p><strong>PRICE:</strong> <span style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">&#8377;</span><?php echo $item['PRICE'];?>/-</p>
                    <p><strong>Quantity:</strong> <?php echo $item['QON'];?></p>
                    <hr>

                    <p style=""><strong>Grand Total:</strong> <span style="color:#333; font-weight:bolder;"><span style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">&#8377;</span><?php echo $item['QON']*$item['PRICE'];?>/- </span></p>
                    <div style="border: 1px solid black; width:25vh; ">

                </div>
                    
                    



                </div>
            </div>

           
        </div>

        <div class="box">
            <h3 class="box-title">User Information</h3>
            <div class="item">
                <div class="item-details">
                    <p><strong>Name:</strong> <?php echo $UNAME." ".$ULName; ?> </p>
                    <p><strong>Address:</strong> <?php echo $Uadd; ?></p>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>

                    <p><strong>Phone Number:</strong> <?php echo $Ucontect;?></p>
                </div>
            </div>
        </div>
        <button class="truck-button">
    <span class="default">Complete Order</span>
    <span class="success">
        Order Placed
        <svg viewbox="0 0 12 10">
            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
        </svg>
    </span>
    <div class="truck">
        <div class="wheel"></div>
        <div class="back"></div>
        <div class="front"></div>
        <div class="box"></div>
    </div>
</button>

    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512–16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  let carSound=new Audio('../sounds/Car Stat.mp3');
    document.querySelectorAll('.truck-button').forEach(button => {
    button.addEventListener('click', e => {
carSound.play();


        e.preventDefault();
        
        let box = button.querySelector('.box'),
            truck = button.querySelector('.truck');
        
        if(!button.classList.contains('done')) {
            
            if(!button.classList.contains('animation')) {

                button.classList.add('animation');

                gsap.to(button, {
                    '--box-s': 1,
                    '--box-o': 1,
                    duration: .3,
                    delay: .5
                });

                gsap.to(box, {
                    x: 0,
                    duration: .4,
                    delay: .7
                });

                gsap.to(button, {
                    '--hx': -5,
                    '--bx': 50,
                    duration: .18,
                    delay: .92
                });

                gsap.to(box, {
                    y: 0,
                    duration: .1,
                    delay: 1.15
                });

                gsap.set(button, {
                    '--truck-y': 0,
                    '--truck-y-n': -26
                });

                gsap.to(button, {
                    '--truck-y': 1,
                    '--truck-y-n': -25,
                    duration: .2,
                    delay: 1.25,
                    onComplete() {
                        gsap.timeline({
                            onComplete() {
                                button.classList.add('done');
                            }
                        }).to(truck, {
                            x: 0,
                            duration: .4
                        }).to(truck, {
                            x: 40,
                            duration: 1
                        }).to(truck, {
                            x: 20,
                            duration: .6
                        }).to(truck, {
                            x: 96,
                            duration: .4
                        });
                        gsap.to(button, {
                            '--progress': 1,
                            duration: 2.4,
                            ease: "power2.in"
                        });
                    }
                });
                
            }
            
        } else {
            button.classList.remove('animation', 'done');
            gsap.set(truck, {
                x: 4
            });
            gsap.set(button, {
                '--progress': 0,
                '--hx': 0,
                '--bx': 0,
                '--box-s': .5,
                '--box-o': 0,
                '--truck-y': 0,
                '--truck-y-n': -26
            });
            gsap.set(box, {
                x: -24,
                y: -6
            });
        }

    });
});
</script>
    <script>
        window.onload = function() {
            var boxes = document.querySelectorAll('.box');
            for (var i = 0; i < boxes.length; i++) {
                boxes[i].classList.add('animate');
            }
        };
    </script>
    <script>
        let ok;
        let Order=document.getElementsByClassName('truck-button')[0];
        Order.addEventListener("click", ()=>{
            setTimeout(function() {
  window.location.href="Cart.inc.php";
}, 5000);

        })
    </script>
</body>
</html>
