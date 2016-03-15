<?php

/**
 * systemuser module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage systemuser
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSystemuserGeneratorConfiguration extends sfTwitterModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_show' =>   array(    'action' => '_show',  ),);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getShowActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_edit' => NULL,);
  }

  public function getListParams()
  {
    return '%%login_name%% - %%Roles%% - %%Department%% - %%status%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Systemuser List';
  }

  public function getEditTitle()
  {
    return 'Edit Systemuser';
  }

  public function getNewTitle()
  {
    return 'New Systemuser';
  }

  public function getShowTitle()
  {
    return 'Show Systemuser';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {

    return array(  0 => 'login_name',  1 => 'Roles',  2 => 'Department',  3 => 'status',);
  }

  public function getShowDisplay()
  {

    return array(  0 => 'system_user_id',  1 => 'login_name',  2 => 'login_password',  3 => 'display_name',  4 => 'status',  5 => 'department_id',  6 => 'role_id',);
  }

  public function getFieldsDefault()
  {
    return array(
      'system_user_id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => '№',),
      'login_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Нэвтрэх нэр',),
      'login_password' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Нууц үг',),
      'display_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Харагдах нэр',),
      'status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',  'label' => 'Нээлттэй',),
      'department_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'role_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'last_ticket_number' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Cүүлд борлуулсан тийз',),
      'last_name' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Овог',),
      'booking_office_id' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Салбар касс',),
      'BookingOffice' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Салбар касс',),
      'rolegroup_id' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Хандах эрх',),
      'Role' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Хандах эрх',),
      'last_ref_number' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'label' => 'Сүүлд буцаасан тийз',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'system_user_id' => array(),
      'login_name' => array(),
      'login_password' => array(),
      'display_name' => array(),
      'status' => array(),
      'department_id' => array(),
      'role_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'system_user_id' => array(),
      'login_name' => array(),
      'login_password' => array(),
      'display_name' => array(),
      'status' => array(),
      'department_id' => array(),
      'role_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'system_user_id' => array(),
      'login_name' => array(),
      'login_password' => array(),
      'display_name' => array(),
      'status' => array(),
      'department_id' => array(),
      'role_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'system_user_id' => array(),
      'login_name' => array(),
      'login_password' => array(),
      'display_name' => array(),
      'status' => array(),
      'department_id' => array(),
      'role_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'system_user_id' => array(),
      'login_name' => array(),
      'login_password' => array(),
      'display_name' => array(),
      'status' => array(),
      'department_id' => array(),
      'role_id' => array(),
    );
  }

  public function getFieldsShow()
  {
    return array(
      'system_user_id' => array(),
      'login_name' => array(),
      'login_password' => array(),
      'display_name' => array(),
      'status' => array(),
      'department_id' => array(),
      'role_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'systemuserForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'systemuserFormFilter';
  }

  protected function getConfig()
  {
    $configuration = parent::getConfig();
    $configuration['show'] = $this->getFieldsShow();

    return $configuration;
  }

  protected function compile()
  {
    parent::compile();

    $config = $this->getConfig();

    // add configuration for the show view
    $this->configuration['show'] = array( 'fields'         => array(),
                                          'title'          => $this->getShowTitle(),
                                          'actions'        => $this->getShowActions(),
                                        ) ;

    foreach ($this->getShowDisplay() as $name) {
      list($field, $flag) = sfModelGeneratorConfigurationField::splitFieldWithFlag($name);
      $field = new sfModelGeneratorConfigurationField($field, array_merge(
        array('type' => 'Text', 'label' => sfInflector::humanize(sfInflector::underscore($field))),
        isset($config['default'][$field]) ? $config['default'][$field] : array(),
        isset($config['show'][$field]) ? $config['show'][$field] : array(),
        array('flag' => $flag)
      ));

      $field->setFlag($flag);
      $this->configuration['show']['fields'][$name]  = $field;
      $this->configuration['show']['display'][$name] = $field;
    }

    foreach ($this->configuration['show']['actions'] as $action => $parameters) {
      $this->configuration['show']['actions'][$action] = $this->fixActionParameters($action, $parameters);
    }

    $this->parseVariables('show', 'title');
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {

    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }

  public function hasListPartial()
  {
    return false;
  }

  public function getListPartial()
  {
    return array();
  }

  public function hasEditPartial()
  {
    return false;
  }

  public function getEditPartial()
  {
    return array();
  }

  public function hasNewPartial()
  {
    return false;
  }

  public function getNewPartial()
  {
    return array();
  }

  public function hasShowPartial()
  {
    return false;
  }

  public function getShowPartial()
  {
    return array();
  }
}
