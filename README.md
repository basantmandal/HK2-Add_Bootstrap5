# HK2 Adds Bootstrap 5 - Support in Magento2

HK2 Add Bootstrap 5 Module adds Bootstrap 5 Support in the Default or Active Theme. Bootstrap 5 is the newest version of
Bootstrap and is the world's most popular framework for building responsive, mobile-first sites. Bootstrap is an
open-source framework that allows you to create responsive, professional-looking websites with ease.

For backward compatibility you can also select Bootstrap 4 from Module Configuration - Available at Magento Admin -> HK2
Add Bootstrap 5.

> Please note:- This Module enables Bootstrap 5 in Magento Frontend not in Admin/Backend.

## 💰 Account & Pricing

This is a Open Source - Free to use Module. No charge or any fee is there to use it.

## 🧐 Features

1. It uses Bootstrap 5 CDN - Reduces Server Load & Offers better performance, reliability, and security.
2. It loads Bootstrap CSS, Only If Enabled from Admin Backend.
3. No Page Slow Loading Issues.
4. Uses minified version of Bootstrap 5 CSS.
5. Open Source - Feel Free to send your suggestions of any changes/improvements, will be happy to add the changes.
6. Backward Compatibility for Bootstrap 4

## 🚀 Supported Version

- Magento v2.3.5, 2.4.x

## How to install

### Method 1: Install ready-to-paste package

[Download Link - HK2 - Add Boostrap5 - (https://github.com/basantmandal/HK2-Add_Bootstrap5/releases/tag/2.0.0)](https://github.com/basantmandal/HK2-Add_Bootstrap5/releases/tag/2.0.0)

Download the zip package and unzip it in app/code folder.

## Enable Extension

```bash
php bin/magento module:enable HK2_AddBootstrap5
```

```bash
php bin/magento setup:upgrade
```

```bash
php bin/magento setup:static-content:deploy
```

```bash
php bin/magento cache:flush
```

## Disable Extension

```bash
php bin/magento module:disable HK2_AddBootstrap5
```

```bash
php bin/magentosetup:upgrade
```

```bash
php bin/magento cache:flush
```

## Backend Settings

Login to Magento Admin -> Add Bootstrap5 -> Configuration -> Enable

Please clear the cache after enabling the option.

Once Installed, You can check in Magento Frontend - View Page Source (Right Click - View Page Source) & you can see
Bootstrap 5 CDN is Added. Please check the screenshot in case you have any doubts.

Note:- This module enables Bootstrap CDN in Magento Frontend.

### Method 2: Install via composer (Recommend)

Run the following command in Magento 2 root folder

```bash
composer require hk2/addbootstrap5
```

```bash
php bin/magento setup:upgrade
```

```bash
php bin/magento setup:static-content:deploy
```

Note: It is always recommended to install and verify the extension first in the development or staging environment and
once verified then install it on production environment.

## Screenshots

1. Admin Panel - Settings
   ![Screenshot1](docs/images/ScreenShot1.png)

2. Boostrap5 CSS - Addition
   ![Screenshot2](docs/images/ScreenShot2.png)

3. Boostrap5 Demo
   ![Screenshot3](docs/images/ScreenShot6.jpg)

4. Boostrap4 Demo
   ![Screenshot4](docs/images/ScreenShot7.jpg)

## 🛠️ Maintenance mode

You may want to enable the maintenance mode when installing or updating the module, especially when working on a production website. To do so, run the two commands below before and after running the other setup commands:

### Enable Maintenance Mode

```bash
php bin/magento maintenance:enable
```

### Disable Maintenance Mode

```bash
php bin/magento maintenance:disable
```

## 🤫 Privacy

This extension does not read, change, store, or transmit any of your personal data (e.g., logins, passwords, messages, contacts) from any of the sites or your computer in absolutely any form.

## 📫 Support

For support or any bug report or changes mail me at - <support@hashtagkitto.co.in>

## 🐞 Bug Report

Please open an [issue](https://github.com/basantmandal/HK2-Add_Bootstrap5/issues) on GitHub.

When filing a bug remember that the better written the bug is, the more likely it is to be fixed.

You can also reach us at <support@hashtagkitto.co.in>

## 🍰 Contribution Guidelines 💖

Contributions are welcome! If you’d like to contribute to this project:

- Fork the repository.
- Create a new branch (git checkout -b feature/your-feature-name).
- Make your changes and commit them (git commit -am 'Add new feature').
- Push to the branch (git push origin feature/your-feature-name).
- Open a pull request.

**Please Note** :- I may be a bit delayed in responding or slow in responding due to low amount of free time. I apologize for the inconvenience and I appreciate your patience

## 🤝 Consent

By using any Product/Module/Application from Basant Mandal A.K.A (HK2 - Hash Tag Kitto), you hereby consent to our disclaimer and agree to its terms.

## 📢 Disclaimer

> **Basant Mandal (HK2 - Hash Tag Kitto)** does not make any warranties about the completeness, reliability and accuracy of this image or its related products. Any action you take upon the information you find here is strictly at your own risk.

> **Basant Mandal (HK2 - Hash Tag Kitto)** will not be liable for any losses and/or damages in connection with the use of our website.

## 💖Like my work? Help Us

Please rate my project or give some stars at [https://github.com/basantmandal/HK2-Add_Bootstrap5-Magento-Module](https://github.com/basantmandal/HK2-Add_Bootstrap5-Magento-Module). You can also contribute to make my Open Source Contribution more frequent and help others - [https://www.buymeacoffee.com/basantmandal](https://www.buymeacoffee.com/basantmandal) or [https://www.basantmandal.in/buymecoffee](https://www.basantmandal.in/buymecoffee)

## 📫 Feedback

If you have any feedback, please reach out to us at <support@hashtagkitto.co.in>

## 🔗 Links:

Feel free to reach me through the below handles if you'd like to contact me.

[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://www.basantmandal.in/)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/basantmandal/)

## 📜 License:

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)
