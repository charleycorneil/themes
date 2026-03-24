## Assignment 3: WordPress Child Theme

### Child Themes

A child theme is a WordPress theme that inherits the design and functionality of another theme, called the parent theme. Child themes are recommended because they allow developers to make customizations without editing the original parent theme files directly. This is important because parent themes can receive updates, and any direct edits to parent files would be lost. In this project, I created a child theme for my Assignment 2 theme so I could safely customize the layout while preserving the original theme. The `Template:` field in the child theme’s `style.css` connects the child theme to the parent by matching the exact parent folder name, which in my case is `cc-metro-theme`.

### Template Hierarchy

WordPress uses a template hierarchy to determine which file should be used to display content. It always looks for the most specific template first and falls back to more general templates only if needed. When a child theme is active, WordPress checks the child theme before checking the parent theme. In my submission, I included `single.php` and `page.php` in the child theme folder. Because those files exist in the child theme, WordPress uses them instead of the parent theme’s versions. This shows how the child theme can override specific templates without changing the parent files.

### Real-World Reflection

One specific customization I made was changing the child theme’s `single.php` so single posts display a visible “Child Theme Single Post Layout” label and more prominent post metadata. This improves the reading experience by making important article information easier to notice. I also customized `page.php` with a page banner so static pages have a more distinct structure. These changes help make the site easier to scan while also showing how child themes can be used to improve layout without risking parent theme updates.
