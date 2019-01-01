---
layout: UnderZ
---
# Merge multiple objects.
Create a new object and assign all given objects to it.


## Merge object
```z.extendObjects(...Objects);```

* **_z** to access UnderZ library.
* **extendObjects** method/action name.
* **...Objects** Objects as arguments.

> **Returns:** All given ...Objects _Object_


## Examples

```html
<script>
// Object 1
var obj1 = { "name": "hlaCk" };
// Object 2
var obj2 = { "status": true, "len": 1 };
// Object 3
var obj3 = { "data": { "var": "val" } };

// Merge Object 1, Object 2 and Object 3
_z.extendObjects(obj1, obj2, obj3); // { "name": "hlaCk", "status": true, "len": 1, "data": { "var":"val" } }
</script>

```
