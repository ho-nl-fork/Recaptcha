<?php
/**
 * Studioforty9_Recaptcha
 *
 * @category  Studioforty9
 * @package   Studioforty9_Recaptcha
 * @author    StudioForty9 <info@studioforty9.com>
 * @copyright 2015 StudioForty9 (http://www.studioforty9.com)
 * @license   https://github.com/studioforty9/recaptcha/blob/master/LICENCE BSD
 * @version   1.5.7
 * @link      https://github.com/studioforty9/recaptcha
 */

/**
 * Studioforty9_Recaptcha_Model_Source_Recaptcha_Type
 *
 * @category   Studioforty9
 * @package    Studioforty9_Recaptcha
 * @subpackage Model
 * @author     StudioForty9 <info@studioforty9.com>
 */
class Studioforty9_Recaptcha_Model_Source_Recaptcha_Type
{
    /**
     * Return the options for setting the type.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            'v2' => Mage::helper('studioforty9_recaptcha')->__('reCAPTCHA v2'),
            'invisible' => Mage::helper('studioforty9_recaptcha')->__('Invisible reCAPTCHA')
        );
    }
}
