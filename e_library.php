<?php
class mentions_library
{

	function config()
	{
		$libraries['momentjs'] = [
			// Only used in administrative UI of Libraries API.
			'name'              => 'Moment.js',
			'vendor_url'        => 'https://github.com/moment/moment/',
			'download_url'      => 'http://momentjs.com/downloads/moment.js',
			'library_path'      => '{e_PLUGIN}livetime/js/libs/moment/',
			'version_arguments' => [
				'file'    => 'dist/jquery.caret.js',
				'pattern' => '/@version\s(\d+\.\d+\.\d+)/',
				'lines'   => 25,
			],

			'files' => [

				'js' => [
					'dist/jquery.caret.js' => [
						'type' => 'footer'
					]
				]
			],

			'variants' => [
				'minified' => [
					'js' => [
						'dist/jquery.caret.min.js' => [
							'type' => 'footer'
						]

					]
				]
			]

		];

		$libraries['livestamp'] = [
			// Only used in administrative UI of Libraries API.
			'name'              => 'Livestamp.js',
			'vendor_url'        => 'http://mattbradley.github.io/livestampjs/',
			'download_url'      => 'https://raw.github.com/mattbradley/livestampjs/1.1.2/livestamp.min.js',
			'library_path'      => '{e_PLUGIN}livetime/js/ichord.atwho/',
			'version_arguments' => [
				'file'    => 'dist/js/jquery.atwho.js',
				//  * at.js - 1.5.4
				'pattern' => '/.*(\d+\.\d+\.\d+)/',
				'lines'   => 6,
			],

		    'files' => [
			    'css' => [
				    'dist/css/jquery.atwho.css' => [
					    'zone' => 2
				    ]
			    ],

		    	'js' => [
		    		'dist/js/jquery.atwho.js' => [
					    'type' => 'footer'
				    ]
			    ],


		    ],

		    'variants' => [
		    	'minified' => [
		    		'css' => [
		    			'dist/css/jquery.atwho.min.css' => [
						    'zone' => 2
					    ]
				    ],
			        'js' => [
			        	'dist/js/jquery.atwho.min.js' => [
					        'type' => 'footer'
				        ]
			        ]
			    ]
		    ]

		];



		return $libraries;
	}

}
