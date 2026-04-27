# Changelog

## 1.0.2 - 2026-04-27
- Replaced text-only site title rendering with a clickable logo image reference (`logo/logo.png`) via child-theme CSS.
- Removed WooCommerce breadcrumb trail ("Home / Shop") using a WooCommerce hook removal in `functions.php`.
- Added `logo/README.md` documenting where to place the logo file.

## 1.0.1 - 2026-04-27
- Added block-theme WooCommerce template overrides (`templates/archive-product.html`, `templates/single-product.html`, taxonomy/product pages) that mirror Retrospect's page wrapper structure.
- Added dedicated templates for cart, checkout, and my-account pages to force the same column/wrapper layout used by normal pages.

## 1.0.0 - 2026-04-27
- Initial Tom Watson Audio child theme scaffold for Retrospect.
- Added WooCommerce-compatible template (`woocommerce.php`) to reuse normal page structure.
- Added scoped WooCommerce styling tweaks in `assets/css/woocommerce.css`.
