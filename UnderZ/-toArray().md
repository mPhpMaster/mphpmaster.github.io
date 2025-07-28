---
layout: UnderZ
---
# Convert variable to Array
Convert the given variable to an Array **Strings do split**


***


## Convert to array
```js
_z.toArray( anyObject );
```

* **_z** to access UnderZ library.
* **toArray** method/action name.
* **anyObject** Any variable to convert it to an array. _(convert **Strings** to **Character array**)_

> **Returns:** _Array_ An array with the given elements.


***


## Examples: 

```js
var x = {};
var x["data"] = 123;
var x["data1"] = "more data"; 


_z.toArray(x); // [{data:123, data1:"more data"}]
_z.toArray("abc"); // ['a', 'b', 'c']
_z.toArray(123); // [123]
_z.toArray( _z("button") ); // array of DOM element with tag button
```