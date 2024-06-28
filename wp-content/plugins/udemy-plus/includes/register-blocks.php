<?php

function up_register_blocks()
{
    $blocks = [
        ['name' => 'fancy-header'],
        [
            'name' => 'search-form',
            'options' => [
                'render_callback' => 'up_search_form_render_cb'
            ]
        ]
    ];

    foreach ($blocks as $block) {

        register_block_type(
            UP_PLUGIN_DIRECTORY . "public/build/blocks/src" . $block['name'],
            isset($block['options']) ? $block['options'] : []
        );
    }

}