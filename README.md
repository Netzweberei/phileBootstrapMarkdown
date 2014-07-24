phileBootstrapMarkdown
====================

A new Flavor to cebe/markdown inspired by https://github.com/dreikanter/markdown-grid to use as a Plugin in [Phile](https://github.com/PhileCMS/Phile).

### 1.1 Installation (composer)
```
php composer.phar require ntzwbr/phileBootstrap:*
```

### 1.2 Installation (Download)

* Install the latest version of [Phile](https://github.com/PhileCMS/Phile)
* Clone or download this repo into `plugins/ntzwbr/phileBootstrap`

### 2. Activation

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins'] = array(
  'phile\\parserMarkdown' => array('active' => false), // disable the default parser
  'ntzwbr\\philebootstrap' => array('active' => true) // use parsedown
);
```
### 3. Usage

Markdown syntax extension is pretty simple. Page source example below defines
a three-column page fragment:

```markdown
-- row 5, 2, 5 --
First column contains couple of paragraphs. Lorem ipsum dolor sit amet,
consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
et dolore magna aliqua.

Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
ut aliquip ex ea commodo consequat.
---
Some images in the middle column:
![One](image-1.png)
![Two](image-2.png)
---
And some **more** text in the _third_ column. Duis aute irure dolor in
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

[Excepteur](http://excepteur.org ) sint occaecat cupidatat non proident, sunt
in culpa qui officia deserunt mollit anim id est laborum.
-- end --
```

Comma separated list of numbers after the `row` instruction is an optional
definition for columns width. This example uses 12-column Twitter Bootstrap
grid, so "5, 2, 5" corresponds to "41.5%, 17%, 41.5%" relatively to the total
page width.
