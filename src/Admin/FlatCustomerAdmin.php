<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Sonata\AdminBundle\Form\Type\ModelListType;

class FlatCustomerAdmin extends AbstractAdmin
{
     protected function configureFormFields(FormMapper $formMapper)
    {
         $formMapper->add('flat', ModelListType::class);   
         $formMapper->add('name', TextType::class);
         $formMapper->add('surname', TextType::class);
         $formMapper->add('adress', TextType::class);
         $formMapper->add('price', MoneyType::class, array('currency' =>'pln'));
	    
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('flat');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('flat');
    }
}
