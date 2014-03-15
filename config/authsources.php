<?php
$config = array(
'example-userpass' => array(
  'sqlauth:SQL',
  'dsn' => 'mysql:host=localhost;dbname=maellakgr',
  'username' => 'maeellakgr',
  'password' => 'm@eellak123gr',
   'query' => 'SELECT username as "urn:oid:0.9.2342.19200300.100.1.3", onoma as "urn:oid:2.5.4.42",eponimo as "urn:oid:2.5.4.4" ,email as "urn:oid:1.3.6.1.4.1.5923.1.1.1.7",idikotita  FROM users WHERE username = :username AND password = :password AND _status = 0',
),
    'default-sp' => array(
        'exampleauth:UserPass',
        'student:studentpass' => array(
            'uid' => array('student'),
            'eduPersonAffiliation' => array('member', 'student'),
        ),
        'employee:employeepass' => array(
            'uid' => array('employee'),
            'eduPersonAffiliation' => array('member', 'employee'),
        ),
    ),
    'default-sp2' => array(
        'saml:SP',
	'idp' => 'https://ma.ellak.gr/simplesaml/saml2/idp/metadata.php',
                       'privatekey' => '/var/simplesamlphp/cert/saml.pem',
                       'certificate' => '/var/simplesamlphp/cert/saml.crt',
                       'redirect.sign' => TRUE,
                       'redirect.validate' => TRUE,

                       'entityID' => 'https://ma.ellak.gr/simplesaml/module.php/saml/sp/metadata.php/aristeiasp',
                       'AssertionConsumerService' => 'https://ma.ellak.gr',
                       // The entity ID of the IdP this should SP should contact.
                       // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
                       //'discoURL' => NULL,
                        'name' => array( //required for ACS
                                       'en' => 'SSO LOCAL',
                                        'el' => 'SSO LOCAL Μονάδες Αριστείας Ανοιχτού Λογισμικού',
                                        ),
                       'description' => array(
                                       'en' => 'SSO LOCAL',
                                        'el' => 'SSO LOCAL Μονάδες Αριστείας Ανοιχτού Λογισμικού',
                                       ),
                       'url' => array(
                                      'en' => 'https://ma.ellak.gr',
                                      'el' => 'https://ma.ellak.gr',
                                      ),
                       'OrganizationName' => array(
                                                   'en' => 'SSO LOCAL',
                                                   'el' => 'SSO LOCAL',
                                                   ),
                       'OrganizationDisplayName' => array(
                                                          'en' => 'SSO LOCAL',
                                                          'el' => 'SSO LOCAL',
                                                          ),
                       'OrganizationURL' => array(
                                                  'en' => 'https://ma.ellak.gr',
                                                  'el' => 'https://ma.ellak.gr',
                                                  ),
                       'attributes' => array(
                                             //'eduPersonPrincipalName',
                                             'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
                                             //'eduPersonEntitlement',
                                             'urn:oid:1.3.6.1.4.1.5923.1.1.1.7',
                                             //'mail',
                                             'urn:oid:0.9.2342.19200300.100.1.3',
                                             //'givenName',
                                             'urn:oid:2.5.4.42',
                                             //'sn',
                                             'urn:oid:2.5.4.4',
                                             ),
                       'attributes.required' => array(
                                                      //'eduPersonPrincipalName',
                                                      'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
                                                      'urn:oid:0.9.2342.19200300.100.1.3',
                                                      ),
                       'attributes.NameFormat' => 'urn:mace:shibboleth:1.0:attributeNamespace:uri',
                       'attributes.NameFormat' => 'urn:mace:shibboleth:1.0:attributeNamespace:uri',
                       'acs.Bindings' => array(
                                               'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                               'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
                                               ),
                       ),
    'aristeiasp' => array(
                       'saml:SP',
                       'privatekey' => '/var/simplesamlphp/cert/saml.pem',
                       'certificate' => '/var/simplesamlphp/cert/saml.crt',
                       'redirect.sign' => TRUE,
                       'redirect.validate' => FALSE,

                       'entityID' => 'https://ma.ellak.gr/simplesaml/module.php/saml/sp/metadata.php/aristeiasp',
		       'AssertionConsumerService' => 'http://ma.ellak.gr/',
                       // The entity ID of the IdP this should SP should contact.
                       // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
                       'idp' => NULL,

                       'discoURL' => NULL,
			'name' => array( //required for ACS
                                       'en' => 'FOSS Centers of Excellence',
					'el' => 'Μονάδες Αριστείας Ανοιχτού Λογισμικού',
                                        ),
                       'description' => array(
                                       'en' => 'FOSS Centers of Excellence',
					'el' => 'Μονάδες Αριστείας Ανοιχτού Λογισμικού',
                                       ),
                       'url' => array(
                                      'en' => 'https://ma.ellak.gr',
				      'el' => 'https://ma.ellak.gr',
                                      ),
                       'OrganizationName' => array(
                                                   'en' => 'Greek Research and Technology Network',
 						   'el' => 'Εθνικό Δίκτυο Έρευνας και Τεχνολογία',
                                                   ),
                       'OrganizationDisplayName' => array(
                                                          'en' => 'Greek Research and Technology Network',
							  'el' => 'Εθνικό Δίκτυο Έρευνας και Τεχνολογίας',
                                                          ),
                       'OrganizationURL' => array(
                                                  'en' => 'http://www.grnet.gr',
						  'el' => 'http://www.grnet.gr',
                                                  ),
                       'attributes' => array(
                                             //'eduPersonPrincipalName',
                                             'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
                                             //'eduPersonEntitlement',
                                             'urn:oid:1.3.6.1.4.1.5923.1.1.1.7',
                                             //'mail',
                                             'urn:oid:0.9.2342.19200300.100.1.3',
                                             //'givenName',
                                             'urn:oid:2.5.4.42',
                                             //'sn',
                                             'urn:oid:2.5.4.4',
                                             ),
                       'attributes.required' => array(
                                                      //'eduPersonPrincipalName',
						      'urn:oid:1.3.6.1.4.1.5923.1.1.1.10', 
                                                      'urn:oid:0.9.2342.19200300.100.1.3',
                                                      ),
                       'attributes.NameFormat' => 'urn:mace:shibboleth:1.0:attributeNamespace:uri',
                       'attributes.NameFormat' => 'urn:mace:shibboleth:1.0:attributeNamespace:uri',
                       'acs.Bindings' => array(
                                               'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                                               'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
                                               ),
                       ),
);
?>
