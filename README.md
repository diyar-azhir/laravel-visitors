# laravel-visitors

In the project's composer.json file, add bellow:

<code>"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/fhsinchy/inspire"
  }
]</code>

Then run the command: <code>composer require diyar/visitors</code>

After the package is being installed, head to config/app.php and add: Diyar\Visitors\Providers\VisitorsProvider::class in the package service providers
