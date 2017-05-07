<?php

/* admin/index.html.twig */
class __TwigTemplate_11aa95e41d9d96396fd141d6d70285a4b582be96c09ff164da659f39d7290c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_d0b655d3c7ee3343537eaae5d5696ead29bf1c2c0a8094aea2a31201b00be4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b655d3c7ee3343537eaae5d5696ead29bf1c2c0a8094aea2a31201b00be4f0->enter($__internal_d0b655d3c7ee3343537eaae5d5696ead29bf1c2c0a8094aea2a31201b00be4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_9587f7906c8ceb220c0a2ad040ec69ea089d9971a02ad2f3d661003830af9e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9587f7906c8ceb220c0a2ad040ec69ea089d9971a02ad2f3d661003830af9e93->enter($__internal_9587f7906c8ceb220c0a2ad040ec69ea089d9971a02ad2f3d661003830af9e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0b655d3c7ee3343537eaae5d5696ead29bf1c2c0a8094aea2a31201b00be4f0->leave($__internal_d0b655d3c7ee3343537eaae5d5696ead29bf1c2c0a8094aea2a31201b00be4f0_prof);

        
        $__internal_9587f7906c8ceb220c0a2ad040ec69ea089d9971a02ad2f3d661003830af9e93->leave($__internal_9587f7906c8ceb220c0a2ad040ec69ea089d9971a02ad2f3d661003830af9e93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_690e07d5170f6fba0d8193eae4de1884fc6f2419df9e8e081aa58a950d3ab342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690e07d5170f6fba0d8193eae4de1884fc6f2419df9e8e081aa58a950d3ab342->enter($__internal_690e07d5170f6fba0d8193eae4de1884fc6f2419df9e8e081aa58a950d3ab342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c25554c6c4dee2102b55f57674de2c99a4efb83b3d624f382cf6e4aa25f9a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c25554c6c4dee2102b55f57674de2c99a4efb83b3d624f382cf6e4aa25f9a0d->enter($__internal_4c25554c6c4dee2102b55f57674de2c99a4efb83b3d624f382cf6e4aa25f9a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"main_content\">
        <h2>Users &nbsp;&nbsp;<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_new");
        echo "\">+ Create a new user</a></h2>
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "                <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </tbody>
        </table>
    </section>
";
        
        $__internal_4c25554c6c4dee2102b55f57674de2c99a4efb83b3d624f382cf6e4aa25f9a0d->leave($__internal_4c25554c6c4dee2102b55f57674de2c99a4efb83b3d624f382cf6e4aa25f9a0d_prof);

        
        $__internal_690e07d5170f6fba0d8193eae4de1884fc6f2419df9e8e081aa58a950d3ab342->leave($__internal_690e07d5170f6fba0d8193eae4de1884fc6f2419df9e8e081aa58a950d3ab342_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  76 => 18,  71 => 16,  68 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2>Users &nbsp;&nbsp;<a href=\"{{ path('admin_new') }}\">+ Create a new user</a></h2>
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <td>{{ user.email }}</td>
                    <td>
                        <a href=\"{{ path('admin_edit', { 'id': user.id }) }}\">edit</a>
                    </td>

                </tr>
            {% endfor %}
            </tbody>
        </table>
    </section>
{% endblock %}", "admin/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
