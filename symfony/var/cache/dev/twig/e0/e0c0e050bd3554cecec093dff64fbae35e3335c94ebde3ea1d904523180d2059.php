<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_92d47f813edfe2a708b168a980dd7b9443a8691471751dce2931a90e5a7d4eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e14b5ae5e0ffed1185e7d7a2bebaeb19e94f36fc3be4700be51895198f1602fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14b5ae5e0ffed1185e7d7a2bebaeb19e94f36fc3be4700be51895198f1602fb->enter($__internal_e14b5ae5e0ffed1185e7d7a2bebaeb19e94f36fc3be4700be51895198f1602fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9ade6e93b965475a8ff79f499ad8b0b3edea93fcd1fff9ddbd50ab4d684b1d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ade6e93b965475a8ff79f499ad8b0b3edea93fcd1fff9ddbd50ab4d684b1d7b->enter($__internal_9ade6e93b965475a8ff79f499ad8b0b3edea93fcd1fff9ddbd50ab4d684b1d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14b5ae5e0ffed1185e7d7a2bebaeb19e94f36fc3be4700be51895198f1602fb->leave($__internal_e14b5ae5e0ffed1185e7d7a2bebaeb19e94f36fc3be4700be51895198f1602fb_prof);

        
        $__internal_9ade6e93b965475a8ff79f499ad8b0b3edea93fcd1fff9ddbd50ab4d684b1d7b->leave($__internal_9ade6e93b965475a8ff79f499ad8b0b3edea93fcd1fff9ddbd50ab4d684b1d7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df665732b98600820ecae13b86d85b8b6df3cd5d391fe6e3677e0153763268e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df665732b98600820ecae13b86d85b8b6df3cd5d391fe6e3677e0153763268e4->enter($__internal_df665732b98600820ecae13b86d85b8b6df3cd5d391fe6e3677e0153763268e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6324c28570df07aee52d3775ab2ca40aabf8d203c3b44ee75d35aa3e910b53ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6324c28570df07aee52d3775ab2ca40aabf8d203c3b44ee75d35aa3e910b53ee->enter($__internal_6324c28570df07aee52d3775ab2ca40aabf8d203c3b44ee75d35aa3e910b53ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6324c28570df07aee52d3775ab2ca40aabf8d203c3b44ee75d35aa3e910b53ee->leave($__internal_6324c28570df07aee52d3775ab2ca40aabf8d203c3b44ee75d35aa3e910b53ee_prof);

        
        $__internal_df665732b98600820ecae13b86d85b8b6df3cd5d391fe6e3677e0153763268e4->leave($__internal_df665732b98600820ecae13b86d85b8b6df3cd5d391fe6e3677e0153763268e4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a234c689a8f39d8211cf640cb536483019dd8da5412db8dc74721a992d019fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a234c689a8f39d8211cf640cb536483019dd8da5412db8dc74721a992d019fc8->enter($__internal_a234c689a8f39d8211cf640cb536483019dd8da5412db8dc74721a992d019fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d7140ee6360f875623ec6ddfd060fa6ca5df238465e13e6a30aaf789f18b547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7140ee6360f875623ec6ddfd060fa6ca5df238465e13e6a30aaf789f18b547->enter($__internal_2d7140ee6360f875623ec6ddfd060fa6ca5df238465e13e6a30aaf789f18b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d7140ee6360f875623ec6ddfd060fa6ca5df238465e13e6a30aaf789f18b547->leave($__internal_2d7140ee6360f875623ec6ddfd060fa6ca5df238465e13e6a30aaf789f18b547_prof);

        
        $__internal_a234c689a8f39d8211cf640cb536483019dd8da5412db8dc74721a992d019fc8->leave($__internal_a234c689a8f39d8211cf640cb536483019dd8da5412db8dc74721a992d019fc8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_054e255c835737478e9f62558e3b7bee69c4dbb68e62e7ef0ae9b5ba08aa2175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054e255c835737478e9f62558e3b7bee69c4dbb68e62e7ef0ae9b5ba08aa2175->enter($__internal_054e255c835737478e9f62558e3b7bee69c4dbb68e62e7ef0ae9b5ba08aa2175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e37461c5231fd9be0317dc0502d9e608c205d532d9e7060b1c26fe2e9a51bfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37461c5231fd9be0317dc0502d9e608c205d532d9e7060b1c26fe2e9a51bfca->enter($__internal_e37461c5231fd9be0317dc0502d9e608c205d532d9e7060b1c26fe2e9a51bfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e37461c5231fd9be0317dc0502d9e608c205d532d9e7060b1c26fe2e9a51bfca->leave($__internal_e37461c5231fd9be0317dc0502d9e608c205d532d9e7060b1c26fe2e9a51bfca_prof);

        
        $__internal_054e255c835737478e9f62558e3b7bee69c4dbb68e62e7ef0ae9b5ba08aa2175->leave($__internal_054e255c835737478e9f62558e3b7bee69c4dbb68e62e7ef0ae9b5ba08aa2175_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Comicome/PhpstormProjects/pacman/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
