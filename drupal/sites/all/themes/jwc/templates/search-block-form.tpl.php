<?php

/**
 * @file
 * Displays the search form block.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Associative array of search elements. Can be used to print each
 *   form element separately.
 *
 * Default elements within $search:
 * - $search['search_block_form']: Text input area wrapped in a div.
 * - $search['actions']: Rendered form buttons.
 * - $search['hidden']: Hidden form elements. Used to validate forms when
 *   submitted.
 *
 * Modules can add to the search form, so it is recommended to check for their
 * existence before printing. The default keys will always exist. To check for
 * a module-provided field, use code like this:
 * @code
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 * @endcode
 *
 * @see template_preprocess_search_block_form()
 */
?>

<div class="search container-inline">
	<?php 
	$search['search_block_form'] = '
		<input id="search-entry" size="15" value="Search..." name="search_block_form" class="s" onfocus="if (this.value == \'Search...\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Search...\';}" tabindex="1" type="text">
	'; 
	$search['submit'] = '<input name="submit" value="submit" class="submit" title="Search JWC_CQU" type="submit">';
	print $search['search_block_form'];
	print $search['submit'];
	print $search['hidden'];
	?>
</div>


