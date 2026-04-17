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

/* security/login.html.twig */
class __TwigTemplate_78775c22f3b9aff56f6f513415ba46e0 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Iniciar Sesión
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<div class=\"contenedor\">
\t\t<form id=\"login-form\" method=\"post\">

\t\t\t<h1>INICIO DE SESIÓN</h1>
\t\t\t<div id=\"errores\" class=\"alert alert-danger\" style=\"display: none;\">
            
            </div>

\t\t\t<div>
\t\t\t\t<label for=\"inputUsername\">Nombre de Usuario</label>
\t\t\t\t<input type=\"text\" name=\"username\" id=\"inputUsername\" required autofocus>
\t\t\t</div>
\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" required>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<button id=\"cartero\" type=\"submit\">
\t\t\t\t\tENVIAR
\t\t\t\t</button>
\t\t\t</div>
\t\t</form>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t    <script>
\t        document.addEventListener('DOMContentLoaded', () => {
\t            const loginForm = document.getElementById('login-form');
\t            const botonSubmit = document.getElementById('cartero');
\t            const errorDiv = document.getElementById('errores');
\t
\t            loginForm.addEventListener('submit', async (e) => {
\t                e.preventDefault();\t
\t                errorDiv.style.display = 'none';
\t                botonSubmit.disabled = true;
\t                botonSubmit.innerText = 'Cargando...';
\t
\t                try {
\t                    const formData = new FormData(loginForm);
\t                    const response = await fetch(window.location.href, {
\t                        method: 'POST',
\t                        body: formData,
\t                        headers: {
\t                            'X-Requested-With': 'XMLHttpRequest'
\t                        }
\t                    });
\t                    const result = await response.json();
\t                    if (response.ok && result.success) {
\t                        window.location.href = result.redirect;
\t                    } else {
\t                        errorDiv.innerText = result.message;
\t                        errorDiv.style.display = 'block';
\t                        botonSubmit.disabled = false;
\t                        botonSubmit.innerText = 'ENVIAR';
\t                    }
\t
\t                } catch (error) {
\t                    console.error(\"Error en la petición:\", error);
\t                    errorDiv.innerText = 'Error de conexión con el servidor.';
\t                    errorDiv.style.display = 'block';
\t                    botonSubmit.disabled = false;
\t                    botonSubmit.innerText = 'ENVIAR';
\t                }
\t            });
\t        });
\t    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  153 => 34,  140 => 33,  120 => 23,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Iniciar Sesión
{% endblock %}

{% block body %}
\t<div class=\"contenedor\">
\t\t<form id=\"login-form\" method=\"post\">

\t\t\t<h1>INICIO DE SESIÓN</h1>
\t\t\t<div id=\"errores\" class=\"alert alert-danger\" style=\"display: none;\">
            
            </div>

\t\t\t<div>
\t\t\t\t<label for=\"inputUsername\">Nombre de Usuario</label>
\t\t\t\t<input type=\"text\" name=\"username\" id=\"inputUsername\" required autofocus>
\t\t\t</div>
\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" required>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<button id=\"cartero\" type=\"submit\">
\t\t\t\t\tENVIAR
\t\t\t\t</button>
\t\t\t</div>
\t\t</form>
\t</div>
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t    <script>
\t        document.addEventListener('DOMContentLoaded', () => {
\t            const loginForm = document.getElementById('login-form');
\t            const botonSubmit = document.getElementById('cartero');
\t            const errorDiv = document.getElementById('errores');
\t
\t            loginForm.addEventListener('submit', async (e) => {
\t                e.preventDefault();\t
\t                errorDiv.style.display = 'none';
\t                botonSubmit.disabled = true;
\t                botonSubmit.innerText = 'Cargando...';
\t
\t                try {
\t                    const formData = new FormData(loginForm);
\t                    const response = await fetch(window.location.href, {
\t                        method: 'POST',
\t                        body: formData,
\t                        headers: {
\t                            'X-Requested-With': 'XMLHttpRequest'
\t                        }
\t                    });
\t                    const result = await response.json();
\t                    if (response.ok && result.success) {
\t                        window.location.href = result.redirect;
\t                    } else {
\t                        errorDiv.innerText = result.message;
\t                        errorDiv.style.display = 'block';
\t                        botonSubmit.disabled = false;
\t                        botonSubmit.innerText = 'ENVIAR';
\t                    }
\t
\t                } catch (error) {
\t                    console.error(\"Error en la petición:\", error);
\t                    errorDiv.innerText = 'Error de conexión con el servidor.';
\t                    errorDiv.style.display = 'block';
\t                    botonSubmit.disabled = false;
\t                    botonSubmit.innerText = 'ENVIAR';
\t                }
\t            });
\t        });
\t    </script>
{% endblock %}
{# {% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<div class=\"contenedor\">
    <form method=\"post\">
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }} Contacta con el administrador para recuperar sus credenciales</div>
        {% endif %}


        <h1 class=\"h3 mb-3 font-weight-normal\">INICIO DE SESIÓN</h1>
        <label for=\"inputUsername\">Nombre de Usuario</label>
        <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>
        <label for=\"inputPassword\">Password</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
        <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token('authenticate') }}\">

        <button id=\"cartero\" type=\"submit\">
            ENVIAR
        </button>
    </form>
</div>
{% endblock %} #}
", "security/login.html.twig", "C:\\Users\\alvar\\OneDrive\\Escritorio\\VISUAL-STUDIO-CODE\\proyecto_GestionEmpresarial\\templates\\security\\login.html.twig");
    }
}
