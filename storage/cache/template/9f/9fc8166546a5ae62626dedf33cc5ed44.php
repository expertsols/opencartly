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

/* dashboard/view/template/catalog/manufacturer.twig */
class __TwigTemplate_a2df71b7c2a88e6766e625d696ca3078 extends Template
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
      <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-manufacturer').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
      <div class=\"float-end\">
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> ";
        // line 9
        yield ($context["button_action"] ?? null);
        yield " <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-manufacturer\" formaction=\"";
        // line 11
        yield ($context["enable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> ";
        yield ($context["text_enable"] ?? null);
        yield "</button></li>
            <li><button type=\"submit\" form=\"form-manufacturer\" formaction=\"";
        // line 12
        yield ($context["disable"] ?? null);
        yield "\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> ";
        yield ($context["text_disable"] ?? null);
        yield "</button></li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li><button type=\"submit\" form=\"form-manufacturer\" formaction=\"";
        // line 16
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
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 23);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-manufacturer\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card filter-sticky\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 32
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 36
        yield ($context["entry_name"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store-id\" class=\"form-label\">";
        // line 41
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <select name=\"filter_store_id\" id=\"input-store-id\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 45
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 45);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 45) == ($context["filter_store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 45);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-language\" class=\"form-label\">";
        // line 50
        yield ($context["entry_language"] ?? null);
        yield "</label>
                <select name=\"filter_language_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54) == ($context["filter_language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 59
        yield ($context["entry_status"] ?? null);
        yield "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"";
        // line 61
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                  <option value=\"0\"";
        // line 62
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 66
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 67
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 75
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"list\" class=\"card-body\">";
        // line 76
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#form-filter').on('submit', function(e) {
    e.preventDefault();

    let url = \$(this).serialize();

    window.history.pushState({}, null, 'index.php?route=catalog/manufacturer&user_token=";
        // line 94
        yield ($context["user_token"] ?? null);
        yield "&' + url);

    \$('#list').load('index.php?route=catalog/manufacturer.list&user_token=";
        // line 96
        yield ($context["user_token"] ?? null);
        yield "&' + url);
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 102
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(item['label']);
    }
});
//--></script>
";
        // line 119
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/view/template/catalog/manufacturer.twig";
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
        return array (  300 => 119,  280 => 102,  271 => 96,  266 => 94,  245 => 76,  241 => 75,  230 => 67,  226 => 66,  215 => 62,  207 => 61,  202 => 59,  197 => 56,  182 => 54,  178 => 53,  172 => 50,  167 => 47,  152 => 45,  148 => 44,  142 => 41,  133 => 37,  129 => 36,  122 => 32,  113 => 25,  102 => 23,  98 => 22,  93 => 20,  82 => 16,  73 => 12,  67 => 11,  62 => 9,  55 => 7,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-manufacturer').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
      <div class=\"float-end\">
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-list-check\"></i> {{ button_action }} <i class=\"fa-solid fa-caret-down fa-fw\"></i></button>
          <ul class=\"dropdown-menu\">
            <li><button type=\"submit\" form=\"form-manufacturer\" formaction=\"{{ enable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-on text-success\"></i> {{ text_enable }}</button></li>
            <li><button type=\"submit\" form=\"form-manufacturer\" formaction=\"{{ disable }}\" class=\"dropdown-item\"><i class=\"fa-solid fa-toggle-off text-danger\"></i> {{ text_disable }}</button></li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li><button type=\"submit\" form=\"form-manufacturer\" formaction=\"{{ delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"dropdown-item\"><i class=\"fa-regular fa-trash-can text-danger\"></i> {{ text_delete }}</button></li>
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
    <div class=\"row\">
      <div id=\"filter-manufacturer\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card filter-sticky\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_name }}</label>
                <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store-id\" class=\"form-label\">{{ entry_store }}</label>
                <select name=\"filter_store_id\" id=\"input-store-id\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for store in stores %}
                    <option value=\"{{ store.store_id }}\"{% if store.store_id == filter_store_id %} selected{% endif %}>{{ store.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-language\" class=\"form-label\">{{ entry_language }}</label>
                <select name=\"filter_language_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for language in languages %}
                    <option value=\"{{ language.language_id }}\"{% if language.language_id == filter_language_id %} selected{% endif %}>{{ language.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }}</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }}</option>
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"list\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#list').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#list').load(this.href);
});

\$('#form-filter').on('submit', function(e) {
    e.preventDefault();

    let url = \$(this).serialize();

    window.history.pushState({}, null, 'index.php?route=catalog/manufacturer&user_token={{ user_token }}&' + url);

    \$('#list').load('index.php?route=catalog/manufacturer.list&user_token={{ user_token }}&' + url);
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(item['label']);
    }
});
//--></script>
{{ footer }}
", "dashboard/view/template/catalog/manufacturer.twig", "D:\\xampp\\htdocs\\www\\opencartly\\dashboard\\view\\template\\catalog\\manufacturer.twig");
    }
}
