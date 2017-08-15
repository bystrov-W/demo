<?php

/* login.tmpl */
class __TwigTemplate_148a2c8215906541d57683b9bb4fc25c0cf23d8ea30d56f45d2ec42c037685f1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Список дел — авторизация</title>
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
\t</head>
\t<body>
\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h1>Регистрация и авторизация</h1>
\t\t\t\t\t<form role=\"form\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"login\">Логин</label>
\t\t\t\t\t\t\t<input type=\"login\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"login\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"password\">Пароль</label>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"password\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" name=\"authorization\">Авторизироваться</button>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-info\" name=\"registration\">Зарегистрироваться</button>
\t\t\t\t\t</form>
\t\t\t\t\t";
        // line 28
        if (array_key_exists("message", $context)) {
            // line 29
            echo "\t\t\t\t\t<p class=\"bg-primary\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <footer class=\"footer\">
      <div class=\"container\">
        <p class=\"text-muted\"><br/><br/><br/><br/></p>
      </div>
    </footer>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 31,  50 => 29,  48 => 28,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.tmpl", "/home/c/cf41307/kindsoft.ru/public_html/5.2/templates/login.tmpl");
    }
}
