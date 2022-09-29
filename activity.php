<?php
include "header.php";
$db = mysqli_connect("localhost", "root", "", "web-ssit");
?>

<style>
    .mySlides {
        display: none;
    }

    @import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

    * {
        padding: 0;
        margin: 0;
    }



    h1 {

        font-family: 'Poppins', sans-serif;
        max-width: 40ch;
        color: #57B107;
        transform: scale(0.94);
        animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
    }

    h3 {

        font-family: 'Poppins', sans-serif;
        max-width: 40ch;
        color: #57B107;
        transform: scale(0.94);
        animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
    }

    h2 {

        font-family: 'Poppins', sans-serif;
        max-width: 40ch;
        color: #57B107;
        transform: scale(0.94);
        animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
    }


    @keyframes scale {
        100% {
            transform: scale(1);
        }
    }

    span {
        display: inline-block;
        opacity: 0;
        filter: blur(4px);
    }

    span:nth-child(1) {
        animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(2) {
        animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(3) {
        animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(4) {
        animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(5) {
        animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(6) {
        animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(7) {
        animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(8) {
        animation: fade-in 0.8s 0.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(9) {
        animation: fade-in 0.8s 0.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(10) {
        animation: fade-in 0.8s 1s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(11) {
        animation: fade-in 0.8s 1.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(12) {
        animation: fade-in 0.8s 1.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(13) {
        animation: fade-in 0.8s 1.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(14) {
        animation: fade-in 0.8s 1.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(15) {
        animation: fade-in 0.8s 1.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(16) {
        animation: fade-in 0.8s 1.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(17) {
        animation: fade-in 0.8s 1.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    span:nth-child(18) {
        animation: fade-in 0.8s 1.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
    }

    @keyframes fade-in {
        100% {
            opacity: 1;
            filter: blur(0);
        }
    }

    .si {
        width: 100px;
        height: 100px;
    }
</style>
<style>
    h1 {
        margin: 0;
        font-weight: 400;
        font-size: 35px;
    }

    h1 span {
        font-family: "Mali", cursive;
        font-weight: bold;
        color: #7a306c;
    }

    .link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80%;
        margin: 30px auto 0;
    }

    .link a {
        transition-property: all;
        transition-duration: 0.2s;
        transition-timing-function: linear;
        transition-delay: 0s;
        display: inline-flex;
        align-items: center;
        margin-right: 20px;
        font-size: 17px;
        color: #1f1f1f;
        text-decoration: none;
    }

    .link a:last-child {
        margin-right: 0;
    }

    .link a:hover {
        color: #7a306c;
    }

    .link a i {
        color: #7a306c;
        margin-right: 5px;
    }



    /* effects styles !!!YOU NEED THEM */
    /* don't forget to add your own colors and parameters */


    .portfolio-item {
        position: relative;
        overflow: hidden;
        width: auto;
        height: 300px;

    }

    .portfolio-item img {
        position: absolute;
        top: 50%;
        left: 50%;
        width: auto;
        height: auto;
        min-width: 100%;
        min-height: 100%;
        max-width: 200%;
        max-height: 200%;
        transform: translate(-50%, -50%);
    }

    .portfolio-item__info {
        position: absolute;
        top: 7px;
        left: 7px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: calc(100% - 2 * 7px);
        height: calc(100% - 2 * 7px);
        background-color: rgba(255, 255, 255, 0.7);
    }

    .portfolio-item__header {
        position: relative;
        margin: 0 0 20px 0;
        padding: 15px 0;
        font-size: 22px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .portfolio-item__header:after {
        position: absolute;
        left: 0;
        bottom: 0;
        display: block;
        height: 2px;
        width: 100%;
        content: "";
        background-color: #8d909b;
    }

    .portfolio-item__links {
        display: flex;
    }

    .portfolio-item__link-block {
        position: relative;
        width: 35px;
        height: 35px;
        margin-right: 10px;
    }

    .portfolio-item__link-block:last-child {
        margin-right: 0;
    }

    .portfolio-item__link {
        transition-property: all;
        transition-duration: 0.2s;
        transition-timing-function: linear;
        transition-delay: 0s;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        color: #101010;
        text-decoration: none;
        border: 1px solid #101010;
        border-radius: 50%;
    }

    .portfolio-item__link:hover {
        color: #fff;
        background-color: #101010;
    }


    /* EFFECT #4 STYLES */
    .portfolio-item--eff4 .portfolio-item__info {
        transform: scale(0.4);
        opacity: 0;
    }

    .portfolio-item--eff4 .portfolio-item__header {
        transform: scale(1.3);
        opacity: 0;
    }

    .portfolio-item--eff4 .portfolio-item__header:after {
        transform: scaleX(1.3);
        opacity: 0;
    }

    .portfolio-item--eff4 .portfolio-item__link-block {
        transform: scale(0);
        opacity: 0;
    }

    .portfolio-item--eff4:hover .portfolio-item__info {
        transition-property: all;
        transition-duration: 0.3s;
        transition-timing-function: linear;
        transition-delay: 0s;
        transform: scale(1);
        opacity: 1;
    }

    .portfolio-item--eff4:hover .portfolio-item__header {
        transition-property: all;
        transition-duration: 0.2s;
        transition-timing-function: linear;
        transition-delay: 0.45s;
        transform: scale(1);
        opacity: 1;
    }

    .portfolio-item--eff4:hover .portfolio-item__header:after {
        transition-property: all;
        transition-duration: 0.2s;
        transition-timing-function: linear;
        transition-delay: 0.65s;
        transform: scaleX(1);
        opacity: 1;
    }

    .portfolio-item--eff4:hover .portfolio-item__link-block {
        transform: scale(1);
        opacity: 1;
    }

    .portfolio-item--eff4:hover .portfolio-item__link-block:first-child {
        transition-property: all;
        transition-duration: 0.2s;
        transition-timing-function: linear;
        transition-delay: 0.85s;
    }

    .portfolio-item--eff4:hover .portfolio-item__link-block:nth-child(2) {
        transition-property: all;
        transition-duration: 0.2s;
        transition-timing-function: linear;
        transition-delay: 0.95s;
    }

    .portfolio-item__image {
        width: 20px;
    }
</style>
<h2>
    <span>Activity</span>

</h2>


<div class="container">


    <div class="content-block">



        <!-- effect #4-->




        <div class="portfolio-effect">
            <div class="row">
                <?php
                $query = " select * from performance ";
                $result = mysqli_query($db, $query);

                while ($data = mysqli_fetch_assoc($result)) {
                    if ($data['Type'] == "กิจกรรม") {
                       
                        

                ?>

                        <div class="col-md-4">
                            <div class=" shadow p-3 mb-5 bg-body rounded  ">
                                  <center><h4> <?php echo $data['Heading'];?></h4></center>
                                  
                                  <br>
                                <div class="portfolio-item portfolio-effect__item portfolio-item--eff4">

                                    <img class="portfolio-item__image" src="uploads/<?php echo $data['filename']; ?>" alt="Portfolio Item" width="1" height="1">

                                    <div class="portfolio-item__info">

                                        <h3 class="portfolio-item__header">ดูเพิ่มเติม</h3>

                                        <div class="portfolio-item__links">

                                            <div class="portfolio-item__link-block">

                                                <a class="portfolio-item__link" href="page.php?key=<?php echo $data["id"]; ?>" title="Link Title">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                        <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                                                        <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                                                    </svg>

                                                </a>

                                            </div>



                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                <?php
                    }
                } 
                
                ?>
            </div>



        </div>



        <!-- effect #5-->

    </div>
</div>





<?php
include "endder.php";
?>