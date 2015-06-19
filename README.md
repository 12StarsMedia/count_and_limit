# Count and Limit fieldtype for Statamic

A Statamic fieldtype to count and/or limit character input. Excellent for use with meta tags.

![](https://dl.dropboxusercontent.com/u/1113046/candidioassets/count_and_limit_screenshot.png)

## Changelog ##

- 0.1.1 - Ensure ID's don't start with numbers
- 0.1.0 - Initial release

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

[12 Stars Media](http://12starsmedia.com), &copy; 2015

[@12starsmedia](http://twitter.com/12starsmedia) - [@candidio](http://twitter.com/candidio)

[Licensed under the MIT License](http://www.opensource.org/licenses/mit-license.php)

