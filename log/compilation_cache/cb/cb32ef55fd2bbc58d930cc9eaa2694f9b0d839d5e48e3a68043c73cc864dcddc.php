<?php

/* index.html */
class __TwigTemplate_f537c11ed7d8e26369670a2f3d692a05b883e5195434dcf70b6d4297e8cfd182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "

<body>

<h2>This is a view page!";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : null), "html", null, true);
        echo "</h2>
<h2>This is a view page!</h2>
<h2>This is page!</h2>
<h2>This is a view page!</h2>
<h2>This is a view page!</h2>
</body>

";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* */
/* */
/* <body>*/
/* */
/* <h2>This is a view page!{{a}}</h2>*/
/* <h2>This is a view page!</h2>*/
/* <h2>This is page!</h2>*/
/* <h2>This is a view page!</h2>*/
/* <h2>This is a view page!</h2>*/
/* </body>*/
/* */
/* {{ a }}*/
/* {% endblock %}*/
/* */
