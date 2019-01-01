---
layout: UnderZ
---
# Loop for each value and change it
Iterate over object/array, executing a function for each value.

***

## Loop with array/object
```
_z.for( array, callback, context );
```

* **_z** to access UnderZ library.
* **for** method/action name.
* **array** array to Iterate over.
* **callback** the function that will be executed on every value. if this function returned _false_ the loop will break, returning any value will change the element value.
* **context** (**optional**) bind new context with callback function. 

> **Returns:** array _array_.

***

## Loop with DOM elements
```
_z(selector).for( callback, context );
```

* **_z** to access UnderZ library.
* **for** method/action name.
* **selector** select element/s by selector to loop over. _( you can send DOM element or selector)_
* **callback** the function that will be executed on every value. if this function returned _false_ the loop will break, returning any value will change the element value.
* **context** (**optional**) bind new context with callback function. 

> **Returns:** array _array_.

***

## Examples: 

```js 
// array to loop over
var array = [ 1, "a", [ 3 ] ];

_z.for( array, function(index, value) {
// log the value if its a number.
    if( _z.isNumber(value) ) console.log(value);

    console.log( this ); // value
});

// change callback context loop
var contextToAttach = [ 1234, "second argument" ];

// element/s to loop over
_z("input").for(function( index, element ) {
// index = element index;
// element = element;

    console.log( this ); // [ 1234, "second argument" ]
}, contextToAttach);

// loop and change values
var lArray = [4, 1, "a", 100, 2, 3];
_z.for(lArray, function() {
    if( _z.isNumber(this) && this > 2 )
        return "replaced element - " + this;
}); // ["new value - 4", 1, "a", "new value - 100", 2, "new value - 3"]


``` 
