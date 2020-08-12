<?php
/*  pageMenu By: hlaCk */

// Script example.php
$shortopts = "";
$shortopts .= "f:";  // Required value
$shortopts .= "v::"; // Optional value
$shortopts .= "abc"; // These options do not accept values

$longopts = array(
    "required:",     // Required value
    "optional::",    // Optional value
    "option",        // No value
    // "opt",           // No value
);

/**
 * data store
 */
class Arg
{
    const
        ARG_TRY_TRANSLATION = 0xA,
        ARG_DEFAULT_FLAG = 0xA,

        ARG_TRANSLATE = 0x1,
        ARG_DEFAULTS = 0x2,
        ARG_NO_TRANSLATE = 0x3,
        ARG_NO_DEFAULTS = 0x4,
        ARG_RAW = 0x5;

    public $data = [], $trans = [], $defaults = [];

    function __construct($data, $old = null)
    {
        $data = (array)$data;
        if ( is_array($data) ) {
            foreach ($data as $key => $value) {
                if ( $alias = $value["alias"] ?? "" ) {
                    $this->trans[ $key ] = $alias;
                }

                if ( ($default = $value["default"] ?? null) !== null ) {
                    $this->defaults[ $key ] = $default;
                }

                $value["name"] = $value["name"] ?? $key;

                $this->new($value);
            }
        } else {
            $this->data = (array)($old ?: $data);
        }
    }

    /**
     * $flags:
     *   - Arg::ARG_TRANSLATE:
     *       Add aliases.
     *   - Arg::ARG_DEFAULTS:
     *       Add default value.
     *   - Arg::ARG_RAW:
     *       Return raw arguments.
     *   - Arg::ARG_NO_TRANSLATE:
     *       Do not add aliases.
     *   - Arg::ARG_NO_DEFAULTS:
     *       Do not add default value.
     *       Do not add aliases.
     *   - Arg::ARG_TRY_TRANSLATION:
     *       Only Translation if exists.
     */
    public function all(int $flags = Arg::ARG_TRANSLATE | Arg::ARG_DEFAULTS)
    {
        $data = array_map(function ($a) {
            return $a['query'] ?? "";
        }, $this->data);
        $_data = getopt($this->__toString()/* , $data */);
        var_dump($_data);

        // print_r($this->__toString());
        // print_r($data);
        // print_r($this->data);
        // print_r($this);
        // exit;

        print_r($_data);
        print_r($argv);
        exit;
        if ( $flags & Arg::ARG_RAW ) return $_data;

        foreach ($_data as $optionName => $option) {
            $option = (array)$option;
            $alias = isset($option['alias']) ? trim($option['alias']) : false;

            if ( ($flags & Arg::ARG_DEFAULTS) || !($flags & Arg::ARG_NO_DEFAULTS) )
                $this->default(
                    $_data[ $optionName ] = ($_data[ $optionName ] ?? ["default" => ""]),
                    $optionName
                );

            if ( ($flags & Arg::ARG_TRANSLATE) || !($flags & Arg::ARG_NO_TRANSLATE) ) {
                if ( $alias ) {
                    $_data[ $alias ] = (isset($_data[ $alias ]) ? $_data[ $alias ] : $_data[ $optionName ]);
                }
            }

            if ( $flags & Arg::ARG_TRY_TRANSLATION ) {
                if ( isset($option['alias']) && ($alias = $option['alias']) ) {
                    $_data[ $alias ] = $_data[ $alias ] ?? ($_data[ $optionName ] ?? "");
                    if ( isset($_data[ $optionName ]) ) unset($_data[ $optionName ]);
                }
            }
        }

        // ----------------------------
        // echo basename(__FILE__), " ", __FUNCTION__, " ", __LINE__, " ", PHP_EOL;
        // var_dump($_data);
        // die(PHP_EOL . "DIE: " . __LINE__ . PHP_EOL);

        // ------------------

        print_r((array)$_data);
        exit;
        // print_r(__FUNCTION__);

        // die(11);
        return (array)$_data;
    }

