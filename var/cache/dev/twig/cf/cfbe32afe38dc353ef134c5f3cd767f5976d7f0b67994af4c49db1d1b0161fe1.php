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
        $__internal_22d8467cc2768b79bf30098020ee4e423ffa51444c16c04ea0edf99cea3df689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d8467cc2768b79bf30098020ee4e423ffa51444c16c04ea0edf99cea3df689->enter($__internal_22d8467cc2768b79bf30098020ee4e423ffa51444c16c04ea0edf99cea3df689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/index.html.twig"));

        $__internal_388fb4a292488400147913e5b4672fe87a82e15325d95b6184d2075cd3fd8075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388fb4a292488400147913e5b4672fe87a82e15325d95b6184d2075cd3fd8075->enter($__internal_388fb4a292488400147913e5b4672fe87a82e15325d95b6184d2075cd3fd8075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d8467cc2768b79bf30098020ee4e423ffa51444c16c04ea0edf99cea3df689->leave($__internal_22d8467cc2768b79bf30098020ee4e423ffa51444c16c04ea0edf99cea3df689_prof);

        
        $__internal_388fb4a292488400147913e5b4672fe87a82e15325d95b6184d2075cd3fd8075->leave($__internal_388fb4a292488400147913e5b4672fe87a82e15325d95b6184d2075cd3fd8075_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be13cc6daab24411b067cafa250d9898ebb1038f1e002a23e403a4d9f1801e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be13cc6daab24411b067cafa250d9898ebb1038f1e002a23e403a4d9f1801e7e->enter($__internal_be13cc6daab24411b067cafa250d9898ebb1038f1e002a23e403a4d9f1801e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57db4f8308c874aa51f501b08bb46e55e6248f4f63e15d5114047539a76a1f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57db4f8308c874aa51f501b08bb46e55e6248f4f63e15d5114047539a76a1f2a->enter($__internal_57db4f8308c874aa51f501b08bb46e55e6248f4f63e15d5114047539a76a1f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">view</a>
                </td>
                ";
            // line 44
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 45
                echo "                <td>
                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_edit", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                </td>
                ";
            }
            // line 49
            echo "                <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_add", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">add to bib basket</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_57db4f8308c874aa51f501b08bb46e55e6248f4f63e15d5114047539a76a1f2a->leave($__internal_57db4f8308c874aa51f501b08bb46e55e6248f4f63e15d5114047539a76a1f2a_prof);

        
        $__internal_be13cc6daab24411b067cafa250d9898ebb1038f1e002a23e403a4d9f1801e7e->leave($__internal_be13cc6daab24411b067cafa250d9898ebb1038f1e002a23e403a4d9f1801e7e_prof);

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
        return array (  169 => 54,  159 => 50,  156 => 49,  150 => 46,  147 => 45,  145 => 44,  140 => 42,  135 => 40,  130 => 39,  128 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  93 => 29,  90 => 28,  86 => 27,  80 => 23,  76 => 21,  74 => 20,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>
                    <a href=\"{{ path('reference_show', { 'id': reference.id }) }}\">view</a>
                </td>
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
