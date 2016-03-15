<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class menuComponents extends sfComponents {

    public function executeMenu(sfWebRequest $request) {
        $this->menus = Doctrine::getTable('Menu')
                ->createQuery('a')
                ->where('menu_parent is null')
                ->orderBy('menu_ord ASC')
                ->execute();
        if ($request->getParameter('m')) {
            $_SESSION['menu'] = $request->getParameter('m');
        }
    }

}
