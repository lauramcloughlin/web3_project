<?php

/* tag/edit.html.twig */
class __TwigTemplate_ccf6a922dd82d50237964d7b58182eff3db952dd650f5567309e869de33bd878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/edit.html.twig", 1);
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
        $__internal_e1c95f620b49f8a561d97231ded83b6ccce7a489178be0600f3998cd71765257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c95f620b49f8a561d97231ded83b6ccce7a489178be0600f3998cd71765257->enter($__internal_e1c95f620b49f8a561d97231ded83b6ccce7a489178be0600f3998cd71765257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $__internal_19c4875e4a2077426abe30f6f2088b1731df3f91922f12f13ce98281b0ba8e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c4875e4a2077426abe30f6f2088b1731df3f91922f12f13ce98281b0ba8e31->enter($__internal_19c4875e4a2077426abe30f6f2088b1731df3f91922f12f13ce98281b0ba8e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1c95f620b49f8a561d97231ded83b6ccce7a489178be0600f3998cd71765257->leave($__internal_e1c95f620b49f8a561d97231ded83b6ccce7a489178be0600f3998cd71765257_prof);

        
        $__internal_19c4875e4a2077426abe30f6f2088b1731df3f91922f12f13ce98281b0ba8e31->leave($__internal_19c4875e4a2077426abe30f6f2088b1731df3f91922f12f13ce98281b0ba8e31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d468f277cd448e4d4b34b87350b1e634de86e55cb7c65a323bb6c0708563dd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d468f277cd448e4d4b34b87350b1e634de86e55cb7c65a323bb6c0708563dd2e->enter($__internal_d468f277cd448e4d4b34b87350b1e634de86e55cb7c65a323bb6c0708563dd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f56d6eabfe33349efa16739e2d84d3fe7fdd2cd88c3b308a9dbc2533eb1fd710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56d6eabfe33349efa16739e2d84d3fe7fdd2cd88c3b308a9dbc2533eb1fd710->enter($__internal_f56d6eabfe33349efa16739e2d84d3fe7fdd2cd88c3b308a9dbc2533eb1fd710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Tag edit</h2>

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
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</section>
";
        
        $__internal_f56d6eabfe33349efa16739e2d84d3fe7fdd2cd88c3b308a9dbc2533eb1fd710->leave($__internal_f56d6eabfe33349efa16739e2d84d3fe7fdd2cd88c3b308a9dbc2533eb1fd710_prof);

        
        $__internal_d468f277cd448e4d4b34b87350b1e634de86e55cb7c65a323bb6c0708563dd2e->leave($__internal_d468f277cd448e4d4b34b87350b1e634de86e55cb7c65a323bb6c0708563dd2e_prof);

    }

    public function getTemplateName()
    {
        return "tag/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  93 => 28,  87 => 25,  80 => 21,  72 => 16,  66 => 13,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Tag edit</h2>

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
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</section>
{% endblock %}
", "tag/edit.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\edit.html.twig");
    }
}
