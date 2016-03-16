Hamcrest Callback Matcher
=========================

Usage:
```php
assertThat("hello", matchesUsing(function($value) { return $value === "hello"; }));
```

Creating new custom matchers
----------------------------
Creating new custom matchers is made simpler with the callback matcher.

```php
function myCustomMatcher()
{
    return describedAs('should be a test object', new CallbackMatcher(
        function($value) {
            return $value === 'my custom value';
        }
    )
}
```
