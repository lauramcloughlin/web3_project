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
        $__internal_ceb0d3b126625b7f22771f41f515ff6c360a2985a82049bce211dcb420a33776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb0d3b126625b7f22771f41f515ff6c360a2985a82049bce211dcb420a33776->enter($__internal_ceb0d3b126625b7f22771f41f515ff6c360a2985a82049bce211dcb420a33776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/edit.html.twig"));

        $__internal_0adf38b8ea6e5f0aeef46795cedf373ef5cccf838c7209828b42bff8e7af704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adf38b8ea6e5f0aeef46795cedf373ef5cccf838c7209828b42bff8e7af704f->enter($__internal_0adf38b8ea6e5f0aeef46795cedf373ef5cccf838c7209828b42bff8e7af704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb0d3b126625b7f22771f41f515ff6c360a2985a82049bce211dcb420a33776->leave($__internal_ceb0d3b126625b7f22771f41f515ff6c360a2985a82049bce211dcb420a33776_prof);

        
        $__internal_0adf38b8ea6e5f0aeef46795cedf373ef5cccf838c7209828b42bff8e7af704f->leave($__internal_0adf38b8ea6e5f0aeef46795cedf373ef5cccf838c7209828b42bff8e7af704f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea6ad61e26ec76048a476ce2746826492929f24b0c49486cb9a56ede049aac7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6ad61e26ec76048a476ce2746826492929f24b0c49486cb9a56ede049aac7b->enter($__internal_ea6ad61e26ec76048a476ce2746826492929f24b0c49486cb9a56ede049aac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d191ab1ed6f91a3e6b93651cf3ccf1b3dee8b51ae3f01f0658dfbe123c45585b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d191ab1ed6f91a3e6b93651cf3ccf1b3dee8b51ae3f01f0658dfbe123c45585b->enter($__internal_d191ab1ed6f91a3e6b93651cf3ccf1b3dee8b51ae3f01f0658dfbe123c45585b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Reference edit</h2>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</section>
";
        
        $__internal_d191ab1ed6f91a3e6b93651cf3ccf1b3dee8b51ae3f01f0658dfbe123c45585b->leave($__internal_d191ab1ed6f91a3e6b93651cf3ccf1b3dee8b51ae3f01f0658dfbe123c45585b_prof);

        
        $__internal_ea6ad61e26ec76048a476ce2746826492929f24b0c49486cb9a56ede049aac7b->leave($__internal_ea6ad61e26ec76048a476ce2746826492929f24b0c49486cb9a56ede049aac7b_prof);

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
        return array (  81 => 19,  76 => 17,  70 => 14,  63 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Reference edit</h2>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reference_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</section>
{% endblock %}
", "reference/edit.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\edit.html.twig");
    }
}
