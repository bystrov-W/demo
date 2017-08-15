<?php

/* header.tmpl */
class __TwigTemplate_3060ec58bb13a0fed0ac80ed94becca30c7bc11b6afcb7cbdbaf052d21ae727e extends Twig_Template
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
        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"ru\">
\t<head>
\t    <meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
        echo "</title>
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-default\">
\t\t  <div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"index.php\">Список дел</a>
\t\t\t</div>
\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t</ul>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t<p class=\"navbar-text\">Пользователь: ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user", array()), "html", null, true);
        echo "</p>
\t\t\t<li><a href=\"login.php?exit\">Выйти</a></li>
\t\t\t</ul>
\t\t\t</ul>
\t\t  </div>
\t\t</nav>";
    }

    public function getTemplateName()
    {
        return "header.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 27,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.tmpl", "/home/c/cf41307/kindsoft.ru/public_html/5.2/templates/header.tmpl");
    }
}
