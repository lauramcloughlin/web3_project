<?php

/* reference/edit.html.twig */
class __TwigTemplate_413509ab46cfea38d4692de1582e39363b212801878f5a92ec764c42c03b0498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reference/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd5729fbf33cc1ee90de462c887f1c9acdf34f8ae333f6b5fec0be3008dc9284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5729fbf33cc1ee90de462c887f1c9acdf34f8ae333f6b5fec0be3008dc9284->enter($__internal_cd5729fbf33cc1ee90de462c887f1c9acdf34f8ae333f6b5fec0be3008dc9284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/edit.html.twig"));

        $__internal_120b685742ec99f89c49cca793bb746ba9d8a01316f497f5a2a669c73fd8bd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120b685742ec99f89c49cca793bb746ba9d8a01316f497f5a2a669c73fd8bd0e->enter($__internal_120b685742ec99f89c49cca793bb746ba9d8a01316f497f5a2a669c73fd8bd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5729fbf33cc1ee90de462c887f1c9acdf34f8ae333f6b5fec0be3008dc9284->leave($__internal_cd5729fbf33cc1ee90de462c887f1c9acdf34f8ae333f6b5fec0be3008dc9284_prof);

        
        $__internal_120b685742ec99f89c49cca793bb746ba9d8a01316f497f5a2a669c73fd8bd0e->leave($__internal_120b685742ec99f89c49cca793bb746ba9d8a01316f497f5a2a669c73fd8bd0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34b66afff718fba0de422b68386ac237974235daf62cc3d223dd93e6ea4734aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b66afff718fba0de422b68386ac237974235daf62cc3d223dd93e6ea4734aa->enter($__internal_34b66afff718fba0de422b68386ac237974235daf62cc3d223dd93e6ea4734aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50eacae819c379d4695f72181ffb7b35332e07964447c7e15a2b0a2127576143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50eacae819c379d4695f72181ffb7b35332e07964447c7e15a2b0a2127576143->enter($__internal_50eacae819c379d4695f72181ffb7b35332e07964447c7e15a2b0a2127576143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Edit Reference</h2>

    <table>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        <tr>
            <td> ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameOfAuthor", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "yearPublished", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titleOfReference", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cityPublished", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publisher", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pagesUsed", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "textSummary", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "referenceBibliographies", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "referenceTags", array()), 'row');
        echo "</td>
        </tr>

        <tr>
            <td>  <input type=\"submit\" value=\"Update\" /></td>
        </tr>

        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>
</section>
";
        
        $__internal_50eacae819c379d4695f72181ffb7b35332e07964447c7e15a2b0a2127576143->leave($__internal_50eacae819c379d4695f72181ffb7b35332e07964447c7e15a2b0a2127576143_prof);

        
        $__internal_34b66afff718fba0de422b68386ac237974235daf62cc3d223dd93e6ea4734aa->leave($__internal_34b66afff718fba0de422b68386ac237974235daf62cc3d223dd93e6ea4734aa_prof);

    }

    public function getTemplateName()
    {
        return "reference/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 45,  115 => 38,  109 => 35,  103 => 32,  97 => 29,  91 => 26,  85 => 23,  79 => 20,  73 => 17,  67 => 14,  61 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<section class=\"main_content\">
    <h2>Edit Reference</h2>

    <table>
        {{ form_start(form) }}

        <tr>
            <td> {{ form_row(form.nameOfAuthor) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.yearPublished) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.titleOfReference) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.cityPublished) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.publisher) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.pagesUsed) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.textSummary) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.status) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.referenceBibliographies) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.referenceTags) }}</td>
        </tr>

        <tr>
            <td>  <input type=\"submit\" value=\"Update\" /></td>
        </tr>

        {{ form_end(form) }}
    </table>
</section>
{% endblock %}
", "reference/edit.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\edit.html.twig");
    }
}
