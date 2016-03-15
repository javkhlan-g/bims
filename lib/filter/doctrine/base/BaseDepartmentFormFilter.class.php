<?php

/**
 * Department filter form base class.
 *
 * @package    space
 * @subpackage filter
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDepartmentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('department_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Department';
  }

  public function getFields()
  {
    return array(
      'department_id' => 'Number',
      'name'          => 'Text',
    );
  }
}
