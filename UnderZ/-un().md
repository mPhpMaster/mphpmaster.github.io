---
layout: UnderZ
---
# Unbind an event.
Deattach an event.


***


## Unbind click event
```js
_z(selector).un("click", function);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to bind blur event with. _( you can send DOM element or selector)_
* **un** method/action name.
* **"click"** event name.
* **function** function to execute when event triggered. **It can be anonymous function**

> **Returns:** _Object_ \_z(selector)

> To bind an event: [Bind event](http://underz.hlack.net/UnderZ/-on())


***


## Examples

```html
<button id="button">Change Title</button>
<button id="buttonBind">Bind event</button>
<button id="buttonUnbind">Unbind event</button>

<script>
// bind click event by element id
_z("#buttonBind").on("click", function () { 

	// bind click event.
	_z("#button").on("click", function () { 
		// set title as the element value
		document.title = _z(this).text();
	});
	
});


// unbind click event by element id
_z("#buttonUnbind").on("click", function () { 

	// unbind click event.
	_z("#button").un("click");
	
});

// bind click event by element tag name
_z("button").on("click", function () { 
	// set title as the element value
	document.title = _z(this).text();
});


// trigger click event
_z("#button").trigger("click"); // Trigger click event
</script>
```

