<?php

/* tag/user.html.twig */
class __TwigTemplate_6cce14aaa48b1885763ac5d9e066274e03c29c09166506bd790474d528bc9419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/user.html.twig", 1);
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
        $__internal_386e996c12febdcf85825625f89c4edfd61f4b3c203e3ac020b59483b0b6474e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386e996c12febdcf85825625f89c4edfd61f4b3c203e3ac020b59483b0b6474e->enter($__internal_386e996c12febdcf85825625f89c4edfd61f4b3c203e3ac020b59483b0b6474e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/user.html.twig"));

        $__internal_76fe51321a175f0278dd1ab09385c34d047514c72d1c05f0b3c4c248743dd2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fe51321a175f0278dd1ab09385c34d047514c72d1c05f0b3c4c248743dd2fb->enter($__internal_76fe51321a175f0278dd1ab09385c34d047514c72d1c05f0b3c4c248743dd2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_386e996c12febdcf85825625f89c4edfd61f4b3c203e3ac020b59483b0b6474e->leave($__internal_386e996c12febdcf85825625f89c4edfd61f4b3c203e3ac020b59483b0b6474e_prof);

        
        $__internal_76fe51321a175f0278dd1ab09385c34d047514c72d1c05f0b3c4c248743dd2fb->leave($__internal_76fe51321a175f0278dd1ab09385c34d047514c72d1c05f0b3c4c248743dd2fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b60128fcdca07e676bc2f237ca80def94157d860fe75f406e41d75c8d314ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b60128fcdca07e676bc2f237ca80def94157d860fe75f406e41d75c8d314ce4->enter($__internal_8b60128fcdca07e676bc2f237ca80def94157d860fe75f406e41d75c8d314ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b532672843ca2b8759c00e54da520491a8e855383810ae3f484c139ac7ead022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b532672843ca2b8759c00e54da520491a8e855383810ae3f484c139ac7ead022->enter($__internal_b532672843ca2b8759c00e54da520491a8e855383810ae3f484c139ac7ead022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Public Tags &nbsp;&nbsp;<a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\"> + Create a new tag</a></h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 15
            echo "                <th>View</th>
                <th>Update</th>
                ";
        }
        // line 18
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "tagName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "noOfVotes", array()), "html", null, true);
            echo "</td>
                ";
            // line 27
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 28
                echo "                <td>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_show", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">view</a>
                </td>

                <td>
                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                </td>
                ";
            }
            // line 36
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

</section>
";
        
        $__internal_b532672843ca2b8759c00e54da520491a8e855383810ae3f484c139ac7ead022->leave($__internal_b532672843ca2b8759c00e54da520491a8e855383810ae3f484c139ac7ead022_prof);

        
        $__internal_8b60128fcdca07e676bc2f237ca80def94157d860fe75f406e41d75c8d314ce4->leave($__internal_8b60128fcdca07e676bc2f237ca80def94157d860fe75f406e41d75c8d314ce4_prof);

    }

    public function getTemplateName()
    {
        return "tag/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  119 => 36,  113 => 33,  106 => 29,  103 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  83 => 23,  80 => 22,  76 => 21,  71 => 18,  66 => 15,  64 => 14,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Public Tags &nbsp;&nbsp;<a href=\"{{ path('tag_new') }}\"> + Create a new tag</a></h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tag Name</th>
                <th>Status</th>
                <th>No of Votes</th>
                {% if (is_granted('ROLE_USER')) %}
                <th>View</th>
                <th>Update</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
        {% for tag in tags %}
            <tr>
                <td><a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">{{ tag.id }}</a></td>
                <td>{{ tag.tagName }}</td>
                <td>{{ tag.status }}</td>
                <td>{{ tag.noOfVotes }}</td>
                {% if (is_granted('ROLE_USER')) %}
                <td>
                    <a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">view</a>
                </td>

                <td>
                    <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">edit</a>
                </td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>

</section>
{% endblock %}
", "tag/user.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\tag\\user.html.twig");
    }
}
