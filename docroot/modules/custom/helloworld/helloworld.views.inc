<?php

/**
 * @file
 * Contains helloworld\helloworld.views.inc..
 * Provide a custom views field data that isn't tied to any other module. */


/**
* Implements hook_views_data().
*/
function helloworld_views_data() {

    $data['views']['table']['group'] = t('Custom Global');
    $data['views']['table']['join'] = [
      // #global is a special flag which allows a table to appear all the time.
      '#global' => [],
    ];

    $data['views']['node_type'] = [
        'title' => t('Node type'),
        'help' => t('Describe the type of a node'),
        'field' => [
            'id' => 'node_type',
        ],
    ];

    $data['views']['img_src_field'] = [
        'title' => t('Img src field'),
        'help' => t('My awesome custom views field plugin.'),
        'field' => [
            'id' => 'img_src_field',
        ],
    ];

    $data['ex_agoda_collection']['table']['group'] = t('Agoda Collection'); 
    $data['ex_agoda_collection']['table']['base'] = array(
        'title' => t('Agoda Collection'),
        'help' => t('A collection of holels from Agoda Affiliate Service.'),
    );
    
    $data['ex_agoda_collection']['id'] = array(
        'title' => t('id'),
        'help' => t('Internal row id'),
        'field' => [
            'id' => 'numeric',
        ],
    );
     
    // name field
    $data['ex_agoda_collection']['hotel_name'] = array(
        'title' => t('Hotel Name'),
        'help' => t('Name of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['addressline1'] = array(
        'title' => t('Address'),
        'help' => t('Address of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['city'] = array(
        'title' => t('City'),
        'help' => t('City of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['state'] = array(
        'title' => t('State'),
        'help' => t('State of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['zipcode'] = array(
        'title' => t('Zipcode'),
        'help' => t('Zipcode of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['country'] = array(
        'title' => t('Country'),
        'help' => t('Country of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['latitude'] = array(
        'title' => t('Latitude'),
        'help' => t('Latitude of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['longitude'] = array(
        'title' => t('Longitude'),
        'help' => t('Longitude of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['photo1'] = array(
        'title' => t('Image'),
        'help' => t('Photo of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );

    $data['ex_agoda_collection']['overview'] = array(
        'title' => t('Overview'),
        'help' => t('Overview of the hotel'),
        'field' => [
            'id' => 'standard',
        ],
    );
    // $data['agoda_collection']['table']['group'] = t('Agoda Collection');
    // $data['agoda_collection']['table']['base'] = [
    //     'title' => t('Agoda Collection'),
    //     'help' => t('A collection of holels from Agoda Affiliate Service.'),
    //     'query_id' => 'agoda',
    // ];
    
    return $data;
}
