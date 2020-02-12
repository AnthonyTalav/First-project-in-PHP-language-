<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login.twig */
class __TwigTemplate_41326be7abffb02545aa8f92da139887372233640f053e270b209b91fd5dbd48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<h1>Login ☺ </h1>
<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, ($context["responseMessage"] ?? null), "html", null, true);
        echo "
\t\t</div>
<form action=\"/cursophp/auth\" method=\"post\">
<input type=\"text\" name=\"email\" placeholder=\"Email\"></br>
<input type=\"password\" name=\"password\" placeholder=\"Password\"></br>
<button type=\"submit\">Login</button></br>
</form>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content %}
<h1>Login ☺ </h1>
<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t{{responseMessage}}
\t\t</div>
<form action=\"/cursophp/auth\" method=\"post\">
<input type=\"text\" name=\"email\" placeholder=\"Email\"></br>
<input type=\"password\" name=\"password\" placeholder=\"Password\"></br>
<button type=\"submit\">Login</button></br>
</form>
{% endblock %}", "login.twig", "C:\\xampp\\htdocs\\cursophp\\views\\login.twig");
    }
}
