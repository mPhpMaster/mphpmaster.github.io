---
layout: UnderZ
---
# Execute Function/s.
Store and execute functions.


## Create function/s store
```
_z([functions]);
```

* **_z** to access UnderZ library.
* **[functions]** Function/s to store, **MUST BE IN ARRAY**.

> **Returns:** _z(function/s) _Object_


## Add function/s to store
```
_z([functions]).addThis([functions2]);
```

* **_z** to access UnderZ library.
* **[functions]** Store Function/s. _( MUST BE IN ARRAY )_
* **addThis** method/action name.
* **[functions2]** Add function/s to stored function/s.  _( you can send Function or Array of functions )_

> **Returns:** _z([functions, functions2]) _Object_

## Execute Stored function/s
```
_z([functions]).exec( boolean );
```

* **_z** to access UnderZ library.
* **[functions]** Stored function/s. _( MUST BE IN ARRAY )_
* **exec** method/action name.
* **boolean** true to execute, false to do nothing. _default: true_ _( leave this blank to execute stored functions )_

> **Returns:** _z([functions]) _Object_


## Examples

```html
<script>
// function
function setDocTitle() {
	document.title = "Way 2";
}

// create new functions store (empty)
var Myfn =_z(); // _z([])

// add function to store
Myfn.addThis(() => { console.log("Way 1"); });

// add other function to store
Myfn.addThis(setDocTitle);

// add other function to store
Myfn.addThis((function() {
	this.title = "Way 3";
}).bind(document));

// add other function
Myfn.addThis( console.log.bind(console, ["way 4"]) );

Myfn.exec(false); // _z( function/s list ); no execution

Myfn.exec(); // execute all stored function/s
Myfn.last().exec(); // execute last stored function
Myfn.first().exec(false); // get first stored function
</script>

```

> **Warning**: If the store created like: _z(FUNCTION) the function will be executed immediately. _( MUST BE IN ARRAY )_
> 
> Please read [Execute function after the document is finished loading](https://hlack.github.io/UnderZ/-ready()#method-2-short-way)

