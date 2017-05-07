<?php

/* tag/proposed.html.twig */
class __TwigTemplate_31bb112350012e838544d7380a9f2d499e150a771be803e49344ffe4d9a5c7ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/proposed.html.twig", 1);
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
        $__internal_e2dd7ebf4bfc03b765d5a47626591ad237af8c22c68036a49a382d664bec0a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dd7ebf4bfc03b765d5a47626591ad237af8c22c68036a49a382d664bec0a51->enter($__internal_e2dd7ebf4bfc03b765d5a47626591ad237af8c22c68036a49a382d664bec0a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/proposed.html.twig"));

        $__internal_1a1ade5e1880a3a262183ac20c62f40c50086f9f2cefdc74b199d0d6ac8821e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1ade5e1880a3a262183ac20c62f40c50086f9f2cefdc74b199d0d6ac8821e5->enter($__internal_1a1ade5e1880a3a262183ac20c62f40c50086f9f2cefdc74b199d0d6ac8821e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/proposed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2dd7ebf4bfc03b765d5a47626591ad237af8c22c68036a49a382d664bec0a51->leave($__internal_e2dd7ebf4bfc03b765d5a47626591ad237af8c22c68036a49a382d664bec0a51_prof);

        
        $__internal_1a1ade5e1880a3a262183ac20c62f40c50086f9f2cefdc74b199d0d6ac8821e5->leave($__internal_1a1ade5e1880a3a262183ac20c62f40c50086f9f2cefdc74b199d0d6ac8821e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35381fa231110efd520a12c50c0a541db1fe53ba7c09abeb279bcc9c37c10b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35381fa231110efd520a12c50c0a541db1fe53ba7c09abeb279bcc9c37c10b02->enter($__internal_35381fa231110efd520a12c50c0a541db1fe53ba7c09abeb279bcc9c37c10b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9f634cb06a17be269a2be14123550ba3b8a02e341f0269deea92b0f68fe912a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f634cb06a17be269a2be14123550ba3b8a02e341f0269deea92b0f68fe912a->enter($__internal_d9f634cb06a17be269a2be14123550ba3b8a02e341f0269deea92b0f68fe912a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Public Tags &nbsp;&nbsp;
        ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            echo "&nbsp;
        &nbsp;<a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
            echo "\"> + Create a new tag</a>
    ";
        } else {
            // line 9
            echo "        &nbsp;<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new_user");
            echo "\"> + Create a new tag</a>
        ";
        }
        // line 10
        echo "</h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
                <th>
                </th>
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 22
            echo "                <th>View</th>
                <th>Update</th>
                ";
        }
        // line 25
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 29
            echo "            <tr>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "noOfVotes", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_vote", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\"><< VOTE >></a>
                </td>
                ";
            // line 37
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 38
                echo "                <td>
                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">view</a>
                </td>

                <td>
                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                </td>
                ";
            }
            // line 46
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

</section>
";
        
        $__internal_d9f634cb06a17be269a2be14123550ba3b8a02e341f0269deea92b0f68fe912a->leave($__internal_d9f634cb06a17be269a2be14123550ba3b8a02e341f0269deea92b0f68fe912a_prof);

        
        $__internal_35381fa231110efd520a12c50c0a541db1fe53ba7c09abeb279bcc9c37c10b02->leave($__internal_35381fa231110efd520a12c50c0a541db1fe53ba7c09abeb279bcc9c37c10b02_prof);

    }

    public function getTemplateName()
    {
        return "tag/proposed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  142 => 46,  136 => 43,  129 => 39,  126 => 38,  124 => 37,  119 => 35,  114 => 33,  110 => 32,  106 => 31,  100 => 30,  97 => 29,  93 => 28,  88 => 25,  83 => 22,  81 => 21,  68 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Public Tags &nbsp;&nbsp;
        {% if (is_granted('ROLE_USER')) %}&nbsp;
        &nbsp;<a href=\"{{ path('tag_new') }}\"> + Create a new tag</a>
    {% else %}
        &nbsp;<a href=\"{{ path('tag_new_user') }}\"> + Create a new tag</a>
        {% endif %}</h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
                <th>
                </th>
                {% if (is_granted('ROLE_USER')) %}
                <th>View</th>
                <th>Update</th>
                {% endif %}
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
                    <a href=\"{{ path('tag_vote', { 'id': tag.id }) }}\"><< VOTE >></a>
                </td>
                {% if (is_granted('ROLE_USER')) %}
                <td>
                    <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">view</a>
                </td>

                <td>
                    <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                </td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>

</section>
{% endblock %}
", "tag/proposed.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\proposed.html.twig");
    }
}
