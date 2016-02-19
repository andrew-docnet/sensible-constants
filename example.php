<?php
namespace Docnet;

use Docnet\SensibleConstants\Boolean as SensibleBoolean;
use Docnet\SensibleConstants\Integer as SensibleInteger;
use Docnet\SensibleConstants\String as SensibleString;

// some basic maths
if ((SensibleInteger::ONE + SensibleInteger::ONE_HUNDRED_THOUSAND) != SensibleInteger::ONE_HUNDRED_THOUSAND_ONE) {
   echo SensibleString::ERROR;
} else {
   echo SensibleString::SUCCESS;
}

// boolean
if (SensibleBoolean::TRUE) {
   echo SensibleString::SUCCESS;
}

// risky
if (SensibleBoolean::MEH) {
   // better account for both, just in case
   echo SensibleString::ERROR .' '. SensibleString::SUCCESS;
}