<?php

require_once dirname(__FILE__) . '/../lib/systemuserGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/systemuserGeneratorHelper.class.php';

/**
 * systemuser actions.
 *
 * @package    space
 * @subpackage systemuser
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class systemuserActions extends autoSystemuserActions
{

    public function executeProfile(sfWebRequest $request)
    {
        if ($request->hasParameter('id')) {
            $this->user = Doctrine::getTable('SystemUser')->find($request->getParameter('id'));
        } else {
            $this->user = $this->getUser()->getAttribute('user');
        }

        if ($request->getPostParameter('_save')) {

            //Must be a minimum of 6 characters
            //Must contain at least 1 number
            //Must contain at least one uppercase character
            //Must contain at least one lowercase character
            //Must include special characters
            //Not Include login name
            //Must different login password
            $user = $this->getUser()->getAttribute('user');
            if (preg_match('/^(?=.*\d)(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W]).{8,}/', $request->getPostParameter('Password')) && strpos($request->getPostParameter('Password'), $user->getLoginName()) === false) {

                if ($user->getLoginPassword() == md5($request->getPostParameter('OldPass'))) {
                    if ($request->getPostParameter('Password') == $request->getPostParameter('cPassword')) {
                        $user->setLoginPassword(md5($request->getPostParameter('Password')));
                        $user->save();
                        $this->getUser()->setFlash('success', "Таны нууц үг амжилттай солигдлоо", FALSE);
                    } else {
                        $this->getUser()->setFlash('error', "Дахин оруулсан нууц үг өөр байна.", FALSE);
                    }
                } else {
                    $this->getUser()->setFlash('error', "Хуучин нууц үг буруу байна", FALSE);
                }
            } else {
                $this->getUser()->setFlash('error', "Нууц үг шаардлага хангахгүй байна", FALSE);
            }
        }

    }

    public function executeChangeCulture(sfWebRequest $request)
    {
        $this->getUser()->setCulture($request->getParameter("language"));
        return $this->redirect('@homepage');
    }

    public function executeLogin(sfWebRequest $req)
    {

        if ($req->isXmlHttpRequest()) {
            return $this->renderText('<script>document.location.href="/systemuser/logout/"</script>');
        }
        if ($req->getMethod() == 'POST') {
            $user = Doctrine_Query::create()
                ->select('u.*')
                ->from('SystemUser u')
                ->where('lower(u.login_name) = ? and u.login_password = ?', array(strtolower($req->getPostParameter('username')), md5($req->getPostParameter('password'))))
                ->execute()
                ->getFirst();
            if ($user) {
                if (!$this->getUser()->isAuthenticated()) {
                    $this->getUser()->setAuthenticated(true);
                }
                $this->getUser()->setAttribute('user', $user);
                $this->getUser()->setAttribute('menu', 258);
                $this->getUser()->setAttribute('tagnumber', 1);
                $this->getUser()->addCredential('admin');
                $this->redirect('@homepage');
            } else {
                $this->getUser()->setFlash('notice', 'Хэрэглэгчийн нэр эсвэл нууц үг буруу байна');
            }
        }

        $this->setLayout('login');
    }

    public function executeSecure(sfWebRequest $req)
    {

    }

    public function executeLogout(sfWebRequest $req)
    {
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->clearCredentials();
        session_destroy();
        $this->redirect('@homepage');
    }

}
