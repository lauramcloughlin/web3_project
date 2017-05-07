<?php

/* tag/new.html.twig */
class __TwigTemplate_04a9d7c0d75578e2d00717d79afc19d0ef028257fd48d9cf676aabac09d66a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new.html.twig", 1);
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
        $__internal_de15e03edfcc10c9163af9d7ecc18e2d83ba5623e2b5dd192507f456d3be13ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de15e03edfcc10c9163af9d7ecc18e2d83ba5623e2b5dd192507f456d3be13ae->enter($__internal_de15e03edfcc10c9163af9d7ecc18e2d83ba5623e2b5dd192507f456d3be13ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_4981a25c0d94fde968f306478b91a827e28af4b432db78bc71f9df55315b124b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4981a25c0d94fde968f306478b91a827e28af4b432db78bc71f9df55315b124b->enter($__internal_4981a25c0d94fde968f306478b91a827e28af4b432db78bc71f9df55315b124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de15e03edfcc10c9163af9d7ecc18e2d83ba5623e2b5dd192507f456d3be13ae->leave($__internal_de15e03edfcc10c9163af9d7ecc18e2d83ba5623e2b5dd192507f456d3be13ae_prof);

        
        $__internal_4981a25c0d94fde968f306478b91a827e28af4b432db78bc71f9df55315b124b->leave($__internal_4981a25c0d94fde968f306478b91a827e28af4b432db78bc71f9df55315b124b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ec649d5f9de3e81a03349f121f13b7c8fa1ed9e159e33979e2dacf21afbacfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec649d5f9de3e81a03349f121f13b7c8fa1ed9e159e33979e2dacf21afbacfe->enter($__internal_4ec649d5f9de3e81a03349f121f13b7c8fa1ed9e159e33979e2dacf21afbacfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9763e8fa461db7f532c944cc3cfd59da06323eeb5862cd29ee64ec00d9aba716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9763e8fa461db7f532c944cc3cfd59da06323eeb5862cd29ee64ec00d9aba716->enter($__internal_9763e8fa461db7f532c944cc3cfd59da06323eeb5862cd29ee64ec00d9aba716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Tag creation</h2>

    <table>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <tr>
            <td> ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tagName", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "noOfVotes", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td>  <input type=\"submit\" value=\"Update\" /></td>
        </tr>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</section>
";
        
        $__internal_9763e8fa461db7f532c944cc3cfd59da06323eeb5862cd29ee64ec00d9aba716->leave($__internal_9763e8fa461db7f532c944cc3cfd59da06323eeb5862cd29ee64ec00d9aba716_prof);

        
        $__internal_4ec649d5f9de3e81a03349f121f13b7c8fa1ed9e159e33979e2dacf21afbacfe->leave($__internal_4ec649d5f9de3e81a03349f121f13b7c8fa1ed9e159e33979e2dacf21afbacfe_prof);

    }

    public function getTemplateName()
    {
        return "tag/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  80 => 21,  72 => 16,  66 => 13,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Tag creation</h2>

    <table>
        {{ form_start(form) }}
        <tr>
            <td> {{ form_row(form.tagName) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.status) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.noOfVotes) }}</td>
        </tr>
        <tr>
            <td>  <input type=\"submit\" value=\"Update\" /></td>
        </tr>
        {{ form_end(form) }}
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
    </ul>
</section>
{% endblock %}
", "tag/new.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