    public function
    default(&$name = null, $optionName = "")
    {
        if ( $name ) {
            if ( is_array($name) ) {
                $name['default'] = isset($name['default']) ? $name['default'] : "";

                return $name['default'];
            } else {
                $name = [
                    "default" => ""
                ];
            }

            if ( isset($optionName) ) {
                return $this->defaults[ $optionName ] ?? "";
            }


            // ----------------------------
            echo "File: ", basename(__FILE__), "Method: ", __FUNCTION__, "Line: ", __LINE__, "", PHP_EOL;
            var_dump($name);
            die(PHP_EOL . "DIE: " . __LINE__ . PHP_EOL);

            // ------------------


            $trans1 = array_combine(array_values($this->trans), array_values($this->trans)) + $this->trans;
            print_r(__LINE__);
            print_r($trans1);
            print_r(__FUNCTION__);
            exit;
            $_key = isset($this->trans[ $name ]) ? $name : false;
            $_key = $_key ?: array_search($name, $this->trans);
            $_key = $_key !== false ? $_key : "";
            $_key = $this->trans[ $_key ] ?? $_key;
            return;
        }
    }

    public function new($name, $_is_required = true)
    {
        $name = is_array($name) ? $name : ["name" => $name];
        $_name = $name["name"];

        $getQuery = function ($_name, $_is_required) {
            $_arg = "{$_name}";
            if ( is_bool($_is_required) ) {
                $_is_required = boolval($_is_required);
            } else $_is_required = !$_is_required ? false : $_is_required;

            if ( count(explode("r", $_is_required)) ) {
                $_arg = "{$_arg}:";
            } else if ( count(explode("o", $_is_required)) ) {
                $_arg = "{$_arg}::";
            }
            return $_arg;
        };

        $_arg = $getQuery($_name, !!$_is_required);
        $this->data[] = [
                "name" => $_name,
                "query" => $_arg .
                    (isset($name["alias"]) ? $getQuery($name["alias"], !!$_is_required) : "")
            ] + $name;

        return $this;
    }

    public function __toString()
    {
        return implode('', array_map(function ($a) {
            return $a['query'] ?? "";
        }, $this->data));
    }

    public function short($short, $full)
    {
        $this->trans[ $short ] = $full;
        return $this;
    }

    public function __get($name)
    {
        $oid = null;
        // $current = getopt('', $this->all());
        var_dump(__LINE__, $this);
        exit;
        $trans = [];
        foreach ($this->trans as $key => $current) {
            if ( $key === $name )
                return $current[ $key ] ?? ($current[ $name ] ?? null);
        }

        var_dump($current, $name);
        // var_dump(getopt($this->data, [$name]));
        exit;
        return getopt($this->data, [$name]);
    }
}

// "required" => ":",     // Required value
// "optional" => "::",    // Optional value
// "option"   => "",        // No value

$_data = new Arg([
    "f" => [
        "alias" => "files",
        "default" => "",
    ],
    "o" => [
        "alias" => "os",
        "default" => "-",
    ],
]);

print_r($_data->all(/* Arg::ARG_TRY_TRANSLATION */));
echo PHP_EOL;
echo "~";
echo PHP_EOL;
// print_r($_data . "");
echo PHP_EOL;
// print_r($_data->all());
// print_r($_data);
exit;

$options = getopt(implode("", ["pages:", ""]), $longopts);
var_dump($options);
var_dump($argv);
exit;
var_dump($argv);
// var_dump(array_keys(get_defined_vars()));
exit;
/**
 *
 */
function rLine($prompts = '', $select = [], $default = null, $prompt_line = "Select from above or type anything else.")
{
    $all_prompts = "";
    foreach ((array)$prompts as $prompt) {
        $all_prompts .= "\n" . $prompt;
    }

    $all_selects = "";
    foreach ((array)$select as $key => $value) {
        if ( trim($key) === '0' ) {
            $all_selects .= "\n -- Default is `{$value}`";
        } else {
            $all_selects .= "\n -- Select [{$key}] for `{$value}`";
        }
    }

    $all_selects = rtrim($all_selects/*, ", "*/) . "\n";
    if ( $all_selects ) {
        $all_prompts = rtrim($all_prompts, ": ") . " \n{$all_selects}\n: ";
    }

    if ( $default ) {
        $all_prompts = rtrim($all_prompts, ": ") . " {$prompt_line} [{$default}]: ";
    }
    echo $all_prompts;

    $result = rtrim(fgets(STDIN), "\n");
    $result = trim($result);
    $result = $select[ $result ] ?? $result;
    return $result ?: ($default ?: "");
}

try {
    echo "\nCurrent Path: " . ($crntCWD = getcwd()) . "\\\n";
} catch (Exception | Error $e) {
    echo "\nCurrent Path: " . ($crntCWD = dirname(realpath(__DIR__))) . "\\\n";
}

$crntCWD = $crntCWD ?: realpath("./");

