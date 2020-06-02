<?php
?>
<html>
<head><title>Mouse Race</title>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>


<script>
    $( document ).ready(function() {
        console.log( "ready!" );
        $(".runmouse").click(function(){
            $(".mouse").animate({left: '1000px'},25000);
           /* $( ".mymouse" ).each(function(index) {

                /*for (i=1;i<=5;i++)
                {
                    current = index + 1;
                    console.log("current="+current);
                    //if (i == current) {
                        $("#m" + current).style.visibility = "visible";
                    }
                    else {
                        $("#m" + i).style.visibility = "hidden";

                    }
            }*
              });*/


            var intervalId = setInterval(function() {
                $('.container').find('img').each(function(i) {
                    $(this).fadeOut();
                });
            $(this).data('intervalId', intervalId);
            });
    });
    });
</script>

</head>
<body>
    <button type="button" class="runmouse" >Click Me!</button>
    <div class="mouse" style="position:absolute;">
        <div class="container">
            <img class="mymouse" id="m1" style="position:relative;top:0px;left:0px;" src="mice/Frame1.png">
            <img class="mymouse" id="m2" style="position:relative;top:0px;left:0px;" src="mice/Frame2.png">
            <img class="mymouse" id="m3" style="position:relative;top:0px;left:0px;" src="mice/Frame3.png">
            <img class="mymouse" id="m4" style="position:relative;top:0px;left:0px;" src="mice/Frame4.png">
            <img class="mymouse" id="m5" style="position:relative;top:0px;left:0px;" src="mice/Frame5.png">

        </div>
    </div>
</body>
</html>



