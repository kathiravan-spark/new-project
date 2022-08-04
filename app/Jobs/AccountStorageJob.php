<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\AccountDetail;

class AccountStorageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $bank_id,$account_number,$confirmation_account_number,$source,$selected_type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($bank_id,$account_number,$confirmation_account_number,$source,$selected_type)
    {
        $this->bank_id=$bank_id;
        $this->account_number=$account_number;
        $this->confirmation_account_number=$confirmation_account_number;
        $this->source=$source;
        $this->selected_type=$selected_type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $bank_id=$this->bank_id;
        $account_number=$this->account_number;
        $confirmation_account_number=$this->confirmation_account_number;
        $source=$this->source;
        $selected_type=$this->selected_type;

        AccountDetail::insert([
            'bank_id'=> $bank_id,
            'user_id'=>'1',
            'bank_short_name'=>'hdfc',
            'account_number'=>$account_number,
            'confirmation_account_number'=>$confirmation_account_number,
            'bank_branch'=>'rty',
            'account_name'=>'rty',
            'source'=>$source,
            'account_type'=>$selected_type,
        ]);
    }
}
