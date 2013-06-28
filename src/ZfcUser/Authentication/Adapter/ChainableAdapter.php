<?php

namespace ZfcUser\Authentication\Adapter;

interface ChainableAdapter
{
    public function authenticate(AdapterChainEvent $e);
    public function getStorage();
}
