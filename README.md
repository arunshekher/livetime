# Livetime
An e107 plugin that incorporate [Matt Bradley’s livestamp](https://github.com/mattbradley/livestampjs) javascript library and its dependency moment.js to e107 in global or local scope. 

The awesome dev’s at e107 inc was kind enough to add support for this library to e107 core by means of a date function `e107::getParser()->toDate();` after [this feature request](https://github.com/e107inc/e107/issues/372).

# How to use
Its just a matter for themers and plugin developers to use the above method to parse date in their projects and install this plugin rest is handled by the awesome javascript libraries called moment.js and livestamp.js that it makes use of.
