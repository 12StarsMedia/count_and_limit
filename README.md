# Count and Limit fieldtype for Statamic

A Statamic fieldtype to count and/or limit character input.

![Screenshot](https://d1zjcuqflbd5k.cloudfront.net/files/acc_178269/1ksRK?response-content-disposition=inline;%20filename=Screen%20Shot%20on%202015-06-19%20at%2013%3A31%3A10.png&Expires=1434742339&Signature=VhmtPn2Mp04FMyDEqLdiCzLbvGyyWef1SDuMmXzZ9fpWOPAPxhEFd12enfTfIW1r2ytsHqwVXm4SZyPBFUs13imD74luBixw4rdB3Lo7xG4g9q2zNyzUdoUoLYAX7EbALKYe2YdNZ4EAULcyjPOkPwoMOazeAhMT--RnX5GJIQk_&Key-Pair-Id=APKAJTEIOJM3LSMN33SA)

## Changelog ##

0.1.0 - Initial release

## Installation ##

Copy the `count_and_limit` folder to the `_add_ons` folder of your Statamic website.

## Using the fieldtype ##

In your desired fieldset, give the field a type of `count_and_limit`

```
// meta-data.yaml

fields:
  seo_title:
    type: count_and_limit
    count: true
    limit: 44
    display: SEO Title
```

### Parameters ###

- `count`: (Boolean) Do you want to display the character count?
- `limit`: (Integer) The number of charaters to limit input to
- `display`: (String) The label of the field

## Authors ##

- [Todd Smith-Salter](http://twitter.com/ToddSmithSalter)

## Versioning ##

This plugin follows [Semantic Versioning](http://semver.org/)

## Legal ##

[12 Stars Media], &copy; 2015

[@12starsmedia](http://twitter.com/12starsmedia)

[Licensed under the MIT License](http://www.opensource.org/licenses/mit-license.php)

