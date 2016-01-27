<?php
class Packt_Socialwidget_Model_Services
{
	/**
	 * Generate available services as array
	 *
	 * you can add a new value to the array if you wish to add yet
	 another link
	 * to this widget. keep in mind that you have to add the details
	 in the
	 * List Block as well.
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		return array(
		array('value' => 'buzz', 'label' => 'Buzz'),
		array('value' => 'facebook', 'label' => 'Facebook'),
		array('value' => 'twitter', 'label' => 'Twitter'),
		array('value' => 'digg', 'label' => 'Digg'),
		array('value' => 'delicious', 'label' => 'Delicious')
		);
	}
}