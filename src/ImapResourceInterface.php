<?php

declare(strict_types=1);

namespace Ddeboer\Imap;

interface ImapResourceInterface
{
    /**
     * Get IMAP resource stream.
     *
     * @return resource
     */
    public function getStream();

    /**
     * Clear last mailbox used cache.
     * @return void
     */
    public function clearLastMailboxUsedCache(): void;
}
