# Tom Watson Audio Child (Retrospect child theme)

This repository is an uploadable WordPress **child theme** for your hosted site at:
`https://www.tomwatsonaudio.co.uk`

It is intentionally minimal and focuses on one goal:
- keep the existing Retrospect visual style and page structure
- make WooCommerce pages render inside the same normal content layout used by Home/Posts pages

## Files included

- `style.css` (required theme header + child metadata + logo replacement for site title + Woo breadcrumb removal styling support)
- `functions.php` (parent/child style enqueue + WooCommerce support)
- `woocommerce.php` (classic-template fallback for non-block Woo setups)
- `templates/archive-product.html` and `templates/single-product.html` (block-template overrides matching Retrospect page wrappers)
- `templates/taxonomy-product_cat.html` and `templates/taxonomy-product_tag.html` (product taxonomy pages use same wrapper as shop)
- `templates/page-cart.html`, `templates/page-checkout.html`, `templates/page-my-account.html` (forces key Woo pages onto the same wrapper as normal pages)
- `assets/css/woocommerce.css` (small scoped WooCommerce visual/layout adjustments)
- `logo/README.md` (location for `logo/logo.png` used by the site-title logo replacement)

## How to zip this child theme

From inside the theme folder (this repository root), create a zip with the folder name:

```bash
cd ..
zip -r tom-watson-audio-child.zip wordpress-theme
```

If you prefer a cleaner folder name in WordPress, rename the repo folder before zipping so the zip contains a single top-level folder such as `tom-watson-audio-child/`.

## Upload via WordPress dashboard

1. Log in to WordPress admin.
2. Go to **Appearance → Themes**.
3. Click **Add New**.
4. Click **Upload Theme**.
5. Select your zip file.
6. Click **Install Now**.

## Activate the child theme

1. After install completes, click **Activate** on **Tom Watson Audio Child**.
2. Visit the front end and clear any caches (plugin/CDN/browser) if enabled.

## What to test after activation

Check each of these page types:

1. **Home** page (style/layout unchanged)
2. **Posts** page and an individual post (style/layout unchanged)
3. **Shop / catalog**
4. **Product category/tag** pages
5. **Single product** page
6. **Basket / cart**
7. **Checkout**
8. **My Account**

### Expected result

- Sidebar/overall structure should match the normal site layout.
- WooCommerce content should appear inside the usual main content area.
- No duplicate logo/header block above WooCommerce content.
- Product grids, forms, cart tables and buttons should be readable and visually consistent.

## Roll back safely (if needed)

If anything looks wrong:

1. Go to **Appearance → Themes**.
2. Activate **Retrospect** (parent theme) again.
3. Purge caches.
4. Re-check pages.

This immediately restores the old rendering while you refine the child theme.
