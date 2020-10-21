---
layout: UnderZ
---
# Bind or trigger a blur event on an element.
Execute a function when the form field loses focus. or trigger blur event for an element.


## Bind blur event
```
_z(selector).blur(function);
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to bind blur event with. _( you can send DOM element or selector)_
* **blur** method/action name.
* **function** function to execute when a form field loses blur. **It can be anonymous function**

> **Returns:** _Object_ \_z(selector)

> This method is a shortcut for **_z(selector).on( "blur", function)**.
> 
> To unbind blur event: [Unbind blur event](http://underz.decodercan.com/UnderZ/-blur()#unbind-blur-event)

## Trigger blur event
```js
_z(selector).blur();
```

* **selector** select element by selector to trigger blur event on. _( you can send DOM element or selector)_
* **blur** method/action name.

> **Returns:** _Object_ \_z(selector)

## Unbind blur event
```js
_z(selector).un("blur", [function]);
// Javascript code with syntax highlighting.
var fun = function lang(l) {
  dateformat.i18n = require('./lang/' + l)
  return true;
}
```

* **selector** select element by selector to trigger blur event on. _( you can send DOM element or selector)_
* **un** method/action name.
* **"blur"** event name to unbind.
* **function** (**optional**) if you like to unbind blur event that triggers specific function.

> **Returns:** _Object_ \_z(selector)

## Examples

```html
<input type="text" id="text" value="Show Message & Change Title">
<input type="text" value="Change Title" class="btnCTitle">
<input type="text" value="Unbind 'Change Title' event" class="btnUBEvent">

<script>
// bind blur event by element id
_z("#text").blur(function () { 
	alert("Focus out!");
});

// bind blur event by element tag - this will bind the event with all elements with "input" tag.
_z("text").blur(function () { 
	// set title as the element value
	document.title = _z(this).val();
});

// unbind blur event by element class.
_z(".btnUBEvent").click(function () {
	_z(".btnCTitle").un("blur");
});


// trigger blur event
_z(".btnCTitle").blur(); // change document title to 'Change Title'
_z("#button").blur(); // alert 'Focus out!' and change document title to 'Show Message & Change Title'
_z(".btnUBEvent").click(); // change document title to 'Unbind "Change Title" event' and unbind blur event on .btnCTitle button
</script>

```

> Recommended: bind events in [.ready()](http://underz.decodercan.com/UnderZ/-ready()) to execute the event when the document is fully loaded.
