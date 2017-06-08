<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductLabel\Storage;

interface LabelDictionaryReaderInterface
{

    /**
     * @param int[] $idsProductLabel
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\ProductLabelStorageProjectionTransfer[]
     */
    public function findSortedLabelsByIdsProductLabel(array $idsProductLabel, $localeName);

}
