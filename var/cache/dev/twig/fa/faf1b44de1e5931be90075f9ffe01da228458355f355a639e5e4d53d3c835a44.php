<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_414e2cfb22f704342c952b34101ff9a4f7cf1c9e78bca8669ad22b976c0b5da2 extends Twig_Template
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
        $__internal_5ad08799f4f82fbde28ed8f4ecfaf068a8976d1623d49c2a9eaef9ac6528ab85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad08799f4f82fbde28ed8f4ecfaf068a8976d1623d49c2a9eaef9ac6528ab85->enter($__internal_5ad08799f4f82fbde28ed8f4ecfaf068a8976d1623d49c2a9eaef9ac6528ab85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ae24de48c0db614bf5970a9d0cabc5c1d72042d85679ceb5aaaf4b49525fec50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae24de48c0db614bf5970a9d0cabc5c1d72042d85679ceb5aaaf4b49525fec50->enter($__internal_ae24de48c0db614bf5970a9d0cabc5c1d72042d85679ceb5aaaf4b49525fec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ad08799f4f82fbde28ed8f4ecfaf068a8976d1623d49c2a9eaef9ac6528ab85->leave($__internal_5ad08799f4f82fbde28ed8f4ecfaf068a8976d1623d49c2a9eaef9ac6528ab85_prof);

        
        $__internal_ae24de48c0db614bf5970a9d0cabc5c1d72042d85679ceb5aaaf4b49525fec50->leave($__internal_ae24de48c0db614bf5970a9d0cabc5c1d72042d85679ceb5aaaf4b49525fec50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bcc113ce139b75eeecd29d46e0d52c0da1e69498985f0e927d28e21d3f9fab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bcc113ce139b75eeecd29d46e0d52c0da1e69498985f0e927d28e21d3f9fab4->enter($__internal_4bcc113ce139b75eeecd29d46e0d52c0da1e69498985f0e927d28e21d3f9fab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2012a541d93ff01c0c30f83ed6ad61fd902f4d85691e9920e705d3316237d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2012a541d93ff01c0c30f83ed6ad61fd902f4d85691e9920e705d3316237d6a->enter($__internal_f2012a541d93ff01c0c30f83ed6ad61fd902f4d85691e9920e705d3316237d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f2012a541d93ff01c0c30f83ed6ad61fd902f4d85691e9920e705d3316237d6a->leave($__internal_f2012a541d93ff01c0c30f83ed6ad61fd902f4d85691e9920e705d3316237d6a_prof);

        
        $__internal_4bcc113ce139b75eeecd29d46e0d52c0da1e69498985f0e927d28e21d3f9fab4->leave($__internal_4bcc113ce139b75eeecd29d46e0d52c0da1e69498985f0e927d28e21d3f9fab4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ade715919abe42192025a4c4cd3fd1f22822bca5f28b0d9f463fd333dd8bf0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade715919abe42192025a4c4cd3fd1f22822bca5f28b0d9f463fd333dd8bf0b2->enter($__internal_ade715919abe42192025a4c4cd3fd1f22822bca5f28b0d9f463fd333dd8bf0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b12f326084956ee86a551716bd796a5041c533adcec16a39a3fda9486f1be5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12f326084956ee86a551716bd796a5041c533adcec16a39a3fda9486f1be5fd->enter($__internal_b12f326084956ee86a551716bd796a5041c533adcec16a39a3fda9486f1be5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b12f326084956ee86a551716bd796a5041c533adcec16a39a3fda9486f1be5fd->leave($__internal_b12f326084956ee86a551716bd796a5041c533adcec16a39a3fda9486f1be5fd_prof);

        
        $__internal_ade715919abe42192025a4c4cd3fd1f22822bca5f28b0d9f463fd333dd8bf0b2->leave($__internal_ade715919abe42192025a4c4cd3fd1f22822bca5f28b0d9f463fd333dd8bf0b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24da7899996006486d1e8bedce97ededd3f3b3cbaeff3543dd8b7cfb0f8e80e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24da7899996006486d1e8bedce97ededd3f3b3cbaeff3543dd8b7cfb0f8e80e9->enter($__internal_24da7899996006486d1e8bedce97ededd3f3b3cbaeff3543dd8b7cfb0f8e80e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f02324d524f40be03252d0c03ba1c5f558d822a514a65060117282552c64816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f02324d524f40be03252d0c03ba1c5f558d822a514a65060117282552c64816->enter($__internal_8f02324d524f40be03252d0c03ba1c5f558d822a514a65060117282552c64816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8f02324d524f40be03252d0c03ba1c5f558d822a514a65060117282552c64816->leave($__internal_8f02324d524f40be03252d0c03ba1c5f558d822a514a65060117282552c64816_prof);

        
        $__internal_24da7899996006486d1e8bedce97ededd3f3b3cbaeff3543dd8b7cfb0f8e80e9->leave($__internal_24da7899996006486d1e8bedce97ededd3f3b3cbaeff3543dd8b7cfb0f8e80e9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\laragon\\www\\web3_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
