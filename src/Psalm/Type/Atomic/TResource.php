<?php
namespace Psalm\Type\Atomic;

use Psalm\CodeLocation;
use Psalm\StatementsSource;

class TResource extends \Psalm\Type\Atomic
{
    public function __toString(): string
    {
        return 'resource';
    }

    public function getKey(bool $include_extra = true): string
    {
        return 'resource';
    }

    /**
     * @param  string|null   $namespace
     * @param  array<string> $aliased_classes
     * @param  string|null   $this_class
     * @param  int           $php_major_version
     * @param  int           $php_minor_version
     *
     */
    public function toPhpString(
        $namespace,
        array $aliased_classes,
        $this_class,
        $php_major_version,
        $php_minor_version
    ): ?string {
        return null;
    }

    public function canBeFullyExpressedInPhp(): bool
    {
        return false;
    }
}
