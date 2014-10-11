<?php

namespace CodeChallenge\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ChallengeAjoutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
            ->add('nom')
             ->add('dateDebut','datetime')  
             ->add('duree')
             ->add('languages')
              ->add('nombreProblemes')
               ->add('envoyer','submit')/*
            ->add('nom',null, array('required' => FALSE))
            ->add('prenom')
            ->add('sexe','choice', array('choices' => array('0' => 'homme',
                                                                                 '1' => 'femme',
                                                                                 '2' =>'autre'),'preferred_choices' => array('1'), 'expanded' => TRUE,))
            
            ->add('pays', 'country')
            ->add('utilisateurs','entity', array('class' => 'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
            ->add('contenu','textarea')
       */
            ;
    }

    public function getName() {
        return 'codechallenge_sitebundle_challengeajout';
    }

}

