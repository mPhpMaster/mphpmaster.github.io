---
layout: UnderZ
---
# Check value type
Check if the given value is date.


***


## Check if its date
```js
_z.isDate(anyObject);
```

* **_z** to access UnderZ library.
* **isDate** method/action name.
* **anyObject** Any value to check.

> **Returns:** true OR false _boolean_


***


## Examples

```js 
var num = 1;
var str = "test";
var arr = [1, 'a'];
var date = new Date(Date.now())

_z.isDate(num); // false
_z.isDate(str); // false
_z.isDate(arr); // false
_z.isDate(date); // true

```