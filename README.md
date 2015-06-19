# Count and Limit fieldtype for Statamic

A Statamic fieldtype to count and/or limit character input.

![Screenshot](https://photos-2.dropbox.com/t/2/AAAdbYyg4pf4t5LH8_QE_eNgxLMefmDZxRGoru53zx9w8w/12/1113046/png/32x32/1/_/1/2/Screenshot%202015-06-19%2013.38.53.png/CNb3QyABIAIgAyAEIAUgBiAHKAEoAg/qxD2O_6hy2tDFvU5km8K5_N4v3OdC-gWG0x4QE4Q9Pw?size=1280x960&size_mode=2)

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

