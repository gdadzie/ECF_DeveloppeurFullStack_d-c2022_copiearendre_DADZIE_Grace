<?php

namespace App\Controller\Admin;

use App\Entity\APICLIENTS;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AvatarField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class APICLIENTSCrudController extends AbstractCrudController
{

    public static function getEntityFqcn(): string
    {
        return APICLIENTS::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->update(Crud::PAGE_INDEX, Action::NEW,function (Action $action){
                return $action->setIcon('fa fa-user')->addCssClass('btn tbn warning');
            })
            ->setEntityLabelInSingular('Partenaire')
            ->setEntityLabelInPlural('Partenaires')
            ->setPageTitle('index','Les partenaires')
            ->setPaginatorPageSize(10);
    }


    public function configureFields(string $pageName): iterable
    {
        return array(

            AvatarField::new('logo_url')
            ->hideOnForm(),
            IdField::new('client_id'),
            TextField::new('client_name')
                ->hideOnForm(),
            TextField::new('client_secret')
            ->hideOnIndex()
            ->hideOnForm(),
            TextEditorField::new('short_description')
                ->hideOnForm(),
            BooleanField::new('active'),

            TextEditorField::new('full_description')
                ->hideOnIndex()
                ->hideOnForm(),
            TextField::new('url')
                ->hideOnIndex()
                ->hideOnForm(),
            TextField::new('dpo')
                ->hideOnIndex()
                ->hideOnForm(),
            TextField::new('technical_contact')
                ->hideOnIndex()
                ->hideOnForm(),
            TextField::new('commercial_contact')
                ->hideOnIndex()
                ->hideOnForm(),

        );

    }

}
