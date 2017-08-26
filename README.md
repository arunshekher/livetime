# Livetime
An e107 plugin that incorporates [Matt Bradley’s livestamp](https://github.com/mattbradley/livestampjs) javascript library and its dependency moment.js to e107 powered websites. 

The awesome devs at e107 inc was kind enough to add support for this library to e107 core by means of a date function `e107::getParser()->toDate();` after [this feature request](https://github.com/e107inc/e107/issues/372).

# What it does?
It will update automatically the timestamp text in the supported timestamp elements on your e107 powered website as time goes by.

# Demo
See the browser screen-cast gif animation below to see it in action, but 20x fast-forwarded.
![livetime-demo3](https://user-images.githubusercontent.com/315195/29000187-47802a26-7a75-11e7-8209-570eea38d5d1.gif)

# How to use
Its just a matter for e107 theme and plugin developers to use the above mentioned date method to parse date in their e107 projects and install this plugin. Rest is handled by the awesome javascript libraries called moment.js and livestamp.js that this plugin makes use of.

# Update Libraries
If you have bower installed, run the following command inside the livetime plugin directory to update the javascript libraries to latest versions.

```sh
# terminal

$ bower update
```  
