<?php

/**
 * Model generator helper.
 *
 * @package    symfony
 * @subpackage generator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfModelGeneratorHelper.class.php 22914 2009-10-10 12:24:29Z Kris.Wallsmith $
 */
abstract class sfTwitterModelGeneratorHelper extends sfModelGeneratorHelper {

    public function linkToNew($params)
    {
        $icon = '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false))
        {
            $icon = '<i class="glyphicon glyphicon-plus icon-white"></i> ';
        }

        return '<a class="btn btn-success btn-sm" href="' . url_for('@' . $this->getUrlForAction('new')) . '">' . $icon . __("Шинэ", array(), 'sf_admin') . '</a>';
    }

    public function linkToEdit($object, $params)
    {
        return '<li><i class="glyphicon glyphicon-pencil icon-yellow"></i> ' . link_to(__("Засах", array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, $params['params']) . '</li>';
    }

    public function linkToShow($object, $params)
    {
        return '<li><i class="glyphicon glyphicon-zoom-in"></i> ' . link_to(__("Харах", array(), 'sf_admin'), $this->getUrlForAction('show'), $object, $params['params']) . '</li>';
    }

    public function linkToDelete($object, $params)
    {
        if ($object->isNew())
        {
            return '';
        }

        $confirm = '';
        if (isset($params['confirm']))
        {
            $confirm = $this->generateDeleteConfirm($params['confirm']);
        }

        return '<li><i class="glyphicon glyphicon-remove"></i> ' . link_to(__("Устгах", array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'onclick' => $confirm)) . '</li>';
    }

    public function linkToDeleteBtn($object, $params)
    {
        if ($object->isNew())
        {
            return '';
        }

        $confirm = '';
        if (isset($params['confirm']))
        {
            $confirm = $this->generateDeleteConfirm($params['confirm']);
        }

        $icon = '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false))
        {
            $icon = '<i class="glyphicon glyphicon-remove icon-white"></i> ';
        }

        return link_to($icon . __("Устгах", array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('class' => 'btn btn-danger delete mlm', 'onclick' => $confirm));
    }

    public function linkToEditBtn($object, $params)
    {
        $icon = '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false))
        {
            $icon = '<i class="glyphicon glyphicon-pencil icon-white"></i> ';
        }

        return link_to($icon . __("Засах", array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, array('class' => 'btn btn-primary mlm'));
    }

    public function linkToList($params)
    {
        $icon = '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false))
        {
            $icon = '<i class="glyphicon glyphicon-list-alt"></i> ';
        }

        return link_to($icon . __("Жагсаалт", array(), 'sf_admin'), '@' . $this->getUrlForAction('list'), array('class' => 'btn btn-default mlm'));
    }

    public function linkToSave($object, $params)
    {
        $icon = '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false))
        {
            $icon = '<i class="glyphicon glyphicon-ok icon-white"></i> ';
        }

        return '<button class="btn btn-primary mlm" type="submit">' . $icon . __("Хадгалах", array(), 'sf_admin') . '</button>';
    }

    public function linkToSaveAndAdd($object, $params)
    {
        if (!$object->isNew())
        {
            return '';
        }

        $icon = '';
        if (sfTwitterBootstrap::getProperty('use_icons_in_button', false))
        {
            $icon = '<i class="glyphicon glyphicon-ok icon-white"></i> ';
        }

        return '<button class="btn btn-primary mlm" type="submit" name="_save_and_add">' . $icon . __("Хадгалаад шинээр", array(), 'sf_admin') . '</button>';
    }

    protected function generateDeleteConfirm($confirm)
    {        
        $confirm = "var self = this; bootbox.confirm('Энэ бичлэгийг устгах уу', function(result) {if (result) {" . $this->generateMethodFunction('delete') . "}}); return false;";
        return $confirm;
    }

    protected function generateMethodFunction($method)
    {
        $function = "var f = document.createElement('form'); f.style.display = 'none'; self.parentNode.appendChild(f); f.method = 'post'; f.action = self.href;";

        if ('post' != strtolower($method))
        {
            $function .= "var m = document.createElement('input'); m.setAttribute('type', 'hidden'); ";
            $function .= sprintf("m.setAttribute('name', 'sf_method'); m.setAttribute('value', '%s'); f.appendChild(m);", strtolower($method));
        }

        // CSRF protection
        $form = new BaseForm();
        if ($form->isCSRFProtected())
        {
            $function .= "var m = document.createElement('input'); m.setAttribute('type', 'hidden'); ";
            $function .= sprintf("m.setAttribute('name', '%s'); m.setAttribute('value', '%s'); f.appendChild(m);", $form->getCSRFFieldName(), $form->getCSRFToken());
        }

        $function .= "f.submit();";

        return $function;
    }

}
