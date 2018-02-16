# Laravel SocialShare

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Social-Share/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Social-Share)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-social-share.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Social-Share.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Social-Share/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Social-Share.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Social-Share)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-social-share
```

## Usage

``` php
Share::delicious(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::digg(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::evernote(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::facebook(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::gmail(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::googleplus(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::linkedin(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::pinterest(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::reddit(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::scoopit(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::springpad(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::tumblr(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::twitter(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::viadeo(route('post.show', $post->id), $post->title, $post->thumbnail);
Share::vkcom(route('post.show', $post->id), $post->title, $post->thumbnail);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
