<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_97eccc58b4cd1a65ad8f6155d7e26d4e7bcd71b94c663555af98c74549013472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46ab4de071263a32cd7e6bb46272b321809e199c97aaf7889e41c9ba824897f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ab4de071263a32cd7e6bb46272b321809e199c97aaf7889e41c9ba824897f3->enter($__internal_46ab4de071263a32cd7e6bb46272b321809e199c97aaf7889e41c9ba824897f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7230053cce79288377ee3d1895bc42900da95dfe7db5b890f0a831267cae8a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7230053cce79288377ee3d1895bc42900da95dfe7db5b890f0a831267cae8a82->enter($__internal_7230053cce79288377ee3d1895bc42900da95dfe7db5b890f0a831267cae8a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ab4de071263a32cd7e6bb46272b321809e199c97aaf7889e41c9ba824897f3->leave($__internal_46ab4de071263a32cd7e6bb46272b321809e199c97aaf7889e41c9ba824897f3_prof);

        
        $__internal_7230053cce79288377ee3d1895bc42900da95dfe7db5b890f0a831267cae8a82->leave($__internal_7230053cce79288377ee3d1895bc42900da95dfe7db5b890f0a831267cae8a82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a88a0359c73d1c1038e1e4d20c06accf09dadbc0abdc9aaf9206cb84f6f3abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a88a0359c73d1c1038e1e4d20c06accf09dadbc0abdc9aaf9206cb84f6f3abe->enter($__internal_0a88a0359c73d1c1038e1e4d20c06accf09dadbc0abdc9aaf9206cb84f6f3abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b45ea449b495757a5e2d7724b1d4ac0b514cd1e910176580508478b5f46ffec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45ea449b495757a5e2d7724b1d4ac0b514cd1e910176580508478b5f46ffec1->enter($__internal_b45ea449b495757a5e2d7724b1d4ac0b514cd1e910176580508478b5f46ffec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b45ea449b495757a5e2d7724b1d4ac0b514cd1e910176580508478b5f46ffec1->leave($__internal_b45ea449b495757a5e2d7724b1d4ac0b514cd1e910176580508478b5f46ffec1_prof);

        
        $__internal_0a88a0359c73d1c1038e1e4d20c06accf09dadbc0abdc9aaf9206cb84f6f3abe->leave($__internal_0a88a0359c73d1c1038e1e4d20c06accf09dadbc0abdc9aaf9206cb84f6f3abe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40f83761ece29955d478444dc5057a8bc975d249daf62dd364d70872c7de190d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f83761ece29955d478444dc5057a8bc975d249daf62dd364d70872c7de190d->enter($__internal_40f83761ece29955d478444dc5057a8bc975d249daf62dd364d70872c7de190d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b5344d7d3dc5f1e84233c683b6c22db058e11cc855954b4eb893ca715eb5a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5344d7d3dc5f1e84233c683b6c22db058e11cc855954b4eb893ca715eb5a08->enter($__internal_8b5344d7d3dc5f1e84233c683b6c22db058e11cc855954b4eb893ca715eb5a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8b5344d7d3dc5f1e84233c683b6c22db058e11cc855954b4eb893ca715eb5a08->leave($__internal_8b5344d7d3dc5f1e84233c683b6c22db058e11cc855954b4eb893ca715eb5a08_prof);

        
        $__internal_40f83761ece29955d478444dc5057a8bc975d249daf62dd364d70872c7de190d->leave($__internal_40f83761ece29955d478444dc5057a8bc975d249daf62dd364d70872c7de190d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d76304084540884984f5e9a997c5999eba88a2a081815910de1a9834c6d50656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d76304084540884984f5e9a997c5999eba88a2a081815910de1a9834c6d50656->enter($__internal_d76304084540884984f5e9a997c5999eba88a2a081815910de1a9834c6d50656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57401737f2bba6acf7908ef92954ca0943e3c1c3d180f6f73ffd0ad2cecd43ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57401737f2bba6acf7908ef92954ca0943e3c1c3d180f6f73ffd0ad2cecd43ed->enter($__internal_57401737f2bba6acf7908ef92954ca0943e3c1c3d180f6f73ffd0ad2cecd43ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_57401737f2bba6acf7908ef92954ca0943e3c1c3d180f6f73ffd0ad2cecd43ed->leave($__internal_57401737f2bba6acf7908ef92954ca0943e3c1c3d180f6f73ffd0ad2cecd43ed_prof);

        
        $__internal_d76304084540884984f5e9a997c5999eba88a2a081815910de1a9834c6d50656->leave($__internal_d76304084540884984f5e9a997c5999eba88a2a081815910de1a9834c6d50656_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Comicome/PhpstormProjects/api_pacman/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
