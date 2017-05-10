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
        $__internal_0692d45e5c9faae40b400a20a550417e632c1bb549546a9ad4d9e85c7b1a1dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0692d45e5c9faae40b400a20a550417e632c1bb549546a9ad4d9e85c7b1a1dae->enter($__internal_0692d45e5c9faae40b400a20a550417e632c1bb549546a9ad4d9e85c7b1a1dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $__internal_ccc04c59537005fe8a81dd472d8da203b77944c6cbe96217e6c692e6639fad62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc04c59537005fe8a81dd472d8da203b77944c6cbe96217e6c692e6639fad62->enter($__internal_ccc04c59537005fe8a81dd472d8da203b77944c6cbe96217e6c692e6639fad62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0692d45e5c9faae40b400a20a550417e632c1bb549546a9ad4d9e85c7b1a1dae->leave($__internal_0692d45e5c9faae40b400a20a550417e632c1bb549546a9ad4d9e85c7b1a1dae_prof);

        
        $__internal_ccc04c59537005fe8a81dd472d8da203b77944c6cbe96217e6c692e6639fad62->leave($__internal_ccc04c59537005fe8a81dd472d8da203b77944c6cbe96217e6c692e6639fad62_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_6093304133d450c402d245ab08914250acf921c3e58a140159932007d082d2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6093304133d450c402d245ab08914250acf921c3e58a140159932007d082d2a4->enter($__internal_6093304133d450c402d245ab08914250acf921c3e58a140159932007d082d2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_5da09517e4251216650d1967e4e438b2877de65f566ee64b403d8e0b493a874b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da09517e4251216650d1967e4e438b2877de65f566ee64b403d8e0b493a874b->enter($__internal_5da09517e4251216650d1967e4e438b2877de65f566ee64b403d8e0b493a874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " - Home";
        
        $__internal_5da09517e4251216650d1967e4e438b2877de65f566ee64b403d8e0b493a874b->leave($__internal_5da09517e4251216650d1967e4e438b2877de65f566ee64b403d8e0b493a874b_prof);

        
        $__internal_6093304133d450c402d245ab08914250acf921c3e58a140159932007d082d2a4->leave($__internal_6093304133d450c402d245ab08914250acf921c3e58a140159932007d082d2a4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59edab83fddf5e85be01e2f8fd6cba38d35c45b52617c95d2210c6c597318b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59edab83fddf5e85be01e2f8fd6cba38d35c45b52617c95d2210c6c597318b03->enter($__internal_59edab83fddf5e85be01e2f8fd6cba38d35c45b52617c95d2210c6c597318b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c51277042ad3325f22c13467514be531fe6f4b46775b37fde9df63dfdb48a238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51277042ad3325f22c13467514be531fe6f4b46775b37fde9df63dfdb48a238->enter($__internal_c51277042ad3325f22c13467514be531fe6f4b46775b37fde9df63dfdb48a238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"main_content\">
            <h3> Welcome to Bibliography Manager</h3>
    </section>
";
        
        $__internal_c51277042ad3325f22c13467514be531fe6f4b46775b37fde9df63dfdb48a238->leave($__internal_c51277042ad3325f22c13467514be531fe6f4b46775b37fde9df63dfdb48a238_prof);

        
        $__internal_59edab83fddf5e85be01e2f8fd6cba38d35c45b52617c95d2210c6c597318b03->leave($__internal_59edab83fddf5e85be01e2f8fd6cba38d35c45b52617c95d2210c6c597318b03_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
            <h3> Welcome to Bibliography Manager</h3>
    </section>
{% endblock %}", "/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\index.html.twig");
    }
}
