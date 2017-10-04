<?php
if (is_singular())
{
    if (have_posts())
    {
        while (have_posts())
        {
            the_post();
            bladerunner('views.single');
        }
    }
}
