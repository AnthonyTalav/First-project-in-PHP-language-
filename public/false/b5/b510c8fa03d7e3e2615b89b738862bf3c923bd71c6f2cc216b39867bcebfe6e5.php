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

/* index.twig */
class __TwigTemplate_2b22d156186d8e77ef1eec0cdee9110094cd93f71c58711c85d6752012f1cd25 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div id=\"resume-header\" class=\"row\">
\t\t<div class=\"col-3\">
\t\t\t<img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t<h2>PHP Developer</h2>
\t\t\t<ul>
\t\t\t\t<li>Mail: anthony082017@mail.com</li>
\t\t\t\t<li>Phone: +51 932586149</li>
\t\t\t\t<li>LinkedIn: https://linkedin.com</li>
\t\t\t\t<li>Twitter: @.......</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<h2 class=\"border-bottom-gray\">Carrer Summary</h2>
\t\t\t<p>
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<div>
\t\t\t\t<h3 class=\"border-bottom-gray\">Work Experience</h3>
\t\t\t\t<ul>

\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jobs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 35
            echo "\t\t\t\t\t\t<li class=\"work-position\">
\t\t\t\t\t\t\t<h5>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t";
            // line 38
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["job"], "logoName", [], "any", false, false, false, 38), "")) {
                // line 39
                echo "\t\t\t\t\t\t\t\t<img src=\"public/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["job"], "logoName", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 41
            echo "

\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3 class=\"border-bottom-gray\">Projects</h3>
\t\t\t\t<ul>
\t\t\t\t\t<?php

            for (\$idx = 0; \$idx < count(\$projects); \$idx++) {
              printElement(\$projects[\$idx]);
            }

            ?>

\t\t\t\t</ul>
\t\t\t\t<div class=\"project\">
\t\t\t\t\t<h5>Project X</h5>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
\t\t\t\t\t\t\t<strong>Technologies used:</strong>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">PHP</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">HTML</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">CSS</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"project\">
\t\t\t\t\t<h5>Project X</h5>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
\t\t\t\t\t\t\t<strong>Technologies used:</strong>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">PHP</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">HTML</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">CSS</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-3\">
\t\t\t<h3 class=\"border-bottom-gray\">Skills & Tools</h3>
\t\t\t<h4>Backend</h4>
\t\t\t<ul>
\t\t\t\t<li>PHP</li>
\t\t\t</ul>
\t\t\t<h4>Frontend</h4>
\t\t\t<ul>
\t\t\t\t<li>HTML</li>
\t\t\t\t<li>CSS</li>
\t\t\t</ul>
\t\t\t<h4>Frameworks</h4>
\t\t\t<ul>
\t\t\t\t<li>Laravel</li>
\t\t\t\t<li>Bootstrap</li>
\t\t\t</ul>
\t\t\t<h3 class=\"border-bottom-gray\">Languages</h3>
\t\t\t<ul>
\t\t\t\t<li>Spanish</li>
\t\t\t\t<li>English</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div id=\"resume-footer\" class=\"row\">
\t\t<div class=\"col\">
\t\t\tDesigned by @AnthonyTalav
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  108 => 41,  102 => 39,  100 => 38,  96 => 37,  92 => 36,  89 => 35,  85 => 34,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\" %}

{% block content %}
\t<div id=\"resume-header\" class=\"row\">
\t\t<div class=\"col-3\">
\t\t\t<img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<h1>{{name}}</h1>
\t\t\t<h2>PHP Developer</h2>
\t\t\t<ul>
\t\t\t\t<li>Mail: anthony082017@mail.com</li>
\t\t\t\t<li>Phone: +51 932586149</li>
\t\t\t\t<li>LinkedIn: https://linkedin.com</li>
\t\t\t\t<li>Twitter: @.......</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<h2 class=\"border-bottom-gray\">Carrer Summary</h2>
\t\t\t<p>
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
\t\t\t</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<div>
\t\t\t\t<h3 class=\"border-bottom-gray\">Work Experience</h3>
\t\t\t\t<ul>

\t\t\t\t\t{% for job in jobs %}
\t\t\t\t\t\t<li class=\"work-position\">
\t\t\t\t\t\t\t<h5>{{ job.title }}</h5>
\t\t\t\t\t\t\t<p>{{job.description}}</p>
\t\t\t\t\t\t\t{% if job.logoName !='' %}
\t\t\t\t\t\t\t\t<img src=\"public/uploads/{{job.logoName}}\">
\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3 class=\"border-bottom-gray\">Projects</h3>
\t\t\t\t<ul>
\t\t\t\t\t<?php

            for (\$idx = 0; \$idx < count(\$projects); \$idx++) {
              printElement(\$projects[\$idx]);
            }

            ?>

\t\t\t\t</ul>
\t\t\t\t<div class=\"project\">
\t\t\t\t\t<h5>Project X</h5>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
\t\t\t\t\t\t\t<strong>Technologies used:</strong>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">PHP</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">HTML</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">CSS</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"project\">
\t\t\t\t\t<h5>Project X</h5>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t<img id=\"profile-picture\" src=\"https://ui-avatars.com/api/?name=John+Doe&size=255\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
\t\t\t\t\t\t\t<strong>Technologies used:</strong>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">PHP</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">HTML</span>
\t\t\t\t\t\t\t<span class=\"badge badge-secondary\">CSS</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-3\">
\t\t\t<h3 class=\"border-bottom-gray\">Skills & Tools</h3>
\t\t\t<h4>Backend</h4>
\t\t\t<ul>
\t\t\t\t<li>PHP</li>
\t\t\t</ul>
\t\t\t<h4>Frontend</h4>
\t\t\t<ul>
\t\t\t\t<li>HTML</li>
\t\t\t\t<li>CSS</li>
\t\t\t</ul>
\t\t\t<h4>Frameworks</h4>
\t\t\t<ul>
\t\t\t\t<li>Laravel</li>
\t\t\t\t<li>Bootstrap</li>
\t\t\t</ul>
\t\t\t<h3 class=\"border-bottom-gray\">Languages</h3>
\t\t\t<ul>
\t\t\t\t<li>Spanish</li>
\t\t\t\t<li>English</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div id=\"resume-footer\" class=\"row\">
\t\t<div class=\"col\">
\t\t\tDesigned by @AnthonyTalav
\t\t</div>
\t</div>
{% endblock %}
", "index.twig", "C:\\xampp\\htdocs\\cursophp\\views\\index.twig");
    }
}
