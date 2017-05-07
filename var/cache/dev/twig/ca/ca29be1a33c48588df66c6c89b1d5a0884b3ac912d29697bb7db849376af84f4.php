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
        $__internal_28f7958ca8f1103683cd9773abeabb82c25994465dde81d0af57f2e79753ab87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f7958ca8f1103683cd9773abeabb82c25994465dde81d0af57f2e79753ab87->enter($__internal_28f7958ca8f1103683cd9773abeabb82c25994465dde81d0af57f2e79753ab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_6ebc2989b20098b73aad384e341fb1a3483aeb8ecb0e3fc321ec22fbe29e5b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebc2989b20098b73aad384e341fb1a3483aeb8ecb0e3fc321ec22fbe29e5b72->enter($__internal_6ebc2989b20098b73aad384e341fb1a3483aeb8ecb0e3fc321ec22fbe29e5b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f7958ca8f1103683cd9773abeabb82c25994465dde81d0af57f2e79753ab87->leave($__internal_28f7958ca8f1103683cd9773abeabb82c25994465dde81d0af57f2e79753ab87_prof);

        
        $__internal_6ebc2989b20098b73aad384e341fb1a3483aeb8ecb0e3fc321ec22fbe29e5b72->leave($__internal_6ebc2989b20098b73aad384e341fb1a3483aeb8ecb0e3fc321ec22fbe29e5b72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2333d8e6b030852090155f9947e73db020bb5385f1d9816b97c913371dfb61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2333d8e6b030852090155f9947e73db020bb5385f1d9816b97c913371dfb61b->enter($__internal_b2333d8e6b030852090155f9947e73db020bb5385f1d9816b97c913371dfb61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8911d5f0a82ef9a6abdf22f8a57f2196c0056b94a9197869886abb9dae988b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8911d5f0a82ef9a6abdf22f8a57f2196c0056b94a9197869886abb9dae988b9->enter($__internal_e8911d5f0a82ef9a6abdf22f8a57f2196c0056b94a9197869886abb9dae988b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <td>  <input type=\"submit\" value=\"Add\" /></td>
        </tr>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</section>
";
        
        $__internal_e8911d5f0a82ef9a6abdf22f8a57f2196c0056b94a9197869886abb9dae988b9->leave($__internal_e8911d5f0a82ef9a6abdf22f8a57f2196c0056b94a9197869886abb9dae988b9_prof);

        
        $__internal_b2333d8e6b030852090155f9947e73db020bb5385f1d9816b97c913371dfb61b->leave($__internal_b2333d8e6b030852090155f9947e73db020bb5385f1d9816b97c913371dfb61b_prof);

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
        return array (  82 => 23,  74 => 18,  66 => 13,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
", "tag/new.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\new.html.twig");
    }
}
