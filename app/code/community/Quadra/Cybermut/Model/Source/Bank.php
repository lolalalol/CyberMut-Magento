<?php

/**
 * 1997-2016 Quadra Informatique
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to modules@quadra-informatique.fr so we can send you a copy immediately.
 *
 * @author Quadra Informatique
 * @copyright 1997-2016 Quadra Informatique
 * @license http://www.opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class Quadra_Cybermut_Model_Source_Bank
{

    public function toOptionArray()
    {
        return array(
            array('value' => 'mutuel', 'label' => Mage::helper('cybermut')->__('Credit Mutuel')),
            array('value' => 'cic', 'label' => Mage::helper('cybermut')->__('Groupe CIC')),
            array('value' => 'obc', 'label' => Mage::helper('cybermut')->__('OBC')),
        );
    }

}
