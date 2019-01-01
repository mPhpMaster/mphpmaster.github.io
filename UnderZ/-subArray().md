---
layout: UnderZ
---
# Get part of Array
Slice Array and return the array elements with a given range.

***

## Slice an array
```js
_z.subArray( start from NUMBER, end at NUMBER, array ARRAY );
```

* **_z** to access UnderZ library.
* **subArray** method/action name.
* **start from** number of 0-based position to start from.
* **end at NUMBER** number of 0-based position to end at.

> **Returns:** sliced array _array_.

***

## Examples: 

```js 
var myArray = ["a", "o", "s", "f"]; 

_z.subArray(1, 3, myArray); // ["o", "s"]

_z.subArray(false, 3, myArray); // ["a", "o", "s"]
_z.subArray(false, -3, myArray); // ["a"]

_z.subArray( 3, false, myArray); // ["f"]
_z.subArray( -3, false, myArray); // ["o", "s", "f"]

``` 

> **Note:** subArray method also work with _z(element selector).subArray.
