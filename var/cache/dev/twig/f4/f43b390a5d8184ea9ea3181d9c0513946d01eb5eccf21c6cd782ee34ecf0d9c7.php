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
        $__internal_52d945539aca84a17c06ec9acadad28fd7e99173a3ad8548b420888ea21bf7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d945539aca84a17c06ec9acadad28fd7e99173a3ad8548b420888ea21bf7e7->enter($__internal_52d945539aca84a17c06ec9acadad28fd7e99173a3ad8548b420888ea21bf7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $__internal_0919d464aea742b604639ac55506fb64e852d3b28dde5f5b20e674b9a8a36bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0919d464aea742b604639ac55506fb64e852d3b28dde5f5b20e674b9a8a36bf5->enter($__internal_0919d464aea742b604639ac55506fb64e852d3b28dde5f5b20e674b9a8a36bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d945539aca84a17c06ec9acadad28fd7e99173a3ad8548b420888ea21bf7e7->leave($__internal_52d945539aca84a17c06ec9acadad28fd7e99173a3ad8548b420888ea21bf7e7_prof);

        
        $__internal_0919d464aea742b604639ac55506fb64e852d3b28dde5f5b20e674b9a8a36bf5->leave($__internal_0919d464aea742b604639ac55506fb64e852d3b28dde5f5b20e674b9a8a36bf5_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_19f6c7910b50867a08ce239c066eda77f508f8d427d352025b56883d05331d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f6c7910b50867a08ce239c066eda77f508f8d427d352025b56883d05331d45->enter($__internal_19f6c7910b50867a08ce239c066eda77f508f8d427d352025b56883d05331d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_21e4870b146ae056bb838212323a12769707f56e7e0f9289903bf32c8490357a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e4870b146ae056bb838212323a12769707f56e7e0f9289903bf32c8490357a->enter($__internal_21e4870b146ae056bb838212323a12769707f56e7e0f9289903bf32c8490357a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " - Home";
        
        $__internal_21e4870b146ae056bb838212323a12769707f56e7e0f9289903bf32c8490357a->leave($__internal_21e4870b146ae056bb838212323a12769707f56e7e0f9289903bf32c8490357a_prof);

        
        $__internal_19f6c7910b50867a08ce239c066eda77f508f8d427d352025b56883d05331d45->leave($__internal_19f6c7910b50867a08ce239c066eda77f508f8d427d352025b56883d05331d45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d6042b9d75e01b28dc52fc92869f203f9533b4025c2e483722e9e05d8563e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d6042b9d75e01b28dc52fc92869f203f9533b4025c2e483722e9e05d8563e4->enter($__internal_02d6042b9d75e01b28dc52fc92869f203f9533b4025c2e483722e9e05d8563e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5e953747e00acdfabfed70dca21d089b2c92beb42f48414d47b20c897141fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e953747e00acdfabfed70dca21d089b2c92beb42f48414d47b20c897141fce->enter($__internal_f5e953747e00acdfabfed70dca21d089b2c92beb42f48414d47b20c897141fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"main_content\">
            <h3>Bibliography ";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</h3>
    </section>
";
        
        $__internal_f5e953747e00acdfabfed70dca21d089b2c92beb42f48414d47b20c897141fce->leave($__internal_f5e953747e00acdfabfed70dca21d089b2c92beb42f48414d47b20c897141fce_prof);

        
        $__internal_02d6042b9d75e01b28dc52fc92869f203f9533b4025c2e483722e9e05d8563e4->leave($__internal_02d6042b9d75e01b28dc52fc92869f203f9533b4025c2e483722e9e05d8563e4_prof);

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
            <h3>Bibliography {{ name }}</h3>
    </section>
{% endblock %}", "/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\index.html.twig");
    }
}
