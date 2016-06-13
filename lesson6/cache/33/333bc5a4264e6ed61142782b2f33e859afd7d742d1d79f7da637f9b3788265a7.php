<?php

/* main.html */
class __TwigTemplate_8554872ecdd3e4fb6735323e2b39db1a3c4b1a9f2dfdbdd9f43db8fda1c2032d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <!-- Bootstrap core CSS -->
    <link href=\"/Application/templates/styles/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"/Application/templates/styles/bootstrap/css/blog.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script type=\"text/javascript\"
            src=\"http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js\"
            charset=\"UTF-8\"></script>
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<div class=\"blog-masthead\">
    <div class=\"container\">
        <nav class=\"blog-nav\">
            <a class=\"blog-nav-item active\" href=\"/index.php\">Главная</a>
            <a class=\"blog-nav-item\" href=\"#\">Все новости</a>
            <a class=\"blog-nav-item\" href=\"#\">Обучение</a>
            <a class=\"blog-nav-item\" href=\"#\">Студенты</a>
            <a class=\"blog-nav-item\" href=\"#\">О нас</a>
        </nav>
    </div>
</div>

    <div class=\"container\">

        ";
        // line 54
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
        <div class=\"row\">
            <div class=\"col-sm-8 blog-main\">

            ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
                <nav>
                    <ul class=\"pager\">
                        <li><a href=\"#\">Предыдущая</a></li>
                        <li><a href=\"#\">Следующая</a></li>
                    </ul>
                </nav>

            </div><!-- /.blog-main -->

            <div class=\"col-sm-3 col-sm-offset-1 blog-sidebar\">
                <div class=\"sidebar-module sidebar-module-inset\">
                    <h4>О курсе</h4>

                    <p>Учебный курс PHP-2 Академии программирования Profit</p>
                </div>
                <div class=\"sidebar-module\">
                    <h4>Три последних новости</h4>
                    <ol class=\"list-unstyled\">

                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last"]) ? $context["last"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["one"]) {
            // line 81
            echo "                        <li>
                            <a href=\"/controllers/news/article/?id=";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["one"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["one"], "title", array()), "html", null, true);
            echo "</a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </ol>
                </div>
                <div class=\"sidebar-module\">
                    <h4>Ссылки</h4>
                    <ol class=\"list-unstyled\">
                        <li><a href=\"https://github.com/Mike0712/php2-profit\">GitHub</a></li>
                        <li><a href=\"#\">Twitter</a></li>
                        <li><a href=\"#\">Facebook</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div><!-- /.container -->

<footer class=\"blog-footer\">
    <p>Blog template built for <a href=\"http://getbootstrap.com\">Bootstrap</a> by <a
            href=\"https://twitter.com/mdo\">@mdo</a>.</p>

    <p>
        <a href=\"#\">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"../../dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 54
    public function block_header($context, array $blocks = array())
    {
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 59,  174 => 54,  169 => 6,  130 => 85,  119 => 82,  116 => 81,  112 => 80,  90 => 60,  88 => 59,  82 => 55,  80 => 54,  29 => 6,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="ru">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="/Application/templates/styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="/Application/templates/styles/bootstrap/css/blog.css" rel="stylesheet">*/
/* */
/*     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*     <script type="text/javascript"*/
/*             src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js"*/
/*             charset="UTF-8"></script>*/
/*     <script src="../../assets/js/ie-emulation-modes-warning.js"></script>*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* */
/* <div class="blog-masthead">*/
/*     <div class="container">*/
/*         <nav class="blog-nav">*/
/*             <a class="blog-nav-item active" href="/index.php">Главная</a>*/
/*             <a class="blog-nav-item" href="#">Все новости</a>*/
/*             <a class="blog-nav-item" href="#">Обучение</a>*/
/*             <a class="blog-nav-item" href="#">Студенты</a>*/
/*             <a class="blog-nav-item" href="#">О нас</a>*/
/*         </nav>*/
/*     </div>*/
/* </div>*/
/* */
/*     <div class="container">*/
/* */
/*         {% block header %}{% endblock %}*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-8 blog-main">*/
/* */
/*             {% block content %}{% endblock %}*/
/* */
/*                 <nav>*/
/*                     <ul class="pager">*/
/*                         <li><a href="#">Предыдущая</a></li>*/
/*                         <li><a href="#">Следующая</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/* */
/*             </div><!-- /.blog-main -->*/
/* */
/*             <div class="col-sm-3 col-sm-offset-1 blog-sidebar">*/
/*                 <div class="sidebar-module sidebar-module-inset">*/
/*                     <h4>О курсе</h4>*/
/* */
/*                     <p>Учебный курс PHP-2 Академии программирования Profit</p>*/
/*                 </div>*/
/*                 <div class="sidebar-module">*/
/*                     <h4>Три последних новости</h4>*/
/*                     <ol class="list-unstyled">*/
/* */
/*                         {% for one in last %}*/
/*                         <li>*/
/*                             <a href="/controllers/news/article/?id={{one.id}}">{{one.title}}</a>*/
/*                         </li>*/
/*                         {% endfor %}*/
/*                     </ol>*/
/*                 </div>*/
/*                 <div class="sidebar-module">*/
/*                     <h4>Ссылки</h4>*/
/*                     <ol class="list-unstyled">*/
/*                         <li><a href="https://github.com/Mike0712/php2-profit">GitHub</a></li>*/
/*                         <li><a href="#">Twitter</a></li>*/
/*                         <li><a href="#">Facebook</a></li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div><!-- /.blog-sidebar -->*/
/* */
/*         </div><!-- /.row -->*/
/* */
/*     </div><!-- /.container -->*/
/* */
/* <footer class="blog-footer">*/
/*     <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a*/
/*             href="https://twitter.com/mdo">@mdo</a>.</p>*/
/* */
/*     <p>*/
/*         <a href="#">Back to top</a>*/
/*     </p>*/
/* </footer>*/
/* */
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* <script src="../../dist/js/bootstrap.min.js"></script>*/
/* <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/* <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>*/
/* </body>*/
/* </html>*/
