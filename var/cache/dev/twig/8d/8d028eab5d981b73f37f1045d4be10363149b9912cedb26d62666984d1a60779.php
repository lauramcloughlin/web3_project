<?php

/* reference/new.html.twig */
class __TwigTemplate_58cb90b2764968b333492af443562d2d890edb9dfda62baa67ddfa66561e59e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reference/new.html.twig", 1);
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
        $__internal_258e210dc8b0d1cf4d422bb19adb74b919469dfb55138409f2ba771413196dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258e210dc8b0d1cf4d422bb19adb74b919469dfb55138409f2ba771413196dca->enter($__internal_258e210dc8b0d1cf4d422bb19adb74b919469dfb55138409f2ba771413196dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/new.html.twig"));

        $__internal_f76be6f4f5d6b84f676f43dc7d2a3287c7bc1cf5aad37eae233dd1b2e2154bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76be6f4f5d6b84f676f43dc7d2a3287c7bc1cf5aad37eae233dd1b2e2154bae->enter($__internal_f76be6f4f5d6b84f676f43dc7d2a3287c7bc1cf5aad37eae233dd1b2e2154bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reference/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_258e210dc8b0d1cf4d422bb19adb74b919469dfb55138409f2ba771413196dca->leave($__internal_258e210dc8b0d1cf4d422bb19adb74b919469dfb55138409f2ba771413196dca_prof);

        
        $__internal_f76be6f4f5d6b84f676f43dc7d2a3287c7bc1cf5aad37eae233dd1b2e2154bae->leave($__internal_f76be6f4f5d6b84f676f43dc7d2a3287c7bc1cf5aad37eae233dd1b2e2154bae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e116aeb08d06b53b4226b2fda24914e84e87f20a204e94f2fe12dc5d736724f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e116aeb08d06b53b4226b2fda24914e84e87f20a204e94f2fe12dc5d736724f->enter($__internal_0e116aeb08d06b53b4226b2fda24914e84e87f20a204e94f2fe12dc5d736724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8372233dbcd7343bfd90cbf2d12b2990a1761bed3451bd7f2b3492c26f3e01a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8372233dbcd7343bfd90cbf2d12b2990a1761bed3451bd7f2b3492c26f3e01a0->enter($__internal_8372233dbcd7343bfd90cbf2d12b2990a1761bed3451bd7f2b3492c26f3e01a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Reference creation</h2>
<table>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    <tr>
        <td> ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameOfAuthor", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "yearPublished", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titleOfReference", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cityPublished", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "publisher", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pagesUsed", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "textSummary", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "status", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "referenceBibliographies", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td> ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "referenceTags", array()), 'row');
        echo "</td>
    </tr>
    <tr>
        <td>  <input type=\"submit\" value=\"Create\" /></td>
    </tr>

       ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</table>
    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</section>
";
        
        $__internal_8372233dbcd7343bfd90cbf2d12b2990a1761bed3451bd7f2b3492c26f3e01a0->leave($__internal_8372233dbcd7343bfd90cbf2d12b2990a1761bed3451bd7f2b3492c26f3e01a0_prof);

        
        $__internal_0e116aeb08d06b53b4226b2fda24914e84e87f20a204e94f2fe12dc5d736724f->leave($__internal_0e116aeb08d06b53b4226b2fda24914e84e87f20a204e94f2fe12dc5d736724f_prof);

    }

    public function getTemplateName()
    {
        return "reference/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  123 => 43,  114 => 37,  108 => 34,  102 => 31,  96 => 28,  90 => 25,  84 => 22,  78 => 19,  72 => 16,  66 => 13,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Reference creation</h2>
<table>
    {{ form_start(form) }}

    <tr>
        <td> {{ form_row(form.nameOfAuthor) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.yearPublished) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.titleOfReference) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.cityPublished) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.publisher) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.pagesUsed) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.textSummary) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.status) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.referenceBibliographies) }}</td>
    </tr>
    <tr>
        <td> {{ form_row(form.referenceTags) }}</td>
    </tr>
    <tr>
        <td>  <input type=\"submit\" value=\"Create\" /></td>
    </tr>

       {{ form_end(form) }}
</table>
    <ul>
        <li>
            <a href=\"{{ path('reference_index') }}\">Back to the list</a>
        </li>
    </ul>
</section>
{% endblock %}
", "reference/new.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\reference\\new.html.twig");
    }
}
