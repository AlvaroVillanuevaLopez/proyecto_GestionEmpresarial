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

/* empresa/index.html.twig */
class __TwigTemplate_e5c6839b601e90dc3535b58f2da11a27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

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

        yield "Empresa index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"contenedorT\">
    <h1>ÍNDICE DE EMPRESAS</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Host</th>
                <th>Puerto</th>
                <th>Usuario Conexión</th>
                <th>RemotePath</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new RuntimeError('Variable "empresas" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 23
            yield "            <tr>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "nombre", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "host", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "puerto", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "usuario", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "remotePath", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 32
            yield "                    ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\">Editar</a>
                    ";
            }
            // line 35
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("explorador_empresa", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["empresa"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">Ver Archivos</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "            <tr>
                <td colspan=\"8\">No hay registros encontrados</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['empresa'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "        </tbody>
    </table>
    ";
        // line 45
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_new");
            yield "\">Crear Nueva Empresa</a>
    ";
        }
        // line 48
        yield "    <h2>Historial De Acciones</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Usuario Responsable</th>
                <th>Nombre Original</th>
                <th>Nombre Backup </th>
                ";
        // line 59
        yield "                <th>Empresa</th>
                <th>Fecha de Subida</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["historial"]) || array_key_exists("historial", $context) ? $context["historial"] : (function () { throw new RuntimeError('Variable "historial" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 65
            yield "            <tr>
                <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nombreOriginal", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nombreBackup", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                ";
            // line 70
            yield "                ";
            // line 71
            yield "                ";
            // line 72
            yield "                ";
            // line 73
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "empresa", [], "any", false, false, false, 73), "nombre", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                <td>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "fechaSubida", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 76
        if (!$context['_iterated']) {
            // line 77
            yield "            <tr>
                <td colspan=\"8\">No hay registros encontrados</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </tbody>
    </table>
</div>
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
        return "empresa/index.html.twig";
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
        return array (  257 => 81,  248 => 77,  246 => 76,  239 => 74,  234 => 73,  232 => 72,  230 => 71,  228 => 70,  224 => 68,  220 => 67,  216 => 66,  213 => 65,  208 => 64,  201 => 59,  192 => 48,  186 => 46,  184 => 45,  180 => 43,  171 => 39,  169 => 38,  160 => 35,  154 => 33,  151 => 32,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  123 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Empresa index{% endblock %}

{% block body %}
<div class=\"contenedorT\">
    <h1>ÍNDICE DE EMPRESAS</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Host</th>
                <th>Puerto</th>
                <th>Usuario Conexión</th>
                <th>RemotePath</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for empresa in empresas %}
            <tr>
                <td>{{ empresa.id }}</td>
                <td>{{ empresa.nombre }}</td>
                <td>{{ empresa.host }}</td>
                <td>{{ empresa.puerto }}</td>
                <td>{{ empresa.usuario }}</td>
                <td>{{ empresa.remotePath }}</td>
                <td>
                    {# <a href=\"{{ path('app_empresa_show', {'id': empresa.id}) }}\">show</a> #}
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('app_empresa_edit', {'id': empresa.id}) }}\">Editar</a>
                    {% endif %}
                    <a href=\"{{ path('explorador_empresa', {id: empresa.id}) }}\">Ver Archivos</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">No hay registros encontrados</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% if is_granted('ROLE_ADMIN') %}
        <a href=\"{{ path('app_empresa_new') }}\">Crear Nueva Empresa</a>
    {% endif %}
    <h2>Historial De Acciones</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Usuario Responsable</th>
                <th>Nombre Original</th>
                <th>Nombre Backup </th>
                {# <th>Host</th>
                <th>Puerto</th>
                <th>Usuario</th>
                <th>PasswordEncriptada</th> #}
                <th>Empresa</th>
                <th>Fecha de Subida</th>
            </tr>
        </thead>
        <tbody>
        {% for h in historial %}
            <tr>
                <td>{{ h.user.email }}</td>
                <td>{{ h.nombreOriginal }}</td>
                <td>{{ h.nombreBackup }}</td>
                {# <td>{{ empresa.host }}</td> #}
                {# <td>{{ empresa.puerto }}</td> #}
                {# <td>{{ empresa.usuario }}</td> #}
                {# <td>{{ empresa.passwordEncriptada }}</td> #}
                <td>{{ h.empresa.nombre }}</td>
                <td>{{ h.fechaSubida|date('d/m/Y') }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">No hay registros encontrados</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "empresa/index.html.twig", "C:\\Users\\alvar\\OneDrive\\Escritorio\\VISUAL-STUDIO-CODE\\proyecto_GestionDocumental\\templates\\empresa\\index.html.twig");
    }
}
