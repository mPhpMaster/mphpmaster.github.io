---
layout: UnderZ
---
# Check value type
Check if the given value is Null.


***


## Check if its Null
```js
_z.isNull(anyObject);
```

* **_z** to access UnderZ library.
* **isNull** method/action name.
* **anyObject** Any value to check.

> **Returns:** true OR false _boolean_


***


## Examples

```js 
var num = 1;
var str = "test";
var arr = [1, 'a'];
var nll = null;

_z.isNull(num); // false
_z.isNull(str); // false
_z.isNull(arr); // false
_z.isNull(nll); // true
```

## Excpetions! 

```js
undefined == null // true
undefined === null // false
_z.isUndefined(null) // false
_z.isNull(undefined) // false

```