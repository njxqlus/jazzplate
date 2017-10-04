<?php
if (function_exists('acf_add_options_page'))
{
    acf_add_options_sub_page([
        'page_title'  => __('Additional', 'jazzweb'),
        'menu_slug'   => 'additional',
        'parent_slug' => 'options-general.php',
    ]);
}
if (function_exists('register_field_group')):

    register_field_group([
        'key'                   => 'group_551524ea3beef',
        'title'                 => __('Additional settings', 'jazzweb'),
        'fields'                => [
            [
                'key'               => 'field_551524ff630ee',
                'label'             => __('Favicon', 'jazzweb'),
                'name'              => 'favicon',
                'prefix'            => '',
                'type'              => 'image',
                'instructions'      => __('Only PNG image format.', 'jazzweb'),
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => 'favicon',
                    'id'    => 'favicon',
                ],
                'return_format'     => 'url',
                'preview_size'      => 'full',
                'library'           => 'all',
                'min_width'         => '',
                'min_height'        => '',
                'min_size'          => '',
                'max_width'         => '',
                'max_height'        => '',
                'max_size'          => '',
                'mime_types'        => 'png',
            ],
            [
                'key'               => 'field_55154eda2879b',
                'label'             => __('Additional code', 'jazzweb'),
                'name'              => 'additional_code',
                'prefix'            => '',
                'type'              => 'textarea',
                'instructions'      => __('Additional code for Yandex Metrika, Google Analytics and other. This code placed in footer, before <i>body</i> tag.', 'jazzweb'),
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => '',
                'placeholder'       => '',
                'maxlength'         => '',
                'rows'              => '',
                'new_lines'         => '',
                'readonly'          => 0,
                'disabled'          => 0,
            ],
            [
                'key'               => 'field_551553f79f7df',
                'label'             => __('404 page text', 'jazzweb'),
                'name'              => '404_page_text',
                'prefix'            => '',
                'type'              => 'wysiwyg',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => [
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ],
                'default_value'     => __('<div class="entry-title"><h1>Page not found</h1><br/></div>Sorry, page deleted or does not exist.', 'jazzweb'),
                'tabs'              => 'all',
                'toolbar'           => 'full',
                'media_upload'      => 1,
            ],
        ],
        'location'              => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'additional',
                ],
            ],
        ],
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'seamless',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
    ]);

endif;
