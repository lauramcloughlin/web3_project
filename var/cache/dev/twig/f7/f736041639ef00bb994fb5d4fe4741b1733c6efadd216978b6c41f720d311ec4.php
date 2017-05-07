<?php

/* tag/new2.html.twig */
class __TwigTemplate_6550a2ce0079aad76be44e4ff33713f79e9ec25bf0283ec5d35181cd2abc5d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/new2.html.twig", 1);
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
        $__internal_e3b08ecb8d02fe10f9af92eebfc249ddaf48cc08c32ed54eb2fb14c66dec4ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b08ecb8d02fe10f9af92eebfc249ddaf48cc08c32ed54eb2fb14c66dec4ca0->enter($__internal_e3b08ecb8d02fe10f9af92eebfc249ddaf48cc08c32ed54eb2fb14c66dec4ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new2.html.twig"));

        $__internal_a5a63d41a5916c61ad1a8488a9967d5547f68b20175b5fb446e7af3e00e1f5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a63d41a5916c61ad1a8488a9967d5547f68b20175b5fb446e7af3e00e1f5a4->enter($__internal_a5a63d41a5916c61ad1a8488a9967d5547f68b20175b5fb446e7af3e00e1f5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b08ecb8d02fe10f9af92eebfc249ddaf48cc08c32ed54eb2fb14c66dec4ca0->leave($__internal_e3b08ecb8d02fe10f9af92eebfc249ddaf48cc08c32ed54eb2fb14c66dec4ca0_prof);

        
        $__internal_a5a63d41a5916c61ad1a8488a9967d5547f68b20175b5fb446e7af3e00e1f5a4->leave($__internal_a5a63d41a5916c61ad1a8488a9967d5547f68b20175b5fb446e7af3e00e1f5a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ec38535695d5a1330445c614a2e84aa0f71d0343b9cac432b25da697db1c4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec38535695d5a1330445c614a2e84aa0f71d0343b9cac432b25da697db1c4b7->enter($__internal_7ec38535695d5a1330445c614a2e84aa0f71d0343b9cac432b25da697db1c4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bd476585971c11894e8cef597d9814c9f89ffd0d8e5b587d810c4986ac57fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd476585971c11894e8cef597d9814c9f89ffd0d8e5b587d810c4986ac57fb4->enter($__internal_4bd476585971c11894e8cef597d9814c9f89ffd0d8e5b587d810c4986ac57fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Add a Tag</h2>

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
            <td>  <input type=\"submit\" value=\"Add\" /></td>
        </tr>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</section>
";
        
        $__internal_4bd476585971c11894e8cef597d9814c9f89ffd0d8e5b587d810c4986ac57fb4->leave($__internal_4bd476585971c11894e8cef597d9814c9f89ffd0d8e5b587d810c4986ac57fb4_prof);

        
        $__internal_7ec38535695d5a1330445c614a2e84aa0f71d0343b9cac432b25da697db1c4b7->leave($__internal_7ec38535695d5a1330445c614a2e84aa0f71d0343b9cac432b25da697db1c4b7_prof);

    }

    public function getTemplateName()
    {
        return "tag/new2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  68 => 15,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Add a Tag</h2>

    <table>
        {{ form_start(form) }}
        <tr>
            <td> {{ form_row(form.tagName) }}</td>
        </tr>
        <tr>
            <td>  <input type=\"submit\" value=\"Add\" /></td>
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
", "tag/new2.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\new2.html.twig");
    }
}
