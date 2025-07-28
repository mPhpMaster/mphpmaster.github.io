---
layout: UnderZ
---
# Get Object/Array/String Size
Return the size of object.


***


## Object size.
```js
_z.size(anyObject);
```

* **_z** to access UnderZ library.
* **size** method/action name.
* **anyObject** Object to return length of.

> **Returns:** _Number_ size of given object.


***


## Examples

```js
var array = [ 'a', 1, [] ];
var obj = { 'a': 1, 1: [] };
var str = "abcd";

_z.size(array); // 3
_z.size(obj); // 2
_z.size(str); // 4
```