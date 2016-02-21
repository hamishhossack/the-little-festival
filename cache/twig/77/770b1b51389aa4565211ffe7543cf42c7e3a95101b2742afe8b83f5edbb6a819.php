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
    <a class=\"main-menu-panel-open\">
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
</header>

<div id=\"main-menu-panel\">
    <div class=\"row\">
        <div class=\"4u 12u(narrower)\">
        </div>
        <div class=\"4u 12u(narrower)\">
            <nav id=\"nav\">
                <ul>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "                        ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 25
                echo "                            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 26
                echo "                            <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
                                <a href=\"";
                // line 27
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                                    <h3>";
                // line 28
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</h3>
                                    <p>";
                // line 29
                echo $this->getAttribute($context["page"], "subtitle", array());
                echo "</p>
                                </a>
                            </li>
                        ";
            }
            // line 33
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 35
            echo "                        <li>
                            <a href=\"";
            // line 36
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
        // line 39
        echo "                </ul>
            </nav>
        </div>
        <div class=\"4u 12u(narrower)\">
            <a class=\"main-menu-panel-close\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Hexagon\" x=\"0px\" y=\"0px\" width=\"50px\" height=\"56px\" viewBox=\"0 0 48 54\" xml:space=\"preserve\" enable-background=\"new 0 0 48 54\">
                    <style type=\"text/css\">
                        .hexagon {
                          fill: white;
                        }
                    </style>
                    <path class=\"hexagon\" d=\"M48 13.2v27.9L24 54 0 41.1V13.2C6 10.7 23.9 0 23.9 0L48 13.2z\"></path>
                </svg>
                <i class=\"fa fa-arrow-left\"></i>
            </a>
            <div class=\"contact\">
            <h4>Get in <strong>Touch.</strong></h4>

            <div class=\"visually-hidden\" vocab=\"http://schema.org/\" typeof=\"Organization\">

              <span property=\"name\">The Little Festival Ltd</span>
              <span property=\"email\">thelittlefestivaluk@gmail.com</span>
              <span property=\"url\">https://www.thelittlefestival.co.uk</span>
              <img property=\"logo\" src=\"/user/themes/tlf/images/logo.png\" alt=\"logo\">

              <address property=\"address\" typeof=\"PostalAddress\">
                <span property=\"streetAddress\">Margarethenstrasse 87</span>
                <span property=\"postalCode\">4053</span>
                <span property=\"addressLocality\">Basel Switzerland</span>
              </address>

            </div>
            <ul class=\"contact-data\">
                <li>
                    <a href=\"mailto:thelittlefestivaluk@gmail.com\">thelittlefestivaluk@gmail.com</a>
                </li>
                <li>
                    <a href=\"tel:+41612711286\">+41 61 271 12 86</a>
                </li>
                <li>
                    <a href=\"https://goo.gl/maps/ucOJX\" target=\"_blank\">
                        <address>
                        The Little Festival Ltd<br>
                        Margarethenstrasse 87<br>
                        4053 Basel<br>
                        Switzerland
                        </address>
                    </a>
                </li>
            </ul>
            <ul class=\"meta\" itemscope=\"\" itemtype=\"http://schema.org/SiteNavigationElement\">
                <li>
                    <a itemprop=\"url\" href=\"/en/landing/openspace\">
                        <h4 itemprop=\"name\">Open Space</h4>
                    </a>
                </li>
                <li>
                    <a itemprop=\"url\" href=\"/en/meta/sitenotice\">
                        <h4 itemprop=\"name\">Site Notice</h4>
                    </a>
                </li>
            </ul>
          </div>
        </div>
    </div>
