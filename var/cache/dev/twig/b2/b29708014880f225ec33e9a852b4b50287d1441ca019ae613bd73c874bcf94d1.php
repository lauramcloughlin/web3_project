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
        $__internal_0119c48877068fb34c2a121f6970b4d39561cab3597e1fd519cd15d69050fc12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0119c48877068fb34c2a121f6970b4d39561cab3597e1fd519cd15d69050fc12->enter($__internal_0119c48877068fb34c2a121f6970b4d39561cab3597e1fd519cd15d69050fc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_46c7b0e6d02b6383bc00e9826398cdb33c149e248333714279f7b59bc7c4e8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c7b0e6d02b6383bc00e9826398cdb33c149e248333714279f7b59bc7c4e8fd->enter($__internal_46c7b0e6d02b6383bc00e9826398cdb33c149e248333714279f7b59bc7c4e8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0119c48877068fb34c2a121f6970b4d39561cab3597e1fd519cd15d69050fc12->leave($__internal_0119c48877068fb34c2a121f6970b4d39561cab3597e1fd519cd15d69050fc12_prof);

        
        $__internal_46c7b0e6d02b6383bc00e9826398cdb33c149e248333714279f7b59bc7c4e8fd->leave($__internal_46c7b0e6d02b6383bc00e9826398cdb33c149e248333714279f7b59bc7c4e8fd_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_67e8a4f9ad03085e76e16e3d7a8bf444b43b39354e4c5b721377d7dc3c92b6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e8a4f9ad03085e76e16e3d7a8bf444b43b39354e4c5b721377d7dc3c92b6c1->enter($__internal_67e8a4f9ad03085e76e16e3d7a8bf444b43b39354e4c5b721377d7dc3c92b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_aca14a82f945add5ca40c73c95efea8ab04888232b6be987db293ef7443a7981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca14a82f945add5ca40c73c95efea8ab04888232b6be987db293ef7443a7981->enter($__internal_aca14a82f945add5ca40c73c95efea8ab04888232b6be987db293ef7443a7981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo " - Reference Basket";
        
        $__internal_aca14a82f945add5ca40c73c95efea8ab04888232b6be987db293ef7443a7981->leave($__internal_aca14a82f945add5ca40c73c95efea8ab04888232b6be987db293ef7443a7981_prof);

        
        $__internal_67e8a4f9ad03085e76e16e3d7a8bf444b43b39354e4c5b721377d7dc3c92b6c1->leave($__internal_67e8a4f9ad03085e76e16e3d7a8bf444b43b39354e4c5b721377d7dc3c92b6c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbbaf730d31c1d3e0ec53a6cafe4ed9fb185da9c14b3285384e3c12b21080f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbaf730d31c1d3e0ec53a6cafe4ed9fb185da9c14b3285384e3c12b21080f30->enter($__internal_dbbaf730d31c1d3e0ec53a6cafe4ed9fb185da9c14b3285384e3c12b21080f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77be09cf94344ce961fa60953bbc7208c9e18a14bd7ccfa1470c852c5cee40c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77be09cf94344ce961fa60953bbc7208c9e18a14bd7ccfa1470c852c5cee40c5->enter($__internal_77be09cf94344ce961fa60953bbc7208c9e18a14bd7ccfa1470c852c5cee40c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td colspan=\"10\">
            <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">Create Bibliography and add these references</a>
                </td>
            <tr>
        </table>
                </ul>
            ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (($context["basket_reference"] ?? $this->getContext($context, "basket_reference"))) {
            // line 58
            echo "            <p>
                <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_clear");
            echo "\">Clear all items in basket</a>
            </p>

    ";
        }
        // line 63
        echo "    </section>
";
        
        $__internal_77be09cf94344ce961fa60953bbc7208c9e18a14bd7ccfa1470c852c5cee40c5->leave($__internal_77be09cf94344ce961fa60953bbc7208c9e18a14bd7ccfa1470c852c5cee40c5_prof);

        
        $__internal_dbbaf730d31c1d3e0ec53a6cafe4ed9fb185da9c14b3285384e3c12b21080f30->leave($__internal_dbbaf730d31c1d3e0ec53a6cafe4ed9fb185da9c14b3285384e3c12b21080f30_prof);

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
        return array (  189 => 63,  182 => 59,  179 => 58,  177 => 57,  174 => 56,  165 => 50,  161 => 48,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  117 => 36,  113 => 35,  99 => 23,  93 => 20,  87 => 16,  85 => 15,  78 => 11,  75 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
