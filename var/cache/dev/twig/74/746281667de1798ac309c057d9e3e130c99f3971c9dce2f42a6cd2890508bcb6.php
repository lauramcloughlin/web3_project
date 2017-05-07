<?php

/* admin/edit.html.twig */
class __TwigTemplate_00fc34ea50d14d9f63a20625a3cb2f47676a6678f50f1beeb92201f047383a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit.html.twig", 1);
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
        $__internal_52033eb8ace8553380bccf8bcaa1edc10af51d5114d19b07f8ef5cf33a9b638b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52033eb8ace8553380bccf8bcaa1edc10af51d5114d19b07f8ef5cf33a9b638b->enter($__internal_52033eb8ace8553380bccf8bcaa1edc10af51d5114d19b07f8ef5cf33a9b638b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $__internal_0bce8eeaeb5e708ef91c062defe888a5e47bf21fa3d2a49260ac30d727e96609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bce8eeaeb5e708ef91c062defe888a5e47bf21fa3d2a49260ac30d727e96609->enter($__internal_0bce8eeaeb5e708ef91c062defe888a5e47bf21fa3d2a49260ac30d727e96609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52033eb8ace8553380bccf8bcaa1edc10af51d5114d19b07f8ef5cf33a9b638b->leave($__internal_52033eb8ace8553380bccf8bcaa1edc10af51d5114d19b07f8ef5cf33a9b638b_prof);

        
        $__internal_0bce8eeaeb5e708ef91c062defe888a5e47bf21fa3d2a49260ac30d727e96609->leave($__internal_0bce8eeaeb5e708ef91c062defe888a5e47bf21fa3d2a49260ac30d727e96609_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf5129d6a47cc4df945da9865602d5f9d158e96d4068df8df9487672e9fdf3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5129d6a47cc4df945da9865602d5f9d158e96d4068df8df9487672e9fdf3c5->enter($__internal_bf5129d6a47cc4df945da9865602d5f9d158e96d4068df8df9487672e9fdf3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a958414f3324bba1552b63381f5ea4586cd7165c9b001c8a8f85496231059159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a958414f3324bba1552b63381f5ea4586cd7165c9b001c8a8f85496231059159->enter($__internal_a958414f3324bba1552b63381f5ea4586cd7165c9b001c8a8f85496231059159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"main_content\">
<table>
    <tr>
        <th>Update a User</th>
    </tr>

            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <tr>
        <td> ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'row', array("label" => "Password"));
        // line 17
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'row', array("label" => "Repeat Password"));
        // line 22
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "roles", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> <button type=\"submit\"  formnovalidate>Update User</button></td>
    </tr>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

</table>

    </section>
";
        
        $__internal_a958414f3324bba1552b63381f5ea4586cd7165c9b001c8a8f85496231059159->leave($__internal_a958414f3324bba1552b63381f5ea4586cd7165c9b001c8a8f85496231059159_prof);

        
        $__internal_bf5129d6a47cc4df945da9865602d5f9d158e96d4068df8df9487672e9fdf3c5->leave($__internal_bf5129d6a47cc4df945da9865602d5f9d158e96d4068df8df9487672e9fdf3c5_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit.html.twig";
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
        <th>Update a User</th>
    </tr>

            {{ form_start(edit_form) }}
    <tr>
        <td> {{ form_row(edit_form.email) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(edit_form.plainPassword.first, {
                'label': 'Password'
            }) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(edit_form.plainPassword.second, {
                'label': 'Repeat Password'
            })  }}</td>
    </tr>
    <tr>
        <td> {{ form_row(edit_form.roles) }}</td>
    </tr>
    <tr>
        <td> <button type=\"submit\"  formnovalidate>Update User</button></td>
    </tr>
            {{ form_end(edit_form) }}

</table>

    </section>
{% endblock %}", "admin/edit.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\admin\\edit.html.twig");
    }
}
