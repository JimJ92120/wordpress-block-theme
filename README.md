# WordPress Block Theme

A WordPress theme enabling Full Site Editing and Block theme functionalities.  
It makes use of WordPress `6.0` (or above) and Gutenberg plugin `13.0` (or above) latest introduced features.

---
---
## Features

- theme.json
- templates and parts using blocks only as `html` files
- style variations registration in `styles/` directory
- block patterns registration in `patterns/` directory


---
---
## Directory and files structure
```bash
parts/ # register custom template parts
patterns/ # register theme patterns
styles/ # register additional styles as theme.json
templates/ # register custom page templates
composer.json
functions.php # add and register theme functionalities
index.php
style.css # default theme stylesheet
theme.json # reregister theme supports, settings and styling functionalities
```


---
---
## Requirements

|              |          |
|--------------|----------|
| `PHP`        | `^7.4`   |


Others:
- [WordPress](https://wordpress.org/download/releases/) - `^6.0`
- [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) - `^13.0`


---
---
## Setup

### Install

#### Via `git`
```bash
git clone https://github.com/JimJ92120/wordpress-block-theme.git
```

#### Via `composer`
```bash
composer require jimj92120-wordpress-theme/wordpress-block-theme
```

---
---
## Documentation

- [Full Site Editing Documentation](https://developer.wordpress.org/block-editor/getting-started/full-site-editing/)
- [Block Theme Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/)
- [fullsiteediting.com](https://fullsiteediting.com/)
- [WordPress 6.0 block patterns](https://make.wordpress.org/core/2022/05/02/new-features-for-working-with-patterns-and-themes-in-wordpress-6-0/#comment-43005)
- [Theme style variations](https://fullsiteediting.com/lessons/global-style-variations/)
