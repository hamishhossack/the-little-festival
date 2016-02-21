<?php

/* modular/banner.html.twig */
class __TwigTemplate_78c7fe029fe7343d42c9acb0a6b90e8022cfe3394e174174268a8b4f268fcf27 extends Twig_Template
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
        echo "<section id=\"banner\">
    <div class=\"inner\">
        <header>
            <img src=\"@theme://";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "\">
            <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
        </header>
        ";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        <footer>
            <ul class=\"buttons vertical\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"button fit scrolly\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </footer>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  45 => 11,  41 => 10,  35 => 7,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <section id="banner">*/
/*     <div class="inner">*/
/*         <header>*/
/*             <img src="@theme://{{ page.header.image }}" alt="{{ page.title }}">*/
/*             <h2>{{ page.header.title }}</h2>*/
/*         </header>*/
/*         {{ content }}*/
/*         <footer>*/
/*             <ul class="buttons vertical">*/
/*                 {% for button in page.header.buttons %}*/
/*                     <li><a href="{{ button.url }}" class="button fit scrolly">{{ button.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </footer>*/
/*     </div>*/
/* </section>*/
/* */
