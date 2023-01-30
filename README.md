# Etsy PHP API Wrapper  

[![Version](https://poser.pugx.org/breakpoint/etsy-php/version)](//packagist.org/packages/breakpoint/etsy-php)
[![Total Downloads](https://poser.pugx.org/breakpoint/etsy-php/downloads)](//packagist.org/packages/breakpoint/etsy-php)

This library aims to provide an easy way to access all methods of the [Etsy](https://etsy.com) API.  The structure is based on the organization of the [Etsy API documentation](https://www.etsy.com/developers/documentation/reference/apimethod). Methods are organized based upon their "Type" such as Listing, User, etc. 

### Table of Contents
- [Quick Start](#quick-start)
- [Requests](#requests)
- [Results](#results)
- [OAuth](#oauth-requests)
- [Provisional Users](#provisional-users)
- [Advanced](#advanced)
- [Development](#development)

### Quick Start

Install via [Composer](http://getcomposer.org/) by running:

```bash
composer require breakpoint/etsy-php
```

Usage to access all featured listings:

```php
$esty = new \breakpoint\etsy\EtsyClient('your-keystring', 'your-secret');
$results = $etsy->listing->findAllFeaturedListings();

foreach ($results as $item) {
    echo $item->listing_id;
}
```

### Requests

All requests originate with the `EtsyClient` object and are referenced as properties.  These generally correspond to the Etsy API documentation with some variations.  Three additional types are included but not documented: `application`, `baseline` and `server`.  These are only referenced by results from the getMethodTable method.

```php
$etsy->listing-> // method found in API documentation
```

#### Parameters

Parameters are specified using an array passes directly into the method you are performing.

```php
$etsy->listing->getListing(['listing_id' => '123abc']);
```

#### Fields

If you wish to specify [fields](https://www.etsy.com/developers/documentation/getting_started/resources#section_fields) to be returned then specify them first as an array.

```php
$etsy->listing->fields(['listing_id', 'title', 'description', 'url'])->getListing(['listing_id' => '123abc']);
```

#### Associations

Etsy allows you to request additional [Associations](https://www.etsy.com/developers/documentation/getting_started/resources#section_associations) be returned with your request.  You must specify these first as an array.

```php
$etsy->shop->associations(['Listings' => [
                'scope' => 'draft',
                'limit' => 10,
                'offset' => 0,
                'select' => array('listing_id', 'title'),
                // you can also specify sub-associations
                //'associations' => // scope, limit, select, etc
                ]])
                ->getShop(['shop_id' => '123abc']);
```

#### Data

All `PATCH`, `POST` and `PUT` requests also accept an array of data.

```php
$etsy->userprofile->updateUserProfile(

    // first array is parameters
    ['user_id', 'user_123'], 
    
    // second array is data you are changing
    ['first_name' => 'john', 'last_name' => 'developer']);
```

## Results

The `POST` method will always return an `EtsyObject` as the response.  The `GET` method will return either a `EtsyResults` or `EtsyObject` based on how many items are expected to be returned.  If you are fetching a listing then an `EtsyObject` will be returned while if you are fetching active listings then `EtsyResults` will be returned.

All other requests (`PUT`, `PATCH`, `DELETE`) will return a `true` or `false` depending upon their response.

*Note: return values have been generated automatically then manually reviewed.  Please create an issue or pull request if value is not as expected.*  

### EtsyResults

The `EtsyResults` object is a simple iterable and array accessible collection.  All items within the collection are instances of `EtsyObject`. A few basic methods are available:

```php
$results = $etsy->listing->findAllFeaturedListings();

$results[0]; // access the item at that position
$results->count(); // returns number of items
$results->first(); // access the first item
$results->add(object); // useful if you are performing requests with multiple pages
```

### EtsyObject

This simple object allows you to access the individual results as properties via magic methods.

```php
$listing = $etsy->listing->getListing(['listing_id' => 'listing_123']);

echo $listing->title;
echo $listing->getType(); // 'Listing'
```

## OAuth Requests

All methods which require a [permission scope](https://www.etsy.com/developers/documentation/getting_started/oauth#section_permission_scopes) will need oauth access via an access and secret token.  An easy way to generate these is by using `y0lk/oauth1-etsy`.  You'll specify these values when creating the `EtsyClient` object.

```php
$esty = new \breakpoint\etsy\EtsyClient('your-keystring', 'your-secret', 'access_token', 'token_secret');
```

## Provisional Users

By default, only the user who owns the application can authenticate and use it via oauth.  To allow other users to use your application you must either request "full access" via the Etsy developers site or by adding them as [provisional users](https://groups.google.com/g/etsy-api-v2/c/_TA7DrM2uSU/m/rSs2INR9orQJ).  This is made possible by two included method calls:

```php
$etsy->application->addProvisional(['user_id' => 'user_123']);
$etsy->application->removeProvisional(['user_id' => 'user_123']);

// returns all users with access
$etsy->application->getProvisional();
```

## Advanced

If you prefer to receive the full response then use the `raw()` function on your request.

```php
$raw = $etsy->listing->raw()->getTrendingListings();
```

## Development

The `generate.php` file is included which creates resources based upon all known types returned from the API.  This is meant to serve as a starting point when major changes are made to the API.

```shell
php generate.php
```