<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* dashboard/view/template/catalog/subscription_plan.twig */
class __TwigTemplate_25fb523ca9d2cb05ae28bbb1e0ffe36b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <a href=\"";
        // line 6
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> ";
        // line 8
        yield ($context["button_action"] ?? null);
        yield " <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"";
        // line 10
        yield ($context["copy"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-regular fa-copy\"></i> ";
        yield ($context["button_copy"] ?? null);
        yield "</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"";
        // line 12
        yield ($context["enable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> ";
        yield ($context["text_enable"] ?? null);
        yield "</button></li>
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"";
        // line 13
        yield ($context["disable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> ";
        yield ($context["text_disable"] ?? null);
        yield "</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"";
        // line 15
        yield ($context["delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> ";
        yield ($context["text_delete"] ?? null);
        yield "</button></li>
          </ul>
        </div>
      </div>
      <h1>";
        // line 19
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 22
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 22);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 22);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 29
        yield ($context["text_list"] ?? null);
        yield "</div>
      <div id=\"list\" class=\"card-body\">";
        // line 30
        yield ($context["list"] ?? null);
        yield "</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});
//--></script>
";
        // line 41
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/view/template/catalog/subscription_plan.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  139 => 41,  125 => 30,  121 => 29,  114 => 24,  103 => 22,  99 => 21,  94 => 19,  83 => 15,  76 => 13,  70 => 12,  63 => 10,  58 => 8,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> {{ button_action }} <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"{{ copy }}\" class=\"dropdown-item\"><i class=\"fa-regular fa-copy\"></i> {{ button_copy }}</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"{{ enable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> {{ text_enable }}</button></li>
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"{{ disable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> {{ text_disable }}</button></li>
            <li><hr class=\"dropdown-divider\"></li>
            <li><button type=\"submit\" form=\"form-subscription-plan\" formaction=\"{{ delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> {{ text_delete }}</button></li>
          </ul>
        </div>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
      <div id=\"list\" class=\"card-body\">{{ list }}</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});
//--></script>
{{ footer }}", "dashboard/view/template/catalog/subscription_plan.twig", "D:\\xampp\\htdocs\\www\\opencartly\\dashboard\\view\\template\\catalog\\subscription_plan.twig");
    }
}
