---
layout: UnderZ
---
# Check value type
Check if the given value is function.


***


## Check if its function
```js
_z.isFunction(anyObject);
```

* **_z** to access UnderZ library.
* **isFunction** method/action name.
* **anyObject** Any value to check.

> **Returns:** true OR false _boolean_


***


## Examples

```js 
var num = 1;
var str = "test";
var arr = [1, 'a'];
var foo = function(a){ return a * 2; }

_z.isFunction(num); // false
_z.isFunction(str); // false
_z.isFunction(arr); // false
_z.isFunction(foo); // true
``` 