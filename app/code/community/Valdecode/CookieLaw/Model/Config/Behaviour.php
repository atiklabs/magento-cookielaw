<?php

/**
 * Copyright 2016 The Valdecode Cookie Law Compliance Authors. All rights reserved.
 * Use of this source code is governed by a MIT-style
 * license that can be found in the LICENSE.txt file.
 */
class Valdecode_CookieLaw_Model_Config_Behaviour
{
    public function toOptionArray()
    {
        return array(
            array('value' => 365, 'label' => 'Never show again'),
            array('value' => 1, 'label' => 'Hide for the rest of the day'),
            array('value' => 0, 'label' => 'Hide for the rest of the session')
        );
    }
}
