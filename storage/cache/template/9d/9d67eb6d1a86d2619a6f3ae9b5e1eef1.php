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

/* dashboard/view/template/catalog/subscription_plan_list.twig */
class __TwigTemplate_f081d981e6562d244b80615c749878dc extends Template
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
        yield "<form id=\"form-subscription-plan\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#list\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "spd.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 8
        yield ($context["sort_sort_order"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "sp.sort_order")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_sort_order"] ?? null);
        yield "</a></th>
          <th class=\"text-center\"><a href=\"";
        // line 9
        yield ($context["sort_status"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "sp.status")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_status"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 10
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        if (($context["subscription_plans"] ?? null)) {
            // line 15
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 16
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "status", [], "any", false, false, false, 16)) {
                    yield " class=\"table-disabled\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 17);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 18);
                yield "</td>
              <td class=\"text-end\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "sort_order", [], "any", false, false, false, 19);
                yield "</td>
              <td class=\"text-center\">";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "status", [], "any", false, false, false, 20)) {
                    // line 21
                    yield "                  <span class=\"badge bg-success\">";
                    yield ($context["text_enabled"] ?? null);
                    yield "</span>
                ";
                } else {
                    // line 23
                    yield "                  <span class=\"badge bg-danger\">";
                    yield ($context["text_disabled"] ?? null);
                    yield "</span>
                ";
                }
                // line 24
                yield "</td>
              <td class=\"text-end text-nowrap\"><a href=\"";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "edit", [], "any", false, false, false, 25);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "        ";
        } else {
            // line 29
            yield "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 30
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 33
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 37
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 38
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/view/template/catalog/subscription_plan_list.twig";
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
        return array (  171 => 38,  167 => 37,  161 => 33,  155 => 30,  152 => 29,  149 => 28,  138 => 25,  135 => 24,  129 => 23,  123 => 21,  121 => 20,  117 => 19,  113 => 18,  109 => 17,  102 => 16,  97 => 15,  95 => 14,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-subscription-plan\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#list\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'spd.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_sort_order }}\"{% if sort == 'sp.sort_order' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_sort_order }}</a></th>
          <th class=\"text-center\"><a href=\"{{ sort_status }}\"{% if sort == 'sp.status' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_status }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if subscription_plans %}
          {% for subscription_plan in subscription_plans %}
            <tr{% if not subscription_plan.status %} class=\"table-disabled\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ subscription_plan.subscription_plan_id }}\" class=\"form-check-input\"/></td>
              <td>{{ subscription_plan.name }}</td>
              <td class=\"text-end\">{{ subscription_plan.sort_order }}</td>
              <td class=\"text-center\">{% if subscription_plan.status %}
                  <span class=\"badge bg-success\">{{ text_enabled }}</span>
                {% else %}
                  <span class=\"badge bg-danger\">{{ text_disabled }}</span>
                {% endif %}</td>
              <td class=\"text-end text-nowrap\"><a href=\"{{ subscription_plan.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"5\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "dashboard/view/template/catalog/subscription_plan_list.twig", "D:\\xampp\\htdocs\\www\\opencartly\\dashboard\\view\\template\\catalog\\subscription_plan_list.twig");
    }
}
