<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">
<link rel="stylesheet" href="../css/reset.css" media="all">
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
    <div class="width100per">
        <div class="relative">
            <h1 class="">this is mobile site</h1>
            <button class="absolute" id="accordion-menu">CV</button>
        </div>
        <div id="accordion" class="hidden">
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>
    <p>hello mobile</p>

        </div>
    </div>
	<div class="contents">
        <p>背景の位置が0に戻ってしまうのをなんとかしたい</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	</div>
    <iframe style="width: 100%; overflow-x: hidden; height: 200px;" src="iframe.html"></iframe>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
	    <p>hello mobile</p>
</body>
</html>

<style>
.width100per {
    position: fixed !important;
    top: 0;
    left: 0;
    width: 100%;
    height: 50px;
    line-height: 50px;
    background-color: #4E9ABE;
    color: #fff;
    text-align: center;
}
.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}
.right {
    float: right;
}
.left {
    float: left;
}
.relative {
    position: relative;
}
.absolute {
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 15px;
}
.contents {
    margin-top: 80px;
}

.fixed {
    position: fixed;
    width: 100%;
    height: 100%;
}
.open {
    opacity: 1;
    display: block;
    height: 300px;
    background: green;
    overflow-y: scroll;
    z-index: 10;
}
.hidden {display: none;}
.html{
overflow-x: hidden;
}
.body{
overflow-x: hidden;
}
</style>
<script>
$(function(){
    var state = false;
    var scrollpos;

    $('#accordion-menu').on('click', function(){
        $('#accordion').toggleClass("open");
        if(state == false) {
            scrollpos = $(window).scrollTop();
            $('body').addClass('fixed').css({'top': -scrollpos});
            state = true;
            //$('#accordion').fadeIn(800);
            $('#accordion').slideDown(300).queue(function(){
                $('#accordion').removeClass('hidden');
                //alert("false");

            });

        } else {
            $('#accordion').addClass('hidden');
            $('body').removeClass('fixed').css({'top': 0});
            window.scrollTo( 0 , scrollpos );
            state = false;
            //$('#accordion').fadeOut(600);
            $('#accordion').slideUp(300).queue(function(){
                //$('#accordion').addClass('hidden');
                alert("true");

            });
            //$('#accordion').slideUp(300);
            //$('.hidden').addClass('hidden');
        }
    });

});
</script>
