<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('show_error_field'))
{
    function show_error_field($entity)
    {
        return form_error($entity, '<span class="text-danger"> <i class="fa fa-times-circle-o"></i>&nbsp;', '</span>');
    }   
}

if ( ! function_exists('has_error_class'))
{
    function has_error_class($entity)
    {
        return form_error($entity) ? 'has-error' : '';
    }   
}