<?php

/* bibliography/index.html.twig */
class __TwigTemplate_24f610a0bc8204e18f9faade4e6cead4a7810827cdd3826782c618e9ba4fd3d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bibliography/index.html.twig", 1);
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
        $__internal_861b82895a03744b64e882e264ed5d5fa24e3f05ab224420d08eeabb34758273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861b82895a03744b64e882e264ed5d5fa24e3f05ab224420d08eeabb34758273->enter($__internal_861b82895a03744b64e882e264ed5d5fa24e3f05ab224420d08eeabb34758273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $__internal_84919a017df09cda5c39f453f4bb599f4dd0c8c9139e69ae4f3cc316a2a1bf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84919a017df09cda5c39f453f4bb599f4dd0c8c9139e69ae4f3cc316a2a1bf93->enter($__internal_84919a017df09cda5c39f453f4bb599f4dd0c8c9139e69ae4f3cc316a2a1bf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bibliography/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861b82895a03744b64e882e264ed5d5fa24e3f05ab224420d08eeabb34758273->leave($__internal_861b82895a03744b64e882e264ed5d5fa24e3f05ab224420d08eeabb34758273_prof);

        
        $__internal_84919a017df09cda5c39f453f4bb599f4dd0c8c9139e69ae4f3cc316a2a1bf93->leave($__internal_84919a017df09cda5c39f453f4bb599f4dd0c8c9139e69ae4f3cc316a2a1bf93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5a201fda1e49ee6665f4b8085d5dabfbb49d2f355629c75843b465a11bf18b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a201fda1e49ee6665f4b8085d5dabfbb49d2f355629c75843b465a11bf18b4->enter($__internal_c5a201fda1e49ee6665f4b8085d5dabfbb49d2f355629c75843b465a11bf18b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46f93b645c97df5bc03948d0fc0a0b3f53553ec42b92030f7d799f7fb30365f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f93b645c97df5bc03948d0fc0a0b3f53553ec42b92030f7d799f7fb30365f1->enter($__internal_46f93b645c97df5bc03948d0fc0a0b3f53553ec42b92030f7d799f7fb30365f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"main_content\">
    <h2>Bibliographies ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            echo "&nbsp;&nbsp;<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_new");
            echo "\">+ Create a new bibliography</a>";
        }
        echo "</h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Bibliography Name</th>
                <th>Text Summary</th>
                <th>Status</th>
                <th>User</th>
                <th>View</th>
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 17
            echo "                <th>Update</th>
                ";
        }
        // line 19
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bibliographies"] ?? $this->getContext($context, "bibliographies")));
        foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "bibliographyName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "textSummary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "status", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bibliography"], "user", array()), "email", array()), "html", null, true);
            echo "</td>

                ";
            // line 30
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                echo "&nbsp;
                &nbsp;<td>
                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
                echo "\">view</a>
                </td>
            ";
            } else {
                // line 35
                echo "                <td>
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_show2", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
                echo "\">view</a>
                </td>
                ";
            }
            // line 38
            echo "</h2>



                ";
            // line 42
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 43
                echo "                <td>
                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_edit", array("id" => $this->getAttribute($context["bibliography"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                </td>
                ";
            }
            // line 47
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

</section>
";
        
        $__internal_46f93b645c97df5bc03948d0fc0a0b3f53553ec42b92030f7d799f7fb30365f1->leave($__internal_46f93b645c97df5bc03948d0fc0a0b3f53553ec42b92030f7d799f7fb30365f1_prof);

        
        $__internal_c5a201fda1e49ee6665f4b8085d5dabfbb49d2f355629c75843b465a11bf18b4->leave($__internal_c5a201fda1e49ee6665f4b8085d5dabfbb49d2f355629c75843b465a11bf18b4_prof);

    }

    public function getTemplateName()
    {
        return "bibliography/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 49,  148 => 47,  142 => 44,  139 => 43,  137 => 42,  131 => 38,  125 => 36,  122 => 35,  116 => 32,  111 => 30,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  88 => 24,  85 => 23,  81 => 22,  76 => 19,  72 => 17,  70 => 16,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2>Bibliographies {% if (is_granted('ROLE_USER')) %}&nbsp;&nbsp;<a href=\"{{ path('bibliography_new') }}\">+ Create a new bibliography</a>{% endif %}</h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Bibliography Name</th>
                <th>Text Summary</th>
                <th>Status</th>
                <th>User</th>
                <th>View</th>
                {% if (is_granted('ROLE_USER')) %}
                <th>Update</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
        {% for bibliography in bibliographies %}
            <tr>
                <td><a href=\"{{ path('bibliography_show', { 'id': bibliography.id }) }}\">{{ bibliography.id }}</a></td>
                <td>{{ bibliography.bibliographyName }}</td>
                <td>{{ bibliography.textSummary }}</td>
                <td>{{ bibliography.status }}</td>
                <td>{{ bibliography.user.email }}</td>

                {% if (is_granted('ROLE_USER')) %}&nbsp;
                &nbsp;<td>
                <a href=\"{{ path('bibliography_show', { 'id': bibliography.id }) }}\">view</a>
                </td>
            {% else %}
                <td>
                    <a href=\"{{ path('bibliography_show2', { 'id': bibliography.id }) }}\">view</a>
                </td>
                {% endif %}</h2>



                {% if (is_granted('ROLE_USER')) %}
                <td>
                    <a href=\"{{ path('bibliography_edit', { 'id': bibliography.id }) }}\">edit</a>
                </td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>

</section>
{% endblock %}
", "bibliography/index.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\bibliography\\index.html.twig");
    }
}
