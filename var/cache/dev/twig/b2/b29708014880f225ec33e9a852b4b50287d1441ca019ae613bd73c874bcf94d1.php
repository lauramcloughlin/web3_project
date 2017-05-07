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
        $__internal_7490b6df6364130d6cee18ff5ec0ffdd11d98d3d1a8e9ed02e2856dde42918b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7490b6df6364130d6cee18ff5ec0ffdd11d98d3d1a8e9ed02e2856dde42918b1->enter($__internal_7490b6df6364130d6cee18ff5ec0ffdd11d98d3d1a8e9ed02e2856dde42918b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_edb81ef17890a01ccbc55464875414a1d5fe8738c92daf5083c8d3d1b7aa0385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb81ef17890a01ccbc55464875414a1d5fe8738c92daf5083c8d3d1b7aa0385->enter($__internal_edb81ef17890a01ccbc55464875414a1d5fe8738c92daf5083c8d3d1b7aa0385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7490b6df6364130d6cee18ff5ec0ffdd11d98d3d1a8e9ed02e2856dde42918b1->leave($__internal_7490b6df6364130d6cee18ff5ec0ffdd11d98d3d1a8e9ed02e2856dde42918b1_prof);

        
        $__internal_edb81ef17890a01ccbc55464875414a1d5fe8738c92daf5083c8d3d1b7aa0385->leave($__internal_edb81ef17890a01ccbc55464875414a1d5fe8738c92daf5083c8d3d1b7aa0385_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_401c9f39093523ee588f9815991a0a2e251282fc1a0bd88e6f11e0ddfe7ca6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401c9f39093523ee588f9815991a0a2e251282fc1a0bd88e6f11e0ddfe7ca6af->enter($__internal_401c9f39093523ee588f9815991a0a2e251282fc1a0bd88e6f11e0ddfe7ca6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_65d4096b9a4dfa0351a8a6f168bd21deaf0bc665847a580202c2e204bf1eea54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d4096b9a4dfa0351a8a6f168bd21deaf0bc665847a580202c2e204bf1eea54->enter($__internal_65d4096b9a4dfa0351a8a6f168bd21deaf0bc665847a580202c2e204bf1eea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " - Reference Basket";
        
        $__internal_65d4096b9a4dfa0351a8a6f168bd21deaf0bc665847a580202c2e204bf1eea54->leave($__internal_65d4096b9a4dfa0351a8a6f168bd21deaf0bc665847a580202c2e204bf1eea54_prof);

        
        $__internal_401c9f39093523ee588f9815991a0a2e251282fc1a0bd88e6f11e0ddfe7ca6af->leave($__internal_401c9f39093523ee588f9815991a0a2e251282fc1a0bd88e6f11e0ddfe7ca6af_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09f926ddb8bda7d6ba0160e46d32583f3afd7a7be2b53b7722c97aaa44b9b052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f926ddb8bda7d6ba0160e46d32583f3afd7a7be2b53b7722c97aaa44b9b052->enter($__internal_09f926ddb8bda7d6ba0160e46d32583f3afd7a7be2b53b7722c97aaa44b9b052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85ad27e9260524d064424633e3e67a13de6e2ac3e94141b5bc8ea048671def90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ad27e9260524d064424633e3e67a13de6e2ac3e94141b5bc8ea048671def90->enter($__internal_85ad27e9260524d064424633e3e67a13de6e2ac3e94141b5bc8ea048671def90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"main_content\">


     ";
        // line 9
        $context["basket_reference"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "basket"), "method");
        // line 10
        echo "
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "basket"), "method"));
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
            </tr>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["basket_reference"] ?? $this->getContext($context, "basket_reference")));
            foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
                // line 36
                echo "                        <tr>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "nameOfAuthor", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "yearPublished", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "titleOfReference", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "cityPublished", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "publisher", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "pagesUsed", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "textSummary", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "status", array()), "html", null, true);
                echo "</td>
                         </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            <tr>
                <td colspan=\"5\">
            <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Create Bibliography and add these references</a>
                </td>
                <td colspan=\"5\">
                    <a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Export to JSON</a>
                    <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Export to TEXT  File</a>
                </td>
            <tr>
        </table>
                </ul>
            ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (($context["basket_reference"] ?? $this->getContext($context, "basket_reference"))) {
            // line 62
            echo "            <p>
                <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_clear");
            echo "\">Clear all items in basket</a>
            </p>

    ";
        }
        // line 67
        echo "    </section>
";
        
        $__internal_85ad27e9260524d064424633e3e67a13de6e2ac3e94141b5bc8ea048671def90->leave($__internal_85ad27e9260524d064424633e3e67a13de6e2ac3e94141b5bc8ea048671def90_prof);

        
        $__internal_09f926ddb8bda7d6ba0160e46d32583f3afd7a7be2b53b7722c97aaa44b9b052->leave($__internal_09f926ddb8bda7d6ba0160e46d32583f3afd7a7be2b53b7722c97aaa44b9b052_prof);

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
        return array (  199 => 67,  192 => 63,  189 => 62,  187 => 61,  184 => 60,  175 => 54,  171 => 53,  165 => 50,  161 => 48,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  117 => 36,  113 => 35,  99 => 23,  93 => 20,  87 => 16,  85 => 15,  78 => 11,  75 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

            {{ dump(app.session.get('basket')) }}

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
