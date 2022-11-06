<?php

namespace Nick44\UserAgent;

interface UserAgentClientServiceInterface
{
    public function parse(): void;

    public function getBrowser(): string;

    public function getOS(): string;
}
