<?php

/* /index.html.twig */
class __TwigTemplate_1e950973b4ee448e93abefcc70482b9e5bd536c862cfc9eab09f80864b77b958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dd75362531d9f2aa0d7850b3c5049edb050ec8cb5f6712afb67b59f6afd266e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd75362531d9f2aa0d7850b3c5049edb050ec8cb5f6712afb67b59f6afd266e->enter($__internal_8dd75362531d9f2aa0d7850b3c5049edb050ec8cb5f6712afb67b59f6afd266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $__internal_04bb73e37a2bb7820b89ad5cfb10f2e2c533f69c10e74e6601728c46181f289a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bb73e37a2bb7820b89ad5cfb10f2e2c533f69c10e74e6601728c46181f289a->enter($__internal_04bb73e37a2bb7820b89ad5cfb10f2e2c533f69c10e74e6601728c46181f289a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dd75362531d9f2aa0d7850b3c5049edb050ec8cb5f6712afb67b59f6afd266e->leave($__internal_8dd75362531d9f2aa0d7850b3c5049edb050ec8cb5f6712afb67b59f6afd266e_prof);

        
        $__internal_04bb73e37a2bb7820b89ad5cfb10f2e2c533f69c10e74e6601728c46181f289a->leave($__internal_04bb73e37a2bb7820b89ad5cfb10f2e2c533f69c10e74e6601728c46181f289a_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_8eab1acd38ddc78b4cc21dc407e049b2bd0fbe89a178514ff4adea25c239d54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eab1acd38ddc78b4cc21dc407e049b2bd0fbe89a178514ff4adea25c239d54c->enter($__internal_8eab1acd38ddc78b4cc21dc407e049b2bd0fbe89a178514ff4adea25c239d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_070b3dde78b9abcfc41aa9eec795a0e25de221714605c085ce4b97ac1bdef581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070b3dde78b9abcfc41aa9eec795a0e25de221714605c085ce4b97ac1bdef581->enter($__internal_070b3dde78b9abcfc41aa9eec795a0e25de221714605c085ce4b97ac1bdef581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " - Home";
        
        $__internal_070b3dde78b9abcfc41aa9eec795a0e25de221714605c085ce4b97ac1bdef581->leave($__internal_070b3dde78b9abcfc41aa9eec795a0e25de221714605c085ce4b97ac1bdef581_prof);

        
        $__internal_8eab1acd38ddc78b4cc21dc407e049b2bd0fbe89a178514ff4adea25c239d54c->leave($__internal_8eab1acd38ddc78b4cc21dc407e049b2bd0fbe89a178514ff4adea25c239d54c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_203ccab2b9ec911a2d7bfd88c3ecdad5398026fcca4217e49164d59a363f6817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203ccab2b9ec911a2d7bfd88c3ecdad5398026fcca4217e49164d59a363f6817->enter($__internal_203ccab2b9ec911a2d7bfd88c3ecdad5398026fcca4217e49164d59a363f6817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_126da6d1488dc5b9078e6c966b2801d51b872efdf8e13cf2b9855a8dc20e48a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126da6d1488dc5b9078e6c966b2801d51b872efdf8e13cf2b9855a8dc20e48a1->enter($__internal_126da6d1488dc5b9078e6c966b2801d51b872efdf8e13cf2b9855a8dc20e48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"main_content\">
            <h3> ";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</h3>
    </section>
";
        
        $__internal_126da6d1488dc5b9078e6c966b2801d51b872efdf8e13cf2b9855a8dc20e48a1->leave($__internal_126da6d1488dc5b9078e6c966b2801d51b872efdf8e13cf2b9855a8dc20e48a1_prof);

        
        $__internal_203ccab2b9ec911a2d7bfd88c3ecdad5398026fcca4217e49164d59a363f6817->leave($__internal_203ccab2b9ec911a2d7bfd88c3ecdad5398026fcca4217e49164d59a363f6817_prof);

    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block pageTitle %} - Home{% endblock %}

{% block body %}
    <section class=\"main_content\">
            <h3> {{ name }}</h3>
    </section>
{% endblock %}", "/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\index.html.twig");
    }
}
