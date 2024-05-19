<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/common/config/bootstrap.php');
require(__DIR__ . '/frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/common/config/main.php'),
    require(__DIR__ . '/common/config/main-local.php'),
    require(__DIR__ . '/frontend/config/main.php'),
    require(__DIR__ . '/frontend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();

?>

<div style="display: none;">
<a href="https://apps.du.ac.in/-/slot88/">slot88</a>
<a href="https://apps.du.ac.in/-/smaxwin/">slot maxwin</a>
<a href="https://apps.du.ac.in/-/sgacor/">slot gacor</a>
<a href="https://apps.du.ac.in/-/scatter-hitam/">scatter hitam</a>
<a href="https://dohfp.uk.gov.in/mis/products/sdemo/">slot demo</a>
<a href="https://dohfp.uk.gov.in/mis/products/sgacor/">slot gacor</a>
<a href="https://dohfp.uk.gov.in/mis/products/spulsa/">slot pulsa</a>
<a href="https://dohfp.uk.gov.in/mis/products/scatter-hitam/">scatter hitam</a>
</div>
