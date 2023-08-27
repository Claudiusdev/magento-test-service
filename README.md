# magento-test-service Module
This module is a test to simulate a real scenario which updates product quantity throught a thrdy part service, track log on DB and show this in a grid for the admin users.

### Installation instructions:

Download the module and Unzip the package in app/code directory
```bash
$ bin/magento module:enable Custom_Service
$ bin/magento setup:upgrade
```
If you are in production mode, do not forget to recompile and redeploy the static resources.

The Log grid could then be accessed at Custom Service > Log menu created in the admin section.
