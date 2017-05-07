<?php

/* reference/index.html.twig */
class __TwigTemplate_c053f55500c7d56ca992f4fe9279387c29c33947b05b16988baf39baf5b9b20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reference/index.html.twig", 1);
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
        $__internal_7df30d8a7e5f0ed4859f001fefef5b1f963ed64e3a362c20fdcf5cf118ab723f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df30d8a7e5f0ed4859f001fefef5b1f963ed64e3a362c20fdcf5cf118ab723f->enter($__internal_7df30d8a7e5f0ed4859f001fefef5b1f963ed64e3a362c20fdcf5cf118ab723f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/index.html.twig"));

        $__internal_576daa9495ef4bd29a98e2f517000dc3d3a112c78aa0a3b6cf703d7a1a3ed272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576daa9495ef4bd29a98e2f517000dc3d3a112c78aa0a3b6cf703d7a1a3ed272->enter($__internal_576daa9495ef4bd29a98e2f517000dc3d3a112c78aa0a3b6cf703d7a1a3ed272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df30d8a7e5f0ed4859f001fefef5b1f963ed64e3a362c20fdcf5cf118ab723f->leave($__internal_7df30d8a7e5f0ed4859f001fefef5b1f963ed64e3a362c20fdcf5cf118ab723f_prof);

        
        $__internal_576daa9495ef4bd29a98e2f517000dc3d3a112c78aa0a3b6cf703d7a1a3ed272->leave($__internal_576daa9495ef4bd29a98e2f517000dc3d3a112c78aa0a3b6cf703d7a1a3ed272_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06a924365a00ded8ac04c4fe2a888df67277151fada36ad194563a867a81311d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a924365a00ded8ac04c4fe2a888df67277151fada36ad194563a867a81311d->enter($__internal_06a924365a00ded8ac04c4fe2a888df67277151fada36ad194563a867a81311d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db0bd593716cfc722bd8e5bc220195890632446719c3b821c7e27d05e562f89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0bd593716cfc722bd8e5bc220195890632446719c3b821c7e27d05e562f89c->enter($__internal_db0bd593716cfc722bd8e5bc220195890632446719c3b821c7e27d05e562f89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>References &nbsp;";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            echo "&nbsp;<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_new");
            echo "\">+ Create a new reference</a>";
        }
        echo "</h2>
     <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name of Author</th>
                <th>Year Published</th>
                <th>Title of Reference</th>
                <th>City Published</th>
                <th>Publisher</th>
                <th>Pages Used</th>
                <th>Text Summary</th>
                <th>User</th>
                <th>Status</th>
                <th>View</th>
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 21
            echo "                <th>Update</th>
                ";
        }
        // line 23
        echo "                <th>Add to Bib Basket</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["references"] ?? $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "nameOfAuthor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "yearPublished", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "titleOfReference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "cityPublished", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "publisher", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "pagesUsed", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "textSummary", array()), "html", null, true);
            echo "</td>
                <td> <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => $this->getAttribute($this->getAttribute(            // line 38
$context["reference"], "user", array()), "id", array()))), "html", null, true);
            // line 39
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reference"], "user", array()), "email", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "status", array()), "html", null, true);
            echo "</td>

                ";
            // line 42
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                echo "&nbsp;
                    <td>
                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
                echo "\">view</a>
                    </td>
                ";
            } else {
                // line 47
                echo "                    <td>
                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show2", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
                echo "\">view</a>
                    </td>
                ";
            }
            // line 51
            echo "
                ";
            // line 52
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 53
                echo "                <td>
                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_edit", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                </td>
                ";
            }
            // line 57
            echo "                <td>
                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_add", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">add to bib basket</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_db0bd593716cfc722bd8e5bc220195890632446719c3b821c7e27d05e562f89c->leave($__internal_db0bd593716cfc722bd8e5bc220195890632446719c3b821c7e27d05e562f89c_prof);

        
        $__internal_06a924365a00ded8ac04c4fe2a888df67277151fada36ad194563a867a81311d->leave($__internal_06a924365a00ded8ac04c4fe2a888df67277151fada36ad194563a867a81311d_prof);

    }

    public function getTemplateName()
    {
        return "reference/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 62,  177 => 58,  174 => 57,  168 => 54,  165 => 53,  163 => 52,  160 => 51,  154 => 48,  151 => 47,  145 => 44,  140 => 42,  135 => 40,  130 => 39,  128 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  93 => 29,  90 => 28,  86 => 27,  80 => 23,  76 => 21,  74 => 20,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>References &nbsp;{% if (is_granted('ROLE_USER')) %}&nbsp;<a href=\"{{ path('reference_new') }}\">+ Create a new reference</a>{% endif %}</h2>
     <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name of Author</th>
                <th>Year Published</th>
                <th>Title of Reference</th>
                <th>City Published</th>
                <th>Publisher</th>
                <th>Pages Used</th>
                <th>Text Summary</th>
                <th>User</th>
                <th>Status</th>
                <th>View</th>
                {% if (is_granted('ROLE_USER')) %}
                <th>Update</th>
                {% endif %}
                <th>Add to Bib Basket</th>
            </tr>
        </thead>
        <tbody>
        {% for reference in references %}
            <tr>
                <td><a href=\"{{ path('reference_show', { 'id': reference.id }) }}\">{{ reference.id }}</a></td>
                <td>{{ reference.nameOfAuthor }}</td>
                <td>{{ reference.yearPublished }}</td>
                <td>{{ reference.titleOfReference }}</td>
                <td>{{ reference.cityPublished }}</td>
                <td>{{ reference.publisher }}</td>
                <td>{{ reference.pagesUsed }}</td>
                <td>{{ reference.textSummary }}</td>
                <td> <a href=\"{{ path('admin_edit', {
                        'id': reference.user.id
                    }) }}\">{{ reference.user.email }}</a></td>
                <td>{{ reference.status }}</td>

                {% if (is_granted('ROLE_USER')) %}&nbsp;
                    <td>
                        <a href=\"{{ path('reference_show', { 'id': reference.id }) }}\">view</a>
                    </td>
                {% else %}
                    <td>
                        <a href=\"{{ path('reference_show2', { 'id': reference.id }) }}\">view</a>
                    </td>
                {% endif %}

                {% if (is_granted('ROLE_USER')) %}
                <td>
                    <a href=\"{{ path('reference_edit', { 'id': reference.id }) }}\">edit</a>
                </td>
                {% endif %}
                <td>
                    <a href=\"{{ path('reference_basket_add', { 'id': reference.id }) }}\">add to bib basket</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</section>
{% endblock %}
", "reference/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\index.html.twig");
    }
}
