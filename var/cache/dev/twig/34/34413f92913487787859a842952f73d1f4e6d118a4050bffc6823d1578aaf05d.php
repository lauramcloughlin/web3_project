<?php

/* tag/show.html.twig */
class __TwigTemplate_0cd671269d498a1ebfa05738fb471caead880542394927caa2f50795ed8adec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/show.html.twig", 1);
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
        $__internal_ac4b8b237047efff4debb8698cc01d4c86abbef356e5d0eca8ccffb01a3c231f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4b8b237047efff4debb8698cc01d4c86abbef356e5d0eca8ccffb01a3c231f->enter($__internal_ac4b8b237047efff4debb8698cc01d4c86abbef356e5d0eca8ccffb01a3c231f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $__internal_fa5fececf75558e01b5db628cf374ebf01d0cfa10a417b349df63dce195354a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5fececf75558e01b5db628cf374ebf01d0cfa10a417b349df63dce195354a4->enter($__internal_fa5fececf75558e01b5db628cf374ebf01d0cfa10a417b349df63dce195354a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4b8b237047efff4debb8698cc01d4c86abbef356e5d0eca8ccffb01a3c231f->leave($__internal_ac4b8b237047efff4debb8698cc01d4c86abbef356e5d0eca8ccffb01a3c231f_prof);

        
        $__internal_fa5fececf75558e01b5db628cf374ebf01d0cfa10a417b349df63dce195354a4->leave($__internal_fa5fececf75558e01b5db628cf374ebf01d0cfa10a417b349df63dce195354a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33ad156693eb87cb0b7de87c2ed2bccf7ba12e4ba03bcb6708175009f11b57c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ad156693eb87cb0b7de87c2ed2bccf7ba12e4ba03bcb6708175009f11b57c1->enter($__internal_33ad156693eb87cb0b7de87c2ed2bccf7ba12e4ba03bcb6708175009f11b57c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59ffbba358462866c2a94e12d97765a7284ceb655e0a9cd0c6f87b2c17335232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ffbba358462866c2a94e12d97765a7284ceb655e0a9cd0c6f87b2c17335232->enter($__internal_59ffbba358462866c2a94e12d97765a7284ceb655e0a9cd0c6f87b2c17335232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Tag</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tag Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tagName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>No of Votes</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "noOfVotes", array()), "html", null, true);
        echo "</td>
            </tr>
    </table>
    <h3>References with ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tagName", array()), "html", null, true);
        echo " tag</h3>
    <table>
        <tr>
           <td>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "tagReferences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tagReference"]) {
            // line 29
            echo "                           <li>
                               <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_show", array("id" => $this->getAttribute(            // line 31
$context["tagReference"], "id", array()))), "html", null, true);
            // line 32
            echo "\">
                                   ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tagReference"], "nameOfAuthor", array()), "html", null, true);
            echo "
                               </a>
                           </li>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagReference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</td>
        </tr>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</section>
";
        
        $__internal_59ffbba358462866c2a94e12d97765a7284ceb655e0a9cd0c6f87b2c17335232->leave($__internal_59ffbba358462866c2a94e12d97765a7284ceb655e0a9cd0c6f87b2c17335232_prof);

        
        $__internal_33ad156693eb87cb0b7de87c2ed2bccf7ba12e4ba03bcb6708175009f11b57c1->leave($__internal_33ad156693eb87cb0b7de87c2ed2bccf7ba12e4ba03bcb6708175009f11b57c1_prof);

    }

    public function getTemplateName()
    {
        return "tag/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 50,  133 => 48,  127 => 45,  121 => 42,  113 => 36,  103 => 33,  100 => 32,  98 => 31,  97 => 30,  94 => 29,  90 => 28,  84 => 25,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Tag</h2>

    <table>
            <tr>
                <th>Id</th>
                <td>{{ tag.id }}</td>
            </tr>
            <tr>
                <th>Tag Name</th>
                <td>{{ tag.tagName }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ tag.status }}</td>
            </tr>
            <tr>
                <th>No of Votes</th>
                <td>{{ tag.noOfVotes }}</td>
            </tr>
    </table>
    <h3>References with {{ tag.tagName }} tag</h3>
    <table>
        <tr>
           <td>{% for tagReference in tag.tagReferences %}
                           <li>
                               <a href=\"{{ path('reference_show', {
                                   'id': tagReference.id
                               }) }}\">
                                   {{ tagReference.nameOfAuthor }}
                               </a>
                           </li>
             {% endfor %}</td>
        </tr>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</section>
{% endblock %}
", "tag/show.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\show.html.twig");
    }
}
