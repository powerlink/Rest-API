# Create

## JSON:

```javascript
{
 "accountname" : "משה",
 "telephone1" : "036339060",
 "idnumber" : "1234",
 "billingcity" : "תל אביב"
}
```

## PHP:

```php
$json = '{
    "title": "JavaScript: The Definitive Guide",
    "author": "David Flanagan",
    "edition": 6
}';
$book = json_decode($json);
// access title of $book object
echo $book->title; // JavaScript: The Definitive Guide 
```
