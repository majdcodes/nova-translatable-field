# Nova Translatable Field and Language Activator
Adds the ability to show and edit translated fields created with [astrotomic/laravel-translatable](https://github.com/Astrotomic/laravel-translatable) package. This is a fork of [soluzione-software/nova-translatable-field](https://github.com/soluzione-software/nova-translatable-field). It makes Boolean fields translatable, works on File fields, CKeditor, ... Language switching is synced on all fields by default.

## Installation and usage

``` php
composer require kreatorij/nova-translatable-field
```

``` php
use Kreatorij\Nova\Fields\Translatable;
```
Use it on fieds like:
``` php
Translatable::make(
	Text::make('Name', 'name')
),
```

## Language Activator
This package adds `LanguageActivator` field that shows all activated languages on Index and Detail view and changes Boolean field to BooleanGroup for easier (de)activating certain translation. Should work on other fields too, it's just we need this for `is_active` to enable certain translation.
``` php
LanguageActivator::make(
	Boolean::make('Is Activated', 'is_active')
),
```

It is set by default to use `is_active` field, but you can do
``` php
php artisan vendor:publish
```
to publish config file and change the field in `language_activation_field` option.

## Credits
Thanks to:
- [@soluzione-software](https://github.com/soluzione-software) for [soluzione-software/nova-translatable-field](https://github.com/soluzione-software/nova-translatable-field)
- [@yeswedev](https://framagit.org/yeswedev) for [YWD Nova Translatable](https://framagit.org/yeswedev/ywd_nova-translatable)
