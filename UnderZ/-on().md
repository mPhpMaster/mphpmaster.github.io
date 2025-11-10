---
layout: UnderZ
---
# Bind or trigger an event on an element.
Attach a function executes when event triggered.


***


## Bind click event
```js
_z(selector).on("click", function);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to bind blur event with. _( you can send DOM element or selector)_
* **on** method/action name.
* **"click"** event name.
* **function** function to execute when event triggered. **It can be anonymous function**

> **Returns:** _Object_ \_z(selector)

> To unbind an event: [Unbind event](http://underz.hlack.net/UnderZ/-un()#unbind-an-event)


***


## Trigger click event
```js
_z(selector).trigger("click");
```

* **selector** select element by selector to trigger blur event on. _( you can send DOM element or selector)_
* **trigger** method/action name.
* **"click"** event name to trigger.

> **Returns:** _Object_ \_z(selector)


***


## Unbind an event
```js
_z(selector).un("click", [function]);
```

* **selector** select element by selector to unbind **"click"** event. _( you can send DOM element or selector)_
* **un** method/action name.
* **"click"** event name to unbind.
* **function** (**optional**) if you like to unbind click event that triggers specific function.

> **Returns:** _Object_ \_z(selector)


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

> Recommended: bind events in [.ready()](http://underz.hlack.net/UnderZ/-ready()) to execute the event when the document is fully loaded.
