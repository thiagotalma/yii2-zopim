# Zopim for Yii2

This extension provides easy way to add Zopim chat in your Yii2 application.

Based on https://github.com/cybercog/yii2-google-analytics

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require thiagotalma/yii2-zopim "*"
```

or add

```json
"thiagotalma/yii2-zopim": "*"
```

to the require section of your `composer.json` file.

## Usage

In your `/views/layouts/main.php` add
 
```php
use talma\zopim\widgets\ZopimScript;
```

Then before `</head>` add following code

```php
<?= ZopimScript::widget(
    [
        'appId' => 'XXXXXXXX'
    ]
) ?>
```

## Advanced usage

If you need the output without `script` tag to combined with `registerJs` or `registerJsFile` as `renderPartial` to add dependency or positioning configuration, you can use *omitScriptTag* **true** to disable `script` tag, example:

```php
<?= $this->registerJs(
    ZopimScript::widget([
        'appId' => 'XXXXXXXX',
        'omitScriptTag' => true
    ]), \yii\web\View::POS_END
); ?>
```
