---
layout: UnderZ
---
# Check value type
Check if the given value is string.


***


## Check if its string
```js
_z.isString(anyObject);
```

* **_z** to access UnderZ library.
* **isString** method/action name.
* **anyObject** Any value to check.

> **Returns:** true OR false _boolean_


***


## Examples

```js 
var x = 1;
var test = "test";
var y = [1, 'a'];

_z.isString(x); // false
_z.isString(test); // true
_z.isString(y); // false
```