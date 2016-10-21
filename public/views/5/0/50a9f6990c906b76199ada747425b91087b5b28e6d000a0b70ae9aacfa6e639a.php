<?php

/* index/main.twig */
class __TwigTemplate_50a9f6990c906b76199ada747425b91087b5b28e6d000a0b70ae9aacfa6e639a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "index/main.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "<meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"inner-container container col-md-offset-8 col-md-4\">
\t\t<div class=\"lang\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lt"]) ? $context["lt"] : null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "LT.jpg", array(), "array"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t<li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["en"]) ? $context["en"] : null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "EN.jpg", array(), "array"), "html", null, true);
        echo "\"></a></li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"content-holder\">
\t\t\t<div class=\"header\">
\t\t\t\t<h1>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t\t<div class=\"campers\">
\t\t\t\t<h2>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["campers"]) ? $context["campers"] : null), "html", null, true);
        echo "</h2>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["link_camper"]) ? $context["link_camper"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["camper_name"]) ? $context["camper_name"] : null), "html", null, true);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"contacts\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["misc_info"]) ? $context["misc_info"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 32
            echo "\t\t\t\t\t\t<li>";
            echo $context["info"];
            echo "</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "index/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  98 => 32,  94 => 31,  84 => 26,  79 => 24,  73 => 21,  63 => 16,  57 => 15,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
