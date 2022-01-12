<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('username'),
            TextField::new('firstname'),
            TextField::new('lastname'),
            ImageField::new('profilepic')->setBasePath('assets/uploads/')->setUploadDir('public/assets/uploads')->setUploadedFileNamePattern('[randomhash].[extension]'),
            BooleanField::new('ispremium'),
            BooleanField::new('iscoach'),
            TextField::new('email'),
        ];
    }
    

    

}
