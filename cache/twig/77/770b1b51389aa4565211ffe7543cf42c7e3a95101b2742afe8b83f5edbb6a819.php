<?php

/* partials/header.html.twig */
class __TwigTemplate_84a69401a31b2ad1884c0a77393851a7bbdc7177f8ae6df7ff2f31c3d60cfdb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"header\" class=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_class", array());
        echo "\">
  <h1 id=\"logo\"><a href=\"";
        // line 2
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text1", array());
        echo " <span>";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "text2", array());
        echo "</span></a></h1>
  <nav id=\"nav\">
    <ul>
      <li>
        <a href=\"\" class=\"toggle-panel\" data-panel-id=\"panel-main-menu\"><div class=\"hexagon\"><div class=\"inner\"><i class=\"fa fa-bars\"></i></div></div></a>
      </li>
    </ul>
  </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <header id="header" class="{{ page.header.header_class }}">*/
/*   <h1 id="logo"><a href="{{ base_url_absolute }}">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>*/
/*   <nav id="nav">*/
/*     <ul>*/
/*       <li>*/
/*         <a href="" class="toggle-panel" data-panel-id="panel-main-menu"><div class="hexagon"><div class="inner"><i class="fa fa-bars"></i></div></div></a>*/
/*       </li>*/
/*     </ul>*/
/*   </nav>*/
/* </header>*/
/* */
