<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.expression_evaluator' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Expression/ExpressionEvaluatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Expression/ExpressionEvaluator.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/ExpressionLanguage/ExpressionFunctionProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ExpressionLanguage/BasicSerializerFunctionsProvider.php';

$a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
$a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
