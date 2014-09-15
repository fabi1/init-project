<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Project frontend library</title>
        <meta name="description" content="Project frontend library">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="../css/app.css">
        <link rel="stylesheet" href="css/library.css">
        <script src="../js/vendor/modernizr-2.8.1.min.js"></script>
    </head>
    <body>
        <!--[if lte IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/?locale=es">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav id="nav">
            <ul>
                <li><a href="index.php" id="home">Home</a></li>
                <li><a href="index.php?p=colors" id="colors">Colors</a></li>
                <li><a href="index.php?p=buttons" id="buttons">Buttons</a></li>
            </ul>
        </nav>
        <div id="page" class="page-library">
            <h1>This is the frontend library for project.</h1>
        </div>
        <script>        
            document.addEventListener('DOMContentLoaded', function() {
                // Navigation
                [].forEach.call(document.querySelectorAll('#nav a'), function(el) {
                    el.addEventListener('click', function(e) {
                        e.preventDefault();
                        
                        var winhref = window.location.href;
                        var winpageArr = winhref.split("?p=");
                        if(winpageArr[1]) {
                            var curr = document.getElementById(winpageArr[1]);
                            curr.className = "";
                        }
                        el.className = "active";
                        
                        var href = el.getAttribute("href");
                        if(href.indexOf("?p=")==-1){
                            document.location.href = href;
                            return false;
                        } 
                        var pageArr = href.split("?p=");
                        History.pushState({state:1}, "Page", "?p="+pageArr[1]);
                        var pageCont = document.getElementById("page");
                        var xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                                pageCont.innerHTML = xhr.responseText;
                                var myScripts = pageCont.getElementsByTagName("script");
                                if (myScripts.length > 0) {
                                    eval(myScripts[0].innerHTML);
                                }
                            }
                        };
                        xhr.open("GET", "pages/"+pageArr[1]+".php", true);
                        xhr.send(null);                              
                    });
                });
                // Load page if $GET["p"]
                var page = "<?php echo $p; ?>";
                if(page!=""){
                    document.getElementById(page).click();
                }
            });
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </body>
</html>
