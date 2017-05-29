<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductLabel;

use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Spryker\Client\ProductLabel\ProductLabelFactory getFactory()
 */
class ProductLabelClient extends AbstractClient implements ProductLabelClientInterface
{

    /**
     * @api
     *
     * @param int $idProductAbstract
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\ProductLabelStorageProjectionTransfer[]
     */
    public function getLabelsForAbstractProduct($idProductAbstract, $localeName)
    {
        return $this
            ->getFactory()
            ->createAbstractProductRelationReader()
            ->getLabelsForAbstractProduct($idProductAbstract, $localeName);
    }

}