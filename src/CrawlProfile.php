<?php

namespace Dmelearn\Crawler;

interface CrawlProfile
{
    /**
     * Determine if the given url should be crawled.
     *
     * @param \Dmelearn\Crawler\Url $url
     *
     * @return bool
     */
    public function shouldCrawl(Url $url): bool;
}
