<?php

/*
 * This file is part of the yuki package.
 * Copyright (c) 2011 olamedia <olamedia@gmail.com>
 *
 * This source code is release under the MIT License.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * yHtmlTagList
 *
 * @package yuki
 * @subpackage html
 * @author olamedia
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @version SVN: $Id: yHtmlTagList.php 1620 2011-03-12 01:46:36Z olamedia@gmail.com $
 */
class yHtmlTagList{
    public $childNodes = array();
    public function hasChildNodes(){
        return!!count($this->childNodes);
    }
    public function appendChild($child){
        $this->childNodes[] = $child;
        return $this;
    }
    public function __toString(){
        return implode("\n", $this->childNodes);
    }
}

