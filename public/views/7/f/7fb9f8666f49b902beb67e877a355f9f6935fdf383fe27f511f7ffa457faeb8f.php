<?php

/* template.twig */
class __TwigTemplate_7fb9f8666f49b902beb67e877a355f9f6935fdf383fe27f511f7ffa457faeb8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javasripts' => array($this, 'block_javasripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
\t\t<meta content=\"utf-8\" http-equiv=\"encoding\">
\t\t<meta name=\"google-site-verification\" content=\"dVXWK1mnTyVT8xtHfekqwhsWW0WaG4nEtc4fhPa1eXk\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"author\" content=\"Made by Karolis Lasys (https://hyperwind.github.io)\">
\t\t<!-- I know, the design sucks, but the client demanded it to look this way. :/ -->
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["images"]) ? $context["images"] : null), "favicon.png", array(), "array"), "html", null, true);
        echo "\">
\t\t";
        // line 11
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "\t\t<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans|Lobster&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
\t\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "\t\t";
        $this->displayBlock('javasripts', $context, $blocks);
        // line 33
        echo "\t</body>
</html>
";
    }

    // line 11
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["stylesheets"]) ? $context["stylesheets"] : null)) > 0)) {
            // line 15
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stylesheets"]) ? $context["stylesheets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
                // line 16
                echo "\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $context["sheet"], "html", null, true);
                echo "\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "\t\t";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "\t\t";
    }

    // line 26
    public function block_javasripts($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["javascripts"]) ? $context["javascripts"] : null)) > 0)) {
            // line 28
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["javascripts"]) ? $context["javascripts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 29
                echo "\t\t\t\t\t<script src=\"";
                echo twig_escape_filter($this->env, $context["script"], "html", null, true);
                echo "\"></script>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t";
        }
        // line 32
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 32,  129 => 31,  120 => 29,  115 => 28,  112 => 27,  109 => 26,  105 => 25,  102 => 24,  98 => 19,  95 => 18,  86 => 16,  81 => 15,  78 => 14,  75 => 13,  70 => 12,  65 => 11,  59 => 33,  56 => 26,  54 => 24,  48 => 20,  46 => 13,  41 => 12,  39 => 11,  35 => 10,  24 => 1,);
    }
}
