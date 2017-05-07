<?php

/* tag/edit.html.twig */
class __TwigTemplate_ccf6a922dd82d50237964d7b58182eff3db952dd650f5567309e869de33bd878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/edit.html.twig", 1);
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
        $__internal_d1445abab4f54e41bb52f25f0077966ee34a8269ddb0ddff98077932b90e76aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1445abab4f54e41bb52f25f0077966ee34a8269ddb0ddff98077932b90e76aa->enter($__internal_d1445abab4f54e41bb52f25f0077966ee34a8269ddb0ddff98077932b90e76aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $__internal_1950dd3b0e7f3de7a26c2e4ee68ecb7ede6e8338dba23fdee8f42c9131468d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1950dd3b0e7f3de7a26c2e4ee68ecb7ede6e8338dba23fdee8f42c9131468d8a->enter($__internal_1950dd3b0e7f3de7a26c2e4ee68ecb7ede6e8338dba23fdee8f42c9131468d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1445abab4f54e41bb52f25f0077966ee34a8269ddb0ddff98077932b90e76aa->leave($__internal_d1445abab4f54e41bb52f25f0077966ee34a8269ddb0ddff98077932b90e76aa_prof);

        
        $__internal_1950dd3b0e7f3de7a26c2e4ee68ecb7ede6e8338dba23fdee8f42c9131468d8a->leave($__internal_1950dd3b0e7f3de7a26c2e4ee68ecb7ede6e8338dba23fdee8f42c9131468d8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6f3979f0258df931ac65fac37e9f96c39b30e0689f56ad2bcc9356d6e3e9feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f3979f0258df931ac65fac37e9f96c39b30e0689f56ad2bcc9356d6e3e9feb->enter($__internal_a6f3979f0258df931ac65fac37e9f96c39b30e0689f56ad2bcc9356d6e3e9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_714a922d3886a72c1a8dd61087575f157cc5e769c317797890e7f70b0d3bc2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714a922d3886a72c1a8dd61087575f157cc5e769c317797890e7f70b0d3bc2f8->enter($__internal_714a922d3886a72c1a8dd61087575f157cc5e769c317797890e7f70b0d3bc2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Tag edit</h2>

    <table>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <tr>
            <td> ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tagName", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'row');
        echo "</td>
        </tr>
        <tr>
            <td>  <input type=\"submit\" value=\"Update\" /></td>
        </tr>
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</section>
";
        
        $__internal_714a922d3886a72c1a8dd61087575f157cc5e769c317797890e7f70b0d3bc2f8->leave($__internal_714a922d3886a72c1a8dd61087575f157cc5e769c317797890e7f70b0d3bc2f8_prof);

        
        $__internal_a6f3979f0258df931ac65fac37e9f96c39b30e0689f56ad2bcc9356d6e3e9feb->leave($__internal_a6f3979f0258df931ac65fac37e9f96c39b30e0689f56ad2bcc9356d6e3e9feb_prof);

    }

    public function getTemplateName()
    {
        return "tag/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  74 => 18,  66 => 13,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Tag edit</h2>

    <table>
        {{ form_start(form) }}
        <tr>
            <td> {{ form_row(form.tagName) }}</td>
        </tr>
        <tr>
            <td> {{ form_row(form.status) }}</td>
        </tr>
        <tr>
            <td>  <input type=\"submit\" value=\"Update\" /></td>
        </tr>
        {{ form_end(form) }}
    </table>
    <ul>
        <li>
            <a href=\"{{ path('tag_index') }}\">Back to the list</a>
        </li>
    </ul>
</section>
{% endblock %}
", "tag/edit.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\edit.html.twig");
    }
}
