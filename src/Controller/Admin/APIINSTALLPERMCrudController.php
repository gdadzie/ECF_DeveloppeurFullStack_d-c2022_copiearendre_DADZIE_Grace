<?php

namespace App\Controller\Admin;

use App\Entity\APIINSTALLPERM;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class APIINSTALLPERMCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return APIINSTALLPERM::class;
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
