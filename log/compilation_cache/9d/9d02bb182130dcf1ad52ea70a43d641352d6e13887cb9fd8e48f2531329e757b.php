<?php

/* single.html */
class __TwigTemplate_6e3decd7f5d068b44780054a41b5bad532f11be859950ece1c214c791a2c508a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("common/post-header.html", "single.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "common/post-header.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"row content-wrap\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 single-post-contents\">
                <article class=\"single-post-content row m0 post\">
                    <header class=\"row\">
                        <h5 class=\"post-meta\">
                            <a href=\"#\" class=\"date\">";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), (isset($context["get"]) ? $context["get"] : null), array(), "array"), "msgTime", array()), "m"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), (isset($context["get"]) ? $context["get"] : null), array(), "array"), "msgTime", array()), "d"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), (isset($context["get"]) ? $context["get"] : null), array(), "array"), "msgTime", array()), "Y"), "html", null, true);
        echo "</a>
                            <span class=\"post-author\"><i>by</i><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), (isset($context["get"]) ? $context["get"] : null), array(), "array"), "msgUser", array()), "html", null, true);
        echo "</a></span>
                        </h5>
                        <h2 class=\"post-title\">Nature, in the broadest sense, is the natural, physical, or material world or universe.</h2>
                        <div class=\"row\">
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                            <div class=\"response-count pull-right\"><img src=\"/app/assets/images/comment-icon-gray.png\" alt=\"\">5</div>
                        </div>
                    </header>
                    <div class=\"featured-content row m0\">
                        <a href=\"#\"><img src=\"/app/assets/images/posts/6.jpg\" alt=\"\"></a>
                    </div>
                    <div class=\"post-content row\">
                        ";
        // line 25
        echo "                        <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>
                        <br>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                        <br>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <br>
                        <blockquote class=\"has-sign row m0\">
                            <div>
                                <p>If everybody learns this simple art of loving his work, whatever it is, enjoying it without asking for any recognition, we would have more beautiful and celebrating world.</p>
                                <footer>OSHO</footer>
                            </div>
                        </blockquote>
                        <h3>Sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                        <br>
                        <ul class=\"triangle-list nav\">
                            <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
                            <li>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                        </ul>
                        <ul class=\"circle-list nav\">
                            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        </ul>
                        <br>
                        <blockquote class=\"no-sign\">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </blockquote>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class=\"col-sm-6\">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                        <br>
                        <!-- 16:9 aspect ratio -->
                        <div class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Gi3ZT4JttVI\"></iframe>
                        </div>
                        <br>

                        <!-- Place somewhere in the <body> of your page -->
                        <div class=\"thumbCarousel row m0\">
                            <div id=\"slider\" class=\"flexslider\">
                                <ul class=\"slides\">
                                    <li><img src=\"/app/assets/images/posts/gallery/1.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/2.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/3.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/4.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/1.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/2.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/3.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                            <div id=\"carousel\" class=\"flexslider\">
                                <ul class=\"slides\">
                                    <li><img src=\"/app/assets/images/posts/gallery/s1.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/s2.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/s3.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/s4.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/s1.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/s2.jpg\" alt=\"\"></li>
                                    <li><img src=\"/app/assets/images/posts/gallery/s3.jpg\" alt=\"\"></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    ";
        // line 96
        echo "
                    <!-- 标签，完美 -->
                    <div class=\"row m0 tags\">
                        <a href=\"#\" class=\"tag\">music</a>
                        <a href=\"#\" class=\"tag\">tegs</a>
                        <a href=\"#\" class=\"tag\">tegs hover</a>
                    </div>
                    <!--翻页插件-->
                    <ul class=\"pager\">
                        <li>
                            <h4>Previous Articles</h4>
                            <h2 class=\"post-title\"><a href=\"single2.html\">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                        </li>
                        <li>
                            <h4>Next Articles</h4>
                            <h2 class=\"post-title\"><a href=\"single2.html\">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                        </li>
                    </ul>
                    <!-- 评论插件 -->
                    <div class=\"row m0 comments\">
                        <h5 class=\"response-count\">5 comments<a href=\"#comment-form\" class=\"btn btn-primary pull-right\"><span>add comment</span></a></h5>
                        <!--Comments-->
                        <div class=\"media comment\">
                            <div class=\"media-left\">
                                <a href=\"#\"><img src=\"/app/assets/images/posts/c1.jpg\" alt=\"\" class=\"img-circle\"></a>
                            </div>
                            <div class=\"media-body\">
                                <h4><a href=\"#\">Mark Sanders</a></h4>
                                <h5><a href=\"#\" class=\"date\">feb 17, 2016 at 3:30pm</a> | <a href=\"#\" class=\"reply-link\">reply</a></h5>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <!--Comments-->
                                <div class=\"media comment reply\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img src=\"/app/assets/images/posts/c2.jpg\" alt=\"\" class=\"img-circle\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4><a href=\"#\">Mark Sanders</a></h4>
                                        <h5><a href=\"#\" class=\"date\">feb 17, 2016 at 3:30pm</a> | <a href=\"#\" class=\"reply-link\">reply</a></h5>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <!--Comments-->
                                        <div class=\"media comment reply\">
                                            <div class=\"media-left\">
                                                <a href=\"#\"><img src=\"/app/assets/images/posts/c1.jpg\" alt=\"\" class=\"img-circle\"></a>
                                            </div>
                                            <div class=\"media-body\">
                                                <h4><a href=\"#\">Mark Sanders</a></h4>
                                                <h5><a href=\"#\" class=\"date\">feb 17, 2016 at 3:30pm</a> | <a href=\"#\" class=\"reply-link\">reply</a></h5>
                                                <p>Remaining essentially unchanged.</p>
                                                <!--Comments-->
                                                <div class=\"media comment reply\">
                                                    <div class=\"media-left\">
                                                        <a href=\"#\"><img src=\"/app/assets/images/posts/c2.jpg\" alt=\"\" class=\"img-circle\"></a>
                                                    </div>
                                                    <div class=\"media-body\">
                                                        <h4><a href=\"#\">Mark Sanders</a></h4>
                                                        <h5><a href=\"#\" class=\"date\">feb 17, 2016 at 3:30pm</a> | <a href=\"#\" class=\"reply-link\">reply</a></h5>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Comments-->
                            <div class=\"media comment\">
                                <div class=\"media-left\">
                                    <a href=\"#\"><img src=\"/app/assets/images/posts/c1.jpg\" alt=\"\" class=\"img-circle\"></a>
                                </div>
                                <div class=\"media-body\">
                                    <h4><a href=\"#\">Mark Sanders</a></h4>
                                    <h5><a href=\"#\" class=\"date\">feb 17, 2016 at 3:30pm</a> | <a href=\"#\" class=\"reply-link\">reply</a></h5>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action=\"#\" method=\"post\" class=\"comment-form row\" id=\"comment-form\">
                        <h5 class=\"form-title\">leave a reply</h5>
                        <div class=\"form-group col-sm-6\">
                            <label for=\"name\">full name*</label>
                            <input type=\"text\" id=\"name\" class=\"form-control\" placeholder=\"Your name\" required>
                        </div>
                        <div class=\"form-group col-sm-6\">
                            <label for=\"email\">full name*</label>
                            <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Your email address here\" required>
                        </div>
                        <div class=\"form-group col-sm-6\">
                            <label for=\"website\">website</label>
                            <input type=\"url\" id=\"website\" class=\"form-control\" placeholder=\"Your website url\" >
                        </div>
                        <div class=\"form-group col-sm-6\">
                            <label for=\"subject\">subject</label>
                            <input type=\"text\" id=\"subject\" class=\"form-control\" placeholder=\"Write subject here\" required>
                        </div>
                        <div class=\"form-group col-sm-12\">
                            <label for=\"message\">message</label>
                            <textarea name=\"message\" id=\"message\" class=\"form-control\" placeholder=\"Write message here\"></textarea>
                        </div>
                        <div class=\"col-sm-12\">
                            <button type=\"submit\" class=\"btn-primary\"><span>send</span></button>
                            <h5 class=\"pull-right\">*required fields</h5>
                        </div>
                    </form>
                </article>
            </div>
            <div class=\"col-md-4 sidebar\">
                <!--Author Widget-->
                <aside class=\"row m0 widget-author widget\">
                    <div class=\"widget-author-inner row\">
                        <div class=\"author-avatar row\"><a href=\"#\"><img src=\"/app/assets/images/author.png\" alt=\"\" class=\"img-circle\"></a></div>
                        <a href=\"#\"><h2 class=\"author-name\">";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), (isset($context["get"]) ? $context["get"] : null), array(), "array"), "msgUser", array()), "html", null, true);
        echo "</h2></a>
                        <h5 class=\"author-title\">small title</h5>
                        <p>The word nature is derived from the Latin word natura, or \"essential qualities, innate disposition\", and in ancient times, literally meant \"birth\".</p>
                        <a href=\"#\" class=\"know-more\">know more</a>
                    </div>
                    <ul class=\"nav social-nav\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook-official\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-envelope\"></i></a></li>
                    </ul>
                </aside>
                <!--Twitter Widget 推特插件-->
                <!--<aside class=\"row m0 widget widget-twitter\">-->
                    <!--<div class=\"widget-twitter-inner\">-->
                        <!--<h5 class=\"widget-meta\"><i class=\"fa fa-twitter\"></i>Twitter feed <a href=\"http://twitter.com/chivalricblog\">@chivalricblog</a></h5>-->
                        <!--<div class=\"row tweet-texts\">-->
                            <!--<p>Check out new post on my blog <a href=\"http://twitter.com/#natureshot\">#natureshot</a> <a href=\"http://bit.ly/blog\">http://bit.ly/blog</a></p>-->
                        <!--</div>-->
                        <!--<div class=\"row timepast\">1 day ago</div>-->
                    <!--</div>-->
                <!--</aside>-->
                <!--Instagram Widget 一款图片分享插件-->
                <!--<aside class=\"row m0 widget widget-instagram\">-->
                    <!--<div class=\"widget-instagram-inner\">-->
                        <!--<h5 class=\"widget-meta\"><i class=\"fa fa-twitter\"></i>instagram feed <a href=\"http://twitter.com/chivalricblog\">@chivalricblog</a></h5>-->
                        <!--<div id=\"instafeed\"></div>-->
                    <!--</div>-->
                <!--</aside>-->
            </div>
        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "single.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 210,  135 => 96,  63 => 25,  48 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'common/post-header.html' %}*/
