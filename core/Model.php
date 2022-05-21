<?php

/**User: TheCodeholic ...*/
namespace app\core;


/**
 * Class Model
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\core;

 */

abstract class Model
{
   public const RULE_REQUIRED = "required";
   public const RULE_EMAIL = "email";
   public const RULE_MIN = "min";
   public const RULE_MAX = "max";
   public const RULE_MATCH = "match"; 

   public function loadData($data) 
   {
      foreach ( $data as $key => $value ) {
         if( property_exists( $this , $key ) ) {
            //  return $this->{$key};
            $this->{$key} = $value;
         }
      }
   }

   abstract public function rules();

   public array $errors = [];

   public function validate() 
   {
        foreach($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach($rules as $rule) {
                $ruleName = $rule;
                if(!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }
                if($ruleName === self::RULE_REQUIRED && $value) {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }
            }
        }

        return empty($this->errors);
   }

   public function addError( string $attribute , string $rule)
   {
       $message = $this->errorMasseges()[$rule] ?? "";
       $this->errors[$attribute][] = $message ;
   }

   public function errorMasseges()
   {
       return [
           self::RULE_REQUIRED => "This field is required",
           self::RULE_EMAIL => "This field must be valid email addres",
           self::RULE_MIN => "Min length of this field must be {min}",
           self::RULE_MAX => "Max length of this field must be {max}",
           self::RULE_MATCH => "This field must be the same as {match}",
       ];
   }
}