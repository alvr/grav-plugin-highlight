# Grav Prism Highlighter Plugin

`Prism Highlighter` is a [Grav](http://github.com/getgrav/grav) plugin that adds simple and powerful code highlighting functionality utilizing the [Prism.js](http://prismjs.com/) syntax highlighter.

# Installation

At this time, this plugin is not avaiable via Grav Package Manager (GPM). To install you can clone the project. In the Grav root folder, execute:

```git
cd /user/plugins/
git clone https://github.com/alvr/grav-prism-highlight.git prism
```

Or download the [latest release](https://github.com/alvr/grav-prism-highlight/releases/latest) and upload it to `/user/plugins/`

# Languages included

Prism.js supports currently [119 languages](http://prismjs.com/#languages-list), at the time of this edit.

# Usage

In your markdown, you can create a block of code, and assign the language to it. You can choose between the list above. Example:

```
```java
  import java.util.HashSet;

  public class Program {
      public static void main(String[] args) {

    // Create HashSet.
    HashSet<String> hash = new HashSet<>();
    hash.add("castle");
    hash.add("bridge");
    hash.add("castle"); // Duplicate element.
    hash.add("moat");

    // Display size.
    System.out.println(hash.size());

    // See if these three elements exist.
    System.out.println(hash.contains("castle"));
    System.out.println(hash.contains("bridge"));
    System.out.println(hash.contains("moat"));
      }
  }```
  ```

You can also override the default theme for a page.

In the expert mode, add to the Frontmatter:

```
prism:
    theme: dark
```

You can choose between:

```
default
coy
dark
funky
okaidia
solarized-light
twilight
```

Check out a [live test](http://prismjs.com/test.html) or a [live demo](http://prismjs.com/index.html#examples).