</div>
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
        return array (  107 => 39,  96 => 36,  93 => 35,  88 => 34,  82 => 33,  75 => 29,  71 => 28,  67 => 27,  62 => 26,  59 => 25,  56 => 24,  52 => 23,  24 => 2,  19 => 1,);
    }
}
/* <header id="header" class="{{ page.header.header_class }}">*/
/*     <h1 id="logo"><a href="{{ base_url_absolute }}">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>*/
/*     <a class="main-menu-panel-open">*/
/*         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Hexagon" x="0px" y="0px" width="50px" height="56px" viewBox="0 0 48 54" xml:space="preserve" enable-background="new 0 0 48 54">*/
/*             <style type="text/css">*/
/*                 .hexagon {*/
/*                   fill: white;*/
/*                 }*/
/*             </style>*/
/*             <path class="hexagon" d="M48 13.2v27.9L24 54 0 41.1V13.2C6 10.7 23.9 0 23.9 0L48 13.2z"></path>*/
/*         </svg>*/
/*         <i class="fa fa-bars"></i>*/
/*     </a>*/
/* </header>*/
/* */
/* <div id="main-menu-panel">*/
/*     <div class="row">*/
/*         <div class="4u 12u(narrower)">*/
/*         </div>*/
/*         <div class="4u 12u(narrower)">*/
/*             <nav id="nav">*/
/*                 <ul>*/
/*                     {% for page in pages.children %}*/
/*                         {% if page.visible %}*/
/*                             {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}*/
/*                             <li class="{{ current_page }}">*/
/*                                 <a href="{{ page.url }}">*/
/*                                     <h3>{{ page.menu }}</h3>*/
/*                                     <p>{{ page.subtitle}}</p>*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     {% for mitem in site.menu %}*/
/*                         <li>*/
/*                             <a href="{{ mitem.link }}">{{ mitem.text }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </nav>*/
/*         </div>*/
/*         <div class="4u 12u(narrower)">*/
/*             <a class="main-menu-panel-close">*/
/*                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Hexagon" x="0px" y="0px" width="50px" height="56px" viewBox="0 0 48 54" xml:space="preserve" enable-background="new 0 0 48 54">*/
/*                     <style type="text/css">*/
/*                         .hexagon {*/
/*                           fill: white;*/
/*                         }*/
/*                     </style>*/
/*                     <path class="hexagon" d="M48 13.2v27.9L24 54 0 41.1V13.2C6 10.7 23.9 0 23.9 0L48 13.2z"></path>*/
/*                 </svg>*/
/*                 <i class="fa fa-arrow-left"></i>*/
/*             </a>*/
/*             <div class="contact">*/
/*             <h4>Get in <strong>Touch.</strong></h4>*/
/* */
/*             <div class="visually-hidden" vocab="http://schema.org/" typeof="Organization">*/
/* */
/*               <span property="name">The Little Festival Ltd</span>*/
/*               <span property="email">thelittlefestivaluk@gmail.com</span>*/
/*               <span property="url">https://www.thelittlefestival.co.uk</span>*/
/*               <img property="logo" src="/user/themes/tlf/images/logo.png" alt="logo">*/
/* */
/*               <address property="address" typeof="PostalAddress">*/
/*                 <span property="streetAddress">Margarethenstrasse 87</span>*/
/*                 <span property="postalCode">4053</span>*/
/*                 <span property="addressLocality">Basel Switzerland</span>*/
/*               </address>*/
/* */
/*             </div>*/
/*             <ul class="contact-data">*/
/*                 <li>*/
/*                     <a href="mailto:thelittlefestivaluk@gmail.com">thelittlefestivaluk@gmail.com</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="tel:+41612711286">+41 61 271 12 86</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="https://goo.gl/maps/ucOJX" target="_blank">*/
/*                         <address>*/
/*                         The Little Festival Ltd<br>*/
/*                         Margarethenstrasse 87<br>*/
/*                         4053 Basel<br>*/
/*                         Switzerland*/
/*                         </address>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*             <ul class="meta" itemscope="" itemtype="http://schema.org/SiteNavigationElement">*/
/*                 <li>*/
/*                     <a itemprop="url" href="/en/landing/openspace">*/
/*                         <h4 itemprop="name">Open Space</h4>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a itemprop="url" href="/en/meta/sitenotice">*/
/*                         <h4 itemprop="name">Site Notice</h4>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
