<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.registration.form.factory' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Form/Factory/FactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Form/Factory/FormFactory.php';

return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->getForm_FactoryService()) && false ?: '_'}, 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', $this->parameters['fos_user.registration.form.validation_groups']);
