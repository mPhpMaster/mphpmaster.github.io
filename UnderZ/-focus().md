---
layout: UnderZ
---
# Bind or trigger a focus event on an element.
Execute a function when the form field gets focus. or trigger focus event for an element.


## Bind focus event
```
_z(selector).focus(function);
```

* **_z** to access UnderZ library.
* **selector** select element by selector to bind focus event with. _( you can send DOM element or selector)_
* **focus** method/action name.
* **function** function to execute when a form field gets focus. **It can be anonymous function**

> **Returns:** _z(selector) _Object_

> This method is a shortcut for _z(selector).on( "focus", function).
> 
> To unbind focus event: [Unbind focus event](https://hlack.github.io/UnderZ/-focus()#unbind-focus-event)

## Trigger focus event
```
_z(selector).focus();
```

* **selector** select element by selector to trigger focus event on. _( you can send DOM element or selector)_
* **focus** method/action name.

> **Returns:** _z(selector) _Object_

## Unbind focus event
```
_z(selector).un("focus", [function]);
```

* **selector** select element by selector to trigger focus event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"focus"** event name to unbind.
* **function** (**optional**) if you like to unbind focus event that triggers specific function.

> **Returns:** _z(selector) _Object_

## Examples

```html
<input type="text" id="text" value="Show Message & Change Title">
<input type="text" value="Change Title" class="btnCTitle">
<input type="text" value="Unbind 'Change Title' event" class="btnUBEvent">

<script>
// bind focus event by element id
_z("#text").focus(function () { 
	alert("Focus in!");
});

// bind focus event by element tag - this will bind the event with all elements with "input" tag.
_z("text").focus(function () { 
	// set title as the element value
	document.title = _z(this).val();
});

// unbind focus event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("focus");
});


// trigger focus event
_z(".btnCTitle").focus(); // change document title to 'Change Title'
_z("#button").focus(); // alert 'Focus in!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind focus event on .btnCTitle button
</script>

```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
