# UCLA IoES Blocks
Custom plugin to manage WordPress blocks. 

## Use cases currently functional

1. Disable unsupported blocks

## To do

1. Disable or enable blocks to custom post types

---

## How to use

In `ucla-ioes-blocks.js` unregister block slugs to disable in editor. 

### Example

If block slug is `core/columns` then add unregisterBlockType

```
wp.blocks.unregisterBlockType( 'core/columns' );
wp.blocks.unregisterBlockType( 'core/latest-comments' );
```

To find out name of a block slug, view source and get name from data-type element.

---
## Functions
- [use_block_editor_for_post_type( string $post_type ): bool](https://developer.wordpress.org/reference/functions/use_block_editor_for_post_type/)

## Hooks

Two hooks introduced to WordPress specifically for enqueueing block assets.

- `enqueue_block_editor_assets` – This can be used to enqueue block scripts and styles in the admin editor only.
- `enqueue_block_assets` – This is used to enqueue block scripts and styles in both the admin editor and frontend of the site.

---
## Links

### WordPress Codex
- [WordPress Blocks](https://wordpress.org/support/article/blocks/)
- [Code Reference: enqueue_block_editor_assets](https://developer.wordpress.org/reference/hooks/enqueue_block_editor_assets/)

### Blog posts
- [Enqueueing scripts and styles for gutenberg blocks by Jason YingLing](https://jasonyingling.me/enqueueing-scripts-and-styles-for-gutenberg-blocks/)

---
## Contributors

- [Scott Gruber](https://github.com/scottgruber)
