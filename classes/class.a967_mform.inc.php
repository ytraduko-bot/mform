<?php
/*
class.a967_mform.inc.php

@copyright Copyright (c) 2012 by Doerr Softwaredevelopment
@author mail[at]joachim-doerr[dot]com Joachim Doerr

@package redaxo4
@version 2.1.2
*/

// MFROM BASE CLASS
////////////////////////////////////////////////////////////////////////////////
class a967_mform extends a967_getmformArray
{
  /**/
  // define defaults
  /**/
  
  var $strStyle; // use later
  
  
  /**/
  // generate element array - add fields
  /**/
  
  function show_mform()
  {
    /*
    init parse class
    */
    $objOutput = new a967_parsemform();
    
    /*
    parce output through array
    */
    return $objOutput->parse_mform($this->getArray());
  }
}