<?php
$config = array(
    'sets' => array(
        'gr' => array(
            'cron'      => array('hourly'),
            'sources'   => array(
                array(
                    'src' => 'http://aai.grnet.gr/grnet-metadata.xml',
                    'validateFingerprint' => '2C:D7:A6:0D:6F:0C:CB:A6:5B:FD:72:CC:E2:A1:8D:14:5C:16:A9:1C',
                ),
            ),
            'expireAfter'       => 60*60*24*4, // Maximum 4 days cache time.
            'outputDir'     => 'metadata/metarefresh-gr/',
            'outputFormat' => 'flatfile',
        ),
    ),
);
?>

