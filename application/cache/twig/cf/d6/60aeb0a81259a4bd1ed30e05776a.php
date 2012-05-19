<?php

/* square.html */
class __TwigTemplate_cfd660aeb0a81259a4bd1ed30e05776a extends Twig_Template
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
\t<title>市集 -「茶粥」</title>

\t<link rel=\"stylesheet\" href=\"";
        // line 8
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/reset.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/common.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/css/square.css\">
\t<script src=\"";
        // line 12
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/lib/sea.js\" data-main=\"";
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/js/squareinit\"></script>\t
\t
</head>

<body>
\t<div id=\"wrap\">

\t\t<div id=\"top\">
\t\t\t<div id=\"logo\">
\t\t\t\t<h1>茶粥</h1>
\t\t\t</div>

\t\t\t<div id=\"profile\">
\t\t\t\t<div id=\"userId\" style=\"display: none;\">";
        // line 25
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "userId"), "html", null, true);
        echo "</div>
\t\t\t\t<div id=\"pic\"><img src=\"";
        // line 26
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "picurl"), "html", null, true);
        echo "\"></div>
\t\t\t\t<div id=\"username\">
\t\t\t\t\t<a href=\"\">离席</a>
\t\t\t\t\t<p>欢迎，";
        // line 29
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"content\">
\t\t\t<div id=\"square\">
\t\t\t\t<h2><img src=\"";
        // line 36
        if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
        echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
        echo "static/img/pattern4.png\">市集</h2>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"lslip\"></div>

\t\t\t<div id=\"latest-join\" class=\"section\">
\t\t\t\t";
        // line 42
        if (isset($context["latestjoin"])) { $_latestjoin_ = $context["latestjoin"]; } else { $_latestjoin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_latestjoin_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t\t\t<a href=\"javascript:void(0);\" name=\"";
            if (isset($context["roomid"])) { $_roomid_ = $context["roomid"]; } else { $_roomid_ = null; }
            echo twig_escape_filter($this->env, $_roomid_, "html", null, true);
            echo "\" class=\"blocka\" title=\"加入\">
\t\t\t\t\t<div name=\"";
            // line 44
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $_item_, "html", null, true);
            echo "\" class=\"ljroomsection roomsection\">
\t\t\t\t\t\t<div class=\"rs-above\">
\t\t\t\t\t\t\t<form name=\"join\" method=\"post\" action=\"";
            // line 46
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "shitsu/join\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<input name=\"roomid\" value=\"";
            // line 47
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomid"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t";
            // line 51
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomname"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "\t\t\t\t
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h3>最近进入过的茶室</h3>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"slip\"></div>

\t\t\t<div id=\"self-built\" class=\"section\">
\t\t\t\t<div id=\"self-built-inner\">
\t\t\t\t";
        // line 67
        if (isset($context["selfbuilt"])) { $_selfbuilt_ = $context["selfbuilt"]; } else { $_selfbuilt_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_selfbuilt_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "\t\t\t\t<div id=\"room";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomid"), "html", null, true);
            echo "\" class=\"relative\">
\t\t\t\t\t<a href=\"javascript:void(0);\" name=\"";
            // line 69
            if (isset($context["roomid"])) { $_roomid_ = $context["roomid"]; } else { $_roomid_ = null; }
            echo twig_escape_filter($this->env, $_roomid_, "html", null, true);
            echo "\" class=\"blocka\" title=\"加入\">
\t\t\t\t\t\t<div name=\"";
            // line 70
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomname"), "html", null, true);
            echo "\" class=\"sbroomsection roomsection\">
\t\t\t\t\t\t\t<div class=\"rs-above\">
\t\t\t\t\t\t\t\t<form name=\"join\" method=\"post\" action=\"";
            // line 72
            if (isset($context["baseurl"])) { $_baseurl_ = $context["baseurl"]; } else { $_baseurl_ = null; }
            echo twig_escape_filter($this->env, $_baseurl_, "html", null, true);
            echo "shitsu/join\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input name=\"roomid\" value=\"";
            // line 73
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomid"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</form>\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t";
            // line 77
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomname"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"rs-low\" style=\"display: none;\">
\t\t\t\t\t\t<div class=\"rsl-l\"><p>修改</p><p class=\"rid\" style=\"display: none;\">";
            // line 85
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomid"), "html", null, true);
            echo "</p></div>
\t\t\t\t\t\t<div class=\"rsl-r\"><p>注销</p><p class=\"rid\" style=\"display: none;\">";
            // line 86
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "roomid"), "html", null, true);
            echo "</p></div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 91
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h3>自己创建的茶室</h3>
\t\t\t\t</div>

\t\t\t\t<a href=\"javascript:void(0);\" id=\"msectionbtn\" class=\"blocka\" title=\"创建\">
\t\t\t\t\t<div id=\"create\" class=\"msection\">
\t\t\t\t\t\t<p>+</p>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div class=\"textinput createinput\" style=\"display: none;\">
\t\t\t\t\t<h3>  创建茶室<span>取消</span></h3><br><br>
\t\t\t\t\t<input id=\"createroom\" name=\"createroom\" type=\"text\">
\t\t\t\t\t<input id=\"createbtn\" class=\"btn\" value=\"创建\">
\t\t\t\t</div>
\t\t\t\t<div class=\"textinput modifyinput\" style=\"display: none;\">
\t\t\t\t\t<h3>  修改茶室<span>取消</span></h3><br><br>
\t\t\t\t\t<input id=\"modifyroom\" name=\"modifyroom\" type=\"text\">
\t\t\t\t\t<input id=\"modifybtn\" class=\"btn\" value=\"修改\">
\t\t\t\t\t<p style=\"display: none;\"></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"textinput destroyinput\" style=\"display: none;\">
\t\t\t\t\t<h3>  注销茶室<span>取消</span></h3><br><br>
\t\t\t\t\t<input id=\"destroybtn\" class=\"btn\" value=\"注销\">
\t\t\t\t\t<p style=\"display: none;\"></p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t\t<div class=\"slip\"></div>

\t\t\t<div id=\"anonymous\" class=\"section\">

\t\t\t</div>
\t\t</div>

\t\t<div id=\"foot\">
\t\t</div>

\t</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "square.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 91,  206 => 86,  201 => 85,  189 => 77,  181 => 73,  176 => 72,  170 => 70,  165 => 69,  159 => 68,  154 => 67,  142 => 57,  129 => 51,  121 => 47,  116 => 46,  110 => 44,  104 => 43,  99 => 42,  89 => 36,  78 => 29,  71 => 26,  66 => 25,  46 => 12,  41 => 11,  36 => 10,  31 => 9,  26 => 8,  17 => 1,);
    }
}
