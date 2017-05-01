<?php

/* reference/new.html.twig */
class __TwigTemplate_58cb90b2764968b333492af443562d2d890edb9dfda62baa67ddfa66561e59e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reference/new.html.twig", 1);
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
        $__internal_8063595f6e9f565452d9843daa14331fa169bbd758ade1216dce5f99f0f017d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8063595f6e9f565452d9843daa14331fa169bbd758ade1216dce5f99f0f017d4->enter($__internal_8063595f6e9f565452d9843daa14331fa169bbd758ade1216dce5f99f0f017d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/new.html.twig"));

        $__internal_76ed63b10a744d5f1a5ceedf7856d8ae4c5503b942d164d48dd20669d96319a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ed63b10a744d5f1a5ceedf7856d8ae4c5503b942d164d48dd20669d96319a6->enter($__internal_76ed63b10a744d5f1a5ceedf7856d8ae4c5503b942d164d48dd20669d96319a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8063595f6e9f565452d9843daa14331fa169bbd758ade1216dce5f99f0f017d4->leave($__internal_8063595f6e9f565452d9843daa14331fa169bbd758ade1216dce5f99f0f017d4_prof);

        
        $__internal_76ed63b10a744d5f1a5ceedf7856d8ae4c5503b942d164d48dd20669d96319a6->leave($__internal_76ed63b10a744d5f1a5ceedf7856d8ae4c5503b942d164d48dd20669d96319a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb6fd656918581df9e34ee605610f6a2f704338bcad8a4d020c1e0e0a4b03f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6fd656918581df9e34ee605610f6a2f704338bcad8a4d020c1e0e0a4b03f80->enter($__internal_eb6fd656918581df9e34ee605610f6a2f704338bcad8a4d020c1e0e0a4b03f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a294883e16f00feac8e681fd9d822c7e252201767e212e14f25afed1b3c945f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a294883e16f00feac8e681fd9d822c7e252201767e212e14f25afed1b3c945f->enter($__internal_7a294883e16f00feac8e681fd9d822c7e252201767e212e14f25afed1b3c945f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Reference creation</h2>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</section>
";
        
        $__internal_7a294883e16f00feac8e681fd9d822c7e252201767e212e14f25afed1b3c945f->leave($__internal_7a294883e16f00feac8e681fd9d822c7e252201767e212e14f25afed1b3c945f_prof);

        
        $__internal_eb6fd656918581df9e34ee605610f6a2f704338bcad8a4d020c1e0e0a4b03f80->leave($__internal_eb6fd656918581df9e34ee605610f6a2f704338bcad8a4d020c1e0e0a4b03f80_prof);

    }

    public function getTemplateName()
    {
        return "reference/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  63 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Reference creation</h2>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reference_index') }}\">Back to the list</a>
        </li>
    </ul>
</section>
{% endblock %}
", "reference/new.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\new.html.twig");
    }
}
