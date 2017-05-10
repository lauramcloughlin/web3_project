<?php

/* bibliography/show.html.twig */
class __TwigTemplate_0425d7ce3b00bd20a4c604621574d5fd470e19015a8ab269f1ffe0f5b6ab8f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/show.html.twig", 1);
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
        $__internal_863cbefa14a8d24bf49ee830a319d4f98d90bf951e0184cdac2f86fa2a3f7760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863cbefa14a8d24bf49ee830a319d4f98d90bf951e0184cdac2f86fa2a3f7760->enter($__internal_863cbefa14a8d24bf49ee830a319d4f98d90bf951e0184cdac2f86fa2a3f7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/show.html.twig"));

        $__internal_a5f085a46920f8b38f0bd4726998c5abe8653d127a8a268eee46ed195c308ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f085a46920f8b38f0bd4726998c5abe8653d127a8a268eee46ed195c308ebf->enter($__internal_a5f085a46920f8b38f0bd4726998c5abe8653d127a8a268eee46ed195c308ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863cbefa14a8d24bf49ee830a319d4f98d90bf951e0184cdac2f86fa2a3f7760->leave($__internal_863cbefa14a8d24bf49ee830a319d4f98d90bf951e0184cdac2f86fa2a3f7760_prof);

        
        $__internal_a5f085a46920f8b38f0bd4726998c5abe8653d127a8a268eee46ed195c308ebf->leave($__internal_a5f085a46920f8b38f0bd4726998c5abe8653d127a8a268eee46ed195c308ebf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b625c0ad92dc61103c70495697e7d53e876e1c7fa25cd4c3d674d459d7afe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b625c0ad92dc61103c70495697e7d53e876e1c7fa25cd4c3d674d459d7afe6->enter($__internal_27b625c0ad92dc61103c70495697e7d53e876e1c7fa25cd4c3d674d459d7afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1744b941f0b30260514f283c60fc8b5aa1d7f3a10681c78e706be927f2d5430c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1744b941f0b30260514f283c60fc8b5aa1d7f3a10681c78e706be927f2d5430c->enter($__internal_1744b941f0b30260514f283c60fc8b5aa1d7f3a10681c78e706be927f2d5430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute(                // line 36
$context["bibliographyReference"], "id", array()))), "html", null, true);
                // line 37
                echo "\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["bibliographyReference"], "nameOfAuthor", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bibliographyReference"], "titleOfReference", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bibliographyReference"], "yearPublished", array()), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliographyReference'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "</td>
        </tr>
    </table>
    ";
        }
        // line 45
        echo "    <br>
    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Back to the list</a>
        </li>
        ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 51
            echo "        <li>
            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_edit", array("id" => $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
        </li>
        ";
        }
        // line 55
        echo "    </ul>
    <br>
</section>
";
        
        $__internal_1744b941f0b30260514f283c60fc8b5aa1d7f3a10681c78e706be927f2d5430c->leave($__internal_1744b941f0b30260514f283c60fc8b5aa1d7f3a10681c78e706be927f2d5430c_prof);

        
        $__internal_27b625c0ad92dc61103c70495697e7d53e876e1c7fa25cd4c3d674d459d7afe6->leave($__internal_27b625c0ad92dc61103c70495697e7d53e876e1c7fa25cd4c3d674d459d7afe6_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 55,  148 => 52,  145 => 51,  143 => 50,  138 => 48,  133 => 45,  127 => 41,  113 => 38,  110 => 37,  108 => 36,  107 => 35,  104 => 34,  100 => 33,  93 => 30,  91 => 29,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                        <a href=\"{{ path('reference_show', {
                            'id': bibliographyReference.id
                        }) }}\">
                            {{ bibliographyReference.nameOfAuthor }}, {{ bibliographyReference.titleOfReference }}, {{ bibliographyReference.yearPublished }}
                        </a>
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
", "bibliography/show.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\show.html.twig");
    }
}
