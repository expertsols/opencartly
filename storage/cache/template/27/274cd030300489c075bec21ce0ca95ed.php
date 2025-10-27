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

/* dashboard/view/template/common/security.twig */
class __TwigTemplate_d3c6a4926102822f0657cd1b8a4e2bbf extends Template
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
        yield "<div id=\"security\">";
        yield ($context["list"] ?? null);
        yield "</div>
<button type=\"button\" id=\"button-refresh\" class=\"btn btn-danger d-none\"><i class=\"fa-solid fa-sync\"></i></button>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    \$('#modal-security').modal('show');

    \$('#accordion .accordion-header:first button').trigger('click');
});

\$('#button-refresh').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.list&user_token=";
        // line 14
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('#modal-security').modal('dispose');

            \$('#security').html(html);

            console.log(\$('#modal-security .accordion-item').length);

            if (\$('#modal-security .accordion-item').length > 0) {
                \$('#modal-security').modal('show');

                \$('#accordion .accordion-header:first button').trigger('click');
            } else {
                \$('#modal-security').modal('dispose');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#security').on('click', '#button-install', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.install&user_token=";
        // line 47
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert-install').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert-install').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                setTimeout(function() {
                    \$('#button-refresh').trigger('click');
                }, 3000);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#security').on('submit', '#form-storage', function(e) {
    e.preventDefault();

    \$('#button-storage').button('loading');

    var storage = function(next) {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert-storage').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-storage').button('reset');
                }

                if (json['text']) {
                    \$('#alert-storage').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert-storage').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-storage').button('reset');

                    setTimeout(function() {
                        \$('#button-refresh').trigger('click');
                    }, 3000);
                }

                if (json['next']) {
                    storage(json['next']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$('#button-storage').button('reset');
            }
        });
    };

    storage('index.php?route=common/security.storage&user_token=";
        // line 124
        yield ($context["user_token"] ?? null);
        yield "&name=' + encodeURIComponent(\$('#input-storage').val()) + '&path=' + encodeURIComponent(\$('#input-path').val()));
});

\$('#security').on('click', '#button-storage-delete', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.storage_delete&user_token=";
        // line 131
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert-storage').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert-storage').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                setTimeout(function() {
                    \$('#button-refresh').trigger('click');
                }, 3000);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#security').on('submit', '#form-admin', function(e) {
    e.preventDefault();

    \$('#button-admin').button('loading');

    var admin = function(next) {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['redirect']) {
                    setTimeout(function(redirect) {
                        location = redirect;
                    }, 3000, json['redirect']);
                }

                if (json['error']) {
                    \$('#alert-admin').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-admin').button('reset');
                }

                if (json['text']) {
                    \$('#alert-admin').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert-admin').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-admin').button('reset');
                }

                if (json['next']) {
                    admin(json['next']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$('#button-admin').button('reset');
            }
        });
    };

    admin('index.php?route=common/security.admin&user_token=";
        // line 210
        yield ($context["user_token"] ?? null);
        yield "&name=' + encodeURIComponent(\$('#input-admin').val()));
});

\$('#security').on('click', '#button-admin-delete', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.admin_delete&user_token=";
        // line 217
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert-admin').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert-admin').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                setTimeout(function() {
                    \$('#button-refresh').trigger('click');
                }, 3000);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
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
        return "dashboard/view/template/common/security.twig";
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
        return array (  277 => 217,  267 => 210,  185 => 131,  175 => 124,  95 => 47,  59 => 14,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"security\">{{ list }}</div>
<button type=\"button\" id=\"button-refresh\" class=\"btn btn-danger d-none\"><i class=\"fa-solid fa-sync\"></i></button>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    \$('#modal-security').modal('show');

    \$('#accordion .accordion-header:first button').trigger('click');
});

\$('#button-refresh').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.list&user_token={{ user_token }}',
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$('#modal-security').modal('dispose');

            \$('#security').html(html);

            console.log(\$('#modal-security .accordion-item').length);

            if (\$('#modal-security .accordion-item').length > 0) {
                \$('#modal-security').modal('show');

                \$('#accordion .accordion-header:first button').trigger('click');
            } else {
                \$('#modal-security').modal('dispose');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#security').on('click', '#button-install', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.install&user_token={{ user_token }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert-install').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert-install').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                setTimeout(function() {
                    \$('#button-refresh').trigger('click');
                }, 3000);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#security').on('submit', '#form-storage', function(e) {
    e.preventDefault();

    \$('#button-storage').button('loading');

    var storage = function(next) {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert-storage').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-storage').button('reset');
                }

                if (json['text']) {
                    \$('#alert-storage').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert-storage').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-storage').button('reset');

                    setTimeout(function() {
                        \$('#button-refresh').trigger('click');
                    }, 3000);
                }

                if (json['next']) {
                    storage(json['next']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$('#button-storage').button('reset');
            }
        });
    };

    storage('index.php?route=common/security.storage&user_token={{ user_token }}&name=' + encodeURIComponent(\$('#input-storage').val()) + '&path=' + encodeURIComponent(\$('#input-path').val()));
});

\$('#security').on('click', '#button-storage-delete', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.storage_delete&user_token={{ user_token }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert-storage').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert-storage').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                setTimeout(function() {
                    \$('#button-refresh').trigger('click');
                }, 3000);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#security').on('submit', '#form-admin', function(e) {
    e.preventDefault();

    \$('#button-admin').button('loading');

    var admin = function(next) {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['redirect']) {
                    setTimeout(function(redirect) {
                        location = redirect;
                    }, 3000, json['redirect']);
                }

                if (json['error']) {
                    \$('#alert-admin').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-admin').button('reset');
                }

                if (json['text']) {
                    \$('#alert-admin').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert-admin').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#button-admin').button('reset');
                }

                if (json['next']) {
                    admin(json['next']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$('#button-admin').button('reset');
            }
        });
    };

    admin('index.php?route=common/security.admin&user_token={{ user_token }}&name=' + encodeURIComponent(\$('#input-admin').val()));
});

\$('#security').on('click', '#button-admin-delete', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/security.admin_delete&user_token={{ user_token }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert-admin').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert-admin').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                setTimeout(function() {
                    \$('#button-refresh').trigger('click');
                }, 3000);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
", "dashboard/view/template/common/security.twig", "D:\\xampp\\htdocs\\www\\opencartly\\dashboard\\view\\template\\common\\security.twig");
    }
}
