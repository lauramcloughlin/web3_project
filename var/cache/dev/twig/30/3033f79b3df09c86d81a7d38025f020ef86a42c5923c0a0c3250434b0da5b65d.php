<?php

/* base.html.twig */
class __TwigTemplate_e278b38be6267fb8edcf06d628eb15b2955ce13b7e8f0f6d9ff7e3ee435daf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b21fa97e4e99582d3e243fdd5fe4833c14ae7429e7d7559371b35a6765207371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21fa97e4e99582d3e243fdd5fe4833c14ae7429e7d7559371b35a6765207371->enter($__internal_b21fa97e4e99582d3e243fdd5fe4833c14ae7429e7d7559371b35a6765207371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a29255e6ecb37533048c35c3058ac2b13f86b92f61d040c72230c40d21240364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29255e6ecb37533048c35c3058ac2b13f86b92f61d040c72230c40d21240364->enter($__internal_a29255e6ecb37533048c35c3058ac2b13f86b92f61d040c72230c40d21240364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Bibliography Manager ";
        // line 5
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>
    <header>
        <section class=\"header_left\"><h1>Bibliography Manager</h1></section>
        <section class=\"header_right\">
            ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 23
            echo "                <h3><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a></h3>
            ";
        } else {
            // line 25
            echo "                <h3><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">Login</a></h3>
            ";
        }
        // line 27
        echo "            ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array())) : ("")), "html", null, true);
        echo "
        </section>
    </header>
     </section>
    </header>
    <main>

        <section class=\"side_nav\">
            <ul>
                <li><h3><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_index");
        echo "\">Public References</a></h3></li>
                <li><h3><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_index");
        echo "\">Lecturer Bibliographies</a></h3></li>
                <li><h3><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">Public Tags</a></h3></li>
                <li><h3><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_proposed");
        echo "\">Proposed Tags</a></h3></li>
                <li><h3><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_basket_index");
        echo "\">New Bib References</a></h3></li>
                ";
        // line 41
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 42
            echo "                    <li><h3><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reference_user");
            echo "\">My References</a></h3></li>
                    <li><h3><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bibliography_user");
            echo "\">My Bibliography</a></h3></li>
                    <li><h3><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_user");
            echo "\">My Tag</a></h3></li>
                ";
        }
        // line 46
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 47
            echo "                <li><h3><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
            echo "\">Admin</a></h3></li>
                ";
        }
        // line 49
        echo "            </ul>
         </section>

        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
    </main>


        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
    <footer>
        <section>
            <h3>Laura McLoughlin - B00092153</h3>
        </section>
   </footer>
    </body>
