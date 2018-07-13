<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class FlatAdmin extends AbstractAdmin
{
     protected function configureFormFields(FormMapper $formMapper)
    {
	    $formMapper->add('name', TextType::class);
	    $formMapper->add('roomNo', IntegerType::class);
	    $formMapper->add('area', IntegerType::class);
	    $formMapper->add('description', TextareaType::class);
	    $formMapper->add('adress', TextType::class);
	    $formMapper->add('slot_no', IntegerType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
         $datagridMapper->add('name');
	 $datagridMapper->add('roomNo');
	 $datagridMapper->add('area');
	 $datagridMapper->add('description');
	 $datagridMapper->add('adress');
	 //$datagridMapper->add('slot_no');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('name');
	 $listMapper->add('roomNo');
	 $listMapper->add('area');
	 $listMapper->add('description');
	 $listMapper->add('adress');
	 $listMapper->add('slot_no');
    }
}
