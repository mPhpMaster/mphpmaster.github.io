---
layout: UnderZ
---
# Bind or trigger a click event on an element.
Execute a function when an element is clicked. or trigger click event for an element.


## Bind click event
```js
_z(selector).click(function);
```

* **_z** to access UnderZ library.
* **selector** select element by selector to bind click event with. _( you can send DOM element or selector)_
* **click** method/action name.
* **function** function to execute when selected element is clicked. **It can be anonymous function**

> **Returns:** _Object_ \_z(selector)

> This method is a shortcut for _z(selector).on( "click", function).
> 
> To unbind click event: [Unbind click event](http://underz.hlack.net/UnderZ/-click()#unbind-click-event)

## Trigger click event
```js
_z(selector).click();
```

* **selector** select element by selector to trigger click event on. _( you can send DOM element or selector)_
* **click** method/action name.

> **Returns:** _Object_ \_z(selector)

## Unbind click event
```js
_z(selector).un("click", [function]);
```

* **selector** select element by selector to trigger click event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"click"** event name to unbind.
* **function** (**optional**) if you like to unbind click event that triggers specific function.

> **Returns:** _Object_ \_z(selector)

## Examples

```html
<button id="button">Show Message & Change Title</button>
<button class="btnCTitle">Change Title</button>
<button class="btnUBEvent">Unbind "Change Title" event</button>

<script>
// bind click event by element id
_z("#button").click(function () { 
	alert("Button clicked!");
});

// bind click event by element tag - this will bind the event with all elements with "button" tag.
_z("button").click(function () { 
// set title as clicked button text
	document.title = _z(this).text();
});

// unbind click event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("click");
});


// trigger click event
_z(".btnCTitle").click(); // change document title to 'Change Title'
_z("#button").click(); // alert 'Button clicked!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind click event on .btnCTitle button
</script>

```

> Recommended: bind events in [.ready()](http://underz.hlack.net/UnderZ/-ready()) to execute the event when the document is fully loaded.
