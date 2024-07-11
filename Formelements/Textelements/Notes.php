<?php
declare(strict_types=1);

namespace FrontendForms;

/*
 * Class for creating notes under an input element
 *
 * Created by Jürgen K.
 * https://github.com/juergenweb
 * File name: Notes.php
 * Created: 03.07.2022
 */

use ProcessWire\WireException;
use ProcessWire\WirePermissionException;

class Notes extends TextElements
{

    /**
     * @throws WireException
     * @throws WirePermissionException
     */
    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->setCSSClass('notesClass');
        if ($this->frontendforms['input_framework'] === 'pico2.json')
            $this->setTag('small');
    }

}
