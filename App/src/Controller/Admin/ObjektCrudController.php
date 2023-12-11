<?php

namespace App\Controller\Admin;

use App\Entity\Objekt;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;
use PhpParser\Node\Stmt\Switch_;
use Vich\UploaderBundle\Entity\File;
use Vich\UploaderBundle\Form\Type\VichFileType;

class ObjektCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Objekt::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', ),
            TextField::new('link', ),
            TextareaField::new('description'),
            NumberField::new('number', ),
            NumberField::new('longitude', ),
            NumberField::new('latitude', ),
            NumberField::new('rate', ),
            TimeField::new('open_hour_monday'),
            TimeField::new('close_hour_monday'),
            TimeField::new('open_hour_tuesday'),
            TimeField::new('close_hour_tuesday'),
            TimeField::new('open_hour_wednesday'),
            TimeField::new('close_hour_wednesday'),
            TimeField::new('open_hour_thursday'),
            TimeField::new('close_hour_thursday'),
            TimeField::new('open_hour_friday'),
            TimeField::new('close_hour_friday'),
            TimeField::new('open_hour_saturday'),
            TimeField::new('close_hour_saturday'),
            TimeField::new('open_hour_sunday'),
            TimeField::new('close_hour_sunday'),
            ImageField::new('image')->setUploadDir('/public/img/'),
            BooleanField::new('published')
        ];
    }

}
