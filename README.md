# Introduction

Simple text view plugin for merophp/view-engine.

## Installation

Via composer:

<code>
composer require merophp/text-view
</code>

## Basic Usage

<pre><code>require_once 'vendor/autoload.php';

use Merophp\TextViewPlugin\TextView;

use Merophp\ViewEngine\ViewEngine;
use Merophp\ViewEngine\ViewPlugin\Collection\ViewPluginCollection;
use Merophp\ViewEngine\ViewPlugin\Provider\ViewPluginProvider;
use Merophp\ViewEngine\ViewPlugin\ViewPlugin;

$collection = new ViewPluginCollection();
$collection->add(
    new ViewPlugin(TextView::class),
]);

$provider = new ViewPluginProvider($collection);

$viewEngine = new ViewEngine($provider);

$view = $viewEngine->initializeView();
$view->text('Hello world');
echo $viewEngine->renderView($view);
</code></pre>