</html>
";
        
        $__internal_b21fa97e4e99582d3e243fdd5fe4833c14ae7429e7d7559371b35a6765207371->leave($__internal_b21fa97e4e99582d3e243fdd5fe4833c14ae7429e7d7559371b35a6765207371_prof);

        
        $__internal_a29255e6ecb37533048c35c3058ac2b13f86b92f61d040c72230c40d21240364->leave($__internal_a29255e6ecb37533048c35c3058ac2b13f86b92f61d040c72230c40d21240364_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_978727ecf2ddd95cda8a0b9a788d71c92027a113aafbb3d90b5d1256543c10ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978727ecf2ddd95cda8a0b9a788d71c92027a113aafbb3d90b5d1256543c10ce->enter($__internal_978727ecf2ddd95cda8a0b9a788d71c92027a113aafbb3d90b5d1256543c10ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_3c19abb08547cd5877cae87d39fee6fa5ecd92f1ed3cf53809f8cefa3e593de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c19abb08547cd5877cae87d39fee6fa5ecd92f1ed3cf53809f8cefa3e593de0->enter($__internal_3c19abb08547cd5877cae87d39fee6fa5ecd92f1ed3cf53809f8cefa3e593de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        
        $__internal_3c19abb08547cd5877cae87d39fee6fa5ecd92f1ed3cf53809f8cefa3e593de0->leave($__internal_3c19abb08547cd5877cae87d39fee6fa5ecd92f1ed3cf53809f8cefa3e593de0_prof);

        
        $__internal_978727ecf2ddd95cda8a0b9a788d71c92027a113aafbb3d90b5d1256543c10ce->leave($__internal_978727ecf2ddd95cda8a0b9a788d71c92027a113aafbb3d90b5d1256543c10ce_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee966379c938b7ce48f11bcb691f9d61fcc7fa0f61b6f1d6222bf255f13ac180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee966379c938b7ce48f11bcb691f9d61fcc7fa0f61b6f1d6222bf255f13ac180->enter($__internal_ee966379c938b7ce48f11bcb691f9d61fcc7fa0f61b6f1d6222bf255f13ac180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f5480e2c00590fc0f01b993ef1cfba1e959f4d3f714d6cc75a239888427fa9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5480e2c00590fc0f01b993ef1cfba1e959f4d3f714d6cc75a239888427fa9e9->enter($__internal_f5480e2c00590fc0f01b993ef1cfba1e959f4d3f714d6cc75a239888427fa9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/root.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/basic.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/header.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_f5480e2c00590fc0f01b993ef1cfba1e959f4d3f714d6cc75a239888427fa9e9->leave($__internal_f5480e2c00590fc0f01b993ef1cfba1e959f4d3f714d6cc75a239888427fa9e9_prof);

        
        $__internal_ee966379c938b7ce48f11bcb691f9d61fcc7fa0f61b6f1d6222bf255f13ac180->leave($__internal_ee966379c938b7ce48f11bcb691f9d61fcc7fa0f61b6f1d6222bf255f13ac180_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_9011d4d4c9e6fa088b093ca0518a37cb72151495b817087dce9a0dde9bb1dc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9011d4d4c9e6fa088b093ca0518a37cb72151495b817087dce9a0dde9bb1dc91->enter($__internal_9011d4d4c9e6fa088b093ca0518a37cb72151495b817087dce9a0dde9bb1dc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20dd3e29ef093548931fa5c7e993342b4e5335e809bafc47e8bf85db724f245a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dd3e29ef093548931fa5c7e993342b4e5335e809bafc47e8bf85db724f245a->enter($__internal_20dd3e29ef093548931fa5c7e993342b4e5335e809bafc47e8bf85db724f245a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20dd3e29ef093548931fa5c7e993342b4e5335e809bafc47e8bf85db724f245a->leave($__internal_20dd3e29ef093548931fa5c7e993342b4e5335e809bafc47e8bf85db724f245a_prof);

        
        $__internal_9011d4d4c9e6fa088b093ca0518a37cb72151495b817087dce9a0dde9bb1dc91->leave($__internal_9011d4d4c9e6fa088b093ca0518a37cb72151495b817087dce9a0dde9bb1dc91_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd943befc51119f5d8434fe9519c37020bb98165ccda9a44df2060eb1b6d843d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd943befc51119f5d8434fe9519c37020bb98165ccda9a44df2060eb1b6d843d->enter($__internal_dd943befc51119f5d8434fe9519c37020bb98165ccda9a44df2060eb1b6d843d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_819f605c0ad02a79130d8efeab9a8e288ad9d418cdfc388e901747783e60337f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819f605c0ad02a79130d8efeab9a8e288ad9d418cdfc388e901747783e60337f->enter($__internal_819f605c0ad02a79130d8efeab9a8e288ad9d418cdfc388e901747783e60337f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_819f605c0ad02a79130d8efeab9a8e288ad9d418cdfc388e901747783e60337f->leave($__internal_819f605c0ad02a79130d8efeab9a8e288ad9d418cdfc388e901747783e60337f_prof);

        
        $__internal_dd943befc51119f5d8434fe9519c37020bb98165ccda9a44df2060eb1b6d843d->leave($__internal_dd943befc51119f5d8434fe9519c37020bb98165ccda9a44df2060eb1b6d843d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 57,  215 => 52,  203 => 12,  199 => 11,  195 => 10,  191 => 9,  186 => 8,  177 => 7,  160 => 5,  142 => 58,  140 => 57,  134 => 53,  132 => 52,  127 => 49,  121 => 47,  118 => 46,  113 => 44,  109 => 43,  104 => 42,  102 => 41,  98 => 40,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  69 => 27,  63 => 25,  57 => 23,  55 => 22,  45 => 15,  42 => 14,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Bibliography Manager {% block pageTitle %}{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/root.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/basic.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/header.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/footer.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/layout.css') }}\" />
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    </head>
    <body>
    <header>
        <section class=\"header_left\"><h1>Bibliography Manager</h1></section>
        <section class=\"header_right\">
            {% if is_granted('ROLE_USER') %}
                <h3><a href=\"{{ path('security_logout') }}\">Logout</a></h3>
            {% else %}
                <h3><a href=\"{{ path('security_login') }}\">Login</a></h3>
            {% endif %}
            {{ app.user ? app.user.email }}
        </section>
    </header>
     </section>
    </header>
    <main>

        <section class=\"side_nav\">
            <ul>
                <li><h3><a href=\"{{ path('reference_index') }}\">Public References</a></h3></li>
                <li><h3><a href=\"{{ path('bibliography_index') }}\">Lecturer Bibliographies</a></h3></li>
                <li><h3><a href=\"{{ path('tag_index') }}\">Public Tags</a></h3></li>
                <li><h3><a href=\"{{ path('tag_proposed') }}\">Proposed Tags</a></h3></li>
                <li><h3><a href=\"{{ path('reference_basket_index') }}\">New Bib References</a></h3></li>
                {% if is_granted('ROLE_USER') %}
                    <li><h3><a href=\"{{ path('reference_user') }}\">My References</a></h3></li>
                    <li><h3><a href=\"{{ path('bibliography_user') }}\">My Bibliography</a></h3></li>
                    <li><h3><a href=\"{{ path('tag_user') }}\">My Tag</a></h3></li>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                <li><h3><a href=\"{{ path('admin_index') }}\">Admin</a></h3></li>
                {% endif %}
            </ul>
         </section>

        {% block body %}{% endblock %}

    </main>


        {% block javascripts %}{% endblock %}

    <footer>
        <section>
            <h3>Laura McLoughlin - B00092153</h3>
        </section>
   </footer>
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\web3_project\\app\\Resources\\views\\base.html.twig");
    }
}
