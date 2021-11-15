<?php

/**
 * The current function purpose is to validate
 * some input and sending an error variable as return 
**/

namespace thecodeisbae\Validator;

final class Validator
{
    static protected $_validators = [
                                    'required',
                                    'text',
                                    'onlyText',
                                    'alpha',
                                    'number',
                                    'email'
    ];

    static protected $_errors = []; 
    static protected $_keys = []; 

    static function check(array $data) : array
    {
        self::$_errors = [];
        self::$_keys = array_keys($data);

        foreach (self::$_keys as $value)
        {
            $input = $_REQUEST[$value];
            switch($data[$value])
            {
                case 'text':
                    if(!self::isText($input))
                        self::$_errors[$value] = 'This field need to be a text type';
                break;

                case 'onlyText':
                    if(!self::isOnlyText($input))
                        self::$_errors[$value] = 'This field only accept alphabetics characters';
                break;
                
                case 'required':
                    if(!self::isRequired($input))
                        self::$_errors[$value] = 'This field is required';
                break;

                case 'number':
                    if(!self::isNumber($input))
                        self::$_errors[$value] = 'Only number are allowed';
                break;
                
                case 'email':
                    if(!self::isEmail($input))
                        self::$_errors[$value] = 'Please enter an valid email address';
                break;
            }
        }

        return self::$_errors;
    }

    function isRequired($value)
    {
        if(is_null($value))
            return 0;
        return 1;
    }

    function isNumber($value)
    {
        if(is_numeric($value))
            return 1;
        return 0;
    }

    function isText($value)
    {
        if(is_string($value))
            return 1;
        return 0;
    }

    function isOnlyText($value)
    {
        if(ctype_alpha($value))
            return 1;
        return 0;
    }

    function isEmail($value)
    {
        if(!filter_var($value, FILTER_VALIDATE_EMAIL))
            return 0;
        return 1;
    }

}