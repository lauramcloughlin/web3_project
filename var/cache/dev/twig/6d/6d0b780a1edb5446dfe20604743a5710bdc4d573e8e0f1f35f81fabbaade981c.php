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
        $__internal_cc3717708e00a7490a08115eecd6702800cd49cefd65f4126d8abb419a62578c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3717708e00a7490a08115eecd6702800cd49cefd65f4126d8abb419a62578c->enter($__internal_cc3717708e00a7490a08115eecd6702800cd49cefd65f4126d8abb419a62578c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_e5fb53c81bc6fed914c0334376ec0a6c008dea76ab0215c5dfeecf58dad4bc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fb53c81bc6fed914c0334376ec0a6c008dea76ab0215c5dfeecf58dad4bc4e->enter($__internal_e5fb53c81bc6fed914c0334376ec0a6c008dea76ab0215c5dfeecf58dad4bc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3717708e00a7490a08115eecd6702800cd49cefd65f4126d8abb419a62578c->leave($__internal_cc3717708e00a7490a08115eecd6702800cd49cefd65f4126d8abb419a62578c_prof);

        
        $__internal_e5fb53c81bc6fed914c0334376ec0a6c008dea76ab0215c5dfeecf58dad4bc4e->leave($__internal_e5fb53c81bc6fed914c0334376ec0a6c008dea76ab0215c5dfeecf58dad4bc4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64c7f4ab49ad73c23b4388cad97b9b759e64f1bb1c209ab92b5171ea8e670803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c7f4ab49ad73c23b4388cad97b9b759e64f1bb1c209ab92b5171ea8e670803->enter($__internal_64c7f4ab49ad73c23b4388cad97b9b759e64f1bb1c209ab92b5171ea8e670803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e033f2241e0553a226520517963ab30b320d58d2db400cb73e47e062d01271c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e033f2241e0553a226520517963ab30b320d58d2db400cb73e47e062d01271c->enter($__internal_1e033f2241e0553a226520517963ab30b320d58d2db400cb73e47e062d01271c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Public Tags &nbsp;";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            echo "&nbsp;
        &nbsp;<a href=\"";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
            echo "\"> + Create a new tag</a>
        ";
        }
        // line 8
        echo "    </h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 18
            echo "                <th>View</th>
                <th>Update</th>
                ";
        }
        // line 21
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "noOfVotes", array()), "html", null, true);
            echo "</td>
                ";
            // line 30
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 31
                echo "                <td>
                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">view</a>
                </td>

                <td>
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                </td>
                ";
            }
            // line 39
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

</section>
";
        
        $__internal_1e033f2241e0553a226520517963ab30b320d58d2db400cb73e47e062d01271c->leave($__internal_1e033f2241e0553a226520517963ab30b320d58d2db400cb73e47e062d01271c_prof);

        
        $__internal_64c7f4ab49ad73c23b4388cad97b9b759e64f1bb1c209ab92b5171ea8e670803->leave($__internal_64c7f4ab49ad73c23b4388cad97b9b759e64f1bb1c209ab92b5171ea8e670803_prof);

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
        return array (  134 => 41,  127 => 39,  121 => 36,  114 => 32,  111 => 31,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  91 => 26,  88 => 25,  84 => 24,  79 => 21,  74 => 18,  72 => 17,  61 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Public Tags &nbsp;{% if (is_granted('ROLE_USER')) %}&nbsp;
        &nbsp;<a href=\"{{ path('tag_new') }}\"> + Create a new tag</a>
        {% endif %}
    </h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
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
", "tag/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\index.html.twig");
    }
}
