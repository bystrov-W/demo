<?php

/* index.tmpl */
class __TwigTemplate_cace950a24f2446faca6154976eb56bb414323b839c9929c205b417e4cf48586 extends Twig_Template
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
        echo "﻿\t<div class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t<h1>Список дел</h1>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<form role=\"form\" method=\"post\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"text\">Название</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
        // line 9
        if ((array_key_exists("action", $context) && (($context["action"] ?? null) == "change"))) {
            echo twig_escape_filter($this->env, ($context["change"] ?? null), "html", null, true);
        }
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"idForChanging\" value=\"";
        // line 10
        if ((array_key_exists("action", $context) && (($context["action"] ?? null) == "change"))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["idForChanging"] ?? null), "html", null, true);
        }
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" name=\"add\">Сохранить</button>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<form role=\"form\" method=\"post\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"text\">Сортировать по</label>
\t\t\t\t\t\t<select class=\"form-control\" name=\"sortOption\">
\t\t\t\t\t\t\t<option value=\"1\">задаче</option>
\t\t\t\t\t\t\t<option value=\"2\">статусу</option>
\t\t\t\t\t\t\t<option value=\"3\">дате добавления</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-info\" name=\"sort\">Сортировать</button>
\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br/>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t<h2>Задачи, поставленные вами</h2>
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Задача</th>
\t\t\t\t\t\t\t<th>Статус</th>
\t\t\t\t\t\t\t<th>Дата добавления</th>
\t\t\t\t\t\t\t<th>Ответственный</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>Операции</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 43
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "is_done", array()) == 0)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t";
                $context["status"] = "Не выполнено";
                // line 45
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t\t";
                $context["status"] = "Выполнено";
                // line 47
                echo "\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "date_added", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listOfUsers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "assigned_user_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array()))) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "login", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<form role=\"form\" method=\"post\" class=\"form-inline\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"assignUser\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listOfUsers"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "login", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "login", array()) != twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user", array())))) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["value"], "login", array()), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"idForChanging\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-xs\">Назначить</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span><a href=\"?action=change&id=";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()), "html", null, true);
            echo "\">Изменить</a></span>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<span><a href=\"?action=done&id=";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()), "html", null, true);
            echo "\">Выполнить</a></span>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<span><a href=\"?action=delete&id=";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "id", array()), "html", null, true);
            echo "\">Удалить</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t<!-- вторая таблица -->
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<h2>Задачи, поставленные для вас</h2>
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Задача</th>
\t\t\t\t\t\t\t<th>Статус</th>
\t\t\t\t\t\t\t<th>Дата добавления</th>
\t\t\t\t\t\t\t<th>Операции</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["roww"]) {
            // line 94
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["roww"], "is_done", array()) == 0)) {
                // line 95
                echo "\t\t\t\t\t\t\t\t";
                $context["status"] = "Не выполнено";
                // line 96
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t\t\t\t";
                $context["status"] = "Выполнено";
                // line 98
                echo "\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["roww"], "description", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["roww"], "date_added", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td><span><a href=\"?action=done&id=";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["roww"], "id", array()), "html", null, true);
            echo "\">Выполнить</a></span></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roww'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
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
        return "index.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 106,  233 => 103,  229 => 102,  225 => 101,  221 => 100,  218 => 99,  215 => 98,  212 => 97,  209 => 96,  206 => 95,  203 => 94,  199 => 93,  185 => 81,  176 => 78,  171 => 76,  166 => 74,  157 => 68,  154 => 67,  148 => 66,  140 => 64,  137 => 63,  133 => 62,  126 => 57,  120 => 56,  114 => 54,  111 => 53,  107 => 52,  103 => 51,  99 => 50,  95 => 49,  92 => 48,  89 => 47,  86 => 46,  83 => 45,  80 => 44,  77 => 43,  73 => 42,  35 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.tmpl", "/home/c/cf41307/kindsoft.ru/public_html/5.2/templates/index.tmpl");
    }
}
