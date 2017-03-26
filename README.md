<h1 align="center"><img src="http://www.powerlink.co.il/blog/wp-content/uploads/2015/07/PowerlinkLOGO1.png"></h1>

# Powerlink RestAPI

This is an up to date wrapper for the Powerlink.co.il REST API. 
we initially found working with the API to be a bit frustrating and hopefully this wrapper will make everything easy for you.

More information about the Powerlink REST API can be found at

http://www.powerlink.co.il/community-view-all-page.aspx?subject=32

Please email support@powerlink.co.il if you find any bugs.

## index

+ <a href="#create">Create</a>
+ <a href="#update">Update</a>
+ <a href="#delete">Delete</a>
+ <a href="#query">Query</a>


## Authentication
To make a REST API call, you must include request headers including the Authorization header
Find you <a href="https://secure.powerlink.co.il/workpad/admin/leadform.aspx">TOKENID<a/>

## Create

URL: 
```
https://secure.powerlink.co.il/api/record/{ObjectID}
```
Method: 
```
POST
```
Json exemple:
```javascript
{
 "accountname" : "משה",
 "telephone1" : "036339060",
 "idnumber" : "1234",
 "billingcity" : "תל אביב"
}
```


## Update

URL: 
```
https://secure.powerlink.co.il/api/record/{ObjectID}/{id}
```
Method: 
```
PUT
```
Json exemple:
```javascript
{
 "accountname" : "משה",
 "telephone1" : "036339060",
 "idnumber" : "56789",
 "billingcity" : "ירושלים"
}
```

## Delete

URL: 
```
https://secure.powerlink.co.il/api/record/{ObjectID}/{id}
```
Method: 
```
DELETE
```

## Query

URL: 
```
https://secure.powerlink.co.il/api/query
```
Method: 
```
POST
```
Type of query:

Field | Description | exemple
------|------------ | --------------------
**=** | find result equal | "query": "(idnumber  **=** 1234)"
**!=** | find result not equal | "query": "(idnumber  **!=** 1234)"
**start-with** | find if the string start with the string |  "query": "(idnumber **start-with** 1234567)"
**end-with** | find if the string end with the string | "query": "(idnumber **end-with** 1234567)"
**not-start-with** | find if the string not start with the string | "query": "(idnumber **not-start-with** 1234567)"
**not-end-with** | find if the string not end with the string | "query": "(idnumber **not-end-with** 1234567)"

You can combining the AND and OR Conditions

**Note**

+ AND & OR conditions allow you to test multiple conditions.
+ Don't forget the order of operation parentheses!

 Go to your <a href="http://powerlink.co.il">Powerlink account</a> and let's start!
