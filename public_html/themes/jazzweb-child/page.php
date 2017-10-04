<?php
if (is_page())
{
    if (have_posts())
    {
        while (have_posts())
        {
            the_post();
            bladerunner('views.page');
        }
    }
}
