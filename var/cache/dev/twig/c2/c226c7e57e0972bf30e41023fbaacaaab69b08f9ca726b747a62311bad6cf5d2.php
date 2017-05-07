<?php

/* security/login.html.twig */
class __TwigTemplate_9f4a915600ba016791ab393bb1782e69bfb7d3407ae2d8e85ddda5f6b7ea2a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_268858db026ee16a17312ecb42483264d179a631085e5ebd5c99ddbf5404f3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268858db026ee16a17312ecb42483264d179a631085e5ebd5c99ddbf5404f3b4->enter($__internal_268858db026ee16a17312ecb42483264d179a631085e5ebd5c99ddbf5404f3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_909e403be4482f6823670059fee830b5d287735f33360ee5d3b4d877ce6a463c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909e403be4482f6823670059fee830b5d287735f33360ee5d3b4d877ce6a463c->enter($__internal_909e403be4482f6823670059fee830b5d287735f33360ee5d3b4d877ce6a463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268858db026ee16a17312ecb42483264d179a631085e5ebd5c99ddbf5404f3b4->leave($__internal_268858db026ee16a17312ecb42483264d179a631085e5ebd5c99ddbf5404f3b4_prof);

        
        $__internal_909e403be4482f6823670059fee830b5d287735f33360ee5d3b4d877ce6a463c->leave($__internal_909e403be4482f6823670059fee830b5d287735f33360ee5d3b4d877ce6a463c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f9d9d26948f2cd55e471cec315ed473a83dfb9388cd5d6353168bf74dd56ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9d9d26948f2cd55e471cec315ed473a83dfb9388cd5d6353168bf74dd56ba9->enter($__internal_0f9d9d26948f2cd55e471cec315ed473a83dfb9388cd5d6353168bf74dd56ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a5f3de3f2856f7ce44920e216df2194d17b443e562d8ca80db83461478f950e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5f3de3f2856f7ce44920e216df2194d17b443e562d8ca80db83461478f950e->enter($__internal_6a5f3de3f2856f7ce44920e216df2194d17b443e562d8ca80db83461478f950e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section class=\"main_content\">

                <h2>Login</h2>
                ";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 9
        echo "
                <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                   <table>
                       ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <tr><td>
                               ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
                        </td></tr>
                       <tr><td>
                          ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
                       </td></tr>
                       <tr><td> <button type=\"submit\">Login</button></td></tr>
                       ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                   </table>
                </form>

    </section>
";
        
        $__internal_6a5f3de3f2856f7ce44920e216df2194d17b443e562d8ca80db83461478f950e->leave($__internal_6a5f3de3f2856f7ce44920e216df2194d17b443e562d8ca80db83461478f950e_prof);

        
        $__internal_0f9d9d26948f2cd55e471cec315ed473a83dfb9388cd5d6353168bf74dd56ba9->leave($__internal_0f9d9d26948f2cd55e471cec315ed473a83dfb9388cd5d6353168bf74dd56ba9_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  81 => 17,  75 => 14,  70 => 12,  65 => 10,  62 => 9,  56 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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

                <h2>Login</h2>
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <form action=\"{{ path('security_login') }}\" method=\"post\">
                   <table>
                       {{ form_start(form) }}
                        <tr><td>
                               {{ form_row(form._username) }}
                        </td></tr>
                       <tr><td>
                          {{ form_row(form._password) }}
                       </td></tr>
                       <tr><td> <button type=\"submit\">Login</button></td></tr>
                       {{ form_end(form) }}
                   </table>
                </form>

    </section>
{% endblock %}", "security/login.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\security\\login.html.twig");
    }
}
