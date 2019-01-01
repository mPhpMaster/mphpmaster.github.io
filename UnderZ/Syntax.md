---
layout: default
---
# UnderZ Syntax
With UnderZ you select HTML elements and perform any actions on them.


**Basic syntax is**: _z(selector).action()
* **_z** to access UnderZ library.
* **selector** to "query (or find)" HTML elements. **UnderZ uses CSS syntax to select elements**.
* **action** to be performed on the element(s).

## Examples
```js
// hides the current element
_z(this).hide();

//hides all <div> elements
_z("div").hide();

// hides all elements with class="className"
_z(".className").hide();

// hides the element with id="idName"
_z("#idName").hide();
```

