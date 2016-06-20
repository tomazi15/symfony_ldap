<?php

namespace Ldap\LdapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ldap\LdapBundle\Ldap\LdapAdapter;

class DefaultController extends Controller
{

//    /**
//     * @var LdapAdapter
//     */
//    public $test;
//
//    /**
//     * @param LdapAdapter $ldapAdapter
//     */
//    public function __construct(
//        LdapAdapter $ldapAdapter
//    ){
//        $this->$test = $ldapAdapter;
//    }

    public function indexAction()
    {
//        $oko = $this->$test->ldap()->bind();
//        var_dump($oko);die();

        $test = $this->get('ldap');
//        $test->bind();
        var_dump($test->find('cn=read-only-admin,dc=example,dc=com', 'objectClass=*'));die();


        return $this->render('LdapBundle:Default:index.html.twig');
    }
}
