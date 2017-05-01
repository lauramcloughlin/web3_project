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
        $__internal_a194ae630a687282ec2749a56c1b13d71db6613720f5c9fc530b3d67c014e817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a194ae630a687282ec2749a56c1b13d71db6613720f5c9fc530b3d67c014e817->enter($__internal_a194ae630a687282ec2749a56c1b13d71db6613720f5c9fc530b3d67c014e817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $__internal_31a96be2cc7a81c2694c24458b56ff3ffd085a23560394149a66ee50ec58afad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a96be2cc7a81c2694c24458b56ff3ffd085a23560394149a66ee50ec58afad->enter($__internal_31a96be2cc7a81c2694c24458b56ff3ffd085a23560394149a66ee50ec58afad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a194ae630a687282ec2749a56c1b13d71db6613720f5c9fc530b3d67c014e817->leave($__internal_a194ae630a687282ec2749a56c1b13d71db6613720f5c9fc530b3d67c014e817_prof);

        
        $__internal_31a96be2cc7a81c2694c24458b56ff3ffd085a23560394149a66ee50ec58afad->leave($__internal_31a96be2cc7a81c2694c24458b56ff3ffd085a23560394149a66ee50ec58afad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be1321c177fbaaa1e1f1f80b9795ebb968b93533ca93a9b1d2e7e7ffd68b6bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1321c177fbaaa1e1f1f80b9795ebb968b93533ca93a9b1d2e7e7ffd68b6bc3->enter($__internal_be1321c177fbaaa1e1f1f80b9795ebb968b93533ca93a9b1d2e7e7ffd68b6bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_366bfc170ab70cdd7a8a89f52e9e1d009a5e27026061da0de05ec0e1e9570ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366bfc170ab70cdd7a8a89f52e9e1d009a5e27026061da0de05ec0e1e9570ba2->enter($__internal_366bfc170ab70cdd7a8a89f52e9e1d009a5e27026061da0de05ec0e1e9570ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "userId", array()), "html", null, true);
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
        
        $__internal_366bfc170ab70cdd7a8a89f52e9e1d009a5e27026061da0de05ec0e1e9570ba2->leave($__internal_366bfc170ab70cdd7a8a89f52e9e1d009a5e27026061da0de05ec0e1e9570ba2_prof);

        
        $__internal_be1321c177fbaaa1e1f1f80b9795ebb968b93533ca93a9b1d2e7e7ffd68b6bc3->leave($__internal_be1321c177fbaaa1e1f1f80b9795ebb968b93533ca93a9b1d2e7e7ffd68b6bc3_prof);

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
                <td>{{ bibliography.userId }}</td>
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
