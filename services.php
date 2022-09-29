<?php
include "header.php";

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


    h3{
        color: #57B107; 
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

    @import url("https://fonts.googleapis.com/css2?family=Sura:wght@400;700&display=swap");

    :root {
        --src: url(https://images.unsplash.com/photo-1554620121-59e7f3f6e3a4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy);
        --size: 60vmin;
        --space: 8vmin;
        --duration: 300ms;
        --ease-out: cubic-bezier(0.25, 1, 0.5, 1);
        --bounce-out: cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    * {
        box-sizing: border-box;
    }




    .promo {
        position: relative;
        cursor: pointer;
        width: 300px;
        height: 300px;
    }

    .title {
        

        display: flex;
        align-items: center;
        position: absolute;
        left: 0;
        bottom: 0;
        font-size: 50px;
        font-weight: 700;
        line-height: 1.2;
        white-space: nowrap;
        transform: translate(-10%, -50%);
        transition: transform var(--duration) var(--ease-out);
        pointer-events: none;
    }

    .title::after {
        content: attr(data-cta);
        display: inline-block;
        margin-left: 1.5vmin;
        font-size: calc(var(--font-size) / 3.25);
        font-weight: 400;
        letter-spacing: 0.125vmin;
        opacity: 0;
        transform: translateX(-25%);
        transition: transform var(--duration) var(--ease-out),
            opacity var(--duration) var(--ease-out);
    }

    .image-wrapper {
        width: 300px ;
        height: 300px;
        overflow: hidden;
        clip-path: polygon(100% 0, 100% 50%, 100% 100%, 0% 100%, 0 50%, 0% 0%);
        transition: transform var(--duration) var(--ease-out),
            clip-path var(--duration) var(--ease-out);
    }

    .image-wrapper img {
        position: relative;
        width: 120%;
        height: 100%;
        object-fit: cover;
        transform: translateX(-10%);
        transition: transform var(--duration) var(--ease-out);
    }

    .image-wrapper::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--overlay-color);
        mix-blend-mode: multiply;
        opacity: 0;
        transform: translateZ(0);
        transition: opacity var(--duration) var(--ease-out);
    }

    .promo:hover img {
        transform: translateX(0);
    }

    .promo:hover .image-wrapper {
        clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
        transform: translateX(25%);
        transition-timing-function: var(--bounce-out);
    }

    .promo:hover .title {
        transform: translate(5%, -50%);
        transition-timing-function: var(--bounce-out);
    }

    .promo:hover .title::after {
        opacity: 1;
        transform: translateX(0);
        transition-timing-function: var(--bounce-out);
    }

    .promo:hover .image-wrapper::after {
        opacity: 1;
    }
</style>
<h2>
    <span>OUR</span>
    <span>products</span>
</h2>
<p>
    <b>S AND S ASSOCIATIONS</b> เป็นผู้ติดตั้งระบบที่ทันสมัย ที่มีความเชี่ยวชาญทางด้านเทคนิคและผลิตภัณฑ์ เพื่อตอบสนองต่อความต้องการของธุรกิจ บริการของเรามีดังนี้
</p>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-4">
        <div class="promo" style="--overlay-color: hotpink">
            <div class="image-wrapper"><img src="imgs/Fiber-Optic.png"  /></div>
            <h3 class="title" >Fiber Optic</h3>
        </div>
        <div class="promo" style="--overlay-color: yellow">
            <div class="image-wrapper"><img src="imgs/lan.jpeg" /></div>
            <h3 class="title" >Lan</h3>
        </div>
        <div class="promo" style="--overlay-color: dodgerblue">
            <div class="image-wrapper"><img src="imgs/Set-CCTV2.jpg"></div>
            <h3 class="title" >CCTV</h3>
        </div>
        <div class="promo" style="--overlay-color: darkgreen">
            <div class="image-wrapper"><img src="imgs/Telephone.jpg" /></div>
            <h3 class="title" >Telephone</h3>
        </div>
        <div class="promo" style="--overlay-color: dodgerblue">
            <div class="image-wrapper"><img src="imgs/Electrical.jpg"></div>
            <h3 class="title" >Electrical</h3>
        </div>
        <div class="promo" style="--overlay-color: hotpink">
            <div class="image-wrapper"><img src="imgs/IT Consult.jpg"></div>
            <h3 class="title" >	IT Consult</h3>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<?php  include "endder.php"?>