/* */
/* {% block content %}*/
/* <section class="row content-wrap">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-8 single-post-contents">*/
/*                 <article class="single-post-content row m0 post">*/
/*                     <header class="row">*/
/*                         <h5 class="post-meta">*/
/*                             <a href="#" class="date">{{data[get].msgTime|date('m')}} {{data[get].msgTime|date('d')}}, {{data[get].msgTime|date('Y')}}</a>*/
/*                             <span class="post-author"><i>by</i><a href="#">{{data[get].msgUser}}</a></span>*/
/*                         </h5>*/
/*                         <h2 class="post-title">Nature, in the broadest sense, is the natural, physical, or material world or universe.</h2>*/
/*                         <div class="row">*/
/*                             <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                             <div class="response-count pull-right"><img src="/app/assets/images/comment-icon-gray.png" alt="">5</div>*/
/*                         </div>*/
/*                     </header>*/
/*                     <div class="featured-content row m0">*/
/*                         <a href="#"><img src="/app/assets/images/posts/6.jpg" alt=""></a>*/
/*                     </div>*/
/*                     <div class="post-content row">*/
/*                         {# 此处带入内容代码 #}*/
/*                         <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>*/
/*                         <br>*/
/*                         <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>*/
/*                         <br>*/
/*                         <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>*/
/*                         <br>*/
/*                         <blockquote class="has-sign row m0">*/
/*                             <div>*/
/*                                 <p>If everybody learns this simple art of loving his work, whatever it is, enjoying it without asking for any recognition, we would have more beautiful and celebrating world.</p>*/
/*                                 <footer>OSHO</footer>*/
/*                             </div>*/
/*                         </blockquote>*/
/*                         <h3>Sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>*/
/*                         <br>*/
/*                         <ul class="triangle-list nav">*/
/*                             <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>*/
/*                             <li>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>*/
/*                         </ul>*/
/*                         <ul class="circle-list nav">*/
/*                             <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>*/
/*                             <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>*/
/*                         </ul>*/
/*                         <br>*/
/*                         <blockquote class="no-sign">*/
/*                             <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>*/
/*                         </blockquote>*/
/*                         <br>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>*/
/*                             </div>*/
/*                             <div class="col-sm-6">*/
/*                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <br>*/
/*                         <!-- 16:9 aspect ratio -->*/
/*                         <div class="embed-responsive embed-responsive-16by9">*/
/*                             <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Gi3ZT4JttVI"></iframe>*/
/*                         </div>*/
/*                         <br>*/
/* */
/*                         <!-- Place somewhere in the <body> of your page -->*/
/*                         <div class="thumbCarousel row m0">*/
/*                             <div id="slider" class="flexslider">*/
/*                                 <ul class="slides">*/
/*                                     <li><img src="/app/assets/images/posts/gallery/1.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/2.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/3.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/4.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/1.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/2.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/3.jpg" alt=""></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div id="carousel" class="flexslider">*/
/*                                 <ul class="slides">*/
/*                                     <li><img src="/app/assets/images/posts/gallery/s1.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/s2.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/s3.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/s4.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/s1.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/s2.jpg" alt=""></li>*/
/*                                     <li><img src="/app/assets/images/posts/gallery/s3.jpg" alt=""></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                         <br>*/
/*                         <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>*/
/*                     </div>*/
/*                     {# 此处带入内容代码end #}*/
/* */
/*                     <!-- 标签，完美 -->*/
/*                     <div class="row m0 tags">*/
/*                         <a href="#" class="tag">music</a>*/
/*                         <a href="#" class="tag">tegs</a>*/
/*                         <a href="#" class="tag">tegs hover</a>*/
/*                     </div>*/
/*                     <!--翻页插件-->*/
/*                     <ul class="pager">*/
/*                         <li>*/
/*                             <h4>Previous Articles</h4>*/
/*                             <h2 class="post-title"><a href="single2.html">Nature, in the broadest sense, is the natural...</a></h2>*/
/*                             <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                         </li>*/
/*                         <li>*/
/*                             <h4>Next Articles</h4>*/
/*                             <h2 class="post-title"><a href="single2.html">Nature, in the broadest sense, is the natural...</a></h2>*/
/*                             <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- 评论插件 -->*/
/*                     <div class="row m0 comments">*/
/*                         <h5 class="response-count">5 comments<a href="#comment-form" class="btn btn-primary pull-right"><span>add comment</span></a></h5>*/
/*                         <!--Comments-->*/
/*                         <div class="media comment">*/
/*                             <div class="media-left">*/
/*                                 <a href="#"><img src="/app/assets/images/posts/c1.jpg" alt="" class="img-circle"></a>*/
/*                             </div>*/
/*                             <div class="media-body">*/
/*                                 <h4><a href="#">Mark Sanders</a></h4>*/
/*                                 <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>*/
/*                                 <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>*/
/*                                 <!--Comments-->*/
/*                                 <div class="media comment reply">*/
/*                                     <div class="media-left">*/
/*                                         <a href="#"><img src="/app/assets/images/posts/c2.jpg" alt="" class="img-circle"></a>*/
/*                                     </div>*/
/*                                     <div class="media-body">*/
/*                                         <h4><a href="#">Mark Sanders</a></h4>*/
/*                                         <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>*/
/*                                         <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>*/
/*                                         <!--Comments-->*/
/*                                         <div class="media comment reply">*/
/*                                             <div class="media-left">*/
/*                                                 <a href="#"><img src="/app/assets/images/posts/c1.jpg" alt="" class="img-circle"></a>*/
/*                                             </div>*/
/*                                             <div class="media-body">*/
/*                                                 <h4><a href="#">Mark Sanders</a></h4>*/
/*                                                 <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>*/
/*                                                 <p>Remaining essentially unchanged.</p>*/
/*                                                 <!--Comments-->*/
/*                                                 <div class="media comment reply">*/
/*                                                     <div class="media-left">*/
/*                                                         <a href="#"><img src="/app/assets/images/posts/c2.jpg" alt="" class="img-circle"></a>*/
/*                                                     </div>*/
/*                                                     <div class="media-body">*/
/*                                                         <h4><a href="#">Mark Sanders</a></h4>*/
/*                                                         <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>*/
/*                                                         <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <!--Comments-->*/
/*                             <div class="media comment">*/
/*                                 <div class="media-left">*/
/*                                     <a href="#"><img src="/app/assets/images/posts/c1.jpg" alt="" class="img-circle"></a>*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <h4><a href="#">Mark Sanders</a></h4>*/
/*                                     <h5><a href="#" class="date">feb 17, 2016 at 3:30pm</a> | <a href="#" class="reply-link">reply</a></h5>*/
/*                                     <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <form action="#" method="post" class="comment-form row" id="comment-form">*/
/*                         <h5 class="form-title">leave a reply</h5>*/
/*                         <div class="form-group col-sm-6">*/
/*                             <label for="name">full name*</label>*/
/*                             <input type="text" id="name" class="form-control" placeholder="Your name" required>*/
/*                         </div>*/
/*                         <div class="form-group col-sm-6">*/
/*                             <label for="email">full name*</label>*/
/*                             <input type="email" id="email" class="form-control" placeholder="Your email address here" required>*/
/*                         </div>*/
/*                         <div class="form-group col-sm-6">*/
/*                             <label for="website">website</label>*/
/*                             <input type="url" id="website" class="form-control" placeholder="Your website url" >*/
/*                         </div>*/
/*                         <div class="form-group col-sm-6">*/
/*                             <label for="subject">subject</label>*/
/*                             <input type="text" id="subject" class="form-control" placeholder="Write subject here" required>*/
/*                         </div>*/
/*                         <div class="form-group col-sm-12">*/
/*                             <label for="message">message</label>*/
/*                             <textarea name="message" id="message" class="form-control" placeholder="Write message here"></textarea>*/
/*                         </div>*/
/*                         <div class="col-sm-12">*/
/*                             <button type="submit" class="btn-primary"><span>send</span></button>*/
/*                             <h5 class="pull-right">*required fields</h5>*/
/*                         </div>*/
/*                     </form>*/
/*                 </article>*/
/*             </div>*/
/*             <div class="col-md-4 sidebar">*/
/*                 <!--Author Widget-->*/
/*                 <aside class="row m0 widget-author widget">*/
/*                     <div class="widget-author-inner row">*/
/*                         <div class="author-avatar row"><a href="#"><img src="/app/assets/images/author.png" alt="" class="img-circle"></a></div>*/
/*                         <a href="#"><h2 class="author-name">{{data[get].msgUser}}</h2></a>*/
/*                         <h5 class="author-title">small title</h5>*/
/*                         <p>The word nature is derived from the Latin word natura, or "essential qualities, innate disposition", and in ancient times, literally meant "birth".</p>*/
/*                         <a href="#" class="know-more">know more</a>*/
/*                     </div>*/
/*                     <ul class="nav social-nav">*/
/*                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>*/
/*                     </ul>*/
/*                 </aside>*/
/*                 <!--Twitter Widget 推特插件-->*/
/*                 <!--<aside class="row m0 widget widget-twitter">-->*/
/*                     <!--<div class="widget-twitter-inner">-->*/
/*                         <!--<h5 class="widget-meta"><i class="fa fa-twitter"></i>Twitter feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>-->*/
/*                         <!--<div class="row tweet-texts">-->*/
/*                             <!--<p>Check out new post on my blog <a href="http://twitter.com/#natureshot">#natureshot</a> <a href="http://bit.ly/blog">http://bit.ly/blog</a></p>-->*/
/*                         <!--</div>-->*/
/*                         <!--<div class="row timepast">1 day ago</div>-->*/
/*                     <!--</div>-->*/
/*                 <!--</aside>-->*/
/*                 <!--Instagram Widget 一款图片分享插件-->*/
/*                 <!--<aside class="row m0 widget widget-instagram">-->*/
/*                     <!--<div class="widget-instagram-inner">-->*/
/*                         <!--<h5 class="widget-meta"><i class="fa fa-twitter"></i>instagram feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>-->*/
/*                         <!--<div id="instafeed"></div>-->*/
/*                     <!--</div>-->*/
/*                 <!--</aside>-->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* {% endblock %}*/
/* */
