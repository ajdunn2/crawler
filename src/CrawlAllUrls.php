<?php

namespace Dmelearn\Crawler;

class CrawlAllUrls implements CrawlProfile
{
    public function shouldCrawl(Url $url): bool
    {
        return true;
    }
}
