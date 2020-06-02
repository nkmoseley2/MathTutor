<?php
?>
<html>
<head><script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

    <style>

    </style>
 

 
    <style>
        body {
            background-image: url('otherfiles/BasicMathBackground.png');
            background-repeat: no-repeat;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            left:190px;
            top:138px;
            background-color: 000000;
            color:ffffff;
            border-color: ffffff;
            border-width: thin;
            border-style: double;
            font-family: "Noto Sans Mono CJK JP Bold";
            font-size: larger;
            padding-left: 100px;
            align-content: center;
            z-index: 4;

        }

        .dropdown-content {
            display: none;
            position: absolute;
            font-family: "Noto Sans";
            background-color: #bcc3fb;
            border-width: thin;
            border-color: white;
            width:200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,15);
            z-index: 4;
            color: #8ddde5;
        }
        .dropdown-content1 {
            display: none;
            position: absolute;
            top:30px;
            width:200px;
            font-family: "Noto Sans";
            background-color: #bcc3fb;
            border-color: white;
            border-width: thin;

            padding:4px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,8);
            color: #33a5b4;
            z-index: 4;
        }
        .dropdown-content2 {
            display: none;
            position: absolute;
            font-family: "Noto Sans";
            background-color: #bcc3fb;
                border-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,8);
             color:#33a5b4;
            top:65px;
            width:200px;
            padding:4px;
                           border-width: thin;
            z-index: 4;
        }
        .dropdown-content3 {
                     display: none;
                     position: absolute;
                     font-family: "Noto Sans";
                   border-width: thin;

            color:#33a5b4;
                     background-color: #bcc3fb;
            width:200px;
               border-color: white;
                     box-shadow: 0px 8px 16px 0px rgba(0,0,0,8);
                     top:100px;
                     padding:4px;
                     z-index: 4;
                 }
        .dropdown-content4 {
            display: none;
            position: absolute;
            font-family: "Noto Sans";
            background-color: #bcc3fb;
             border-width: thin;
              border-color: white;
            color:#33a5b4;
            width:200px;
            top:135px;
            padding:4px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,8);

            z-index: 4;
        }
        .centerarea{
            position:absolute;
            left:355px;
            top:215px;
            width:744px;
           

        }
        .backgroundstartstop{
            position:absolute;
            top:130px;
            left:-80px;
            height:60px;
            width: 20px;
            alignment: center;
            background-color: #33a5b4;
        }

        .startstop {
            position:absolute;
            top:360px;
            left:375px;
            height:16px;
            width: 20px;
            alignment: center;
            z-index:4;

        }
        .dropdown:hover .dropdown-content1 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown:hover .dropdown-content2 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown:hover .dropdown-content3 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown:hover .dropdown-content4 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown:hover .dropdown-content1 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown:hover .dropdown-content2 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown:hover .dropdown-content3 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown:hover .dropdown-content4 {
            display: block;
            background-color:#1105b3;
            color:#eaf44a;
        }
        .dropdown .dropdown-content1:hover {
            background-color: #928dfa;
            color: #1a1a19;
        }
        .dropdown .dropdown-content2:hover {
            background-color: #928dfa;
            color: #1a1a19;
        }
        .dropdown .dropdown-content3:hover {
            background-color: #928dfa;
            color: #1a1a19;
        }
        .dropdown .dropdown-content4:hover {
            background-color: #928dfa;
            color: #1a1a19;
        }
        .changeflashcards{
            z-index:4;
        }

                    </style>
 <script>
     $( document ).ready(function() {
         $('#changeflashcards').click(function () {
             $("#myImage").attr("src", "centerframes/centerflashcards.gif")
         });
         $('#playmouse').click(function () {
             $("#myImage").attr("src", "centerframes/centermouse.gif");
             
            
            
         });
         $('#playcount').click(function () {
             $("#myImage").attr("src", "centerframes/centercounting.gif")  //centerframes/centermouse.gif
         });
         $('#doodle').click(function () {
             $("#myImage").attr("src", "centerframes/centerdoodle.png")
		

         });
        
     });
 </script>  
<div class="dropdown">
    <span style>Home</span>

</div>
<div class="dropdown">
    <span>About</span>
    <div class="dropdown-content1">
        <span>About Website</span>
    </div>
</div>
<div class="dropdown">
    <span>Animated examples</span>
    <div class="dropdown-content1" id="changeflashcards">
        <span >Flashcards</span>
    </div>

    <div class="dropdown-content2" id="playmouse">
        <span>Mice Race</span>
    </div>
    <div class="dropdown-content3" id="playcount">
        <span>Addition Simple</span>
    </div>
    <div class="dropdown-content4" id="doodle">
        <span>Math doodle</span>
    </div>

</div>
 <div class="dropdown">
     <span>Foundation Skills</span>
     <div class="dropdown-content1" id="addition">
         <span>Addition</span>
     </div>
     <div class="dropdown-content2" id="subtraction">
         <span>Subtraction</span>
     </div>
     <div class="dropdown-content3" id="subtraction">
          <span>Multiplication</span>
      </div>
      <div class="dropdown-content4" id="division">
           <span>Division</span>
       </div>

 </div>

   <div class="dropdown" style="z-index:5">
       <span>Advanced Aritmetic</span>
       <div class="dropdown-content1" id="longdivision">
           <span>Long Division</span>
       </div>
       <div class="dropdown-content2" id="addingdigits">
           <span>Adding digits</span>
       </div>
       <div class="dropdown-content3" id="multiplying digits">
            <span>Multiply digits</span>
        </div>
        <div class="dropdown-content4" id="subtractingdigits">
             <span>Subtracting digits</span>
         </div>
                                                          
   </div>

 
    </div>
    <!--  
   <div class="dropdown" style="z-index:5;left:50px;top:300px;">
        <span>Other</span>
        <div class="dropdown-content1" id="addition">
            <span>Percentages</span>
        </div>
        <div class="dropdown-content2" id="subtraction">
            <span>Counting Money</span>
        </div>
        <div class="dropdown-content3" id="subtraction">
            <span>Shapes/Geometry</span>
        </div>
        <div class="dropdown-content4" id="division">
            <span>Our Earth</span>
        </div>
-->

<span style="position:absolute;left:0px;top:178px; width:150px;">
    <img src="otherfiles/blackbar.png">
</span>
<span style="position:absolute;left:1124px;top:178px;width:150px">
    <img src="otherfiles/blackbar.png">
</span>

<div class="centerarea">
    
    <img id="myImage" style="z-index:3;"  src="centerframes/centerdoodle.png" style="width:640px;height:400px;">
</div>

<span class="startstop">
    <button  onclick="document.getElementById('myImage').src='centerframes/centerflashcardsstill.png'"><img src="StartStopRewind/1.png"></button>
    <button onclick="document.getElementById('myImage').src='centerframes/centerflashcards.gif'"><img src="StartStopRewind/1play.png"></button>
    <button  onclick="document.getElementById('myImage').src='centerframes/centermousestill.png'"><img src="StartStopRewind/2.png"></button>
    <button  onclick="document.getElementById('myImage').src='centerframes/centermouse.gif'"><img src="StartStopRewind/2play.png"></button>
    <button  onclick="document.getElementById('myImage').src='centerframes/centercountingstill.png'"><img src="StartStopRewind/3.png"></button>
    <button  onclick="document.getElementById('myImage').src='centerframes/centercounting.gif'"><img src="StartStopRewind/3play.png"</button>
    <button  onclick="document.getElementById('myImage').src='centerframes/centerdoodle.png'"><img src="StartStopRewind/4.png"></button>
</span>

</body>
</html>
