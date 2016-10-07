<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Progama\Model\Som;

use Zend\Db\TableGateway\TableGateway;
use Base\Model\AbstractRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class SomRepository extends AbstractRepository
{

    /**
     * __construct Factory Model
     *
     * @return __construct
     */
    public function __construct(TableGateway $tableGateway)
    {
        // Configurações iniciais do Factory Repository
        $this->tableGateway=$tableGateway;
    }


}

