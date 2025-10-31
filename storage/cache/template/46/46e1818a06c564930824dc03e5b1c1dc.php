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

/* dashboard/view/template/setting/setting.twig */
class __TwigTemplate_a4ce9dd00bed69ec70dc4d673ef633ba extends Template
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
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        yield ($context["tab_local"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_mail"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_server"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-permalinks\" data-bs-toggle=\"tab\" class=\"nav-link\" data-oc-load=\"";
        // line 28
        yield ($context["url_permalinks"] ?? null);
        yield "\" data-oc-target=\"#tab-permalinks\">";
        yield ($context["tab_permalinks"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"accordion\" id=\"accordion-general\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-general\">";
        // line 34
        yield ($context["text_general"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-general\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <ul class=\"nav nav-tabs\">
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            yield "                          <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 39)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 39);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            yield "</a></li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                      </ul>
                      <div class=\"tab-content\">
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            yield "                          <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) {
                yield " active";
            }
            yield "\">
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-title-";
            // line 46
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"config_description[";
            // line 48
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            yield "][meta_title]\" value=\"";
            yield (((($_v0 = ($context["config_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["config_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null), "meta_title", [], "any", false, false, false, 48)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            yield "\" class=\"form-control\" required/>
                                <div id=\"error-meta-title-";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            yield "\" class=\"invalid-feedback\"></div>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-description-";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[";
            // line 55
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            yield "\" class=\"form-control\">";
            yield (((($_v2 = ($context["config_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["config_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null), "meta_description", [], "any", false, false, false, 55)) : (""));
            yield "</textarea>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-keyword-";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "\" class=\"form-control\">";
            yield (((($_v4 = ($context["config_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["config_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 61)) : (""));
            yield "</textarea>
                              </div>
                            </div>
                          </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-theme\">";
        // line 71
        yield ($context["text_theme"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-theme\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 75
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"";
        // line 78
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 80
        yield ($context["button_edit"] ?? null);
        yield "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 81
        yield ($context["button_clear"] ?? null);
        yield "</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 87
        yield ($context["entry_icon"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"";
        // line 90
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 92
        yield ($context["button_edit"] ?? null);
        yield "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 93
        yield ($context["button_clear"] ?? null);
        yield "</button>
                            </div>
                          </div>
                          <div class=\"form-text\">";
        // line 96
        yield ($context["help_icon"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 100
        yield ($context["entry_theme"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 104
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 104);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 104) == ($context["config_theme"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 104);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "                          </select>
                          <br/>
                          <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 112
        yield ($context["entry_layout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 116
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 116);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 116) == ($context["config_layout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 116);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-store\">";
        // line 125
        yield ($context["text_store"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-store\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 129
        yield ($context["entry_name"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_name\" value=\"";
        // line 131
        yield ($context["config_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" required/>
                          <div id=\"error-name\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 136
        yield ($context["entry_owner"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_owner\" value=\"";
        // line 138
        yield ($context["config_owner"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_owner"] ?? null);
        yield "\" id=\"input-owner\" class=\"form-control\" required/>
                          <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 143
        yield ($context["entry_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 145
        yield ($context["entry_address"] ?? null);
        yield "\" id=\"input-address\" class=\"form-control\" required>";
        yield ($context["config_address"] ?? null);
        yield "</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 149
        yield ($context["entry_email"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_email\" value=\"";
        // line 151
        yield ($context["config_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/>
                          <div id=\"error-email\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 156
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 158
        yield ($context["config_telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-contact\">";
        // line 166
        yield ($context["text_contact"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-contact\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 170
        yield ($context["entry_image"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"";
        // line 173
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        yield ($context["config_image"] ?? null);
        yield "\" id=\"input-image\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 175
        yield ($context["button_edit"] ?? null);
        yield "</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 176
        yield ($context["button_clear"] ?? null);
        yield "</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 182
        yield ($context["entry_open"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 184
        yield ($context["entry_open"] ?? null);
        yield "\" id=\"input-open\" class=\"form-control\">";
        yield ($context["config_open"] ?? null);
        yield "</textarea>
                          <div class=\"form-text\">";
        // line 185
        yield ($context["help_open"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 189
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 191
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["config_comment"] ?? null);
        yield "</textarea>
                          <div class=\"form-text\">";
        // line 192
        yield ($context["help_comment"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      ";
        // line 195
        if (($context["locations"] ?? null)) {
            // line 196
            yield "                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
            // line 197
            yield ($context["entry_location"] ?? null);
            yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 201
                yield "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 202
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 202);
                yield "\" id=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 202);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 202), ($context["config_location"] ?? null))) {
                    yield " checked";
                }
                yield "/> <label for=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 202);
                yield "\" class=\"form-check-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 202);
                yield "</label>
                                </div>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "                            </div>
                            <div class=\"form-text\">";
            // line 206
            yield ($context["help_location"] ?? null);
            yield "</div>
                          </div>
                        </div>
                      ";
        }
        // line 210
        yield "                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 217
        yield ($context["text_region"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 219
        yield ($context["entry_country"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-country name=\"config_country_id\" value=\"";
        // line 221
        yield ($context["config_country_id"] ?? null);
        yield "\" id=\"x-country\" input-id=\"input-country\" input-class=\"form-select\" required>
                      <option value=\"0\">";
        // line 222
        yield ($context["text_select"] ?? null);
        yield "</option>
                    </x-country>
                    <div id=\"error-country\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 228
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-zone name=\"config_zone_id\" value=\"";
        // line 230
        yield ($context["config_zone_id"] ?? null);
        yield "\" target=\"x-country\" input-id=\"input-zone\" input-class=\"form-select\" required></x-zone>
                    <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 235
        yield ($context["entry_timezone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 239
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 239);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 239) == ($context["config_timezone"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 239);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 246
        yield ($context["text_language"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">";
        // line 248
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 252
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 252);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 252) == ($context["config_language_catalog"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 252);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 258
        yield ($context["entry_language_admin"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 262
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 262);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 262) == ($context["config_language_admin"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 262);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 269
        yield ($context["text_currency"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 271
        yield ($context["entry_currency"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 275
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 275);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 275) == ($context["config_currency"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 275);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        yield "                    </select>
                    <div class=\"form-text\">";
        // line 278
        yield ($context["help_currency"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 282
        yield ($context["entry_currency_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 286
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 286);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 286) == ($context["config_currency_engine"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 286);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency_engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 292
        yield ($context["entry_currency_auto"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_currency_auto\" value=\"1\" checked=\"";
        // line 294
        yield ($context["config_currency_auto"] ?? null);
        yield "\" input-id=\"input-currency-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 295
        yield ($context["help_currency_auto"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 300
        yield ($context["text_measurement"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 302
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 306
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 306);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 306) == ($context["config_length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 306);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 312
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 316
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 316);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 316) == ($context["config_weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 316);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 326
        yield ($context["text_product"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 330
        yield ($context["entry_product_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 332
        yield ($context["config_product_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product_description_length"] ?? null);
        yield "\" id=\"input-product-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 333
        yield ($context["help_product_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 338
        yield ($context["entry_pagination"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 340
        yield ($context["config_pagination"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination"] ?? null);
        yield "\" id=\"input-pagination\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 341
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 346
        yield ($context["entry_product_count"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_count\" value=\"1\" checked=\"";
        // line 348
        yield ($context["config_product_count"] ?? null);
        yield "\" input-id=\"input-product-count\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 349
        yield ($context["help_product_count"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 353
        yield ($context["entry_pagination_admin"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 355
        yield ($context["config_pagination_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination_admin"] ?? null);
        yield "\" id=\"input-pagination-admin\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 356
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">";
        // line 361
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"";
        // line 363
        yield ($context["config_autocomplete_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "\" id=\"input-autocomplete-limit\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 364
        yield ($context["help_autocomplete_limit"] ?? null);
        yield "</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 369
        yield ($context["entry_product_report"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_report_status\" value=\"1\" checked=\"";
        // line 371
        yield ($context["config_product_report_status"] ?? null);
        yield "\" input-id=\"input-product-report\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 372
        yield ($context["help_product_report"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 379
        yield ($context["text_review"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 383
        yield ($context["entry_review_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_status\" value=\"1\" checked=\"";
        // line 385
        yield ($context["config_review_status"] ?? null);
        yield "\" input-id=\"input-review-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 386
        yield ($context["help_review"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 390
        yield ($context["entry_review_purchased"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_purchased\" value=\"1\" checked=\"";
        // line 392
        yield ($context["config_review_purchased"] ?? null);
        yield "\" input-id=\"input-review-purchased\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 393
        yield ($context["help_review_purchased"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 397
        yield ($context["entry_review_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_guest\" value=\"1\" checked=\"";
        // line 399
        yield ($context["config_review_guest"] ?? null);
        yield "\" input-id=\"input-review-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 400
        yield ($context["help_review_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">";
        // line 407
        yield ($context["text_cms"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 411
        yield ($context["entry_article_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"";
        // line 413
        yield ($context["config_article_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_article_description_length"] ?? null);
        yield "\" id=\"input-article-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">";
        // line 414
        yield ($context["help_article_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 419
        yield ($context["entry_comment_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_status\" value=\"1\" checked=\"";
        // line 421
        yield ($context["config_comment_status"] ?? null);
        yield "\" input-id=\"input-comment-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 422
        yield ($context["help_comment_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 426
        yield ($context["entry_comment_approve"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_approve\" value=\"1\" checked=\"";
        // line 428
        yield ($context["config_comment_approve"] ?? null);
        yield "\" input-id=\"input-comment-approve\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 429
        yield ($context["help_comment_approve"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">";
        // line 433
        yield ($context["entry_comment_interval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"";
        // line 435
        yield ($context["config_comment_interval"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_comment_interval"] ?? null);
        yield "\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 436
        yield ($context["help_comment_interval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-image\">";
        // line 443
        yield ($context["text_image"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-image\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">";
        // line 447
        yield ($context["entry_image_default"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-default\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_width\" value=\"";
        // line 451
        yield ($context["config_image_default_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-default-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_height\" value=\"";
        // line 454
        yield ($context["config_image_default_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-default-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 461
        yield ($context["entry_image_thumb"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-thumb\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 465
        yield ($context["config_image_thumb_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-thumb-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 468
        yield ($context["config_image_thumb_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-thumb-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 475
        yield ($context["entry_image_popup"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-popup\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 479
        yield ($context["config_image_popup_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-popup-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 482
        yield ($context["config_image_popup_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-popup-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 492
        yield ($context["text_legal"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 496
        yield ($context["entry_cookie"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 499
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 501
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 501);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 501) == ($context["config_cookie_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 501);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 504
        yield ($context["help_cookie"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 508
        yield ($context["entry_gdpr"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 511
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 512
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 513
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 513);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 513) == ($context["config_gdpr_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 513);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 516
        yield ($context["help_gdpr"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 520
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 522
        yield ($context["config_gdpr_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 523
        yield ($context["help_gdpr_limit"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 530
        yield ($context["text_tax"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 534
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_tax\" value=\"1\" checked=\"";
        // line 536
        yield ($context["config_tax"] ?? null);
        yield "\" input-id=\"input-tax\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 540
        yield ($context["entry_tax_default"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 543
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 544
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 545
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 547
        yield ($context["help_tax_default"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 551
        yield ($context["entry_tax_customer"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 554
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 555
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 556
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 558
        yield ($context["help_tax_customer"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 565
        yield ($context["text_account"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 569
        yield ($context["entry_customer_online"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_online\" value=\"1\" checked=\"";
        // line 571
        yield ($context["config_customer_online"] ?? null);
        yield "\" input-id=\"input-customer-online\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 572
        yield ($context["help_customer_online"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 576
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 579
        yield ($context["config_customer_online_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        yield ($context["text_hour"] ?? null);
        yield "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 581
        yield ($context["help_customer_online_expire"] ?? null);
        yield "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 586
        yield ($context["entry_customer_activity"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_activity\" value=\"1\" checked=\"";
        // line 588
        yield ($context["config_customer_activity"] ?? null);
        yield "\" input-id=\"input-customer-activity\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 589
        yield ($context["help_customer_activity"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 593
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_search\" value=\"1\" checked=\"";
        // line 595
        yield ($context["config_customer_search"] ?? null);
        yield "\" input-id=\"input-customer-search\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 599
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 602
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 603
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 603);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 603) == ($context["config_customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 603);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 605
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 606
        yield ($context["help_customer_group"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 610
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 613
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 614
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 615
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 615);
            yield "\" id=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 615);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 615), ($context["config_customer_group_display"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 615);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 615);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 619
        yield ($context["help_customer_group_display"] ?? null);
        yield "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 624
        yield ($context["entry_customer_price"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_price\" value=\"1\" checked=\"";
        // line 626
        yield ($context["config_customer_price"] ?? null);
        yield "\" input-id=\"input-customer-price\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 627
        yield ($context["help_customer_price"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 631
        yield ($context["entry_telephone_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_display\" value=\"1\" checked=\"";
        // line 633
        yield ($context["config_telephone_display"] ?? null);
        yield "\" input-id=\"input-telephone-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 637
        yield ($context["entry_telephone_required"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_required\" value=\"1\" checked=\"";
        // line 639
        yield ($context["config_telephone_required"] ?? null);
        yield "\" input-id=\"input-telephone-required\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 643
        yield ($context["entry_account"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 646
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 648
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 648);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 648) == ($context["config_account_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 648);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 651
        yield ($context["help_account"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>";
        // line 655
        yield ($context["text_security"] ?? null);
        yield "</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 657
        yield ($context["entry_2fa"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <x-switch name=\"config_2fa\" value=\"1\" checked=\"";
        // line 659
        yield ($context["config_2fa"] ?? null);
        yield "\" input-id=\"input-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                            <div class=\"form-text\">";
        // line 660
        yield ($context["help_2fa"] ?? null);
        yield "</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 664
        yield ($context["entry_login_attempts"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 666
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">";
        // line 667
        yield ($context["help_login_attempts"] ?? null);
        yield "</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 672
        yield ($context["entry_password"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"";
        // line 676
        if (($context["config_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-uppercase\" class=\"form-check-label\">";
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"";
        // line 679
        if (($context["config_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-lowercase\" class=\"form-check-label\">";
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"";
        // line 682
        if (($context["config_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-number\" class=\"form-check-label\">";
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"";
        // line 685
        if (($context["config_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-password-symbol\" class=\"form-check-label\">";
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 691
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"";
        // line 693
        yield ($context["config_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 702
        yield ($context["text_checkout"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 706
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 708
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 709
        yield ($context["help_invoice_prefix"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 713
        yield ($context["entry_shared"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_shared\" value=\"1\" checked=\"";
        // line 715
        yield ($context["config_shared"] ?? null);
        yield "\" input-id=\"input-shared\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 716
        yield ($context["help_shared"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 720
        yield ($context["entry_cart_weight"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_cart_weight\" value=\"1\" checked=\"";
        // line 722
        yield ($context["config_cart_weight"] ?? null);
        yield "\" input-id=\"input-cart-weight\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 723
        yield ($context["help_cart_weight"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 727
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_guest\" value=\"1\" checked=\"";
        // line 729
        yield ($context["config_checkout_guest"] ?? null);
        yield "\" input-id=\"input-checkout-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 730
        yield ($context["help_checkout_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 734
        yield ($context["entry_checkout_payment_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_payment_address\" value=\"1\" checked=\"";
        // line 736
        yield ($context["config_checkout_payment_address"] ?? null);
        yield "\" input-id=\"input-checkout-payment-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 737
        yield ($context["help_checkout_payment_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 741
        yield ($context["entry_checkout_shipping_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_shipping_address\" value=\"1\" checked=\"";
        // line 743
        yield ($context["config_checkout_shipping_address"] ?? null);
        yield "\" input-id=\"input-checkout-shipping-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 744
        yield ($context["help_checkout_shipping_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 748
        yield ($context["entry_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 751
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 752
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 753
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 753);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 753) == ($context["config_checkout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 753);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 756
        yield ($context["help_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 760
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 764
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 764);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 764) == ($context["config_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 764);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 766
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 767
        yield ($context["help_order_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 771
        yield ($context["entry_processing_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 774
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 775
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 776
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 776);
            yield "\" id=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 776);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 776), ($context["config_processing_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 776);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 776);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 779
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 780
        yield ($context["help_processing_status"] ?? null);
        yield "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 785
        yield ($context["entry_complete_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 788
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 789
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 790
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790);
            yield "\" id=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790), ($context["config_complete_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 790);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 793
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 794
        yield ($context["help_complete_status"] ?? null);
        yield "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 799
        yield ($context["entry_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            ";
        // line 802
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 803
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 803);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 803) == ($context["config_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 803);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 805
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 806
        yield ($context["help_failed_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">";
        // line 810
        yield ($context["entry_void_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            ";
        // line 813
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 814
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 814);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 814) == ($context["config_void_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 814);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 816
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 817
        yield ($context["help_void_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 821
        yield ($context["entry_fraud_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 824
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 825
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 825);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 825) == ($context["config_fraud_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 825);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 827
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 828
        yield ($context["help_fraud_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 832
        yield ($context["entry_api"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 835
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 837
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 837);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 837) == ($context["config_api_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 837);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 840
        yield ($context["help_api"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 847
        yield ($context["text_subscription"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 852
        yield ($context["entry_subscription_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 855
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 856
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 856);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 856) == ($context["config_subscription_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 856);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 858
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 859
        yield ($context["help_subscription"] ?? null);
        yield "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 864
        yield ($context["entry_subscription_active_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 867
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 868
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 868);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 868) == ($context["config_subscription_active_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 868);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 870
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 875
        yield ($context["entry_subscription_expired_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 878
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 879
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 879);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 879) == ($context["config_subscription_expired_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 879);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 881
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">";
        // line 886
        yield ($context["entry_subscription_suspended_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            ";
        // line 889
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 890
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 890);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 890) == ($context["config_subscription_suspended_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 890);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 892
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 897
        yield ($context["entry_subscription_canceled_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 900
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 901
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 901);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 901) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 901);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 903
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 908
        yield ($context["entry_subscription_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 911
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 912
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 912);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 912) == ($context["config_subscription_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 912);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 914
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 919
        yield ($context["entry_subscription_denied_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 922
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 923
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 923);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 923) == ($context["config_subscription_denied_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 923);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 925
        yield "                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 933
        yield ($context["text_stock"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 937
        yield ($context["entry_stock_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_display\" value=\"1\" checked=\"";
        // line 939
        yield ($context["config_stock_display"] ?? null);
        yield "\" input-id=\"input-stock-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 940
        yield ($context["help_stock_display"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 944
        yield ($context["entry_stock_warning"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_warning\" value=\"1\" checked=\"";
        // line 946
        yield ($context["config_stock_warning"] ?? null);
        yield "\" input-id=\"input-stock-warning\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 947
        yield ($context["help_stock_warning"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 951
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_checkout\" value=\"1\" checked=\"";
        // line 953
        yield ($context["config_stock_checkout"] ?? null);
        yield "\" input-id=\"input-stock-checkout\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 954
        yield ($context["help_stock_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 958
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            ";
        // line 961
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 962
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 962);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 962) == ($context["config_stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 962);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 964
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 965
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 972
        yield ($context["text_affiliate"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 976
        yield ($context["entry_affiliate_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_status\" checked=\"";
        // line 978
        yield ($context["config_affiliate_status"] ?? null);
        yield "\" value=\"1\" input-id=\"input-affiliate-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 979
        yield ($context["help_affiliate_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 983
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 986
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 987
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 987);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 987) == ($context["config_affiliate_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 987);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 989
        yield "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 993
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_approval\" value=\"1\" checked=\"";
        // line 995
        yield ($context["config_affiliate_approval"] ?? null);
        yield "\" input-id=\"input-affiliate-approval\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 996
        yield ($context["help_affiliate_approval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 1000
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_auto\" value=\"1\" checked=\"";
        // line 1002
        yield ($context["config_affiliate_auto"] ?? null);
        yield "\" input-id=\"input-affiliate-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">";
        // line 1003
        yield ($context["help_affiliate_auto"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 1007
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1009
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 1010
        yield ($context["help_affiliate_commission"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 1014
        yield ($context["entry_affiliate"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 1017
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1018
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1019
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1019);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1019) == ($context["config_affiliate_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1019);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1021
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1022
        yield ($context["help_affiliate"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 1029
        yield ($context["text_return"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 1033
        yield ($context["entry_return_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 1036
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1037
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1037);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1037) == ($context["config_return_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1037);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1039
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1040
        yield ($context["help_return_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 1044
        yield ($context["entry_return"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 1047
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1048
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1049
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1049);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1049) == ($context["config_return_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1049);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1051
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1052
        yield ($context["help_return"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 1059
        yield ($context["text_captcha"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 1063
        yield ($context["entry_captcha"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 1066
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1067
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1068
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1068);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1068) == ($context["config_captcha"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1068);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1070
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1071
        yield ($context["help_captcha"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 1075
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 1078
        $context["captcha_page_row"] = 0;
        // line 1079
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1080
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 1081
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1081);
            yield "\" id=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1081), ($context["config_captcha_page"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1081);
            yield "</label>
                              </div>
                              ";
            // line 1083
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 1084
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1085
        yield "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1095
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1097
        yield ($context["entry_mail_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">";
        // line 1100
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"mail\"";
        // line 1101
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_mail"] ?? null);
        yield "</option>
                      <option value=\"smtp\"";
        // line 1102
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_smtp"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1104
        yield ($context["help_mail_engine"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1108
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1110
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1111
        yield ($context["help_mail_parameter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1116
        yield ($context["text_smtp"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1118
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1120
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1121
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1125
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1127
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1131
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1133
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1134
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1138
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1140
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1144
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1146
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1151
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1153
        yield ($context["entry_mail_alert"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1156
        $context["mail_alert_row"] = 0;
        // line 1157
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1158
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1159
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1159);
            yield "\" id=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1159), ($context["config_mail_alert"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1159);
            yield "</label>
                        </div>
                        ";
            // line 1161
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1162
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1163
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1164
        yield ($context["help_mail_alert"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1168
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1170
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        yield ($context["config_mail_alert_email"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1171
        yield ($context["help_mail_alert_email"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1178
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1180
        yield ($context["entry_maintenance"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_maintenance\" value=\"1\" checked=\"";
        // line 1182
        yield ($context["config_maintenance"] ?? null);
        yield "\" input-id=\"input-maintenance\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1183
        yield ($context["help_maintenance"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1187
        yield ($context["entry_seo_url"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_seo_url\" value=\"1\" checked=\"";
        // line 1189
        yield ($context["config_seo_url"] ?? null);
        yield "\" input-id=\"input-seo-url\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1190
        yield ($context["help_seo_url"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1195
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1197
        yield ($context["entry_user_2fa"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_user_2fa\" value=\"1\" checked=\"";
        // line 1199
        yield ($context["config_user_2fa"] ?? null);
        yield "\" input-id=\"input-user-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">";
        // line 1200
        yield ($context["help_user_2fa"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1204
        yield ($context["entry_2fa_expire"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"";
        // line 1206
        yield ($context["config_2fa_expire"] ?? null);
        yield "\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1207
        yield ($context["help_2fa_expire"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1211
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"";
        // line 1215
        if (($context["config_user_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-uppercase\" class=\"form-check-label\">";
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"";
        // line 1218
        if (($context["config_user_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-lowercase\" class=\"form-check-label\">";
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"";
        // line 1221
        if (($context["config_user_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-number\" class=\"form-check-label\">";
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"";
        // line 1224
        if (($context["config_user_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/> <label for=\"input-user-password-symbol\" class=\"form-check-label\">";
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 1230
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"";
        // line 1232
        yield ($context["config_user_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1237
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1239
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_display\" value=\"1\" checked=\"";
        // line 1241
        yield ($context["config_error_display"] ?? null);
        yield "\" input-id=\"input-error-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1245
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_log\" value=\"1\" checked=\"";
        // line 1247
        yield ($context["config_error_log"] ?? null);
        yield "\" input-id=\"input-error-log\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <div id=\"tab-permalinks\" class=\"tab-pane\">
            <div class=\"text-center p-5\">
              <div class=\"spinner-border\" role=\"status\">
                <span class=\"visually-hidden\">Loading...</span>
              </div>
            </div>
          </div>
          <script type=\"text/javascript\">
          // Lazy-load Permalinks tab content once when the tab is shown
          (function(){
            var loaded = false;
            var \$link = \$('a[data-oc-load][data-oc-target=\"#tab-permalinks\"]');
            var url = \$link.attr('data-oc-load');
            var \$target = \$('#tab-permalinks');
            \$('a[href=\"#tab-permalinks\"]').on('shown.bs.tab', function(){
              if (!loaded && url) {
                \$target.load(url, function(){ loaded = true; });
              }
            });
          })();
          </script>
        </form>
      </div>
    </div>
  </div>
</div>
<script src=\"static/javascript/setting.js\" type=\"text/javascript\"></script>
";
        // line 1280
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
        return "dashboard/view/template/setting/setting.twig";
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
        return array (  3302 => 1280,  3266 => 1247,  3261 => 1245,  3254 => 1241,  3249 => 1239,  3244 => 1237,  3234 => 1232,  3229 => 1230,  3216 => 1224,  3206 => 1221,  3196 => 1218,  3186 => 1215,  3179 => 1211,  3172 => 1207,  3168 => 1206,  3163 => 1204,  3156 => 1200,  3152 => 1199,  3147 => 1197,  3142 => 1195,  3134 => 1190,  3130 => 1189,  3125 => 1187,  3118 => 1183,  3114 => 1182,  3109 => 1180,  3104 => 1178,  3094 => 1171,  3088 => 1170,  3083 => 1168,  3076 => 1164,  3073 => 1163,  3067 => 1162,  3065 => 1161,  3050 => 1159,  3047 => 1158,  3042 => 1157,  3040 => 1156,  3034 => 1153,  3029 => 1151,  3019 => 1146,  3014 => 1144,  3005 => 1140,  3000 => 1138,  2993 => 1134,  2987 => 1133,  2982 => 1131,  2973 => 1127,  2968 => 1125,  2961 => 1121,  2955 => 1120,  2950 => 1118,  2945 => 1116,  2937 => 1111,  2931 => 1110,  2926 => 1108,  2919 => 1104,  2910 => 1102,  2902 => 1101,  2898 => 1100,  2892 => 1097,  2887 => 1095,  2875 => 1085,  2869 => 1084,  2867 => 1083,  2852 => 1081,  2849 => 1080,  2844 => 1079,  2842 => 1078,  2836 => 1075,  2829 => 1071,  2826 => 1070,  2811 => 1068,  2807 => 1067,  2803 => 1066,  2797 => 1063,  2790 => 1059,  2780 => 1052,  2777 => 1051,  2762 => 1049,  2758 => 1048,  2754 => 1047,  2748 => 1044,  2741 => 1040,  2738 => 1039,  2723 => 1037,  2719 => 1036,  2713 => 1033,  2706 => 1029,  2696 => 1022,  2693 => 1021,  2678 => 1019,  2674 => 1018,  2670 => 1017,  2664 => 1014,  2657 => 1010,  2651 => 1009,  2646 => 1007,  2639 => 1003,  2635 => 1002,  2630 => 1000,  2623 => 996,  2619 => 995,  2614 => 993,  2608 => 989,  2593 => 987,  2589 => 986,  2583 => 983,  2576 => 979,  2572 => 978,  2567 => 976,  2560 => 972,  2550 => 965,  2547 => 964,  2532 => 962,  2528 => 961,  2522 => 958,  2515 => 954,  2511 => 953,  2506 => 951,  2499 => 947,  2495 => 946,  2490 => 944,  2483 => 940,  2479 => 939,  2474 => 937,  2467 => 933,  2457 => 925,  2442 => 923,  2438 => 922,  2432 => 919,  2425 => 914,  2410 => 912,  2406 => 911,  2400 => 908,  2393 => 903,  2378 => 901,  2374 => 900,  2368 => 897,  2361 => 892,  2346 => 890,  2342 => 889,  2336 => 886,  2329 => 881,  2314 => 879,  2310 => 878,  2304 => 875,  2297 => 870,  2282 => 868,  2278 => 867,  2272 => 864,  2264 => 859,  2261 => 858,  2246 => 856,  2242 => 855,  2236 => 852,  2228 => 847,  2218 => 840,  2215 => 839,  2200 => 837,  2196 => 836,  2192 => 835,  2186 => 832,  2179 => 828,  2176 => 827,  2161 => 825,  2157 => 824,  2151 => 821,  2144 => 817,  2141 => 816,  2126 => 814,  2122 => 813,  2116 => 810,  2109 => 806,  2106 => 805,  2091 => 803,  2087 => 802,  2081 => 799,  2073 => 794,  2070 => 793,  2051 => 790,  2048 => 789,  2044 => 788,  2038 => 785,  2030 => 780,  2027 => 779,  2008 => 776,  2005 => 775,  2001 => 774,  1995 => 771,  1988 => 767,  1985 => 766,  1970 => 764,  1966 => 763,  1960 => 760,  1953 => 756,  1950 => 755,  1935 => 753,  1931 => 752,  1927 => 751,  1921 => 748,  1914 => 744,  1910 => 743,  1905 => 741,  1898 => 737,  1894 => 736,  1889 => 734,  1882 => 730,  1878 => 729,  1873 => 727,  1866 => 723,  1862 => 722,  1857 => 720,  1850 => 716,  1846 => 715,  1841 => 713,  1834 => 709,  1828 => 708,  1823 => 706,  1816 => 702,  1802 => 693,  1797 => 691,  1784 => 685,  1774 => 682,  1764 => 679,  1754 => 676,  1747 => 672,  1739 => 667,  1733 => 666,  1728 => 664,  1721 => 660,  1717 => 659,  1712 => 657,  1707 => 655,  1700 => 651,  1697 => 650,  1682 => 648,  1678 => 647,  1674 => 646,  1668 => 643,  1661 => 639,  1656 => 637,  1649 => 633,  1644 => 631,  1637 => 627,  1633 => 626,  1628 => 624,  1620 => 619,  1617 => 618,  1598 => 615,  1595 => 614,  1591 => 613,  1585 => 610,  1578 => 606,  1575 => 605,  1560 => 603,  1556 => 602,  1550 => 599,  1543 => 595,  1538 => 593,  1531 => 589,  1527 => 588,  1522 => 586,  1514 => 581,  1505 => 579,  1499 => 576,  1492 => 572,  1488 => 571,  1483 => 569,  1476 => 565,  1466 => 558,  1457 => 556,  1449 => 555,  1445 => 554,  1439 => 551,  1432 => 547,  1423 => 545,  1415 => 544,  1411 => 543,  1405 => 540,  1398 => 536,  1393 => 534,  1386 => 530,  1376 => 523,  1370 => 522,  1365 => 520,  1358 => 516,  1355 => 515,  1340 => 513,  1336 => 512,  1332 => 511,  1326 => 508,  1319 => 504,  1316 => 503,  1301 => 501,  1297 => 500,  1293 => 499,  1287 => 496,  1280 => 492,  1265 => 482,  1257 => 479,  1250 => 475,  1238 => 468,  1230 => 465,  1223 => 461,  1211 => 454,  1203 => 451,  1196 => 447,  1189 => 443,  1179 => 436,  1173 => 435,  1168 => 433,  1161 => 429,  1157 => 428,  1152 => 426,  1145 => 422,  1141 => 421,  1136 => 419,  1128 => 414,  1122 => 413,  1117 => 411,  1110 => 407,  1100 => 400,  1096 => 399,  1091 => 397,  1084 => 393,  1080 => 392,  1075 => 390,  1068 => 386,  1064 => 385,  1059 => 383,  1052 => 379,  1042 => 372,  1038 => 371,  1033 => 369,  1025 => 364,  1019 => 363,  1014 => 361,  1006 => 356,  1000 => 355,  995 => 353,  988 => 349,  984 => 348,  979 => 346,  971 => 341,  965 => 340,  960 => 338,  952 => 333,  946 => 332,  941 => 330,  934 => 326,  924 => 318,  909 => 316,  905 => 315,  899 => 312,  893 => 308,  878 => 306,  874 => 305,  868 => 302,  863 => 300,  855 => 295,  851 => 294,  846 => 292,  840 => 288,  825 => 286,  821 => 285,  815 => 282,  808 => 278,  805 => 277,  790 => 275,  786 => 274,  780 => 271,  775 => 269,  768 => 264,  753 => 262,  749 => 261,  743 => 258,  737 => 254,  722 => 252,  718 => 251,  712 => 248,  707 => 246,  700 => 241,  685 => 239,  681 => 238,  675 => 235,  667 => 230,  662 => 228,  653 => 222,  649 => 221,  644 => 219,  639 => 217,  630 => 210,  623 => 206,  620 => 205,  601 => 202,  598 => 201,  594 => 200,  588 => 197,  585 => 196,  583 => 195,  577 => 192,  571 => 191,  566 => 189,  559 => 185,  553 => 184,  548 => 182,  539 => 176,  535 => 175,  526 => 173,  520 => 170,  513 => 166,  500 => 158,  495 => 156,  485 => 151,  480 => 149,  471 => 145,  466 => 143,  456 => 138,  451 => 136,  441 => 131,  436 => 129,  429 => 125,  420 => 118,  405 => 116,  401 => 115,  395 => 112,  387 => 106,  372 => 104,  368 => 103,  362 => 100,  355 => 96,  349 => 93,  345 => 92,  336 => 90,  330 => 87,  321 => 81,  317 => 80,  308 => 78,  302 => 75,  295 => 71,  288 => 66,  263 => 61,  256 => 59,  243 => 55,  236 => 53,  229 => 49,  219 => 48,  212 => 46,  202 => 44,  185 => 43,  181 => 41,  154 => 39,  137 => 38,  130 => 34,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  94 => 21,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_local }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_mail }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_server }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-permalinks\" data-bs-toggle=\"tab\" class=\"nav-link\" data-oc-load=\"{{ url_permalinks }}\" data-oc-target=\"#tab-permalinks\">{{ tab_permalinks }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"accordion\" id=\"accordion-general\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-general\">{{ text_general }}</button></h2>
                  <div id=\"collapse-general\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <ul class=\"nav nav-tabs\">
                        {% for language in languages %}
                          <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                        {% endfor %}
                      </ul>
                      <div class=\"tab-content\">
                        {% for language in languages %}
                          <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"config_description[{{ language.language_id }}][meta_title]\" value=\"{{ config_description[language.language_id] ? config_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\" required/>
                                <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_description }}</textarea>
                              </div>
                            </div>
                            <div class=\"row mb-3\">
                              <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                              <div class=\"col-sm-10\">
                                <textarea name=\"config_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_keyword }}</textarea>
                              </div>
                            </div>
                          </div>
                        {% endfor %}
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-theme\">{{ text_theme }}</button></h2>
                  <div id=\"collapse-theme\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">{{ entry_logo }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"{{ logo }}\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">{{ entry_icon }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"{{ icon }}\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                            </div>
                          </div>
                          <div class=\"form-text\">{{ help_icon }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">{{ entry_theme }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                            {% for theme in themes %}
                              <option value=\"{{ theme.value }}\"{% if theme.value == config_theme %} selected{% endif %}>{{ theme.text }}</option>
                            {% endfor %}
                          </select>
                          <br/>
                          <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">{{ entry_layout }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if layout.layout_id == config_layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-store\">{{ text_store }}</button></h2>
                  <div id=\"collapse-store\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\" required/>
                          <div id=\"error-name\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">{{ entry_owner }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\" required/>
                          <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-address\" class=\"col-sm-2 col-form-label\">{{ entry_address }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_address\" rows=\"5\" placeholder=\"{{ entry_address }}\" id=\"input-address\" class=\"form-control\" required>{{ config_address }}</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/>
                          <div id=\"error-email\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-contact\">{{ text_contact }}</button></h2>
                  <div id=\"collapse-contact\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-general\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                            <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\"/>
                            <div class=\"d-grid\">
                              <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                              <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-open\" class=\"col-sm-2 col-form-label\">{{ entry_open }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                          <div class=\"form-text\">{{ help_open }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                          <div class=\"form-text\">{{ help_comment }}</div>
                        </div>
                      </div>
                      {% if locations %}
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for location in locations %}
                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" id=\"input-location-{{ location.location_id }}\" class=\"form-check-input\"{% if location.location_id in config_location %} checked{% endif %}/> <label for=\"input-location-{{ location.location_id }}\" class=\"form-check-label\">{{ location.name }}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"form-text\">{{ help_location }}</div>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_region }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">{{ entry_country }}</label>
                  <div class=\"col-sm-10\">
                    <x-country name=\"config_country_id\" value=\"{{ config_country_id }}\" id=\"x-country\" input-id=\"input-country\" input-class=\"form-select\" required>
                      <option value=\"0\">{{ text_select }}</option>
                    </x-country>
                    <div id=\"error-country\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">{{ entry_zone }}</label>
                  <div class=\"col-sm-10\">
                    <x-zone name=\"config_zone_id\" value=\"{{ config_zone_id }}\" target=\"x-country\" input-id=\"input-zone\" input-class=\"form-select\" required></x-zone>
                    <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">{{ entry_timezone }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      {% for timezone in timezones %}
                        <option value=\"{{ timezone.value }}\"{% if timezone.value == config_timezone %} selected{% endif %}>{{ timezone.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_language }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_catalog %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">{{ entry_language_admin }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_admin %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_currency }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">{{ entry_currency }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      {% for currency in currencies %}
                        <option value=\"{{ currency.code }}\"{% if currency.code == config_currency %} selected{% endif %}>{{ currency.title }}</option>
                      {% endfor %}
                    </select>
                    <div class=\"form-text\">{{ help_currency }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">{{ entry_currency_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      {% for currency_engine in currency_engines %}
                        <option value=\"{{ currency_engine.value }}\"{% if currency_engine.value == config_currency_engine %} selected{% endif %}>{{ currency_engine.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_currency_auto }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_currency_auto\" value=\"1\" checked=\"{{ config_currency_auto }}\" input-id=\"input-currency-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_currency_auto }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_measurement }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      {% for length_class in length_classes %}
                        <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == config_length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      {% for weight_class in weight_classes %}
                        <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == config_weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">{{ text_product }}</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_product_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"{{ config_product_description_length }}\" placeholder=\"{{ entry_product_description_length }}\" id=\"input-product-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_product_description_length }}</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">{{ entry_pagination }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"{{ config_pagination }}\" placeholder=\"{{ entry_pagination }}\" id=\"input-pagination\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_count }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_count\" value=\"1\" checked=\"{{ config_product_count }}\" input-id=\"input-product-count\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_product_count }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">{{ entry_pagination_admin }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"{{ config_pagination_admin }}\" placeholder=\"{{ entry_pagination_admin }}\" id=\"input-pagination-admin\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">{{ entry_autocomplete_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"{{ config_autocomplete_limit }}\" placeholder=\"{{ entry_autocomplete_limit }}\" id=\"input-autocomplete-limit\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_autocomplete_limit }}</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_report }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_product_report_status\" value=\"1\" checked=\"{{ config_product_report_status }}\" input-id=\"input-product-report\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_product_report }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">{{ text_review }}</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_status\" value=\"1\" checked=\"{{ config_review_status }}\" input-id=\"input-review-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_purchased }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_purchased\" value=\"1\" checked=\"{{ config_review_purchased }}\" input-id=\"input-review-purchased\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review_purchased }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_guest }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_review_guest\" value=\"1\" checked=\"{{ config_review_guest }}\" input-id=\"input-review-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_review_guest }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">{{ text_cms }}</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_article_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"{{ config_article_description_length }}\" placeholder=\"{{ entry_article_description_length }}\" id=\"input-article-description-length\" class=\"form-control\" required/>
                          <div class=\"form-text\">{{ help_article_description_length }}</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_status\" value=\"1\" checked=\"{{ config_comment_status }}\" input-id=\"input-comment-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_comment_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_approve }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_comment_approve\" value=\"1\" checked=\"{{ config_comment_approve }}\" input-id=\"input-comment-approve\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_comment_approve }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">{{ entry_comment_interval }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"{{ config_comment_interval }}\" placeholder=\"{{ entry_comment_interval }}\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_comment_interval }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-image\">{{ text_image }}</button></h2>
                  <div id=\"collapse-image\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_default }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-default\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_width\" value=\"{{ config_image_default_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-default-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_default_height\" value=\"{{ config_image_default_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-default-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_thumb }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-thumb\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_width\" value=\"{{ config_image_thumb_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-thumb-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_thumb_height\" value=\"{{ config_image_thumb_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-thumb-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_popup }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-image-popup\" class=\"row\">
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_width\" value=\"{{ config_image_popup_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-popup-width\" class=\"form-control\" required/>
                            </div>
                            <div class=\"col-sm-6\">
                              <input type=\"text\" name=\"config_image_popup_height\" value=\"{{ config_image_popup_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-popup-height\" class=\"form-control\" required/>
                            </div>
                          </div>
                          <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">{{ text_legal }}</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">{{ entry_cookie }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_cookie_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_cookie }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_gdpr_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_gdpr }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"{{ config_gdpr_limit }}\" placeholder=\"{{ entry_gdpr_limit }}\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_gdpr_limit }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">{{ text_tax }}</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_tax }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_tax\" value=\"1\" checked=\"{{ config_tax }}\" input-id=\"input-tax\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">{{ entry_tax_default }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_default == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_default == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_default }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">{{ entry_tax_customer }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_customer == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_customer == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_customer }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">{{ text_account }}</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_online }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_online\" value=\"1\" checked=\"{{ config_customer_online }}\" input-id=\"input-customer-online\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_online }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">{{ entry_customer_online_expire }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"{{ config_customer_online_expire }}\" placeholder=\"{{ entry_customer_online_expire }}\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">{{ text_hour }}</span>
                          </div>
                          <div class=\"form-text\">{{ help_customer_online_expire }}</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_activity }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_activity\" value=\"1\" checked=\"{{ config_customer_activity }}\" input-id=\"input-customer-activity\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_activity }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_search }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_search\" value=\"1\" checked=\"{{ config_customer_search }}\" input-id=\"input-customer-search\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_customer_group }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group_display }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for customer_group in customer_groups %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in config_customer_group_display %} checked{% endif %}/> <label for=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_customer_group_display }}</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_price }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_customer_price\" value=\"1\" checked=\"{{ config_customer_price }}\" input-id=\"input-customer-price\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_customer_price }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_display }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_display\" value=\"1\" checked=\"{{ config_telephone_display }}\" input-id=\"input-telephone-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_required }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_telephone_required\" value=\"1\" checked=\"{{ config_telephone_required }}\" input-id=\"input-telephone-required\" input-class=\"form-switch form-switch-lg\"></x-switch>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">{{ entry_account }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_account_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_account }}</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>{{ text_security }}</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_2fa }}</label>
                          <div class=\"col-sm-10\">
                            <x-switch name=\"config_2fa\" value=\"1\" checked=\"{{ config_2fa }}\" input-id=\"input-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                            <div class=\"form-text\">{{ help_2fa }}</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">{{ entry_login_attempts }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">{{ help_login_attempts }}</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"{% if config_password_uppercase %} checked{% endif %}/> <label for=\"input-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"{% if config_password_lowercase %} checked{% endif %}/> <label for=\"input-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"{% if config_password_number %} checked{% endif %}/> <label for=\"input-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"{% if config_password_symbol %} checked{% endif %}/> <label for=\"input-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"{{ config_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">{{ text_checkout }}</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">{{ entry_invoice_prefix }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_invoice_prefix }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_shared }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_shared\" value=\"1\" checked=\"{{ config_shared }}\" input-id=\"input-shared\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_shared }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_cart_weight }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_cart_weight\" value=\"1\" checked=\"{{ config_cart_weight }}\" input-id=\"input-cart-weight\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_cart_weight }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_guest }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_guest\" value=\"1\" checked=\"{{ config_checkout_guest }}\" input-id=\"input-checkout-guest\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_guest }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_payment_address }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_payment_address\" value=\"1\" checked=\"{{ config_checkout_payment_address }}\" input-id=\"input-checkout-payment-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_payment_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_shipping_address }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_checkout_shipping_address\" value=\"1\" checked=\"{{ config_checkout_shipping_address }}\" input-id=\"input-checkout-shipping-address\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_checkout_shipping_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">{{ entry_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_checkout_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_order_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_processing_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_processing_status %} checked{% endif %}/> <label for=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_processing_status }}</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_complete_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_complete_status %} checked{% endif %}/> <label for=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_complete_status }}</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_failed_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_failed_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">{{ entry_void_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_void_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_void_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">{{ entry_fraud_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_fraud_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_fraud_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">{{ entry_api }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for api in apis %}
                              <option value=\"{{ api.api_id }}\"{% if api.api_id == config_api_id %} selected{% endif %}>{{ api.username }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_api }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">{{ text_subscription }}</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_subscription }}</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_active_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_active_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_expired_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_expired_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_suspended_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_suspended_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_canceled_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_canceled_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_failed_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_denied_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_denied_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">{{ text_stock }}</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_display }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_display\" value=\"1\" checked=\"{{ config_stock_display }}\" input-id=\"input-stock-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_display }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_warning }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_warning\" value=\"1\" checked=\"{{ config_stock_warning }}\" input-id=\"input-stock-warning\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_warning }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_stock_checkout\" value=\"1\" checked=\"{{ config_stock_checkout }}\" input-id=\"input-stock-checkout\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_stock_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            {% for stock_status in stock_statuses %}
                              <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == config_stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_stock_status }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">{{ text_affiliate }}</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_status }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_status\" checked=\"{{ config_affiliate_status }}\" value=\"1\" input-id=\"input-affiliate-status\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_affiliate_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_approval }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_approval\" value=\"1\" checked=\"{{ config_affiliate_approval }}\" input-id=\"input-affiliate-approval\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_approval }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_auto }}</label>
                        <div class=\"col-sm-10\">
                          <x-switch name=\"config_affiliate_auto\" value=\"1\" checked=\"{{ config_affiliate_auto }}\" input-id=\"input-affiliate-auto\" input-class=\"form-switch form-switch-lg\"></x-switch>
                          <div class=\"form-text\">{{ help_affiliate_auto }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_commission }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_commission }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_affiliate_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_affiliate }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">{{ text_return }}</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">{{ entry_return_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            {% for return_status in return_statuses %}
                              <option value=\"{{ return_status.return_status_id }}\"{% if return_status.return_status_id == config_return_status_id %} selected{% endif %}>{{ return_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">{{ entry_return }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_return_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">{{ text_captcha }}</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">{{ entry_captcha }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            {% for captcha in captchas %}
                              <option value=\"{{ captcha.value }}\"{% if captcha.value == config_captcha %} selected{% endif %}>{{ captcha.text }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_captcha }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_captcha_page }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% set captcha_page_row = 0 %}
                            {% for captcha_page in captcha_pages %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" id=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-input\"{% if captcha_page.value in config_captcha_page %} checked{% endif %}/> <label for=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-label\">{{ captcha_page.text }}</label>
                              </div>
                              {% set captcha_page_row = captcha_page_row + 1 %}
                            {% endfor %}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">{{ entry_mail_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">{{ text_none }}</option>
                      <option value=\"mail\"{% if config_mail_engine == 'mail' %} selected{% endif %}>{{ text_mail }}</option>
                      <option value=\"smtp\"{% if config_mail_engine == 'smtp' %} selected{% endif %}>{{ text_smtp }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_mail_engine }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">{{ entry_mail_parameter }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_parameter }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_smtp }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_hostname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_hostname }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_password }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_mail_alert }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% set mail_alert_row = 0 %}
                      {% for mail_alert in mail_alerts %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" id=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-input\"{% if mail_alert.value in config_mail_alert %} checked{% endif %}/> <label for=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-label\">{{ mail_alert.text }}</label>
                        </div>
                        {% set mail_alert_row = mail_alert_row + 1 %}
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_mail_alert }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">{{ entry_mail_alert_email }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-mail-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                    <div class=\"form-text\">{{ help_mail_alert_email }}</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_maintenance }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_maintenance\" value=\"1\" checked=\"{{ config_maintenance }}\" input-id=\"input-maintenance\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_maintenance }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_seo_url }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_seo_url\" value=\"1\" checked=\"{{ config_seo_url }}\" input-id=\"input-seo-url\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_seo_url }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_user_2fa }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_user_2fa\" value=\"1\" checked=\"{{ config_user_2fa }}\" input-id=\"input-user-2fa\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    <div class=\"form-text\">{{ help_user_2fa }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">{{ entry_2fa_expire }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"{{ config_2fa_expire }}\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_2fa_expire }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"{% if config_user_password_uppercase %} checked{% endif %}/> <label for=\"input-user-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"{% if config_user_password_lowercase %} checked{% endif %}/> <label for=\"input-user-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"{% if config_user_password_number %} checked{% endif %}/> <label for=\"input-user-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"{% if config_user_password_symbol %} checked{% endif %}/> <label for=\"input-user-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"{{ config_user_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_display\" value=\"1\" checked=\"{{ config_error_display }}\" input-id=\"input-error-display\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <x-switch name=\"config_error_log\" value=\"1\" checked=\"{{ config_error_log }}\" input-id=\"input-error-log\" input-class=\"form-switch form-switch-lg\"></x-switch>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <div id=\"tab-permalinks\" class=\"tab-pane\">
            <div class=\"text-center p-5\">
              <div class=\"spinner-border\" role=\"status\">
                <span class=\"visually-hidden\">Loading...</span>
              </div>
            </div>
          </div>
          <script type=\"text/javascript\">
          // Lazy-load Permalinks tab content once when the tab is shown
          (function(){
            var loaded = false;
            var \$link = \$('a[data-oc-load][data-oc-target=\"#tab-permalinks\"]');
            var url = \$link.attr('data-oc-load');
            var \$target = \$('#tab-permalinks');
            \$('a[href=\"#tab-permalinks\"]').on('shown.bs.tab', function(){
              if (!loaded && url) {
                \$target.load(url, function(){ loaded = true; });
              }
            });
          })();
          </script>
        </form>
      </div>
    </div>
  </div>
</div>
<script src=\"static/javascript/setting.js\" type=\"text/javascript\"></script>
{{ footer }}
", "dashboard/view/template/setting/setting.twig", "D:\\xampp\\htdocs\\www\\opencartly\\dashboard\\view\\template\\setting\\setting.twig");
    }
}
