<?php

/**
 * Menu form base class.
 *
 * @method Menu getObject() Returns the current form's model object
 *
 * @package    space
 * @subpackage form
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMenuForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'menu_id'     => new sfWidgetFormInputHidden(),
      'menu_name'   => new sfWidgetFormInputText(),
      'menu_eng'    => new sfWidgetFormInputText(),
      'menu_parent' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'add_empty' => true)),
      'menu_ord'    => new sfWidgetFormInputText(),
      'menu_desc'   => new sfWidgetFormInputText(),
      'menu_state'  => new sfWidgetFormInputText(),
      'roles_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Roles')),
    ));

    $this->setValidators(array(
      'menu_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('menu_id')), 'empty_value' => $this->getObject()->get('menu_id'), 'required' => false)),
      'menu_name'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'menu_eng'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'menu_parent' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'required' => false)),
      'menu_ord'    => new sfValidatorInteger(array('required' => false)),
      'menu_desc'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'menu_state'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'roles_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Roles', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('menu[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Menu';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['roles_list']))
    {
      $this->setDefault('roles_list', $this->object->Roles->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveRolesList($con);

    parent::doSave($con);
  }

  public function saveRolesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['roles_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Roles->getPrimaryKeys();
    $values = $this->getValue('roles_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Roles', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Roles', array_values($link));
    }
  }

}
