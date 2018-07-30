<?php

return [

    'static_site' => [
        'textfields' => ['metrik','seo_text'],
        'stringfields' => ['logo_text', 'copyright', 'page_title', 'seo_keywords', 'seo_description'],
        'images' => ['logo'],
        'groups' => [
            'phones' => [
                'stringfields' => ['phone']
            ],
            'adventages' => [
                'stringfields' => ['adv_title'],
                'textfields' => ['adv_text'],
                'images' => ['adv_img']
            ]
        ]
    ],

    'information_page' => [
        'groups' => [
            'inf_page' => [
                'stringfields' => ['seo_keywords', 'seo_description', 'page_title', 'page_name'],
                'textfields' => ['content'],
                'images'     => ['background'],
            ]
        ]
    ],

    'about_page' => [
        'textfields' => ['description'],
        'stringfields' => ['seo_keywords', 'seo_description', 'page_title', 'consult', 'works_time', 'page_name'],
        'images'     => ['background'],
        'groups' => [
            'staff' => [
                'stringfields' => ['name', 'position'],
                'textfields' => ['description'],
                'images'     => ['foto'],
            ]
        ]
    ],

    'main_menu' => [
        'groups' => [
            'menu' => [
                'stringfields' => ['menu_text', 'small_text']
            ]
        ]

    ],
    'catalog_block' => [
        'stringfields' => ['seo_keywords', 'seo_description'],
        'groups' => [
            'category_1' => [
                'stringfields' => ['seo_keywords', 'seo_description', 'page_title', 'category_name', 'category_description','price_name'],
                'images' => ['card_background'],
                'textfields'=> ['seo_text']
            ],
            'category_2' => [
                'owner' => 'category_1',
                'stringfields' => ['seo_keywords', 'seo_description', 'page_title', 'category_name', 'category_description'],
                'bool' => ['sale', 'new', 'individual'],
                'images' => ['card_background', 'card_hover'],
                'textfields' => ['seo_text']
            ],
            'product' => [
                'owner' => 'category_2',
                'stringfields' => [
                    'product_name',
                    'seo_keywords',
                    'seo_description',
                    'page_title',
                    'small_description',
                    'parent_link'
                ],
                'numbs' => ['product_sale', 'product_cost','course_id'],
                'textfields' => ['product_description','builder','why_apply'],
                'images' => ['product_base_photo']
            ],
            'product_image' => [
                'owner' => 'product',
                'images' => ['product']
            ],
            'product_auto' => [
                'owner' => 'product',
                'numbs' => ['auto']
            ],
            'soft_related' => [
                'owner' => 'product',
                'numbs' => ['soft']
            ],
            'product_related' => [
                'owner' => 'product',
                'numbs' => ['related']
            ],
            'product_features' => [
                'owner' => 'product',
                'stringfields' => ['feat_name', 'feat_value']
            ],
            'product_reviews' => [
                'owner' => 'product',
                'textfields' => ['review_text'],
                'stringfields' => ['person_name', 'person_position']
            ]
        ]
    ],
    'auto_block' => [
        'stringfields' => ['auto_title', 'auto_description', 'iiko_title', 'iiko_description'],
        'images' => ['auto_background', 'iiko_background'],
        'groups' => [
            'auto' => [
                'stringfields' => ['page_name', 'page_title', 'seo_description', 'seo_keywords'],
                'images' => ['background', 'card_background'],
                'textfields' => ['content', 'pre_cost_text', 'system_features', 'warranty', 'vozm', 'rassr', 'seo_text'],
                'numbs' => ['auto_cost', 'auto_sale', 'iiko', 'course_id', 'institution_id'],
                'bools' => ['is_iiko']
            ],
            'auto_adv' => [
                'owner' => 'auto',
                'images' => ['card'],
                'textfields' => ['card_text']
            ],
            'auto_related' => [
                'owner' => 'auto',
                'stringfields' => ['about_item'],
                'numbs' => ['product']
            ]
        ]
    ],
    'wipon' => [
        'stringfields' => ['page_name', 'page_title', 'seo_description', 'seo_keywords', 'auto_title', 'auto_description'],
        'images' => ['background', 'main_background'],
        'textfields' => ['content', 'pre_cost_text', 'system_features', 'warranty', 'vozm', 'rassr', 'seo_text'],
        'numbs' => ['auto_cost', 'auto_sale', 'course_id'],
        'groups' => [
            'wipon_adv' => [
                'images' => ['card'],
                'textfields' => ['card_text']
            ],
            'wipon_related' => [
                'stringfields' => ['about_item'],
                'numbs' => ['product']
            ]
        ]
    ],
    'accounting_block' => [
        'stringfields' => ['page_name', 'page_title', 'seo_keywords', 'seo_description', 'card_title', 'card_description'],
        'images' => ['background', 'work_process', 'card_background'],
        'textfields' => ['content', 'advantages', 'seo_text'],
        'groups' => [
            'acc_adv' => [
                'images' => ['card'],
                'textfields' => ['card_text']
            ],
            'employs' => [
                'images' => ['photo'],
                'stringfields' => ['emp_name', 'emp_prof'],
                'textfields' => ['emp_about']
            ],
            'tarif_category' => [
                'stringfields' => ['tarif_name']
            ],
            'tarif' => [
                'owner' => 'tarif_category',
                'stringfields' => ['tarif_name', 'page_name', 'page_title', 'seo_keywords', 'seo_description'],
                'images' => ['background'],
                'textfields' => ['content', 'seo_text'],
                'numbs' => ['tarif_cost']
            ]
        ]
    ],
    'clients_block' => [
        'stringfields' => ['page_title', 'seo_keywords', 'seo_description'],
        'textfields' => ['seo_text'],
        'groups' => [
            'client' => [
                'images' => ['background', 'letter', 'logo', 'rec_foto'],
                'stringfields' => ['page_name', 'rec_position', 'rec_fio', 'page_title', 'seo_keywords', 'seo_description', 'letter_link', 'small_descr'],
                'textfields' => ['content', 'rec_text'],
                'numbs' => ['city_name', 'institution_type']
            ],
            'client_related' => [
                'owner' => 'client',
                'stringfields' => ['about_item'],
                'numbs' => ['product']
            ]
        ]
    ],
    'clients_filter' => [
        'stringfields' => ['course'],
        'groups' => [
            'course'      => [
                'stringfields' => ['course_name','course']
            ],
            'institution' => [
                'stringfields' => ['page_name', 'page_title', 'seo_keywords', 'seo_description'],
                'numbs' => ['institution_count']
            ],
            'city'        => [
                'stringfields' => ['city_name']
            ],
        ]
    ],
    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images' => ['text_pict']
            ]
        ]
    ],
//===============================================
    'fidback' => [
        'groups' => [
            'question' => [
                'stringfields' => ['name', 'mail'],
                'textfields' => ['question'],
                'bools' => ['mailed']
            ],
            'calculation' => [
                'stringfields' => ['phone'],
                'bools' => ['mailed'],
            ],
            'subscribe' => [
                'stringfields' => ['mail'],
                'bools' => ['mailed']
            ],
            'order' => [
                'stringfields' => ['name', 'phone', 'mail','question','product'],
                'bools' => ['mailed']
            ],
            'partners'    => [
                'stringfields' => ['company_name', 'site_name', 'contact_phone', 'mail', 'city'],
                'textfields'   => ['question'],
                'bools'        => ['mailed']
            ],
            'supports' => [
                'stringfields' => ['name', 'mail'],
                'textfields' => ['question'],
                'bools' => ['mailed']
            ],
            'accounting' => [
                'stringfields' => ['name', 'mail'],
                'textfields' => ['comment'],
                'bools' => ['mailed']
            ],
        ]
    ]
];
