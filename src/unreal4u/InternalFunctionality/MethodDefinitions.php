<?php

declare(strict_types = 1);

namespace unreal4u\InternalFunctionality;

interface MethodDefinitions
{
    public static function apiMethod(): string;

    public static function bindToObjectType(): string;

    public static function requiresMultipartForm(): bool;
}
