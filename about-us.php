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
    img.a{
       width: 100%;
       height: auto;
    }
</style>
<h2>
    <span>COMPANY</span>
    <span>Profile</span>

</h2>
<p>
    <b>S AND S ASSOCIATIONS</b> เป็นผู้ติดตั้งระบบที่ทันสมัย ที่มีความเชี่ยวชาญทางด้านเทคนิคและผลิตภัณฑ์ 
    เพื่อตอบสนองต่อความต้องการของธุรกิจ เราเน้นหลักในด้านการรักษาความปลอดภัยเครือข่ายทั้งหมด 
    โดยการเสนอแนะโซลูชั่น ที่เหมาะสมกับธุรกิจและองค์กรนั้น ๆ ด้วยการนำผลิตภัณ์และบริการที่ทันสมัยออกมานำเสนออยู่เสมอ
    รวมทั้งให้คำแนะนำเกี่ยวกับการประยุกต์ใช้เทคโนโลยีใหม่ เพื่อตอบสนองความต้องการของลูกค้าที่เกิดขึ้นใหม่
    ผลิตภัณฑ์ที่เราเลือกใช้นั้น ล้วนเป็นผลิตภัณฑ์ที่มีคุณภาพและมาด้วยประสิทธิภาพ
</p>
<center>
<img  class="a" src="imgs/all-logo.png" while=" 100%" height="150px">
</center>
<pre>
<b>ชื่อผู้เสียภาษี:</b> บริษัท เอส แอนด์ เอส แอชโซซิเอชั่น จำกัด
<b>ที่อยู่ :</b> 468/9-10 ซ. ลาดพร้าว 130 (มหาดไทย 2) คลองจั่น บางกะปิ กรุงเทพฯ 10240
<b>เลขประจำตัวผู้เสียภาษี :</b> 0105554034542
</pre>
<?php  include "endder.php"?>