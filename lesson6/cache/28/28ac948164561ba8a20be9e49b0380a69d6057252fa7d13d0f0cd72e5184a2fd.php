<?php

/* article.html */
class __TwigTemplate_5cfa8fbe9f7c7c11364977048d9de3de7790ccf2b6aa92a587314ea7cab2697e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "article.html", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"blog-header\">
    <h1 class=\"blog-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"lead blog-description\">Курс PHP-2</p>
</div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"blog-post\">
    <p>Автор: ";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "author", array())) ? ($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "author", array())) : ("Нет автора")), "html", null, true);
        echo "</p>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "lead", array()), "html", null, true);
        echo "</p>
</div><!-- /.blog-post -->
";
    }

    public function getTemplateName()
    {
        return "article.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  57 => 15,  54 => 14,  51 => 13,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'main.html' %}*/
/* */
/* {% block title %}{{ article.title }}{% endblock %}*/
/* */
/* {% block header %}*/
/* <div class="blog-header">*/
/*     <h1 class="blog-title">{{ article.title }}</h1>*/
/* */
/*     <p class="lead blog-description">Курс PHP-2</p>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="blog-post">*/
/*     <p>Автор: {{ article.author.author ?: 'Нет автора'}}</p>*/
/*     <p>{{ article.lead }}</p>*/
/* </div><!-- /.blog-post -->*/
/* {% endblock %}*/
