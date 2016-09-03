<?php

/**
 * Copyright 2016 The Valdecode Cookie Law Compliance Authors. All rights reserved.
 * Use of this source code is governed by a MIT-style
 * license that can be found in the LICENSE.txt file.
 */
class Valdecode_CookieLaw_Model_Config_Message
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label' => 'Default message'),
            array('value' => 'custom', 'label' => 'Custom message'),
        );
    }
}
