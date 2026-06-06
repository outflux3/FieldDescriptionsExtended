# Field Descriptions Extended

A ProcessWire module that extends field descriptions in the admin by splitting them into a short visible part and a longer hidden part revealed by clicking an inline icon. Field descriptions can also be sourced from a dedicated ProcessWire page, enabling rich content (images, links, Hanna Codes, etc.) via the full content editor.

**Requires:** ProcessWire >= 2.8.0 · PHP >= 7.0

---

## Features

- Inline toggle trigger — a small icon sits at the end of the visible description text, opening and closing the extended content in place
- Separate Lucide icons for inline-toggle descriptions (`ⓘ`) vs. page-content panel descriptions
- UIKit tooltip on all trigger icons (instant hover label, no OS-delay)
- Page content descriptions open in a **UIKit offcanvas panel** (AdminThemeUikit) or a **Magnific Popup modal** (legacy themes)
- Optional SimpleMDE editor on the field description textarea
- Markdown support in field descriptions (bold, italic, lists, headings, external links)

---

## Inline Toggle Descriptions

### How it works

Add five dashes (`-----`) anywhere in a field's **Description** field. Everything above the delimiter is shown immediately; everything below is hidden. An `ⓘ` icon appears inline at the end of the visible text. Clicking it reveals the extended content and the icon changes to `✕`. Clicking again collapses the content and restores the `ⓘ` icon.

```
Short description shown to the editor.
-----
This longer content is hidden until the icon is clicked.

It supports **markdown**, including lists, headings, and [external links](https://example.com).
```

### Notes

- Both sections support full Markdown. External links are automatically decorated with `target="_blank"`, `rel="noopener noreferrer nofollow"`, and an external-link icon.
- The toggle is suppressed on `FieldtypePage` fields and `InputfieldRadios` to avoid layout conflicts.
- AJAX-collapsed fields (`collapsedYesAjax`, `collapsedBlankAjax`) are handled correctly — the description is preserved and processed once the field renders.

---

## Page Content Descriptions

Instead of writing a description directly in the field settings, you can point to a ProcessWire page whose content becomes the description. This enables rich content: images, links, Hanna Codes, formatted text via the full CMS editor.

Page content only activates when the field's own description is **blank**. It is not context-sensitive — the same content appears on every template where the description is blank.

### UIKit theme — offcanvas panel

On AdminThemeUikit (all current PW admin themes), clicking the trigger icon slides open a UIKit offcanvas panel on the right side of the screen, 600 px wide, containing the page's content. Superusers see a pencil icon linking directly to the page's edit screen.

### Legacy themes — Magnific Popup modal

On older themes without UIKit, the trigger opens the page content in a Magnific Popup lightbox modal. This path requires the `JqueryMagnific` module to be available (included with ProcessWire).

### Setup (both methods)

In the module config (Admin → Modules → Field Descriptions Extended):

1. Check **Enable Page Content Descriptions**.
2. Set **Content Field** to the textarea or CKEditor field on your description pages that holds the content (e.g. `body`). This is required for both methods.

### Method A — Per-field page selection (recommended)

No extra modules required. In the field editor (**Admin → Fields → your field → Basics tab**), a **Description Page** tree selector appears below the Description field. Browse and select any page whose Content Field holds the description.

- The field editor shows a notice on the Description textarea confirming the page is linked. If the Description field has text it overrides the page content; the notice turns red to flag this.
- Only pages on templates that contain the configured Content Field appear in the tree.
- Set **Description Page Branch** in the module config to limit the tree to a specific branch (e.g. a Settings or Help section), keeping the selector tidy on large sites.

### Method B — FieldtypeFields (bulk setup / backwards compatibility)

Use this method to map many fields at once via a dedicated template, or if you have an existing setup using this approach.

1. **Install [FieldtypeFields](https://processwire.com/modules/fieldtype-fields/)** — lets a page reference another PW field by name.
2. **Create a field** using `FieldtypeFields`, e.g. `field_select`.
3. **Create a template** for description pages (e.g. `field-description`) and add `field_select` plus your content field.
4. **Create pages** under a settings branch using that template. On each page, select the target field and write the description content.
5. In the module config, set **Field Field (legacy)** to `field_select` and **Field Description Template (legacy)** to your template.

When both methods point to a description for the same field, Method A (per-field) takes precedence.

### Optional: split page content with a short intro

Use the `-----` delimiter inside page content. The text above the delimiter becomes an inline intro shown alongside the trigger icon; the full content appears in the panel/modal.

---

## SimpleMDE Integration

If [InputfieldSimpleMDE](https://processwire.com/modules/inputfield-simple-mde/) is installed, enable the *Enable SimpleMDE* option in the module config. This attaches a Markdown editor to the field description textarea in field settings, making it easier to write and preview formatted descriptions.

When using SimpleMDE, the toolbar's *Insert Horizontal Rule* button (`—`) inserts the five-dash delimiter automatically.

---

## Icons

Trigger icons are Lucide SVGs stored in the `icons/` subdirectory of this module. They use `stroke="currentColor"` so they inherit the surrounding link colour.

| File | Used for |
|---|---|
| `icons/info.svg` | Inline toggle — closed state |
| `icons/x-circle.svg` | Inline toggle — open state |
| `icons/panel-right.svg` | Page content panel/popup trigger |

To swap an icon, replace the corresponding SVG file. Any standard Lucide icon (or any `viewBox="0 0 24 24"` SVG) will work. Icon size and alignment are controlled entirely by CSS (`.fde-icon` in `fieldStyles.css`).

---

## Additional Resources

- [Modules Directory](https://processwire.com/modules/field-descriptions-extended/)
- [GitHub Repository](https://github.com/outflux3/FieldDescriptionsExtended)
- [ProcessWire Forum Thread](https://processwire.com/talk/topic/17780-module-field-descriptions-extended/)
