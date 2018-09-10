<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\QuickOrderExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QuickOrderProductAdditionalDataTransfer;

interface QuickOrderProductAdditionalDataTransferExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands provided QuickOrderProductAdditionalDataTransfer with additional data.
     * - Will be executed on product searching at quick order page.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\QuickOrderProductAdditionalDataTransfer $quickOrderProductAdditionalDataTransfer
     *
     * @return void
     */
    public function expand(QuickOrderProductAdditionalDataTransfer $quickOrderProductAdditionalDataTransfer): void;
}
