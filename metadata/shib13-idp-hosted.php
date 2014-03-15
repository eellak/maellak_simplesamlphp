<?php
$metadata['__DYNAMIC:1__'] = array(
    /*
     * The hostname for this IdP. This makes it possible to run multiple
     * IdPs from the same configuration. '__DEFAULT__' means that this one
     * should be used by default.
     */
    'host' => '__DEFAULT__',

    /*
     * The private key and certificate to use when signing responses.
     * These are stored in the cert-directory.
     */
    'privatekey' => 'saml.pem',
    'certificate' => 'saml.crt',


    /*
     * The authentication source which should be used to authenticate the
     * user. This must match one of the entries in config/authsources.php.
     */
    'auth' => 'example-userpass',
);


$metadata['https://snf-131326.vm.okeanos.grnet.gr'] = array(
        'name' => array('en'=>' LOCAL ELLAK ',),
        'description'          => 'T akdkas jkasd aksd jask.',
         'SingleSignOnService'  => 'https://snf-131326.vm.okeanos.grnet.gr/simplesaml/saml2/idp/SSOService.php',
        'SingleLogoutService'  => 'https://snf-131326.vm.okeanos.grnet.gr/simplesaml/saml2/idp/SingleLogoutService.php',
        'certFingerprint'      => ''
);

