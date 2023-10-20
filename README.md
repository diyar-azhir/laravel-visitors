# laravel-visitors

In the project's composer.json file, add bellow:

<code>"repositories": [
&#9;{
&#9;&#9;"type": "vcs",
&#9;&#9;"url": "https://github.com/fhsinchy/inspire"
&#9;}
]</code>

Then run the command: <code>composer require diyar/visitors</code>

After the package is being installed, head to <strong>config/app.php</strong> and add: <strong>Diyar\Visitors\Providers\VisitorsProvider::class</strong> in the package service providers section

You can use the namespase of main class of the package: <strong>use Diyar\Visitors\MyVisitorsClass</strong> to make a reference of it anywhere in your script accessing <strong>storeVisitor($str_url)</strong> method to store relevant information within database table, like so:
<code>(new MyVisitorsClass)->storeVisitor('about');</code>

To see your website's visitors, <strong>visvis</strong> <i>route</i>, has been defined by default which you can change it.
<strong>yourweb.site/visvis</strong>
