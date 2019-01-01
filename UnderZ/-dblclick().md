---
layout: UnderZ
---
# Bind or trigger a double click event on an element.
Execute a function when an element is double-clicked. or trigger double click event for an element.


***


## Bind dblclick event
```js
_z(selector).dblclick(function);
```

* **_z** to access UnderZ library.
* **selector** select element by selector to bind dblclick event with. _( you can send DOM element or selector)_
* **dblclick** method/action name.
* **function** function to execute when selected element is double-clicked. **It can be anonymous function**

> **Returns:** \_z(selector) _Object_

> This method is a shortcut for _z(selector).on( "dblclick", function).
> 
> To unbind dblclick event: [Unbind dblclick event](https://hlack.github.io/UnderZ/-dblclick()#unbind-dblclick-event)


***


## Trigger dblclick event
```js
_z(selector).dblclick();
```

* **selector** select element by selector to trigger dblclick event on. _( you can send DOM element or selector)_
* **dblclick** method/action name.

> **Returns:** \_z(selector) _Object_


***


## Unbind dblclick event
```js
_z(selector).un("dblclick", [function]);
```

* **selector** select element by selector to trigger dblclick event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"dblclick"** event name to unbind.
* **function** (**optional**) if you like to unbind dblclick event that triggers specific function.

> **Returns:** \_z(selector) _Object_


***


## Examples

```html
<button id="button">Show Message & Change Title</button>
<button class="btnCTitle">Change Title</button>
<button class="btnUBEvent">Unbind "Change Title" event</button>

<script>
// bind dblclick event by element id
_z("#button").dblclick(function () { 
	alert("Button double-clicked!");
});

// bind dblclick event by element tag - this will bind the event with all elements with "button" tag.
_z("button").dblclick(function () { 
// set title as double-clicked button text
	document.title = _z(this).text();
});

// unbind dblclick event by element class.
_z(".btnUBEvent").dblclick(function () {
	_z(".btnCTitle").un("dblclick");
});


// trigger dblclick event
_z(".btnCTitle").dblclick(); // change document title to 'Change Title'
_z("#button").dblclick(); // alert 'Button double-clicked!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").dblclick(); // change document title to 'Unbind "Change Title" event' and unbind dblclick event on .btnCTitle button
</script>

```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
