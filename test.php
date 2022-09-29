<?php 
 include "header.php";
?>

<style>
    
    

        .center{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        p{
            
            font-size: 18px;
            display: block;
           
        }

        .char{
            font-size: 18px;
          
            animation: an 1s ease-out 1 both;
            display: inline-block;
        }

        @keyframes an{
            from{
                opacity: 0;
                transform: perspective(500px) translate3d(-35px, -40px, -150px) rotate3d(1, -1, 0, 35deg);
            }
            to{
                opacity: 1;
                transform: perspective(500px) translate3d(0, 0, 0);
            }
        }
.mylink{
  position: absolute;
  z-index: 150;
  bottom: 0;
  right: 0;
  width: 100%;
  text-align: right;
  padding: .6rem;
}

.mylink a{
  font-family: Calibri;
  color: #fff;
  border-bottom: 1px solid #fff;
  opacity: .5;
  transition: opacity .3s;
  text-decoration: none
}
.mylink a:hover{
  opacity: 1
}
</style>



        <p id="text"><b>S AND S ASSOCIATIONS</b> เป็นผู้ติดตั้งระบบที่ทันสมัย ที่มีความเชี่ยวชาญทางด้านเทคนิคและผลิตภัณฑ์ เพื่อตอบสนองต่อความต้องการของธุรกิจ เราเน้นหลักในด้านการรักษาความปลอดภัยเครือข่ายทั้งหมด โดยการเสนอแนะโซลูชั่น ที่เหมาะสมกับธุรกิจและองค์กรนั้น ๆ ด้วยการนำผลิตภัณ์และบริการที่ทันสมัยออกมานำเสนออยู่เสมอ
        รวมทั้งให้คำแนะนำเกี่ยวกับการประยุกต์ใช้เทคโนโลยีใหม่ เพื่อตอบสนองความต้องการของลูกค้าที่เกิดขึ้นใหม่
        ผลิตภัณฑ์ที่เราเลือกใช้นั้น ล้วนเป็นผลิตภัณฑ์ที่มีคุณภาพและมาด้วยประสิทธิภาพ
</p>
    

  


  <script>
            var text = document.getElementById('text');
        var newDom = '';
        var animationDelay = 6;

        for(let i = 0; i < text.innerText.length; i++)
        {
            newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i])+ '</span>';
        }

        text.innerHTML = newDom;
        var length = text.children.length;

        for(let i = 0; i < length; i++)
        {
            text.children[i].style['animation-delay'] = animationDelay * i + 'ms';
        }
    
  </script>