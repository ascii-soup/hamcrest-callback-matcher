Hamcrest Callback Matcher
=========================

Usage:
```php
assertThat("hello", matchesUsing(function($value) { return $value === "hello"; }));
```

Creating new custom matchers
----------------------------
Creating new custom matchers is made simpler with the callback matcher.

You can use `describedAs()` to provide a better description for the expectation.

```php
function myCustomMatcher()
{
    return describedAs('a custom value', new CallbackMatcher(
        function($value) {
            return $value === 'my custom value';
        }
    )
}
```
