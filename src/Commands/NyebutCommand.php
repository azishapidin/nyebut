<?php

namespace Azishapidin\Nyebut\Commands;

use Illuminate\Console\Command;
use Azishapidin\Nyebut\Nyebut;

class NyebutCommand extends Command
{
    protected $signature = 'nyebut {number}';
    protected $description = 'Command untuk menyebutkan angka menjadi teks, contoh jika parameternya 100 maka library ini akan return string seratus';

    public function handle()
    {
        $number = $this->argument('number');

        $this->info(Nyebut::toText($number));
    }
}
