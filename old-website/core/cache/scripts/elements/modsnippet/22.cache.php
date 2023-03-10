<?php  return 'function elements_modsnippet_22($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Quip
 *
 * A simple comments component.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @name Quip
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
/** @var Quip $quip */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));

$controller = $quip->loadController(\'Thread\');
$output = $controller->run($scriptProperties);
return $output;
}
';