<?php

/* test.html */
class __TwigTemplate_cd67c4fb62bd7a22ab239ef52dcc0f6f extends Twig_Template
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
\t<title>chakayu :)</title>

</head>

<body>
\t
\t<div>";
        // line 12
        if (isset($context["words"])) { $_words_ = $context["words"]; } else { $_words_ = null; }
        echo twig_escape_filter($this->env, $_words_, "html", null, true);
        echo "</div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  17 => 1,);
    }
}
