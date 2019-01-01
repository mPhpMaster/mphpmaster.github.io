---
layout: UnderZ
---
# Trigger an event on an element.
Execute an event.


## Trigger event
`_z(selector).trigger("click");`

* **_z** to access UnderZ library.
* **selector** select element by the selector to bind blur event with. _( you can send DOM element or selector)_
* **trigger** method/action name.
* **"click"** event name.

> **Returns:** _z(selector) _Object_

> To bind an event: [Bind event](https://github.com/hlaCk/UnderZ/wiki/.on()#bind-click-event)

> To unbind an event: [Unbind event](https://github.com/hlaCk/UnderZ/wiki/.un()#unbind-click-event)


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

