## Adds Bootstrap 5 - Support in Magento2

## Description

This module adds Bootstrap 5 Support in the Default or Active Theme.

## Features

1. It used Bootstrap 5 CDN.
2. Only Uses CSS & Js, If Enabled from Admin Backend.
3. No slow loading of the page due to use of Bootstrap.

## How to install

### Method 1: Install ready-to-paste package

[Download Link - HK2 - Add Boostrap5 - (https://www.techbasant.in/modules/hk2_add_bootstrap5-1.0.0.zip)](https://www.techbasant.in/modules/hk2_add_bootstrap5-1.0.0.zip 'Link')

Download the zip package and unzip it in app/code folder.

![Screenshot4](docs/images/ScreenShot4.png)
![Screenshot5](docs/images/ScreenShot5.png)

### Method 2: Install via composer (Recommend)

Run the following command in Magento 2 root folder

```
composer require hk2/module-add-bootstrap5
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## Screenshots

1. Admin Panel - Settings
   ![Screenshot1](docs/images/ScreenShot1.png)

2. Boostrap5 CSS - Addition
   ![Screenshot2](docs/images/ScreenShot2.png)

3. Boostrap5 JS - Addition
   ![Screenshot3](docs/images/ScreenShot3.png)
