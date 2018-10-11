<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7a711e9ab43a16d75b73324538fe64fe50ee50853ea27e9d13c0e0dcc730c53c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a31fb6d3c41ec1fe055b2ae7aec4e7720738fc880685225ce57971d55608eef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31fb6d3c41ec1fe055b2ae7aec4e7720738fc880685225ce57971d55608eef6->enter($__internal_a31fb6d3c41ec1fe055b2ae7aec4e7720738fc880685225ce57971d55608eef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_32b8f31f48ee29e59b66c76229268dd43b48d9255344d18a480665c20bd5d52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b8f31f48ee29e59b66c76229268dd43b48d9255344d18a480665c20bd5d52e->enter($__internal_32b8f31f48ee29e59b66c76229268dd43b48d9255344d18a480665c20bd5d52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31fb6d3c41ec1fe055b2ae7aec4e7720738fc880685225ce57971d55608eef6->leave($__internal_a31fb6d3c41ec1fe055b2ae7aec4e7720738fc880685225ce57971d55608eef6_prof);

        
        $__internal_32b8f31f48ee29e59b66c76229268dd43b48d9255344d18a480665c20bd5d52e->leave($__internal_32b8f31f48ee29e59b66c76229268dd43b48d9255344d18a480665c20bd5d52e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca88f21b3582f517118e4e889c55ee9587c1c17198b54facaa2cf7264e766bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca88f21b3582f517118e4e889c55ee9587c1c17198b54facaa2cf7264e766bcf->enter($__internal_ca88f21b3582f517118e4e889c55ee9587c1c17198b54facaa2cf7264e766bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7de85d0942a8dfb827fdc158d3bb9f1fdcf247d16d7c7330c86ff94307091c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7de85d0942a8dfb827fdc158d3bb9f1fdcf247d16d7c7330c86ff94307091c2->enter($__internal_f7de85d0942a8dfb827fdc158d3bb9f1fdcf247d16d7c7330c86ff94307091c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f7de85d0942a8dfb827fdc158d3bb9f1fdcf247d16d7c7330c86ff94307091c2->leave($__internal_f7de85d0942a8dfb827fdc158d3bb9f1fdcf247d16d7c7330c86ff94307091c2_prof);

        
        $__internal_ca88f21b3582f517118e4e889c55ee9587c1c17198b54facaa2cf7264e766bcf->leave($__internal_ca88f21b3582f517118e4e889c55ee9587c1c17198b54facaa2cf7264e766bcf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/Comicome/PhpstormProjects/api_pacman/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
