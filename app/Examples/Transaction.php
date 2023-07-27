<?php

namespace App\Examples;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Transaction
{
    public function simpleTransaction()
    {
        DB::transaction(function () {
            $user = User::query()->create();
            UserInfo::query()->create(['user_id' => $user->id]);
        });
    }

    public function manualTransaction()
    {
        try {
            DB::beginTransaction();
            $user = User::query()->create();
            UserInfo::query()->create(['user_id' => $user->id]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
        }
    }
}
