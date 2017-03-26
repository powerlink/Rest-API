<h1 align="center"><img src="http://www.powerlink.co.il/blog/wp-content/uploads/2015/07/PowerlinkLOGO1.png"></h1>

# Powerlink RestAPI

This is an up to date wrapper for the Powerlink.co.il REST API. 
we initially found working with the API to be a bit frustrating and hopefully this wrapper will make everything easy for you.

More information about the Powerlink REST API can be found at

http://www.powerlink.co.il/community-view-all-page.aspx?subject=32

Please email support@powerlink.co.il if you find any bugs.

## index

+ <a href="#create">Create</a>
+ Update
+ Delete
+ Query

## First steps
1) Go to your Powerlink account
2) Find you TOKENID 


## Create

URL: 
```
https://secure.powerlink.co.il/api/record/{ObjectID}
```
Method: 
```
POST
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

