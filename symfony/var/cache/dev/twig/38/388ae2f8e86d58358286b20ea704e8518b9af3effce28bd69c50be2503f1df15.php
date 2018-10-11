<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_149ab4229990360fc7614ae9ce9218f757c96c9d9f510878fc2ead5b432abeab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f526d56a12dfb12e6a315e8ca0f9f8c735168274fab3fcc6d1cc4ed6b0b3c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f526d56a12dfb12e6a315e8ca0f9f8c735168274fab3fcc6d1cc4ed6b0b3c82->enter($__internal_8f526d56a12dfb12e6a315e8ca0f9f8c735168274fab3fcc6d1cc4ed6b0b3c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_76f9f6b343a1cd30582aaf16fcc015caf51d7932d0427edcc5b59cccb1576ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f9f6b343a1cd30582aaf16fcc015caf51d7932d0427edcc5b59cccb1576ff6->enter($__internal_76f9f6b343a1cd30582aaf16fcc015caf51d7932d0427edcc5b59cccb1576ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8f526d56a12dfb12e6a315e8ca0f9f8c735168274fab3fcc6d1cc4ed6b0b3c82->leave($__internal_8f526d56a12dfb12e6a315e8ca0f9f8c735168274fab3fcc6d1cc4ed6b0b3c82_prof);

        
        $__internal_76f9f6b343a1cd30582aaf16fcc015caf51d7932d0427edcc5b59cccb1576ff6->leave($__internal_76f9f6b343a1cd30582aaf16fcc015caf51d7932d0427edcc5b59cccb1576ff6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bc6f69cfac2b23418eb951a1f45c8e1ff35b547ecea1bc838d90b43986de126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc6f69cfac2b23418eb951a1f45c8e1ff35b547ecea1bc838d90b43986de126->enter($__internal_5bc6f69cfac2b23418eb951a1f45c8e1ff35b547ecea1bc838d90b43986de126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b42babe9b9dcb72202d65988d09c7a41244b72d57f4ad67a7a8615ed8360581c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42babe9b9dcb72202d65988d09c7a41244b72d57f4ad67a7a8615ed8360581c->enter($__internal_b42babe9b9dcb72202d65988d09c7a41244b72d57f4ad67a7a8615ed8360581c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b42babe9b9dcb72202d65988d09c7a41244b72d57f4ad67a7a8615ed8360581c->leave($__internal_b42babe9b9dcb72202d65988d09c7a41244b72d57f4ad67a7a8615ed8360581c_prof);

        
        $__internal_5bc6f69cfac2b23418eb951a1f45c8e1ff35b547ecea1bc838d90b43986de126->leave($__internal_5bc6f69cfac2b23418eb951a1f45c8e1ff35b547ecea1bc838d90b43986de126_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ff43fddcbd540bf79e4afc8992dfc5aae4537a85596c2a1a30dc0914511242f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff43fddcbd540bf79e4afc8992dfc5aae4537a85596c2a1a30dc0914511242f->enter($__internal_6ff43fddcbd540bf79e4afc8992dfc5aae4537a85596c2a1a30dc0914511242f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e47443443525b1a7a53dd43a57c4adf30601d4fa52b28a551bcf99ae07179552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47443443525b1a7a53dd43a57c4adf30601d4fa52b28a551bcf99ae07179552->enter($__internal_e47443443525b1a7a53dd43a57c4adf30601d4fa52b28a551bcf99ae07179552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e47443443525b1a7a53dd43a57c4adf30601d4fa52b28a551bcf99ae07179552->leave($__internal_e47443443525b1a7a53dd43a57c4adf30601d4fa52b28a551bcf99ae07179552_prof);

        
        $__internal_6ff43fddcbd540bf79e4afc8992dfc5aae4537a85596c2a1a30dc0914511242f->leave($__internal_6ff43fddcbd540bf79e4afc8992dfc5aae4537a85596c2a1a30dc0914511242f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d45d7b0efb14e1afe48043dda2783a06c357f5dc323581313f300d152f82d7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45d7b0efb14e1afe48043dda2783a06c357f5dc323581313f300d152f82d7bf->enter($__internal_d45d7b0efb14e1afe48043dda2783a06c357f5dc323581313f300d152f82d7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb16a8066df258a4b194f91bd4ead7821b6e3575fbdf554d74255506858ae078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb16a8066df258a4b194f91bd4ead7821b6e3575fbdf554d74255506858ae078->enter($__internal_fb16a8066df258a4b194f91bd4ead7821b6e3575fbdf554d74255506858ae078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb16a8066df258a4b194f91bd4ead7821b6e3575fbdf554d74255506858ae078->leave($__internal_fb16a8066df258a4b194f91bd4ead7821b6e3575fbdf554d74255506858ae078_prof);

        
        $__internal_d45d7b0efb14e1afe48043dda2783a06c357f5dc323581313f300d152f82d7bf->leave($__internal_d45d7b0efb14e1afe48043dda2783a06c357f5dc323581313f300d152f82d7bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/Comicome/PhpstormProjects/pacman/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
