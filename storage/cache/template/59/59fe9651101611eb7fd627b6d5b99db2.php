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

/* extension/opencart/catalog/view/template/module/banner.twig */
class __TwigTemplate_dde6b699c038deddce54b6be0a1deb64 extends Template
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
        $context["show_brand_heading"] = (($context["items"] ?? null) >= 5);
        // line 2
        if (($context["show_brand_heading"] ?? null)) {
            // line 3
            yield "  <h3 class=\"module-heading text-center mb-4\">Best Selling Brands</h3>
";
        }
        // line 5
        yield "<div id=\"carousel-banner-";
        yield ($context["module"] ?? null);
        yield "\" class=\"carousel slide";
        if ((($context["effect"] ?? null) == "fade")) {
            yield " carousel-fade";
        }
        yield "\" data-bs-ride=\"carousel\">
  ";
        // line 6
        if ((($context["indicators"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 7
            yield "    <div class=\"carousel-indicators\">
      ";
            // line 8
            $context["banner_row"] = 0;
            // line 9
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 10
                yield "        <button type=\"button\" data-bs-target=\"#carousel-banner-";
                yield ($context["module"] ?? null);
                yield "\" data-bs-slide-to=\"";
                yield ($context["banner_row"] ?? null);
                yield "\"";
                if ((($context["banner_row"] ?? null) == 0)) {
                    yield " class=\"active\"";
                }
                yield "></button>
        ";
                // line 11
                $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
                // line 12
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "    </div>
  ";
        }
        // line 15
        yield "  <div class=\"carousel-inner\">
    ";
        // line 16
        $context["banner_row"] = 0;
        // line 17
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 18
            yield "      <div class=\"carousel-item";
            if ((($context["banner_row"] ?? null) == 0)) {
                yield " active";
            }
            yield "\">
        <div class=\"row justify-content-center\">
          ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 21
                yield "            <div class=\"col-";
                yield Twig\Extension\CoreExtension::round((12 / ($context["items"] ?? null)));
                yield " text-center\">
              ";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 23);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 23);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 23);
                    yield "\" class=\"img-fluid\"/></a>
              ";
                } else {
                    // line 25
                    yield "                <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 25);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 25);
                    yield "\" class=\"img-fluid\"/>
              ";
                }
                // line 27
                yield "            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        </div>
      </div>
      ";
            // line 31
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 32
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carousel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "  </div>
  ";
        // line 34
        if ((($context["controls"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 35
            yield "    <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-";
            yield ($context["module"] ?? null);
            yield "\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
    <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-";
            // line 36
            yield ($context["module"] ?? null);
            yield "\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
  ";
        }
        // line 38
        yield "</div>
<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    new bootstrap.Carousel(document.querySelector('#carousel-banner-";
        // line 41
        yield ($context["module"] ?? null);
        yield "'), {
        ride: 'carousel',
        interval: ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["interval"] ?? null), "js");
        yield ",
        wrap: true
    });
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/banner.twig";
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
        return array (  185 => 43,  180 => 41,  175 => 38,  170 => 36,  165 => 35,  163 => 34,  160 => 33,  154 => 32,  152 => 31,  148 => 29,  141 => 27,  133 => 25,  123 => 23,  121 => 22,  116 => 21,  112 => 20,  104 => 18,  99 => 17,  97 => 16,  94 => 15,  90 => 13,  84 => 12,  82 => 11,  71 => 10,  66 => 9,  64 => 8,  61 => 7,  59 => 6,  50 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set show_brand_heading = items >= 5 %}
{% if show_brand_heading %}
  <h3 class=\"module-heading text-center mb-4\">Best Selling Brands</h3>
{% endif %}
<div id=\"carousel-banner-{{ module }}\" class=\"carousel slide{% if effect == 'fade' %} carousel-fade{% endif %}\" data-bs-ride=\"carousel\">
  {% if indicators and banners|batch(items)|length > 1 %}
    <div class=\"carousel-indicators\">
      {% set banner_row = 0 %}
      {% for banner in banners|batch(items) %}
        <button type=\"button\" data-bs-target=\"#carousel-banner-{{ module }}\" data-bs-slide-to=\"{{ banner_row }}\"{% if banner_row == 0 %} class=\"active\"{% endif %}></button>
        {% set banner_row = banner_row + 1 %}
      {% endfor %}
    </div>
  {% endif %}
  <div class=\"carousel-inner\">
    {% set banner_row = 0 %}
    {% for carousel in banners|batch(items) %}
      <div class=\"carousel-item{% if banner_row == 0 %} active{% endif %}\">
        <div class=\"row justify-content-center\">
          {% for banner in carousel %}
            <div class=\"col-{{ (12 / items)|round }} text-center\">
              {% if banner.link %}
                <a href=\"{{ banner.link }}\"><img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-fluid\"/></a>
              {% else %}
                <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-fluid\"/>
              {% endif %}
            </div>
          {% endfor %}
        </div>
      </div>
      {% set banner_row = banner_row + 1 %}
    {% endfor %}
  </div>
  {% if controls and banners|batch(items)|length > 1 %}
    <button type=\"button\" class=\"carousel-control-prev\" data-bs-target=\"#carousel-banner-{{ module }}\" data-bs-slide=\"prev\"><span class=\"fa-solid fa-chevron-left\"></span></button>
    <button type=\"button\" class=\"carousel-control-next\" data-bs-target=\"#carousel-banner-{{ module }}\" data-bs-slide=\"next\"><span class=\"fa-solid fa-chevron-right\"></span></button>
  {% endif %}
</div>
<script type=\"text/javascript\"><!--
\$(document).ready(function () {
    new bootstrap.Carousel(document.querySelector('#carousel-banner-{{ module }}'), {
        ride: 'carousel',
        interval: {{ interval|escape('js') }},
        wrap: true
    });
});
//--></script>
", "extension/opencart/catalog/view/template/module/banner.twig", "D:\\xampp\\htdocs\\www\\opencartly\\extension\\opencart\\catalog\\view\\template\\module\\banner.twig");
    }
}
