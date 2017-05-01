<?php

/* tag/index.html.twig */
class __TwigTemplate_e9f2e379a72f68cf187e9ae8d67bc37ca2cecd87b95761a85d91507a9123c469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
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
        $__internal_e901e0850fbcff3abf8253578abf663dbd0cb27e13d70c5ecb7742143b42708c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e901e0850fbcff3abf8253578abf663dbd0cb27e13d70c5ecb7742143b42708c->enter($__internal_e901e0850fbcff3abf8253578abf663dbd0cb27e13d70c5ecb7742143b42708c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_6feb45dc8e942d06394d83ae5296061ad32145ab4a1fba8713c0bb6756e69051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6feb45dc8e942d06394d83ae5296061ad32145ab4a1fba8713c0bb6756e69051->enter($__internal_6feb45dc8e942d06394d83ae5296061ad32145ab4a1fba8713c0bb6756e69051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e901e0850fbcff3abf8253578abf663dbd0cb27e13d70c5ecb7742143b42708c->leave($__internal_e901e0850fbcff3abf8253578abf663dbd0cb27e13d70c5ecb7742143b42708c_prof);

        
        $__internal_6feb45dc8e942d06394d83ae5296061ad32145ab4a1fba8713c0bb6756e69051->leave($__internal_6feb45dc8e942d06394d83ae5296061ad32145ab4a1fba8713c0bb6756e69051_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2aa0a3b92314b3de956fd2fbb18047cf996707b5ae2bc5992169d3e2bbc45441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa0a3b92314b3de956fd2fbb18047cf996707b5ae2bc5992169d3e2bbc45441->enter($__internal_2aa0a3b92314b3de956fd2fbb18047cf996707b5ae2bc5992169d3e2bbc45441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e77870d98d4aee8dd47ca34c26e580140bb7178b82867f8c4c90d1866c323aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77870d98d4aee8dd47ca34c26e580140bb7178b82867f8c4c90d1866c323aae->enter($__internal_e77870d98d4aee8dd47ca34c26e580140bb7178b82867f8c4c90d1866c323aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Tags &nbsp;&nbsp;<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">+ Create a new tag</a></h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
                <th>View</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "noOfVotes", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">view</a>
                </td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

</section>
";
        
        $__internal_e77870d98d4aee8dd47ca34c26e580140bb7178b82867f8c4c90d1866c323aae->leave($__internal_e77870d98d4aee8dd47ca34c26e580140bb7178b82867f8c4c90d1866c323aae_prof);

        
        $__internal_2aa0a3b92314b3de956fd2fbb18047cf996707b5ae2bc5992169d3e2bbc45441->leave($__internal_2aa0a3b92314b3de956fd2fbb18047cf996707b5ae2bc5992169d3e2bbc45441_prof);

    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  101 => 29,  95 => 26,  90 => 24,  86 => 23,  82 => 22,  76 => 21,  73 => 20,  69 => 19,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Tags &nbsp;&nbsp;<a href=\"{{ path('tag_new') }}\">+ Create a new tag</a></h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
                <th>View</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
        {% for tag in tags %}
            <tr>
                <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>
                <td>{{ tag.tagName }}</td>
                <td>{{ tag.status }}</td>
                <td>{{ tag.noOfVotes }}</td>
                <td>
                    <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">view</a>
                </td>
                <td>
                    <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</section>
{% endblock %}
", "tag/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
