Remove button for GridView
==========================
Remove button for GridView asset bundle for Yii 2.0 Framework
Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist igor162/yii2-removebutton-widget "*"
```

or add

```
"igor162/yii2-removebutton-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \igor162\RemoveButton\RemoveModal::widget(); ?>


<?= \igor162\RemoveButton\RemoveAllButton::widget([
    'url' => Url::to(
        [
            'remove-items',
            'returnUrl' => Helper::getReturnUrl(),
        ]
    ),
    'gridSelector' => '.grid-view',
    'modalSelector' => 'delete-category-confirmation',
    'htmlOptions' => [
        'class' => 'btn btn-' . GridView::TYPE_DANGER . ' btn-sm',
    ],
])
?>
```