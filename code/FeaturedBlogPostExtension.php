<?php

class FeaturedBlogPostExtension extends DataExtension
{
	/**
	 * @var array
	 */
	private static $db = array(
			'IsFeatured' => 'Boolean',
	);

	/**
	 * @param FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields) {
		$sidebar = $fields->fieldByName('blog-admin-sidebar');
		$sidebar->insertBefore(new CheckboxField('IsFeatured', 'Mark as featured post'), 'PublishDate');
    }
}
