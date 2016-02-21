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
    <a href=\"#\" class=\"menuToggle\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Hexagon\" x=\"0px\" y=\"0px\" width=\"50px\" height=\"56px\" viewBox=\"0 0 48 54\" xml:space=\"preserve\" enable-background=\"new 0 0 48 54\">
            <style type=\"text/css\">
                .hexagon {
                    fill: white;
                }
            </style>
            <path class=\"hexagon\" d=\"M48 13.2v27.9L24 54 0 41.1V13.2C6 10.7 23.9 0 23.9 0L48 13.2z\"></path>
        </svg>
    <i class=\"fa fa-bars\"></i>
    </a>
    <div id=\"navPanel\">
        <nav id=\"nav\">
            <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "                    ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 19
                echo "                        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 20
                echo "                        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                            <a href=\"";
                // line 21
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                                ";
                // line 22
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 26
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 28
            echo "                    <li>
                        <a href=\"";
            // line 29
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
        // line 32
        echo "                <li class=\"submenu\">
                    <a href=\"\">Submenu</a>
                    <ul>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "submenu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
            // line 36
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["submenu"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["submenu"], "text", array());
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </ul>
                </li>
            </ul>
        </nav>
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
        return array (  117 => 38,  106 => 36,  102 => 35,  97 => 32,  86 => 29,  83 => 28,  78 => 27,  72 => 26,  65 => 22,  61 => 21,  56 => 20,  53 => 19,  50 => 18,  46 => 17,  24 => 2,  19 => 1,);
    }
}
/* <header id="header" class="{{ page.header.header_class }}">*/
/*     <h1 id="logo"><a href="{{ base_url_absolute }}">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>*/
/*     <a href="#" class="menuToggle">*/
/*         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Hexagon" x="0px" y="0px" width="50px" height="56px" viewBox="0 0 48 54" xml:space="preserve" enable-background="new 0 0 48 54">*/
/*             <style type="text/css">*/
/*                 .hexagon {*/
/*                     fill: white;*/
/*                 }*/
/*             </style>*/
/*             <path class="hexagon" d="M48 13.2v27.9L24 54 0 41.1V13.2C6 10.7 23.9 0 23.9 0L48 13.2z"></path>*/
/*         </svg>*/
/*     <i class="fa fa-bars"></i>*/
/*     </a>*/
/*     <div id="navPanel">*/
/*         <nav id="nav">*/
/*             <ul>*/
/*                 {% for page in pages.children %}*/
/*                     {% if page.visible %}*/
/*                         {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}*/
/*                         <li class="{{ current_page }}">*/
/*                             <a href="{{ page.url }}">*/
/*                                 {{ page.menu }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {% for mitem in site.menu %}*/
/*                     <li>*/
/*                         <a href="{{ mitem.link }}">{{ mitem.text }}</a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*                 <li class="submenu">*/
/*                     <a href="">Submenu</a>*/
/*                     <ul>*/
/*                         {% for submenu in site.submenu %}*/
/*                             <li><a href="{{ submenu.link }}">{{ submenu.text }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </nav>*/
/*     </div>*/
/* </header>*/
/* */
