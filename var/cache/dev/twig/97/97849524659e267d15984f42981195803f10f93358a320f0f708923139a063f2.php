<?php

/* bibliography/edit.html.twig */
class __TwigTemplate_1a2b7b01f9850f4f1086cfcaece2a6b973106638f80842c5d45a51ef5d88a5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/edit.html.twig", 1);
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
        $__internal_0e2c3b51006156346362f93ef447c6c20edce11c63b545a77f3ebd54c3046b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2c3b51006156346362f93ef447c6c20edce11c63b545a77f3ebd54c3046b7c->enter($__internal_0e2c3b51006156346362f93ef447c6c20edce11c63b545a77f3ebd54c3046b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/edit.html.twig"));

        $__internal_e9d26491edbae26b6c576d7b13acc41d5ec13d8ef0771cfafc5d3bda2f64d772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d26491edbae26b6c576d7b13acc41d5ec13d8ef0771cfafc5d3bda2f64d772->enter($__internal_e9d26491edbae26b6c576d7b13acc41d5ec13d8ef0771cfafc5d3bda2f64d772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2c3b51006156346362f93ef447c6c20edce11c63b545a77f3ebd54c3046b7c->leave($__internal_0e2c3b51006156346362f93ef447c6c20edce11c63b545a77f3ebd54c3046b7c_prof);

        
        $__internal_e9d26491edbae26b6c576d7b13acc41d5ec13d8ef0771cfafc5d3bda2f64d772->leave($__internal_e9d26491edbae26b6c576d7b13acc41d5ec13d8ef0771cfafc5d3bda2f64d772_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9747a9217fa3697fd7173045f41ba5dd4666c5569b73e887cc6aa39f681cd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9747a9217fa3697fd7173045f41ba5dd4666c5569b73e887cc6aa39f681cd15->enter($__internal_a9747a9217fa3697fd7173045f41ba5dd4666c5569b73e887cc6aa39f681cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_065eb16d98d1850036fe0dab632d7c5a7b2696c5d679227f54ea1b9674add346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065eb16d98d1850036fe0dab632d7c5a7b2696c5d679227f54ea1b9674add346->enter($__internal_065eb16d98d1850036fe0dab632d7c5a7b2696c5d679227f54ea1b9674add346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"main_content\">
    <h2>Bibliography edit</h2>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
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
        
        $__internal_065eb16d98d1850036fe0dab632d7c5a7b2696c5d679227f54ea1b9674add346->leave($__internal_065eb16d98d1850036fe0dab632d7c5a7b2696c5d679227f54ea1b9674add346_prof);

        
        $__internal_a9747a9217fa3697fd7173045f41ba5dd4666c5569b73e887cc6aa39f681cd15->leave($__internal_a9747a9217fa3697fd7173045f41ba5dd4666c5569b73e887cc6aa39f681cd15_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/edit.html.twig";
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
    <h2>Bibliography edit</h2>

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
                <td>  <input type=\"submit\" value=\"Update\" /></td>
            </tr>
            {{ form_end(form) }}
        </table>
    <ul>
        <li>
            <a href=\"{{ path('bibliography_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    </section>
{% endblock %}
", "bibliography/edit.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\edit.html.twig");
    }
}
