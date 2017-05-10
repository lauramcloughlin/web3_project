<?php

/* basket/index.html.twig */
class __TwigTemplate_2e00a6edcad4db4a0bec52204f27d2a10db322675670e09a6cae6e8a9bc8032f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "basket/index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d998fbb7381e1d050fb727d0e2c8742709af26f9a361e7e2a3a6f514d87d0eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d998fbb7381e1d050fb727d0e2c8742709af26f9a361e7e2a3a6f514d87d0eb2->enter($__internal_d998fbb7381e1d050fb727d0e2c8742709af26f9a361e7e2a3a6f514d87d0eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_43415019b3bcaeb59109559ffe6a176a183b605fd0ae6f713b2d5c0e4775e596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43415019b3bcaeb59109559ffe6a176a183b605fd0ae6f713b2d5c0e4775e596->enter($__internal_43415019b3bcaeb59109559ffe6a176a183b605fd0ae6f713b2d5c0e4775e596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d998fbb7381e1d050fb727d0e2c8742709af26f9a361e7e2a3a6f514d87d0eb2->leave($__internal_d998fbb7381e1d050fb727d0e2c8742709af26f9a361e7e2a3a6f514d87d0eb2_prof);

        
        $__internal_43415019b3bcaeb59109559ffe6a176a183b605fd0ae6f713b2d5c0e4775e596->leave($__internal_43415019b3bcaeb59109559ffe6a176a183b605fd0ae6f713b2d5c0e4775e596_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_5f8bc7f26404eb51a0efa6b5cae167694e5c161258dd189fe154d0d332c27cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8bc7f26404eb51a0efa6b5cae167694e5c161258dd189fe154d0d332c27cb0->enter($__internal_5f8bc7f26404eb51a0efa6b5cae167694e5c161258dd189fe154d0d332c27cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_56a3c8aa18850ea18d003984f854741c74fb002cf78a9ab7f0585ecc11ce98d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a3c8aa18850ea18d003984f854741c74fb002cf78a9ab7f0585ecc11ce98d6->enter($__internal_56a3c8aa18850ea18d003984f854741c74fb002cf78a9ab7f0585ecc11ce98d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " - Reference Basket";
        
        $__internal_56a3c8aa18850ea18d003984f854741c74fb002cf78a9ab7f0585ecc11ce98d6->leave($__internal_56a3c8aa18850ea18d003984f854741c74fb002cf78a9ab7f0585ecc11ce98d6_prof);

        
        $__internal_5f8bc7f26404eb51a0efa6b5cae167694e5c161258dd189fe154d0d332c27cb0->leave($__internal_5f8bc7f26404eb51a0efa6b5cae167694e5c161258dd189fe154d0d332c27cb0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d157dc8ae77ff2530570c3470fa64714ee0dc16598ba750a9c757f1815aca955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d157dc8ae77ff2530570c3470fa64714ee0dc16598ba750a9c757f1815aca955->enter($__internal_d157dc8ae77ff2530570c3470fa64714ee0dc16598ba750a9c757f1815aca955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5de0003727763c6e3281a341a2770d6ecc593a77abfeeda2aa83eb3ee5b6bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5de0003727763c6e3281a341a2770d6ecc593a77abfeeda2aa83eb3ee5b6bf1->enter($__internal_b5de0003727763c6e3281a341a2770d6ecc593a77abfeeda2aa83eb3ee5b6bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"main_content\">


     ";
        // line 9
        $context["basket_reference"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "basket"), "method");
        // line 10
        echo "


        <h3>Add to your Bibliography list</h3>

            ";
        // line 15
        if ((null === ($context["basket_reference"] ?? $this->getContext($context, "basket_reference")))) {
            // line 16
            echo "                <p>
                    You have no References in your basket
                </p>
                <p>
                    <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
            echo "\">Add References to your new Bibliography</a>
                </p>
            ";
        } else {
            // line 23
            echo "        <table>
            <tr>
                <th>Id</th>
                <th>Name of Author</th>
                <th>Year Published</th>
                <th>Title of Reference</th>
                <th>City Published</th>
                <th>Publisher</th>
                <th>Pages Used</th>
                <th>Text Summary</th>
                <th>Status</th>
                <th> </th>
            </tr>
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["basket_reference"] ?? $this->getContext($context, "basket_reference")));
            foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
                // line 37
                echo "                        <tr>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "nameOfAuthor", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "yearPublished", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "titleOfReference", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "cityPublished", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "publisher", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "pagesUsed", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "textSummary", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "status", array()), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_delete", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
                echo "\">Remove</a></td>
                         </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            <tr>
                <td colspan=\"5\">
            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Create Bibliography and add these references</a>
                </td>
                <td colspan=\"5\">
                    <a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Export to JSON</a>
                    <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Export to TEXT  File</a>
                </td>
            <tr>
        </table>
                </ul>
            ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (($context["basket_reference"] ?? $this->getContext($context, "basket_reference"))) {
            // line 64
            echo "            <p>
                <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_clear");
            echo "\">Clear all items in basket</a>
            </p>

    ";
        }
        // line 69
        echo "    </section>
";
        
        $__internal_b5de0003727763c6e3281a341a2770d6ecc593a77abfeeda2aa83eb3ee5b6bf1->leave($__internal_b5de0003727763c6e3281a341a2770d6ecc593a77abfeeda2aa83eb3ee5b6bf1_prof);

        
        $__internal_d157dc8ae77ff2530570c3470fa64714ee0dc16598ba750a9c757f1815aca955->leave($__internal_d157dc8ae77ff2530570c3470fa64714ee0dc16598ba750a9c757f1815aca955_prof);

    }

    public function getTemplateName()
    {
        return "basket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  194 => 65,  191 => 64,  189 => 63,  186 => 62,  177 => 56,  173 => 55,  167 => 52,  163 => 50,  154 => 47,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  115 => 37,  111 => 36,  96 => 23,  90 => 20,  84 => 16,  82 => 15,  75 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %} - Reference Basket{% endblock %}

{% block body %}
    <section class=\"main_content\">


     {% set basket_reference = app.session.get('basket') %}



        <h3>Add to your Bibliography list</h3>

            {% if basket_reference is null %}
                <p>
                    You have no References in your basket
                </p>
                <p>
                    <a href=\"{{ path('reference_index') }}\">Add References to your new Bibliography</a>
                </p>
            {% else %}
        <table>
            <tr>
                <th>Id</th>
                <th>Name of Author</th>
                <th>Year Published</th>
                <th>Title of Reference</th>
                <th>City Published</th>
                <th>Publisher</th>
                <th>Pages Used</th>
                <th>Text Summary</th>
                <th>Status</th>
                <th> </th>
            </tr>
                    {% for reference in basket_reference %}
                        <tr>
                            <td>{{ reference.id }}</td>
                            <td>{{ reference.nameOfAuthor }}</td>
                            <td>{{ reference.yearPublished }}</td>
                            <td>{{ reference.titleOfReference }}</td>
                            <td>{{ reference.cityPublished }}</td>
                            <td>{{ reference.publisher }}</td>
                            <td>{{ reference.pagesUsed }}</td>
                            <td>{{ reference.textSummary }}</td>
                            <td>{{ reference.status }}</td>
                            <td><a href=\"{{ path('reference_basket_delete', { 'id': reference.id }) }}\">Remove</a></td>
                         </tr>
                    {% endfor %}
            <tr>
                <td colspan=\"5\">
            <a href=\"{{ path('bibliography_new') }}\">Create Bibliography and add these references</a>
                </td>
                <td colspan=\"5\">
                    <a href=\"{{ path('bibliography_new') }}\">Export to JSON</a>
                    <a href=\"{{ path('bibliography_new') }}\">Export to TEXT  File</a>
                </td>
            <tr>
        </table>
                </ul>
            {% endif %}

    {% if (basket_reference) %}
            <p>
                <a href=\"{{ path('reference_basket_clear') }}\">Clear all items in basket</a>
            </p>

    {% endif %}
    </section>
{% endblock %}", "basket/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\basket\\index.html.twig");
    }
}
