<?php

namespace Sirius\Translate\Facade;


use Sirius\Translate\FileLoader;

class Translator {

  /**
   * @var \Sirius\Translate\Translator|null
   */
  private static $instance=null;

  public static function __callStatic($method,$arguments){

    $force=array_pop( $arguments)??false;

    if (is_null( self::$instance) || $force===true){

    }
    // TODO
  }
}
