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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_3df62a08bef58071a903ff8a82b592c0 extends Template
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
        yield "<div id=\"search\" class=\"input-group w-100\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_search"] ?? null);
        yield "\" class=\"form-control form-control-lg\">
\t<button type=\"button\" data-lang=\"";
        // line 3
        yield ($context["language"] ?? null);
        yield "\" class=\"btn btn-primary btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/search.twig";
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
        return array (  51 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"search\" class=\"input-group w-100\">
\t<input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_search }}\" class=\"form-control form-control-lg\">
\t<button type=\"button\" data-lang=\"{{ language }}\" class=\"btn btn-primary btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</div>
", "catalog/view/template/common/search.twig", "D:\\xampp\\htdocs\\www\\opencartly\\catalog\\view\\template\\common\\search.twig");
    }
}
