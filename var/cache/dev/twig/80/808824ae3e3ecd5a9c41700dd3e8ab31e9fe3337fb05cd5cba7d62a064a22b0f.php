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
        $__internal_36797c74f22fb72e13f7f91c4470ab2c14ce7439ca6e166efcefdd2e17caddb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36797c74f22fb72e13f7f91c4470ab2c14ce7439ca6e166efcefdd2e17caddb6->enter($__internal_36797c74f22fb72e13f7f91c4470ab2c14ce7439ca6e166efcefdd2e17caddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/show.html.twig"));

        $__internal_b15413a857d819f75a8a2c2ec454d05fd80b2b4070d7fb5e347b714111c18b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15413a857d819f75a8a2c2ec454d05fd80b2b4070d7fb5e347b714111c18b61->enter($__internal_b15413a857d819f75a8a2c2ec454d05fd80b2b4070d7fb5e347b714111c18b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36797c74f22fb72e13f7f91c4470ab2c14ce7439ca6e166efcefdd2e17caddb6->leave($__internal_36797c74f22fb72e13f7f91c4470ab2c14ce7439ca6e166efcefdd2e17caddb6_prof);

        
        $__internal_b15413a857d819f75a8a2c2ec454d05fd80b2b4070d7fb5e347b714111c18b61->leave($__internal_b15413a857d819f75a8a2c2ec454d05fd80b2b4070d7fb5e347b714111c18b61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12a84debaf1bb855fe8c7561878f393bc2f8b42ee7b1ff712ad242d79c055f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a84debaf1bb855fe8c7561878f393bc2f8b42ee7b1ff712ad242d79c055f83->enter($__internal_12a84debaf1bb855fe8c7561878f393bc2f8b42ee7b1ff712ad242d79c055f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f881051b53f0a046b82edc738dde841a15acf274f21fa56e76cf1d341a095fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f881051b53f0a046b82edc738dde841a15acf274f21fa56e76cf1d341a095fc->enter($__internal_0f881051b53f0a046b82edc738dde841a15acf274f21fa56e76cf1d341a095fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Reference</h2>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name of Author</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "nameOfAuthor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Year Published</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "yearPublished", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title of Reference</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "titleOfReference", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City Published</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "cityPublished", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "publisher", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pages Used</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "pagesUsed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text Summary</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "textSummary", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>User</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "status", array()), "html", null, true);
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
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_edit", array("id" => $this->getAttribute(($context["reference"] ?? $this->getContext($context, "reference")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</section>
";
        
        $__internal_0f881051b53f0a046b82edc738dde841a15acf274f21fa56e76cf1d341a095fc->leave($__internal_0f881051b53f0a046b82edc738dde841a15acf274f21fa56e76cf1d341a095fc_prof);

        
        $__internal_12a84debaf1bb855fe8c7561878f393bc2f8b42ee7b1ff712ad242d79c055f83->leave($__internal_12a84debaf1bb855fe8c7561878f393bc2f8b42ee7b1ff712ad242d79c055f83_prof);

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
        return array (  162 => 70,  157 => 68,  151 => 65,  145 => 62,  135 => 55,  128 => 51,  121 => 47,  114 => 43,  107 => 39,  100 => 35,  93 => 31,  86 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
        <tbody>
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
                <th>User</th>
                <td>{{ reference.userId }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ reference.status }}</td>
            </tr>
            <tr>
                <th>Date Created</th>
                <td>{{ reference.dateCreated|date('Y-m-d') }}</td>
            </tr>
            <tr>
                <th>Date Last Edited</th>
                <td> {{ reference.dateLastEdited|date('Y-m-d') }}</td>
            </tr>
        </tbody>
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
