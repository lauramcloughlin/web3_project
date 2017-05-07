<?php

/* admin/new.html.twig */
class __TwigTemplate_359a76c61a4fc3b4418896e20a8f5c9419ee5af136ec672daabdffc12bfc8c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/new.html.twig", 1);
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
        $__internal_2f52b60cb59dd4ab18b85c810df2a259a5ff06689f0f4ef1844d03b9fe5393a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f52b60cb59dd4ab18b85c810df2a259a5ff06689f0f4ef1844d03b9fe5393a2->enter($__internal_2f52b60cb59dd4ab18b85c810df2a259a5ff06689f0f4ef1844d03b9fe5393a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $__internal_dde20d0718e53c7cade613958e208e00f311942edaa8aa5e3c752e3346b3387e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde20d0718e53c7cade613958e208e00f311942edaa8aa5e3c752e3346b3387e->enter($__internal_dde20d0718e53c7cade613958e208e00f311942edaa8aa5e3c752e3346b3387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f52b60cb59dd4ab18b85c810df2a259a5ff06689f0f4ef1844d03b9fe5393a2->leave($__internal_2f52b60cb59dd4ab18b85c810df2a259a5ff06689f0f4ef1844d03b9fe5393a2_prof);

        
        $__internal_dde20d0718e53c7cade613958e208e00f311942edaa8aa5e3c752e3346b3387e->leave($__internal_dde20d0718e53c7cade613958e208e00f311942edaa8aa5e3c752e3346b3387e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ead2c96bd536a625389fab3a5432d44a83630cc809e1ad326cc2a14b28541f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead2c96bd536a625389fab3a5432d44a83630cc809e1ad326cc2a14b28541f44->enter($__internal_ead2c96bd536a625389fab3a5432d44a83630cc809e1ad326cc2a14b28541f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c6eeaa784cc7626cdc28c7312778dd4eeed996530a39ea8c7766d71f35789d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6eeaa784cc7626cdc28c7312778dd4eeed996530a39ea8c7766d71f35789d8->enter($__internal_7c6eeaa784cc7626cdc28c7312778dd4eeed996530a39ea8c7766d71f35789d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c6eeaa784cc7626cdc28c7312778dd4eeed996530a39ea8c7766d71f35789d8->leave($__internal_7c6eeaa784cc7626cdc28c7312778dd4eeed996530a39ea8c7766d71f35789d8_prof);

        
        $__internal_ead2c96bd536a625389fab3a5432d44a83630cc809e1ad326cc2a14b28541f44->leave($__internal_ead2c96bd536a625389fab3a5432d44a83630cc809e1ad326cc2a14b28541f44_prof);

    }

    public function getTemplateName()
    {
        return "admin/new.html.twig";
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
{% endblock %}", "admin/new.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\admin\\new.html.twig");
    }
}
