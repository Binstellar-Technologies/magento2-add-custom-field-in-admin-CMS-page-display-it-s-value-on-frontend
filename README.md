## Magento2 Add custom field in Admin CMS page & display it's value on frontend

> Content Management System (CMS) Pages in Magento2 are the set of website pages used for distributing content. Magento 2 allows you to create single or multiple CMS pages for different purposes + also allows you to translate CMS pages for different locales. 

> Since there is mainly a need to have a custom option from client to add or display the content data in more similar manner but adding some more custom fields. In that case..

Wondering how to achieve that? Don't worry we have got the solution for it.

> Install our module Binstellar/CmsPageCustomField & add new custom text field in existing CMS page system.

> Adding custom fields under following path : Admin > Content > Elements > Pages > Add New Page

&nbsp;


## Installation Steps

##### Step 1 : Download the Zip file from Github & Unzip it
##### Step 2 : Create a directory under app/code/Binstellar/CmsPageCustomField
##### Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/CmsPageCustomField
##### Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade 

php bin/magento setup:di:compile

php bin/magento setup:static-content:deploy -f

php bin/magento cache:flush

&nbsp;

![image2](https://user-images.githubusercontent.com/123800304/215436196-60c89eea-b7fb-489d-b9cf-9d89be422e9e.png)


&nbsp;

![image1](https://user-images.githubusercontent.com/123800304/215436250-18d75caf-9fb5-4cea-9c26-48196e0e164a.png)


> Similarly you can also do it for text area, or other imput fields based on the requirement by make the changes in the code.
