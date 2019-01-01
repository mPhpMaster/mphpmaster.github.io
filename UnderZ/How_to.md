---
layout: UnderZ
---
# How TO.
How to use UnderZ.


***


# How to include the library in my project?
1. Get the library file [_z.js](https://github.com/hlaCk/UnderZ/blob/master/_z.js) and place it in your project folder.
2. Include the library in your html file inside `<head>` tag, **better if it is The First JavaScript Include**: 


```html
<head>
<script type="text/javascript" src="_z.js"></script>
</head>
```

3. Done!.


***


# How to initiate the code when the library starts?
1. Edit the **script** tag and add **underZ** attribute to it:

```html
<head>
<script type="text/javascript" src="_z.js" underZ></script>
</head>
```

2. Type your code inside the tag:

```html
<head>
<script type="text/javascript" src="_z.js" underZ>
// add variable to library
_z.var = [ "data", 123 ];
// edit the var variable
_z.var["data2"] = { "char": 'c', "num": 9 };

// clone the library to new var
$ = _z;
</script>
</head>
```

3. When the page loads the library, your code will be executed immediately; even if the page is not ready.


