<style>
        
.btn-two {
  color: #FFF;
  transition: all 0.5s;
  position: relative; 
}
.btn-two span {
  z-index: 2; 
  display: block;
  position: absolute;
  width: 100%;
  height: 100%; 
}
.btn-two::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  border: 1px solid rgba(255,255,255,0.2);
  background-color: rgba(255,255,255,0.1);
}
.btn-two::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  border: 1px solid rgba(255,255,255,0.2);
  background-color: rgba(255,255,255,0.1);
}
.btn-two:hover::before {
  transform: rotate(-45deg);
  background-color: rgba(255,255,255,0);
}
.btn-two:hover::after {
  transform: rotate(45deg);
  background-color: rgba(255,255,255,0);
}


/* 
========================
      BUTTON THREE
========================
*/
.btn-three {
  color: #FFF;
  transition: all 0.5s;
  position: relative;

}
.btn-three::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  border-radius: 10px;
  padding-right:4%;
  padding-left:4%;

  background-color: rgba(255,255,255,0.1);
  transition: all 0.3s;
}
.btn-three:hover::before {
  opacity: 0 ;
  transform: scale(0.5,0.5);
}
.btn-three::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 10px;
  padding-right:4%;
  padding-left:4%;

  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s;
  border: 1px solid rgba(255,255,255,0.5);
  transform: scale(1.2,1.2);
}
.btn-three:hover::after {
  opacity: 1;
  transform: scale(1,1);
}
    /* === removing default button style ===*/
    .button {
        margin: 0;
        height: auto;
        background: transparent;
        padding: 0;
        border: none;
    }

    /* button styling */
    .button {
        --border-right: 6px;
        --text-stroke-color: rgba(255, 255, 255, 0.6);
        --animation-color: #333;
        --fs-size: 2em;
        letter-spacing: 3px;
        text-decoration: none;
        font-size: var(--fs-size);
        font-family: "Arial";
        position: relative;
        text-transform: uppercase;
        color: transparent;
        -webkit-text-stroke: 1px var(--text-stroke-color);
    }

    /* this is the text, when you hover on button */
    .hover-text {
        position: absolute;
        box-sizing: border-box;
        content: attr(data-text);
        color: var(--animation-color);
        width: 0%;
        inset: 0;
        border-right: var(--border-right) solid var(--animation-color);
        overflow: hidden;
        transition: 0.5s;
        -webkit-text-stroke: 1px var(--animation-color);
    }

    /* hover */
    .button:hover .hover-text {
        width: 100%;
        filter: drop-shadow(0 5px 23px var(--animation-color))
    }

    @keyframes F_LIST {

        0% {
            opacity: 10%;
            top: -1rem;
        }

        100% {
            opacity: 100%;

            top: 0rem;
        }


    }

    @keyframes HIncrees {
        0% {
            opacity: 0%;

            height: 0rem;
        }

        100% {
            opacity: 100%;

            height: 10rem;
        }
    }

    .Drop_Ul {
        opacity: 0%;
        height: 0rem;
        animation: HIncrees 0.5s ease-out 0s 1 forwards normal;
    }

    @keyframes S_LIST {

        0% {
            opacity: 10%;
            top: -1rem;
        }

        100% {
            opacity: 100%;

            top: 0px;
        }


    }

    @keyframes T_LIST {

        0% {
            opacity: 10%;
            top: -1rem;
        }

        100% {
            opacity: 100%;

            top: 0px;
        }



    }

    @keyframes FO_LIST {

        0% {
            opacity: 0%;
            top: -1rem;
        }

        50% {
            opacity: 0%;
        }

        100% {
            opacity: 100%;

            top: 0px;
        }



    }

    .FI_Li {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        animation: F_LIST 0.5s forwards 0.4s ease normal;
    }

    .S_Li {
        animation: S_LIST 0.5s forwards 0.5s ease normal;
    }

    .T_Li {
        animation: T_LIST 0.5s forwards 0.6s ease normal;
    }

    .F_Li {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;

        animation: FO_LIST 0.5s forwards 0.7s ease normal;
    }
