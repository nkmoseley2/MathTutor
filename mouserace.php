<?php
?>
<html>
<head><title>Mouse Race</title>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

    <style>

        </style>
<script>
    $( document ).ready(function() {
        console.log( "ready!" );
        $(".runmouse").click(function(){
            $(".mouse").animate({left: '1000px'},25000);
            $( ".mymouse" ).attr( "src", "mice/mouseanimation.gif" );
        });
    });
</script>

</head>
<body>
    <button type="button" class="runmouse" >Click Me!</button>
    <div style="background-color:black;width: 1026px;height:600px;">
    <div class="mouse" style="position:absolute;">
       <img class="mymouse" id="m1" style="position:relative;top:0px;left:0px;" src="mice/Frame1.png">
    </div></div>
</body>
</html>



