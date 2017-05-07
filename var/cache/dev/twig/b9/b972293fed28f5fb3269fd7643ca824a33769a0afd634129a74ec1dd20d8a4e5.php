<?php

/* reference/user.html.twig */
class __TwigTemplate_b2bfa392a0ce877a342041712e2fd7674a684a8c707b1def0d284e6e161ce319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reference/user.html.twig", 1);
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
        $__internal_98275dcb017f44ffac9b47613df2237e91d064d8a13d99dde6d38b8d03f9f72d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98275dcb017f44ffac9b47613df2237e91d064d8a13d99dde6d38b8d03f9f72d->enter($__internal_98275dcb017f44ffac9b47613df2237e91d064d8a13d99dde6d38b8d03f9f72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/user.html.twig"));

        $__internal_cf7987a3e11b3780016d611feb026363693e0d2a24d46e58b73417ff94178765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7987a3e11b3780016d611feb026363693e0d2a24d46e58b73417ff94178765->enter($__internal_cf7987a3e11b3780016d611feb026363693e0d2a24d46e58b73417ff94178765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98275dcb017f44ffac9b47613df2237e91d064d8a13d99dde6d38b8d03f9f72d->leave($__internal_98275dcb017f44ffac9b47613df2237e91d064d8a13d99dde6d38b8d03f9f72d_prof);

        
        $__internal_cf7987a3e11b3780016d611feb026363693e0d2a24d46e58b73417ff94178765->leave($__internal_cf7987a3e11b3780016d611feb026363693e0d2a24d46e58b73417ff94178765_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_036b98c2ec5dda336a005a42d0a804093feaf0fa34da677677fcf73b2efbd4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036b98c2ec5dda336a005a42d0a804093feaf0fa34da677677fcf73b2efbd4ec->enter($__internal_036b98c2ec5dda336a005a42d0a804093feaf0fa34da677677fcf73b2efbd4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8647eeba2ebf648afcfc1333fa62b369afe51dec0d834ec5ebde00f7788630c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8647eeba2ebf648afcfc1333fa62b369afe51dec0d834ec5ebde00f7788630c3->enter($__internal_8647eeba2ebf648afcfc1333fa62b369afe51dec0d834ec5ebde00f7788630c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8647eeba2ebf648afcfc1333fa62b369afe51dec0d834ec5ebde00f7788630c3->leave($__internal_8647eeba2ebf648afcfc1333fa62b369afe51dec0d834ec5ebde00f7788630c3_prof);

        
        $__internal_036b98c2ec5dda336a005a42d0a804093feaf0fa34da677677fcf73b2efbd4ec->leave($__internal_036b98c2ec5dda336a005a42d0a804093feaf0fa34da677677fcf73b2efbd4ec_prof);

    }

    public function getTemplateName()
    {
        return "reference/user.html.twig";
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
", "reference/user.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\user.html.twig");
    }
}
