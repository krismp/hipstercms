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

if ( ! function_exists('alert_info'))
{
    function alert_info($message)
    {
        return '<div class="alert alert-info alert-dismissable">
        	<i class="fa fa-info"></i>
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	'. $message .'
        </div>';
    }   
}

if ( ! function_exists('alert_danger'))
{
    function alert_danger($message)
    {
        return '<div class="alert alert-danger alert-dismissable">
        	<i class="fa fa-ban"></i>
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	'. $message .'
        </div>';
    }   
}

if ( ! function_exists('alert_warning'))
{
    function alert_warning($message)
    {
        return '<div class="alert alert-warning alert-dismissable">
        	<i class="fa fa-warning"></i>
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	'. $message .'
        </div>';
    }   
}

if ( ! function_exists('alert_success'))
{
    function alert_success($message)
    {
        return '<div class="alert alert-success alert-dismissable">
        	<i class="fa fa-check"></i>
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	'. $message .'
        </div>';
    }   
}