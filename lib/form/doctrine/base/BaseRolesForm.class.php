<?php

/**
 * Roles form base class.
 *
 * @method Roles getObject() Returns the current form's model object
 *
 * @package    space
 * @subpackage form
 * @author     Javkhlan Gansukh
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRolesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'role_id'   => new sfWidgetFormInputHidden(),
      'name'      => new sfWidgetFormInputText(),
      'menu_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Menu')),
    ));

    $this->setValidators(array(
      'role_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('role_id')), 'empty_value' => $this->getObject()->get('role_id'), 'required' => false)),
      'name'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'menu_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Menu', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('roles[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Roles';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['menu_list']))
    {
      $this->setDefault('menu_list', $this->object->Menu->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveMenuList($con);

    parent::doSave($con);
  }

  public function saveMenuList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['menu_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Menu->getPrimaryKeys();
    $values = $this->getValue('menu_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Menu', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Menu', array_values($link));
    }
  }

}
