<?php

/* ::base.html.twig */
class __TwigTemplate_d67040fac7e97175ad95f133e2278510e2e8e5c69dc019492ac67f233c43cda6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>


<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"/EverfailRepo/web/bundles/everfailmain/css/style.css\" type=\"text/css\">
    </head>
    <body>
        <div id=\"header\">
            <div>
                <div class=\"logo\">
                    <a href=\"index.html\">Ever Fail</a>
                </div>
                <ul id=\"navigation\">
                    <li class=\"active\">
                        <a href=\"index.html\">Home</a>
                    </li>
                    <li>
                        <a href=\"features.html\">Features</a>
                    </li>
                    <li>
                        <a href=\"news.html\">News</a>
                    </li>
                    <li>
                        <a href=\"about.html\">About</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id=\"adbox\">
            <div class=\"clearfix\">
                <!--<img src=\"/EverfailRepo/web/bundles/everfailmain/images/box.png\" alt=\"Img\" height=\"342\" width=\"368\">-->
                <div>
                    <h1>Ever Fail</h1>
                    <h2>That's what we live for.</h2>
                    ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "                    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "                </div>

            </div>
        </div>
         <div id=\"footer\">
            <div class=\"clearfix\">
                <div id=\"connect\">
                    <a href=\"http://freewebsitetemplates.com/go/facebook/\" target=\"_blank\" class=\"facebook\"></a><a href=\"http://freewebsitetemplates.com/go/googleplus/\" target=\"_blank\" class=\"googleplus\"></a><a href=\"http://freewebsitetemplates.com/go/twitter/\" target=\"_blank\" class=\"twitter\"></a><a href=\"http://www.freewebsitetemplates.com/misc/contact/\" target=\"_blank\" class=\"tumbler\"></a>
                </div>
                <p>
                    © PentoZide software solutions. All Rights Reserved.
                </p>
            </div>
        </div>
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  112 => 45,  107 => 10,  101 => 9,  82 => 47,  79 => 46,  77 => 45,  39 => 11,  37 => 10,  33 => 9,  23 => 1,);
    }
}
