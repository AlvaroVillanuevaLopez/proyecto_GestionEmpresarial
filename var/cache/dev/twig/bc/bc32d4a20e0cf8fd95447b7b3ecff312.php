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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 4, $this->source); })()), "nombre", [], "any", false, false, false, 4), "html", null, true);
        yield "
\t— Archivos PDF
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "\t<meta name=\"turbo-visit-control\" content=\"reload\">
\t<div class=\"contenedor\">
\t\t<h1>Archivos PDF de
\t\t\t";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>

\t\t<div id=\"estado\">
\t\t\t<p>⏳ Conectando con el servidor SFTP...</p>
\t\t</div>

\t\t<ul id=\"lista-pdfs\" style=\"display:none\"></ul>

\t\t<hr>
\t\t<h2>Subir PDF</h2>

\t\t<form id=\"form-subida\">
\t\t\t<input type=\"file\" id=\"input-pdf\" accept=\".pdf\" required>
\t\t\t<button type=\"submit\" id=\"cartero\">Subir</button>
\t\t</form>

\t\t<div id=\"estado-subida\"></div>
\t\t<br>
\t\t<a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_empresa_index");
        yield "\">Volver al índice</a>
\t</div>
\t <script>
\t    const urlArchivos = \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("explorador_archivos_json", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\";
\tconst urlSubir = \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("explorador_subir", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\";
\t
\tlet cargando = false;
\tasync function eliminarArchivo(nombreArchivo) {
\t    if (!confirm(`¿Estás seguro de que quieres eliminar \${nombreArchivo}?`)) return;
\t
\t    const formData = new FormData();
\t    formData.append('archivo', nombreArchivo);
\t
\t    try {
\t        const response = await fetch('";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("explorador_eliminar", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "', {
\t            method: 'POST',
\t            body: formData
\t        });
\t
\t        const data = await response.json();
\t        if (data.status === 'ok') {
\t            alert('Eliminado con éxito');
\t            cargarArchivos(); 
\t        } else {
\t            alert('Error: ' + data.message);
\t        }
\t    } catch (error) {
\t        alert('Error de conexión');
\t    }
\t}
\t
\tasync function cargarArchivos() {
\t    if (cargando) return;
\t    cargando = true;
\t    const estado = document.getElementById('estado');
\t    const lista = document.getElementById('lista-pdfs');
\t    estado.style.display = 'block';
\t    estado.innerHTML = '<p>⏳ Conectando con el servidor SFTP...</p>';
\t    lista.style.display = 'none';
\t    lista.innerHTML = '';
\t
\t    try {
\t        const response = await fetch(urlArchivos);
\t        const data = await response.json();
\t
\t        if (data.success) {
\t            if (data.archivos.length === 0) {
\t                estado.innerHTML = '<p>No hay archivos PDF en este servidor.</p>';
\t            } else {
\t                estado.style.display = 'none';
\t                data.archivos.forEach(archivo => {
\t                    const li = document.createElement('li');
\t                    li.style.display = 'flex';
                        li.style.justifyContent = 'space-between'; 
                        li.style.alignItems = 'center';           
                        li.style.marginBottom = '8px';            
                        li.style.padding = '4px 0';               
                        li.style.borderBottom = '1px solid #f0f0f0'; 
                        li.innerHTML = `<span style=\"word-break: break-all; margin-right: 20px;\">\${archivo}</span>`
                        ";
        // line 89
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "                            li.innerHTML +=`
                                <button onclick=\"eliminarArchivo('\${archivo}')\" style=\"color: red; cursor: pointer; white-space: nowrap;\">
                                    Eliminar
                                </button>
                            `;
                        ";
        }
        // line 95
        yield "                        
                        lista.appendChild(li);
\t                });
\t                lista.style.display = 'block';
\t            }
\t        } else {
\t            estado.innerHTML = `<p>❌ Error: \${data.error}</p>`;
\t        }
\t    } catch (error) {
\t        estado.innerHTML = `<p>❌ Error de red: \${error.message}</p>`;
\t    } finally {
\t        cargando = false;
\t    }
\t}
\tcargarArchivos();
\t
\tdocument.getElementById('form-subida').addEventListener('submit', async (e) => {
\t    e.preventDefault();
\t
\t    const archivoInput = document.getElementById('input-pdf');
\t    const archivo = archivoInput.files[0];
\t    if (!archivo) return;
\t
\t    const estadoSubida = document.getElementById('estado-subida');
\t    estadoSubida.textContent = '⏳ Subiendo...';
\t
\t    const formData = new FormData();
\t    formData.append('pdf', archivo);
\t
\t    try {
\t        const response = await fetch(urlSubir, {
\t            method: 'POST',
\t            body: formData
\t        });
\t
\t        const data = await response.json();
\t
\t        if (data.success) {
\t            estadoSubida.textContent = '✅ Archivo subido correctamente.';
\t            archivoInput.value = '';
\t            cargarArchivos(); // Esto refresca la lista y mostrará el nuevo botón
\t        } else {
\t            estadoSubida.textContent = `❌ Error: \${data.error}`;
\t        }
\t    } catch (error) {
\t        estadoSubida.textContent = `❌ Error de red: \${error.message}`;
\t    }
\t});
\t</script>
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
        return array (  212 => 95,  204 => 90,  202 => 89,  154 => 44,  141 => 34,  137 => 33,  131 => 30,  110 => 12,  105 => 9,  92 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ empresa.nombre }}
\t— Archivos PDF
{% endblock %}

{% block body %}
\t<meta name=\"turbo-visit-control\" content=\"reload\">
\t<div class=\"contenedor\">
\t\t<h1>Archivos PDF de
\t\t\t{{ empresa.nombre }}</h1>

\t\t<div id=\"estado\">
\t\t\t<p>⏳ Conectando con el servidor SFTP...</p>
\t\t</div>

\t\t<ul id=\"lista-pdfs\" style=\"display:none\"></ul>

\t\t<hr>
\t\t<h2>Subir PDF</h2>

\t\t<form id=\"form-subida\">
\t\t\t<input type=\"file\" id=\"input-pdf\" accept=\".pdf\" required>
\t\t\t<button type=\"submit\" id=\"cartero\">Subir</button>
\t\t</form>

\t\t<div id=\"estado-subida\"></div>
\t\t<br>
\t\t<a href=\"{{ path('app_empresa_index') }}\">Volver al índice</a>
\t</div>
\t <script>
\t    const urlArchivos = \"{{ path('explorador_archivos_json', {id: empresa.id}) }}\";
\tconst urlSubir = \"{{ path('explorador_subir', {id: empresa.id}) }}\";
\t
\tlet cargando = false;
\tasync function eliminarArchivo(nombreArchivo) {
\t    if (!confirm(`¿Estás seguro de que quieres eliminar \${nombreArchivo}?`)) return;
\t
\t    const formData = new FormData();
\t    formData.append('archivo', nombreArchivo);
\t
\t    try {
\t        const response = await fetch('{{ path('explorador_eliminar', {id: empresa.id}) }}', {
\t            method: 'POST',
\t            body: formData
\t        });
\t
\t        const data = await response.json();
\t        if (data.status === 'ok') {
\t            alert('Eliminado con éxito');
\t            cargarArchivos(); 
\t        } else {
\t            alert('Error: ' + data.message);
\t        }
\t    } catch (error) {
\t        alert('Error de conexión');
\t    }
\t}
\t
\tasync function cargarArchivos() {
\t    if (cargando) return;
\t    cargando = true;
\t    const estado = document.getElementById('estado');
\t    const lista = document.getElementById('lista-pdfs');
\t    estado.style.display = 'block';
\t    estado.innerHTML = '<p>⏳ Conectando con el servidor SFTP...</p>';
\t    lista.style.display = 'none';
\t    lista.innerHTML = '';
\t
\t    try {
\t        const response = await fetch(urlArchivos);
\t        const data = await response.json();
\t
\t        if (data.success) {
\t            if (data.archivos.length === 0) {
\t                estado.innerHTML = '<p>No hay archivos PDF en este servidor.</p>';
\t            } else {
\t                estado.style.display = 'none';
\t                data.archivos.forEach(archivo => {
\t                    const li = document.createElement('li');
\t                    li.style.display = 'flex';
                        li.style.justifyContent = 'space-between'; 
                        li.style.alignItems = 'center';           
                        li.style.marginBottom = '8px';            
                        li.style.padding = '4px 0';               
                        li.style.borderBottom = '1px solid #f0f0f0'; 
                        li.innerHTML = `<span style=\"word-break: break-all; margin-right: 20px;\">\${archivo}</span>`
                        {% if is_granted('ROLE_ADMIN') %}
                            li.innerHTML +=`
                                <button onclick=\"eliminarArchivo('\${archivo}')\" style=\"color: red; cursor: pointer; white-space: nowrap;\">
                                    Eliminar
                                </button>
                            `;
                        {% endif %}                        
                        lista.appendChild(li);
\t                });
\t                lista.style.display = 'block';
\t            }
\t        } else {
\t            estado.innerHTML = `<p>❌ Error: \${data.error}</p>`;
\t        }
\t    } catch (error) {
\t        estado.innerHTML = `<p>❌ Error de red: \${error.message}</p>`;
\t    } finally {
\t        cargando = false;
\t    }
\t}
\tcargarArchivos();
\t
\tdocument.getElementById('form-subida').addEventListener('submit', async (e) => {
\t    e.preventDefault();
\t
\t    const archivoInput = document.getElementById('input-pdf');
\t    const archivo = archivoInput.files[0];
\t    if (!archivo) return;
\t
\t    const estadoSubida = document.getElementById('estado-subida');
\t    estadoSubida.textContent = '⏳ Subiendo...';
\t
\t    const formData = new FormData();
\t    formData.append('pdf', archivo);
\t
\t    try {
\t        const response = await fetch(urlSubir, {
\t            method: 'POST',
\t            body: formData
\t        });
\t
\t        const data = await response.json();
\t
\t        if (data.success) {
\t            estadoSubida.textContent = '✅ Archivo subido correctamente.';
\t            archivoInput.value = '';
\t            cargarArchivos(); // Esto refresca la lista y mostrará el nuevo botón
\t        } else {
\t            estadoSubida.textContent = `❌ Error: \${data.error}`;
\t        }
\t    } catch (error) {
\t        estadoSubida.textContent = `❌ Error de red: \${error.message}`;
\t    }
\t});
\t</script>
{% endblock %}
", "explorador/empresa.html.twig", "C:\\Users\\alvar\\OneDrive\\Escritorio\\VISUAL-STUDIO-CODE\\proyecto_GestionDocumental\\templates\\explorador\\empresa.html.twig");
    }
}