</style>





<nav class="navbar navbar-expand-lg navbar-dark rounded" style="background-color: #6b9080;">
    <div class="container-fluid">
        <a class="navbar-brand " href="index.php"  >
            <button class="button" data-text="Awesome">
                <span class="actual-text">&nbsp;BRAVO&nbsp;</span>
                <span aria-hidden="true" class="hover-text">&nbsp;BRAVO&nbsp;</span>
            </button>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ps-2" id="navbarSupportedContent">
            <?php
            if (basename($_SERVER['PHP_SELF']) == "index.php") {
                ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle btn1 text-center " href="#" data-bs-toggle="dropdown"> SHOES </a>
                        <ul class="dropdown-menu   text-center mt-1  Drop_Ul" id="Drop_Ul"
                            style=" border:0 ; background: none;">
                            <li style="position: relative;  opacity: 0%; " class="bg-light FI_Li"><a
                                    class="dropdown-item fs-5 text-center" href="SPORTS.php"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS
                                    <img src="icon/sport icon.png" class="SHUE_ICON"
                                        style="mix-blend-mode: hard-light; position: relative; width: 40px;  margin-inline-start: -0.8rem; animation: ICON 2s 0s forwards infinite ;"
                                        alt=""> </a></li>
                            <li style="position: relative;  opacity: 0%;" class="S_Li bg-light"><a
                                    class="dropdown-item fs-5" href="CROCS.html"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS
                                </a></li>
                            <li style="position: relative;  opacity: 0%;" class="T_Li bg-light"><a
                                    class="dropdown-item fs-5" href="Formal.php"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> FORMAL
                                </a></li>
                            <li style="position: relative;  opacity: 0%;" class="F_Li bg-light"><a
                                    class="dropdown-item fs-5" href="CASUAL.php"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-2 ">
                        <a href="#" id="cloth" class="nav-link dropdown-toggle  btn1 text-center "> CLOTHING </a>
                        <ul class="dropdown-menu text-center mt-1 Drop_Ul" id="Drop_Li"
                            style=" border:0 ; background: none;">
                            <li style="position: relative;  opacity: 0%;" class="FI_Li bg-light"><a
                                    class="dropdown-item fs-5" href="SPORTS C.php"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS
                                </a></li>
                            <li style="position: relative;  opacity: 0%;" class="S_Li bg-light"><a
                                    class="dropdown-item fs-5" href="CASUAL C.php"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL
                                </a></li>
                            <li style="position: relative;  opacity: 0%;" class="T_Li bg-light"><a
                                    class="dropdown-item fs-5" href="FORMAL C.PHP"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> FORMAL
                                </a></li>
                            <li style="position: relative;  opacity: 0%;" class="F_Li bg-light"><a
                                    class="dropdown-item fs-5" href="FORMAL C.PHP"
                                    style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> FORMAL
                                </a></li>

                        </ul>
                    </li>
                </ul>
                <?php

            } else
            ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="main_Ul">
                <?php if (basename($_SERVER['PHP_SELF']) == "FORMAL.php" || basename($_SERVER['PHP_SELF']) == "Formal.php") { ?>
                    <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CROCS.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS</a>
                    </li>
                    <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-light" href="CASUAL.php  "
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL
                        </a></li>
                    <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS
                        </a></li>
                <?php } elseif (basename($_SERVER['PHP_SELF']) == "CASUAL.php") { ?>
                    <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CROCS.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS</a>
                    </li>
                    <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-light" href="FORMAL.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">FORMAL </a>
                    </li>
                    <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS
                        </a></li>
                    <?php
                } elseif (basename($_SERVER['PHP_SELF']) == "CROCS.php") { ?>
                    <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CASUAL.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL</a>
                    </li>
                    <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-liht" href="FORMAL.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">FORMAL </a>
                    </li>
                    <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS
                        </a></li>
                <?php } elseif (basename($_SERVER['PHP_SELF']) == "SPORTS.php") { ?>
                    <li class="ms-1 nav-link rounded-3 cta "><a class="btn hover-underline-animation" id="SNEAKERS"
                            href="CROCS.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS</a>
                    </li>
                    <li class="ms-1 nav-link rounded-3 cta "><a class="btn  hover-underline-animation" href="FORMAL.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">FORMAL </a>
                    </li>
                    <li class="ms-1 nav-link rounded-3 cta "><a class="btn  hover-underline-animation" href="CASUAL.php"
                            style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL
                        </a></li>
                <?php } ?>

            </ul>
            <?php
            if (isset($_SESSION['admin']) && basename($_SERVER['PHP_SELF']) != "Admin_index.php" && basename($_SERVER['PHP_SELF'])!="CheckUsers.php") { ?>
                <ul class="navbar-nav  mb-2 mb-lg-0" id="main_Ul">
                    <li class='nav-link'>
                    <a href="Admin/Admin_index.php">    
                    <div class="box-3 ">

                            <div class="btn btn-three">

                                <span>
                                    Admin
                                </span>

                            </div>

                        </div>
                        </a>
                    </li>
                </ul>
            <?php } ?>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="B R A V O  Shues" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            <ul class="navbar-nav px-3 pe-0">
                <?php
                if (!$con) {

                    die("connection faild" . $con->connect_error);
                } else {

                    $sql = "SELECT * FROM reg";
                    $result = $con->query($sql);
                    if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                if ($row['EMAIL'] === $_SESSION['email']) {
                                    if ($row['PASS'] === $_SESSION['pass']) {
                                        if (basename($_SERVER['PHP_SELF']) != "Mycart.php") {
                                            ?>


                                            <li class="me-1 btn-sm btn-outline-success  nav-item">
                                                <div class='text-light'>
                                                    <form action="CART.php" method='post'>
                                                        <input type="hidden" name="PName" value='<?php echo basename(__FILE__); ?>'>
                                                        <button type="submit" name='LOGOUT' class='mt-1 px-3 btn btn-sm text-light'>LOGOUT</button>
                                                    </form>

                                                </div>
                                            </li>

                                        <?php }
                                    } else { ?>
                                        <li class="nav-item btn-sm btn-outline-success me-1 text-center h-25">
                                            <a href="signAcc.html" class="btn btn-sm p-0">
                                                <div class="container-sm text-light">
                                                    <p class="me-2" style="font-size: 0.65rem; display:inline;"><span> hey,sign in </span>
                                                    </p>
                                                    <p class="mb-0" style="font-weight: 700; font-size: 0.90rem;"> Account </p>
                                                </div>
                                            </a>
                                        </li>



                                    <?php }
                                }
                            }
                        }

                    } else { ?>
                        <li class="nav-item btn-sm btn-outline-success me-1 text-center h-25">
                            <a href="signAcc.html" class="btn btn-sm p-0">
                                <div class="container-sm text-light">
                                    <p class="me-2" style="font-size: 0.65rem; display:inline;"><span> hey,sign in </span>
                                    </p>
                                    <p class="mb-0" style="font-weight: 700; font-size: 0.90rem;"> Account </p>
                                </div>
                            </a>
                        </li>



                    <?php }
                }
                ?>
                <!-- <li class="outline nav-item dropdown" id="OtherPERENT">
                            <a class="ps-3 nav-link rounded-3 text-light" id="others" href="#">OTHER <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul style="" id="OtherOpt" class=" mt-2 dropdown-menu" style='width:5px;'>
                                <li class="">
                                    <a href="" class="pe-0 me-auto ms-auto dropdown-item container w-75 fs-6 p-0 "><span>
                                            Contact </span> <i class="bi bi-microsoft-teams"></i> </a>
                                </li>
                                <li>

                                </li> -->
            </ul>
            </li>

            <?php
            if (!$con) {

                die("connection faild" . $con->connect_error);
            } else {

                $sql = "SELECT * FROM reg";
                $result = $con->query($sql);
                if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            if ($row['EMAIL'] === $_SESSION['email']) {
                                if ($row['PASS'] === $_SESSION['pass'] && basename($_SERVER['PHP_SELF']) != "Mycart.php" && basename($_SERVER['PHP_SELF']) != "Admin_index.php" ) { ?>

                                    <li class=" me-2 btn-sm btn-outline-success nav-item d-inline-flex" style="width: fit-content;">
                                        <div class="px-2 container-sm pt-0 ">
                                            <a href="UserCarts/Mycart.php" class="">
                                                <div class="btn btn-sm">

                                                    <p class="text-light mb-0 d-grid">
                                                        <span style="font-size: 12px;">
                                                            Your Cart
                                                        </span>

                                                        <span class="">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                class="bi bi-cart" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                            </svg>
                                                        </span>

                                                    </p>
                                                </div>

                                            </a>
                                        </div>
                                    </li>
                                    <li class=' me-2 btn-sm   btn-outline-success nav-item d-inline' id='PROFILE'>
                                        <button class=' text-light btn pt-0  mb-0 pb-0  '>
                                            PROFILE
                                        </button>
                                        <h6 class='text-light text-center m-0 p-0 d-none'>
                                            <i class="bi bi-arrow-bar-down"></i>
                                        </h6>
                                    </li>
                                <?php }
                            }
                        }
                    }
                }
            } ?>
            </ul>
        </div>

    </div>

