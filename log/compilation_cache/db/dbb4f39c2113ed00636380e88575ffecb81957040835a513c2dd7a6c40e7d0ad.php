<?php

/* layout.html */
class __TwigTemplate_0db19fe0d352c92d5caf4ecdce58f6e7899b42e14e9ed8eb7454b78dc78c76a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-cn\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
    <title>Home</title>

    <!--==========Dependency============-->
    <link rel=\"stylesheet\" href=\"/app/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/app/assets/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/app/assets/vendors/owl-carousel/assets/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/app/assets/vendors/magnific-popup/magnific-popup.css\">

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Kanit:500\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic\">
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic\">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>

    <!--==========Theme Styles==========-->
    <link href=\"/app/assets/css/style.css\" rel=\"stylesheet\">
    <link href=\"/app/assets/css/theme/green.css\" rel=\"stylesheet\">

    <!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->
    <!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->
    <!--==========[if lt IE 9]>
    <script src=\"/app/assets/js/html5shiv.min.js\"></script>
    <script src=\"/app/assets/js/respond.min.js\"></script>
    <![endif]==========-->
</head>
<body>
<header class=\"row transparent black header1\" data-spy=\"affix\" data-offset-top=\"0\" id=\"header\">
    <div class=\"container\">
        <div class=\"row top-header\">
            <div class=\"col-sm-4 search-form-col\">
                <form action=\"#\" method=\"get\" class=\"search-form\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><img src=\"/app/assets/images/search-icon-white.png\" alt=\"\"></span>
                        <input type=\"search\" class=\"form-control\" placeholder=\"search\">
                    </div>
                </form>
            </div>
            <div class=\"col-sm-4 logo-col text-center\">
                <a href=\"index/index\"><img src=\"/app/assets/images/logo-white-green.png\" alt=\"\"></a>
            </div>
            <div class=\"col-sm-4 menu-trigger-col\">
                <button class=\"menu-trigger pull-right\">
                    <span class=\"active-page\">home</span>
                    <img src=\"/app/assets/images/menu-align-white.png\" alt=\"\" class=\"icon-burger\">
                    <img src=\"/app/assets/images/menu-close-white.png\" alt=\"\" class=\"icon-cross\">
                </button>
            </div>
        </div>
    </div>
    <div class=\"row menu-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 menu-col\">
                    <div class=\"row\">
                        <ul class=\"nav column-menu black-bg\">
                            <li class=\"active dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Home <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"index/index\">Home Option 1</a></li>
                                    <!--<li><a href=\"index2.html\">Home Option 2</a></li>-->
                                    <!--<li><a href=\"index3.html\">Home Option 3</a></li>-->
                                    <!--<li><a href=\"index4.html\">Home Option 4</a></li>-->
                                    <!--<li><a href=\"index5.html\">Home Option 5</a></li>-->
                                    <!--<li><a href=\"index6.html\">Home Option 6</a></li>-->
                                </ul>
                            </li>
                            <li><a href=\"index/about\">About</a></li>
                            <li><a href=\"index/single\">Blog Single 1</a></li>
                            <li><a href=\"index/single2\">Blog Single 2</a></li>
                        </ul>
                        <ul class=\"nav column-menu black-bg\">
                            <li><a href=\"index/single3\">Blog Single 3</a></li>

                            <li><a href=\"index/contact\">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-4 subscribe-col\">
                    <h5 class=\"widget-title\">subscribe to our newsletter.</h5>
                    <form action=\"#\" method=\"post\" class=\"form-inline subscribe-form\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span>send</span></button>
                    </form>
                    <ul class=\"nav social-nav dark\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook-official\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-envelope\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div>
";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 109
        echo "</div>
<!--Footer-->
<footer class=\"row\" id=\"footer\">
    <div class=\"container\">
        <div class=\"row top-footer\">
            <div class=\"widget col-sm-3 widget-about\">
                <div class=\"row m0\"><a href=\"index/index\"><img src=\"/app/assets/images/logo-black-green.png\" alt=\"\"></a></div>
            </div>
            <div class=\"widget col-sm-5 widget-menu\">
                <div class=\"row\">
                    <ul class=\"nav column-menu white-bg\">
                        <li class=\"active\"><a href=\"index/index\">Home</a></li>
                        <li><a href=\"index/about\">About</a></li>
                        <li><a href=\"index/single\">Blog Single 1</a></li>
                        <li><a href=\"index/single2\">Blog Single 2</a></li>
                    </ul>
                    <ul class=\"nav column-menu white-bg\">
                        <li><a href=\"index/single3\">Blog Single 3</a></li>

                        <li><a href=\"index/contact\">contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"widget col-sm-4 widget-subscribe\">
                <h5 class=\"widget-title\">subscribe to our newsletter.</h5>
                <form action=\"#\" method=\"post\" class=\"form-inline subscribe-form\">
                    <div class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span>send</span></button>
                </form>
            </div>
        </div>
    </div>
