# Laravel Web Installer

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

- [About](#about)
- [Requirements](#requirements)
- [Installation](#installation)
- [Routes](#routes)
- [Usage](#usage)
- [Contributing](#contributing)
- [Help](#help)
- [Screenshots](#screenshots)
- [License](#license)

## About

Do you want your clients to be able to install a Laravel project just like they do with WordPress or any other CMS?
This Laravel package allows users who don't use Composer, SSH etc to install your application just by following the setup wizard.
The current features are :

- Check For Server Requirements.
- Check For Folders Permissions.
- Ability to set database information.
    - .env text editor
    - .env form wizard
- Migrate The Database.
- Seed The Tables.

## Requirements

* [Laravel 5.5+](https://laravel.com/docs/installation)

## Installation

Via Composer

``` bash
$ composer require minasyans/installer
```

## Routes

* `/install`
* `/update`

## Usage

* **Install Routes Notes**
    * In order to install your application, go to the `/install` route and follow the instructions.
    * Once the installation has ran the empty file `installed` will be placed into the `/storage` directory. If this file is present the route `/install` will abort to the 404 page.

* **Update Route Notes**
    * In order to update your application, go to the `/update` route and follow the instructions.
    * The `/update` routes countes how many migration files exist in the `/database/migrations` folder and compares that count against the migrations table. If the files count is greater then the `/update` route will render, otherwise, the page will abort to the 404 page.

* Additional Files and folders published to your project :

|File|File Information|
|:------------|:------------|
|`config/installer.php`|In here you can set the requirements along with the folders permissions for your application to run, by default the array cotaines the default requirements for a basic Laravel app.|
|`resources/views/installer`|This folder contains the HTML code for your installer, it is 100% customizable, give it a look and see how nice/clean it is.|
|`resources/lang/en/installer_messages.php`|This file holds all the messages/text, currently only English is available, if your application is in another language, you can copy/past it in your language folder and modify it the way you want.|

## Contributing

* If you have any suggestions please let me know : https://github.com/Minasyans/installer/pulls.
* Please help us provide more languages for this awesome package please send a pull request https://github.com/Minasyans/installer/pulls.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Credits

- [RachidLaasri Installer](https://github.com/rashidlaasri/LaravelInstaller)
- [RazorMeister](https://github.com/RazorMeister/laravel-installer)

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/minasyans/installer.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/minasyans/installer.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/minasyans/installer/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/minasyans/installer
[link-downloads]: https://packagist.org/packages/minasyans/installer
[link-travis]: https://travis-ci.org/minasyans/installer
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/minasyans
[link-contributors]: ../../contributors