</nav>

<div id='USER_INFO'
    class='d-none container-fluid border border border-top-0 border-end-0 rounded-bottom d-block p-0  float-end'
    style='height: 0%; width:fit-content;  position: absolute; z-index: 1; left: 1270px;  '>
    <?php

    $email = $_SESSION['email'];
    $USER = "SELECT * FROM reg WHERE EMAIL='$email'";
    $result = $con->query($USER);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {




            ?>
            <div class="card1">

                <div class="text-light" style='  font-family: "Cabin", sans-serif;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    font-variation-settings:
        "wdth" 87.5;'>
                    <!-- <div class="profile ">
    <img src="" class="" style="border-radius:50% " height="50px" width="50px" alt="">
    </div> -->

                    <h6 class="d-inline-flex mb-0">
                        <span name="MAIL BOX" style="width: fit-content;margin-top: 3%;height:fit-content;" class="">
                            <i class="bi bi-envelope "></i> -
                        </span>
                        <span class=" ms-1 mt-1 " >
                            <?php echo $row['EMAIL']; ?>
                            <hr>
                        </span>
                    </h6>
                    <h6 class="d-inline-flex">
                        <span>
                            <i class="bi bi-person-fill"></i> -
                        </span>
                        <span>
                            &nbsp;
                            <?php echo $row['F_NAME']; ?>&nbsp;
                            <?php echo $row['L_NAME']; ?>
                        </span>
                    </h6>
                </div>
                </p>
            </div>
        <?php
        }
    }
    ?>
</div>

<nav id="nav2" class="avbar navbar-light  rounded-pill w-25 me-auto ms-auto p1 mt-1">
    <!-- As a link -->
    <div class="container-fluid text-center p-1">
        <h1
            class="ms-auto me-auto  navbar-brand  text-offset-2 text-underline-opacity-25 text-underline-opacity-100-hover">
            <?php
            if (basename($_SERVER['PHP_SELF']) == "CASUAL.php") {
                echo "CASUAL";
            } elseif (basename($_SERVER['PHP_SELF']) == "FORMAL.php") {
                echo "FORMAL";
            } elseif (basename($_SERVER['PHP_SELF']) == "CROCS.php") {
                echo "CROCS";
            } elseif (basename($_SERVER['PHP_SELF']) == "SPORTS.php") {
                echo "SPORTS";
            }
            ?>
        </h1>
    </div>
    <?php

    ?>
</nav>