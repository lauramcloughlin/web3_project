<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_5acb4f6df4574b32815158efedb7f4d658121a670f0dc6186a1a34e03ce06523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5df82a67a5837cf4b85d8272aa1432028321a5db7410bfe587cd9a934b0fbc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df82a67a5837cf4b85d8272aa1432028321a5db7410bfe587cd9a934b0fbc4c->enter($__internal_5df82a67a5837cf4b85d8272aa1432028321a5db7410bfe587cd9a934b0fbc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_7fd2d90d2d4a45faec3afe8cfc0c1077decf43607d26fa87add0b3d98415a47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd2d90d2d4a45faec3afe8cfc0c1077decf43607d26fa87add0b3d98415a47e->enter($__internal_7fd2d90d2d4a45faec3afe8cfc0c1077decf43607d26fa87add0b3d98415a47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5df82a67a5837cf4b85d8272aa1432028321a5db7410bfe587cd9a934b0fbc4c->leave($__internal_5df82a67a5837cf4b85d8272aa1432028321a5db7410bfe587cd9a934b0fbc4c_prof);

        
        $__internal_7fd2d90d2d4a45faec3afe8cfc0c1077decf43607d26fa87add0b3d98415a47e->leave($__internal_7fd2d90d2d4a45faec3afe8cfc0c1077decf43607d26fa87add0b3d98415a47e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\laragon\\www\\web3_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
