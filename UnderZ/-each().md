---
layout: UnderZ
---
# Loop for each value
Iterate over object/array, executing a function for each value.

***

## Loop with array
```js
_z.each( array, callback, args );
```

* **_z** to access UnderZ library.
* **each** method/action name.
* **array** array to Iterate over.
* **callback** the function that will be executed on every value.
* **args** (**optional**) arguments to send it as arguments when callback executed.

> **Returns:** array (first argument) _array_.

***

## Loop with DOM elements
```js
_z(selector).each( callback, args );
```

* **_z** to access UnderZ library.
* **each** method/action name.
* **selector** select element/s by selector to loop over. _( you can send DOM element or selector)_
* **callback** the function that will be executed on every value.
* **args** (**optional**) arguments to send it as arguments when callback executed.

> **Returns:** \_z(selector) __z_.

***

## Examples: 

```js 
// array to loop over
var array = [ 1, "a", [ 3 ] ];

_z.each( array, function(index, value) {
// log the value if its a number.
    if( _z.isNumber(value) ) console.log(value);
});

// bind argument to loop
var dataToAttach = [ 123, "second arg" ];

// element/s to loop over
_z("input").each(function( index, element ) {
// index = dataToAttach[0];
// element = dataToAttach[1];

// change input value
    _z(this).val( "-" );
}, dataToAttach);
``` 
