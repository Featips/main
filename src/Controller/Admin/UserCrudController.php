<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CheckboxField;
class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    // public function configureFields(string $pageName): iterable
    // {
    //     return [
    //         // IdField::new('id'),
    //         TextField::new('username'),
    //         TextField::new('firstname'),
    //         TextField::new('lastname'),
    //         ImageField::new('profilepic')->setBasePath('uploads/')->setUploadDir('public/assets/uploads')->setUploadedFileNamePattern('[randomhash].[extension]'),
    //         CheckboxField::new('ispremium'),
    //      

            
    //     ];
    // }
    
}
