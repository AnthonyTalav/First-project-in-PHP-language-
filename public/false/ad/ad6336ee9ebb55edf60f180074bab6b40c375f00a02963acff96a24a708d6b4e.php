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

/* addUser.twig */
class __TwigTemplate_8acbe191fcff511ba0a0de7c7b7b90eaf64e1cdca02f6d23d0c031019be20985 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "addUser.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<h1>ADD USER :)</h1>
\t<form action=\"/cursophp/users/add\" method=\"POST\">

\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, ($context["responseMessage"] ?? null), "html", null, true);
        echo "
\t\t</div>

\t\t<label for=\"email\">Email</lable>
\t\t<input type=\"text\" name=\"email\" id=\"email\"></br>
\t<label for=\"password\">Password</lable>
\t<input type=\"password\" name=\"password\" id=\"password\"></br>
<button type=\"submit\">SAVE</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "addUser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}
{% block content %}
\t<h1>ADD USER :)</h1>
\t<form action=\"/cursophp/users/add\" method=\"POST\">

\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t{{responseMessage}}
\t\t</div>

\t\t<label for=\"email\">Email</lable>
\t\t<input type=\"text\" name=\"email\" id=\"email\"></br>
\t<label for=\"password\">Password</lable>
\t<input type=\"password\" name=\"password\" id=\"password\"></br>
<button type=\"submit\">SAVE</button>
</form>
{% endblock %}
", "addUser.twig", "C:\\xampp\\htdocs\\cursophp\\views\\addUser.twig");
    }
}
