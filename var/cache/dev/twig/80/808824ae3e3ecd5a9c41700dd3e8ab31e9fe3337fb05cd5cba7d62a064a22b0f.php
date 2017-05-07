<?php

/* reference/show.html.twig */
class __TwigTemplate_b9e8a63d7f7e808888d4c44069ee3a65f22f2a24b029028060379e3014a7fb44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reference/show.html.twig", 1);
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
        $__internal_7a7ce0900bd03361f2e381b1c7593d660aea03712815fb9c7d00b6ef140f255b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7ce0900bd03361f2e381b1c7593d660aea03712815fb9c7d00b6ef140f255b->enter($__internal_7a7ce0900bd03361f2e381b1c7593d660aea03712815fb9c7d00b6ef140f255b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/show.html.twig"));

        $__internal_d6da9acf406467b0c6d411c3c14b7367430cdd70eec0bcf7291129aa604f0dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6da9acf406467b0c6d411c3c14b7367430cdd70eec0bcf7291129aa604f0dc3->enter($__internal_d6da9acf406467b0c6d411c3c14b7367430cdd70eec0bcf7291129aa604f0dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a7ce0900bd03361f2e381b1c7593d660aea03712815fb9c7d00b6ef140f255b->leave($__internal_7a7ce0900bd03361f2e381b1c7593d660aea03712815fb9c7d00b6ef140f255b_prof);

        
        $__internal_d6da9acf406467b0c6d411c3c14b7367430cdd70eec0bcf7291129aa604f0dc3->leave($__internal_d6da9acf406467b0c6d411c3c14b7367430cdd70eec0bcf7291129aa604f0dc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_926da3c55435430fdf6cf998cf7feadaff3a6d74d9ece0963e9d96f987a78251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926da3c55435430fdf6cf998cf7feadaff3a6d74d9ece0963e9d96f987a78251->enter($__internal_926da3c55435430fdf6cf998cf7feadaff3a6d74d9ece0963e9d96f987a78251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_361d51daf935d221197b5730238aac1101c2a033a1cbd97df7ef91bc535aba72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361d51daf935d221197b5730238aac1101c2a033a1cbd97df7ef91bc535aba72->enter($__internal_361d51daf935d221197b5730238aac1101c2a033a1cbd97df7ef91bc535aba72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Reference</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name of Author</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "nameOfAuthor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Year Published</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "yearPublished", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title of Reference</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "titleOfReference", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City Published</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "cityPublished", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "publisher", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pages Used</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "pagesUsed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text Summary</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "textSummary", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Status</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reference added by</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "user", array()), "email", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Date Created</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "dateCreated", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date Last Edited</th>
                <td> ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "dateLastEdited", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
        <tr>
            <th>Bibliographies</th>
            <td> <ul>
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "referenceBibliographies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["referenceBibliography"]) {
            // line 61
            echo "                        <li>
                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show", array("id" => $this->getAttribute(            // line 63
$context["referenceBibliography"], "id", array()))), "html", null, true);
            // line 64
            echo "\">
                                ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["referenceBibliography"], "bibliographyName", array()), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referenceBibliography'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </ul></td>
        </tr>
            <tr>
                <th>Tags</th>
                <td> <ul>
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "referenceTags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["referenceTag"]) {
            // line 75
            echo "                            <li>
                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute(            // line 77
$context["referenceTag"], "id", array()))), "html", null, true);
            // line 78
            echo "\">
                                    ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["referenceTag"], "tagName", array()), "html", null, true);
            echo "
                                </a>
                              </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referenceTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </ul></td>
            </tr>



    </table>

    <ul>
        <li>
            <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_edit", array("id" => $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</section>
";
        
        $__internal_361d51daf935d221197b5730238aac1101c2a033a1cbd97df7ef91bc535aba72->leave($__internal_361d51daf935d221197b5730238aac1101c2a033a1cbd97df7ef91bc535aba72_prof);

        
        $__internal_926da3c55435430fdf6cf998cf7feadaff3a6d74d9ece0963e9d96f987a78251->leave($__internal_926da3c55435430fdf6cf998cf7feadaff3a6d74d9ece0963e9d96f987a78251_prof);

    }

    public function getTemplateName()
    {
        return "reference/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 100,  219 => 98,  213 => 95,  207 => 92,  196 => 83,  186 => 79,  183 => 78,  181 => 77,  180 => 76,  177 => 75,  173 => 74,  166 => 69,  156 => 65,  153 => 64,  151 => 63,  150 => 62,  147 => 61,  143 => 60,  135 => 55,  128 => 51,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Reference</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>{{ reference.id }}</td>
            </tr>
            <tr>
                <th>Name of Author</th>
                <td>{{ reference.nameOfAuthor }}</td>
            </tr>
            <tr>
                <th>Year Published</th>
                <td>{{ reference.yearPublished }}</td>
            </tr>
            <tr>
                <th>Title of Reference</th>
                <td>{{ reference.titleOfReference }}</td>
            </tr>
            <tr>
                <th>City Published</th>
                <td>{{ reference.cityPublished }}</td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>{{ reference.publisher }}</td>
            </tr>
            <tr>
                <th>Pages Used</th>
                <td>{{ reference.pagesUsed }}</td>
            </tr>
            <tr>
                <th>Text Summary</th>
                <td>{{ reference.textSummary }}</td>
            </tr>
             <tr>
                <th>Status</th>
                <td>{{ reference.status }}</td>
            </tr>
            <tr>
                <th>Reference added by</th>
                <td>{{ reference.user.email }}</td>
            </tr>

            <tr>
                <th>Date Created</th>
                <td>{{ reference.dateCreated|date('Y-m-d') }}</td>
            </tr>
            <tr>
                <th>Date Last Edited</th>
                <td> {{ reference.dateLastEdited|date('Y-m-d') }}</td>
            </tr>
        <tr>
            <th>Bibliographies</th>
            <td> <ul>
                    {% for referenceBibliography in reference.referenceBibliographies %}
                        <li>
                            <a href=\"{{ path('bibliography_show', {
                                'id': referenceBibliography.id
                            }) }}\">
                                {{ referenceBibliography.bibliographyName }}
                            </a>
                        </li>
                    {% endfor %}
                </ul></td>
        </tr>
            <tr>
                <th>Tags</th>
                <td> <ul>
                        {% for referenceTag in reference.referenceTags %}
                            <li>
                                <a href=\"{{ path('tag_show', {
                                    'id': referenceTag.id
                                }) }}\">
                                    {{ referenceTag.tagName }}
                                </a>
                              </li>
                        {% endfor %}
                    </ul></td>
            </tr>



    </table>

    <ul>
        <li>
            <a href=\"{{ path('reference_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reference_edit', { 'id': reference.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</section>
{% endblock %}
", "reference/show.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\show.html.twig");
    }
}
