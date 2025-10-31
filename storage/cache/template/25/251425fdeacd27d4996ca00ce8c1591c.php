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

/* dashboard/view/template/setting/permalinks_tab.twig */
class __TwigTemplate_b99a1375631d30e89b2f1079d0165355 extends Template
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
        yield "<div class=\"row mb-3\">
  <label for=\"input-base-url\" class=\"col-sm-2 col-form-label\">Base URL</label>
  <div class=\"col-sm-10\">
    <input type=\"text\" value=\"";
        // line 4
        yield ($context["config_base_url"] ?? null);
        yield "\" id=\"input-base-url\" class=\"form-control\" placeholder=\"localhost/www/opencartly\"/>
    <div class=\"form-text\">Enter host and optional path (no scheme), e.g. <code>localhost/www/opencartly</code></div>
  </div>
</div>
<fieldset>
  <legend>URL Structure</legend>
  <div class=\"row mb-3\">
    <label for=\"input-url-structure\" class=\"col-sm-2 col-form-label\">Mode</label>
    <div class=\"col-sm-10\">
      <select name=\"config_url_structure\" id=\"input-url-structure\" class=\"form-select\">
        <option value=\"plain\"";
        // line 14
        if ((($context["config_url_structure"] ?? null) == "plain")) {
            yield " selected";
        }
        yield ">Plain</option>
        <option value=\"category\"";
        // line 15
        if ((($context["config_url_structure"] ?? null) == "category")) {
            yield " selected";
        }
        yield ">Category in URL</option>
        <option value=\"custom\"";
        // line 16
        if ((($context["config_url_structure"] ?? null) == "custom")) {
            yield " selected";
        }
        yield ">Custom</option>
      </select>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Remove URL Prefixes</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_remove_url_prefixes\" value=\"1\" checked=\"";
        // line 23
        yield ($context["config_remove_url_prefixes"] ?? null);
        yield "\" input-id=\"input-remove-prefixes\" input-class=\"form-switch form-switch-lg\"></x-switch>
      <div class=\"form-text\">Removes all OpenCart URL prefixes like /catalog/, /information/, /product/, /category/ etc. for cleaner URLs.</div>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Trailing Slash</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_trailing_slash\" value=\"1\" checked=\"";
        // line 30
        yield ($context["config_trailing_slash"] ?? null);
        yield "\" input-id=\"input-trailing-slash\" input-class=\"form-switch form-switch-lg\"></x-switch>
    </div>
  </div>
