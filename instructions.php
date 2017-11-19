<style>

.module-instructions {
	background: #F8F8F8;
	margin-left: -15px;
	margin-right: -15px;
	margin-top: 8px;
	margin-bottom: -15px !important;
	padding: 20px;
}

.module-instructions strong {
	font-weight: 700;
}

.module-instructions h2,
.module-instructions h3 {
	color: #D82C82;
}

.module-instructions h2 {
	font-size: 1.5em;
}

.module-instructions h2 {
	font-weight: 700;
}

.module-instructions em {
	font-style: italic;
}

.module-instructions ul {
    list-style-type: disc !important;
    padding-left: 35px;
    margin-bottom: 15px;
}

.module-instructions ul li {
    margin: .2em 0;
    display: list-item !important;
}

.module-instructions ol {
    list-style-type: disc !important;
    padding-left: 35px;
    margin-bottom: 15px;
}

.module-instructions ol li {
    margin: .2em 0;
    display: list-item !important;
}

</style>

<div class="module-instructions">

	<h2>Field Descriptions Extended</h2>

	<p><em>This module enables you to extend field descriptions by dividing short descriptions with a longer text that is revealed in a toggle.</em></p>

	<h3>Extending your field descriptions using the standard field's <strong>description field</strong>.</h3>

	<p>
		Once this module is installed, it will automatically search your description field for the presence of 5 dashes (-----). <br>
		Any content above the 5 dashes will be visible and the content below the dashes will be hidden. A 'More...' link will appear at the 
		end of the short description which when clicked will reveal the rest of the description.
	</p>

	<h4>Using <strong>Simple Markdown Editor</strong> with the description field</h4>

	<p>
		If you have Simple Markdown Editor (<a href="http://modules.processwire.com/modules/inputfield-simple-mde/" target="_blank">InputfieldSimpleMDE</a>) installed, you can enable the field description to have that editor.<br>
		<em>*When using Simple MDE, you can use the [hr] button (Insert Horizontal Line) instead of typing 5 dashes.</em>
		<a href="https://simplemde.com/" target="_blank">More about SimpleMDE</a>.
	</p>


	<h3>Extending your field descriptions using content from a <strong>ProcessWire Page</strong> for the field description.</h3>

	<p>
		You may use the content from a ProcessWire page as a field description. This would allow you to easily insert images, links, and use hanna codes.<br>
		To use page content for your field descriptions, please follow these instructions:
	</p>

	<ol>
		<li>Install Select Fields module (FieldtypeFields) <a href="http://modules.processwire.com/modules/fieldtype-fields/" target="_blank">http://modules.processwire.com/modules/fieldtype-fields/</a></li>
		<li>Create a new field using this field type, e.g. <strong>field_select</strong>.</li>
		<li>Add the field to any template you will be using for your field descriptions.</li>
		<li>Setup your help pages (for example under a settings branch) where you will store the field description content,using the template containing the Field Select.</li>
		<li>Add content to a page and select the field where that content should show. To show a short text before the link to the longer content, separate them with 5 dashes</li>
		<li>Be sure to update your settings on this page, first enable page content descriptions,then specify the name of the Select Fields field, template to search, and content field.</li>
	</ol>

	<p>
		<span style="color:red">If you create a field description using this method, please note that the description field must be blank for contexts where you want the page content to appear.<br>
		You can freely use template context for field descriptions, but the Page Content method is not context sensitive and will display under all contexts where the description is blank.</span>
	</p>


	<h3>Additional Help and Resources</h3>

	<p>If you have any additional questions, comments or issues, please submit an issue on Github, or use the PW forum.</p>

	<ul>
		<li>Github Repository: <a href="#" target="_blank">#</a></li>
		<li>Processwire Forum Thread: <a href="https://processwire.com/talk/topic/17780-module-field-descriptions-extended/" target="_blank">https://processwire.com/talk/topic/17780-module-field-descriptions-extended/</a></li>
	</ul>

</div>



