<html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Metrics</title>
</head>
<body>

 <?php 

require_once('/view/metricsView.php');
require_once('/view/htmlPageView.php');


$view = new \view\metricsView();

$title = $view->getTitle() ;

$body = $view->getMetricsHthml();

$htmlPageView = new \view\HTMLPageView($title,$body);

$htmlPageView->echoHTML();

