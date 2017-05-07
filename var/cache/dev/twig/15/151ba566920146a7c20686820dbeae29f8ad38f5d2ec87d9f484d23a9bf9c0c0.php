<?php

/* bibliography/user.html.twig */
class __TwigTemplate_a4dc2ff4132ae9a28d50a2d6055faf3da15f7f16199d2d21f65a891e366b468b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/user.html.twig", 1);
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
        $__internal_fc456a4a58637bd9b9aae33777c824e47770884cadedfdb9584df9ef8b1aaa48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc456a4a58637bd9b9aae33777c824e47770884cadedfdb9584df9ef8b1aaa48->enter($__internal_fc456a4a58637bd9b9aae33777c824e47770884cadedfdb9584df9ef8b1aaa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/user.html.twig"));

        $__internal_a8ddfb579f2b56650a2c496e7c40bed4caae838e7f661409e905b2c5ff92bc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ddfb579f2b56650a2c496e7c40bed4caae838e7f661409e905b2c5ff92bc08->enter($__internal_a8ddfb579f2b56650a2c496e7c40bed4caae838e7f661409e905b2c5ff92bc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc456a4a58637bd9b9aae33777c824e47770884cadedfdb9584df9ef8b1aaa48->leave($__internal_fc456a4a58637bd9b9aae33777c824e47770884cadedfdb9584df9ef8b1aaa48_prof);

        
        $__internal_a8ddfb579f2b56650a2c496e7c40bed4caae838e7f661409e905b2c5ff92bc08->leave($__internal_a8ddfb579f2b56650a2c496e7c40bed4caae838e7f661409e905b2c5ff92bc08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_108fac5cad23b11418fd2e30e6300580e4925d48eea3dbfc1778709b4782955f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108fac5cad23b11418fd2e30e6300580e4925d48eea3dbfc1778709b4782955f->enter($__internal_108fac5cad23b11418fd2e30e6300580e4925d48eea3dbfc1778709b4782955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_485a6f4a25ae3a1dc3e1d62eb89398f6e71530a28aeb05f03dc9a01b23eb356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485a6f4a25ae3a1dc3e1d62eb89398f6e71530a28aeb05f03dc9a01b23eb356e->enter($__internal_485a6f4a25ae3a1dc3e1d62eb89398f6e71530a28aeb05f03dc9a01b23eb356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_485a6f4a25ae3a1dc3e1d62eb89398f6e71530a28aeb05f03dc9a01b23eb356e->leave($__internal_485a6f4a25ae3a1dc3e1d62eb89398f6e71530a28aeb05f03dc9a01b23eb356e_prof);

        
        $__internal_108fac5cad23b11418fd2e30e6300580e4925d48eea3dbfc1778709b4782955f->leave($__internal_108fac5cad23b11418fd2e30e6300580e4925d48eea3dbfc1778709b4782955f_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/user.html.twig";
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
", "bibliography/user.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\user.html.twig");
    }
}
