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
        $__internal_468a76d7846f88dd0c671fe37ffe5bd30e43219a70a4da97dacde82b64b436de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468a76d7846f88dd0c671fe37ffe5bd30e43219a70a4da97dacde82b64b436de->enter($__internal_468a76d7846f88dd0c671fe37ffe5bd30e43219a70a4da97dacde82b64b436de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_81ebfcf850cc4f3a5df274a605a0cace21c27d6ff5cd714e18355489eb88c0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ebfcf850cc4f3a5df274a605a0cace21c27d6ff5cd714e18355489eb88c0da->enter($__internal_81ebfcf850cc4f3a5df274a605a0cace21c27d6ff5cd714e18355489eb88c0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468a76d7846f88dd0c671fe37ffe5bd30e43219a70a4da97dacde82b64b436de->leave($__internal_468a76d7846f88dd0c671fe37ffe5bd30e43219a70a4da97dacde82b64b436de_prof);

        
        $__internal_81ebfcf850cc4f3a5df274a605a0cace21c27d6ff5cd714e18355489eb88c0da->leave($__internal_81ebfcf850cc4f3a5df274a605a0cace21c27d6ff5cd714e18355489eb88c0da_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_1cb8849cf4eaa9cbabb253b4f9466a6d83c44ff8a2d137b43beb396d23a6b342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb8849cf4eaa9cbabb253b4f9466a6d83c44ff8a2d137b43beb396d23a6b342->enter($__internal_1cb8849cf4eaa9cbabb253b4f9466a6d83c44ff8a2d137b43beb396d23a6b342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_dcffb3fc67101c5eb79a512d859ab3f11df29893c7d4c47aa7424dd14ac260b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcffb3fc67101c5eb79a512d859ab3f11df29893c7d4c47aa7424dd14ac260b7->enter($__internal_dcffb3fc67101c5eb79a512d859ab3f11df29893c7d4c47aa7424dd14ac260b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " - Reference Basket";
        
        $__internal_dcffb3fc67101c5eb79a512d859ab3f11df29893c7d4c47aa7424dd14ac260b7->leave($__internal_dcffb3fc67101c5eb79a512d859ab3f11df29893c7d4c47aa7424dd14ac260b7_prof);

        
        $__internal_1cb8849cf4eaa9cbabb253b4f9466a6d83c44ff8a2d137b43beb396d23a6b342->leave($__internal_1cb8849cf4eaa9cbabb253b4f9466a6d83c44ff8a2d137b43beb396d23a6b342_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f532ac6f74badd02ce9188ab6a6fd00a3e4ac687a85f3fc9b5c1b23d604b96e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f532ac6f74badd02ce9188ab6a6fd00a3e4ac687a85f3fc9b5c1b23d604b96e2->enter($__internal_f532ac6f74badd02ce9188ab6a6fd00a3e4ac687a85f3fc9b5c1b23d604b96e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deebcd3907786170d95ab3af55a728b7ced98150bd4e80b755a4090439b1d2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deebcd3907786170d95ab3af55a728b7ced98150bd4e80b755a4090439b1d2db->enter($__internal_deebcd3907786170d95ab3af55a728b7ced98150bd4e80b755a4090439b1d2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th>User</th>
                <th>Status</th>
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
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "userId", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "status", array()), "html", null, true);
                echo "</td>
                         </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            <tr>
                <td colspan=\"10\">
            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Create Bibliography and add these references</a>
                </td>
            <tr>
        </table>
                </ul>
            ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (($context["basket_reference"] ?? $this->getContext($context, "basket_reference"))) {
            // line 60
            echo "            <p>
                <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_clear");
            echo "\">Clear all items in basket</a>
            </p>

    ";
        }
        // line 65
        echo "    </section>
";
        
        $__internal_deebcd3907786170d95ab3af55a728b7ced98150bd4e80b755a4090439b1d2db->leave($__internal_deebcd3907786170d95ab3af55a728b7ced98150bd4e80b755a4090439b1d2db_prof);

        
        $__internal_f532ac6f74badd02ce9188ab6a6fd00a3e4ac687a85f3fc9b5c1b23d604b96e2->leave($__internal_f532ac6f74badd02ce9188ab6a6fd00a3e4ac687a85f3fc9b5c1b23d604b96e2_prof);

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
        return array (  194 => 65,  187 => 61,  184 => 60,  182 => 59,  179 => 58,  170 => 52,  166 => 50,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  118 => 37,  114 => 36,  99 => 23,  93 => 20,  87 => 16,  85 => 15,  78 => 11,  75 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                <th>User</th>
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
                            <td>{{ reference.userId }}</td>
                            <td>{{ reference.status }}</td>
                         </tr>
                    {% endfor %}
            <tr>
                <td colspan=\"10\">
            <a href=\"{{ path('bibliography_new') }}\">Create Bibliography and add these references</a>
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
