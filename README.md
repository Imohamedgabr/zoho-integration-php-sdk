
# zoho-integration-php-sdk
I couldn't find this in 1 place so hopefully this helps any one.
<br />
1- Clone the Repo
<br />
2- run composer install
<br />
3-You have to head to the developer console in your zoho account here
<br />
https://api-console.zoho.com/client/1000.Y6V56HT5XZ9KX6T7C5ZSZT5E1J8E9H

and add a Self client and add scope of
"
ZohoCRM.modules.custom.all,ZohoCRM.modules.contacts.all,ZohoCRM.modules.accounts.all,ZohoCRM.modules.deals.all,ZohoCRM.modules.events.all,ZohoCRM.modules.tasks.all,ZohoCRM.modules.calls.all,ZohoCRM.modules.invoices.all,ZohoCRM.modules.pricebooks.all,ZohoCRM.modules.salesorders.all,ZohoCRM.modules.purchaseorders.all,ZohoCRM.modules.products.all,ZohoCRM.modules.cases.all,ZohoCRM.modules.solutions.all,ZohoCRM.modules.vendors.all,ZohoCRM.modules.quotes.all,ZohoCRM.modules.ALL,ZohoCRM.settings.ALL,ZohoCRM.users.ALL,ZohoCRM.org.ALL,aaaserver.profile.ALL,ZohoCRM.settings.functions.all,ZohoCRM.functions.execute.read,ZohoCRM.functions.execute.create,ZohoCRM.settings.layout_rules.read,ZohoCRM.notifications.all,ZohoCRM.mass_update.Accounts.update,ZohoCRM.mass_update.Leads.update,ZohoCRM.bulk.read,ZohoFiles.files.ALL,ZohoCRM.bulk.CREATE
"
<br />
4- Call the genToken() method first to add the token in your file
<br />
5- Make sure you read the token correctly
