<?php

/* partials/base.html.twig */
class __TwigTemplate_925450d963fadf20a48c5a7b1b32ff2253fa4f46bf78416550d16a436e38f05f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "    </head>
    <body class=\"";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_class", array());
        echo "\">

        ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" />

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 13
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/main.css.map"), "method");
        // line 14
        echo "                ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 15
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie8.css"), "method");
            // line 16
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie8.css.map"), "method");
            // line 17
            echo "                ";
        }
        // line 18
        echo "                ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 9))) {
            // line 19
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie9.css"), "method");
            // line 20
            echo "                    ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://assets/css/ie9.css.map"), "method");
            // line 21
            echo "                ";
        }
        // line 22
        echo "        ";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 30)->display($context);
        // line 31
        echo "        ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "        ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "        ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "            ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 43
            echo "                 ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/ie/html5shiv.js"), "method");
            // line 44
            echo "            ";
        }
        // line 45
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 46
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.scrolly.min.js"), "method");
        // line 47
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/jquery.scrollgress.min.js"), "method");
        // line 48
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/panels.min.js"), "method");
        // line 49
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 50
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 51
        echo "            ";
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 8))) {
            // line 52
            echo "                 ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/ie/respond.min.js"), "method");
            // line 53
            echo "            ";
        }
        // line 54
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 55
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 55,  213 => 54,  210 => 53,  207 => 52,  204 => 51,  201 => 50,  198 => 49,  195 => 48,  192 => 47,  189 => 46,  186 => 45,  183 => 44,  180 => 43,  177 => 42,  174 => 41,  170 => 39,  167 => 38,  164 => 37,  159 => 34,  155 => 35,  152 => 34,  149 => 33,  145 => 31,  142 => 30,  139 => 29,  135 => 22,  132 => 21,  129 => 20,  126 => 19,  123 => 18,  120 => 17,  117 => 16,  114 => 15,  111 => 14,  108 => 13,  105 => 12,  102 => 11,  94 => 23,  92 => 11,  87 => 9,  84 => 8,  82 => 7,  74 => 6,  71 => 5,  68 => 4,  58 => 56,  56 => 41,  53 => 40,  51 => 37,  48 => 36,  46 => 33,  43 => 32,  41 => 29,  36 => 27,  33 => 26,  31 => 4,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png" />*/
/* */
/*         {% block stylesheets %}*/
/*                 {% do assets.addCss('theme://assets/css/main.css') %}*/
/*                 {% do assets.addCss('theme://assets/css/main.css.map') %}*/
/*                 {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}*/
/*                     {% do assets.addCss('theme://assets/css/ie8.css') %}*/
/*                     {% do assets.addCss('theme://assets/css/ie8.css.map') %}*/
/*                 {% endif %}*/
/*                 {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}*/
/*                     {% do assets.addCss('theme://assets/css/ie9.css') %}*/
/*                     {% do assets.addCss('theme://assets/css/ie9.css.map') %}*/
/*                 {% endif %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         {% endblock head%}*/
/*     </head>*/
/*     <body class="{{ page.header.body_class }}">*/
/* */
/*         {% block header %}*/
/*             {% include 'partials/header.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/*             {% block content %}{% endblock %}*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*             {% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}*/
/*                  {% do assets.addJs('theme://assets/js/ie/html5shiv.js') %}*/
/*             {% endif %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.addJs('theme://assets/js/jquery.scrolly.min.js') %}*/
/*             {% do assets.addJs('theme://assets/js/jquery.scrollgress.min.js') %}*/
/*             {% do assets.addJs('theme://assets/js/panels.min.js') %}*/
/*             {% do assets.addJs('theme://assets/js/skel.min.js') %}*/
/*             {% do assets.addJs('theme://assets/js/util.js') %}*/
/*             {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}*/
/*                  {% do assets.addJs('theme://assets/js/ie/respond.min.js') %}*/
/*             {% endif %}*/
/*             {% do assets.addJs('theme://assets/js/main.js') %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/* */
/*     </body>*/
/* </html>*/
/* */
