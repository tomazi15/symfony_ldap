<?php

namespace Ldap\LdapBundle\Ldap;

use Symfony\Component\Ldap\Ldap;

class LdapAdapter
{
    public $ldap;

    public function __construct(
        Ldap $ldapClient
    ){
        $this->ldap = $ldapClient;

    }

    public function ldap()
    {
        return $this->$ldap;
    }

} 