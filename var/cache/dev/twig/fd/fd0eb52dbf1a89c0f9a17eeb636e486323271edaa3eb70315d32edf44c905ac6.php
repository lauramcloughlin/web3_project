<?php

/* bibliography/new.html.twig */
class __TwigTemplate_ae556ff6633846442b3b7fe1b869943001e8feb1c3889f2f44f53a21df0fce56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/new.html.twig", 1);
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
        $__internal_527f4869cbedb884d3c383318d43722851331c499b6405024af53ae02a2240d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527f4869cbedb884d3c383318d43722851331c499b6405024af53ae02a2240d5->enter($__internal_527f4869cbedb884d3c383318d43722851331c499b6405024af53ae02a2240d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/new.html.twig"));

        $__internal_79f0513c71971e48ee6a2c05128ffb9ff9729cfd855ac043a95ea9a0f181f35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f0513c71971e48ee6a2c05128ffb9ff9729cfd855ac043a95ea9a0f181f35c->enter($__internal_79f0513c71971e48ee6a2c05128ffb9ff9729cfd855ac043a95ea9a0f181f35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527f4869cbedb884d3c383318d43722851331c499b6405024af53ae02a2240d5->leave($__internal_527f4869cbedb884d3c383318d43722851331c499b6405024af53ae02a2240d5_prof);

        
        $__internal_79f0513c71971e48ee6a2c05128ffb9ff9729cfd855ac043a95ea9a0f181f35c->leave($__internal_79f0513c71971e48ee6a2c05128ffb9ff9729cfd855ac043a95ea9a0f181f35c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbfbc423a5a6f59f2a5be87d489cbd288dc3068b48b53b268ee975bf699141db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfbc423a5a6f59f2a5be87d489cbd288dc3068b48b53b268ee975bf699141db->enter($__internal_bbfbc423a5a6f59f2a5be87d489cbd288dc3068b48b53b268ee975bf699141db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28c66b522006c9dd41be05f43bd4d7b8b950c6f4ed011d2c0c7e706163266e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c66b522006c9dd41be05f43bd4d7b8b950c6f4ed011d2c0c7e706163266e3b->enter($__internal_28c66b522006c9dd41be05f43bd4d7b8b950c6f4ed011d2c0c7e706163266e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Add a new Bibliography</h2>

    <table>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <tr>
            <td> ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bibliographyName", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "textSummary", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td>  <input type=\"submit\" value=\"Create\" /></td>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</section>
";
        
        $__internal_28c66b522006c9dd41be05f43bd4d7b8b950c6f4ed011d2c0c7e706163266e3b->leave($__internal_28c66b522006c9dd41be05f43bd4d7b8b950c6f4ed011d2c0c7e706163266e3b_prof);

        
        $__internal_bbfbc423a5a6f59f2a5be87d489cbd288dc3068b48b53b268ee975bf699141db->leave($__internal_bbfbc423a5a6f59f2a5be87d489cbd288dc3068b48b53b268ee975bf699141db_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/new.html.twig";
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
    <h2>Add a new Bibliography</h2>

    <table>
        {{ form_start(form) }}
        <tr>
            <td> {{ form_row(form.bibliographyName) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.textSummary) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.status) }}</td>
        </tr>
        <tr>
            <td>  <input type=\"submit\" value=\"Create\" /></td>
        </tr>
        {{ form_end(form) }}
    </table>

    <ul>
        <li>
            <a href=\"{{ path('bibliography_index') }}\">Back to the list</a>
        </li>
    </ul>
</section>
{% endblock %}
", "bibliography/new.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\new.html.twig");
    }
}
