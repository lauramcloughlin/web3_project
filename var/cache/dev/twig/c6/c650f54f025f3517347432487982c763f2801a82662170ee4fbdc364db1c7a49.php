<?php

/* reference/show2.html.twig */
class __TwigTemplate_5823ff708bbf1d9b83d7a6a3a6544edcd8bc603fb65c69f030ca66dadcb9082b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reference/show2.html.twig", 1);
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
        $__internal_df43a31d4ffcafc8990382147f633268258724b23ec6c9354763404c4e2524eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df43a31d4ffcafc8990382147f633268258724b23ec6c9354763404c4e2524eb->enter($__internal_df43a31d4ffcafc8990382147f633268258724b23ec6c9354763404c4e2524eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/show2.html.twig"));

        $__internal_584ec596ee51ae4b31f13f57d8466eb504da14ef901c74091be960c1f82baf6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584ec596ee51ae4b31f13f57d8466eb504da14ef901c74091be960c1f82baf6b->enter($__internal_584ec596ee51ae4b31f13f57d8466eb504da14ef901c74091be960c1f82baf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/show2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df43a31d4ffcafc8990382147f633268258724b23ec6c9354763404c4e2524eb->leave($__internal_df43a31d4ffcafc8990382147f633268258724b23ec6c9354763404c4e2524eb_prof);

        
        $__internal_584ec596ee51ae4b31f13f57d8466eb504da14ef901c74091be960c1f82baf6b->leave($__internal_584ec596ee51ae4b31f13f57d8466eb504da14ef901c74091be960c1f82baf6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f0a2d655983c4236bbf3345642e491b99fcb2304fe97b3a30cf99807d9f024d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0a2d655983c4236bbf3345642e491b99fcb2304fe97b3a30cf99807d9f024d->enter($__internal_6f0a2d655983c4236bbf3345642e491b99fcb2304fe97b3a30cf99807d9f024d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da53f751524775d56e9a5c3bd511f39684c39f566308ead874b2ae8cc32579ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da53f751524775d56e9a5c3bd511f39684c39f566308ead874b2ae8cc32579ac->enter($__internal_da53f751524775d56e9a5c3bd511f39684c39f566308ead874b2ae8cc32579ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                                ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["referenceBibliography"], "bibliographyName", array()), "html", null, true);
            echo "

                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referenceBibliography'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </ul></td>
        </tr>
            <tr>
                <th>Tags</th>
                <td> <ul>
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "referenceTags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["referenceTag"]) {
            // line 73
            echo "                            <li>
                                ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["referenceTag"], "tagName", array()), "html", null, true);
            echo "
                              </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['referenceTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </ul></td>
            </tr>
    </table>
    <br>
    <ul>
        <li>
            <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    <br>
</section>
";
        
        $__internal_da53f751524775d56e9a5c3bd511f39684c39f566308ead874b2ae8cc32579ac->leave($__internal_da53f751524775d56e9a5c3bd511f39684c39f566308ead874b2ae8cc32579ac_prof);

        
        $__internal_6f0a2d655983c4236bbf3345642e491b99fcb2304fe97b3a30cf99807d9f024d->leave($__internal_6f0a2d655983c4236bbf3345642e491b99fcb2304fe97b3a30cf99807d9f024d_prof);

    }

    public function getTemplateName()
    {
        return "reference/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 83,  184 => 77,  175 => 74,  172 => 73,  168 => 72,  161 => 67,  151 => 63,  147 => 61,  143 => 60,  135 => 55,  128 => 51,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

                                {{ referenceBibliography.bibliographyName }}

                        </li>
                    {% endfor %}
                </ul></td>
        </tr>
            <tr>
                <th>Tags</th>
                <td> <ul>
                        {% for referenceTag in reference.referenceTags %}
                            <li>
                                {{ referenceTag.tagName }}
                              </li>
                        {% endfor %}
                    </ul></td>
            </tr>
    </table>
    <br>
    <ul>
        <li>
            <a href=\"{{ path('reference_index') }}\">Back to the list</a>
        </li>
    </ul>
    <br>
</section>
{% endblock %}
", "reference/show2.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\show2.html.twig");
    }
}
