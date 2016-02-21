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
    <a href=\"#\" class=\"main-menu-panel-toggle\"><div class=\"hexagon\"><div class=\"inner\"><i class=\"fa fa-bars\"></i></div></div></a>
    <div id=\"main-menu-panel\">
        <a href=\"#\" class=\"main-menu-panel-toggle\"><div class=\"hexagon alt\"><div class=\"inner\"><i class=\"fa fa-arrow-left\"></i></div></div></a>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"4u 12u(narrower)\">
                </div>
                <div class=\"4u 12u(narrower)\">
                    <nav id=\"nav\">
                        <ul>
                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "                                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 15
                echo "                                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 16
                echo "                                    <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                                    <a href=\"";
                // line 17
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                                      ";
                // line 18
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                                    </a>
                                    </li>
                                ";
            }
            // line 22
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 24
            echo "                                <li>
                                <a href=\"";
            // line 25
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </ul>
                    </nav>
                </div>
                <div class=\"4u 12u(narrower)\">
                </div>
            </div>
        </div>
    </div>
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
        return array (  93 => 28,  82 => 25,  79 => 24,  74 => 23,  68 => 22,  61 => 18,  57 => 17,  52 => 16,  49 => 15,  46 => 14,  42 => 13,  24 => 2,  19 => 1,);
    }
}
/* <header id="header" class="{{ page.header.header_class }}">*/
/*     <h1 id="logo"><a href="{{ base_url_absolute }}">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>*/
/*     <a href="#" class="main-menu-panel-toggle"><div class="hexagon"><div class="inner"><i class="fa fa-bars"></i></div></div></a>*/
/*     <div id="main-menu-panel">*/
/*         <a href="#" class="main-menu-panel-toggle"><div class="hexagon alt"><div class="inner"><i class="fa fa-arrow-left"></i></div></div></a>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="4u 12u(narrower)">*/
/*                 </div>*/
/*                 <div class="4u 12u(narrower)">*/
/*                     <nav id="nav">*/
/*                         <ul>*/
/*                             {% for page in pages.children %}*/
/*                                 {% if page.visible %}*/
/*                                     {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}*/
/*                                     <li class="{{ current_page }}">*/
/*                                     <a href="{{ page.url }}">*/
/*                                       {{ page.menu }}*/
/*                                     </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             {% for mitem in site.menu %}*/
/*                                 <li>*/
/*                                 <a href="{{ mitem.link }}">{{ mitem.text }}</a>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </nav>*/
/*                 </div>*/
/*                 <div class="4u 12u(narrower)">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
