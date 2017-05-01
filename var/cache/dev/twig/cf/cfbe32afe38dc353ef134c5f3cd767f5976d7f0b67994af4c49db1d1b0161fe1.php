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
        $__internal_c3f9952925f3ae228cde1ec9f00989e5c2bac27f9ace3235f60dff89d99647c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f9952925f3ae228cde1ec9f00989e5c2bac27f9ace3235f60dff89d99647c2->enter($__internal_c3f9952925f3ae228cde1ec9f00989e5c2bac27f9ace3235f60dff89d99647c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/index.html.twig"));

        $__internal_22129f31f3e75ddd4ea696bd6199996eb6608af08874ef40232e7caffaa9c97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22129f31f3e75ddd4ea696bd6199996eb6608af08874ef40232e7caffaa9c97a->enter($__internal_22129f31f3e75ddd4ea696bd6199996eb6608af08874ef40232e7caffaa9c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f9952925f3ae228cde1ec9f00989e5c2bac27f9ace3235f60dff89d99647c2->leave($__internal_c3f9952925f3ae228cde1ec9f00989e5c2bac27f9ace3235f60dff89d99647c2_prof);

        
        $__internal_22129f31f3e75ddd4ea696bd6199996eb6608af08874ef40232e7caffaa9c97a->leave($__internal_22129f31f3e75ddd4ea696bd6199996eb6608af08874ef40232e7caffaa9c97a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_563016c0b9565965b4f6016b86f650939dcc38b4c2ebdba5276f2f25e436ab4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563016c0b9565965b4f6016b86f650939dcc38b4c2ebdba5276f2f25e436ab4d->enter($__internal_563016c0b9565965b4f6016b86f650939dcc38b4c2ebdba5276f2f25e436ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_412c10c9e419b9964a52bb9ab11e22a55ec2feadf1799cd13a8a4f04315bbe48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412c10c9e419b9964a52bb9ab11e22a55ec2feadf1799cd13a8a4f04315bbe48->enter($__internal_412c10c9e419b9964a52bb9ab11e22a55ec2feadf1799cd13a8a4f04315bbe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>References &nbsp;&nbsp;<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_new");
        echo "\">+ Create a new reference</a></h2>
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
                <th>Update</th>
                <th>Add to Bib Basket</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["references"] ?? $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "nameOfAuthor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "yearPublished", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "titleOfReference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "cityPublished", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "publisher", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "pagesUsed", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "textSummary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "userId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "status", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">view</a>
                </td>
                <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_edit", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </td>

                <td>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_add", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\">add to bib basket</a>
                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_412c10c9e419b9964a52bb9ab11e22a55ec2feadf1799cd13a8a4f04315bbe48->leave($__internal_412c10c9e419b9964a52bb9ab11e22a55ec2feadf1799cd13a8a4f04315bbe48_prof);

        
        $__internal_563016c0b9565965b4f6016b86f650939dcc38b4c2ebdba5276f2f25e436ab4d->leave($__internal_563016c0b9565965b4f6016b86f650939dcc38b4c2ebdba5276f2f25e436ab4d_prof);

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
        return array (  149 => 50,  138 => 45,  131 => 41,  125 => 38,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  82 => 27,  79 => 26,  75 => 25,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>References &nbsp;&nbsp;<a href=\"{{ path('reference_new') }}\">+ Create a new reference</a></h2>
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
                <th>Update</th>
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
                <td>{{ reference.userId }}</td>
                <td>{{ reference.status }}</td>
                <td>
                    <a href=\"{{ path('reference_show', { 'id': reference.id }) }}\">view</a>
                </td>
                <td>
                    <a href=\"{{ path('reference_edit', { 'id': reference.id }) }}\">edit</a>
                </td>

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
