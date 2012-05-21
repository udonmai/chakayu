<?php

/* shitsu.html */
class __TwigTemplate_11b7a79a4d070becd4e8ffbbb5e4825e extends Twig_Template
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
<html>
<head>

\t<meta charset=\"utf-8\">
\t<title>茶室 -「茶粥」</title>

\t<link rel=\"shortcut icon\" href=\"";
        // line 8
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/img/favicon.ico\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/reset.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/common.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/room.css\">
\t<script src=\"";
        // line 13
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/lib/sea.js\" data-main=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/roominit\"></script>\t
\t
</head>

<body>
\t<div id=\"wrap\">
\t
\t\t<div id=\"roomid\" style=\"display: none;\">";
        // line 20
        if (isset($context["room"])) { $_room_ = $context["room"]; } else { $_room_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_room_, "roomid"), "html", null, true);
        echo "</div>
\t\t
\t\t<div id=\"content\">
\t\t\t<div id=\"chat\">
\t\t\t\t<div id=\"chatcontent\"></div>
\t\t\t\t<div id=\"chatform\">
\t\t\t\t\t<form id=\"sendform\">
\t\t\t\t\t\t<textarea id=\"msgtext\" name=\"msgtext\" wrap=\"physical\"></textarea>
\t\t\t\t\t\t<div id=\"btnarea\">
\t\t\t\t\t\t\t<input id=\"sendbtn\" value=\"发送(Ctl+↙)\" type=\"button\" class=\"btn formbtn\">
\t\t\t\t\t\t\t<input id=\"cleanbtn\" value=\"清空\" type=\"button\" class=\"btn formbtn\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"sidebar\">
\t\t\t\t<div id=\"logo\">\t
\t\t\t\t\t<div id=\"pic\"></div>
\t\t\t\t\t<h2><img src=\"";
        // line 39
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/img/pattern4.png\">茶室</h2>
\t\t\t\t\t<p>";
        // line 40
        if (isset($context["room"])) { $_room_ = $context["room"]; } else { $_room_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_room_, "roomname"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"member\"></div>
\t\t\t\t<div id=\"user\">
\t\t\t\t\t<div id=\"username\" style=\"display: none;\">";
        // line 44
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
        echo "</div>
\t\t\t\t\t<div id=\"avatar\"><img src=\"";
        // line 45
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "picurl"), "html", null, true);
        echo "\"></div>
\t\t\t\t\t<div id=\"function\">
\t\t\t\t\t\t<div id=\"leave\">
\t\t\t\t\t\t\t<form action=\"";
        // line 48
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "shitsu/leave\" method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"roomid\" value=\"";
        // line 49
        if (isset($context["room"])) { $_room_ = $context["room"]; } else { $_room_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_room_, "roomid"), "html", null, true);
        echo "\" style=\"display: none;\"/>
\t\t\t\t\t\t\t\t<button type=\"submit\">离开</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<h4>欢迎。
\t\t\t\t\t\t\t\t<p>离开请点击~</p>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p id=\"attention\">*注意如果离开时不点击按钮，可能会出现打开当前链接后自动进入未退出的茶室的情况。</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t<div>
\t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "shitsu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  113 => 48,  106 => 45,  101 => 44,  93 => 40,  88 => 39,  65 => 20,  51 => 13,  46 => 12,  41 => 11,  36 => 10,  31 => 9,  26 => 8,  17 => 1,);
    }
}
