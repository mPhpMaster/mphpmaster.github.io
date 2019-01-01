---
layout: UnderZ
---
# Hide an element.
Hide any element.

## Hide element
```
_z(selector).hide();
```

* **_z** to access UnderZ library.
* **selector** select element by the selector to hide. _( you can send DOM element or selector)_
* **hide** method/action name.

> **Returns:** _z(selector) _Object_

> To show an element: [Show element](https://hlack.github.io/UnderZ/-show())


## Examples

```html
<button id="button">Button !</button>
<button id="buttonHide">Hide button</button>
<button id="buttonShow">Show button</button>

<script>
// bind click event by element id
_z("#buttonHide").click(function () { 
	// hide element
	_z("#button").hide();
});

// bind click event by element id
_z("#buttonShow").click(function () { 
	// show element
	_z("#button").show();
});

</script>

```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
