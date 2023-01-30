<?php

/**
 * Script to generate resource files from found available methods.
 *
 * Note: there are some inconsistencies within what's returned and what's documented.  You'll need
 * to manually review some generated classes to organize everything correctly.
 */

require('vendor/autoload.php');

$etsy = new \breakpoint\etsy\EtsyClient('', '');

$array = $etsy->apimethod->getMethodTable();

// define where to output files
$where = 'output/';

// make output directory and resource directory
@mkdir($where);
@mkdir($where.'/Resources');

// count
$methods_count = count($array);
$methods_added = 0;

$types = [];
for ($i = 0; $i <= count($array); $i++) {

    // somehow some are null?
    if (null === $array[$i]) {
        continue;
    }

    $types[$array[$i]->type][] = $array[$i];
}

foreach ($types as $type => $methods) {

$output =
"<?php
    
namespace breakpoint\\etsy\Resources;

use breakpoint\\etsy\Classes\EtsyObject;
use breakpoint\\etsy\Classes\EtsyResults;
use breakpoint\\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/".strtolower($type)."
 *
 * Class ".ucfirst($type)."
 * @package breakpoint\\etsy
 */
class ".ucfirst($type)." extends EtsyRequest {
";


    foreach ($methods as $method) {

        $methods_added++;

        if (in_array($method->http_method, ['PUT', 'PATCH', 'DELETE'])) {

            $output .= "
    /**
     * $method->description
     *
     * @param array \$parameters
     * @param array \$data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    public function $method->name(array \$parameters = [], array \$data = []) {
        return \$this->" . ($method->visibility == 'private' ? "oauth()->" : "") ."requestBool('".strtoupper($method->http_method)."','$method->uri', \$parameters, \$data);
    }
";

        } else {

            $output .= "
    /**
     * $method->description
     *
     * @param array \$parameters
     * @return ".(strpos($method->description, 'by id') || strtoupper($method->http_method) == 'POST' ? 'EtsyObject' : 'EtsyResults')."|ResponseInterface
     * @throws \Exception
     */
    public function " . $method->name . "(array \$parameters = []) {
        return \$this->" . ($method->visibility == 'private' ? "oauth()->" : "") .(strpos($method->description, 'by id') || strtoupper($method->http_method) == 'POST' ? 'requestObject' : 'requestCollection')."('".strtoupper($method->http_method)."', '$method->uri', \$parameters);
    }
";
        }
    }

$output.= "
}";

    // write to file
    file_put_contents($where."Resources/$type.php", $output);
}

echo 'Added '.$methods_added.' of '.$methods_count.' methods found.'.PHP_EOL;

$unique_types = array_unique(array_keys($types));
sort($unique_types);

$types_string = "";
$resources_string = "";
foreach ($unique_types as $type) {
    $types_string.=" * @property \breakpoint\\etsy\Resources\\".$type." ".strtolower($type).PHP_EOL;
    $resources_string.=" '".strtolower($type)."' => \breakpoint\\etsy\Resources\\$type::class,".PHP_EOL;
}

// write types and resources file
file_put_contents($where."types.txt", $types_string);
file_put_contents($where."resources.txt", $resources_string);