</fieldset>
<script>
(function(){
  var baseInput = document.getElementById('input-base-url');
  if (!baseInput) return;
  var form = document.getElementById('form-setting');
  if (!form) return;
  var domainHidden = document.createElement('input');
  domainHidden.type = 'hidden';
  domainHidden.name = 'config_base_domain';
  var pathHidden = document.createElement('input');
  pathHidden.type = 'hidden';
  pathHidden.name = 'config_base_path';
  form.appendChild(domainHidden);
  form.appendChild(pathHidden);

  function normalise(val){
    var v = (val || '').trim();
    v = v.replace(/^https?:\\/\\//i, '');
    v = v.replace(/\\\\+/g, '/');
    return v;
  }
  function splitHostPath(val){
    var v = normalise(val);
    var idx = v.indexOf('/');
    var host = idx === -1 ? v : v.slice(0, idx);
    var path = idx === -1 ? '' : '/' + v.slice(idx).replace(/^\\/+|\\/+\$/g, '');
    if (path === '/') path = '';
    return {host: host, path: path};
  }
  function updateHidden(){
    var parts = splitHostPath(baseInput.value);
    domainHidden.value = parts.host;
    pathHidden.value = parts.path;
  }
  baseInput.addEventListener('input', updateHidden);
  updateHidden();
})();
</script>
<fieldset>
  <legend>URL Formats</legend>
  <div class=\"alert alert-info\">
    OpenCart uses SEO keywords to build URLs for categories, products, and information pages. There are no custom prefix selectors; enable SEO URLs in Server settings to use the default format.
  </div>
</fieldset>
<fieldset>
  <legend>Redirects</legend>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Auto Redirect</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_auto_redirect\" value=\"1\" checked=\"";
        // line 83
        yield ($context["config_auto_redirect"] ?? null);
        yield "\" input-id=\"input-auto-redirect\" input-class=\"form-switch form-switch-lg\"></x-switch>
      <div class=\"form-text\">Create redirects when SEO URLs change.</div>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label for=\"input-redirect-status\" class=\"col-sm-2 col-form-label\">Redirect Type</label>
    <div class=\"col-sm-10\">
      <select name=\"config_redirect_status\" id=\"input-redirect-status\" class=\"form-select\">
        <option value=\"301\"";
        // line 91
        if ((($context["config_redirect_status"] ?? null) == "301")) {
            yield " selected";
        }
        yield ">301 - Permanent</option>
        <option value=\"302\"";
        // line 92
        if ((($context["config_redirect_status"] ?? null) == "302")) {
            yield " selected";
        }
        yield ">302 - Temporary</option>
        <option value=\"307\"";
        // line 93
        if ((($context["config_redirect_status"] ?? null) == "307")) {
            yield " selected";
        }
        yield ">307 - Temporary (Preserve Method)</option>
      </select>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Repair Redirects DB</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_database_redirect_repair\" value=\"1\" checked=\"";
        // line 100
        yield ($context["config_database_redirect_repair"] ?? null);
        yield "\" input-id=\"input-redirect-repair\" input-class=\"form-switch form-switch-lg\"></x-switch>
    </div>
  </div>
</fieldset>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/view/template/setting/permalinks_tab.twig";
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
        return array (  185 => 100,  173 => 93,  167 => 92,  161 => 91,  150 => 83,  94 => 30,  84 => 23,  72 => 16,  66 => 15,  60 => 14,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row mb-3\">
  <label for=\"input-base-url\" class=\"col-sm-2 col-form-label\">Base URL</label>
  <div class=\"col-sm-10\">
    <input type=\"text\" value=\"{{ config_base_url }}\" id=\"input-base-url\" class=\"form-control\" placeholder=\"localhost/www/opencartly\"/>
    <div class=\"form-text\">Enter host and optional path (no scheme), e.g. <code>localhost/www/opencartly</code></div>
  </div>
</div>
<fieldset>
  <legend>URL Structure</legend>
  <div class=\"row mb-3\">
    <label for=\"input-url-structure\" class=\"col-sm-2 col-form-label\">Mode</label>
    <div class=\"col-sm-10\">
      <select name=\"config_url_structure\" id=\"input-url-structure\" class=\"form-select\">
        <option value=\"plain\"{% if config_url_structure == 'plain' %} selected{% endif %}>Plain</option>
        <option value=\"category\"{% if config_url_structure == 'category' %} selected{% endif %}>Category in URL</option>
        <option value=\"custom\"{% if config_url_structure == 'custom' %} selected{% endif %}>Custom</option>
      </select>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Remove URL Prefixes</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_remove_url_prefixes\" value=\"1\" checked=\"{{ config_remove_url_prefixes }}\" input-id=\"input-remove-prefixes\" input-class=\"form-switch form-switch-lg\"></x-switch>
      <div class=\"form-text\">Removes all OpenCart URL prefixes like /catalog/, /information/, /product/, /category/ etc. for cleaner URLs.</div>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Trailing Slash</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_trailing_slash\" value=\"1\" checked=\"{{ config_trailing_slash }}\" input-id=\"input-trailing-slash\" input-class=\"form-switch form-switch-lg\"></x-switch>
    </div>
  </div>
</fieldset>
<script>
(function(){
  var baseInput = document.getElementById('input-base-url');
  if (!baseInput) return;
  var form = document.getElementById('form-setting');
  if (!form) return;
  var domainHidden = document.createElement('input');
  domainHidden.type = 'hidden';
  domainHidden.name = 'config_base_domain';
  var pathHidden = document.createElement('input');
  pathHidden.type = 'hidden';
  pathHidden.name = 'config_base_path';
  form.appendChild(domainHidden);
  form.appendChild(pathHidden);

  function normalise(val){
    var v = (val || '').trim();
    v = v.replace(/^https?:\\/\\//i, '');
    v = v.replace(/\\\\+/g, '/');
    return v;
  }
  function splitHostPath(val){
    var v = normalise(val);
    var idx = v.indexOf('/');
    var host = idx === -1 ? v : v.slice(0, idx);
    var path = idx === -1 ? '' : '/' + v.slice(idx).replace(/^\\/+|\\/+\$/g, '');
    if (path === '/') path = '';
    return {host: host, path: path};
  }
  function updateHidden(){
    var parts = splitHostPath(baseInput.value);
    domainHidden.value = parts.host;
    pathHidden.value = parts.path;
  }
  baseInput.addEventListener('input', updateHidden);
  updateHidden();
})();
</script>
<fieldset>
  <legend>URL Formats</legend>
  <div class=\"alert alert-info\">
    OpenCart uses SEO keywords to build URLs for categories, products, and information pages. There are no custom prefix selectors; enable SEO URLs in Server settings to use the default format.
  </div>
</fieldset>
<fieldset>
  <legend>Redirects</legend>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Auto Redirect</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_auto_redirect\" value=\"1\" checked=\"{{ config_auto_redirect }}\" input-id=\"input-auto-redirect\" input-class=\"form-switch form-switch-lg\"></x-switch>
      <div class=\"form-text\">Create redirects when SEO URLs change.</div>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label for=\"input-redirect-status\" class=\"col-sm-2 col-form-label\">Redirect Type</label>
    <div class=\"col-sm-10\">
      <select name=\"config_redirect_status\" id=\"input-redirect-status\" class=\"form-select\">
        <option value=\"301\"{% if config_redirect_status == '301' %} selected{% endif %}>301 - Permanent</option>
        <option value=\"302\"{% if config_redirect_status == '302' %} selected{% endif %}>302 - Temporary</option>
        <option value=\"307\"{% if config_redirect_status == '307' %} selected{% endif %}>307 - Temporary (Preserve Method)</option>
      </select>
    </div>
  </div>
  <div class=\"row mb-3\">
    <label class=\"col-sm-2 col-form-label\">Repair Redirects DB</label>
    <div class=\"col-sm-10\">
      <x-switch name=\"config_database_redirect_repair\" value=\"1\" checked=\"{{ config_database_redirect_repair }}\" input-id=\"input-redirect-repair\" input-class=\"form-switch form-switch-lg\"></x-switch>
    </div>
  </div>
</fieldset>

", "dashboard/view/template/setting/permalinks_tab.twig", "D:\\xampp\\htdocs\\www\\opencartly\\dashboard\\view\\template\\setting\\permalinks_tab.twig");
    }
}
