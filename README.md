# Field Descriptions Extended

ProcessWire module that enables you to extend field descriptions by dividing short descriptions with a longer text that is revealed in a toggle.
Field Descriptions Extended

This module enables you to extend field descriptions by dividing short descriptions with a longer text that is revealed in a toggle.
Extending your field descriptions using the standard field's description field.

Once this module is installed, it will automatically search your description field for the presence of 5 dashes (-----).
Any content above the 5 dashes will be visible and the content below the dashes will be hidden. A 'More...' link will appear at the end of the short description which when clicked will reveal the rest of the description.
Using Simple Markdown Editor with the description field

If you have Simple Markdown Editor (InputfieldSimpleMDE) installed, you can enable the field description to have that editor.

*When using Simple MDE, you can use the [hr] button (Insert Horizontal Line) instead of typing 5 dashes. More about SimpleMDE.
Extending your field descriptions using content from a ProcessWire Page for the field description.*


You may use the content from a ProcessWire page as a field description. This would allow you to easily insert images, links, and use hanna codes.
To use page content for your field descriptions, please follow these instructions:

- Install Select Fields module (FieldtypeFields) http://modules.processwire.com/modules/fieldtype-fields/
- Create a new field using this field type, e.g. field_select.
- Add the field to any template you will be using for your field descriptions.
- Setup your help pages (for example under a settings branch) where you will store the field description content,using the template containing the Field Select.
- Be sure to update your settings on this page, first enable page content descriptions,then specify the name of the Select Fields field, template to search, and content field.

If you create a field description using this method, please note that the description field must be blank for contexts where you want the page content to appear.
You can freely use template context for field descriptions, but the Page Content method is not context sensitive and will display under all contexts where the description is blank. 
