<?php

class jazzweb_field {

    private $view_path = 'functions.hooks.fields.';

    /**
     * Send params to view
     * @param $view
     * @param $params
     */
    private function view($view, $params)
    {
        bladerunner($this->view_path . $view, $params);
    }

    /**
     * Return field's name with checked type (subfield, option etc)
     * @since 2.0.0
     * @param string $name Name of field
     * @return bool|mixed|null
     */
    public function get($name)
    {
        if (get_sub_field($name) !== false)
        {
            return get_sub_field($name);
        } elseif (!is_null(get_field($name)))
        {
            return get_field($name);
        } elseif (get_sub_field($name, 'option') !== false)
        {
            return get_sub_field($name, 'option');
        } else
        {
            return get_field($name, 'option');
        }
    }

    /**
     * Echo field
     * @param string $name Name of field
     */
    public function the($name)
    {
        echo $this->get($name);
    }

    /**
     * Echo image with parameters by ID
     * @since 3.0
     * @param string $name Name of field
     * @param string $size Size of image. Use registered size (thumbnail, medium etc) or array(150,150)
     * @param bool $link Use link to full image
     */
    public function image($name = '', $size = 'thumbnail', $link = true)
    {
        $field = $this->get($name);
        if ($field) $this->view('image', compact('link', 'field', 'name', 'size'));
    }

    /**
     * Echo text
     * @since 2.0.0
     * @param string $name - Name of field
     * @param bool $paragraph - Use paragraph
     */
    public function text($name = '', $paragraph = true)
    {
        $field = $this->get($name);
        if ($field) $this->view('text', compact('paragraph', 'name', 'field'));
    }

    /**
     * Echo gallery images
     * @since 2.0.0.1
     * @version 1.1
     * @param string $name - Name of gallery field
     * @param string $size - Size of image. Use registered size (thumbnail, medium etc) or array(150,150)
     * @param bool $link - Use link to full size image
     * @param bool $caption - Echo image caption
     */
    public function gallery($name = '', $size = 'thumbnail', $link = true, $caption = false)
    {
        $fields = $this->get($name);
        if ($fields) $this->view('gallery', compact('fields', 'size', 'link', 'caption'));
    }
}
