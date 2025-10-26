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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_002bc1eac050a1efc99c9ca9f10c5b36 extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            yield "  <div class=\"container\">
    <nav id=\"menu\" class=\"navbar navbar-expand-lg navbar-light bg-primary\">
      <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">";
            // line 4
            yield ($context["text_category"] ?? null);
            yield "</div>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#narbar-menu\"><i class=\"fa-solid fa-bars\"></i></button>
      <div class=\"collapse navbar-collapse\" id=\"narbar-menu\">
        <ul class=\"nav navbar-nav\">
          <li class=\"nav-item\"><a href=\"";
            // line 8
            yield ($context["home"] ?? null);
            yield "\" class=\"nav-link\">";
            yield ($context["text_home"] ?? null);
            yield "</a></li>
          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) {
                    // line 11
                    yield "              <li class=\"nav-item dropdown\"><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 11);
                    yield "\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                    yield "</a>
                <div class=\"dropdown-menu\">
                  <div class=\"dropdown-inner\">
                    ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14), (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) / Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 14), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 15
                        yield "                      <ul class=\"list-unstyled\">
                        ";
                        // line 16
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 17
                            yield "                          <li><a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 17);
                            yield "\" class=\"nav-link\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 17);
                            yield "</a></li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 19
                        yield "                      </ul>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['children'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    yield "                  </div>
                  <a href=\"";
                    // line 22
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 22);
                    yield "\" class=\"see-all\">";
                    yield ($context["text_all"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22);
                    yield "</a>
                </div>
              </li>
            ";
                } else {
                    // line 26
                    yield "              <li class=\"nav-item\"><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                    yield "\" class=\"nav-link\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                    yield "</a></li>
            ";
                }
                // line 28
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        </ul>
      </div>
    </nav>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/menu.twig";
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
        return array (  134 => 29,  128 => 28,  120 => 26,  109 => 22,  106 => 21,  99 => 19,  88 => 17,  84 => 16,  81 => 15,  77 => 14,  68 => 11,  65 => 10,  61 => 9,  55 => 8,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if categories %}
  <div class=\"container\">
    <nav id=\"menu\" class=\"navbar navbar-expand-lg navbar-light bg-primary\">
      <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">{{ text_category }}</div>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#narbar-menu\"><i class=\"fa-solid fa-bars\"></i></button>
      <div class=\"collapse navbar-collapse\" id=\"narbar-menu\">
        <ul class=\"nav navbar-nav\">
          <li class=\"nav-item\"><a href=\"{{ home }}\" class=\"nav-link\">{{ text_home }}</a></li>
          {% for category in categories %}
            {% if category.children %}
              <li class=\"nav-item dropdown\"><a href=\"{{ category.href }}\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">{{ category.name }}</a>
                <div class=\"dropdown-menu\">
                  <div class=\"dropdown-inner\">
                    {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}
                      <ul class=\"list-unstyled\">
                        {% for child in children %}
                          <li><a href=\"{{ child.href }}\" class=\"nav-link\">{{ child.name }}</a></li>
                        {% endfor %}
                      </ul>
                    {% endfor %}
                  </div>
                  <a href=\"{{ category.href }}\" class=\"see-all\">{{ text_all }} {{ category.name }}</a>
                </div>
              </li>
            {% else %}
              <li class=\"nav-item\"><a href=\"{{ category.href }}\" class=\"nav-link\">{{ category.name }}</a></li>
            {% endif %}
          {% endfor %}
        </ul>
      </div>
    </nav>
  </div>
{% endif %}
", "catalog/view/template/common/menu.twig", "D:\\xampp\\htdocs\\www\\opencartly\\catalog\\view\\template\\common\\menu.twig");
    }
}
