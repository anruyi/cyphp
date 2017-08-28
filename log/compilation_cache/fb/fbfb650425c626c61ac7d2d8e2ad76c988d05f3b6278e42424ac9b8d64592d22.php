<?php

/* layout.html */
class __TwigTemplate_0c04ccf01c339c6b87c16fdbaeccb3f047aba3c0ccdedd890888035c2d94d7dc extends Twig_Template
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
        echo "<html>
<body>
<header>header</header>
<content>
    ";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "</content>
<footer>
    footer
</footer>
</body>
</html>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  28 => 7,  26 => 5,  20 => 1,);
    }
}
/* <html>*/
/* <body>*/
/* <header>header</header>*/
/* <content>*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </content>*/
/* <footer>*/
/*     footer*/
/* </footer>*/
/* </body>*/
/* </html>*/
