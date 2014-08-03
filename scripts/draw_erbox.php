<?php
$entityA = $_POST['entityA'];

$a_verb_b = $_POST['a_verb_b'];
$a_card_b = $_POST['a_card_b'];

$entityB = $_POST['entityB'];

$b_verb_a = $_POST['b_verb_a'];
$b_card_a = $_POST['b_card_a'];

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Model Box Make Out v0.01</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/er.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
</head>
<body>

<svg width="620px" height="120px" xmlns='http://www.w3.org/2000/svg' version="1.1">
    <rect height="120" width="620" stroke="0" fill="white"></rect>

    <g transform="translate(7,7)">

        <!--connecting line-->
        <line x1="160" y1="50" x2="440" y2="50" stroke-width="2" stroke="black"></line>

        <?php if ($a_card_b[0] == 1) : ?>
        <!--Right Mandatory-->
        <line x1="405" y1="40" x2="405" y2="60" stroke-width="2" stroke="black"></line>
        <?php else: ?>
        <!--Right Optional-->
        <circle cx="405" cy="50" r="10" fill="white" stroke="black" stroke-width="2"></circle>
        <?php endif ?>

        <?php if ($a_card_b[1] == 1) : ?>
        <!--Right One-->
        <line x1="420" y1="40" x2="420" y2="60" stroke-width="2" stroke="black"></line>
        <?php else: ?>
        <!--Right Many-->
        <polyline fill="none" stroke="black" stroke-width="2" stroke-linecap="round"
                  points="440,40 420,50 440,60"></polyline>
        <?php endif ?>


        <?php if ($b_card_a[1] == 1) : ?>
        <!--Left Mandatory-->
        <line x1="195" y1="40" x2="195" y2="60" stroke-width="2" stroke="black"></line>
        <?php else: ?>
        <!--Left Optional-->
        <circle cx="195" cy="50" r="10" fill="white" stroke="black" stroke-width="2"></circle>
        <?php endif ?>

        <?php if ($b_card_a[0] == 1) : ?>
        <!--Left One-->
        <line x1="180" y1="40" x2="180" y2="60" stroke-width="2" stroke="black"></line>
        <?php else: ?>
        <!--Left Many-->
        <polyline fill="none" stroke="black" stroke-width="2" stroke-linecap="round"
                  points="160,40 180,50 160,60"></polyline>
        <?php endif ?>


        <!--Left Box-->
        <rect x="1" y="1" width="160px" height="100px" fill="white" stroke="black" stroke-width="2"></rect>
        <!--Right Box-->
        <rect x="440" y="1" width="160px" height="100px" fill="white" stroke="black" stroke-width="2"></rect>

        <!--Left Box Text-->
        <text text-anchor="middle" x="80" y="55" font-family="Roboto" font-size="15"
              fill="black"><?php echo $entityA; ?></text>
        <!--Right Box Text-->
        <text text-anchor="middle" x="520" y="55" font-family="Roboto" font-size="15"
              fill="black"><?php echo $entityB; ?></text>

        <!--Left Verb Right-->
        <text text-anchor="start" x="165" y="30" font-family="Roboto" font-size="15"
              fill="black"><?php echo $a_verb_b; ?></text>
        <!--Right Verb Left-->
        <text text-anchor="end" x="435" y="85" font-family="Roboto" font-size="15"
              fill="black"><?php echo $b_verb_a; ?></text>

</svg>

<?php print "
<pre>
$entityA $a_verb_b $a_card_b $entityB
$entityB $b_verb_a $b_card_a $entityA
</pre>"; ?>
<a href="exportToHTML/draw_erbox.php.html" target="_blank">Link to PHP code for this page.</a>
</body>
</html>