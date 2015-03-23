<?php
return array(
	'service_manager' => array(
		'services' => array(),
    ),

    'controllers' => array(
        'invokables' => array(
            'market-index-controller'  => 'Market\Factory\IndexControllerFactory',
        ),
    ),

    'router' => array(
        'routes' => array(
            'market' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/market',
                    'defaults' => array(
                        'controller'    => 'market-index-controller',
                        'action'        => 'index',
                        'module'        => 'market',
                    ),
                ),
        		'may_terminate' => TRUE,
        		'child_routes' => array(
		        	'slash' => array(
		                'type'    => 'Literal',
		                'options' => array(
		                    'route'    => '/',
		                    'defaults' => array(
		                        'action' => 'index',
		                    ),
		                ),
		        	),
        		    'foo' => array(
		                'type'    => 'Segment',
		                'options' => array(
		                    'route'    => '/foo[/]',
		                    'defaults' => array(
		                        'action'        => 'foo',
		                    ),
		                ),
		        	),
        		    'view' => array(
		                'type'    => 'Literal',
		                'options' => array(
		                    'route'    => '/view',
		                    'defaults' => array(
		                        'controller' => 'market-view-controller',
		                        'action'     => 'index',
		        			    'category'   => 'free',
		                    ),
		                ),
		        		'may_terminate' => TRUE,
		        		'child_routes' => array(
		        			'main' => array(
		        				'type' => 'Segment',
		        				'options' => array(
		        					'route' => '/main[/:category]',
		        					'defaults' => array(
		        					    'category' => 'free',
		        					),
		        				    'constraints' => array(
		        				        'category' => '[a-zA-Z 0-9]*',
		        				    ),
		        				),
		        			),
		        			'item' => array(
		        				'type' => 'Segment',
		        				'options' => array(
		        					'route' => '/item[/:itemId][/:test]',
		        					'defaults' => array(
		                        		'action' => 'item',
		        					    'test' => 200,
		        					    'itemId' => 1,
		        					),
		        					'constraints' => array(
		        						'itemId' => '[0-9]*',
		        					),
		        				),
		        			),
		        		),
		        	),
		        	'post' => array(
		                'type'    => 'Segment',
		                'options' => array(
		                    'route'    => '/post[/]',
		                    'defaults' => array(
		                        'controller'    => 'market-post-controller',
		                        'action'        => 'index',
		                    ),
		                ),
	        	    ),
                    'delete' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/delete',
                            'defaults' => array(
                                'controller'    => 'market-delete-controller',
                                'action'        => 'index',
                            ),
                        ),
                        'may_terminate' => true,
                        'child_routes' => array(
                            'id' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '[/:id][/]',
                                    'constraints' => array(
                                        'id'     => '[0-9]*',
                                    ),
                                ),
                            ),
                            'confirm' => array(
                                'type'    => 'Segment',
                                'options' => array(
                                    'route'    => '/confirm',
                                    'defaults' => array(
                                        'controller'    => 'market-delete-controller',
                                        'action'        => 'deleteConfirm',
                                    ),
                                ),
                            ),
                        ),
                    ),
        		),
        	),
        ),
    ), 
    'view_manager' => array(
        'template_path_stack' => array(
            'Market' => __DIR__ . '/../view',
        ),
    ),
);
