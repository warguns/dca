<?php

namespace UMA\DCA;

interface ConverterInterface
{
    /**
     * Converts the given amount of Dollars to Bitcoin
     * at the current exchange rate.
     */
    public function USDBTC(Dollar $dollar): Bitcoin;
}
