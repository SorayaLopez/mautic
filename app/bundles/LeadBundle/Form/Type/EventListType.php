<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\LeadBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class EventListType
 *
 * @package Mautic\LeadBundle\Form\Type
 */
class EventListType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder->add('addToLists', 'leadlist_choices', array(
            'label'      => 'mautic.lead.lead.events.addtolists',
            'label_attr' => array('class' => 'control-label'),
            'attr'       => array(
                'class'       => 'form-control'
            ),
            'multiple' => true,
            'expanded' => false
        ));

        $builder->add('removeFromLists', 'leadlist_choices', array(
            'label'      => 'mautic.lead.lead.events.removefromlists',
            'label_attr' => array('class' => 'control-label'),
            'attr'       => array(
                'class'       => 'form-control'
            ),
            'multiple' => true,
            'expanded' => false
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return "lead_event_leadlist";
    }
}