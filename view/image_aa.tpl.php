<?php

// echo("In image_aa.tpl.php!<br/>");

$class = isset($class)
    ? $class
    : null;

// $class .= " light";

$alt = isset($alt)
    ? " alt=\"$alt\""
    : null;

// var_dump($GLOBALS["app"]);

if ($GLOBALS['app']->session->has("theme")) {
    $theme = $GLOBALS['app']->session->get("theme");
    // echo("theme = ");
    // var_dump($theme);
}
else {
    $theme["class"] = "default";
}


    if (isset($theme["class"])) {
        // echo("\nflashImageClass in theme = ");
        // var_dump($flashImageClass);

        // Jag får inte appendToVariable() att fungera!
        // $GLOBALS['app']->theme->appendToVariable("flashImageClass", $theme["class"]);

        // echo("\nflashImageClass in theme = ");
        // var_dump($flashImageClass);
        $flashImageClass .=  " " . $theme["class"];
        $GLOBALS['app']->theme->setVariable("flashImageClass", $flashImageClass);
        $themeClassList = $GLOBALS['app']->theme->getVariable("flashImageClass");
        // echo("<br/> " . "themeClassList = " . "<br/>");
        // var_dump($themeClassList);
        // echo("flashImageClass = ");
        // var_dump($flashImageClass);

        // array_unshift($themeClassList, $flashImageClass);

        // var_dump($themeClassList);

        $flashImageClass = $themeClassList;

    }
    else {
        $theme["class"] = "default";
    }

// echo("flashImageClass in theme = ");
// $themeClassList = $GLOBALS['app']->theme->getVariable("flashImageClass");

// echo("flashImageClass = " . $flashImageClass);

// array_unshift($themeClassList, $flashImageClass);

// var_dump($themeClassList);

$flashImageClass = $themeClassList;

$href = isset($href)
    ? " href=\"$href\""
    : null;

$title = isset($title)
    ? " title=\"$title\""
    : null;

$hrefStart = null;
$hrefEnd = null;
if (isset($href)) {
    $hrefStart = "<a $href $title>";
    $hrefEnd = "</a>";
}

switch($theme['class']) {
    case "base":
    case "base2":
    case "light":
        // echo("base/base2/light!");
        $src = "img/color-1792501_640-bw-cropped1.jpg";
    case "dark":
    case "color":
    case "typography":
        $src = "img/color-1792501_640-cropped1.jpg";
}

?><?= $hrefStart ?>
<img <?= $this->classList($flashImageClass) ?> src="<?= $this->asset($src) ?>"<?= $alt ?>>
<?= $hrefEnd ?>


<?php
// var_dump($themeClassList);
// ?>
