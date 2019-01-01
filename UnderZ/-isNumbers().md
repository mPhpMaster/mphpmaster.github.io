---
layout: UnderZ
---
# Check multiple values if it's a numeric value.
Determine whether a value of an array is number.

## Check value/s
```z.isNumbers( [anyObject] );```

* **_z** to access UnderZ library.
* **isNumbers** method/action name.
* **[anyObject]** Array of any type to check.

> **Returns:** true|false _boolean_

## Examples

```html
<script>
var x = [1, 2, 3];
var y = ['a', 'b'];
var ex1 = [1, 'a', 2];
var ex2 = [1, [2], 3];

_z.isNumbers(x); // true
_z.isNumbers(y); // false
_z.isNumbers(ex1); // false 
_z.isNumbers(ex2); // false
</script>

```
