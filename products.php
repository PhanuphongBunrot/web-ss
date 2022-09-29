<?php
include "header.php"
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
<h2>
    <span>OUR</span>
    <span>products</span>

</h2>
<p>
    <b>S AND S ASSOCIATIONS </b>เป็นผู้ติดตั้งระบบที่ทันสมัย ที่มีความเชี่ยวชาญทางด้านเทคนิคและผลิตภัณฑ์ เพื่อตอบสนองต่อความต้องการของธุรกิจ เราเน้นหลักในด้านการรักษาความปลอดภัยเครือข่ายทั้งหมด โดยการเสนอแนะโซลูชั่น
    ที่เหมาะสมกับธุรกิจและองค์กรนั้น ๆ ด้วยการนำผลิตภัณ์และบริการที่ทันสมัยออกมานำเสนออยู่เสมอ
    รวมทั้งให้คำแนะนำเกี่ยวกับการประยุกต์ใช้เทคโนโลยีใหม่ เพื่อตอบสนองความต้องการของลูกค้าที่เกิดขึ้นใหม่
    ผลิตภัณฑ์ที่เราเลือกใช้นั้น ล้วนเป็นผลิตภัณฑ์ที่มีคุณภาพและมาด้วยประสิทธิภาพ
</p>
<div class="row">

    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
            <p style="font-size :20px;text-align:center ">Firewall </p>
            <hr>
            <ul style="color:green">
                <li> Paloatto Networks </li>
                <li> yberoam </li>
                <li> WatchGuard </li>
                <li> Gateprotect </li>

            </ul>
        </div>

    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
            <p style="font-size :20px;text-align:center ">Log management</p>
            <hr>
            <ul style="color:green">
                <li> Core Intercept </li>
                <li> Cinxi </li>
                <li> Redlog </li>


            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">

            <p style="font-size :20px;text-align:center ">Internet Activity Recorder</p>
            <hr>
            <ul style="color:green">
                <li> Nusoft </li>


            </ul>

        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Antivirus</p>
        <hr>
            <ul style="color:green">
                <li> Kaspersky </li>
                <li> G DATA Antivirus </li>
                <li> Panda Antivirus </li>

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Web Conference</p>
        <hr>
            <ul style="color:green" >
                <li >SessionCall</li>
               
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Load Balance Server</p>
            <hr>
            <ul style="color:green">
                <li> F5 </li>
               

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">NAC (Network Access Control)</p>
        <hr>
            <ul style="color:green">
                <li> Infoexpress </li>
                <li> Trustwave </li>

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Web Application Firewall & Database Security</p>
        <hr>
            <ul>
                <li style="color:green"> Imperva </li>
                

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Web & Email Security</p>
        <hr>
            <ul style="color:green">
                <li> eSafe </li>
                <li> WatchGuard </li>

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Collaboration System</p>
        <hr>
            <ul>
                <li style="color:green"> Open-Xchange Edition </li>
                

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Proxy</p>
        <hr>
            <ul style="color:green">
                <li> Blue Coat </li>
                <li> Cachebox </li>

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Bandwidth Management </p>
        <hr>
            <ul style="color:green">
                <li> Allot </li>
                <li> IPOQUE </li>
                <li> Packet Logic </li>

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Bandwidth Management </p>
        <hr>
            <ul style="color:green">
                <li> Allot </li>
                <li> IPOQUE </li>
                <li> Packet Logic </li>

            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Storage </p>
        <hr>
            <ul style="color:green">
                <li> Fusion-io ioXtreme </li>
                
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">WAN OPTIMIZATION </p>
        <hr>
            <ul style="color:green">
                <li> Riverbed </li>
                
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class=" shadow p-3 mb-5 bg-body rounded ">
        <p style="font-size :20px;text-align:center ">Content Security </p>
        <hr>
            <ul style="color:green">
                <li> esafe </li>
                
            </ul>
        </div>
    </div>
</div>
<?php  include "endder.php"?>