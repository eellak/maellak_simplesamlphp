<?php
/**
 * SAML 2.0 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
*/


$metadata['https://ma.ellak.gr/simplesaml/saml2/idp/metadata.php'] = array(
	'name' => array(
		'en' => ' test idp ',
	),
	'description'          => 'T akdkas jkasd aksd jask.',

    'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',
    'SingleSignOnService'  => 'https://ma.ellak.gr/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService'  => 'https://ma.ellak.gr/simplesaml/saml2/idp/SingleLogoutService.php',
    'certFingerprint'      => '3B:B6:B0:95:52:46:78:8E:AC:04:CD:24:AD:CD:01:25:DC:C1:F0:13',

'authproc' => array(
//60 => array(
//        'class' => 'core:AttributeMap',
//        'urn:oid:0.9.2342.19200300.100.1.3' => 'mail',
//),
66 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:2.5.4.42' => 'onoma'
),
61 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:2.5.4.4' => 'eponimo'
),
68 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.7' => 'email',
),
69 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.9' => 'idikotita',
),

),

);



$metadata['https://ma.ellak.gr'] = array(
        'name' => array(
                'en' => ' LOCALUSERS ',
        ),
        'description'          => 'T akdkas jkasd aksdasdaklsdkad jask.',

    'description'          => 'Here you can login with your account on Feide RnD OpenID. If you do not already have an account on this identity provider, you can create a new one by following the create new account link and follow the instructions.',
    'SingleSignOnService'  => 'https://ma.ellak.gr/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService'  => 'https://ma.ellak.gr/simplesaml/saml2/idp/SingleLogoutService.php',
    'certFingerprint'      => '3B:B6:B0:95:52:46:78:8E:AC:04:CD:24:AD:CD:01:25:DC:C1:F0:13',

);








$metadata['https://fork-login.djnro.grnet.gr/ssp/module.php/saml/sp/metadata.php/forkdjnrosp'] = array (
  'SingleLogoutService' => 'https://fork-login.djnro.grnet.gr/ssp/module.php/saml/sp/saml2-logout.php/forkdjnrosp',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://fork-login.djnro.grnet.gr/ssp/module.php/saml/sp/saml2-acs.php/forkdjnrosp',
    ),
    1 => 
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://fork-login.djnro.grnet.gr/ssp/module.php/saml/sp/saml2-acs.php/forkdjnrosp',
    ),
  ),
  'name' => 
  array (
    'en' => 'fork.djnro.grnet.gr',
  ),
  'attributes' => 
  array (
    0 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
    1 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.7',
    2 => 'urn:oid:0.9.2342.19200300.100.1.3',
    3 => 'urn:oid:2.5.4.42',
    4 => 'urn:oid:2.5.4.4',
  ),
  'description' => 
  array (
    'en' => 'fork.djnro.grnet.gr',
  ),
  'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
  'OrganizationName' => 
  array (
    'en' => 'Greek Research and Technology Network',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'Greek Research and Technology Network',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'http://www.grnet.gr',
  ),
'authproc' => array(
24 => array('class' => 'core:AttributeAdd','NAIIIIIIIIIIIIIII' => 'asdasdasd dasd 12easd'),
46 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:0.9.2342.19200300.100.1.3' => 'mail',
),
47 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.10' => 'username',
),
50 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:2.5.4.42' => 'onoma'
),
51 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:2.5.4.4' => 'eponimo'
),

52 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.7' => 'foreas',
),

53 => array(
        'class' => 'core:AttributeMap',
        'urn:oid:1.3.6.1.4.1.5923.1.1.1.9' => 'idikotita',
),
),
'certData' => 'MIICmjCCAYICCQC9OIAbqMKdzjANBgkqhkiG9w0BAQUFADAPMQ0wCwYDVQQDEwRmb3JrMB4XDTEzMDUwOTEzMDIxN1oXDTIzMDUwNzEzMDIxN1owDzENMAsGA1UEAxMEZm9yazCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALR8IhNBqJ2TIShzsfzZGbhnU9PFAiz2u5JuXyM59LT/0aoV03yJNxKDVGwxEI0YlHBaynUbRqJzudxlTaErn48uCrupH/ymY6askN3PVqNBc5LtQymiuXvpx2g8QeAAIM+1i/HvseiyZ4C88yhWKN2UoDov8AaFFWG9xIplpz2rGbQ+2iqsUo93pN8CXrqEI1BtZ8zPIHINZBY7GrGGQNi8jLfpBL8UXH191SjOnEtdOVoMkEKymb1Q4SkyhQtW7KfpgvWU+WNFzyByBYqnwq3N07acIZ4Ail11iIM6NVv+HAgMZl8AYNGPZr/Xqt4JcbTfv87LegGBWZgT9A37bP0CAwEAATANBgkqhkiG9w0BAQUFAAOCAQEADx32dufz7KhFKMaz6yPM3oLsdYm0zWIyNWxDM6zOmdxe2+MKvtaGmBGLu33HmeR+0mB4MbUIR+Foqn66l4YN+R55soxl8HXfF2NYZhTrAScsdzBSzdjVcrZB01Ae03M6XqRBjsvwW30HLu+A5gjCW3WSn12rJ/Ash7xEWh3IPEc/JGTikMhAe2sftNW29wzr0IOpFFaYLqT7AL51c1+XuT3L2lhCrb8T/6ltE602LPdC0QdC3woDwu64bPfMcy3+1jpziQ6TSQbdsaBaLzRiKB7gVmyhlOb7+zxMaj9/LxulQ8gsjN4RUSOfRRa8O9rpmzlXTdigAJfuGM2LpzdmSg==',
);