</footer>
<!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->
<script src=\"/app/assets/js/jquery-2.2.0.min.js\"></script>
<script src=\"/app/assets/js/bootstrap.min.js\"></script>
<script src=\"/app/assets/vendors/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"/app/assets/vendors/magnific-popup/jquery.magnific-popup.min.js\"></script>
<script src=\"/app/assets/vendors/instafeed/instafeed.min.js\"></script>
<script src=\"/app/assets/vendors/imagesLoaded/imagesloaded.pkgd.min.js\"></script>
<script src=\"/app/assets/vendors/isotope/isotope.pkgd.min.js\"></script>
<script src=\"/app/assets/js/theme.js\"></script>
</body>
</html>
";
    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        // line 107
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  182 => 107,  179 => 106,  129 => 109,  127 => 106,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="zh-cn">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->*/
/*     <title>Home</title>*/
/* */
/*     <!--==========Dependency============-->*/
/*     <link rel="stylesheet" href="/app/assets/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="/app/assets/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="/app/assets/vendors/owl-carousel/assets/owl.carousel.css">*/
/*     <link rel="stylesheet" href="/app/assets/vendors/magnific-popup/magnific-popup.css">*/
/* */
/*     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:500">*/
/*     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic">*/
/*     <link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic">*/
/*     <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>*/
/* */
/*     <!--==========Theme Styles==========-->*/
/*     <link href="/app/assets/css/style.css" rel="stylesheet">*/
/*     <link href="/app/assets/css/theme/green.css" rel="stylesheet">*/
/* */
/*     <!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->*/
/*     <!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->*/
/*     <!--==========[if lt IE 9]>*/
/*     <script src="/app/assets/js/html5shiv.min.js"></script>*/
/*     <script src="/app/assets/js/respond.min.js"></script>*/
/*     <![endif]==========-->*/
/* </head>*/
/* <body>*/
/* <header class="row transparent black header1" data-spy="affix" data-offset-top="0" id="header">*/
/*     <div class="container">*/
/*         <div class="row top-header">*/
/*             <div class="col-sm-4 search-form-col">*/
/*                 <form action="#" method="get" class="search-form">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon"><img src="/app/assets/images/search-icon-white.png" alt=""></span>*/
/*                         <input type="search" class="form-control" placeholder="search">*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="col-sm-4 logo-col text-center">*/
/*                 <a href="index/index"><img src="/app/assets/images/logo-white-green.png" alt=""></a>*/
/*             </div>*/
/*             <div class="col-sm-4 menu-trigger-col">*/
/*                 <button class="menu-trigger pull-right">*/
/*                     <span class="active-page">home</span>*/
/*                     <img src="/app/assets/images/menu-align-white.png" alt="" class="icon-burger">*/
/*                     <img src="/app/assets/images/menu-close-white.png" alt="" class="icon-cross">*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row menu-section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 menu-col">*/
/*                     <div class="row">*/
/*                         <ul class="nav column-menu black-bg">*/
/*                             <li class="active dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="index/index">Home Option 1</a></li>*/
/*                                     <!--<li><a href="index2.html">Home Option 2</a></li>-->*/
/*                                     <!--<li><a href="index3.html">Home Option 3</a></li>-->*/
/*                                     <!--<li><a href="index4.html">Home Option 4</a></li>-->*/
/*                                     <!--<li><a href="index5.html">Home Option 5</a></li>-->*/
/*                                     <!--<li><a href="index6.html">Home Option 6</a></li>-->*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="index/about">About</a></li>*/
/*                             <li><a href="index/single">Blog Single 1</a></li>*/
/*                             <li><a href="index/single2">Blog Single 2</a></li>*/
/*                         </ul>*/
/*                         <ul class="nav column-menu black-bg">*/
/*                             <li><a href="index/single3">Blog Single 3</a></li>*/
/* */
/*                             <li><a href="index/contact">contact</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-4 subscribe-col">*/
/*                     <h5 class="widget-title">subscribe to our newsletter.</h5>*/
/*                     <form action="#" method="post" class="form-inline subscribe-form">*/
/*                         <div class="form-group">*/
/*                             <input type="email" class="form-control" placeholder="Email">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>*/
/*                     </form>*/
/*                     <ul class="nav social-nav dark">*/
/*                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* <div>*/
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* </div>*/
/* <!--Footer-->*/
/* <footer class="row" id="footer">*/
/*     <div class="container">*/
/*         <div class="row top-footer">*/
/*             <div class="widget col-sm-3 widget-about">*/
/*                 <div class="row m0"><a href="index/index"><img src="/app/assets/images/logo-black-green.png" alt=""></a></div>*/
/*             </div>*/
/*             <div class="widget col-sm-5 widget-menu">*/
/*                 <div class="row">*/
/*                     <ul class="nav column-menu white-bg">*/
/*                         <li class="active"><a href="index/index">Home</a></li>*/
/*                         <li><a href="index/about">About</a></li>*/
/*                         <li><a href="index/single">Blog Single 1</a></li>*/
/*                         <li><a href="index/single2">Blog Single 2</a></li>*/
/*                     </ul>*/
/*                     <ul class="nav column-menu white-bg">*/
/*                         <li><a href="index/single3">Blog Single 3</a></li>*/
/* */
/*                         <li><a href="index/contact">contact</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="widget col-sm-4 widget-subscribe">*/
/*                 <h5 class="widget-title">subscribe to our newsletter.</h5>*/
/*                 <form action="#" method="post" class="form-inline subscribe-form">*/
/*                     <div class="form-group">*/
/*                         <input type="email" class="form-control" placeholder="Email">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->*/
/* <script src="/app/assets/js/jquery-2.2.0.min.js"></script>*/
/* <script src="/app/assets/js/bootstrap.min.js"></script>*/
/* <script src="/app/assets/vendors/owl-carousel/owl.carousel.min.js"></script>*/
/* <script src="/app/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>*/
/* <script src="/app/assets/vendors/instafeed/instafeed.min.js"></script>*/
/* <script src="/app/assets/vendors/imagesLoaded/imagesloaded.pkgd.min.js"></script>*/
/* <script src="/app/assets/vendors/isotope/isotope.pkgd.min.js"></script>*/
/* <script src="/app/assets/js/theme.js"></script>*/
/* </body>*/
/* </html>*/
/* */
