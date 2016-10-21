<?php

/* camper/main.twig */
class __TwigTemplate_9653ea712ed4cbf7055ce4840a6d3ace43846973ac6f0eff870b56d36b0aa582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "camper/main.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["camper_name"]) ? $context["camper_name"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["available"]) ? $context["available"] : null), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["camper_name"]) ? $context["camper_name"] : null), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"inner-container container col-md-5\">
\t\t<div class=\"content-holder\">
\t\t\t<div class=\"header\">
\t\t\t\t<h1>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["camper_name"]) ? $context["camper_name"] : null), "html", null, true);
        echo "</h1>
\t\t\t</div>
      <div class=\"calendar\">
        <p>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["availability"]) ? $context["availability"] : null), "html", null, true);
        echo "</p>
        <iframe id=\"calendar-iframe\" src=\"https://calendar.google.com/calendar/embed?bgcolor=%23ffcc33&showTitle=0&showDate=0&showPrint=0&showTabs=0&showCalendars=0&src=cbpn69birghs28jeravhq6o6nc%40group.calendar.google.com&ctz=Europe/Vilnius\" style=\"border:solid 1px #777\" frameborder=\"0\" scrolling=\"no\"></iframe>
\t\t\t</div>
\t\t\t<ul class=\"pictures\">
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "6.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-6.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "7.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-7.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "1.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-1.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "5.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-5.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "2.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-2.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "3.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-3.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "4.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-4.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "0.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-0.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t\t<li class=\"pic\"><img name=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "plan.jpg", array(), "array"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "micro-plan.jpg", array(), "array"), "html", null, true);
        echo "\"></li>
\t\t\t</ul>
\t\t\t<div class=\"info\">
\t\t\t\t<p>";
        // line 33
        echo (isset($context["info"]) ? $context["info"] : null);
        echo "</p>
\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["back"]) ? $context["back"] : null), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"viewer\" class=\"viewer\">
\t\t<img id=\"viewer-image\" class=\"viewer-image\" src=\"\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "camper/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 34,  131 => 33,  123 => 30,  117 => 29,  111 => 28,  105 => 27,  99 => 26,  93 => 25,  87 => 24,  81 => 23,  75 => 22,  68 => 18,  62 => 15,  57 => 12,  54 => 11,  45 => 8,  42 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
