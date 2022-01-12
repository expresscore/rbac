<?php
/**
 * This file is part of the ExpressSoft package.
 *
 * (c) Marcin Stodulski <marcin.stodulski@devsprint.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace expresscore\rbac\entities;

enum LoginStatus
{
    case NotLogged;
    case Logged;
    case NeedSecondStep;
    case TokenIncorrect;
    case TokenExpired;
}
