<?php

namespace Goszowski\Stub;

class Stub
{
    protected $filename_prefix = null;
    protected $loaded_stub_content = null;

    public function load($stub_path)
    {
        $this->loaded_stub_content = file_get_contents($stub_path);
        return $this;
    }

    public function replace($search, $replace=null)
    {
        if(! is_array($search))
        {
            $search = [$search => $replace];
        }

        foreach($search as $key=>$val)
        {
            $this->loaded_stub_content = str_replace('%%'.$key.'%%', $val, $this->loaded_stub_content);
        }

        return $this;
    }

    public function store($store_path, $filename)
    {
        file_put_contents($store_path . '/' . $this->filename_prefix . $filename, $this->loaded_stub_content);
        return $this->reset();
    }

    protected function reset()
    {
        $this->filename_prefix = null;
        $this->loaded_stub_content = null;
        return $this;
    }
}
