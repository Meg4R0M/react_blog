# Icon Component

Generate the HTML code for using a SVG symbol from a SVG sprite.

## Usage

```twig
{% from components_root ~ 'icon/icon.twig' import icon %}
{{ icon('name') }}

With a custom URL and prefix:
{{ icon('name', {url: '/path/to/sprite.svg#prefix-%s'}) }}

For inline sprites:
{{ icon('name', {url: '#icon-%s'}) }}

Custom dimensions:
{{ icon('name', {width: 100}) }}
{{ icon('name', {width: 200, height:60}) }}
```

## Parameters

```yml
# name (symbol id)
- string

# optional settings
- url: string  # sprite URL pattern, defaults to '#icon-%s'
  width: number|string  # width attribute, defaults to 16
  height: number|string  # height attribute, defaults to width
```
