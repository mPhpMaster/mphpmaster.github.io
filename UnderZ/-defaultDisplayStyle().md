---
layout: UnderZ
---
# Default CSS display for an element.
Get default css display value for element tag.


***


## Get default display style
```js
_z(selector).defaultDisplayStyle();
```

* **_z** to access UnderZ library.
* **selector** select element by selector to get default style. _( you can send DOM element or selector)_
* **defaultDisplayStyle** method/action name.

> **Returns:** CSS Display Property _String_


***


## Get default display style for element tag
```js
_z().defaultDisplayStyle( tagname );
```

* **_z** to access UnderZ library.
* **defaultDisplayStyle** method/action name.
* **tagname** Get default display style value for this tag. _( you CAN NOT send DOM element, must be HTML tagname)_

> **Returns:** CSS Display Property _String_


***


## Examples

```html
<button id="textdg" style="display: grid;">Display grid</button>
<button id="textdf" style="display: flex;">Display flex</button>
<button id="textdib" style="display: inline-block;">Display inline block</button>

<script>
// bind click event to all buttons
_z("button").click(function () { 
	alert( _z(this).defaultDisplayStyle() ); // default button css display is: inline-block
});

// get default CSS display value for div
alert( _z().defaultDisplayStyle( "div" ) ); // default button css display is: block
</script>

```

> Recommended: bind events in [.ready()](https://hlack.github.io/UnderZ/-ready()) to execute the event when the document is fully loaded.
