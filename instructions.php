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
    list-style-type: decimal !important;
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

	<p><em>Extends field descriptions in the page editor with inline toggle content, and optionally sources description content from a ProcessWire page for rich formatting support.</em></p>


	<h3>Inline Toggle Descriptions</h3>

	<p>
		Add five dashes (<strong>-----</strong>) anywhere in a field's <strong>Description</strong> in the field editor.
		Everything above the dashes is shown immediately; everything below is hidden behind a small inline icon (<span>&#9432;</span>)
		that appears at the end of the visible text. Clicking the icon reveals the extended content in place; clicking again collapses it.
	</p>

	<p>Both sections support full Markdown: <strong>bold</strong>, <em>italic</em>, lists, headings, and links. External links are automatically decorated with <code>target="_blank"</code> and a link icon.</p>

	<h3>Using SimpleMDE with the description field</h3>

	<p>
		If <a href="https://processwire.com/modules/inputfield-simple-mde/" target="_blank">InputfieldSimpleMDE</a> is installed,
		enable <strong>Enable SimpleMDE</strong> above to attach a Markdown editor to the field description textarea.
		The toolbar's <em>Insert Horizontal Rule</em> button inserts the five-dash delimiter automatically.
	</p>


	<h3>Page Content Descriptions</h3>

	<p>
		Instead of writing a description directly in the field settings, you can link a ProcessWire page whose content becomes the description.
		This enables rich content — images, links, Hanna Codes, formatted text via CKEditor — and makes descriptions easy to update without touching field settings.
		Page content is only used when the field's own <strong>Description</strong> field is empty.
	</p>

	<p>Enable <strong>Enable Page Content Descriptions</strong> above, then configure the <strong>Content Field</strong> (the textarea or CKEditor field on the description page that holds the content). That is all that is required for the recommended per-field method.</p>


	<h4>Method A — Per-field Description Page (recommended)</h4>

	<p>No extra modules needed. On any field editor (<strong>Admin → Fields → your field → Basics tab</strong>), a <strong>Description Page</strong> tree selector appears below the Description field. Select any page whose Content Field holds the description. The module displays a notice on the Description textarea reminding you that content is managed externally.</p>

	<ul>
		<li>The Content Field setting above determines which field is read from the selected page.</li>
		<li>If the field's own Description is filled in, it overrides the page content — the notice turns red to flag this.</li>
		<li>Page content can also use the <strong>-----</strong> delimiter: text above it shows as an inline intro; everything below opens in a panel.</li>
		<li>Set <strong>Description Page Branch</strong> above to restrict the tree selector to a specific branch (e.g. a Settings or Help section), keeping the selector focused on relevant pages.</li>
	</ul>


	<h4>Method B — FieldtypeFields bulk mapping (legacy)</h4>

	<p>This method lets you pre-configure many fields at once through a dedicated template, without visiting each field editor. It requires the <a href="https://processwire.com/modules/fieldtype-fields/" target="_blank">FieldtypeFields</a> module.</p>

	<ol>
		<li>Install <strong>FieldtypeFields</strong> and create a new field of that type (e.g. <strong>field_select</strong>).</li>
		<li>Create a template for description pages (e.g. <strong>field-description</strong>) and add <strong>field_select</strong> plus your content field.</li>
		<li>Create pages using that template. On each page, select the field whose description it should provide and write the content.</li>
		<li>Configure the <strong>Field Field (legacy)</strong> and <strong>Field Description Template (legacy)</strong> settings above.</li>
	</ol>

	<p>When both methods are configured for the same field, the per-field Description Page (Method A) takes precedence.</p>

	<p><strong>Note:</strong> Page content descriptions are not template-context sensitive — the same content appears in all contexts where the field's Description is blank.</p>


	<h3>Resources</h3>

	<ul>
		<li><a href="https://processwire.com/modules/field-descriptions-extended/" target="_blank">Modules Directory</a></li>
		<li><a href="https://github.com/outflux3/FieldDescriptionsExtended" target="_blank">GitHub Repository</a></li>
		<li><a href="https://processwire.com/talk/topic/17780-module-field-descriptions-extended/" target="_blank">ProcessWire Forum Thread</a></li>
	</ul>

</div>
