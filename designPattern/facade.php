<?php
class cpu{
    public function freeze()
    {
        # code...
    }
    public function jump()
    {
        # code...
    }
    public function execute()
    {
        # code...
    }
}

class memory{
    public function load()
    {
        # code...
    }
}

class rom{
    public function read()
    {
        # code...
    }
    public function write()
    {
        # code...
    }
}

class computerFacade{
    private cpu $processor;
    private memory $ram;
    private rom $ssd;

    public function __construct(){
        $this->processor = new cpu();
        $this->ram = new memory();
        $this->ssd = new rom();
    }

    public function start()
    {
        $this->processor->freeze();
        $this->ram->load();
        $this->ssd->read();
        $this->ssd->write();
        $this->processor->jump();
        $this->processor->execute();

    }
}

class user{
    public function __construct(computerFacade $pc)
    {
        $this->pc->start();
    }
}

$xenon = new user(new computerFacade());


?>