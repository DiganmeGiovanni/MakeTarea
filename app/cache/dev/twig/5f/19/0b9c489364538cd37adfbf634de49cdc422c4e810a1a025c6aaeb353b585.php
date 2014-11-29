<?php

/* maketareaBundle:Default:login.html.twig */
class __TwigTemplate_5f190b9c489364538cd37adfbf634de49cdc422c4e810a1a025c6aaeb353b585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("maketareaBundle::principal.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "maketareaBundle::principal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "maketareaBundle:Default:menuIndex.html.twig");
        echo "
    <article>
        <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\" id='form-login' class=\"fdark\">
            <legend>Login</legend>
            <div class=\"fdark-errs\">
                ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</span>
                ";
        }
        // line 13
        echo "            </div>
            <fieldset class=\"fdark-fset\">
                <input class=\"fdark-inpt fdark-inpt-big\" name='_username' id='username' placeholder='email' value=\"\">
                <br><br>
                <input class=\"fdark-inpt fdark-inpt-big\" type='password' name='_password' id='password' placeholder='password'>
                <br><br>
            </fieldset>
            <fieldset class='fdark-submit-area'>
                <br>
                <input class='fdark-btn' type='submit' value=\"Iniciar Sesion\">
                <input type=\"hidden\" name=\"_target_path\" value=\"/app\">
                <br>
            </fieldset>
        </form>
    </article>
    
";
    }

    public function getTemplateName()
    {
        return "maketareaBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 11,  45 => 10,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
