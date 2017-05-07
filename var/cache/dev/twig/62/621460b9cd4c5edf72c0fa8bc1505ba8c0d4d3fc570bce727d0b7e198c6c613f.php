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
        $__internal_4070df70da6faf9601d86efcf11c497c72f1ea1644af4670b3d302035d73b6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4070df70da6faf9601d86efcf11c497c72f1ea1644af4670b3d302035d73b6a2->enter($__internal_4070df70da6faf9601d86efcf11c497c72f1ea1644af4670b3d302035d73b6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/show.html.twig"));

        $__internal_7da8c23be72a61d9b2a8a7af6cd1a4e703130d83f1a3e66cd8cca591eda0c78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da8c23be72a61d9b2a8a7af6cd1a4e703130d83f1a3e66cd8cca591eda0c78f->enter($__internal_7da8c23be72a61d9b2a8a7af6cd1a4e703130d83f1a3e66cd8cca591eda0c78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4070df70da6faf9601d86efcf11c497c72f1ea1644af4670b3d302035d73b6a2->leave($__internal_4070df70da6faf9601d86efcf11c497c72f1ea1644af4670b3d302035d73b6a2_prof);

        
        $__internal_7da8c23be72a61d9b2a8a7af6cd1a4e703130d83f1a3e66cd8cca591eda0c78f->leave($__internal_7da8c23be72a61d9b2a8a7af6cd1a4e703130d83f1a3e66cd8cca591eda0c78f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5218c1b534355cebb101492f30b97d186a316e69334c18537392d993892937b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5218c1b534355cebb101492f30b97d186a316e69334c18537392d993892937b->enter($__internal_c5218c1b534355cebb101492f30b97d186a316e69334c18537392d993892937b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ef85e2b8ce492bcd3c039a3e03e8921845d145712acb0716016a5aae568181b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef85e2b8ce492bcd3c039a3e03e8921845d145712acb0716016a5aae568181b->enter($__internal_4ef85e2b8ce492bcd3c039a3e03e8921845d145712acb0716016a5aae568181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <h3>References in the ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "bibliographyName", array()), "html", null, true);
        echo " Bibliography</h3>
    <table>
        <tr>
            <td>";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "bibliographyReferences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["bibliographyReference"]) {
            // line 33
            echo "                    <li>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute(            // line 35
$context["bibliographyReference"], "id", array()))), "html", null, true);
            // line 36
            echo "\">
                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliographyReference"], "nameOfAuthor", array()), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliographyReference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</td>
        </tr>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_edit", array("id" => $this->getAttribute(($context["bibliography"] ?? $this->getContext($context, "bibliography")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</section>
";
        
        $__internal_4ef85e2b8ce492bcd3c039a3e03e8921845d145712acb0716016a5aae568181b->leave($__internal_4ef85e2b8ce492bcd3c039a3e03e8921845d145712acb0716016a5aae568181b_prof);

        
        $__internal_c5218c1b534355cebb101492f30b97d186a316e69334c18537392d993892937b->leave($__internal_c5218c1b534355cebb101492f30b97d186a316e69334c18537392d993892937b_prof);

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
        return array (  144 => 53,  139 => 51,  133 => 48,  127 => 45,  120 => 40,  110 => 37,  107 => 36,  105 => 35,  104 => 34,  101 => 33,  97 => 32,  91 => 29,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3>References in the {{ bibliography.bibliographyName }} Bibliography</h3>
    <table>
        <tr>
            <td>{% for bibliographyReference in bibliography.bibliographyReferences %}
                    <li>
                        <a href=\"{{ path('reference_show', {
                            'id': bibliographyReference.id
                        }) }}\">
                            {{ bibliographyReference.nameOfAuthor }}
                        </a>
                    </li>
                {% endfor %}</td>
        </tr>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('bibliography_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('bibliography_edit', { 'id': bibliography.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</section>
{% endblock %}
", "bibliography/show.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\show.html.twig");
    }
}
