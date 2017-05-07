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
        $__internal_69aaa94d7fa3b369c43d04a2f8803c6e4a643c96096ec52097115de75ba9b7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69aaa94d7fa3b369c43d04a2f8803c6e4a643c96096ec52097115de75ba9b7c2->enter($__internal_69aaa94d7fa3b369c43d04a2f8803c6e4a643c96096ec52097115de75ba9b7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_28a35047cae3c4637c684e11845c17a947153d7465f08781de96f876d5fdb492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a35047cae3c4637c684e11845c17a947153d7465f08781de96f876d5fdb492->enter($__internal_28a35047cae3c4637c684e11845c17a947153d7465f08781de96f876d5fdb492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69aaa94d7fa3b369c43d04a2f8803c6e4a643c96096ec52097115de75ba9b7c2->leave($__internal_69aaa94d7fa3b369c43d04a2f8803c6e4a643c96096ec52097115de75ba9b7c2_prof);

        
        $__internal_28a35047cae3c4637c684e11845c17a947153d7465f08781de96f876d5fdb492->leave($__internal_28a35047cae3c4637c684e11845c17a947153d7465f08781de96f876d5fdb492_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_853fd8c7576c196aa159d05cd98d4d12452c1d16a273db9c606e3719830fd91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853fd8c7576c196aa159d05cd98d4d12452c1d16a273db9c606e3719830fd91d->enter($__internal_853fd8c7576c196aa159d05cd98d4d12452c1d16a273db9c606e3719830fd91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81437efd5a8539eb31160e1d685aab1b624dedefcac560b9eac0c37ebf28cd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81437efd5a8539eb31160e1d685aab1b624dedefcac560b9eac0c37ebf28cd06->enter($__internal_81437efd5a8539eb31160e1d685aab1b624dedefcac560b9eac0c37ebf28cd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81437efd5a8539eb31160e1d685aab1b624dedefcac560b9eac0c37ebf28cd06->leave($__internal_81437efd5a8539eb31160e1d685aab1b624dedefcac560b9eac0c37ebf28cd06_prof);

        
        $__internal_853fd8c7576c196aa159d05cd98d4d12452c1d16a273db9c606e3719830fd91d->leave($__internal_853fd8c7576c196aa159d05cd98d4d12452c1d16a273db9c606e3719830fd91d_prof);

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
