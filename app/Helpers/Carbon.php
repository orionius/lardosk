<?php
/**
 * Carbon helper
 *
 * @param $time
 * @param $tz
 *
 * @return Carbon\Carbon
 */
function carbon($time = null, $tz = null)
{
    return new \Carbon\Carbon($time, $tz);
}
function carbonFormatted($time = null, $tz = null)
{
    return carbon($time, $tz)->format('d-m-Y');
}


