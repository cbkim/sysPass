<?php
/**
 * sysPass
 *
 * @author    nuxsmin
 * @link      http://syspass.org
 * @copyright 2012-2015 Rubén Domínguez nuxsmin@$syspass.org
 *
 * This file is part of sysPass.
 *
 * sysPass is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * sysPass is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace SP\Storage;

/**
 * Class QueryData
 *
 * @package SP\Storage
 */
class QueryData
{
    /**
     * @var array
     */
    protected $_data = array();
    /**
     * @var string
     */
    protected $_query = '';

    /**
     * @param $value
     * @param $name
     */
    public function addParam($value, $name = null)
    {
        $this->_data[$name] = $value;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->_data;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->_query;
    }

    /**
     * @param $query
     */
    public function setQuery($query)
    {
        $this->_query = $query;
    }
}