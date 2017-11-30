<?php
class BasicIterator extends IteratorIterator // is php spl class
{

    public function __construct($pathToFile)
    {
        // Call the parent constructor with an SplFileObject (also Traversable) for the given path.
        parent::__construct(new SplFileObject($pathToFile, 'r'));

        // These set up the inner SplFileObject's properties to process CSV.
        $file = $this->getInnerIterator();
        $file->setFlags(SplFileObject::READ_CSV);
        $file->setCsvControl(',', '"', "\\");
    }
}

class FilterRows extends FilterIterator
{
    public function accept()
    {
        $current = $this->getInnerIterator()->current();
        if (count($current) == 1) {
            return false;
        }
        return true;
    }
}

$filePath = './data.csv';
$iterator = new BasicIterator($filePath);
$iterator = new FilterRows($iterator);

foreach ($iterator as $i => $row) {
    var_dump($row);
}
