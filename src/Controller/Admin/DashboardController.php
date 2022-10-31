<?php

namespace App\Controller\Admin;

use App\Entity\APICLIENTS;
use App\Entity\APIINSTALLPERM;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class

DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Orange Bleue - Admin')
            ->renderContentMaximized(10);

    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToCrud('Gestion des utilisateurs', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Partenaires', 'fas fa-list', APICLIENTS::class);
        yield MenuItem::linkToCrud('Liste des salles', 'fas fa-list', APIINSTALLPERM::class);

    }
}

