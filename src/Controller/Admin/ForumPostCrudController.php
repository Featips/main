<?php

namespace App\Controller\Admin;

use App\Entity\ForumPost;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ForumPostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ForumPost::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
