<?php

/**
 * LinkingRoleMenu filter form base class.
 *
 * @package    space
 * @subpackage filter
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLinkingRoleMenuFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'role_id' => new sfWidgetFormFilterInput(),
      'menu_id' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'role_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'menu_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('linking_role_menu_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinkingRoleMenu';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'role_id' => 'Number',
      'menu_id' => 'Number',
    );
  }
}
