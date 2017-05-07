<?php

/* user/register.html.twig */
class __TwigTemplate_2021347d7a81d599e1c9948770cf20b4b16ed358df9df3810448cccea50b7263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/register.html.twig", 1);
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
        $__internal_092e8876de3249bb9861f53043e30c5531eee6dfaa04c1da16332c69be7b7fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092e8876de3249bb9861f53043e30c5531eee6dfaa04c1da16332c69be7b7fa1->enter($__internal_092e8876de3249bb9861f53043e30c5531eee6dfaa04c1da16332c69be7b7fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $__internal_d4338a381bd2c13a86f581736a8ef8c05db97b0f7ccbf194ad9d7bb7e46033d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4338a381bd2c13a86f581736a8ef8c05db97b0f7ccbf194ad9d7bb7e46033d6->enter($__internal_d4338a381bd2c13a86f581736a8ef8c05db97b0f7ccbf194ad9d7bb7e46033d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_092e8876de3249bb9861f53043e30c5531eee6dfaa04c1da16332c69be7b7fa1->leave($__internal_092e8876de3249bb9861f53043e30c5531eee6dfaa04c1da16332c69be7b7fa1_prof);

        
        $__internal_d4338a381bd2c13a86f581736a8ef8c05db97b0f7ccbf194ad9d7bb7e46033d6->leave($__internal_d4338a381bd2c13a86f581736a8ef8c05db97b0f7ccbf194ad9d7bb7e46033d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52d3e40fbedf1c73821b3420b9148c1f1b3107b087dd1f25170955bc9d125e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d3e40fbedf1c73821b3420b9148c1f1b3107b087dd1f25170955bc9d125e7a->enter($__internal_52d3e40fbedf1c73821b3420b9148c1f1b3107b087dd1f25170955bc9d125e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e4768bc40a952856d7bff60baea3d31e00a6fbfc9e0e421a4844947359a81c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4768bc40a952856d7bff60baea3d31e00a6fbfc9e0e421a4844947359a81c8->enter($__internal_9e4768bc40a952856d7bff60baea3d31e00a6fbfc9e0e421a4844947359a81c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"main_content\">
<table>
    <tr>
        <th>Register</th>
    </tr>

            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <tr>
        <td> ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("label" => "Password"));
        // line 17
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("label" => "Repeat Password"));
        // line 22
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roles", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> <button type=\"submit\"  formnovalidate>Register</button></td>
    </tr>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</table>

    </section>
";
        
        $__internal_9e4768bc40a952856d7bff60baea3d31e00a6fbfc9e0e421a4844947359a81c8->leave($__internal_9e4768bc40a952856d7bff60baea3d31e00a6fbfc9e0e421a4844947359a81c8_prof);

        
        $__internal_52d3e40fbedf1c73821b3420b9148c1f1b3107b087dd1f25170955bc9d125e7a->leave($__internal_52d3e40fbedf1c73821b3420b9148c1f1b3107b087dd1f25170955bc9d125e7a_prof);

    }

    public function getTemplateName()
    {
        return "user/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  82 => 25,  77 => 22,  75 => 20,  70 => 17,  68 => 15,  62 => 12,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
<table>
    <tr>
        <th>Register</th>
    </tr>

            {{ form_start(form) }}
    <tr>
        <td> {{ form_row(form.email) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.plainPassword.first, {
                'label': 'Password'
            }) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.plainPassword.second, {
                'label': 'Repeat Password'
            })  }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.roles) }}</td>
    </tr>
    <tr>
        <td> <button type=\"submit\"  formnovalidate>Register</button></td>
    </tr>
            {{ form_end(form) }}

</table>

    </section>
{% endblock %}", "user/register.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\user\\register.html.twig");
    }
}
