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

/* explorador/empresa.html.twig */
class __TwigTemplate_b665ddebc4a29aaf0d904ac5260c1153 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explorador/empresa.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explorador/empresa.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 3, $this->source); })()), "nombre", [], "any", false, false, false, 3), "html", null, true);
        yield " — Archivos PDF";
        
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
        yield "<h1>Archivos PDF de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 6, $this->source); })()), "nombre", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

<div id=\"estado\">
    <p>⏳ Conectando con el servidor SFTP...</p>
</div>

<ul id=\"lista-pdfs\" style=\"display:none\"></ul>

<hr>
<h2>Subir PDF</h2>

<form id=\"form-subida\">
    <input type=\"file\" id=\"input-pdf\" accept=\".pdf\" required>
    <button type=\"submit\">Subir</button>
</form>

<div id=\"estado-subida\"></div>

<a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("explorador_index");
        yield "\">Volver</a>

<script>
const urlArchivos = \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("explorador_archivos_json", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\";
const urlSubir = \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("explorador_subir", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\";

let cargando = false;

async function cargarArchivos() {
    if (cargando) return;
    cargando = true;

    const estado = document.getElementById('estado');
    const lista = document.getElementById('lista-pdfs');

    estado.style.display = 'block';
    estado.innerHTML = '<p>⏳ Conectando con el servidor SFTP...</p>';
    lista.style.display = 'none';
    lista.innerHTML = '';

    try {
        const response = await fetch(urlArchivos);
        const data = await response.json();

        if (data.success) {
            if (data.archivos.length === 0) {
                estado.innerHTML = '<p>No hay archivos PDF en este servidor.</p>';
            } else {
                estado.style.display = 'none';
                data.archivos.forEach(archivo => {
                    const li = document.createElement('li');
                    li.textContent = archivo;
                    lista.appendChild(li);
                });
                lista.style.display = 'block';
            }
        } else {
            estado.innerHTML = `<p>❌ Error: \${data.error}</p>`;
        }
    } catch (error) {
        estado.innerHTML = `<p>❌ Error de red: \${error.message}</p>`;
    } finally {
        cargando = false;
    }
}

// Cargar al entrar
cargarArchivos();

document.getElementById('form-subida').addEventListener('submit', async (e) => {
    e.preventDefault();

    const archivo = document.getElementById('input-pdf').files[0];
    if (!archivo) return;

    const estadoSubida = document.getElementById('estado-subida');
    estadoSubida.textContent = '⏳ Subiendo...';

    const formData = new FormData();
    formData.append('pdf', archivo);

    try {
        const response = await fetch(urlSubir, {
            method: 'POST',
            body: formData
        });

        const data = await response.json();

        if (data.success) {
            estadoSubida.textContent = data.nombreBackup
                ? `✅ Subido. Versión anterior guardada como: \${data.nombreBackup}`
                : '✅ Archivo subido correctamente.';

            // Limpiar el input y recargar la lista
            document.getElementById('input-pdf').value = '';
            cargarArchivos();
        } else {
            estadoSubida.textContent = `❌ Error: \${data.error}`;
        }
    } catch (error) {
        estadoSubida.textContent = `❌ Error de red: \${error.message}`;
    }
});
</script>
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
        return "explorador/empresa.html.twig";
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
        return array (  133 => 28,  129 => 27,  123 => 24,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ empresa.nombre }} — Archivos PDF{% endblock %}

{% block body %}
<h1>Archivos PDF de {{ empresa.nombre }}</h1>

<div id=\"estado\">
    <p>⏳ Conectando con el servidor SFTP...</p>
</div>

<ul id=\"lista-pdfs\" style=\"display:none\"></ul>

<hr>
<h2>Subir PDF</h2>

<form id=\"form-subida\">
    <input type=\"file\" id=\"input-pdf\" accept=\".pdf\" required>
    <button type=\"submit\">Subir</button>
</form>

<div id=\"estado-subida\"></div>

<a href=\"{{ path('explorador_index') }}\">Volver</a>

<script>
const urlArchivos = \"{{ path('explorador_archivos_json', {id: empresa.id}) }}\";
const urlSubir = \"{{ path('explorador_subir', {id: empresa.id}) }}\";

let cargando = false;

async function cargarArchivos() {
    if (cargando) return;
    cargando = true;

    const estado = document.getElementById('estado');
    const lista = document.getElementById('lista-pdfs');

    estado.style.display = 'block';
    estado.innerHTML = '<p>⏳ Conectando con el servidor SFTP...</p>';
    lista.style.display = 'none';
    lista.innerHTML = '';

    try {
        const response = await fetch(urlArchivos);
        const data = await response.json();

        if (data.success) {
            if (data.archivos.length === 0) {
                estado.innerHTML = '<p>No hay archivos PDF en este servidor.</p>';
            } else {
                estado.style.display = 'none';
                data.archivos.forEach(archivo => {
                    const li = document.createElement('li');
                    li.textContent = archivo;
                    lista.appendChild(li);
                });
                lista.style.display = 'block';
            }
        } else {
            estado.innerHTML = `<p>❌ Error: \${data.error}</p>`;
        }
    } catch (error) {
        estado.innerHTML = `<p>❌ Error de red: \${error.message}</p>`;
    } finally {
        cargando = false;
    }
}

// Cargar al entrar
cargarArchivos();

document.getElementById('form-subida').addEventListener('submit', async (e) => {
    e.preventDefault();

    const archivo = document.getElementById('input-pdf').files[0];
    if (!archivo) return;

    const estadoSubida = document.getElementById('estado-subida');
    estadoSubida.textContent = '⏳ Subiendo...';

    const formData = new FormData();
    formData.append('pdf', archivo);

    try {
        const response = await fetch(urlSubir, {
            method: 'POST',
            body: formData
        });

        const data = await response.json();

        if (data.success) {
            estadoSubida.textContent = data.nombreBackup
                ? `✅ Subido. Versión anterior guardada como: \${data.nombreBackup}`
                : '✅ Archivo subido correctamente.';

            // Limpiar el input y recargar la lista
            document.getElementById('input-pdf').value = '';
            cargarArchivos();
        } else {
            estadoSubida.textContent = `❌ Error: \${data.error}`;
        }
    } catch (error) {
        estadoSubida.textContent = `❌ Error de red: \${error.message}`;
    }
});
</script>
{% endblock %}", "explorador/empresa.html.twig", "C:\\Users\\izano\\PRACTICAS DAW 2026\\Sistema_de_Gestion_Documental_SFTP\\templates\\explorador\\empresa.html.twig");
    }
}
