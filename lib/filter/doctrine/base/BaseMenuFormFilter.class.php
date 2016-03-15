<?php

/**
 * Menu filter form base class.
 *
 * @package    space
 * @subpackage filter
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMenuFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'menu_name'   => new sfWidgetFormFilterInput(),
      'menu_eng'    => new sfWidgetFormFilterInput(),
      'menu_parent' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'add_empty' => true)),
      'menu_ord'    => new sfWidgetFormFilterInput(),
      'menu_desc'   => new sfWidgetFormFilterInput(),
      'menu_state'  => new sfWidgetFormFilterInput(),
      'roles_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Roles')),
    ));

    $this->setValidators(array(
      'menu_name'   => new sfValidatorPass(array('required' => false)),
      'menu_eng'    => new sfValidatorPass(array('required' => false)),
      'menu_parent' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Parent'), 'column' => 'menu_id')),
      'menu_ord'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'menu_desc'   => new sfValidatorPass(array('required' => false)),
      'menu_state'  => new sfValidatorPass(array('required' => false)),
      'roles_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Roles', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('menu_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addRolesListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('LinkingRoleMenu.role_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Menu';
  }

  public function getFields()
  {
    return array(
      'menu_id'     => 'Number',
      'menu_name'   => 'Text',
      'menu_eng'    => 'Text',
      'menu_parent' => 'ForeignKey',
      'menu_ord'    => 'Number',
      'menu_desc'   => 'Text',
      'menu_state'  => 'Text',
      'roles_list'  => 'ManyKey',
    );
  }
}
