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

/* dashbaord/view/template/common/login.twig */
class __TwigTemplate_57d029fba098bcd32b2c5ec962295b18 extends Template
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
        yield "
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-10 col-md-8 col-lg-5\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-lock\"></i> ";
        // line 9
        yield ($context["text_login"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-login\" action=\"";
        // line 11
        yield ($context["login"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
              <div id=\"alert\">
                ";
        // line 13
        if (($context["error_warning"] ?? null)) {
            // line 14
            yield "                  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
                ";
        }
        // line 16
        yield "                ";
        if (($context["success"] ?? null)) {
            // line 17
            yield "                  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
                ";
        }
        // line 19
        yield "              </div>
              <div class=\"mb-3\">
                <label for=\"input-username\" class=\"form-label\">";
        // line 21
        yield ($context["entry_username"] ?? null);
        yield "</label>
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><i class=\"fa-solid fa-user\"></i></div>
                  <input type=\"text\" name=\"username\" value=\"\" placeholder=\"";
        // line 24
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-password\" class=\"form-label\">";
        // line 28
        yield ($context["entry_password"] ?? null);
        yield "</label>
                <div class=\"input-group mb-2\">
                  <div class=\"input-group-text\"><i class=\"fa-solid fa-lock\"></i></div>
                  <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 31
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\"/>
                  <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"toggle-password\" aria-label=\"Toggle password visibility\">
                    <i class=\"fa-solid fa-eye\" id=\"eye-icon\"></i>
                  </button>
                </div>
                ";
        // line 36
        if (($context["forgotten"] ?? null)) {
            // line 37
            yield "                  <div class=\"mb-3\"><a href=\"";
            yield ($context["forgotten"] ?? null);
            yield "\">";
            yield ($context["text_forgotten"] ?? null);
            yield "</a></div>
                ";
        }
        // line 39
        yield "              </div>
              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-key\"></i> ";
        // line 41
        yield ($context["button_login"] ?? null);
        yield "</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const togglePassword = document.getElementById('toggle-password');
  const passwordInput = document.getElementById('input-password');
  const eyeIcon = document.getElementById('eye-icon');
  
  if (togglePassword && passwordInput && eyeIcon) {
    togglePassword.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      
      // Toggle icon between eye and eye-slash
      if (type === 'password') {
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      } else {
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      }
    });
  }
});
</script>

";
        // line 75
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
        return "dashbaord/view/template/common/login.twig";
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
        return array (  162 => 75,  125 => 41,  121 => 39,  113 => 37,  111 => 36,  103 => 31,  97 => 28,  90 => 24,  84 => 21,  80 => 19,  74 => 17,  71 => 16,  65 => 14,  63 => 13,  58 => 11,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-10 col-md-8 col-lg-5\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-lock\"></i> {{ text_login }}</div>
          <div class=\"card-body\">
            <form id=\"form-login\" action=\"{{ login }}\" method=\"post\" data-oc-toggle=\"ajax\">
              <div id=\"alert\">
                {% if error_warning %}
                  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
                {% endif %}
                {% if success %}
                  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
                {% endif %}
              </div>
              <div class=\"mb-3\">
                <label for=\"input-username\" class=\"form-label\">{{ entry_username }}</label>
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><i class=\"fa-solid fa-user\"></i></div>
                  <input type=\"text\" name=\"username\" value=\"\" placeholder=\"{{ entry_username }}\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-password\" class=\"form-label\">{{ entry_password }}</label>
                <div class=\"input-group mb-2\">
                  <div class=\"input-group-text\"><i class=\"fa-solid fa-lock\"></i></div>
                  <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
                  <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"toggle-password\" aria-label=\"Toggle password visibility\">
                    <i class=\"fa-solid fa-eye\" id=\"eye-icon\"></i>
                  </button>
                </div>
                {% if forgotten %}
                  <div class=\"mb-3\"><a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
                {% endif %}
              </div>
              <div class=\"text-end\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-key\"></i> {{ button_login }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const togglePassword = document.getElementById('toggle-password');
  const passwordInput = document.getElementById('input-password');
  const eyeIcon = document.getElementById('eye-icon');
  
  if (togglePassword && passwordInput && eyeIcon) {
    togglePassword.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      
      // Toggle icon between eye and eye-slash
      if (type === 'password') {
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      } else {
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      }
    });
  }
});
</script>

{{ footer }}
", "dashbaord/view/template/common/login.twig", "D:\\xampp\\htdocs\\www\\opencartly\\dashbaord\\view\\template\\common\\login.twig");
    }
}
