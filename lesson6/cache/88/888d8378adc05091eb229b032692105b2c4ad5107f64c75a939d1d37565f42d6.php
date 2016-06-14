<?php

/* index.html */
class __TwigTemplate_c03b5483e2a387415e0d21f53b9edf847dbafd910492a279263a4efc8b7276b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "index.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Новостной портал";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"blog-header\">
    <h1 class=\"blog-title\">Учебный новостной сайт</h1>

    <p class=\"lead blog-description\">Курс PHP-2</p>
</div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "<div class=\"blog-post\">

    <h2 class=\"blog-post-title\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h2>

    <p>Автор: ";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "author", array(), "any", false, true), "author", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "author", array(), "any", false, true), "author", array()), "Нет автора")) : ("Нет автора")), "html", null, true);
            echo "</p>

    <p class=\"blog-post-meta\">Узнать больше <a
            href=\"/controllers/news/article/?id=";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">Перейти к новости</a>
    </p>

    <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "lead", array()), "html", null, true);
            echo "</p>
</div><!-- /.blog-post -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  70 => 22,  64 => 19,  59 => 17,  55 => 15,  51 => 14,  48 => 13,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'main.html' %}*/
/* */
/* {% block title %}Новостной портал{% endblock %}*/
/* */
/* {% block header %}*/
/* <div class="blog-header">*/
/*     <h1 class="blog-title">Учебный новостной сайт</h1>*/
/* */
/*     <p class="lead blog-description">Курс PHP-2</p>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* {% for article in news %}*/
/* <div class="blog-post">*/
/* */
/*     <h2 class="blog-post-title">{{ article.title }}</h2>*/
/* */
/*     <p>Автор: {{ article.author.author | default('Нет автора') }}</p>*/
/* */
/*     <p class="blog-post-meta">Узнать больше <a*/
/*             href="/controllers/news/article/?id={{article.id}}">Перейти к новости</a>*/
/*     </p>*/
/* */
/*     <p>{{ article.lead }}</p>*/
/* </div><!-- /.blog-post -->*/
/* {% endfor %}*/
/* {% endblock %}*/
