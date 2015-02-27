<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('list_all_controllers_except'))
{
    function list_all_controllers_except($except = array())
    {
        $controllers = array();

        foreach(glob(APPPATH . 'controllers/*' . EXT) as $controller)
        {
            $controller = basename($controller, EXT);

            if (!in_array($controller, $except))
            {
                $controllers[] = $controller;
            }
        }

        return $controllers;
    }
}

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

if ( ! function_exists('action_buttons'))
{
    function action_buttons($entity)
    {
        $CI =& get_instance();

        return '<div class="btn-group">
                    <a href="'.site_url($CI->router->fetch_class() . '/edit/' . $entity).'" class="btn btn-default"><i class="fa fa-edit"></i></a>
                    <a href="'.site_url($CI->router->fetch_class() . '/delete/' . $entity).'" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                </div>';
    }   
}

if ( ! function_exists('load_page_css'))
{
    function load_page_css()
    {
        $CI =& get_instance();

        $filename = 'admin/' . $CI->router->fetch_class() . '/' . $CI->router->fetch_method() . '.css';

        if (file_exists(APPPATH . 'views/' . $filename . '.php'))
        {
            return $CI->load->view($filename.'.php');
        }

        return null;
    }   
}

if ( ! function_exists('load_page_js'))
{
    function load_page_js()
    {
        $CI =& get_instance();

        $filename = 'admin/' . $CI->router->fetch_class() . '/' . $CI->router->fetch_method() . '.js';

        if (file_exists(APPPATH . 'views/' . $filename . '.php'))
        {
            return $CI->load->view($filename.'.php');
        }

        return null;
    }   
}

if ( ! function_exists('time_elapsed_string'))
{
    function time_elapsed_string($datetime, $full = false) {
         $today = time();    
         $createdday= strtotime($datetime); 
         $datediff = abs($today - $createdday);  
         $difftext="";  
         $years = floor($datediff / (365*60*60*24));  
         $months = floor(($datediff - $years * 365*60*60*24) / (30*60*60*24));  
         $days = floor(($datediff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));  
         $hours= floor($datediff/3600);  
         $minutes= floor($datediff/60);  
         $seconds= floor($datediff);  
         //year checker  
         if($difftext=="")  
         {  
           if($years>1)  
            $difftext=$years." years ago";  
           elseif($years==1)  
            $difftext=$years." year ago";  
         }  
         //month checker  
         if($difftext=="")  
         {  
            if($months>1)  
            $difftext=$months." months ago";  
            elseif($months==1)  
            $difftext=$months." month ago";  
         }  
         //month checker  
         if($difftext=="")  
         {  
            if($days>1)  
            $difftext=$days." days ago";  
            elseif($days==1)  
            $difftext=$days." day ago";  
         }  
         //hour checker  
         if($difftext=="")  
         {  
            if($hours>1)  
            $difftext=$hours." hours ago";  
            elseif($hours==1)  
            $difftext=$hours." hour ago";  
         }  
         //minutes checker  
         if($difftext=="")  
         {  
            if($minutes>1)  
            $difftext=$minutes." minutes ago";  
            elseif($minutes==1)  
            $difftext=$minutes." minute ago";  
         }  
         //seconds checker  
         if($difftext=="")  
         {  
            if($seconds>1)  
            $difftext=$seconds." seconds ago";  
            elseif($seconds==1)  
            $difftext=$seconds." second ago";  
         }  
         return $difftext;  
    }
}