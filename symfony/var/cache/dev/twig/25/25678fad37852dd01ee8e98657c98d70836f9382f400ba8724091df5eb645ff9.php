<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14494ada8b51458f109e436f5a345059ede6245d9fa2a8f1211b9f7e81cafcda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_03ee096dee69c7acd37b50d12ab3ea380861bf1a05e32ad9dc1659603d1ddf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ee096dee69c7acd37b50d12ab3ea380861bf1a05e32ad9dc1659603d1ddf77->enter($__internal_03ee096dee69c7acd37b50d12ab3ea380861bf1a05e32ad9dc1659603d1ddf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0a088aaed12e910ab696b995bfe23f9a3f00b6392b0f055db433fdcab17fd9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a088aaed12e910ab696b995bfe23f9a3f00b6392b0f055db433fdcab17fd9a3->enter($__internal_0a088aaed12e910ab696b995bfe23f9a3f00b6392b0f055db433fdcab17fd9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ee096dee69c7acd37b50d12ab3ea380861bf1a05e32ad9dc1659603d1ddf77->leave($__internal_03ee096dee69c7acd37b50d12ab3ea380861bf1a05e32ad9dc1659603d1ddf77_prof);

        
        $__internal_0a088aaed12e910ab696b995bfe23f9a3f00b6392b0f055db433fdcab17fd9a3->leave($__internal_0a088aaed12e910ab696b995bfe23f9a3f00b6392b0f055db433fdcab17fd9a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa1c10e02ceb2881b5b649e6c7cf026bf3eca5627e794706f76d1877dc51f00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1c10e02ceb2881b5b649e6c7cf026bf3eca5627e794706f76d1877dc51f00f->enter($__internal_fa1c10e02ceb2881b5b649e6c7cf026bf3eca5627e794706f76d1877dc51f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b3076dfa4a63b9b8d92fc28519c2b6a7f67161d27b386fb99c48c7a74bfff637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3076dfa4a63b9b8d92fc28519c2b6a7f67161d27b386fb99c48c7a74bfff637->enter($__internal_b3076dfa4a63b9b8d92fc28519c2b6a7f67161d27b386fb99c48c7a74bfff637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3076dfa4a63b9b8d92fc28519c2b6a7f67161d27b386fb99c48c7a74bfff637->leave($__internal_b3076dfa4a63b9b8d92fc28519c2b6a7f67161d27b386fb99c48c7a74bfff637_prof);

        
        $__internal_fa1c10e02ceb2881b5b649e6c7cf026bf3eca5627e794706f76d1877dc51f00f->leave($__internal_fa1c10e02ceb2881b5b649e6c7cf026bf3eca5627e794706f76d1877dc51f00f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0158affacb51368c2a7518beaf891acf78bb4d084b25b89d8c94faf9d7efef85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0158affacb51368c2a7518beaf891acf78bb4d084b25b89d8c94faf9d7efef85->enter($__internal_0158affacb51368c2a7518beaf891acf78bb4d084b25b89d8c94faf9d7efef85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2217547be748eb04e1b156605030fc1c0845af06ff4c9505a5c5986cadc072fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2217547be748eb04e1b156605030fc1c0845af06ff4c9505a5c5986cadc072fc->enter($__internal_2217547be748eb04e1b156605030fc1c0845af06ff4c9505a5c5986cadc072fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2217547be748eb04e1b156605030fc1c0845af06ff4c9505a5c5986cadc072fc->leave($__internal_2217547be748eb04e1b156605030fc1c0845af06ff4c9505a5c5986cadc072fc_prof);

        
        $__internal_0158affacb51368c2a7518beaf891acf78bb4d084b25b89d8c94faf9d7efef85->leave($__internal_0158affacb51368c2a7518beaf891acf78bb4d084b25b89d8c94faf9d7efef85_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ea1b5a9bdf0879023842a2530f20932ca50e537d007cff4958cfce2b786f414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea1b5a9bdf0879023842a2530f20932ca50e537d007cff4958cfce2b786f414->enter($__internal_3ea1b5a9bdf0879023842a2530f20932ca50e537d007cff4958cfce2b786f414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57af4f35026e911355e685e80a46373de8ea80a8fc3053b72ed885af359458d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af4f35026e911355e685e80a46373de8ea80a8fc3053b72ed885af359458d2->enter($__internal_57af4f35026e911355e685e80a46373de8ea80a8fc3053b72ed885af359458d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57af4f35026e911355e685e80a46373de8ea80a8fc3053b72ed885af359458d2->leave($__internal_57af4f35026e911355e685e80a46373de8ea80a8fc3053b72ed885af359458d2_prof);

        
        $__internal_3ea1b5a9bdf0879023842a2530f20932ca50e537d007cff4958cfce2b786f414->leave($__internal_3ea1b5a9bdf0879023842a2530f20932ca50e537d007cff4958cfce2b786f414_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Comicome/PhpstormProjects/api_pacman/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
