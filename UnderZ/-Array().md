---
layout: UnderZ
name: .Array()
---
# Convert variable to Array
Convert the given variable to an Array **Strings doesn't split**

***

## Make an array
```js
_z.Array( anyObject );
```

* **_z** to access UnderZ library.
* **Array** method/action name.
* **anyObject** Any variable to convert it to an array.

> **Returns:** An array with the given elements.

***

## Examples:

```js

var name = "John Smith";
var x = 12;

_z.Array(name); // ["John Smith"]
_z.toArray(name); // ["J", "o", "h", "n", " ", "S", "m", "i", "t", "h"]

_z.Array(x); // [12]
_z.Array( _z("p") ); // Array of all DOM element with tagname p

```