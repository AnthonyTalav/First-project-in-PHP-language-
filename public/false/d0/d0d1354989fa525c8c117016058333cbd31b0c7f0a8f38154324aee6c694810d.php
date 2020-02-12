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

/* addJob.twig */
class __TwigTemplate_6f7ac178ce840d542b1dc1eee6af1916fa5d85265717bcad7c1073e1c21f83cb extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "addJob.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<h1>Add Job</h1>
\t<form action=\"/cursophp/jobs/add\" method=\"POST\" enctype=\"multipart/form-data\">

\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t";
        // line 8
        echo twig_escape_filter($this->env, ($context["responseMessage"] ?? null), "html", null, true);
        echo "
\t\t</div>

\t\t<label for=\"\">Title</label>
\t\t<input type=\"text\" name=\"title\"><br>
\t\t<label for=\"\">Description</label>
\t\t<input type=\"text\" name=\"description\"><br>
\t\t<input type=\"file\" name=\"logo\"><br>
\t\t<button type=\"submit\">Save</button>
\t</form>

";
    }

    public function getTemplateName()
    {
        return "addJob.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content %}
\t<h1>Add Job</h1>
\t<form action=\"/cursophp/jobs/add\" method=\"POST\" enctype=\"multipart/form-data\">

\t\t<div class=\"alert alert-primary\" role=\"alert\">
\t\t\t{{responseMessage}}
\t\t</div>

\t\t<label for=\"\">Title</label>
\t\t<input type=\"text\" name=\"title\"><br>
\t\t<label for=\"\">Description</label>
\t\t<input type=\"text\" name=\"description\"><br>
\t\t<input type=\"file\" name=\"logo\"><br>
\t\t<button type=\"submit\">Save</button>
\t</form>

{% endblock %}
", "addJob.twig", "C:\\xampp\\htdocs\\cursophp\\views\\addJob.twig");
    }
}