try {
    $iterator = new RecursiveCallbackFilterIterator(
        $dir_iterator = new RecursiveDirectoryIterator("./"),
        function ($f, $d) {
            return ($d = trim(ltrim($d, ".\\/"))) !== '.' && $d !== '..' && $d;
        }
    );

    $dirRead = iterator_to_array($iterator);
    $dirRead = array_map(function ($fSpl) {
        // var_dump(func_get_args());
        $fSplFilename = $fSpl->getFilename();
        $fileName = $fSpl->isDir() ? "+[{$fSplFilename}]" : "--{$fSplFilename}";
        return $fSplFilename;
        // return $fileName;
    }, $dirRead);

    print_r(
        sort($dirRead, SCANDIR_SORT_ASCENDING)
    );

    print_r($dirRead);
    print_r(scandir('./', SCANDIR_SORT_ASCENDING));
    print_r(scandir('./', SCANDIR_SORT_DESCENDING));
    exit;
    $dirRead = array_filter(iterator_to_array($iterator), function ($d) {
        $d = trim(ltrim($d, ".\\/"));
        return $d !== '.' && $d !== '..' && $d;
    });
    usort($dirRead, function ($f1, $f2) {
        return strcasecmp($f1->getBasename(), $f2->getBasename());
    });
    $dirs = array_filter($dirRead, function ($d) {
        return is_dir($d);
    });
    // usort($dirs, function($f1, $f2) { return strcasecmp($f1->getBasename(), $f2->getBasename()); });
    $files = array_filter($dirRead, function ($d) {
        return !is_dir($d);
    });
    // usort($files, function($f1, $f2) { return strcasecmp($f1->getBasename(), $f2->getBasename()); });
    print_r(
        array_walk(array_merge($dirs, $files), function ($f, $i) {
            echo $f->isDir() ? "Dir: " : "File: ", $f->getBasename(), "\n";
            return $f . "asd";
        })
    );
    exit;
    usort($array, function ($f, $f2) {
        // var_dump($f->getBasename());
        // var_dump($f2->getBasename());
        // var_dump(
        //   strcmp(
        //     strtolower(
        //       $f->getBasename()
        //     ),
        //     strtolower(
        //       $f2->getBasename()
        //     )
        //   ),
        //   strcmp(
        //     strtolower(
        //       $f2->getBasename()
        //     ),
        //     strtolower(
        //       $f->getBasename()
        //     )
        //   )
        // );
        // exit;
        // if($f->isDir() && $f2->isDir()) {
        // return strcmp($f2->getBasename(), $f->getBasename());
        // }
        $cmp = strcmp(strtolower($f->getBasename()), strtolower($f2->getBasename())) * (1);
        // echo $cmp, $f2->getBasename(), PHP_EOL;

        if ( $f2->isDir() ) {
            // if($f->isDir()) {
            return $cmp;
            // } else {
            // return 1;
            // }
        }
        if ( $f->isDir() ) {
            return 0;
        }

        // } else {
        // if($f->isDir()) {
        // return $cmp != 1 ? $cmp : 1;
        // }
        return $cmp * (-1);
        // }

        $result = $f2->isDir() ? 1 : $result;
        // ($f->isDir() ? ($up =  : );
        $result = $result > 1 ? 1 : $result;
        $result = $result < -1 ? -1 : $result;
        $result = $result * (-1);
        print_r($result . "\n");
        return $result;
    });
    // could use CHILD_FIRST if you so wish
    foreach ($array as $file) {
        $_file = $file;
        $file = trim(ltrim($file, ".\\/"));
        if ( !$file ) continue;

        echo " -- " . (is_dir($_file) ? "Dir: " : "File: ") . "", $file, "\n";
    }

    print_r(glob('{,.}*', GLOB_MARK));
    exit;
} catch (Exception | Error $e) {
    throw $e;

    var_dump($e);
}

// path underzpages to write
$storeFile = rLine("Enter Filename to save into.", ["./underzpages.json", "./_data/underzpages.json", "../_data/underzpages.json"], "_data/underzpages.json");
// path to dir of underzpages read
$readDir = rLine("Enter path that contain pages.", ["./", "./UnderZ/", "../UnderZ/"], "./UnderZ/");


// var_dump($readDir);
var_dump($storeFile);
var_dump($readDir);
exit;

$d = dir($readDir, SCANDIR_SORT_ASCENDING);
$pages = [];

while ( false !== ($page = $d->read()) )
    if ( is_file($readDir . $page) and $page != '.' and $page != '..' )
        $pages[] = ["name" => str_replace([".md", "-"], ["", "."], $page), "url" => str_replace([".md"], [""], $page)];

if ( !empty($pages) ) {
    file_put_contents($storeFile, json_encode($pages));
    echo "DONE!";
} else {
    echo "ERROR! No files";
}
