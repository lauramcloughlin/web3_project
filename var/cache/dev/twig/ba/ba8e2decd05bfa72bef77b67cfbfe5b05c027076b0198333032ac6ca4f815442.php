<?php

/* bibliography/show2.html.twig */
class __TwigTemplate_8cf93839fbf91881d61327f8123027288c02009bafccc9d60130f5511875ecd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/show2.html.twig", 1);
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
        $__internal_8deb594daa4e31c9f0bda34d49caec88a428b8290bc48e127328cb1e81a5bc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8deb594daa4e31c9f0bda34d49caec88a428b8290bc48e127328cb1e81a5bc1e->enter($__internal_8deb594daa4e31c9f0bda34d49caec88a428b8290bc48e127328cb1e81a5bc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/show2.html.twig"));

        $__internal_a6f95e76c4541bf98141010744340555b30f0aabb4dcbb31f667865d6ee4a76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f95e76c4541bf98141010744340555b30f0aabb4dcbb31f667865d6ee4a76f->enter($__internal_a6f95e76c4541bf98141010744340555b30f0aabb4dcbb31f667865d6ee4a76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/show2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8deb594daa4e31c9f0bda34d49caec88a428b8290bc48e127328cb1e81a5bc1e->leave($__internal_8deb594daa4e31c9f0bda34d49caec88a428b8290bc48e127328cb1e81a5bc1e_prof);

        
        $__internal_a6f95e76c4541bf98141010744340555b30f0aabb4dcbb31f667865d6ee4a76f->leave($__internal_a6f95e76c4541bf98141010744340555b30f0aabb4dcbb31f667865d6ee4a76f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f0395df909f6cd3709eddaf4aa59f1c32983e63dc3930714692a28bdeaafedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0395df909f6cd3709eddaf4aa59f1c32983e63dc3930714692a28bdeaafedb->enter($__internal_6f0395df909f6cd3709eddaf4aa59f1c32983e63dc3930714692a28bdeaafedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45c60d6777a6dca3aea985c95cd03c8987c6208942bbefdea17c0ad2e00fa7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c60d6777a6dca3aea985c95cd03c8987c6208942bbefdea17c0ad2e00fa7a5->enter($__internal_45c60d6777a6dca3aea985c95cd03c8987c6208942bbefdea17c0ad2e00fa7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Bibliography</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bibliography Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "bibliographyName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text Summary</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "textSummary", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>User</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
    </table>
    ";
        // line 29
        if ( !twig_test_empty($this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "bibliographyReferences", array()))) {
            // line 30
            echo "    <h3>References in the ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "bibliographyName", array()), "html", null, true);
            echo " Bibliography</h3>
    <table>
        <tr>
            <td>";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "bibliographyReferences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bibliographyReference"]) {
                // line 34
                echo "                    <li>
                            ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["bibliographyReference"], "nameOfAuthor", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bibliographyReference"], "titleOfReference", array()), "html", null, true);
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliographyReference'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "</td>
        </tr>
    </table>
    ";
        }
        // line 41
        echo "    <br>
    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 46
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 47
            echo "        <li>
            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_edit", array("id" => $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
        </li>
        ";
        }
        // line 51
        echo "    </ul>
    <br>
</section>
";
        
        $__internal_45c60d6777a6dca3aea985c95cd03c8987c6208942bbefdea17c0ad2e00fa7a5->leave($__internal_45c60d6777a6dca3aea985c95cd03c8987c6208942bbefdea17c0ad2e00fa7a5_prof);

        
        $__internal_6f0395df909f6cd3709eddaf4aa59f1c32983e63dc3930714692a28bdeaafedb->leave($__internal_6f0395df909f6cd3709eddaf4aa59f1c32983e63dc3930714692a28bdeaafedb_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  139 => 48,  136 => 47,  134 => 46,  129 => 44,  124 => 41,  118 => 37,  107 => 35,  104 => 34,  100 => 33,  93 => 30,  91 => 29,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Bibliography</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>{{ bibliography.id }}</td>
            </tr>
            <tr>
                <th>Bibliography Name</th>
                <td>{{ bibliography.bibliographyName }}</td>
            </tr>
            <tr>
                <th>Text Summary</th>
                <td>{{ bibliography.textSummary }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ bibliography.status }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ bibliography.user.email }}</td>
            </tr>
    </table>
    {% if (bibliography.bibliographyReferences) is not empty %}
    <h3>References in the {{ bibliography.bibliographyName }} Bibliography</h3>
    <table>
        <tr>
            <td>{% for bibliographyReference in bibliography.bibliographyReferences %}
                    <li>
                            {{ bibliographyReference.nameOfAuthor }}, {{ bibliographyReference.titleOfReference }}
                    </li>
                {% endfor %}</td>
        </tr>
    </table>
    {% endif %}
    <br>
    <ul>
        <li>
            <a href=\"{{ path('bibliography_index') }}\">Back to the list</a>
        </li>
        {% if (is_granted('ROLE_USER')) %}
        <li>
            <a href=\"{{ path('bibliography_edit', { 'id': bibliography.id }) }}\">Edit</a>
        </li>
        {% endif %}
    </ul>
    <br>
</section>
{% endblock %}
", "bibliography/show2.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\show2.html.twig");
    }
}
