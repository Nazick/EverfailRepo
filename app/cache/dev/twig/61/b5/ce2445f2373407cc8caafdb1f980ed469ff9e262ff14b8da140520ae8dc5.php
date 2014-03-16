<?php

/* EverFailMainBundle:Default:index.html.twig */
class __TwigTemplate_61b5ce2445f2373407cc8caafdb1f980ed469ff9e262ff14b8da140520ae8dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
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
                <img src=\"/EverfailRepo/web/bundles/everfailmain/images/box.png\" alt=\"Img\" height=\"342\" width=\"368\">
                <div>
                    <h1>Ever Fail</h1>
                    <h2>WE LEADS YOU....</h2>
                    <p>
                        Wix is an online website builder with a simple drag & drop interface, meaning you do the work online and instantly publish to the web. <span><a href=\"index.html\" class=\"btn\">Sign Up!</a><b>Don’t worry it’s for free</b></span>
                    </p>
                </div>

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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EverFailMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 5,  90 => 4,  32 => 6,  30 => 5,  26 => 4,  21 => 1,);
    }
}
