---
layout: UnderZ
---
# Check value if it's a numeric value.
Determine whether a value is a number.


***


## Check value
```js
_z.isNumber( anyObject );
```

* **_z** to access UnderZ library.
* **isNumber** method/action name.
* **anyObject** Any value to check.

> **Returns:** true OR false _boolean_


***


## Examples

```html
<script>
var x = 12;
var y = 'a';
var ex1 = [1];
var ex2 = "123";

_z.isNumber(x); // true
_z.isNumber(y); // false
_z.isNumber(ex1); // false 
_z.isNumber(ex2); // false
</script>
```
