<?php

/**
 * Roles filter form base class.
 *
 * @package    space
 * @subpackage filter
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRolesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'      => new sfWidgetFormFilterInput(),
      'menu_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Menu')),
    ));

    $this->setValidators(array(
      'name'      => new sfValidatorPass(array('required' => false)),
      'menu_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Menu', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('roles_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addMenuListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.LinkingRoleMenu LinkingRoleMenu')
      ->andWhereIn('LinkingRoleMenu.menu_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Roles';
  }

  public function getFields()
  {
    return array(
      'role_id'   => 'Number',
      'name'      => 'Text',
      'menu_list' => 'ManyKey',
    );
  }
}
