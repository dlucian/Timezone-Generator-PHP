PHP Timezone Generator
======================

This PHP script generates an uniform &lt;select&gt; HTML element with all the cities/countries ordered by UTC offset, so that users looking for their timezone can easily find their city.

It retrieves the Standard UTC offset, without observing DST changes so that users can look for the UTC offset that they're used to.

Usage
-----

    php ./generate.php

Output
------

The tool retrieves all available timezones as configured on your operating system, formats it as HTML and saves is locally in timezone_select.html

Generated <select> timezone selector contains all the important cities in the world, grouped together by timezone, to make it as easy as possible for the user to find his timezone.

The content of the generated file is something like this:

If you're in a hurry and want to directly get the generated output, copy/paste it from the [Timezone Select gist snippet](https://gist.github.com/dlucian/5752015 "Timezone HTML Select Snippet").

    <select name="timezone" id="timezone">
        <optgroup label="UTC -11:00">
            <option value="Pacific/Midway">UTC -11:00 Midway</option>
            <option value="Pacific/Niue">UTC -11:00 Niue</option>
            <option value="Pacific/Pago_Pago">UTC -11:00 Pago_Pago</option>
        </optgroup>
        <optgroup label="UTC -10:00">
            <option value="America/Adak">UTC -10:00 Adak</option>
            <option value="Pacific/Honolulu">UTC -10:00 Honolulu</option>
            <option value="Pacific/Johnston">UTC -10:00 Johnston</option>
            <option value="Pacific/Rarotonga">UTC -10:00 Rarotonga</option>
            <option value="Pacific/Tahiti">UTC -10:00 Tahiti</option>
        </optgroup>
        . . . . . . . . . . . . . .
        <optgroup label="UTC +13:00">
            <option value="Pacific/Apia">UTC +13:00 Apia</option>
            <option value="Pacific/Enderbury">UTC +13:00 Enderbury</option>
            <option value="Pacific/Fakaofo">UTC +13:00 Fakaofo</option>
            <option value="Pacific/Tongatapu">UTC +13:00 Tongatapu</option>
        </optgroup>
        <optgroup label="UTC +14:00">
            <option value="Pacific/Kiritimati">UTC +14:00 Kiritimati</option>
        </optgroup>
    </select>

And finally, this is how this select control would render on a HTML page:

![Rendered timezone selector](http://i.imgur.com/8EoNipU.png)

License
-------

The Timezone-Generator-PHP License (MIT)

Copyright (c) 2013 Lucian Daniliuc

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.