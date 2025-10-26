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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_7c8d39e7c1c0f33109d247a71b99b99a extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "  <script src=\"";
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 16
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        yield ($context["icons"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 18
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 25);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 25);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 25);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 28);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 31
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 31);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 31);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 34
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "</head>
<body>
<div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
<nav id=\"top\">
  <div class=\"container\">
    <div class=\"nav float-start\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\">";
        // line 43
        yield ($context["currency"] ?? null);
        yield "</li>
        <li class=\"list-inline-item\">";
        // line 44
        yield ($context["language"] ?? null);
        yield "</li>
      </ul>
    </div>
    <div class=\"nav float-end\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\"><a href=\"";
        // line 49
        yield ($context["contact"] ?? null);
        yield "\"><i class=\"fa-solid fa-phone\"></i></a> <span class=\"d-none d-md-inline\">";
        yield ($context["telephone"] ?? null);
        yield "</span></li>
        <li class=\"list-inline-item\">
          <div class=\"dropdown\">
            <a href=\"";
        // line 52
        yield ($context["account"] ?? null);
        yield "\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-md-inline\">";
        yield ($context["text_account"] ?? null);
        yield "</span> <i class=\"fa-solid fa-caret-down\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              ";
        // line 54
        if ( !($context["logged"] ?? null)) {
            // line 55
            yield "                <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
                <li><a href=\"";
            // line 56
            yield ($context["login"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
              ";
        } else {
            // line 58
            yield "                <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
                <li><a href=\"";
            // line 59
            yield ($context["order"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
                <li><a href=\"";
            // line 60
            yield ($context["transaction"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
                <li><a href=\"";
            // line 61
            yield ($context["download"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
                <li><a href=\"";
            // line 62
            yield ($context["logout"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
              ";
        }
        // line 64
        yield "            </ul>
          </div>
        </li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 67
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-md-inline\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 68
        yield ($context["shopping_cart"] ?? null);
        yield "\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-md-inline\">";
        yield ($context["text_shopping_cart"] ?? null);
        yield "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 69
        yield ($context["checkout"] ?? null);
        yield "\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-md-inline\">";
        yield ($context["text_checkout"] ?? null);
        yield "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-lg-4\">
        <div id=\"logo\">
          ";
        // line 79
        if (($context["logo"] ?? null)) {
            // line 80
            yield "            <a href=\"";
            yield ($context["home"] ?? null);
            yield "\"><img src=\"";
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/></a>
          ";
        } else {
            // line 82
            yield "            <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
          ";
        }
        // line 84
        yield "        </div>
      </div>
      <div class=\"col-md-5\">";
        // line 86
        yield ($context["search"] ?? null);
        yield "</div>
      <div id=\"header-cart\" class=\"col-md-4 col-lg-3 mb-2\">";
        // line 87
        yield ($context["cart"] ?? null);
        yield "</div>
    </div>
  </div>
</header>
<main>
  ";
        // line 92
        yield ($context["menu"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  323 => 92,  315 => 87,  311 => 86,  307 => 84,  299 => 82,  287 => 80,  285 => 79,  268 => 69,  260 => 68,  252 => 67,  247 => 64,  240 => 62,  234 => 61,  228 => 60,  222 => 59,  215 => 58,  208 => 56,  201 => 55,  199 => 54,  192 => 52,  184 => 49,  176 => 44,  172 => 43,  163 => 36,  154 => 34,  149 => 33,  138 => 31,  133 => 30,  124 => 28,  119 => 27,  106 => 25,  102 => 24,  93 => 18,  89 => 17,  85 => 16,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <link href=\"{{ bootstrap }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
</head>
<body>
<div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
<nav id=\"top\">
  <div class=\"container\">
    <div class=\"nav float-start\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\">{{ currency }}</li>
        <li class=\"list-inline-item\">{{ language }}</li>
      </ul>
    </div>
    <div class=\"nav float-end\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\"><a href=\"{{ contact }}\"><i class=\"fa-solid fa-phone\"></i></a> <span class=\"d-none d-md-inline\">{{ telephone }}</span></li>
        <li class=\"list-inline-item\">
          <div class=\"dropdown\">
            <a href=\"{{ account }}\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-md-inline\">{{ text_account }}</span> <i class=\"fa-solid fa-caret-down\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              {% if not logged %}
                <li><a href=\"{{ register }}\" class=\"dropdown-item\">{{ text_register }}</a></li>
                <li><a href=\"{{ login }}\" class=\"dropdown-item\">{{ text_login }}</a></li>
              {% else %}
                <li><a href=\"{{ account }}\" class=\"dropdown-item\">{{ text_account }}</a></li>
                <li><a href=\"{{ order }}\" class=\"dropdown-item\">{{ text_order }}</a></li>
                <li><a href=\"{{ transaction }}\" class=\"dropdown-item\">{{ text_transaction }}</a></li>
                <li><a href=\"{{ download }}\" class=\"dropdown-item\">{{ text_download }}</a></li>
                <li><a href=\"{{ logout }}\" class=\"dropdown-item\">{{ text_logout }}</a></li>
              {% endif %}
            </ul>
          </div>
        </li>
        <li class=\"list-inline-item\"><a href=\"{{ wishlist }}\" id=\"wishlist-total\" title=\"{{ text_wishlist }}\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-md-inline\">{{ text_wishlist }}</span></a></li>
        <li class=\"list-inline-item\"><a href=\"{{ shopping_cart }}\" title=\"{{ text_shopping_cart }}\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-md-inline\">{{ text_shopping_cart }}</span></a></li>
        <li class=\"list-inline-item\"><a href=\"{{ checkout }}\" title=\"{{ text_checkout }}\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-md-inline\">{{ text_checkout }}</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-lg-4\">
        <div id=\"logo\">
          {% if logo %}
            <a href=\"{{ home }}\"><img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/></a>
          {% else %}
            <h1><a href=\"{{ home }}\">{{ name }}</a></h1>
          {% endif %}
        </div>
      </div>
      <div class=\"col-md-5\">{{ search }}</div>
      <div id=\"header-cart\" class=\"col-md-4 col-lg-3 mb-2\">{{ cart }}</div>
    </div>
  </div>
</header>
<main>
  {{ menu }}
", "catalog/view/template/common/header.twig", "D:\\xampp\\htdocs\\www\\opencartly\\catalog\\view\\template\\common\\header.twig");
    }
}
