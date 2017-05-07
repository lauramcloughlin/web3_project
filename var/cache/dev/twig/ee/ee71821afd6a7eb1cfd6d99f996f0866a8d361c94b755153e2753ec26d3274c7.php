<?php

/* bibliography/index.html.twig */
class __TwigTemplate_24f610a0bc8204e18f9faade4e6cead4a7810827cdd3826782c618e9ba4fd3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/index.html.twig", 1);
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
        $__internal_ce4a810765fe2730a37c47c194a6a9083420e533b5eeb8b76f9a8d003db8d6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4a810765fe2730a37c47c194a6a9083420e533b5eeb8b76f9a8d003db8d6b7->enter($__internal_ce4a810765fe2730a37c47c194a6a9083420e533b5eeb8b76f9a8d003db8d6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $__internal_2f3aff794b8a40e7247e22de315fccb5ac02447644c20f0f77742a8150a0b8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3aff794b8a40e7247e22de315fccb5ac02447644c20f0f77742a8150a0b8d8->enter($__internal_2f3aff794b8a40e7247e22de315fccb5ac02447644c20f0f77742a8150a0b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4a810765fe2730a37c47c194a6a9083420e533b5eeb8b76f9a8d003db8d6b7->leave($__internal_ce4a810765fe2730a37c47c194a6a9083420e533b5eeb8b76f9a8d003db8d6b7_prof);

        
        $__internal_2f3aff794b8a40e7247e22de315fccb5ac02447644c20f0f77742a8150a0b8d8->leave($__internal_2f3aff794b8a40e7247e22de315fccb5ac02447644c20f0f77742a8150a0b8d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16683b07cf49ad14bd9f8f310f2b80a56fdd6bd42c3b1c647a547e4ef72d90aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16683b07cf49ad14bd9f8f310f2b80a56fdd6bd42c3b1c647a547e4ef72d90aa->enter($__internal_16683b07cf49ad14bd9f8f310f2b80a56fdd6bd42c3b1c647a547e4ef72d90aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56d4a2bb73a67e58b194fc5f6dfff6b18b4c8e800f680de00607a3d469b7289b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d4a2bb73a67e58b194fc5f6dfff6b18b4c8e800f680de00607a3d469b7289b->enter($__internal_56d4a2bb73a67e58b194fc5f6dfff6b18b4c8e800f680de00607a3d469b7289b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Bibliographies &nbsp;&nbsp;<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
        echo "\">+ Create a new bibliography</a></h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Bibliography Name</th>
                <th>Text Summary</th>
                <th>Status</th>
                <th>User</th>
                <th>View</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bibliographies"] ?? $this->getContext($context, "bibliographies")));
        foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "bibliographyName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "textSummary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bibliography"], "user", array()), "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">view</a>
                </td>
                <td>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_edit", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

</section>
";
        
        $__internal_56d4a2bb73a67e58b194fc5f6dfff6b18b4c8e800f680de00607a3d469b7289b->leave($__internal_56d4a2bb73a67e58b194fc5f6dfff6b18b4c8e800f680de00607a3d469b7289b_prof);

        
        $__internal_16683b07cf49ad14bd9f8f310f2b80a56fdd6bd42c3b1c647a547e4ef72d90aa->leave($__internal_16683b07cf49ad14bd9f8f310f2b80a56fdd6bd42c3b1c647a547e4ef72d90aa_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  106 => 31,  100 => 28,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  77 => 22,  74 => 21,  70 => 20,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Bibliographies &nbsp;&nbsp;<a href=\"{{ path('bibliography_new') }}\">+ Create a new bibliography</a></h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Bibliography Name</th>
                <th>Text Summary</th>
                <th>Status</th>
                <th>User</th>
                <th>View</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        {% for bibliography in bibliographies %}
            <tr>
                <td><a href=\"{{ path('bibliography_show', { 'id': bibliography.id }) }}\">{{ bibliography.id }}</a></td>
                <td>{{ bibliography.bibliographyName }}</td>
                <td>{{ bibliography.textSummary }}</td>
                <td>{{ bibliography.status }}</td>
                <td>{{ bibliography.user.email }}</td>
                <td>
                    <a href=\"{{ path('bibliography_show', { 'id': bibliography.id }) }}\">view</a>
                </td>
                <td>
                    <a href=\"{{ path('bibliography_edit', { 'id': bibliography.id }) }}\">edit</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</section>
{% endblock %}
", "bibliography/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\index.html.twig");
    }
}
