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

/* admin.twig */
class __TwigTemplate_d5f81f455a62649e92db6adb75e37b187cd56a5dae083dbc7e308503fcbf1f0b extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1>Dashboard</h1>

<ul>
<li><a href=\"/cursophp/users/add\">Add users</a></li>
<li><a href=\"/cursophp/jobs/add\">Add jobs</a></li>    
</ul>
<br><br>
<a href=\"/cursophp/logout\">Logout</a>

";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}
{% block content %}
<h1>Dashboard</h1>

<ul>
<li><a href=\"/cursophp/users/add\">Add users</a></li>
<li><a href=\"/cursophp/jobs/add\">Add jobs</a></li>    
</ul>
<br><br>
<a href=\"/cursophp/logout\">Logout</a>

{% endblock %}", "admin.twig", "C:\\xampp\\htdocs\\cursophp\\views\\admin.twig");
    }
}
