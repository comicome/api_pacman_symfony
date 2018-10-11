<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_708e0d4e6db4ead3a295305b94c3e99cdbadc01814e477933cec2c547983afd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c25ecb556b7e9725f5fba98de1aa6955d268ccdca51adea0c90a31d76199f8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25ecb556b7e9725f5fba98de1aa6955d268ccdca51adea0c90a31d76199f8d3->enter($__internal_c25ecb556b7e9725f5fba98de1aa6955d268ccdca51adea0c90a31d76199f8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_014ee399446143eff37b5b414b1a3c1b6311d0157ec8643041590e7f965df91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014ee399446143eff37b5b414b1a3c1b6311d0157ec8643041590e7f965df91a->enter($__internal_014ee399446143eff37b5b414b1a3c1b6311d0157ec8643041590e7f965df91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array());
            echo ":
";
            // line 3
            if ( !twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()))) {
                // line 4
                echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
                echo "
";
            }
            // line 6
            echo "
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 8
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c25ecb556b7e9725f5fba98de1aa6955d268ccdca51adea0c90a31d76199f8d3->leave($__internal_c25ecb556b7e9725f5fba98de1aa6955d268ccdca51adea0c90a31d76199f8d3_prof);

        
        $__internal_014ee399446143eff37b5b414b1a3c1b6311d0157ec8643041590e7f965df91a->leave($__internal_014ee399446143eff37b5b414b1a3c1b6311d0157ec8643041590e7f965df91a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  41 => 7,  38 => 6,  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/Comicome/PhpstormProjects/pacman/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
