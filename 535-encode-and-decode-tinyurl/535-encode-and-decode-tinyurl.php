class Codec

{

    /** MEMORY HASH TABLE */

    private $_hashTables = [];

    /**

     * Encodes a URL to a shortened URL.

     * @param String $longUrl

     * @return String

     */

    function encode($longUrl)

    {

        $_hash = random_int(0, 10000);

        $this->_hashTables[$_hash] = $longUrl;

        return $_hash;

    }



    /**

     * Decodes a shortened URL to its original URL.

     * @param String $shortUrl

     * @return String

     */

    function decode($shortUrl)

    {

        return $this->_hashTables[$shortUrl];

    }

}

/**
 * Your Codec object will be instantiated and called as such:
 * $obj = Codec();
 * $s = $obj->encode($longUrl);
 * $ans = $obj->decode($s);
 */